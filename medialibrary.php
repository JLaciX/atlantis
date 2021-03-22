<?php
  $dir    = 'uploads';
  $files1 = scandir($dir);
 
  for ($i=2; $i <count( $files1); $i++) { 
     echo('<img class="img-fluid widget-ico close" src="uploads/'.$files1[$i].'" alt="">');
  }