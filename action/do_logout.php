<?PHP
    session_start();
    session_destroy();
    $url = "../index.php";  
    echo "<script language='javascript' type='text/javascript'>";  
    echo "window.location.href='$url'";  
    echo "</script>";  
    exit();
?>

