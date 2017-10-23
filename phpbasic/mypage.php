

<?php
$name = 'john'; 
echo '<input type ="text" name = "name" placeholder="write name">';
print("hello world");
$name = 'JOHN';
if($name === 'john')
  echo 'true';
else
 echo 'false';
print (" hello john this is my first print function ");
?>


<input type ="text" name = "name" value ="<?php echo $name; ?>">