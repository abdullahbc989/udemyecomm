<?php

  $conn = mysqli_connect("localhost", "root", "", "ecommerce");

  // retrieving categories as list
  function getCatsLi() {

    global $conn;

    $get_cats = "SELECT * FROM categories";
    $run_cats = mysqli_query($conn, $get_cats);

    while ($row_cats = mysqli_fetch_array($run_cats)) {
      $cat_id = $row_cats['cat_id'];
      $cat_title = $row_cats['cat_title'];

      echo "<li><a href='#'>$cat_title</a></li>";
    }
  }

  // retrieving categories as option
  function getCatsOp() {

    global $conn;

    $get_cats = "SELECT * FROM categories";
    $run_cats = mysqli_query($conn, $get_cats);

    while ($row_cats = mysqli_fetch_array($run_cats)) {
      $cat_id = $row_cats['cat_id'];
      $cat_title = $row_cats['cat_title'];

      echo "<option value='$cat_id'>$cat_title</option>";
    }
  }

  // retrieving brands as list
  function getBrandsLi() {

    global $conn;

    $get_brands = "SELECT * FROM brands";
    $run_brands = mysqli_query($conn, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {
      $brand_id = $row_brands['brand_id'];
      $brand_title = $row_brands['brand_title'];

      echo "<li><a href='#'>$brand_title</a></li>";
    }
  }

  // retrieving brands as option
  function getBrandsOp() {

    global $conn;

    $get_brands = "SELECT * FROM brands";
    $run_brands = mysqli_query($conn, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {
      $brand_id = $row_brands['brand_id'];
      $brand_title = $row_brands['brand_title'];

      echo "<option value='$brand_id'>$brand_title</option>";
    }
  }

  // retrieving products
  function getProd() {

    global $conn;

    $get_pro = "SELECT * FROM products ORDER BY RAND() LIMIT 0,6";

    $run_pro = mysqli_query($conn, $get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)) {
      $pro_id = $row_pro['product_id'];
      $pro_cat = $row_pro['product_cat'];
      $pro_brand = $row_pro['product_brand'];
      $pro_title = $row_pro['product_title'];
      $pro_price = $row_pro['product_price'];
      $pro_image = $row_pro['product_image'];

      echo "<div id='single_product'>
              <h3 align=center>$pro_title</h3>
              <img src='admin_area/project_images/$pro_image' style='width:180px; height:180px; border: 2px inset silver;'/>
              <h5 align=center>$$pro_price</h5>
              <a href='details.php' style='float: left;'>Details</a>
              <a href='index.php'><button style='float: right; text-decoration: none;'>Add to cart</button></a>
            </div>";

    }
  }

 ?>
