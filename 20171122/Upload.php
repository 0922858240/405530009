<?php
$a=$_POST["height"];
$b=$_POST["weight"];
if(empty($a)==1||empty($b)==1){
    echo"please type in all information"."<br/>";
}
else{
    echo "Height:".$_POST["height"]."m"."<br>";
    echo "Weight:".$_POST["weight"]."kg"."<br>";
    $c=$b/$a/$a;
    echo "BMI:".$c."<br/>";
}

if($_FILES["file"]["error"]==4){
    echo "empty";
}
else if($_FILES["file"]["type"]=="image/gif"||
$_FILES["file"]["type"]=="image/jpeg"||
$_FILES["file"]["type"]=="image/jpg"||
$_FILES["file"]["type"]="image/png"||
$_FILES["file"]["type"]=="image/bmp"||
$_FILES["file"]["type"]=="image/tif"||
$_FILES["file"]["type"]=="image/tiff"||
$_FILES["file"]["type"]=="image/wmf"){
    $filename=$_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$filename);
    echo'<img src="upload/'.$filename.'"/>';
   
}

else{    
    echo "wrong file type";  
}

?>