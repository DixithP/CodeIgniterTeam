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
    function dosomething(){
      console.log("hello");
    }

    function build_years(){
      var myYears="";

      for (var i = 1; i < 20; i ++){
        myYears += "<option>"+(i+2014)+"</option>"
      }
      $('#years').html(myYears);

    }
    function build_months(){
      var myMonths = "";
      for (var i = 1; i < 13; i ++){
        myMonths += "<option>"+i+"</option>"
      }
      $('#months').html(myMonths);

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
      build_years();
      build_months();
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
    <!-- IN CART-->
    <div>
      <table>
      <tr>
        <td>Item</td>
        <td>Price</td>
        <td>Quantity</td>
        <td>Total</td>
      </tr>
      <tr>
        <td>Tshirt</td>
        <td>12.99</td>
        <td>3</td>
        <td>38.97</td>
      </tr>
      <tr>
        <td>Sock</td>
        <td>.01</td>
        <td>2</td>
        <td>38.99</td>
      </tr>
      <!-- more rows dynamically created !-->
      </table>

    </div>

    <p>Total: 48.5</p> <!-- value dynamically generated !-->
    <button onclick = "dosomething()">Continue Shopping </button>

<h1>Shipping Information</h1>
        <?php if ($this->session->flashdata('validations')) {var_dump ($this->session->flashdata('validations'));}?>
        <form id = "validation1" action ="/register" method = 'post'>
          <label>input1</label> <input type = 'text' name = "input1">
          <label>input2</label><input type = 'text' name = "input2">
          <label>input3</label><input type = 'text' name = "input3">
          <label>input4</label><input type = 'text' name = "input4">
          <label>input5</label><input type = 'text' name = "input5">
          <label>input6</label><input type = 'text' name = "input6">
          <label>input7</label><input type = 'text' name = "input7">
          <label>input8</label><input type = 'text' name = "input8">
          <input type = "hidden" name = "validate" value = "register">
          <input type = 'submit' value = "submit">
        </form>
<h1>Billing Information</h1>
            <form id = "billing_shipping">
            <input type = "checkbox" name="identical" value = "checcked"><label>Same As Shipping</label>
            </form>
            <?php if ($this->session->flashdata('validations')) {var_dump ($this->session->flashdata('validations'));}?>
            <form id = "validation2" action ="/register" method = 'post'>
              <label>input1</label> <input type = 'text' name = "input1">
              <label>input2</label><input type = 'text' name = "input2">
              <label>input3</label><input type = 'text' name = "input3">
              <label>input4</label><input type = 'text' name = "input4">
              <label>input5</label><input type = 'text' name = "input5">
              <label>input6</label><input type = 'text' name = "input6">
              <label>input7</label><input type = 'text' name = "input7">
              <label>input8</label><input type = 'text' name = "input8">
              <input type = "hidden" name = "validate" value = "register">
              <input type = 'submit' value = "submit">
            </form>

            <form>
              <label>Card </label><input type = "text" name = "card_number">
              <label>Security Code </label><input type = "text" name = "card_security">
              <label>Expiration </label>
              <select id = "months" name = "months"> </select>
              <select id = "years" name = "years"> </select>
            <input type = "submit" value = "Pay">
            </form>
    <!-- right box-->

  </div>
  </body>
  </html>
