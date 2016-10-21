<?php
/**
* Plugin Name: Switzer Creative Base Options
* Plugin URI: http://www.switzercreative.com/plugin
* Description: A brief description about your plugin.
* Version: 2.0
* Author: Switzer Creative
* Author URI: http://www.switzercreative.com
* License: GPL12
*/
//Custom SC login
function sc_customize_login() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background: url("http://www.switzercreative.com/cdn/wp-logo.png") no-repeat center;
            background-size: contain !important;
            padding-bottom: 0px;
            width: 100%;
            position: relative;
            left: -30px;
        }

        html, html body {
            height: 100%;
            min-height: 100vh;
            overflow: auto;
        }

        body.login {
            background-image: url("http://www.switzercreative.com/cdn/wp-login.jpg");
            background-repeat: no-repeat;
            background-position: top center;
            background-size: cover;
        }

        body.login form {
            border: 1px solid white;
            background: none;
        }

        body.login form p label {
            color: white;
        }

        body.login form div {
            color: white;
        }

        body.login #nav a,
        body.login #backtoblog a {
            color: white;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'sc_customize_login' );


add_action('wp_head', 'image_fix');
function image_fix()
{
    if(function_exists('fix_images')) fix_images();
}

?>