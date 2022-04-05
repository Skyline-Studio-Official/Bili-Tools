<?php 
    /*
     * Author : torunwithwind 和风赛跑的男人
     * Action : 公共类，类似于公共变量和公共函数的存储区，也可以存储公共对象
     * Time : 2022/4/5
     * */

    // 数据库信息
    $dbName = '';
    $dbHost = '';
    $dbUsr = '';
    $dbPwd = '';
    $dbPort = 3306;

    function isTrue($val){
        if ($val == true) return true;
        else return false;
    }

    function isFalse($val){
        if ($val == false) return true;
        else return false;
    }

    function isNull($val){
        if ($val == NULL) return true;
        else return false;
    }

    class operateMysql{
        /* MySql数据库操作类
         * */

        // 连接MySql数据库
        function connectDb($conn, $host, $usr, $pwd, $port, $name){
            $conn = mysqli_connect($host, $usr, $pwd, $name, $port);
            if (!$conn){
                die("Connect failed:" . mysqli_connect_error());
            }
            echo "Connect Successfully";
        }

        // 执行sql语句
        function executeSql($conn, $sqlString){
            return mysqli_query($conn, $sqlString);
        }

    }

?>