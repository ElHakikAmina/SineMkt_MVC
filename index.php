<?php
session_start();
require './autoload.php';
$page='';
if(isset($_GET['page']))
{
    $page=$_GET['page'];
}
if($page == 'add' && isset($_SESSION['logged']) && $_SESSION['logged']==true )
{
 require 'views/addProduct.php';
}elseif($page == 'blog')
{
    require 'views/blog.php';
}elseif($page == 'contact')
{
    require 'views/contact.php';
}elseif($page == 'featured')
{
    require 'views/featuredProducts.php';
}elseif($page == 'login'  && !isset($_SESSION['logged']) )
{
    require 'views/login.php';
}elseif($page == 'newarrival')
{
    require 'views/newArrival.php';
}elseif($page == 'delete' && isset($_SESSION['logged']) && $_SESSION['logged']==true)
{
    require 'models/delete.php';
}elseif($page == 'update' && isset($_SESSION['logged']) && $_SESSION['logged']==true)
{
    require 'views/update.php';
}elseif($page == 'logout')
{
    require 'controllers/logout.php';
}
else{
    require 'views/index.php';
}
?>