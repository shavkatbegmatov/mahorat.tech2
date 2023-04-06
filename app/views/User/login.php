<h2><?php __('log_in'); ?></h2>

<form method="post" class="form" action="<?php echo ROOT_URL; ?>/user/login<?php if (isset($_GET['url'])) echo '?url=' . $_GET['url']; ?>">
    <input type="text" name="login" class="input" id="login" placeholder="Имя пользователя">

    <input type="password" name="password" class="input" id="pasword" placeholder="Пароль">

    <button type="submit" class="button">Вход в учет. запись</button>
    <a href="<?php echo ROOT_URL; ?>/user/signup" class="link">Нету аккаунта?</a>
</form>