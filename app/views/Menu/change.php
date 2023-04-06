<h2>Изменить</h2>

<form class="ui form" method="post" action="<?php echo ROOT_URL; ?>/menu/change?id=<?php echo $_GET['id']; ?>">
    <div class="field">
        <label for="">Название</label>
        <input type="text" name="title" class="input" placeholder="Название" value="<?php echo $menu['title']; ?>">
    </div>
    <div class="field">
        <label for="">URL</label>
        <input type="text" name="url" class="input" placeholder="URL" value="<?php echo $menu['url']; ?>">
    </div>

    <button class="ui small button primary" type="submit" class="button">Сохранить</button>
</form>