<?php

    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'wp_Theme_Options' ) ) {

        class wp_Theme_Options {

            public $args = array();
            public $sections = array();
            public $theme;
            public $ReduxFramework;

            public function __construct() {

                if ( ! class_exists( 'ReduxFramework' ) ) {
                    return;
                }

                // This is needed. Bah WordPress bugs.  ;)
                if ( true == Redux_Helpers::isTheme( __FILE__ ) ) {
                    $this->initSettings();
                } else {
                    add_action( 'plugins_loaded', array( $this, 'initSettings' ), 10 );
                }

            }

            public function initSettings() {

                // Set the default arguments
                $this->setArguments();

                // Set a few help tabs so you can see how it's done
                $this->setHelpTabs();

                // Create the sections and fields
                $this->setSections();

                if ( ! isset( $this->args['opt_name'] ) ) { // No errors please
                    return;
                }

                $this->ReduxFramework = new ReduxFramework( $this->sections, $this->args );
            }

            public function setSections() {


                // ACTUAL DECLARATION OF SECTIONS
                $this->sections[] = array(
                    'title'  => __( 'Header', 'wp' ),
                    'desc'   => __( 'All of setings for header on this theme.', 'wp' ),
                    'icon'   => '',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(

                        array(
                            'id'       => 'logo-on',
                            'type'     => 'switch',
                            'title'    => __( 'Enable Image Logo', 'wp' ),
                            'compiler' => 'bool',
                            // Can be set to false to allow any media type, or can also be set to any mime type.
                            'desc'     => __( 'Do you want to enable image logo?', 'wp' ),
                            'on'        => __('Enabled', 'wp'),
                            'off'       => __('Disabled', 'wp')
                        ),
                        array(
                            'id'    => 'logo-image',
                            'type'  => 'media',
                            'title' => __('Logo Image', 'wp'),
                            'desc'  => __('Image that you want to use as logo.', 'wp')
                        ),
                    )
                );

                $this->sections[] = array(
                    'title'  => __( 'Avatar', 'wp' ),
                    'desc'   => __( 'All of setings for header on this theme.', 'wp' ),
                    'icon'   => '',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(

                        array(
                            'id'       => 'avatar-on',
                            'type'     => 'switch',
                            'title'    => __( 'Enable Image Logo', 'wp' ),
                            'compiler' => 'bool',
                            // Can be set to false to allow any media type, or can also be set to any mime type.
                            'desc'     => __( 'Do you want to enable image logo?', 'wp' ),
                            'on'        => __('Enabled', 'wp'),
                            'off'       => __('Disabled', 'wp')
                        ),
                        array(
                            'id'    => 'avatar-image',
                            'type'  => 'media',
                            'title' => __('Logo Image', 'wp'),
                            'desc'  => __('Image that you want to use as logo.', 'wp')
                        ),
                    )
                );

                $this->sections[] = array(
                    'title'  => __( 'SNS', 'wp' ),
                    'desc'   => __( 'Link mạng xã hội.', 'wp' ),
                    'icon'   => 'el el-facebook',

                    'fields' => array(
                        array(
                            'id'       => 'facebook',
                            'type'     => 'text',
                            'title'    => __( 'facebook', 'wp' ),
                            'placeholder'   => 'https://facebook.com/user',
                        ),
                        array(
                            'id'       => 'twitter',
                            'type'     => 'text',
                            'title'    => __( 'twitter', 'wp' ),
                            'placeholder'   => 'https://twitter.com/user',
                        ),
                        array(
                            'id'       => 'google',
                            'type'     => 'text',
                            'title'    => __( 'google', 'wp' ),
                            'placeholder'   => 'https://google.com/user',
                        ),
                        array(
                            'id'       => 'pinterest',
                            'type'     => 'text',
                            'title'    => __( 'pinterest', 'wp' ),
                            'placeholder'   => 'https://pinterest.com/user',
                        ),
                    )
                );

                $this->sections[] = array(
                    'title'  => __( 'PROFILE', 'wp' ),
                    'desc'   => __( 'Profle admin.', 'wp' ),
                    'icon'   => 'el el-address-book',

                    'fields' => array(
                        array(
                            'id'       => 'file-profile',
                            'type'     => 'media',
                            'title'    => __( 'File download', 'wp' ),
                        ),
                        array(
                            'id'       => 'name-profile',
                            'type'     => 'text',
                            'title'    => __( 'Name', 'wp' ),
                        ),
                        array(
                            'id'       => 'position-profile',
                            'type'     => 'text',
                            'title'    => __( 'Job', 'wp' ),
                        ),
                        array(
                            'id'       => 'description-profile',
                            'type'     => 'editor',
                            'title'    => __( 'Description', 'wp' ),
                        ),
                        array(
                            'id'       => 'age-profile',
                            'type'     => 'text',
                            'title'    => __( 'Age', 'wp' ),
                        ),
                        array(
                            'id'       => 'nationality-profile',
                            'type'     => 'text',
                            'title'    => __( 'Nationality', 'wp' ),
                        ),
                        array(
                            'id'       => 'address-profile',
                            'type'     => 'text',
                            'title'    => __( 'Address', 'wp' ),
                        ),
                        array(
                            'id'       => 'phone-profile',
                            'type'     => 'text',
                            'title'    => __( 'Phone', 'wp' ),
                        ),
                        array(
                            'id'       => 'skype-profile',
                            'type'     => 'text',
                            'title'    => __( 'Skype', 'wp' ),
                        ),
                        array(
                            'id'       => 'email-profile',
                            'type'     => 'text',
                            'title'    => __( 'Email', 'wp' ),
                        ),
                        array(
                            'id'       => 'website-profile',
                            'type'     => 'text',
                            'title'    => __( 'Website', 'wp' ),
                        ),
                        array(
                            'id'       => 'title-skills-profile',
                            'type'     => 'text',
                            'title'    => __( 'title skill web', 'wp' ),
                        ),
                        array(
                            'id'       => 'descript-skills-profile',
                            'type'     => 'editor',
                            'title'    => __( 'description skill web', 'wp' ),
                        ),
                        array(
                            'id'       => 'title-skills-design-profile',
                            'type'     => 'text',
                            'title'    => __( 'title skill design', 'wp' ),
                        ),
                        array(
                            'id'       => 'descript-skills-design-profile',
                            'type'     => 'editor',
                            'title'    => __( 'description skill design', 'wp' ),
                        ),
                        array(
                            'id'       => 'title-skill-1',
                            'type'     => 'text',
                            'title'    => __( 'title skill', 'wp' ),
                        ),
                        array(
                            'id'       => 'value-skill-1',
                            'type'     => 'text',
                            'title'    => __( 'value skill', 'wp' ),
                        ),
                        array(
                            'id'       => 'title-skill-2',
                            'type'     => 'text',
                            'title'    => __( 'title skill 1', 'wp' ),
                        ),
                        array(
                            'id'       => 'value-skill-2',
                            'type'     => 'text',
                            'title'    => __( 'value skill', 'wp' ),
                        ),
                        array(
                            'id'       => 'title-skill-3',
                            'type'     => 'text',
                            'title'    => __( 'title skill', 'wp' ),
                        ),
                        array(
                            'id'       => 'value-skill-3',
                            'type'     => 'text',
                            'title'    => __( 'value skill', 'wp' ),
                        ),
                        array(
                            'id'       => 'title-skill-4',
                            'type'     => 'text',
                            'title'    => __( 'title skill', 'wp' ),
                        ),
                        array(
                            'id'       => 'value-skill-4',
                            'type'     => 'text',
                            'title'    => __( 'value skill', 'wp' ),
                        ),
                        array(
                            'id'       => 'title-skill-5',
                            'type'     => 'text',
                            'title'    => __( 'title skill', 'wp' ),
                        ),
                        array(
                            'id'       => 'value-skill-5',
                            'type'     => 'text',
                            'title'    => __( 'value skill', 'wp' ),
                        ),
                        array(
                            'id'       => 'title-skill-6',
                            'type'     => 'text',
                            'title'    => __( 'title skill', 'wp' ),
                        ),
                        array(
                            'id'       => 'value-skill-6',
                            'type'     => 'text',
                            'title'    => __( 'value skill', 'wp' ),
                        ),
                        array(
                            'id'       => 'title-skill-7',
                            'type'     => 'text',
                            'title'    => __( 'title skill', 'wp' ),
                        ),
                        array(
                            'id'       => 'value-skill-7',
                            'type'     => 'text',
                            'title'    => __( 'value skill', 'wp' ),
                        ),
                        array(
                            'id'       => 'title-skill-8',
                            'type'     => 'text',
                            'title'    => __( 'title skill', 'wp' ),
                        ),
                        array(
                            'id'       => 'value-skill-8',
                            'type'     => 'text',
                            'title'    => __( 'value skill', 'wp' ),
                        ),
                        array(
                            'id'       => 'education',
                            'type'     => 'editor',
                            'title'    => __( 'Education', 'wp' ),
                        ),
                    )
                );

                $this->sections[] = array(
                    'title'  => __( 'Typography', 'wp' ),
                    'desc'   => __( 'All of typography settings.', 'wp' ),
                    'icon'   => 'el el-icon-font',

                    'fields' => array(
                        array(
                            'id'       => 'typo-main',
                            'type'     => 'typography',
                            'title'    => __( 'Main Typography', 'wp' ),
                            'output'    => 'body',
                            'text-transform'    => true,
                            'default'   => array(
                                'font-size' => '14px',
                                'font-family' => 'Helvetica Neue, Arial, sans-serif',
                                'color'    => '#333333'
                            )
                        ),
                    )
                );
            }

            public function setHelpTabs() {

                // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-1',
                    'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
                );

                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-2',
                    'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
                );

                // Set the help sidebar
                $this->args['help_sidebar'] = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
            }

            /**
             * All the possible arguments for Redux.
             * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
             * */
            public function setArguments() {

                $theme = wp_get_theme(); // For use with some settings. Not necessary.

                $this->args = array(
                    // TYPICAL -> Change these values as you need/desire
                    'opt_name'           => 'tp_options',
                    // This is where your data is stored in the database and also becomes your global variable name.
                    'display_name'       => $theme->get( 'Name' ),
                    // Name that appears at the top of your panel
                    'display_version'    => $theme->get( 'Version' ),
                    // Version that appears at the top of your panel
                    'menu_type'          => 'menu',
                    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                    'allow_sub_menu'     => true,
                    // Show the sections below the admin menu item or not
                    'menu_title'         => __( 'Sample Options', 'redux-framework-demo' ),
                    'page_title'         => __( 'Sample Options', 'redux-framework-demo' ),
                    // You will need to generate a Google API key to use this feature.
                    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                    'google_api_key'     => 'AIzaSyAs0iVWrG4E_1bG244-z4HRKJSkg7JVrVQ',
                    // Must be defined to add google fonts to the typography module

                    'async_typography'   => false,
                    // Use a asynchronous font on the front end or font string
                    'admin_bar'          => true,
                    // Show the panel pages on the admin bar
                    'global_variable'    => '',
                    // Set a different name for your global variable other than the opt_name
                    'dev_mode'           => true,
                    // Show the time the page took to load, etc
                    'customizer'         => true,
                    // Enable basic customizer support

                    // OPTIONAL -> Give you extra features
                    'page_priority'      => null,
                    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
                    'page_parent'        => 'themes.php',
                    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
                    'page_permissions'   => 'manage_options',
                    // Permissions needed to access the options panel.
                    'menu_icon'          => '',
                    // Specify a custom URL to an icon
                    'last_tab'           => '',
                    // Force your panel to always open to a specific tab (by id)
                    'page_icon'          => 'icon-themes',
                    // Icon displayed in the admin panel next to your menu_title
                    'page_slug'          => '_options',
                    // Page slug used to denote the panel
                    'save_defaults'      => true,
                    // On load save the defaults to DB before user clicks save or not
                    'default_show'       => false,
                    // If true, shows the default value next to each field that is not the default value.
                    'default_mark'       => '',
                    // What to print by the field's title if the value shown is default. Suggested: *
                    'show_import_export' => true,
                    // Shows the Import/Export panel when not used as a field.

                    // CAREFUL -> These options are for advanced use only
                    'transient_time'     => 60 * MINUTE_IN_SECONDS,
                    'output'             => true,
                    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
                    'output_tag'         => true,
                    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
                    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

                    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
                    'database'           => '',
                    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
                    'system_info'        => false,
                    // REMOVE

                    // HINTS
                    'hints'              => array(
                        'icon'          => 'icon-question-sign',
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


                // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
                $this->args['share_icons'][] = array(
                    'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
                    'title' => 'Visit us on GitHub',
                    'icon'  => 'el el-github'
                    //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
                );
                $this->args['share_icons'][] = array(
                    'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
                    'title' => 'Like us on Facebook',
                    'icon'  => 'el el-facebook'
                );
                $this->args['share_icons'][] = array(
                    'url'   => 'http://twitter.com/reduxframework',
                    'title' => 'Follow us on Twitter',
                    'icon'  => 'el el-twitter'
                );
                $this->args['share_icons'][] = array(
                    'url'   => 'http://www.linkedin.com/company/redux-framework',
                    'title' => 'Find us on LinkedIn',
                    'icon'  => 'el el-linkedin'
                );

                // Panel Intro text -> before the form
                if ( ! isset( $this->args['global_variable'] ) || $this->args['global_variable'] !== false ) {
                    if ( ! empty( $this->args['global_variable'] ) ) {
                        $v = $this->args['global_variable'];
                    } else {
                        $v = str_replace( '-', '_', $this->args['opt_name'] );
                    }
                    $this->args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
                } else {
                    $this->args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
                }

                // Add content after the form.
                $this->args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );
            }

        }

        global $reduxConfig;
        $reduxConfig = new wp_Theme_Options();
    }
