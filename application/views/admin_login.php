<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
  <head>
    <!-- <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" /> -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-2.1.3.min.js"); ?>"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script> -->
    <script>
    $(document).ready(function(){

    });

    </script>

    <title></title>
  </head>
  <body>
    <!-- routing needs fixing -->
    <form id = "validation2" action ="/register" method = 'post'>
      <label>input1</label> <input type = 'text' name = "input1">
      <label>input2</label><input type = 'text' name = "input2">
      <input type = "hidden" name = "validate" value = "login">
      <input type = 'submit' value = "submit">
    </form>

  </body>
</html>
