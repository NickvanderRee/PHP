<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <?php 
  
    session_start();
   
    if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+1;
    else
    $_SESSION['views']=1;
      
    echo"you are visitor ".$_SESSION['views']; 
?>
</body>
</html>