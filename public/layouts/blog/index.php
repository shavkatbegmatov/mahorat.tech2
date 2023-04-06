<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php fw\core\base\View::getMeta(); ?>

    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/layouts/blog/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <div class="container">
        <div class="navbar">
            <div class="navbar-top">
                <div class="navbar-logo">Ронни</div>
                <div>
                    <?php if (isset($_SESSION['user'])): ?>
                        <a class="navbar-account" id="yourBtn" style="cursor: pointer;">
                            <i class="fa-solid fa-bell"></i>
                        </a>
                    <?php endif; ?>
                    <a href="<?php echo ROOT_URL; ?>/user" class="navbar-account">
                        <?php if (isset($_SESSION['user'])): ?>
                            <?php echo $_SESSION['user']['login']; ?>
                        <?php else: ?>
                            <i class="fa-solid fa-user"></i>
                        <?php endif; ?>
                    </a>
                </div>
            </div>
            <div class="navbar-list"><a href="/" class="navbar-link">Главная</a></div>
        </div>
        <div class="content">

            <?php if(isset($_SESSION['error'])): ?>
                <div class="alert">
                    <div class="alert-error">
                        <?=$_SESSION['error']; unset($_SESSION['error'])?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert">
                    <div class="alert-success">
                        <?=$_SESSION['success']; unset($_SESSION['success'])?>
                    </div>
                </div>
            <?php endif; ?>

            <?php echo $content; ?>
        </div>
    </div>

    <?php if (isset($_SESSION['user'])): ?>
        <div id="yourModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="modal-title">Уведомления</div>
                <div class="modal-text">
                    Здесь будут показаны только 5 последних сообщения от системы, другие сообщения вы можете увидеть на своем профиле.
                    <br>
                    <br>
                    <div class="sys-message">
                        <div class="sys-message-title">Система <span class="sys-message-text">16 Сентябрь</span></div>
                        <div class="sys-message-text">Привет, как дела?</div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <?php
        foreach ($scripts as $script) {
            echo $script;
        }
    ?>

    <script>
        $('.dropdown').click(function () {
            $(this).attr('tabindex', 1).focus();
            $(this).toggleClass('active');
            $(this).find('.dropdown-menu').slideToggle(300);
        });

        $('.dropdown').focusout(function () {
            $(this).removeClass('active');
            $(this).find('.dropdown-menu').slideUp(300);
        });
        
        $('.dropdown .dropdown-menu li').click(function () {
            $(this).parents('.dropdown').find('span').text($(this).text());
            $(this).parents('.dropdown').find('input').attr('value', $(this).attr('id'));
        });

        <?php if (isset($_SESSION['user'])): ?>
            let modal = document.getElementById("yourModal");

            let btn = document.getElementById("yourBtn");

            let span = document.getElementsByClassName("close")[0];
        
            btn.onclick = function() {
                modal.style.display = "block";
            }
        
            span.onclick = function() {
                modal.style.display = "none";
            }
        
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        <?php endif; ?>
    </script>

</body>
</html>