

<div class="grid">
    <div class="grid-one">
        <h1 class="post-read-title">Управления аккунтом</h1>

        <?php $user = \R::findOne('user', 'id = ?', [$_SESSION['user']['id']]); ?>

        <form method="post" class="form" action="/user/update">
            <input type="text" name="login" class="input" placeholder="Имя пользователя" value="<?php echo $user['login']; ?>" disabled>
            <input type="text" name="code" class="input" placeholder="Код" value="<?php echo $user['code']; ?>" disabled>

            <div class="double-input">
                <input type="text" name="first_name" class="input" placeholder="Имя" value="<?php echo $user['first_name']; ?>">
                <input type="text" name="last_name" class="input" placeholder="Фамилия" value="<?php echo $user['last_name']; ?>">
            </div>

            <input type="text" name="email" class="input" id="email" placeholder="Элкт. Почта" value="<?php echo $user['email']; ?>" disabled>

            <button type="submit" class="button">Сохранить изменения</button>
        </form>

        <h3>Изменить пароль</h3>

        <form action="<?php echo ROOT_URL; ?>/user/password" method="POST" class="form">
            <input type="text" name="current_password" class="input" placeholder="Пароль">
            <input type="text" name="new_password" class="input" placeholder="Новое пароль">
            <input type="text" name="verify_new_password" class="input" placeholder="Подвердите новое пароль">

            <button type="submit" class="button">Сохранить пароль</button>
        </form>

        <br>
        <br>

        <a href="<?php echo ROOT_URL; ?>/user/logout" class="button red">Покинуть</a>
        <a href="<?php echo ROOT_URL; ?>/product/create" class="button">Добавить продукт</a>
        <a href="<?php echo ROOT_URL; ?>/product/control" class="button">Управления продуктами</a>
    </div>
    <div class="grid-two">
        <h1 class="post-read-title">Загаловок</h1>

    </div>
</div>