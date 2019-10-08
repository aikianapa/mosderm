<!doctype html>
<html lang="en">
<head data-wb-role="include" src="template" data-wb-name="head.inc.php">
    <base href="/tpl/">
</head>
<body>
<meta data-wb-role="include" src="template" data-wb-name="section.menu.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="section.request.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="section.breadcrumbs.inc.php">

    
<section id="paid-desc" class="sm-section sm-section-bottom" data-name="Поиск услуг">
    <div class="container">
                
            <meta data-wb-role="include" src="template" data-wb-name="section.form.find.services.php">
        
                <div class="stacktable-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Услуга</th>
                                <th>Цена руб.</th>
                                <th>Название центра</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody data-wb-role="foreach" data-wb-tpl="false" data-wb-form="products" data-wb-group="category" data-wb-where='{{where}}' data-wb-hide="wb">
                            <tr>
                                <td>
                                    {{name}}<br>
                                    <small data-wb-role="tree" data-wb-item="products_category" data-wb-branch="{{category}}" data-wb-hide="wb">{{name}}</small>
                                </td>
                                <td align="center">{{price}}</td>
                                <td>
                                    <ul data-wb-role="foreach" data-wb-from="branches" >
                                        <li data-wb-role="formdata" data-wb-form="branches" data-wb-item="{{_value}}" data-wb-hide="wb">
                                            <a href="/branches/{{id}}/{{wbFurlGenerate({{name}})}}">{{name}}</a>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <a href="/products/{{category}}/{{wbFurlGenerate({{name}})}}">Заказать</a>
                                </td>
                            </tr>
                            <empty>
                                <tr>
                                    <td colspan="4"><h4>Ничего не найдено</h4></td>
                                </tr>
                            </empty>
                        </tbody>
                    </table>
                </div>
        

    </div>
</section>
<link rel="stylesheet" href="css/stacktable.css" data-wb-append="head">
<script src="js/stacktable.js"  data-wb-append="body"></script>
<meta data-wb-role="include" src="template" data-wb-name="section.question.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="section.footer.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="scripts.inc.php">
</body>
</html>