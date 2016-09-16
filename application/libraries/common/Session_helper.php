<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: arel
 * Date: 13/09/2016
 * Time: 8:56 PM
 */
class Session_helper
{
    public function __construct() {
        if(session_id() == '') {
            session_start();
        }
    }

    public function hasActiveSession() {
        return array(
            "hasActiveSession" => isset($_SESSION['username'])
        );
    }

    public function setActiveSession($username) {
        $_SESSION['username'] = $username;
    }

    public function destroyActiveSession() {
        unset($_SESSION['username']);
    }
}