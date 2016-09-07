<?php 
    if (isset($_GET["pets"])) {
       echo $_GET["pets"];
       echo count($_GET);
       
    }
 ?>

 <!DOCTYPE html>
 <html lang="">
     <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Title Page</title>
 
         <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 
         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
         <!--[if lt IE 9]>
             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
             <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
         <![endif]-->
         <!-- jQuery -->
         <script src="vendor/jquery/jquery.js"></script>
     </head>
     <body>
         <h1 class="text-center">Hello World</h1>
 Name: <input type="txt1" id="txt1">
        <input type="button" value="GO" onclick="test()">
        </form>

<script>
   $.ajax({
  method: "GET",
  url: "test.php",
  dataType: "script"
});
   function test(){
     var a = $("#txt1").val();
   }
</script>
         
         <!-- Bootstrap JavaScript -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
         <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
          <script src="Hello World"></script>
     </body>
 </html>