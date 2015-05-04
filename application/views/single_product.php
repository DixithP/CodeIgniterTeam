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
        my_image_series += "<li><img src  ='random.png' = ''></li>";
      }

      $("#similar_items").html(my_image_series);
    }

    function determine_products(){
      var my_products = "";
      for (var i = 1; i < 10; i ++){
        my_products += "<option name = 'first' value = 'first'>"+  i + " (" + i*(13.99)+ ")"+ " </option>"; // these will be pulled from a post request.
      }
      $('#product_number_cost').html(my_products);

    }
    $(document).ready(function(){
      build_images_here();
      determine_products();

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
    </div>
        <a href = "">Go Back</a>

    <!-- Left Box-->
      <div id = "left_box">
        <h2>Black Belt for Staff </h2> <!--generated dynamically-->
        <img src = "random.png" alt = "">
        <img src = "random.png" alt = "">
        <img src = "random.png" alt = "">
        <img src = "random.png" alt = "">
        <img src = "random.png" alt = "">
        <img src = "random.png" alt = "">
        <img src = "random.png" alt = "">
      </div>
    <!-- right box-->
    <div>
    <p>Description ..asdadfsafdsaf Description ..asdadfsafdsaf Description ..asdadfsafdsaf Description ..asdadfsafdsaf Description ..asdadfsafdsaf Description ..asdadfsafdsaf Description ..asdadfsafdsaf Description ..asdadfsafdsaf Description ..asdadfsafdsaf Description ..asdadfsafdsaf Description ..asdadfsafdsaf Description ..asdadfsafdsaf Description ..asdadfsafdsaf Description ..asdadfsafdsaf Description ..asdadfsafdsaf Description ..asdadfsafdsaf Description ..asdadfsafdsaf Description ..asdadfsafdsaf Description ..asdadfsafdsaf Description ..asdadfsafdsaf Description ..asdadfsafdsaf Description ..asdadfsafdsaf</p> <!--generated dynamically-->

    <form method= "post" action = "" id = "number_to_cart">
    <select id = "product_number_cost">
      <!-- see function above -->
    </select>
    <input type ="submit" value = "Buy">
    </div>

    <!-- tailer -->
    <div id = "trailer">
      <h2>Similar Items</h2>
      <ul id = "similar_items" >
      </ul>

    </div>


    <!--end container-->
    </div>

  </body>
  </html>
