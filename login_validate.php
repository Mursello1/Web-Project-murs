<?php

if (isset($_POST['username']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);
    
    if (empty($uname)){
        header("Location: login.php?error=Kullanıcı adı gerekli");
        exit();
    }
    else if(empty($pass)){
        header("Location: login.php?error=Şifre gerekli");
        exit();
    }
    else if (!filter_var($uname, FILTER_VALIDATE_EMAIL)) {
        header("Location: login.php?error=Geçersiz e-posta formatı");
        exit();
    }
    else if ($uname !== 'b231210014@sakarya.edu.tr' || $pass !== 'b231210014') {
        header("Location: login.php?error=Geçersiz kullanıcı adı veya şifre");
        exit();
    }
    else {
        header("Location: login.php?success");
        exit();
    }
} 
else{
    header("Location: login.php?error");
    exit();
}
