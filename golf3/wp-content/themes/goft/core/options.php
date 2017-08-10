<?php
    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "golf";

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
        'menu_title'           => __( 'Tùy chỉnh theme ', 'golf' ),
        'page_title'           => __( 'Tùy chỉnh theme ', 'golf' ),
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
        'title' => __( 'Documentation', 'golf' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'golf' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'golf' ),
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
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'golf' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'golf' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'golf' );

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
            'title'   => __( 'Theme Information 1', 'golf' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'golf' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'golf' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'golf' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'golf' );
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
    // Redux::setSection( $opt_name, array(
    //     'title'  => __( 'Banner đầu trang', 'golf' ),
    //     'id'     => 'banner-header',
    //     'icon'   => 'el el-barcode',
    //     'fields' => array(
    //         array(
    //             'id'       => 'banner-on',
    //             'type'     => 'switch',
    //             'title'    => __( 'Chế Độ Banner', 'golf' ),
    //             'compiler' => 'bool',
    //             'on'       => __('Hiển thị banner','golf'),
    //             'off'       => __('Không hiển thị banner','golf'),
    //             ),
    //
    //         array(
    //             'id' => 'banner-image',
    //             'type' => 'media',
    //             'title'    => __( 'Thay đổi banner cho website', 'golf' ),
    //             'desc'     => __( 'Upload Banner.', 'golf' ),
    //             )
    //     )
    // ) );

    // Redux::setSection( $opt_name, array(
    //     'title'  => __( 'Banner cuối trang', 'golf' ),
    //     'id'     => 'banner-footer',
    //     'icon'   => 'el el-barcode',
    //     'fields' => array(
    //         array(
    //             'id'       => 'banner-on2',
    //             'type'     => 'switch',
    //             'title'    => __( 'Chế Độ Banner', 'golf' ),
    //             'compiler' => 'bool',
    //             'on'       => __('Hiển thị banner','golf'),
    //             'off'       => __('Không hiển thị banner','golf'),
    //             ),
    //
    //         array(
    //             'id' => 'banner-image2',
    //             'type' => 'media',
    //             'title'    => __( 'Thay đổi banner cho website', 'golf' ),
    //             'desc'     => __( 'Upload Banner.', 'golf' ),
    //             )
    //     )
    // ) );

    // Redux::setSection( $opt_name, array(
    //     'title'  => __( 'Chữ và màu chữ', 'golf' ),
    //     'id'     => 'font-color',
    //     'icon'   => 'el el-pencil',
    //     'fields' => array(
    //         array(
    //             'id'       => 'typo-main',
    //             'type'     => 'typography',
    //             'title'    => __( 'Thay đổi Font chữ và màu chữ cho website', 'golf' ),
    //             'output' => 'body',
    //             'text-transform' => true,
    //             'default' => array(
    //                     'font-size' => '18px',
    //                     'font-family' => 'Roboto',
    //                     'color' => '#3E3F36',
    //                     )
    //             ),
    //     )
    // ) );
