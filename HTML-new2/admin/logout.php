<?php session_start(); 
 
if (isset($_SESSION['usernamead'])){
    unset($_SESSION['usernamead']);  
    
}



if(isset($_SESSION['profile'])){
    unset($_SESSION['profile']);
    if(isset($_SESSION['username'])){
        unset($_SESSION['username']);
    }
    
    if(isset($_SESSION['logout']) && isset($_SESSION['donhang']) && isset($_SESSION['admin'])){
        unset($_SESSION['logout']);
        unset($_SESSION['donhang']);
        unset($_SESSION['admin']);
    }
}else{
    
    
    if(isset($_SESSION['logout']) && isset($_SESSION['donhang']) && isset($_SESSION['admin'])){
        unset($_SESSION['logout']);
        unset($_SESSION['donhang']);
        unset($_SESSION['admin']);
    }

    if(isset($_SESSION['username'])){
        unset($_SESSION['username']);
    }
}

header('Location: login.php');
?>
