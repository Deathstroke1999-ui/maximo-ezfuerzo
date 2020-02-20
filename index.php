<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Document</title>
</head>
<body>
    <form class="form" method="POST">
        <h2>CONTACT US</h2>
        <p type="name:"><input type="text" name="name"placeholder="Write your name here.."></input></p>
        <p type="email:" ><input type="email" name="email" placeholder="Let us know how to contact you back.."></input></p>
        <p type="Phone Number:"><input type="text"name="telefono" placeholder="Let us know how to contact you back.."></input></p>
        <p type="Message:" ><input type="text" name="mensaje" placeholder="What would you like to tell us.."></input></p>
        <input type="submit" name="register" class="button" ></input>
        <div>
          <span class="fa fa-phone"></span>001 1023 567
          <span class="fa fa-envelope-o"></span> cva.250199@company.com
        </div>
      </form>
      <?php
        include("registrar.php")
      ?>
</body>
</html>