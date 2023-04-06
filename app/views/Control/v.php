<div class="post-container">
    <div class="post-sidebar">
        <div class="sidebar-box">
            <div class="sidebar-box-title">Автор</div>
        </div>
    </div>
    <div class="post-content">
        <h1 class="post-read-title"><?php echo $product['title']; ?></h1>
        <p class="post-text"><?php echo $product['price']; ?></p>

    </div>
    <div class="post-sidebar">
        <h1 class="sidebar-text">Поделитесь в</h1>
        <a href="https://telegram.me/share/url?url=http://ronny.loc/post/read/<?php echo $product['alias']; ?>" onclick="window.open(this.href, 'Названия окна', 'width=550, height=650, left=24, top=24, scrollbars, resizable'); return false;" class="sidebar-social-net telegram">Телеграм</a>
    </div>
</div>