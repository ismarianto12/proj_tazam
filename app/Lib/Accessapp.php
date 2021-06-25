<?php

namespace App\Lib;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
// use App\Lib\LogProp;
use App\Lib\LogProp;

class Accessapp extends LogProp
{
    public static $username;
    public static $password;

    public static function run($username, $password)
    {
        self::$username = $username;
        self::$password = $password;
        // var_dump(self::$username.'.'.self::$password);
        try {
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    function login()
    {
    }
}

 
// $a = Login::run('username','password');
//      echo $a;