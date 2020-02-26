<?php 
// if($_FILES["upload_file"]["error"]){
//     echo "File could not be uploaded";
// } else {
//     move_uploaded_file($_FILES["upload_file"]["tmp_name"],"uploads/".$_FILES["upload_file"]["name"]);
//     echo "file unbloaded";

//     // header("refresh:2; url="index.html");
// }

if(isset($_POST["UPLOAD"])){


$uploads_dir = 'uploads';

$tmp_name = $_FILES["pictures"]["tmp_name"];
// basename() may prevent filesystem traversal attacks;
// further validation/sanitation of the filename may be appropriate
$name = basename($_FILES["pictures"]["name"]);
move_uploaded_file($tmp_name, $uploads_dir);


}
?>