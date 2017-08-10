<?php
    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "tranhtheu";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Hiện the sections below the admin menu item or not
        'menu_title'           => __( 'Tùy chỉnh khác', 'tranhtheu' ),
        'page_title'           => __( 'Tùy chỉnh khác ', 'tranhtheu' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => 'AIzaSyAjtppy-gG-EcwVl6rs9W53dQ8H1X5tXUs',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Hiện the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'tranhtheu' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'tranhtheu' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'tranhtheu' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'tranhtheu' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'tranhtheu' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'tranhtheu' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'tranhtheu' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'tranhtheu' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'tranhtheu' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'tranhtheu' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'tranhtheu' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*
        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for
     */

     // Slider Header
         Redux::setSection( $opt_name, array(
             'title'  => __( 'Slider ảnh trang chủ 1', 'tranhtheu' ),
             'id'     => 'slider-header',
             'icon'   => 'el el-film',
             'fields' => array(
                 array(
                     'id'       => 'SLIDER1-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 1', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image1',
                     'type' => 'media',
                     'url' => true,
                     'title'     => __( 'Cập nhật ảnh Slider1.', 'tranhtheu' ),
                     ),
                 array(
                     'id'       => 'SLIDER2-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 2', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image2',
                     'type' => 'media',
                     'url' => true,
                     'preview' => 'bool',
                     'title'     => __( 'Cập nhật ảnh Slider2.', 'tranhtheu' ),
                     ),
                 array(
                     'id'       => 'SLIDER3-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 3', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image3',
                     'type' => 'media',
                     'url' => true,
                     'preview' => 'bool',
                     'title'     => __( 'Cập nhật ảnh Slider3.', 'tranhtheu' ),
                     ),
                  array(
                     'id'       => 'SLIDER4-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 4', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image4',
                     'type' => 'media',
                     'url' => true,
                     'preview' => 'bool',
                     'title'     => __( 'Cập nhật ảnh Slider4.', 'tranhtheu' ),
                     ),
                  array(
                     'id'       => 'SLIDER5-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 5', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image5',
                     'type' => 'media',
                     'url' => true,
                     'preview' => 'bool',
                     'title'     => __( 'Cập nhật ảnh Slider5.', 'tranhtheu' ),
                     ),
                  array(
                     'id'       => 'SLIDER6-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 6', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image6',
                     'type' => 'media',
                     'url' => true,
                     'preview' => 'bool',
                     'title'     => __( 'Cập nhật ảnh Slider6.', 'tranhtheu' ),
                     ),
                  array(
                     'id'       => 'SLIDER7-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 7', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image7',
                     'type' => 'media',
                     'url' => true,
                     'preview' => 'bool',
                     'title'     => __( 'Cập nhật ảnh Slider7.', 'tranhtheu' ),
                     ),
                  array(
                     'id'       => 'SLIDER8-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 8', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image8',
                     'type' => 'media',
                     'url' => true,
                     'preview' => 'bool',
                     'title'     => __( 'Cập nhật ảnh Slider8.', 'tranhtheu' ),
                     ),
             )
         ) );
     // Slider Header 2
         Redux::setSection( $opt_name, array(
             'title'  => __( 'Slider ảnh trang chủ 2', 'tranhtheu' ),
             'id'     => 'slider-header2',
             'icon'   => 'el el-film',
             'fields' => array(
                 array(
                     'id'       => 'SLIDER12-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 1', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image12',
                     'type' => 'media',
                     'url' => true,
                     'title'     => __( 'Cập nhật ảnh Slider1.', 'tranhtheu' ),
                     ),
                 array(
                     'id'       => 'SLIDER22-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 2', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image22',
                     'type' => 'media',
                     'url' => true,
                     'preview' => 'bool',
                     'title'     => __( 'Cập nhật ảnh Slider2.', 'tranhtheu' ),
                     ),
                 array(
                     'id'       => 'SLIDER32-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 3', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image32',
                     'type' => 'media',
                     'url' => true,
                     'preview' => 'bool',
                     'title'     => __( 'Cập nhật ảnh Slider3.', 'tranhtheu' ),
                     ),
                  array(
                     'id'       => 'SLIDER42-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 4', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image42',
                     'type' => 'media',
                     'url' => true,
                     'preview' => 'bool',
                     'title'     => __( 'Cập nhật ảnh Slider4.', 'tranhtheu' ),
                     ),
                  array(
                     'id'       => 'SLIDER52-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 5', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image52',
                     'type' => 'media',
                     'url' => true,
                     'preview' => 'bool',
                     'title'     => __( 'Cập nhật ảnh Slider5.', 'tranhtheu' ),
                     ),
                  array(
                     'id'       => 'SLIDER62-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 6', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image62',
                     'type' => 'media',
                     'url' => true,
                     'preview' => 'bool',
                     'title'     => __( 'Cập nhật ảnh Slider6.', 'tranhtheu' ),
                     ),
                  array(
                     'id'       => 'SLIDER72-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 7', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image72',
                     'type' => 'media',
                     'url' => true,
                     'preview' => 'bool',
                     'title'     => __( 'Cập nhật ảnh Slider7.', 'tranhtheu' ),
                     ),
                  array(
                     'id'       => 'SLIDER82-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 8', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image82',
                     'type' => 'media',
                     'url' => true,
                     'preview' => 'bool',
                     'title'     => __( 'Cập nhật ảnh Slider8.', 'tranhtheu' ),
                     ),
             )
         ) );
     // Slider Header 2
         Redux::setSection( $opt_name, array(
             'title'  => __( 'Slider ảnh trang chủ 3', 'tranhtheu' ),
             'id'     => 'slider-header3',
             'icon'   => 'el el-film',
             'fields' => array(
                 array(
                     'id'       => 'SLIDER13-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 1', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image13',
                     'type' => 'media',
                     'url' => true,
                     'title'     => __( 'Cập nhật ảnh Slider1.', 'tranhtheu' ),
                     ),
                 array(
                     'id'       => 'SLIDER23-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 2', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image23',
                     'type' => 'media',
                     'url' => true,
                     'preview' => 'bool',
                     'title'     => __( 'Cập nhật ảnh Slider2.', 'tranhtheu' ),
                     ),
                 array(
                     'id'       => 'SLIDER33-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 3', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image33',
                     'type' => 'media',
                     'url' => true,
                     'preview' => 'bool',
                     'title'     => __( 'Cập nhật ảnh Slider3.', 'tranhtheu' ),
                     ),
                  array(
                     'id'       => 'SLIDER43-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 4', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image43',
                     'type' => 'media',
                     'url' => true,
                     'preview' => 'bool',
                     'title'     => __( 'Cập nhật ảnh Slider4.', 'tranhtheu' ),
                     ),
                  array(
                     'id'       => 'SLIDER53-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 5', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image53',
                     'type' => 'media',
                     'url' => true,
                     'preview' => 'bool',
                     'title'     => __( 'Cập nhật ảnh Slider5.', 'tranhtheu' ),
                     ),
                  array(
                     'id'       => 'SLIDER63-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 6', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image63',
                     'type' => 'media',
                     'url' => true,
                     'preview' => 'bool',
                     'title'     => __( 'Cập nhật ảnh Slider6.', 'tranhtheu' ),
                     ),
                  array(
                     'id'       => 'SLIDER73-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 7', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image73',
                     'type' => 'media',
                     'url' => true,
                     'preview' => 'bool',
                     'title'     => __( 'Cập nhật ảnh Slider7.', 'tranhtheu' ),
                     ),
                  array(
                     'id'       => 'SLIDER83-on',
                     'type'     => 'switch',
                     'title'    => __( 'Slider 8', 'tranhtheu' ),
                     'compiler' => 'bool',
                     'on'       => __('Hiện','tranhtheu'),
                     'off'       => __('Ẩn','tranhtheu'),
                     ),
                 array(
                     'id' => 'slider-image83',
                     'type' => 'media',
                     'url' => true,
                     'preview' => 'bool',
                     'title'     => __( 'Cập nhật ảnh Slider8.', 'tranhtheu' ),
                     ),
             )
         ) );
// Thông tin giới thiệu trang chủ
         Redux::setSection( $opt_name, array(
            'title'  => __( 'Thông tin giới thiệu trang chủ', 'tranhtheu' ),
            'id'     => 'info_home',
            'icon'   => 'el el-file-edit',
            'fields' => array(
                array(
                    'id' => 'info_text_home',
                    'type' => 'editor',
                    'url' => true,
                    ),
            )
        ) );
// Thông tin giới thiệu cuối trang
         Redux::setSection( $opt_name, array(
            'title'  => __( 'Thông tin cuối trang', 'tranhtheu' ),
            'id'     => 'info_footer',
            'icon'   => 'el el-file-edit',
            'fields' => array(
                array(
                    'id' => 'info_text_1',
                    'type' => 'text',
                    'url' => true,
                    'title'    => __( 'Xưởng thêu', 'tranhtheu' ),
                    ),
                array(
                    'id' => 'info_text_2',
                    'type' => 'text',
                    'url' => true,
                    'title'    => __( 'Địa chỉ', 'tranhtheu' ),
                    ),
                array(
                    'id' => 'info_text_3',
                    'type' => 'text',
                    'url' => true,
                    'title'    => __( 'Số điện thoại', 'tranhtheu' ),
                    ),
                array(
                    'id' => 'info_text_4',
                    'type' => 'text',
                    'url' => true,
                    'title'    => __( 'Địa email', 'tranhtheu' ),
                    ),
            )
        ) );
