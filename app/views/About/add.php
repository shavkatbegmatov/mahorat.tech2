<h2>Добавить</h2>

<form class="ui form" method="post" action="<?php echo ROOT_URL; ?>/about/add">
    <div class="field">
        <label for="">Название</label>
        <input type="text" name="title" class="input" placeholder="Название">
    </div>
    <div class="field">
        <label for="">Текст</label>
        <textarea name="text" cols="30" rows="10" placeholder="Текст"></textarea>
    </div>

    <button class="ui small button primary" type="submit" class="button">Добавить</button>
</form>