<table class="ui compact celled table">
    <thead class="full-width">
        <tr>
            <th>Название</th>
            <th>URL</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($menu as $li): ?>
            <tr>
                <td><?php echo $li['title']; ?></td>
                <td><?php echo $li['url']; ?></td>
                <td>
                    <a class="ui small button" href="/menu/change?id=<?php echo $li['id']; ?>">Изменить</a>
                    <a class="ui small button red" href="/menu/delete?id=<?php echo $li['id']; ?>">Удалить</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot class="full-width">
        <tr>
            <th colspan="4">
                <a href="/menu/add" class="ui right floated small primary button">
                    Добавить
                </a>
            </th>
        </tr>
    </tfoot>
</table>