<?php
    include('db.php');
    if(isset($_POST["btnLogin"]))
    {
        // $name = $_POST["txtName"];  
        // $partNo = $_POST["txtPartno"];
        // $target = "Product Images/".basename($_FILES['proImg']['name']);
        // $image = $_FILES['proImg']['name'];  
        // $proPrice = $_POST["txtproPrice"];    
        // $proDes = $_POST["proDescription"];    
        
        // $sql = "INSERT INTO tbl_products (pro_name, pro_partNum, pro_description, pro_pic,pro_price)
        // VALUES ('$name', '$partNo', '$proDes','$image' ,'$proPrice')";
     
        // $rs = mysqli_query($con,$sql);
        // if (move_uploaded_file($_FILES['proImg']['tmp_name'], $target) && $rs) 
        // {
            echo "<script>window.location.assign('dashboard.php');</script>";  
        // }
    }
    
    if(isset($_POST["btn_addPro"]))
    {
        $name = $_POST["txtName"];  
        $partNo = $_POST["txtPartno"];
        $target = "Product Images/".basename($_FILES['proImg']['name']);
        $image = $_FILES['proImg']['name'];  
        $proPrice = $_POST["txtproPrice"];    
        $proDes = $_POST["proDescription"];    
        
        $sql = "INSERT INTO tbl_products (pro_name, pro_partNum, pro_description, pro_pic,pro_price)
        VALUES ('$name', '$partNo', '$proDes','$image' ,'$proPrice')";
     
        $rs = mysqli_query($con,$sql);
        if (move_uploaded_file($_FILES['proImg']['tmp_name'], $target) && $rs) 
        {
            echo "<script>window.location.assign('products.php');</script>";  
        }
    }

    if(isset($_POST["btn_udpPro"]))
    {
        // $name = $_POST["txtName"];  
        // $partNo = $_POST["txtPartno"];
        // $target = "Product Images/".basename($_FILES['proImg']['name']);
        // $image = $_FILES['proImg']['name'];  
        // $proPrice = $_POST["txtproPrice"];    
        // $proDes = $_POST["proDescription"];    
        
        // $sql = "INSERT INTO tbl_products (pro_name, pro_partNum, pro_description, pro_pic,pro_price)
        // VALUES ('$name', '$partNo', '$proDes','$image' ,'$proPrice')";
     
        // $rs = mysqli_query($con,$sql);
        // if (move_uploaded_file($_FILES['proImg']['tmp_name'], $target) && $rs) 
        // {
            echo "<script>window.location.assign('updateProducts.php');</script>";  
        // }
    }

    
    if(isset($_GET["del_pro"]))
    {
        $place = $_GET["del_pro"];
        $sql = "delete from tbl_products where pro_id = ".$place."" ;
    $rs = mysqli_query($con,$sql);
        if($rs)
        {
            echo "<script>window.location.assign('products.php');</script>";
        }
    }
    
    if(isset($_POST["btnContact"]))
    {
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $subject = $_POST['Subject'];
        $message = $_POST['Message'];
        $sql = "insert into tbl_contact (name, email, subject, message) VALUES ('$name', '$email', '$subject','$message')";
        $rs = mysqli_query($con,$sql);
        if($rs)
        {
            echo "<script>window.location.assign('contact.php');</script>";
        }
    }
?>