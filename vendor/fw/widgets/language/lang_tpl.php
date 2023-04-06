<select name="lang" id="lang" onchange="tellToServer()">
    <option value="<?=$this->language['code'];?>"><?=$this->language['title'];?></option>
    <?php foreach($this->languages as $k => $v): ?>
        <?php if($this->language['code'] != $k): ?>
            <option value="<?=$k;?>"><?=$v['title'];?></option>
        <?php endif; ?>
    <?php endforeach; ?>
</select>

<script>
    function tellToServer() {
        let select = document.getElementById('lang');
        let option = select.options[select.selectedIndex].value;

        window.location.href = "http://ronny.org/language/change/?lang=" + option;
    }
</script>