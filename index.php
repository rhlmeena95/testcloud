
<?php
$url =$_GET['img']; 
$filename = basename($url);
 

$file_extension = strtolower(substr(strrchr($filename,"."),1));

switch( $file_extension ) {
   case "gif": $ctype="image/gif"; break;
    case "png": $ctype="image/png"; break;
    case "jpeg": $ctype="image/jpeg"; break;
    case "jpg": $ctype="image/jpeg"; break;
   
    default:
}

  header('Content-type: ' . $ctype);
if($ctype=='image/jpeg')
{
 $image=imagecreatefromjpeg($url);

 imagejpeg($image);


}


if($ctype=='image/png')
{

$image=imagecreatefrompng($url);

imagepng($image);
}
if($ctype=='image/gif')
{
$image=imagecreatefromgif($url);

imagegif($image);
}
?>




</body>
</html>


