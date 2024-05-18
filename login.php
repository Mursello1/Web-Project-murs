<!DOCTYPE html>
<html lang="tr">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<div class="log-in">
<button class="menu-button"><a href="login.php" target="_self">Log in</a></button>
</div>
<button class="menu-button"><a href="hakkimda.html" target="_self">Hakkımda</a></button>
<button class="menu-button"><a href="ozgecmis.html" target="_self">Özgeçmiş</a></button>
<button class="menu-button"><a href="ilgi-alanlarim.php" target="_self">İlgi Alanlarım</a></button>
<button class="menu-button"><a href="iletisim.php" target="_self">İletişim</a></button>
<button class="menu-button"><a href="sehrim.php" target="_self">Şehrim</a></button>
<button class="menu-button"><a href="mirasimiz.php" target="_self">Mirasımız</a></button>

<div class="form-container">
<div class="giriş-container">
<h2>Giriş Yap</h2>
</div>

<form class="log-in-form" action="login_validate.php" method="post">

<?php if (isset($_GET['error'])) { ?> 
    <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } 
    if(isset($_GET['success']))
    {
        ?> 
        <p class="success"><?php echo "Giriş Başarılı"; ?></p>
        <?php
    }
    ?>
    
    
    <label for="username">Kullanıcı Adı:</label>
    <input type="text" id="username" name="username" placeholder="Kullanıcı Adı">
    <label for="password">Şifre:</label>
    <input type="password" id="password" name="password" placeholder="Şifre">
    <div class="submit-container">
    <input type="submit" value="Giriş Yap">
    </div>
    </form>
    </div>
    
    </body>
    
    </html>
    