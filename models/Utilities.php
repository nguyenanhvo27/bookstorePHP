<?php 
class Utilities{
    public static function get($key, $defaultValue='')
    {
        return isset($_GET[$key])?$_GET[$key]:$defaultValue;
    }

    public static function post($key, $defaultValue='')
    {
        return isset($_POST[$key])?$_POST[$key]:$defaultValue;
    }

    public static function encyptMD5($pw)
    {
        $s1='~(B%'; $s2= '+#%&';//salt - thuoc
        $pw =$s1 . $pw .$s2;
        return MD5($pw);
    }

    public static function encyptSHA1($pw)
    {
        $s1='~(B%'; $s2= '+#%&';//salt - thuoc
        $pw =$s1 . $pw .$s2;
        return SHA1($pw);
    }

}