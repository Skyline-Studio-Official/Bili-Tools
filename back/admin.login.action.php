<?php
    /*
     * Author : torunwithwind 和风赛跑的男人
     * Action : 后台管理员登录的后台代码
     * Time : 2022/4/6
     * */
    include 'PublicClass.php';
    if (isset($_POST['adminUsername']) && isset($_POST['adminPassword'])){
        $adminUsr = $_POST['adminUsername'];
        $adminPwd = $_POST['adminPassword'];
    }else{
        $adminUsr = '';
        $adminPwd = '';
    }

    if (empty($adminUsr) || empty($adminPwd)){
        exit("<script>alert('用户名和密码不能为空')</script>'");
    }

?>