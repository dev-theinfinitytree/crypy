<?php
/**
 * Created by PhpStorm.
 * User: subhabrata
 * Date: 12/12/2015
 * Time: 10:03 AM
 */
if(count(get_included_files()) ==1) exit("Direct access not permitted.");


class database{
     public static $mysqli;
    function connect(){

        database::$mysqli = new mysqli("localhost", "root", "", "crypy");


        /* check connection */
        if (database::$mysqli->connect_errno) {
            printf("Connect failed: %s\n", database::$mysqli->connect_error);
            exit();
        }
        else{
            return database::$mysqli;
        }
    }
}
