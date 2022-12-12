<?php
session_start();
require './autoload.php';
$page='';
if(isset($_GET['page']))
{
    $page=$_GET['page'];
}
if($page == 'add')
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
}elseif($page == 'login')
{
    require 'views/login.php';
}elseif($page == 'newarrival')
{
    require 'views/newArrival.php';
}elseif($page == 'delete')
{
    require 'models/delete.php';
}elseif($page == 'update')
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