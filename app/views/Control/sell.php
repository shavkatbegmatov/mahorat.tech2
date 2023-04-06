<form action="<?php echo ROOT_URL; ?>/product/sell" method="post" class="ui form">
    <div class="products">
        <div>
            <div class="ui divider"></div>
            <div class="field">
                <label>Продукт</label>
                <select name="prod[0][id]" class="ui fluid search dropdown select">
                    <?php foreach ($products as $product): ?>
                        <option value="<?php echo $product['id']; ?>"><?php echo $product['title']; ?> - <?php echo number_format($product['price'], 0, '.', ','); ?> сум</option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="field">
                <div class="two fields">
                    <div class="field">
                        <label>Цена за одну</label>
                        <input type="number" name="prod[0][price]" min="0">
                    </div>
                    <div class="field">
                        <label>Количество</label>
                        <input type="number" name="prod[0][count]" min="0">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button class="ui small button blue" type="submit">Закончить</button>
    <div class="ui small button" onclick="addQuestion()"><i class="fa-solid fa-plus"></i></div>
</form>

<script>
    let count = 1;
    function addQuestion() {
        let questions = document.querySelector('.products');

        let div = document.createElement('div');
        let hr = document.createElement('div');
        hr.setAttribute('class', 'ui divider');

        let select_field = document.createElement('div');
        select_field.setAttribute('class', 'field');
        let select = document.createElement('select');
        select.setAttribute('name', 'prod[' + count + '][id]');
        select.setAttribute('class', 'ui fluid search dropdown select');
        let input_field = document.createElement('div');
        input_field.setAttribute('class', 'field');

        let two_fields = document.createElement('div');
        two_fields.setAttribute('class', 'two fields');

        let first_field = document.createElement('div');
        first_field.setAttribute('class', 'field');

        let second_field = document.createElement('div');
        second_field.setAttribute('class', 'field');

        let price = document.createElement('input');
        price.setAttribute('type', 'number');
        price.setAttribute('min', '0');
        price.setAttribute('name', 'prod[' + count + '][price]');

        let countInp = document.createElement('input');
        price.setAttribute('type', 'number');
        countInp.setAttribute('min', '0');
        countInp.setAttribute('name', 'prod[' + count + '][count]');

        let labelProd = document.createElement('label');
        labelProd.innerText = 'Продукт';

        let labelPrice = document.createElement('label');
        labelPrice.innerText = 'Цена за одну';

        let labelCount = document.createElement('label');
        labelCount.innerText = 'Количество';
        
        <?php foreach ($products as $product): ?>
            let option<?php echo $product['id']; ?> = document.createElement('option');
            option<?php echo $product['id']; ?>.setAttribute('value', '<?php echo $product['id']; ?>');
            option<?php echo $product['id']; ?>.innerText = '<?php echo $product['title']; ?> - <?php echo number_format($product['price'], 0, '.', ','); ?> сум';

            select.append(option<?php echo $product['id']; ?>);
        <?php endforeach; ?>

        select_field.append(labelProd);
        select_field.append(select);
        input_field.append(two_fields);
        two_fields.append(first_field);
        two_fields.append(second_field);
        first_field.append(labelPrice);
        first_field.append(price);
        second_field.append(labelCount);
        second_field.append(countInp);

        div.append(hr);
        div.append(select_field);
        div.append(input_field);

        questions.append(div);

        count++;
    }

</script>