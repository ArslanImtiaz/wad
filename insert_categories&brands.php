<?php
require_once "db_connection.php";
if(isset($_POST['insert_categories'])){
    //getting text data from the fields
    $pro_cat = $_POST['pro_category'];
    $pro_brand = $_GET['pro_brand'];
    $insert_category = "insert into category (pro_category) 
                  VALUES ('$pro_cat');";
    $insert_categories = mysqli_query($con, $insert_category);
    if($insert_categories){
        header("location: ".$_SERVER['PHP_SELF']);
    }
}
if(isset($_POST['insert_brands'])){
    //getting text data from the fields
    $pro_brand = $_GET['pro_brand'];
    $insert_brand = "insert into category (pro_brand) 
                  VALUES ('$pro_brand');";
    $insert_brands = mysqli_query($con, $insert_brand);
    if($insert_brands){
        header("location: ".$_SERVER['PHP_SELF']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Product</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span> Product </h1>
    <form action="insert_categoriess.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_category" class="float-md-right"> <span class="d-sm-none d-md-inline"> Product </span> category:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control" id="pro_category" name="pro_category" placeholder="Enter Product Category" >
                </div>
            </div>
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_brand" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span> brand:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-list-alt"></i></div>
                    </div>
                    <input type="text" class="form-control" id="pro_band" name="pro_band" placeholder="Enter Product Brand" >
                     
                </div>
            </div>
        </div>
	</div>