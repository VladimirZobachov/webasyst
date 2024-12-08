<?php
return array (
  'status' => 'ok',
  'data' => 
  array (
    'a-bundle-pryanik-sp-2312' => 
    array (
      'html' => 
      array (
        'header_top' => '
<section class="a-bundle-pryanik" id="a-bundle-pryanik675594235ffa6" style="padding:10px;"
    data-license-auth="aGFzaD00MmM2Njc4ZGJhNTY0Y2IxOGI1MzFiZjhiNjJiNjg3MCZkb21haW49bG9jYWxob3N0OjgwODA="
    data-license-params="{&quot;bundle&quot;:&quot;essentials&quot;}"
    data-license-url="http://www.webasyst.ru/my/ajax/?action=fwhostingTrialBundle&"
    data-license-error-message="Unable to issue licenses, please try again later"
>
    <p style="margin: 0;">

        <strong style="color: var(--text-color-strongest);">Shop-Script, CRM, Mailer, Cash Flow, Teamwork — 30 days free!</strong>
        Try out the entire “<a href="https://www.webasyst.com/pricing/" target="_blank">Essentials</a>” app bundle now in just a single click.

        

                    Installer will issue free licenses and will install the entire bundle.
        
        <a href="javascript:void(0)" class="bold js-one-click-install">Install free now &rarr;</a>

    </p>

    <form action="../installer/?module=update&action=manager" method="post" style="display:none">
        <input type="hidden" name="install" value="1">
        <input type="hidden" name="_csrf" value="">
    </form>

</section>

<script>(function() { "use strict";

    const $wrapper = $(\'#\'+"a-bundle-pryanik675594235ffa6");
    const auth_params = atob($wrapper.data(\'license-auth\'));
    const license_url = $wrapper.data(\'license-url\');
    const license_params = $wrapper.data(\'license-params\');
    const $form = $wrapper.find(\'form\');

    var loading = false;

    setTimeout(function() {
        var wa_root_url = $(\'script[src*="wa-content"]\').first().attr(\'src\').split(\'wa-content\')[0];
        var wa_backend_url = window.location.pathname.substr(wa_root_url.length).split(\'/\')[0];
        var action = $form.attr(\'action\').replace(\'../\', wa_root_url + wa_backend_url + \'/\');
        $form.attr(\'action\', action);
    }, 0);

    $wrapper.on(\'click\', \'a.js-one-click-install\', function() {
        if (loading) {
            return;
        }

        loading = true;
        $.post(license_url+auth_params, license_params, function(){}, \'json\').then(function(result) {

            if (result.status === \'fail\') {
                console.log(result.errors);
                alert(result.errors.message);
                return;
            }

            var matches = document.cookie.match(new RegExp("(?:^|; )_csrf=([^;]*)"));
            if (matches && matches[1]) {
                $form.find(\'[name="_csrf"]\').val(decodeURIComponent(matches[1]));
            }
            for (var app_id in result.data) {
                $form.append($(\'<input type="hidden">\').attr(\'name\', \'app_id[\'+app_id+\']\').val(result.data[app_id]));
            }
            $form.submit();
        }, function() {
            console.log(arguments);
            alert($wrapper.data(\'license-error-message\'));
        }).always(function() {
            loading = false;
        });

        return false;
    });

})();</script>',
        'notification' => '
<section class="a-bundle-pryanik" id="a-bundle-pryanik6755942360f5e"
    data-license-auth="aGFzaD00MmM2Njc4ZGJhNTY0Y2IxOGI1MzFiZjhiNjJiNjg3MCZkb21haW49bG9jYWxob3N0OjgwODA="
    data-license-params="{&quot;bundle&quot;:&quot;essentials&quot;}"
    data-license-url="http://www.webasyst.ru/my/ajax/?action=fwhostingTrialBundle&"
    data-license-error-message="Unable to issue licenses, please try again later"
>

    <strong style="color: var(--text-color-strongest);">Shop-Script, CRM, Mailer, Cash Flow, Teamwork — 30 days free!</strong>
    Try out the entire “<a href="https://www.webasyst.com/pricing/" target="_blank">Essentials</a>” app bundle now in just a single click.

    

    

    <a href="javascript:void(0)" class="js-one-click-install"><b>Install free now</b></a>

    <form action="../installer/?module=update&action=manager" method="post" style="display:none">
        <input type="hidden" name="install" value="1">
        <input type="hidden" name="_csrf" value="">
    </form>

</section>

<script>(function() { "use strict";

    const $wrapper = $(\'#\'+"a-bundle-pryanik6755942360f5e");
    const auth_params = atob($wrapper.data(\'license-auth\'));
    const license_url = $wrapper.data(\'license-url\');
    const license_params = $wrapper.data(\'license-params\');
    const $form = $wrapper.find(\'form\');

    var loading = false;

    setTimeout(function() {
        var wa_root_url = $(\'script[src*="wa-content"]\').first().attr(\'src\').split(\'wa-content\')[0];
        var wa_backend_url = window.location.pathname.substr(wa_root_url.length).split(\'/\')[0];
        var action = $form.attr(\'action\').replace(\'../\', wa_root_url + wa_backend_url + \'/\');
        $form.attr(\'action\', action);
    }, 0);

    $wrapper.on(\'click\', \'a.js-one-click-install\', function() {
        if (loading) {
            return;
        }

        loading = true;
        $.post(license_url+auth_params, license_params, function(){}, \'json\').then(function(result) {

            if (result.status === \'fail\') {
                console.log(result.errors);
                alert(result.errors.message);
                return;
            }

            var matches = document.cookie.match(new RegExp("(?:^|; )_csrf=([^;]*)"));
            if (matches && matches[1]) {
                $form.find(\'[name="_csrf"]\').val(decodeURIComponent(matches[1]));
            }
            for (var app_id in result.data) {
                $form.append($(\'<input type="hidden">\').attr(\'name\', \'app_id[\'+app_id+\']\').val(result.data[app_id]));
            }
            $form.submit();
        }, function() {
            console.log(arguments);
            alert($wrapper.data(\'license-error-message\'));
        }).always(function() {
            loading = false;
        });

        return false;
    });

})();</script>',
      ),
    ),
  ),
);
