<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
  <head>
    <!-- <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" /> -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-2.1.3.min.js"); ?>"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script> -->
    <script>
    function build_pages(){
      var my_pages = "";
      for (var i = 1; i<20; i ++){
        my_pages += "<li><a href = ''>" + i + "</a></li>";
      }

      $("#pages").html(my_pages);
    }
    $(document).ready(function(){
      build_pages();

    });

    </script>
    <title></title>
    <style>
      #head{
        width:960px;
        height:150px;
        background: #EEEEEE;
      }

    </style>
  </head>
  <body>
    <!-- header -->
    <div id = "head">
      <h3>Dashboard</h3>
      <a href = "">Orders</a>
      <a href = "">Products</a>
      <a href = "">Log off</a>
    </div>
    <!-- subheader -->
    <div>
      <input id = "search" type = "text" name ="search_box" placeholder = "product name">
      <img src  ="random.png" alt = "">

      <form id = "show_type">
        <select>
          <option name = "show_all">Show All</option>
          <option name = "order">Order in</option>
          <option name = "process">Processing</option>
          <option name = "ship">Shipped</option>
          <option name = "cancelled">Cancelled</option>
        </select>
      </form>

    </div>
    <!-- main table -->
    <table>
      <tr>
        <td>Order Id</td>
        <td>Name</td>
        <td>Date</td>
        <td>Billing Address</td>
        <td>Total</td>
        <td>Status</td>
      </tr>
      <tr> <!--generate dynamically -->
        <td>100</td>
        <td>Bob</td>
        <td>Date</td>
        <td>123 Dojo Wa Bellevue WA 98005</td>
        <td>149.99</td>
        <td>
          <select>
            <option name = "order">Order in</option>
            <option name = "process">Processing</option>
            <option name = "ship">Shipped</option>
            <option name = "cancelled">Cancelled</option>
          </select>
        </td>
      </tr>
    </table>
    <div id = "trailer">

      <ul id = "pages" >
      </ul>

    </div>


  </body>
  </html>
