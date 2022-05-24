<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello kitty</h1>
    <a href="http://localhost/vienaragiai/011_php/?page1 = 1">Page1</a>
    <a href="http://localhost/vienaragiai/011_php/?page2 = 2">Page2</a>
    <a href="http://localhost/vienaragiai/011_php/?page3 = 3">Page2</a>
<?php
   // echo $_GET['page1'];
if($_GET === 'page1' ){
    echo 'pirmas';
}
if($_GET === 'page2' ){
    echo 'antras';
}
if($_GET === 'page3' ){
    echo 'trecias';
}
?>

</body>
</html>
