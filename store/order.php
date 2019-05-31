<!DOCTYPE HTML>
<html>
    <head>
        <title>Molen</title>
        <link href = "css/main.css" rel = "stylesheet">
        <meta charset = "utf-8">
        <link href = "css/classes.css" rel = "stylesheet">
        <link href = "css/order.css" rel = "stylesheet">
    </head>
    <body>
        <div class = "all">
        <header>
                <form>
                    <a href = "index.php"><img src = "img/icon.png"></a>
                    <button class = "butt buttHeader" id = "firstButtHeader" formaction = "index.php">ТОВАРЫ</button>
                    <button class = "butt buttHeader">СТАТЬИ</button>
                    <button class = "butt buttHeader" formaction = "prices.php">ЦЕНЫ</button>
                    <button class = "butt buttHeader" id = "bigButtHeader">О КОМПАНИИ</button>
                    <div class = "contacts">
                        <div class = "phoneNum">+7 (455) 837-42-42</div>
                        <div class = "timesWork">Часы работы: с 8:00 до 22:00</div>
                        <div class = "address">Шоколадный проспект, 17</div>
                    </div>
                </form>
            </header>

            <section>
                <h1>Форма заказа</h1>
                <form id = "form-order" class = "form">
                    <div id = "inputs-conteiner">
                        <p><span class = "caption">Ваше имя:</span><input type = "text" class = "input" placeholder = "Василий"></p>
                        <p><span class = "caption">Ваш номер телефона:</span><input type = "tel" class = "input" placeholder = "+7 (978) ***-**-**"></p>
                        <p><span class = "caption">Ваш email:</span><input type = "email" class = "input" placeholder = "vasiliy@gmail.com"></p>
                    </div>
                    <p><span class = "caption">Товар:</span>
                    <select>
                        <option>Ароматный кофе</option>
                        <option>Ароматный чай</option>
                        <option>Молотый кофе</option>
                        <option>Листовый чай</option>
                        <option>Горячий шоколад</option>
                        <option>Темный шоколад</option>
                        <option>Молочный шоколад</option>
                        <option>Белый шоколад</option>
                        <option>Отборный шоколад</option>
                        <option>Светлый шоколад</option>
                        <option>Шоколадные конфеты</option>
                        <option>Карамельные конфеты</option>
                        <option>Шоколадные торты</option>
                    </select>
                    </p>
                    <p><span class = "caption">Число товара,гр:</span><input type = "number" class = "input" max = "2000" min = "100" step = "100" placeholder = "100"></p>
                    <p><input type = "submit" class = "butt" value = "Отправить"></p>
                    <p><iframe src="https://yandex.ru/map-widget/v1/-/CBRxF6haKB" width="260" height="200" frameborder="0" allowfullscreen="true"></iframe></p>
                </form>
            </section>

            <footer>
                <p class = "topFooter"><span class = "timesWorkFooter">Часы работы: с 8:00 до 22:00</span>
                <span class = "author">Разработка сайта WEB SlobodaIT Ltd.</span>
                </p>
                <p class = "bottomFooter"><span class = "addressFooter">Шоколадный проспект, 17</span>
                    <span class = "allAccess">Все права защищены 2019</span>
                    <a href = "#" class = "politics">Политика конфиденциальности</a>
                </p>
            </footer>
        </div>
    </body>
</html>