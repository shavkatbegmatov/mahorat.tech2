<h2>Изменить</h2>

<form class="ui form" method="post" action="<?php echo ROOT_URL; ?>/text/change?id=<?php echo $_GET['id']; ?>">
    <div class="field">
        <label for="">Алиас (Место где будет виден этот текст)</label>
        <input disabled placeholder="Текст" value="<?php echo $text['alias']; ?>">
    </div>
    <div class="field">
        <label for="">Текст</label>
        <textarea name="text" cols="30" rows="10" placeholder="Текст"><?php echo $text['text']; ?></textarea>
    </div>

    <button class="ui small button primary" type="submit" class="button">Сохранить</button>
</form>