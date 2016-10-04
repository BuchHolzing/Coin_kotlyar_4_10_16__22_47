<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="Style.css" rel="stylesheet" type="text/css">
    <title>Электронная библиотека</title>
</head>

<body>

<div id="content">

    <div id="header">
        <table  class="header">
            <tr>
                <td class="logo">
                    <a href="index.php"><img src="img/logo.png"></a>
                </td>
                <td class="akk">
                    <a>ИМЕЕТЕ АККАУНТ? <span><a class="link" href="www.google.com"> ВОЙТИ </a></span>
                        ИЛИ <span><a href="www.google.com" class="link"> ЗАРЕГЕСТРИРОВАТЬСЯ</a></span></a>
                </td>
            </tr>
        </table>
    </div>

    <div id="navigation">
        <table class="navigation">
            <tr >
                <td >
                    <a href="index.php"> <strong>Главная</strong></a>
                </td>
                <td>
                    <a href="author.php"><strong>Авторы</strong></a>
                </td>
                <td>
                    <a href="best.php"><strong>Лучшее</strong></a>
                </td>
                <td>
                    <a href="info.php"><strong>Инфо</strong></a>
                </td>
            </tr>
        </table>
    </div>

    <div id="maincontent">

        <div class="menu">
            <p class="title" align="center" class="title" > Навигация</p>
            <div id="leftmenu">
                <a href="D&T.php">Детективы и Триллеры</a>
                <a href="childly.php">Детское</a>
                <a href="science.php">Наука, Образование</a>
                <a href="fantastic.php">Фантастика</a>
            </div>
        </div>

        <div class="content">
            <div class="block2">
                <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0" >
                    <tr>

                        <td height="40" colspan="2" valign="bottom">
                            <?php
                            echo " add books "; // ДОБАВЬ СЮДА ПАРУ ВСРАТЫХ КНИГ
                            ?>
                        </td>
                    </tr>
                    <tr>
<!--                        <td width="120" valign="top">-->
<!--                            <img src="img/6911.jpg" alt="" width="120" height="170" /> -->
<!--                        </td>-->
<!--                        <td valign="top" >-->
<!--                            <p><b>Автор:</b> <a href="http://book-online.com.ua/author.php?author=327">Лукьяненко Сергей Васильевич</a></p>-->
<!--                            <p><b>Раздел:</b> <a href="http://book-online.com.ua/index.php?cat=91">Киберпанк</a></p>-->
<!--                            <p><b>Год:</b> 0</p>-->
<!--                            <p><b>Страниц:</b> 148</p>-->
<!--                            <div class="read"><a href="http://book-online.com.ua/read.php?book=6911" title="Читать книгу.">Читать</a>-->
<!--                                <a href="http://book-online.com.ua/show_book.php?book=6911" title="Описание книги, отзывы.">Подробнее</a>-->
<!--                            </div>-->
<!--                            <img src="img/zp.gif" width="230" height="1" align="top" />-->
<!--                        </td>-->
                        <?php
                        echo "Детские книги сюда";
                        ?>
                    </tr>
                </table>

            </div>

        </div>
    </div>

    <div id="footer">


    </div>

</div>

</body>

</html>