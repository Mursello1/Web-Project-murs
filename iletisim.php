<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <title>İletişim Sayfası</title>
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

    <div id="app" class="form-container">
        <h2>İletişim Formu</h2>
        <form @submit.prevent="validateFormWithVue">
            <div class="form-group">
                <label for="name">İsim:</label>
                <input type="text" id="name" v-model="name" ref="name">
                <p class="error" v-if="errors.name">{{ errors.name }}</p>
            </div>
            <div class="form-group">
                <label for="email">E-posta:</label>
                <input type="email" id="email" v-model="email" ref="email">
                <p class="error" v-if="errors.email">{{ errors.email }}</p>
            </div>
            <div class="form-group">
                <label for="message">Mesaj:</label>
                <textarea id="message" v-model="message" ref="message"></textarea>
                <p class="error" v-if="errors.message">{{ errors.message }}</p>
            </div>
            <div class="validate-buttons">
                <button type="button" class="menu-button clear" @click="clearForm">Temizle</button>
                <button type="submit" class="menu-button validate" @click="validateFormWithJS">Gönder JS</button>
                <button type="submit" class="menu-button validate" @click="validateFormWithVue">Gönder Vue</button>
            </div>
        </form>
        <p class="success" v-if="successMessage">{{ successMessage }}</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="Validate.js"></script>
</body>
</html>
