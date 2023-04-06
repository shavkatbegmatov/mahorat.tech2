<table class="ui compact celled table">
    <thead class="full-width">
        <tr>
            <th>Алиас</th>
            <th>Текст</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($text as $li): ?>
            <tr>
                <td><?php echo $li['alias']; ?></td>
                <td><?php echo $li['text']; ?></td>
                <td>
                    <a class="ui small button" href="/text/change?id=<?php echo $li['id']; ?>">Изменить</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>