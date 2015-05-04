<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
  <head>
    <!-- <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" /> -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-2.1.3.min.js"); ?>"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script> -->
    <script>
    function build_images_here(){
      var my_image_series = "";
      for (var i = 0; i<20; i ++){
        my_image_series += "<img src  ='random.png' = ''>";
      }

      $("#products").html(my_image_series);
    }

    function build_pages(){
      var my_pages = "";
      for (var i = 1; i<20; i ++){
        my_pages += "<li><a href = ''>" + i + "</a></li>";
      }

      $("#pages").html(my_pages);
    }

    $(document).ready(function(){
      build_images_here();
      build_pages();
    });

    </script>

    <title></title>
  </head>
  <body>
    <!-- container-->
    <div id = "container">
    <!-- header-->
    <div id = "header">
      <h2>Dojo eCommerce</h2>
      <h3>Shopping Cart(<?php ; ?>)</h3>
      <div>
    <!-- Left Box-->
    <div>
    <input id = "search" type = "text" name ="search_box" placeholder = "product name">
    <img src  ="random.png" alt = "">
    <p>Categories</p>
    <ul>
      <!--Generate dynamically w/ AJAX-->
      <li>T-Shirts</li>
      <li>Shoes</li>
      <li>Cups</li>
      <li>Fruits</li>
      <li>more</li>
      <li>more</li>
    </ul>
    <a href = ""><i>Show All</i></a>
    </div>
    <!-- right box-->
    <h1 id = "title">Generate Dynamically From Categories</h1>
    <ul class = "inline">
      <li><a href = "">first</a></li>
      <li><a href = "">prev</a></li>
      <li><a href = "">2</a></li>
      <li><a href = "">next</a></li>
    </ul>
    <form id = 'sorted_by' method="post">
    <label>Sorted by:</label>
    <select>
      <option name = "price" value = "Price">Price</option>
      <option name = "popularity" value = "Popularity">Most Popular</option>
    </select>
    <div id = "products">
  <!-- image place holder -->
    <script>
      // THIS IS JUST A PLACE HOLDER FOR THE BUILD_IMAGES FUNCTION ABOVE
    </script>


    </div>
    </form>

    <div id = "trailer">
      <h2>Similar Items</h2>
      <ul id = "pages" >



      </ul>

    </div>
    <!--end container-->
    </div>

  </body>
  </html>
