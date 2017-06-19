<!DOCTYPE html>
<?php
  include "functions/functions.php";
?>
  <html>

    <head>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css"/>
      <link rel="stylesheet" type="text/css" href="CSS/stylesheet.css" media="all"/>
      <title>The Views</title>
    </head>

    <body>
      <div class="main_wrapper">
        <div class="header_wrapper">
          <img id ="logo" src="imgs/logo.gif"/>
          <img id="banner" src="imgs/ad_banner.gif"/>
        </div>
        <div id="menu_bar">
          <ul id="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">All Products</a></li>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">Shopping Cart</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>

          <div id="form">
            <form method="get" action="results.php" enctype="multipart/form-data">
              <input type="text" name="user_query" placeholder="Search products.."/>
              <input type="submit" name="search" value="Search"/>
            </form>
          </div>
        </div>

        <div class="content_wrapper">
          <div id="side_bar">
            <div class="sidebar_title">Categories</div>
              <ul class="cats">
                <?php
                  getCatsLi();
                ?>
              </ul>

            <div class="sidebar_title">Brands</div>
            <ul class="cats">
              <?php
                  getBrandsLi();
               ?>
            </ul>

          </div>
          <div id="content_area">
            <div id="product_box">
              <?php getProd(); ?>
            </div>
          </div>
        </div>
        <div id="footer">
          <h2 id="copyright">&copy; 2017 www.github.com/abdullahbc989</h2>
        </div>
      </div>
    </body>
  </html>
