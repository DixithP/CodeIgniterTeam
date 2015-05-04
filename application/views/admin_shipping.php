<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
  <head>
    <!-- <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" /> -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-2.1.3.min.js"); ?>"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script> -->
    <script>

    $(document).ready(function(){
      build_pages();

    });

    </script>
    <title></title>
  </head>
  <body>
    <!-- header -->
    <div>
      <h3>Dashboard</h3>
      <a href = "">Orders</a>
      <a href = "">Products</a>
      <a href = "">Log off</a>
    </div>
    <!-- left box -->
    <div>
      <p>Order Id: </p>
      <p>Customer shipping info:</p>
      <p>name:</p>
      <p>address:</p>
      <p>city:</p>
      <p>state:</p>
      <p>zip:</p>
      <p>Customer billing info:</p>
      <p>name:</p>
      <p>address:</p>
      <p>city:</p>
      <p>state:</p>
      <p>zip:</p>
    </div>

    <table>
    <tr>
    <td>ID</td>
    <td>Item</td>
    <td>Price</td>
    <td>Quanity</td>
    <td>Total</td>
    </tr>

    <tr>
    <td>35</td>
    <td>t-shirt</td>
    <td>12.99</td>
    <td>1</td>
    <td>12.99</td>
    </tr>

    </table>
    <h2>Status: Shipped</h2>
    <div id = "receipt_box">
      <p> Sub-total: 12.99</p>
      <p> Shipping: 1.00</p>
      <p> Total Price: 13.99</p>
    </div>
    </div>


  </body>
  </html>
