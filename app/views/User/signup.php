<h2><?php __('sign_up'); ?></h2>
<form method="post" class="form" action="<?php echo ROOT_URL; ?>/user/signup<?php if (isset($_GET['url'])) echo '?url=' . $_GET['url']; ?>">
    <input type="text" name="login" class="input" id="login" placeholder="Имя пользователя" value="<?=isset($_SESSION['form_data']['login']) ? h($_SESSION['form_data']['login']) : '';?>">

    <div class="double-input">
        <input type="text" name="first_name" class="input" placeholder="Имя" value="<?=isset($_SESSION['form_data']['first_name']) ? h($_SESSION['form_data']['first_name']) : '';?>">
        <input type="text" name="last_name" class="input" placeholder="Фамилия" value="<?=isset($_SESSION['form_data']['last_name']) ? h($_SESSION['form_data']['last_name']) : '';?>">
    </div>

    <input type="text" name="email" class="input" id="email" placeholder="Элкт. почта" value="<?=isset($_SESSION['form_data']['email']) ? h($_SESSION['form_data']['email']) : '';?>">
    
    <input type="password" name="password" class="input" id="pasword" placeholder="Пароль">

    <button type="submit" class="button">Создать учет. запись</button>
    <a href="<?php echo ROOT_URL; ?>/user/login" class="link">Есть аккаунт?</a>
</form>
<?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']) ?>