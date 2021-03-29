<?php
  $dir    = 'uploads';
  $files1 = scandir($dir);
 
  for ($i=2; $i <count( $files1); $i++) { 
     echo('<div class="col-3"><img class="img-fluid close" src="uploads/'.$files1[$i].'" alt=""></div>');
  }