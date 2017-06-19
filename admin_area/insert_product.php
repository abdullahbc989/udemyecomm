<!DOCTYPE html>
  <?php include "../functions/functions.php"; $conn = mysqli_connect("localhost", "root", "", "ecommerce"); ?>
  <html>
    <head>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css"/>
      <link rel="stylesheet" type="text/css" href="CSS/stylesheet.css" media="all"/>
      <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
      <script>tinymce.init({ selector:'textarea' });</script>
      <title>Insert Products</title>
    </head>

    <body>
      <form action="insert_product.php" method="post" enctype="multipart/form-data">
        <table align="center">
          <tbody>
            <tr align="center">
              <td colspan="8"><h2>Insert New Product Info Here</h2></td>
            </tr>
            <tr>
              <td align="right"><h2>Product Title:</h2></td>
              <td><input type="text" name="product_title" size="60" required/></td>
            </tr>
            <tr>
              <td align="right"><h2>Product Category:</h2></td>
              <td>
                <select name="product_cat" required>
                  <option>Select a category</option>
                  <?php
                    getCatsOp();
                  ?>
                </select>
              </td>
            </tr>
            <tr>
              <td align="right"><h2>Product Brand:</h2></td>
              <td>
                <select name="product_brand" required>
                  <option>Select a Brand</option>
                  <?php
                    getBrandsOp();
                  ?>
                </select>
              </td>
            </tr>
            <tr>
              <td align="right"><h2>Product Image:</h2></td>
              <td><input type="file" name="product_image" required/></td>
            </tr>
            <tr>
              <td align="right"><h2>Product Price:</h2></td>
              <td><input type="text" name="product_price" required/></td>
            </tr>
            <tr>
              <td align="right"><h2>Product Description:</h2></td>
              <td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
            </tr>
            <tr>
              <td align="right"><h2>Product Keywords:</h2></td>
              <td><input type="text" name="product_keywords" size="50" required/></td>
            </tr>
            <tr align="center">
              <td colspan="8"><input type="submit" name="insert_post" value="Insert Now"/></td>
            </tr>
          </tbody>
        </table>
      </form>
    </body>
  </html>

  <?php
    if (isset($_POST['insert_post'])) {

      // getting text data from the text fields
      $product_title = $_POST['product_title'];
      $product_cat = $_POST['product_cat'];
      $product_brand = $_POST['product_brand'];
      $product_price = $_POST['product_price'];
      $product_desc = $_POST['product_desc'];
      $product_keywords = $_POST['product_keywords'];

      // getting image
      $product_image = $_FILES['product_image']['name'];
      $product_image_tmp = $_FILES['product_image']['tmp_name'];

      move_uploaded_file($product_image_tmp, "project_images/$product_image");

      $insert_product = "insert into products (product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords) values ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";
      $insert_pro = mysqli_query($conn, $insert_product);

      if ($insert_pro) {
        echo "<script>alert('Inserted')</script>";
        echo "<script>window.open('insert_product.php', '_self')</script>";
      }
    }
   ?>
