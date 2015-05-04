<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
  <head>
    <!-- <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" /> -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-2.1.3.min.js"); ?>"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script> -->
    <script>
    $(document).ready(function(){

    //validation 1.






    });

    </script>

    <title></title>
  </head>
  <body>
    <a href = "/main"> Home </a><br><br>
    <a href = "/main/front_page"> Front </a><br>
    <a href = "/main/single"> Single </a><br>
    <a href = "/main/checkout"> Checkout </a><br>
    <a href = "/main/admin"> Admin Login </a><br>
    <a href = "/main/admin_orders "> Edit Orders </a><br>
    <a href = "/main/admin_products"> Edit Products </a><br>
    <a href = "/main/admin_shipping"> Edit Shipping </a><br>
    <a href = "/main/admin_single_product"> Edit Single Product </a><br>




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

    <form id = "validation2" action ="/register" method = 'post'>
      <label>input1</label> <input type = 'text' name = "input1">
      <label>input2</label><input type = 'text' name = "input2">
      <input type = "hidden" name = "validate" value = "login">
      <input type = 'submit' value = "submit">
    </form>

  </body>
</html>
