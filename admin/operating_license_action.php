<?php
//include('session.php');
//include('/manage/inc/header.php');
//include('subimagefile_action.php');
if(isset($_POST["submit"])){
    //$getImage=  basename($_FILES["slidername"]["name"]);
    $getOLImage=  basename($_FILES["operating_license"]["name"]);
    if($getOLImage==""){
       echo "<script type='text/javascript'>alert('Please Choose Image!')</script>";
    }
    else
    {
         $target="photo_img/";
        $ran=time();
        $target=$target.$getOLImage;
        $OLImage=$getOLImage;
        //$imageName=$getImage;

        
        if($_FILES["operating_license"]["type"]=="image/jpg"||$_FILES["operating_license"]["type"]=="image/jpeg" || $_FILES["operating_license"]["type"]=="image/png"){
            
            $move = move_uploaded_file($_FILES["operating_license"]["tmp_name"], $target);
           // $move2 = move_uploaded_file($_FILES["subimage_btn"]["tmp_name"], $target);
            // if($move){
            //     include_once '../slider/sliderClass.php';
            //     $sliderClass=new SliderClass();
            //     echo $getsubimg;
            //     $sliderClass->uploadSlider($getsubimg);
              
            // }
            // else
            // {
            //     echo "File is not uploaded";
            // }
        }
        
        else
        {
           echo "<script type='text/javascript'>alert('Please Choose MainImage $ SubImage format in JPEG,Gif,PNG!')</script>";
        }
    }
    //$video_btn=$_POST["video_btn"];
    //$audio_btn=$_POST["audio_btn"];

     

}
?>