// Introduce HOME
Redux::setSection( $opt_name, array(
    'title'      => __( 'Introduce Service', 'golf' ),
    'id'         => 'service-introduce',
    'icon'       => 'el el-edit',
    'fields'     => array(
        array(
            'id'       => 'service-introduce1',
            'type'     => 'editor',
            'title'    => __( 'Create Your Trip', 'golf' ),
        ),
        array(
            'id'       => 'service-introduce2',
            'type'     => 'editor',
            'title'    => __( 'Golf Holidays', 'golf' ),
        ),
        array(
            'id'       => 'service-introduce3',
            'type'     => 'editor',
            'title'    => __( 'Book Your Teetimes', 'golf' ),
        ),
    ),
) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Introduce Header', 'golf' ),
        'id'         => 'header-introduce1',
        'icon'       => 'el el-edit',
        'fields'     => array(
            array(
                'id'       => 'text-introduce1-1',
                'type'     => 'editor',
                'title'    => __( 'Title Introduce Header', 'golf' ),
            ),
            array(
                'id'       => 'text-introduce1-2',
                'type'     => 'editor',
                'title'    => __( 'Text Introduce Header', 'golf' ),
            ),
        ),
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Introduce In Home', 'golf' ),
        'id'         => 'header-introduce2',
        'icon'       => 'el el-edit',
        'fields'     => array(
            array(
                'id'       => 'text-introduce2',
                'type'     => 'editor',
                'title'    => __( 'Introduce Top In VietNam', 'golf' ),
            ),
            array(
                'id'       => 'text-introduce3',
                'type'     => 'editor',
                'title'    => __( 'Introduce Top In The World', 'golf' ),
            ),
            array(
                'id'       => 'text-introduce4',
                'type'     => 'editor',
                'title'    => __( 'Introduce News And Events', 'golf' ),
            ),
            array(
                'id'       => 'text-introduce5',
                'type'     => 'editor',
                'title'    => __( 'Introduce What People Say About Us', 'golf' ),
            ),
            array(
                'id'       => 'text-introduce6',
                'type'     => 'editor',
                'title'    => __( 'Introduce Our Valued Partners', 'golf' ),
            ),
        ),
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Introduce United Golf Services', 'golf' ),
        'id'         => 'header-introduce7',
        'icon'       => 'el el-edit',
        'fields'     => array(
            array(
                'id'       => 'text-introduce7-1',
                'type'     => 'editor',
            ),
            array(
                'id'       => 'text-introduce7-2',
                'type'     => 'editor',
            ),
        ),
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Introduce Footer', 'golf' ),
        'id'         => 'header-introduce8',
        'icon'       => 'el el-edit',
        'fields'     => array(
            array(
                'id'       => 'text-introduce8',
                'type'     => 'editor',
            ),
        ),
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Introduce Footer Fixed', 'golf' ),
        'id'         => 'header-introduce9',
        'icon'       => 'el el-edit',
        'fields'     => array(
            array(
                'id'       => 'text-introduce9-1',
                'type'     => 'editor',
                'title'    => __( 'Title', 'golf' ),
            ),
            array(
                'id'       => 'text-introduce9-2',
                'type'     => 'editor',
                'title'    => __( 'Text', 'golf' ),
            ),
        ),
    ) );
