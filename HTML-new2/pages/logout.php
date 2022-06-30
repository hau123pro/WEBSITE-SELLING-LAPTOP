<?php session_start(); 
 
if (isset($_SESSION['username']) && isset($_SESSION['profile']) && isset($_SESSION['logout']) && isset($_SESSION['donhang'])){
    unset($_SESSION['username']);
    unset($_SESSION['profile']); 
    unset($_SESSION['logout']);  
    unset($_SESSION['donhang']);
   
}

if(isset($_SESSION['admin']) && isset($_SESSION['usernamead'])){
    unset($_SESSION['admin']);
    unset($_SESSION['usernamead']);
}

if(isset($_SESSION['idpr']) ){
    unset($_SESSION['idpr']);
    
}

if(isset($_SESSION['logout'])){
    unset($_SESSION['logout']);

}

if(isset($_SESSION['donhang'])){
    unset($_SESSION['donhang']);
}

if(isset($_SESSION['username'])){
    unset($_SESSION['username']);
}
header('Location: ../index.php');
?>
