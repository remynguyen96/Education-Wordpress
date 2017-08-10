<?php
    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "envischool";

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
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Tùy chỉnh theme ', 'entertainment' ),
        'page_title'           => __( 'Tùy chỉnh theme ', 'entertainment' ),
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
        // Show the panel pages on the admin bar
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
        'title' => __( 'Documentation', 'entertainment' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'entertainment' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'entertainment' ),
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
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'entertainment' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'entertainment' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'entertainment' );

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
            'title'   => __( 'Theme Information 1', 'entertainment' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'entertainment' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'entertainment' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'entertainment' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'entertainment' );
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

    // -> START Basic Fields
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Banner Header', 'entertainment' ),
        'id'     => 'banner-header',
        'icon'   => 'el el-barcode',
        'fields' => array(
            array(
                'id'       => 'banner-on',
                'type'     => 'switch',
                'title'    => __( 'Chế Độ Banner', 'entertainment' ),
                'compiler' => 'bool',
                'on'       => __('Hiển thị banner','entertainment'),
                'off'       => __('Không hiển thị banner','entertainment'),
                ),

            array(
                'id' => 'banner-image',
                'type' => 'media',
                'title'    => __( 'Thay đổi banner cho website', 'entertainment' ),
                'desc'     => __( 'Upload Banner.', 'entertainment' ),
                )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Banner Footer', 'entertainment' ),
        'id'     => 'banner-footer',
        'icon'   => 'el el-barcode',
        'fields' => array(
            array(
                'id'       => 'banner-on2',
                'type'     => 'switch',
                'title'    => __( 'Chế Độ Banner', 'entertainment' ),
                'compiler' => 'bool',
                'on'       => __('Hiển thị banner','entertainment'),
                'off'       => __('Không hiển thị banner','entertainment'),
                ),

            array(
                'id' => 'banner-image2',
                'type' => 'media',
                'title'    => __( 'Thay đổi banner cho website', 'entertainment' ),
                'desc'     => __( 'Upload Banner.', 'entertainment' ),
                )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Font And Color', 'entertainment' ),
        'id'     => 'font-color',
        'icon'   => 'el el-pencil',
        'fields' => array(
            array(
                'id'       => 'typo-main',
                'type'     => 'typography',
                'title'    => __( 'Thay đổi Font chữ và màu chữ cho website', 'entertainment' ),
                'output' => 'body',
                'text-transform' => true,
                'default' => array(
                        'font-size' => '18px',
                        'font-family' => 'Roboto',
                        'color' => '#3E3F36',
                        )
                ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Text Introduce', 'entertainment' ),
        'id'         => 'header-introduce',
        'icon'       => 'el el-font',
        'fields'     => array(
            array(
                'id'       => 'text-introduce',
                'type'     => 'textarea',
                'title'    => __( 'Giới thiệu', 'entertainment' ),
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Slider Header', 'entertainment' ),
        'id'     => 'slider-header',
        'icon'   => 'el el-film',
        'fields' => array(
            array(
                'id'       => 'SLIDER1-on',
                'type'     => 'switch',
                'title'    => __( 'Chế Độ Slider 1', 'entertainment' ),
                'compiler' => 'bool',
                'on'       => __('Hiển thị slider1','entertainment'),
                'off'       => __('Không hiển thị slider1','entertainment'),
                ),
            array(
                'id' => 'slider-image1',
                'type' => 'media',
                'url' => true,
                'title'    => __( 'Thay đổi slider1 cho website', 'entertainment' ),
                'desc'     => __( 'Upload Slider1.', 'entertainment' ),
                ),
            array(
                'id'       => 'SLIDER2-on',
                'type'     => 'switch',
                'title'    => __( 'Chế Độ Slider 2', 'entertainment' ),
                'compiler' => 'bool',
                'on'       => __('Hiển thị slider2','entertainment'),
                'off'       => __('Không hiển thị slider2','entertainment'),
                ),
            array(
                'id' => 'slider-image2',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'    => __( 'Thay đổi slider cho website', 'entertainment' ),
                'desc'     => __( 'Upload Slider2.', 'entertainment' ),
                ),
            array(
                'id'       => 'SLIDER3-on',
                'type'     => 'switch',
                'title'    => __( 'Chế Độ Slider 3', 'entertainment' ),
                'compiler' => 'bool',
                'on'       => __('Hiển thị slider3','entertainment'),
                'off'       => __('Không hiển thị slider3','entertainment'),
                ),
            array(
                'id' => 'slider-image3',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'    => __( 'Thay đổi slider3 cho website', 'entertainment' ),
                'desc'     => __( 'Upload Slider3.', 'entertainment' ),
                ),
             array(
                'id'       => 'SLIDER4-on',
                'type'     => 'switch',
                'title'    => __( 'Chế Độ Slider 4', 'entertainment' ),
                'compiler' => 'bool',
                'on'       => __('Hiển thị slider4','entertainment'),
                'off'       => __('Không hiển thị slider4','entertainment'),
                ),
            array(
                'id' => 'slider-image4',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'    => __( 'Thay đổi slider4 cho website', 'entertainment' ),
                'desc'     => __( 'Upload Slider4.', 'entertainment' ),
                ),
             array(
                'id'       => 'SLIDER5-on',
                'type'     => 'switch',
                'title'    => __( 'Chế Độ Slider 5', 'entertainment' ),
                'compiler' => 'bool',
                'on'       => __('Hiển thị slider5','entertainment'),
                'off'       => __('Không hiển thị slider5','entertainment'),
                ),
            array(
                'id' => 'slider-image5',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'    => __( 'Thay đổi slider5 cho website', 'entertainment' ),
                'desc'     => __( 'Upload Slider5.', 'entertainment' ),
                ),
             array(
                'id'       => 'SLIDER6-on',
                'type'     => 'switch',
                'title'    => __( 'Chế Độ Slider 6', 'entertainment' ),
                'compiler' => 'bool',
                'on'       => __('Hiển thị slider6','entertainment'),
                'off'       => __('Không hiển thị slider6','entertainment'),
                ),
            array(
                'id' => 'slider-image6',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'    => __( 'Thay đổi slider6 cho website', 'entertainment' ),
                'desc'     => __( 'Upload Slider6.', 'entertainment' ),
                ),
             array(
                'id'       => 'SLIDER7-on',
                'type'     => 'switch',
                'title'    => __( 'Chế Độ Slider 7', 'entertainment' ),
                'compiler' => 'bool',
                'on'       => __('Hiển thị slider7','entertainment'),
                'off'       => __('Không hiển thị slider7','entertainment'),
                ),
            array(
                'id' => 'slider-image7',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'    => __( 'Thay đổi slider7 cho website', 'entertainment' ),
                'desc'     => __( 'Upload Slider7.', 'entertainment' ),
                ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Slider Footer', 'entertainment' ),
        'id'     => 'slider-footer',
        'icon'   => 'el el-film',
        'fields' => array(
             array(
                'id'       => 'slider1-on',
                'type'     => 'switch',
                'title'    => __( 'Chế Độ Slider 1', 'entertainment' ),
                'compiler' => 'bool',
                'on'       => __('Hiển thị slider1','entertainment'),
                'off'       => __('Không hiển thị slider1','entertainment'),
                ),
            array(
                'id' => 'slider-img1',
                'type' => 'media',
                'url' => true,
                'title'    => __( 'Thay đổi slider footer 1 cho website', 'entertainment' ),
                'desc'     => __( 'Upload Slider1.', 'entertainment' ),
                ),
            array(
                'id'       => 'slider2-on',
                'type'     => 'switch',
                'title'    => __( 'Chế Độ Slider 2', 'entertainment' ),
                'compiler' => 'bool',
                'on'       => __('Hiển thị slider2','entertainment'),
                'off'       => __('Không hiển thị slider2','entertainment'),
                ),
            array(
                'id' => 'slider-img2',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'    => __( 'Thay đổi slider footer 2 cho website', 'entertainment' ),
                'desc'     => __( 'Upload Slider2.', 'entertainment' ),
                ),
            array(
                'id'       => 'slider3-on',
                'type'     => 'switch',
                'title'    => __( 'Chế Độ Slider 3', 'entertainment' ),
                'compiler' => 'bool',
                'on'       => __('Hiển thị slider3','entertainment'),
                'off'       => __('Không hiển thị slider3','entertainment'),
                ),
            array(
                'id' => 'slider-img3',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'    => __( 'Thay đổi slider footer 3 cho website', 'entertainment' ),
                'desc'     => __( 'Upload Slider3.', 'entertainment' ),
                ),
            array(
                'id'       => 'slider4-on',
                'type'     => 'switch',
                'title'    => __( 'Chế Độ Slider 4', 'entertainment' ),
                'compiler' => 'bool',
                'on'       => __('Hiển thị slider4','entertainment'),
                'off'       => __('Không hiển thị slider4','entertainment'),
                ),
             array(
                'id' => 'slider-img4',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'    => __( 'Thay đổi slider footer 4 cho website', 'entertainment' ),
                'desc'     => __( 'Upload Slider4.', 'entertainment' ),
                ),
             array(
                'id'       => 'slider5-on',
                'type'     => 'switch',
                'title'    => __( 'Chế Độ Slider 5', 'entertainment' ),
                'compiler' => 'bool',
                'on'       => __('Hiển thị slider5','entertainment'),
                'off'       => __('Không hiển thị slider5','entertainment'),
                ),
              array(
                'id' => 'slider-img5',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'    => __( 'Thay đổi slider footer 5 cho website', 'entertainment' ),
                'desc'     => __( 'Upload Slider5.', 'entertainment' ),
                ),
              array(
                'id'       => 'slider6-on',
                'type'     => 'switch',
                'title'    => __( 'Chế Độ Slider 6', 'entertainment' ),
                'compiler' => 'bool',
                'on'       => __('Hiển thị slider6','entertainment'),
                'off'       => __('Không hiển thị slider6','entertainment'),
                ),
               array(
                'id' => 'slider-img6',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'    => __( 'Thay đổi slider footer 6 cho website', 'entertainment' ),
                'desc'     => __( 'Upload Slider6.', 'entertainment' ),
                ),
               array(
                'id'       => 'slider7-on',
                'type'     => 'switch',
                'title'    => __( 'Chế Độ Slider 7', 'entertainment' ),
                'compiler' => 'bool',
                'on'       => __('Hiển thị slider7','entertainment'),
                'off'       => __('Không hiển thị slider7','entertainment'),
                ),
                array(
                'id' => 'slider-img7',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'    => __( 'Thay đổi slider footer 7 cho website', 'entertainment' ),
                'desc'     => __( 'Upload Slider7.', 'entertainment' ),
                ),
        )
    ) );

    /*Redux::setSection( $opt_name, array(
        'title'  => __( 'Basic Field', 'entertainment' ),
        'id'     => 'basic',
        'desc'   => __( 'Basic field with no subsections.', 'entertainment' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'text',
                'title'    => __( 'Example Text', 'entertainment' ),
                'desc'     => __( 'Example description.', 'entertainment' ),
                'subtitle' => __( 'Example subtitle.', 'entertainment' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Basic Field', 'entertainment' ),
        'id'     => 'basic',
        'desc'   => __( 'Basic field with no subsections.', 'entertainment' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'text',
                'title'    => __( 'Example Text', 'entertainment' ),
                'desc'     => __( 'Example description.', 'entertainment' ),
                'subtitle' => __( 'Example subtitle.', 'entertainment' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
            )
        )
    ) );*/

     Redux::setSection( $opt_name, array(
        'title'  => __( 'Hình ảnh trang chủ', 'entertainment' ),
        'id'     => 'img-home',
        'icon'   => 'el el-camera',
        'fields' => array(
             array(
                'id'       => 'home-1-on',
                'type'     => 'switch',
                'title'    => __( 'Chế Độ Ảnh 1', 'entertainment' ),
                'compiler' => 'bool',
                'on'       => __('Hiển thị','entertainment'),
                'off'       => __('Không hiển thị','entertainment'),
                ),
            array(
                'id' => 'img-home1',
                'type' => 'media',
                'url' => true,
                'title'    => __( 'Thay đổi ảnh cho trang chủ 1', 'entertainment' ),
                'desc'     => __( 'Upload ảnh cho trang chủ 1.', 'entertainment' ),
                ),

            array(
                'id'       => 'home-2-on',
                'type'     => 'switch',
                'title'    => __( 'Chế Độ Ảnh 2', 'entertainment' ),
                'compiler' => 'bool',
                'on'       => __('Hiển thị','entertainment'),
                'off'       => __('Không hiển thị','entertainment'),
                ),
            array(
                'id' => 'img-home2',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'    => __( 'Thay đổi ảnh cho trang chủ 2', 'entertainment' ),
                'desc'     => __( 'Upload ảnh cho trang chủ 2.', 'entertainment' ),
                ),

            array(
                'id'       => 'home-404-on',
                'type'     => 'switch',
                'title'    => __( 'Chế Độ Ảnh 404', 'entertainment' ),
                'compiler' => 'bool',
                'on'       => __('Hiển thị','entertainment'),
                'off'       => __('Không hiển thị','entertainment'),
                ),
            array(
                'id' => 'img-home-404',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'    => __( 'Thay đổi hình ảnh trang 404', 'entertainment' ),
                'desc'     => __( 'Upload ảnh 404.', 'entertainment' ),
                ),            
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Social Network', 'entertainment' ),
        'id'         => 'social-network',
        'icon'       => 'el el-facebook',
        'fields'     => array(
            array(
                'id'       => 'facebook-api',
                'type'     => 'text',
                'title'    => __( 'Link Facebook', 'entertainment' ),
            ),
            array(
                'id'       => 'youtube-api',
                'type'     => 'text',
                'title'    => __( 'Link Youtube', 'entertainment' ),
            ),
            array(
                'id'       => 'skype-api',
                'type'     => 'text',
                'title'    => __( 'Link Skype', 'entertainment' ),
            ),
            array(
                'id'       => 'google-api',
                'type'     => 'text',
                'title'    => __( 'Link Goole', 'entertainment' ),
            ),
            array(
                'id'       => 'twitter-api',
                'type'     => 'text',
                'title'    => __( 'Link Twitter', 'entertainment' ),
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'CLip Youtube', 'entertainment' ),
        'id'         => 'clip_youtube',
        'icon'       => 'el el-youtube',
        'fields'     => array(
            array(
                'id'       => 'youtube1',
                'type'     => 'text',
                'title'    => __( 'Clip Youtube 1', 'entertainment' ),
            ),
            array(
                'id'       => 'youtube2',
                'type'     => 'text',
                'title'    => __( 'Clip Youtube 2', 'entertainment' ),
            ),
        )
    ) );







    /*Redux::setSection( $opt_name, array(
        'title' => __( 'Basic Fields', 'entertainment' ),
        'id'    => 'basic',
        'desc'  => __( 'Basic fields as subsections.', 'entertainment' ),
        'icon'  => 'el el-home'
    ) );



    Redux::setSection( $opt_name, array(
        'title'      => __( 'Text', 'entertainment' ),
        'desc'       => __( 'For full documentation on this field, visit: ', 'entertainment' ) . '<a href="//docs.reduxframework.com/core/fields/text/" target="_blank">//docs.reduxframework.com/core/fields/text/</a>',
        'id'         => 'opt-text-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'text-example',
                'type'     => 'text',
                'title'    => __( 'Text Field', 'entertainment' ),
                'subtitle' => __( 'Subtitle', 'entertainment' ),
                'desc'     => __( 'Field Description', 'entertainment' ),
                'default'  => 'Default Text',
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Text Area', 'entertainment' ),
        'desc'       => __( 'For full documentation on this field, visit: ', 'entertainment' ) . '<a href="//docs.reduxframework.com/core/fields/textarea/" target="_blank">//docs.reduxframework.com/core/fields/textarea/</a>',
        'id'         => 'opt-textarea-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'textarea-example',
                'type'     => 'textarea',
                'title'    => __( 'Text Area Field', 'entertainment' ),
                'subtitle' => __( 'Subtitle', 'entertainment' ),
                'desc'     => __( 'Field Description', 'entertainment' ),
                'default'  => 'Default Text',
            ),
        )
    ) );*/

    /*
     * <--- END SECTIONS
     */
