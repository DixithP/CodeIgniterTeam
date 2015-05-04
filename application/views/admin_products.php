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
  </head>
  <body>
    <!-- header -->
    <div>
      <h3>Dashboard</h3>
      <a href = "">Orders</a>
      <a href = "">Products</a>
      <a href = "">Log off</a>
    </div>
    <!-- subheader -->
    <div>
      <input id = "search" type = "text" name ="search_box" placeholder = "product name">
      <img src  ="random.png" alt = "">


            <form id = "Add_New">
              <input type = "submit" value= "Add New Product"></input>
            </form>


    </div>
    <!-- main table -->
    <table>
      <tr>
        <td>Picture</td>
        <td>Id</td>
        <td>Name</td>
        <td>Inventory Count</td>
        <td>Quantity Sold</td>
        <td>Action</td>
      </tr>
      <tr> <!--generate dynamically -->
        <td><img src = "random.png" alt = ""></td>
        <td>1</td>
        <td>T-shirt</td>
        <td>124</td>
        <td>300</td>
        <td>
          <a href = "">edit</a>
          <a href = "">delete</a>
        </td>
      </tr>
    </table>
    <div id = "trailer">

      <ul id = "pages" >
      </ul>

    </div>


  </body>
  </html>
