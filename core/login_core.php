<?php
/**
 * Created by PhpStorm.
 * User: subhabrata
 * Date: 12/12/2015
 * Time: 10:49 AM
 */
if(count(get_included_files()) ==1) exit("Direct access not permitted.");
include 'core/database.php';
require_once 'core/database.php';
class login_core
{
    function register($a,$b,$c,$d){
        $db=new database();
        $db->connect();

        $sql = "INSERT INTO `players` (`p_name`, `p_college`, `p_uname`, `p_pw`) VALUES ('".$a."','".$b."','".$c."','".md5($d)."')";

        if (database::$mysqli->query($sql) === TRUE) {
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . database::$mysqli->error;
            exit();
        }
}
    function login($a,$b){
        $db=new database();
        $db->connect();

        $sql = "SELECT * FROM `players` WHERE `p_uname`='".$a."' AND `p_pw`='".md5($b)."'";

        if ($result=database::$mysqli->query($sql)) {
            while($obj = $result->fetch_object()){
                session_start();
                $_SESSION["p_id"] = $obj->p_id;
                $_SESSION["p_name"] = $obj->p_name;
                $_SESSION["p_uname"] = $obj->p_uname;
                $_SESSION["p_college"] = $obj->p_college;

            }


        }
    }


}