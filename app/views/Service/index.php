<table class="ui compact celled table">
    <thead class="full-width">
        <tr>
            <th>Название</th>
            <th>URL Картинки</th>
            <th>Текст</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($services as $li): ?>
            <tr>
                <td><?php echo $li['title']; ?></td>
                <td><?php echo $li['photo_url']; ?></td>
                <td><?php echo $li['text']; ?></td>
                <td>
                    <a class="ui small button" href="/service/change?id=<?php echo $li['id']; ?>">Изменить</a>
                    <div class="ui divider"></div>
                    <a class="ui small button red" href="/service/delete?id=<?php echo $li['id']; ?>">Удалить</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot class="full-width">
        <tr>
            <th colspan="4">
                <a href="/service/add" class="ui right floated small primary button">
                    Добавить
                </a>
            </th>
        </tr>
    </tfoot>
</table>