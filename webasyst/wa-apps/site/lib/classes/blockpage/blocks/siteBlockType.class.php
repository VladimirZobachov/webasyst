<?php
/**
 * Block rendering happens in stages. First three stages are called once per page render and particular block data is
 *
 * 1) getGlobalJS() returns an array of strings - paths to JS files to be loaded once before all blocks of this type;
 *
 * 2) getGlobalJS() returns an array of strings - same for CSS files;
 *
 * 3) prerender() returns a string - HTML fragment to be inserted before all blocks of this type;
 *
 * 4) render() is called many times, once for each block of this type. Each call returns a string - custom HTML fragment.
 */
abstract class siteBlockType
{
    // used to override default template by custom from theme
    public $render_template_path = null;
    public $prerender_template_path = null;

    public $options;

    protected $view = null;

    public function __construct(array $options=[])
    {
        $this->options = $options;
    }

    protected function getTemplateDir()
    {
        $filename = waAutoload::getInstance()->get(get_class($this));
        if ($filename) {
            $filename = dirname($filename).'/templates';
            if (file_exists($filename) && is_dir($filename)) {
                return $filename.'/';
            }
        }
        return dirname(__FILE__).'/templates/';
    }

    /** Template to use in default render() implementation */
    protected function getDefaultRenderTemplatePath(bool $is_backend)
    {
        $filename = $this->getTemplateDir().substr(get_class($this), 4, -9).'.html';
        return $filename;
    }

    /** Override this in subclass to use in default prerender() implementation */
    protected function getDefaultPrerenderTemplatePath(bool $is_backend)
    {
        $filename = $this->getTemplateDir().substr(get_class($this), 4, -9).'.prerender.html';
        if (!file_exists($filename)) {
            return null;
        }
        return $filename;
    }

    /**
     * Override this to load static JS files
     * @return array list of file paths relative to framework root
     */
    public function getGlobalJS(bool $is_backend)
    {
        return [];
    }

    /**
     * Override this to load static CSS files
     * @return array list of file paths relative to framework root
     */
    public function getGlobalCSS(bool $is_backend)
    {
        return [];
    }

    /**
     * Returns HTML fragment to be inserted before all blocks of this type on current page
     * (once per page)
     *
     * Default implementation renders template provided by getDefaultPrerenderTemplatePath().
     * Override this to supply additional data to template.
     * @return string
     */
    public function prerender(bool $is_backend, array $tmpl_vars=[])
    {
        $template_path = $this->getPrerenderTemplatePath($is_backend);
        if (!$template_path) {
            return '';
        }

        $this->getView()->assign([
            'is_backend' => $is_backend,
            'block_type' => $this,
        ]);
        return $this->getView()->fetch($template_path);
    }

    /**
     * Returns HTML fragment of this block.
     * This gets called as many times as there are blocks of this type on page.
     *
     * Default implementation renders template provided by getDefaultRenderTemplatePath().
     * Override this to supply additional data to template.
     * @return string
     */
    public function render(siteBlockData $data, bool $is_backend, array $tmpl_vars=[])
    {
        $template_path = $this->getRenderTemplatePath($data, $is_backend, $tmpl_vars);
        if (!$template_path) {
            return '';
        }

        $this->getView()->assign($tmpl_vars + [
            'is_backend' => $is_backend,
            'block_type' => $this,
            'data' => $data,
        ]);
        return $this->getView()->fetch($template_path);
    }

    /**
     * Returns an empty siteBlockData object.
     * Override this to customize child blocks arrangement.
     */
    public function getEmptyBlockData()
    {
        return new siteBlockData($this);
    }

    /**
     * Returns a siteBlockData pre-populated with example content.
     *
     * Override this to customize what to add to a page
     * when user selects this block type in "Add Block" dialog.
     */
    public function getExampleBlockData()
    {
        return $this->getEmptyBlockData();
    }

    /** Config for block settings form that appears in right drawer
     * when user selects block of this type in editor. */
    public function getBlockSettingsFormConfig()
    {
        $config = $this->getRawBlockSettingsFormConfig();
        return $config;
    }

    /**
     * Override this to set up block settings form that appears in right drawer
     * when user selects block of this type in editor.
     */
    protected function getRawBlockSettingsFormConfig()
    {
        return [
            // human-readable block name
            'type' => $this->getTypeId(),
            'type_name' => get_class($this),

            // list of sections, each containing form components to render
            'sections' => [
                [
                    'name' => 'Example section',
                    'description' => 'Override getRawBlockSettingsFormConfig() in your BlockType class in order to change this form.',
                    'components' => [/*
                        [
                            // define type of component to render
                            'type' => 'padding',
                            // the rest is component-specific
                            'show_top' => true,
                            'show_right' => false,
                            'show_bottom' => true,
                            'show_left' => false,
                        ]
                    */],
                ],
            ],
        ];
    }

    /**
     * Reverse siteBlockType::factory().
     * Returns a string that can be converted to object of current siteBlockType.
     *
     * Must be overriden in block type subclasses from plugins and other apps.
     */
    public function getTypeId()
    {
        if (isset($this->options['type'])) {
            return $this->options['type'];
        }
        $class_name = get_class($this);
        if (preg_match('~^site(.*)BlockType$~', $class_name, $m)) {
            return 'site.'.$m[1];
        }
        throw new siteUnknownBlockTypeException($class_name);
    }

    /** @return waView */
    protected function getView()
    {
        if (!$this->view) {
            $this->view = wa('site')->getView();
        }
        return $this->view;
    }

    protected function getPrerenderTemplatePath(bool $is_backend)
    {
        if ($this->prerender_template_path && is_readable($this->prerender_template_path)) {
            return $this->prerender_template_path;
        }
        return $this->getDefaultPrerenderTemplatePath($is_backend);
    }

    protected function getRenderTemplatePath(siteBlockData $data, bool $is_backend, array $tmpl_vars)
    {
        if ($this->render_template_path && is_readable($this->render_template_path)) {
            return $this->render_template_path;
        }
        return $this->getDefaultRenderTemplatePath($is_backend);
    }

    public static function factory(string $type)
    {
        if (substr($type, 0, 5) === 'site.') {
            $class_type = substr($type, 5);
            $class_type = explode('.', $class_type, 2)[0];
            $class_name = "site{$class_type}BlockType";
            if (class_exists($class_name)) {
                return new $class_name([
                    'type' => $type,
                ]);
            }
        }

        // !!! TODO: event hook to pick up block types from plugins and apps
        throw new siteUnknownBlockTypeException($type);
    }
}