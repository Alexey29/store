<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 16.07.18
 * Time: 10:55
 */

class Session
{
    public function setName ($name){
        session_name($name);
    }

    public function Name(){
        return session_name();
    }

    public function  getId(){
        return session_id();
    }

    public function setId($id){
        session_id($id);
    }

    public  function cookieExists(){
        if(isset($_COOKIE)){
            return true;
        }else{
            return false;
        }
    }

    public function sessionExists(){
        if(isset($_SESSION)){
            return true;
        }else{
            return false;
        }
    }

    public function start(){
        session_start();
    }

    public function destroy(){
        session_destroy();
    }

    public  function setsavePath($path){
        session_save_path($path);
    }

    public function set( $key ,$value){
        $_SESSION["$key"]=$value;
    }

    public function get(){
        return $_SESSION;
    }

    public function contains($key){
        if(isset($_SESSION["$key"])){
            return true;
        }else{
            return false;
        }
    }

    public function delete($key){
        unset($_SESSION["$key"]);
    }

}