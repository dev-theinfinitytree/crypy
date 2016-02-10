<?php
/**
 * Created by PhpStorm.
 * User: subhabrata
 * Date: 12/12/2015
 * Time: 11:01 PM
 */
session_start();
if(isset($_SESSION["p_uname"])) {
    session_unset();
}