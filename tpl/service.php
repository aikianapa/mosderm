<!doctype html>
<html lang="en">
<head data-wb-role="include" src="template" data-wb-name="head.inc.php">
    <link rel="stylesheet" href="css/stacktable.css" data-wb-append="head">
    <script src="js/stacktable.js"  data-wb-append="body"></script>
</head>
<body data-wb-role="tree" data-wb-item="products_category" data-wb-branch="{{_item}}">
<meta data-wb-role="include" src="template" data-wb-name="section.menu.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="section.request.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="section.breadcrumbs.inc.php">

<section id="consultation" class="sm-section-bottom sm-section">
    <div class="container">
        <div class="consultation__wrap">
            <div class="consultation__header flex">
                <div class="consultation__btn">
                    <a href="#">Запись на прием</a>
                </div>
                <div class="consultation__header-text">
                    <p>{{data.text}}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sm-section-bottom sm-section container slidersimple" data-wb-where='"{{count({{data.images}})}}" > "0"'>
    <div class="container">
    <div class="consultation__slider" data-wb-role="foreach" data-wb-from="data.images" data-wb-where='visible="on"' data-wb-tpl="false" data-wb-hide="wb">
        <div class="consultation__slider-item"><img data-wb-role="thumbnail" data-wb-size="1110;424;src" src="/uploads/tree/products_category/{{_item}}/{{img}}" data-wb-hide="wb" /></div>
    </div>
    </div>
</section>
    
<section class="sm-section-bottom sm-section consultation__footer" data-wb-where='"{{strip_tags({{data.descr}})}}" > ""'>
    <div class="container">
    {{data.descr}}
    </div>
</section>
    
    
<section id="price-list" class="sm-section-bottom big-table">
    <div class="container">
        <div class="schedule-table__item">
            <h3>Прайс-лист</h3>
            <div class="stacktable-table">
                <table>
                    <thead>
                    <tr>
                        <th></th>
                        <th>Услуга</th>
                        <th>Стоимость, руб.</th>
                        <th>Записаться</th>
                    </tr>
                    </thead>
                    <tbody data-wb-role="foreach" data-wb-tpl="false" data-wb-form="products" data-wb-sort="name" data-wb-where='category = "{{_item}}"' data-wb-hide="wb">
                    <tr>
                        <th>{{_ndx}}</th>
                        <td>{{name}}</td>
                        <td>{{price}}</td>
                        <td><label class="checkbox-control">
                            <input type="checkbox">
                            <span class="checkbox-control__box"></span>
                        </label>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <script data-wb-append="body">
            $("#price-list table input[type=checkbox]").off("change");
            $("#price-list table input[type=checkbox]").on("change",function(){
                $("#srvlist").html("");
                $("#srvinp").html("");
                var total = 0;
                var ndx = 0;
                $("#price-list table input[type=checkbox]").each(function(){
                    if ($(this).prop("checked")) {
                        var name = $(this).parents("tr").find("td:eq(0)").text();
                        var price = $(this).parents("tr").find("td:eq(1)").text();
                        total += price*1;
                        ndx++;
                        $("#question-2 #srvlist").append("<p>"+name+"<strong> "+price+" руб.</strong></p>");
                        $("#question-2 #srvinp").append('<input type="hidden" name="order[]">');
                        $("#question-2 #srvinp input:last-child")
                            .attr("value",name+' = ' +price+ ' руб.')
                            .attr("placeholder",ndx)
                    }
                });
                $("#question-2 .total").html(total);
                $("#question-2 input[name=total]").val(total+ ' руб.');
            });
        
        </script>
    </div>
</section>
    
<section id="question-2" class="consultation__question sm-section-bottom">
    <div class="container">
        <form>
        <h2>Записаться на прием</h2>
        <div class="order">
            <p><strong>Вы записываетесь на услуги:</strong></p>
            <div id="srvlist">
            </div>
            <strong>Итого: <span class="total">0</span> руб.</strong>
        </div>
        <div class="question__border">
            <div class="question__wrap flex">
                <div class="question__right">
                    <input type="hidden" name="_subject" value="Запись на консуьтацию">
                    <input type="text" name="fullname" placeholder="Ваше Имя">
                    <input type="phone" name="phone" data-wb-mask="+7 (999) 999-99-99" placeholder="Телефон">
                    <input type="email" name="email" placeholder="E-mail">
                    <div id="srvinp"></div>
                    <input type="hidden" name="total" placeholder="Итого">
                </div>
                <div class="question__left">
                    <textarea placeholder="Коментарий" name="text"></textarea>
                    <div class="question__bottom flex">
                        <a href=":javascript:void(0);" data-wb-ajax="/ajax/mail/" class="btn">Отправить</a>
                        <p>Нажимая кнопку «Отправить», Вы соглашаетесь с обработкой персональных данных</p>
                    </div>
                </div>

            </div>

        </div>
        </form>
    </div>
</section>


<meta data-wb-role="include" src="template" data-wb-name="section.widget.spec.inc.php" >
    
<meta data-wb-role="include" src="template" data-wb-name="section.footer.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="scripts.inc.php">
</body>
</html>