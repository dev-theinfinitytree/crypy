<?php
/**
 *
 * User: subhabrata
 * Date: 12/15/2015
 * Time: 5:52 AM
 */

namespace game;
if(count(get_included_files()) ==1) exit("Direct access not permitted.");
include 'core/database.php';
require_once 'core/database.php';
session_start();

class game {

    function get_level(){

        $db=new \database();
        $db->connect();

        $sql = "SELECT * FROM `players` WHERE `p_id`='".$_SESSION["p_id"]."' ";

       $result=\database::$mysqli->query($sql);

        if($result->num_rows !=0){
            $row = $result->fetch_array(MYSQLI_ASSOC);

            $l_id=$row["l_id"];
            $obj=new game();
            $url=$obj->get_game_url($l_id);
            return $url;

        }


    }

    function  get_game_url($l_id){
        $db=new \database();
        $db->connect();

        $sql = "SELECT * FROM `levels` WHERE `l_id`='".$l_id."' ";
        $result=\database::$mysqli->query($sql);
        if($result->num_rows !=0){
            $row = $result->fetch_array(MYSQLI_ASSOC);

            $l_name=$row["l_name"];

            return $l_name;

        }

    }

    function  check_answer($l_id,$ans){

        $db=new \database();
        $db->connect();

        $sql = "SELECT * FROM `levels` WHERE `l_id`='".$l_id."' ";
        $result=\database::$mysqli->query($sql);
        if($result->num_rows !=0){
            $row = $result->fetch_array(MYSQLI_ASSOC);

            $l_answer=$row["l_answer"];
            if($l_answer==$ans){
                return 1;
            }
            else{
                return 0;
            }



        }
        else{
            return 'error';
        }

    }
    function  change_level(){

        $db=new \database();
        $db->connect();


        $sql = " UPDATE `players` SET `l_id`=`l_id`+1 , `l_time`='".date('Y-m-d H:i:s')."' WHERE `p_id`='".$_SESSION["p_id"]."'";


        if (\database::$mysqli->query($sql) === TRUE) {
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . \database::$mysqli->error;
            exit();
        }

    }
}