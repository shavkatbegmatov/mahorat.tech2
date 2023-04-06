<h2>Изменить</h2>

<form class="ui form" method="post" action="<?php echo ROOT_URL; ?>/about/change?id=<?php echo $_GET['id']; ?>">
    <div class="field">
        <label for="">Название</label>
        <input type="text" name="title" class="input" placeholder="Название" value="<?php echo $about['title']; ?>">
    </div>
    <div class="field">
        <label for="">Текст</label>
        <textarea name="text" cols="30" rows="10" placeholder="Текст"><?php echo $about['text']; ?></textarea>
    </div>

    <button class="ui small button primary" type="submit" class="button">Сохранить</button>
</form>