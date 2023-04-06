<h2>Добавить товар в склад</h2>

<form action="<?php echo ROOT_URL; ?>/product/add" method="post">
    <div class="dropdown">
        <div class="select">
            <span>Продукт</span>
            <i class="fa fa-chevron-left"></i>
        </div>
        <input type="hidden" name="product">
        <ul class="dropdown-menu">
            <?php foreach ($products as $product): ?>
                <?php
                    $s = 0;

                    $trs = \R::findAll('prodstock', 'product_id = ?', [$product['id']]);

                    foreach ($trs as $tr) {
                        $s = $s + $tr['count'];
                    }
                ?>
                <li id="<?php echo $product['id']; ?>"><?php echo $product['title']; ?> - <?php echo $s; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <input type="number" name="count" class="input" placeholder="Количество">

    <button class="button blue">Добавить</button>
</form>