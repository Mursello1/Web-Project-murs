<!DOCTYPE html>
<html lang="tr">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <title>İletişim Sayfası</title>
</head>
<body>
    <div class="log-in">
        <button class="button"><a href="login.php" target="_self">Log in</a></button>
    </div>
    <button class="button"><a href="hakkimda.php" target="_self">Hakkımda</a></button>
    <button class="button"><a href="ozgecmis.php" target="_self">Özgeçmiş</a></button>
    <button class="button"><a href="ilgi-alanlarim.php" target="_self">İlgi Alanlarım</a></button>
    <button class="button"><a href="iletisim.php" target="_self">İletişim</a></button>
    <button class="button"><a href="sehrim.php" target="_self">Şehrim</a></button>
    <button class="button"><a href="mirasimiz.php" target="_self">Mirasımız</a></button>

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
            <div class="buttons">
                <button type="button" class="button clear" @click="clearForm">Temizle</button>
                <button type="submit" class="button validate" @click="validateFormWithJS">Validate with JS</button>
                <button type="submit" class="button validate" @click="validateFormWithVue">Validate with Vue</button>
            </div>
        </form>
        <p class="success" v-if="successMessage">{{ successMessage }}</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="Validate.js"></script>
</body>
</html>
