<?php

session_start();
if(!isset($_GET['path']))
{
    $path="main";
}
else{
    $path=$_GET['path'];
}

require("modele/bdd.php");
    switch ($path){
        case "main":
        require('controller/controller.php');
        break;

        case "admin":
            //require('controller/adminController.php');
        
        require("modele/manager/adminManager.php");
        require("modele/manager/joueurManager.php");
        $unPDO=etablirCo();
        $adminManager=new AdminManager($unPDO);
        $admin=$adminManager->getUnAdminByPseudo($_SESSION['pseudo']);
        //var_dump($admin);
        if ($admin==false) {
            require('controller/controller.php');
        }else if ($admin==true) {
            require('controller/adminController.php');
        }
        break;

        default :
        include("view/404.php");
    }



?>