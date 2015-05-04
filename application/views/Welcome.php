<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<html>
  <head>
    <title></title>
  </head>
  <body>
    <div id = "container">
      <h1>Welcome</h1>

      <fieldset>
        <legend> Register </legend>
        <form action = "" method = "post">
          <label>Name</label><input type = "text">
          <label>Alias</label><input type = "text">
          <label>Email</label><input type = "text">
          <label>Password</label><input type = "text">
          <p>*Passwords should be at least 8 characters</p>
          <label>Confirm PW</label><input type = "text">
          <input type = "submit" value = "Register">
        </form>
      </fieldset>

      <fieldset>
        <legend> Login </legend>
        <form action = "" method = "post">
          <label>Email</label><input type = "text">
          <label>Password</label><input type = "text">
          <input type = "submit" value = "Login">

        </form>

      </fieldset>





    </div>


  </body>
</html>
