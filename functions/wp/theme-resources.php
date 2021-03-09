<?php
    // =========================================================================
    // REGISTER & ENQUEUE
    // =========================================================================
    function mightyResources() {
        $bundleCss = get_stylesheet_directory() . '/dist/assets/css/style.min.css';
        wp_enqueue_style('mightily', get_stylesheet_directory_uri() . '/dist/assets/css/style.min.css', '', $bundleCss);
        wp_enqueue_style('typekit', '//use.typekit.net/gpt5ldb.css');

        wp_deregister_script('jquery');
        wp_register_script('jquery', ('//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'), '', '2.2.4', true);
        wp_enqueue_script('jquery');

        
        wp_enqueue_script('vue', '//cdn.jsdelivr.net/npm/vue/dist/vue.js','' , '', true);
        wp_enqueue_script('midnight', ('//cdn.jsdelivr.net/gh/Aerolab/midnight.js@1.1.2/midnight.jquery.min.js'), '', '1.1.2', true);

        $bundleJs = get_stylesheet_directory() . '/dist/assets/js/bundle.js';
        wp_enqueue_script('mightily', get_stylesheet_directory_uri() . '/dist/assets/js/bundle.js', ['jquery'], filemtime ($bundleJs) , true);
    }

    // =========================================================================
    // ENQUEUE ADMIN STYLES
    // =========================================================================
    function admin_style() {
        // wp_enqueue_style('admin-styles', get_template_directory_uri() . '/dist/assets/css/admin.min.css');

        wp_enqueue_style('typekit', '//use.typekit.net/gpt5ldb.css');
        $bundleCss = get_stylesheet_directory() . '/dist/assets/css/style.min.css';
        wp_enqueue_style('mightily', get_stylesheet_directory_uri() . '/dist/assets/css/style.min.css', '', $bundleCss);
        wp_enqueue_script('vue', '//cdn.jsdelivr.net/npm/vue/dist/vue.js','' , '', true);
        $bundleJs = get_stylesheet_directory() . '/dist/assets/js/bundle.js';
        wp_enqueue_script('mightily', get_stylesheet_directory_uri() . '/dist/assets/js/bundle.js', ['jquery'], filemtime ($bundleJs) , true);
        // wp_enqueue_script('slick', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js');
        
        // wp_enqueue_script('lottie', '//cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.0/lottie.min.js');

    }
    add_action('enqueue_block_editor_assets', 'admin_style');

    //======================================================================
    // META TAGS
    //======================================================================
    // Adding meta so that we can load it in non Wordpress pages i.e. Netforum
    function add_meta_tags() {
        echo '<meta name="viewport" content="width=device-width,initial-scale=1" />' . "\n";
    }

    //======================================================================
    // ACF Options Page
    //======================================================================
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page([
            'page_title' 	=> 'App Options',
            'menu_title'	=> 'App Options',
            'menu_slug' 	=> 'app-options',
            'capability'	=> 'manage_sites',
            'redirect'		=> false
        ]);
    }
