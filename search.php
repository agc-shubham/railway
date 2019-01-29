<?php 
 $source = filter_input(INPUT_POST, 'source');
 $destination = filter_input(INPUT_POST, 'destination');
$link=mysqli_connect("localhost","root","","railway");

if(mysqli_connect_error()){
   die("error conecting to database");
}
else{
  
  $query = "SELECT train_id,train_name  FROM trains where t_source='".mysqli_real_escape_string($link,$source)."'  and t_destination = '".mysqli_real_escape_string($link,$destination)."'" ;
  if($result = mysqli_query($link,$query))
  {
  while( $row = mysqli_fetch_array($result));
       print_r($row);
  }
}



 ?>