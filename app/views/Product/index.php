<table class="ui compact celled table">
    <thead class="full-width">
        <tr>
            <th>Название</th>
            <th>Текст</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($product as $li): ?>
            <tr>
                <td><?php echo $li['title']; ?></td>
                <td><?php echo $li['text']; ?></td>
                <td>
                    <a class="ui small button" href="/product/change?id=<?php echo $li['id']; ?>">Изменить</a>
                    <div class="ui divider"></div>
                    <a class="ui small button red" href="/product/delete?id=<?php echo $li['id']; ?>">Удалить</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot class="full-width">
        <tr>
            <th colspan="4">
                <a href="/product/add" class="ui right floated small primary button">
                    Добавить
                </a>
            </th>
        </tr>
    </tfoot>
</table>