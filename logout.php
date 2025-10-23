<?php 
session_start();

if($_SESSION['user']){
    echo 
    '<!doctype html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="2;url=index.php">
    <title>Logouting...</title>
    <style>body{font-family:Arial,Helvetica,sans-serif;text-align:center;padding:40px}</style>
    </head>

    <body>

    <h2 style="color:red"> Now — your are Logout.</h2>

    <p>Redirecting to the homepage in 2 seconds...</p>

    <script>setTimeout(function(){window.location.href="index.php";},2000);</script>

    </body>
    </html>';
   session_destroy();
}

?>