<?php
require "db_connection.php";
function getCats(){
    global $con;
    $getCatsQuery="select * from categories";
    $getCatsResult=mysqli_query($con,$getCatsQuery);
    while($row=mysqli_fetch_assoc($getCatsResult))
    {
        $id=$row['Cat_Id'];
        $title=$row['Cat_tilte'];
        echo"<li><a class='nav-link' href='#'>$title</a></li>";
    }


}

function getbrands(){
    global $con;
    $getbrandsQuery="select * from categories";
    $getbrandssResult=mysqli_query($con,$getbrandsQuery);
    while($row=mysqli_fetch_assoc($getbrandsResult))
    {
        $id=$row['brand_Id'];
        $title=$row['brand_tilte'];
        echo"<li><a class='nav-link' href='#'>$title</a></li>";
    }


}