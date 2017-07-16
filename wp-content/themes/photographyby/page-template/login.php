<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 27-Feb-17
 * Time: 10:57 AM
 * Template Name: Login
 */

if ($_POST) {

    global $wpdb;

//We shall SQL escape all inputs
    $username = $wpdb->escape($_REQUEST['username']);
    $password = $wpdb->escape($_REQUEST['password']);
    $remember = $wpdb->escape($_REQUEST['rememberme']);

    if ($remember) $remember = "true";
    else $remember = "false";

    $login_data = array();
    $login_data['user_login'] = $username;
    $login_data['user_password'] = $password;
    $login_data['remember'] = $remember;

    $user_verify = wp_signon($login_data, false);

    if (is_wp_error($user_verify)) {
        $errorrmsg = "Invalid login details";
        header("Location: " . home_url() . "/register?err=" . $errorrmsg);
// Note, I have created a page called "Error" that is a child of the login page to handle errors. This can be anything, but it seemed a good way to me to handle errors.
    } else {
        echo "<script type='text/javascript'>window.location='" . home_url() . "'</script>";
        exit();
    }

}

