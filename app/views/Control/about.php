<h2>Добавить "О нас"</h2>

<form method="post" action="<?php echo ROOT_URL; ?>/control/about">
    <input type="text" name="title" class="input" placeholder="Название">
    <textarea name="text" cols="30" rows="10" placeholder="Текст"></textarea>

    <button type="submit" class="button">Добавить</button>
</form>