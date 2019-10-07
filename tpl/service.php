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




    </div>
</section>

<meta data-wb-role="include" src="template" data-wb-name="section.widget.spec.inc.php" >
    
<meta data-wb-role="include" src="template" data-wb-name="section.footer.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="scripts.inc.php">
</body>
</html>