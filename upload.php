<?php
error_reporting(0);
$get_url = $_POST["url"];
$url = trim($get_url);
if($url)
{
    $file = fopen($url,"rb");
    $directory = "upload/";
    $valid_exts = array("php","jpeg","gif","png","doc","docx","jpg","html","asp","xml","JPEG","bmp","zip"); // Upload File Types Here
    $ext = end(explode(".",strtolower(basename($url))));
    if(in_array($ext,$valid_exts))
    {
        $rand = rand(1000,9999);
        $filename = "$rand.$ext";
        $newfile = fopen($directory . $filename, "wb");
        if($newfile)
        {
            while(!feof($file))
            {
                fwrite($newfile,fread($file,1024 * 8),1024 * 8);
            }
            echo 'File uploaded successfully';
            echo '**$$**'.$filename;
        }
        else
        {
            echo 'File does not exists';
        }
    }
    else
    {
        echo 'Sorry.!Invalid URL';
    }
}
else
{
    echo 'Opps!Please enter the Remote File URL';
}
?>