//Slider Partner
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Slider Partners', 'golf' ),
        'id'     => 'slider-footer',
        'icon'   => 'el el-film',
        'fields' => array(
            array(
                'id'       => 'partner_1',
                'type'     => 'switch',
                'title'    => __( 'Partner 1', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'slider-partner1',
                'type' => 'media',
                'url' => true,
                'title'     => __( 'Upload Partner 1.', 'golf' ),
                ),
            array(
                'id'       => 'partner_2',
                'type'     => 'switch',
                'title'    => __( 'Partner 2', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'slider-partner2',
                'type' => 'media',
                'url' => true,
                'title'     => __( 'Upload Partner 2.', 'golf' ),
                ),
            array(
                'id'       => 'partner_3',
                'type'     => 'switch',
                'title'    => __( 'Partner 3', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'slider-partner3',
                'type' => 'media',
                'url' => true,
                'title'     => __( 'Upload Partner 3.', 'golf' ),
                ),
            array(
                'id' => 'slider-partner4',
                'type' => 'media',
                'url' => true,
                'title'     => __( 'Upload Partner 4.', 'golf' ),
                ),
            array(
                'id'       => 'partner_4',
                'type'     => 'switch',
                'title'    => __( 'Partner 4', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'slider-partner4',
                'type' => 'media',
                'url' => true,
                'title'     => __( 'Upload Partner 4.', 'golf' ),
                ),
            array(
                'id'       => 'partner_5',
                'type'     => 'switch',
                'title'    => __( 'Partner 5', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'slider-partner5',
                'type' => 'media',
                'url' => true,
                'title'     => __( 'Upload Partner 5.', 'golf' ),
                ),
            array(
                'id'       => 'partner_6',
                'type'     => 'switch',
                'title'    => __( 'Partner 6', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'slider-partner6',
                'type' => 'media',
                'url' => true,
                'title'     => __( 'Upload Partner 6.', 'golf' ),
                ),
            array(
                'id'       => 'partner_7',
                'type'     => 'switch',
                'title'    => __( 'Partner 7', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'slider-partner7',
                'type' => 'media',
                'url' => true,
                'title'     => __( 'Upload Partner 7.', 'golf' ),
                ),
            array(
                'id'       => 'partner_8',
                'type'     => 'switch',
                'title'    => __( 'Partner 8', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'slider-partner8',
                'type' => 'media',
                'url' => true,
                'title'     => __( 'Upload Partner 8.', 'golf' ),
                ),
            array(
                'id'       => 'partner_9',
                'type'     => 'switch',
                'title'    => __( 'Partner 9', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'slider-partner9',
                'type' => 'media',
                'url' => true,
                'title'     => __( 'Upload Partner 9.', 'golf' ),
                ),
            array(
                'id'       => 'partner_10',
                'type'     => 'switch',
                'title'    => __( 'Partner 10', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'slider-partner10',
                'type' => 'media',
                'url' => true,
                'title'     => __( 'Upload Partner 10.', 'golf' ),
                ),
        )
    ) );
// Slider Header
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Slider Header', 'golf' ),
        'id'     => 'slider-header',
        'icon'   => 'el el-film',
        'fields' => array(
            array(
                'id'       => 'SLIDER1-on',
                'type'     => 'switch',
                'title'    => __( 'Slider 1', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'slider-image1',
                'type' => 'media',
                'url' => true,
                'title'     => __( 'Upload Slider1.', 'golf' ),
                ),
            array(
                'id'       => 'SLIDER2-on',
                'type'     => 'switch',
                'title'    => __( 'Slider 2', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'slider-image2',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'     => __( 'Upload Slider2.', 'golf' ),
                ),
            array(
                'id'       => 'SLIDER3-on',
                'type'     => 'switch',
                'title'    => __( 'Slider 3', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'slider-image3',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'     => __( 'Upload Slider3.', 'golf' ),
                ),
             array(
                'id'       => 'SLIDER4-on',
                'type'     => 'switch',
                'title'    => __( 'Slider 4', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'slider-image4',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'     => __( 'Upload Slider4.', 'golf' ),
                ),
             array(
                'id'       => 'SLIDER5-on',
                'type'     => 'switch',
                'title'    => __( 'Slider 5', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'slider-image5',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'     => __( 'Upload Slider5.', 'golf' ),
                ),
             array(
                'id'       => 'SLIDER6-on',
                'type'     => 'switch',
                'title'    => __( 'Slider 6', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'slider-image6',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'     => __( 'Upload Slider6.', 'golf' ),
                ),
             array(
                'id'       => 'SLIDER7-on',
                'type'     => 'switch',
                'title'    => __( 'Slider 7', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'slider-image7',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'     => __( 'Upload Slider7.', 'golf' ),
                ),
             array(
                'id'       => 'SLIDER8-on',
                'type'     => 'switch',
                'title'    => __( 'Slider 8', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'slider-image8',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'     => __( 'Upload Slider8.', 'golf' ),
                ),
             array(
                'id'       => 'SLIDER9-on',
                'type'     => 'switch',
                'title'    => __( 'Slider 9', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'slider-image9',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'     => __( 'Upload Slider9.', 'golf' ),
                ),
             array(
                'id'       => 'SLIDER10-on',
                'type'     => 'switch',
                'title'    => __( 'Slider 10', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'slider-image10',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'     => __( 'Upload Slider10.', 'golf' ),
                ),
        )
    ) );
// Upload Images All Home
     Redux::setSection( $opt_name, array(
        'title'  => __( 'Picture Home', 'golf' ),
        'id'     => 'img-home',
        'icon'   => 'el el-camera',
        'fields' => array(
             array(
                'id'       => 'home1',
                'type'     => 'switch',
                'title'    => __( 'Images Home 1', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'img-home1',
                'type' => 'media',
                'url' => true,
                'title'    => __( 'Upload Images Home 1', 'golf' ),
                'desc'     => __( 'Create Your Trip ', 'golf' ),
                ),
            array(
                'id'       => 'home2',
                'type'     => 'switch',
                'title'    => __( 'Images Home 2', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'img-home2',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'    => __( 'Upload Images Home 2', 'golf' ),
                'desc'     => __( 'Golf Holidays ', 'golf' ),
                ),
            array(
                'id'       => 'home3',
                'type'     => 'switch',
                'title'    => __( 'Images Home 3', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'img-home3',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'    => __( 'Upload Images Home 3', 'golf' ),
                'desc'     => __( 'Book Your Teetimes', 'golf' ),
                ),
            array(
                'id'       => 'home4',
                'type'     => 'switch',
                'title'    => __( 'Images Home 4', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'img-home4',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'    => __( 'Upload Images Home 4', 'golf' ),
                'desc'     => __( 'Images Middle', 'golf' ),
                ),
            array(
                'id'       => 'home6',
                'type'     => 'switch',
                'title'    => __( 'Images Home 5', 'golf' ),
                'compiler' => 'bool',
                'on'       => __('Show','golf'),
                'off'       => __('Hide','golf'),
                ),
            array(
                'id' => 'img-home6',
                'type' => 'media',
                'url' => true,
                'preview' => 'bool',
                'title'    => __( 'Upload Images Home 5', 'golf' ),
                'desc'     => __( 'Images Footer', 'golf' ),
                ),
        )
    ) );
// Social Footer
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Facebook,google,twitter...', 'golf' ),
        'id'         => 'social-network',
        'icon'       => 'el el-facebook',
        'fields'     => array(
            array(
                'id'       => 'facebook-api',
                'type'     => 'text',
                'title'    => __( 'Link Facebook', 'golf' ),
            ),
            array(
                'id'       => 'twitter-api',
                'type'     => 'text',
                'title'    => __( 'Link Twitter', 'golf' ),
            ),
            array(
                'id'       => 'google-api',
                'type'     => 'text',
                'title'    => __( 'Link Google', 'golf' ),
            ),
            array(
                'id'       => 'linkedin-api',
                'type'     => 'text',
                'title'    => __( 'Link Linkedin', 'golf' ),
            ),
            array(
                'id'       => 'paypal-api',
                'type'     => 'text',
                'title'    => __( 'Link Paypal', 'golf' ),
            ),
        )
    ) );
// Download
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Download', 'golf' ),
        'id'         => 'download_guide',
        'icon'       => 'el el-download-alt',
        'fields'     => array(
            array(
                'id' => 'img-download',
                'type' => 'media',
                'url' => true,
                'title'    => __( 'Upload Images Download', 'golf' ),
            ),
            array(
                'id' => 'a-download',
                'type' => 'editor',
                'url' => true,
                'title'    => __( 'Upload Link Download', 'golf' ),
            ),
        )
    ) );
// Our Golf Courses In VietNam
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Our Golf Courses In VietNam', 'golf' ),
        'id'         => 'courses_golf',
        'icon'       => 'el el-fontsize',
        'fields'     => array(
            array(
                'id' => 'div_courses_golf',
                'type' => 'editor',
                'url' => true,
            ),
            array(
                'id' => 'img_banner_page',
                'type' => 'media',
                'url' => true,
                'title'    => __( 'Upload Banner Pages ', 'golf' ),
            ),
        )
    ) );
// Top In The World
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Top In The World 1', 'golf' ),
        'id'         => 'top_golf_world1',
        'icon'       => 'el el-edit',
        'fields'     => array(
            array(
                'id' => 'title_top_world1',
                'type' => 'text',
                'url' => true,
                'title'    => __( 'Title Top In The World 1', 'golf' ),
            ),
            array(
                'id' => 'number_top_world1',
                'type' => 'text',
                'url' => true,
                'title'    => __( 'Number Courses Top In The World 1', 'golf' ),
            ),
            array(
                'id' => 'content_top_world1',
                'type' => 'editor',
                'url' => true,
                'title'    => __( 'Content Top In The World 1', 'golf' ),
            ),
            array(
                'id' => 'img_top_world1',
                'type' => 'media',
                'url' => true,
                'title'    => __( 'Upload Images ', 'golf' ),
            ),
            array(
                'id' => 'link_top_world1',
                'type' => 'text',
                'url' => true,
                'title'    => __( 'Link  ', 'golf' ),
            ),
        )
    ) );
// Top In The World 2
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Top In The World 2', 'golf' ),
        'id'         => 'top_golf_world2',
        'icon'       => 'el el-edit',
        'fields'     => array(
            array(
                'id' => 'title_top_world2',
                'type' => 'text',
                'url' => true,
                'title'    => __( 'Title Top In The World 2', 'golf' ),
            ),
            array(
                'id' => 'number_top_world2',
                'type' => 'text',
                'url' => true,
                'title'    => __( 'Number Courses Top In The World 2', 'golf' ),
            ),
            array(
                'id' => 'content_top_world2',
                'type' => 'editor',
                'url' => true,
                'title'    => __( 'Content Top In The World 2', 'golf' ),
            ),
            array(
                'id' => 'img_top_world2',
                'type' => 'media',
                'url' => true,
                'title'    => __( 'Upload Images ', 'golf' ),
            ),
            array(
                'id' => 'link_top_world2',
                'type' => 'text',
                'url' => true,
                'title'    => __( 'Link', 'golf' ),
            ),
        )
    ) );
// Top In The World 3
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Top In The World 3', 'golf' ),
        'id'         => 'top_golf_world3',
        'icon'       => 'el el-edit',
        'fields'     => array(
            array(
                'id' => 'title_top_world3',
                'type' => 'text',
                'url' => true,
                'title'    => __( 'Title Top In The World 3', 'golf' ),
            ),
            array(
                'id' => 'number_top_world3',
                'type' => 'text',
                'url' => true,
                'title'    => __( 'Number Courses Top In The World 3', 'golf' ),
            ),
            array(
                'id' => 'content_top_world3',
                'type' => 'editor',
                'url' => true,
                'title'    => __( 'Content Top In The World 3', 'golf' ),
            ),
            array(
                'id' => 'img_top_world3',
                'type' => 'media',
                'url' => true,
                'title'    => __( 'Upload Images ', 'golf' ),
            ),
            array(
                'id' => 'link_top_world3',
                'type' => 'text',
                'url' => true,
                'title'    => __( 'Link', 'golf' ),
            ),
        )
    ) );
// Upload Images Create Your Trip
         Redux::setSection( $opt_name, array(
            'title'  => __( 'Picture Create Your Trip', 'golf' ),
            'id'     => 'img-create-trip',
            'icon'   => 'el el-camera',
            'fields' => array(
                 array(
                    'id'       => 'show-img-create-trip1',
                    'type'     => 'switch',
                    'title'    => __( 'Images Sidebar 1', 'golf' ),
                    'compiler' => 'bool',
                    'on'       => __('Show','golf'),
                    'off'       => __('Hide','golf'),
                    ),
                array(
                    'id' => 'up-img-create-trip1',
                    'type' => 'media',
                    'url' => true,
                    'title'    => __( 'Upload Images Sidebar 1', 'golf' ),
                    ),
                 array(
                    'id'       => 'show-img-create-trip2',
                    'type'     => 'switch',
                    'title'    => __( 'Images Sidebar 2', 'golf' ),
                    'compiler' => 'bool',
                    'on'       => __('Show','golf'),
                    'off'       => __('Hide','golf'),
                    ),
                array(
                    'id' => 'up-img-create-trip2',
                    'type' => 'media',
                    'url' => true,
                    'title'    => __( 'Upload Images Sidebar 2', 'golf' ),
                    ),
                 array(
                    'id'       => 'show-img-create-trip3',
                    'type'     => 'switch',
                    'title'    => __( 'Images Sidebar 3', 'golf' ),
                    'compiler' => 'bool',
                    'on'       => __('Show','golf'),
                    'off'       => __('Hide','golf'),
                    ),
                array(
                    'id' => 'up-img-create-trip3',
                    'type' => 'media',
                    'url' => true,
                    'title'    => __( 'Upload Images Sidebar 3', 'golf' ),
                    ),

            )
        ) );
// Upload Images Button
         Redux::setSection( $opt_name, array(
            'title'  => __( 'Images Button', 'golf' ),
            'id'     => 'img-all-button-btn',
            'icon'   => 'el el-camera',
            'fields' => array(
                array(
                    'id' => 'up-img-btn-viemore1',
                    'type' => 'media',
                    'url' => true,
                    'title'    => __( 'Upload Button View More 26 Countries', 'golf' ),
                    ),
                array(
                    'id' => 'up-img-btn-viemore2',
                    'type' => 'media',
                    'url' => true,
                    'title'    => __( 'Upload Button View More Course', 'golf' ),
                    ),
                array(
                    'id' => 'up-img-btn-viemore5',
                    'type' => 'media',
                    'url' => true,
                    'title'    => __( 'Upload Button See All Out Course', 'golf' ),
                    ),
                array(
                    'id' => 'up-img-btn-submit1',
                    'type' => 'media',
                    'url' => true,
                    'title'    => __( 'Upload Button Create Your Trip', 'golf' ),
                    ),
                array(
                    'id' => 'up-img-btn-submit2',
                    'type' => 'media',
                    'url' => true,
                    'title'    => __( 'Upload Button Submit Create Trip', 'golf' ),
                    ),
            )
        ) );
