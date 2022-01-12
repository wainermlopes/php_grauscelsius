<?php
 $far= $_POST['temp'];
 $resultado=(($far - 32) * 5) /9;
 echo round($resultado,2) . 'oC';
 
 ?>