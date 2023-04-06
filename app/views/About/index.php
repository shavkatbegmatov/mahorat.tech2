<table class="ui compact celled table">
    <thead class="full-width">
        <tr>
            <th>Название</th>
            <th>Текст</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($about as $li): ?>
            <tr>
                <td><?php echo $li['title']; ?></td>
                <td><?php echo $li['text']; ?></td>
                <td>
                    <a class="ui small button" href="/about/change?id=<?php echo $li['id']; ?>">Изменить</a>
                    <a class="ui small button red" href="/about/delete?id=<?php echo $li['id']; ?>">Удалить</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot class="full-width">
        <tr>
            <th colspan="4">
                <a href="/about/add" class="ui right floated small primary button">
                    Добавить
                </a>
            </th>
        </tr>
    </tfoot>
</table>