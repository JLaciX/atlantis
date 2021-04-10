<?php

if(isset($_FILES['file']['name'])){

   
   $filename = $_FILES['file']['name'];

   
   $location = "templates/".$filename;
   $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
   $imageFileType = strtolower($imageFileType);

   
   $valid_extensions = array("html","css","php");

   $response = 0;
   
   if(in_array(strtolower($imageFileType), $valid_extensions)) {
     
      if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
         $response = $location;
      }
   }

   echo $response;
   exit;
}

echo 0;