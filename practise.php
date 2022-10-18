<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
function atik($a,$b,$c){
    $r = $a+$b+$c;
        if($r>79){
        $result= "A+";}
        elseif($r>69){
        $result= "A";}
        elseif($r>59){
            $result= "A-";}
            elseif($r>49){
        $result= "B";}
        elseif($r>39){
        $result= "C";}
        elseif($r>32){
            $result= "D";}
        else{$result= "Fail";}
        return $result;
}
if(isset($_POST["r"])){
        $b = $_POST["a"];
        $e = $_POST["b"];
        $m = $_POST["c"];
        $r = $b+$e+$m;
        $result = atik($b,$e,$m);
        }
?>


<form method="POST">
    <h1>Bangla</h1>
<input type="text" name="a" id="" value="">
<h1>English</h1>
<input type="text" name="b" id="" value="<?php 
if(isset($_POST["r"])){
    echo $b;
}

?>">
<h1>Math</h1>
<input type="text" name="c" id="" value="">
<h1>Total <?php 
if(isset($_POST["r"])){
    echo $r.$result;
}

?></h1>
<button name="r">Result</button>

</form>

</body>
</html>