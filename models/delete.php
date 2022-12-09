<?php

if(isset($_POST['id']))
{
    $exitProduct = new ProductController();
    $exitProduct->deleteProduct();
    header("location:newarrival");
}
?>