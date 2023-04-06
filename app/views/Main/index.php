<?php if(!empty($products)): ?>
    <?php foreach($products as $product): ?>
        <a href="<?php echo ROOT_URL; ?>/product/v/<?php echo $product['alias']; ?>" class="post">
            <div class="post-title"><?php echo $product['title'] ?></div>
            <div class="post-excerpt"><?php echo number_format($product['price'], 0, '.', ','); ?> сум</div>
        </a>
    <?php endforeach; ?>
    <br>
    <div style="text-align: center;">
        <?php echo $pagination; ?>
    </div>
<?php else: ?>
    <h3>Продуктов нету...</h3>
<?php endif; ?>