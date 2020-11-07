<?php
function elromco_settings_page()
{
    add_menu_page(
        'Elromco - JS Forms Shortcodes',
        'Elromco Forms',
        'manage_options',
        'elromco',
        'elromco_settings_page_markup',
        plugin_dir_url(__FILE__).'../src/plugin/assets/elromco.png'
    );
}
add_action('admin_menu','elromco_settings_page');

function elromco_settings_page_markup(){
    // Double check users capabilities
    if( !current_user_can('manage_options')){
        return;
    }
    ?>
    <div class="wrap">
        <h1><?php esc_html_e(get_admin_page_title());?></h1>
        <h2><?php esc_html_e("Add Controller to Body");?></h2>
        <p><?php esc_html_e("To add the controller you need to add the following data attributes to your body tab inside of you theme's header.php file");?></p>
        <ul>
            <li><?php esc_html_e('ng-app="movecalc"');?></li>
            <li><?php esc_html_e('ng-controller="movecalController"');?></li>
            <li><?php esc_html_e('ng-cloak');?></li>
        </ul>
        <img src="<?php echo plugin_dir_url(__FILE__).'../src/plugin/assets/tutorial_image.png'?>">
        <h2><?php esc_html_e("Use the following Shortcodes");?></h2>
        <pre style="color:black;background:#f5f2f0;text-shadow:0 1px white;font-family:Consolas, Monaco, 'Andale Mono', 'Ubuntu Mono', monospace;text-align:left;white-space:pre;word-spacing:normal;word-break:normal;word-wrap:normal;line-height:1.5;-moz-tab-size:4;-o-tab-size:4;tab-size:4;-webkit-hyphens:none;-moz-hyphens:none;-ms-hyphens:none;hyphens:none;padding:1em;margin:.5em 0;overflow:auto">
            [elromco_ultra_small_form]
        </pre>
        <pre style="color:black;background:#f5f2f0;text-shadow:0 1px white;font-family:Consolas, Monaco, 'Andale Mono', 'Ubuntu Mono', monospace;text-align:left;white-space:pre;word-spacing:normal;word-break:normal;word-wrap:normal;line-height:1.5;-moz-tab-size:4;-o-tab-size:4;tab-size:4;-webkit-hyphens:none;-moz-hyphens:none;-ms-hyphens:none;hyphens:none;padding:1em;margin:.5em 0;overflow:auto">
            [elromco_move_calculator]
        </pre>
    </div>
    <?php
}