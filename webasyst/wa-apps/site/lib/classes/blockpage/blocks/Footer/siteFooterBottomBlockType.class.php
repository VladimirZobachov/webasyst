<?php
/**
 * Represents one or more cards of content.
 * Uses siteCardBlockType to store settings of individual cards.
 */
class siteFooterBottomBlockType extends siteBlockType
{
    public $elements = [
        'main' => 'site-block-footer',
        'wrapper' => 'site-block-footer-wrapper',
        ];

    public function __construct(array $options=[])
    {
        if (!isset($options['columns']) || !wa_is_int($options['columns'])) {
            $options['columns'] = ifset(ref(explode('.', ifset($options, 'type', ''), 3)), 2, 2);
        }
        $options['type'] = 'site.FooterBottom.'.$options['columns'];
        parent::__construct($options);
    }

    public function getExampleBlockData()
    {
        //construct columns START
        $hseq_column = (new siteVerticalSequenceBlockType())->getEmptyBlockData();
        $hseq_column->data['is_horizontal'] = true;
        $hseq_column->data['is_complex'] = 'no_complex';
        $column_left = (new siteFooterColumnBottomBlockType())->getExampleBlockData();
        $column_left->data['wrapper_props'] = ['justify-align' => "j-s"];
        $column_right = (new siteFooterColumnBottomBlockType())->getExampleBlockData();
        $column_right->data['wrapper_props'] = ['justify-align' => "j-end"];
        $menu_item = (new siteMenuItemBlockType())->getExampleBlockData();
        $paragraph = (new siteParagraphBlockType())->getExampleBlockData();
        $paragraph->data = ["html" => "Работает на основе Webasyst","block_props" => ["font-header" => "t-rgl","font" => "t-5","margin-top" => "m-t-5","margin-bottom" => "m-b-0"]];
        $menu_item->data["block_props"]["width"] = "cnt-w";
        
        $hseq_column->addChild($menu_item);
        $hseq_column->addChild($menu_item);
        $hseq_column->addChild($menu_item);
        $column_left->addChild($hseq_column);
        $hseq_column = (new siteVerticalSequenceBlockType())->getEmptyBlockData();
        $hseq_column->data['is_horizontal'] = true;
        $hseq_column->data['is_complex'] = 'no_complex';
        $hseq_column->addChild($paragraph);
        $column_right->addChild($hseq_column);
        //construct columns END

        //construct main block
        $hseq = (new siteVerticalSequenceBlockType())->getEmptyBlockData();
        $hseq->data['is_horizontal'] = true;
        $hseq->data['is_complex'] = 'only_columns';
        $hseq->data['indestructible'] = true;
        $column_count = ifset($this->options, 'columns', 2);
        $column_props = array();
        $column_props[$this->elements['main']] = ['padding-top' => "p-t-0", 'padding-bottom' => "p-b-0"];
        $column_props[$this->elements['wrapper']] = ['padding-top' => "p-t-10", 'padding-bottom' => "p-b-10", 'flex-align-vertical' => "x-c"];
        $result = $this->getEmptyBlockData();
        //$columns_arr = array();
        $hseq->addChild($column_left);
        $hseq->addChild($column_right);
        $result->addChild($hseq, '');
        $result->data = ['block_props' => $column_props, 'wrapper_props' => ['justify-align' => "y-j-cnt"]];
        $result->data['elements'] = $this->elements;
        $app_template_prop = array();
        $app_template_prop['disabled'] = false;
        $app_template_prop['active'] = false;
        $result->data['app_template'] = $app_template_prop;
        return $result;
    }

    public function render(siteBlockData $data, bool $is_backend, array $tmpl_vars=[])
    {
        return parent::render($data, $is_backend, $tmpl_vars + [
            'children' => array_reduce($data->getRenderedChildren($is_backend), 'array_merge', []),
        ]);
    }

    public function getRawBlockSettingsFormConfig()
    {
        return [
            'type_name' => _w('Footer bottom'),
            'sections' => [
                [   'type' => 'MenuToggleGroup',
                    'name' => _w('Footer toggle'),
                ],
                [   'type' => 'ColumnsGroup',
                    'name' => _w('Columns'),
                ],
                [   'type' => 'ColumnsAlignGroup',
                    'name' => _w('Alignment'),
                ],
                [  'type' => 'TabsWrapperGroup',
                    'name' => _w('Tabs'),
                ],
                [   'type' => 'BackgroundColorGroup',
                    'name' => _w('Background'),
                ],
                [   'type' => 'PaddingGroup',
                    'name' => _w('Padding'),
                ],
                [   'type' => 'MarginGroup',
                    'name' => _w('Margin'),
                ],
                [   'type' => 'BorderGroup',
                    'name' => _w('Border'),
                ],
                [   'type' => 'BorderRadiusGroup',
                    'name' => _w('Angle'),
                ],
                [   'type' => 'ShadowsGroup',
                    'name' => _w('Shadows'),
                ],
            ],
            'elements' => $this->elements,
            'semi_headers' => [
                'main' => _w('Whole block'),
                'wrapper' => _w('Container'),
            ]
        ] + parent::getRawBlockSettingsFormConfig();
    }
}