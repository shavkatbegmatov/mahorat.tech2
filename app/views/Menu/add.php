<h2>Добавить</h2>

<form class="ui form" method="post" action="<?php echo ROOT_URL; ?>/menu/add">
    <div class="field">
        <label for="">Название</label>
        <input type="text" name="title" class="input" placeholder="Название">
    </div>
    <div class="field">
        <label for="">URL</label>
        <input type="text" name="url" class="input" placeholder="URL">
    </div>

    <button class="ui small button primary" type="submit" class="button">Добавить</button>
</form>