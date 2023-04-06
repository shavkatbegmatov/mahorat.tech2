<h2>Изменить</h2>

<form class="ui form" method="post" action="<?php echo ROOT_URL; ?>/service/change?id=<?php echo $_GET['id']; ?>">
    <div class="field">
        <label for="">Название</label>
        <input type="text" name="title" class="input" placeholder="Название" value="<?php echo $service['title']; ?>">
    </div>
    <div class="field">
        <label for="">URL Картинки</label>
        <input type="text" name="photo_url" class="input" placeholder="URL" value="<?php echo $service['photo_url']; ?>">
    </div>
    <div class="field">
        <label for="">Текст</label>
        <textarea name="text" cols="30" rows="10" placeholder="Текст"><?php echo $service['text']; ?></textarea>
    </div>

    <button class="ui small button primary" type="submit" class="button">Сохранить</button>
</form>