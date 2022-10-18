<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
/
<?php

   if(isset($_POST["submit"])){
        $m = $_POST["a"];
        $n = $_POST["b"];
        $k =  $m + $n;
   }

?>
    <form method="POST">
        <input type="text" name="a" id="" value="<?php 
        if(isset($_POST["submit"])){ echo $m;}  ?>">
        <input type="text" name="b" id="" value="<?php 
        if(isset($_POST["submit"])){ echo $n;}  ?>">
        <input type="text" name="c" id="" value="<?php 
        if(isset($_POST["submit"])){ echo $k;}  ?> ">
        <input type="submit" name="submit" value="OK">
    </form>

</body>
</html>