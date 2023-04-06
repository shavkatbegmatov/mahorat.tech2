<form method="post" class="form login_form" action="<?php echo ROOT_URL; ?>/user/login<?php if (isset($_GET['url'])) echo '?url=' . $_GET['url']; ?>">
    <div class="align-center">
        <h1 class="card-logo">Ronny</h1>
        <p class="card-logo-text">Просто отличная компания</p>
    </div>
    <h2 class="form-title">Вход в учетную запись</h2>

    <div class="input-box">
        <label for="i5" class="input-label">Имя пользователя</label>
        <input type="login" class="input" id="i5" name="login">
    </div>

    <br>

    <div class="input-box">
        <label for="i4" class="input-label">Пароль</label>
        <input type="password" class="input" id="i4" name="password">
        <span class="input-button" onclick="togglePassword('i4', 'eye-icon-1')"><i
                class="fa-regular fa-eye" id="eye-icon-1"></i></span>
    </div>

    <br><br>

    <button class="button">Вход в учетную запись</button>
</form>