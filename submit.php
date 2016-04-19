<?php
for($x=0;$x<count($_FILES["imagefile"]["name"]);$x++){
    
$filename= $_FILES["imagefile"]["tmp_name"][$x];
$filename12="uploads/".$_FILES["imagefile"]["name"][$x];

if(move_uploaded_file($filename, $filename12)){
    
    echo $_FILES["imagefile"]["name"][$x]." File Uploaded Successfully";
}
else{
    
    echo $_FILES["imagefile"]["name"][$x]." File Couldnot be uploaded";
}
}
echo'<h1><a href="index.php">Home</a></h1>';
?>