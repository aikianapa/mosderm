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
            <h4 class="mb-5">Результаты поиска:</h4>

                        <div data-wb-role="foreach" data-wb-from="result" data-wb-size="5" data-wb-where='{{where}}'>
                            <meta data-wb-role="variable" var="link" value="/{{id}}" data-wb-where='_table = "pages"'>
                            <h4>{{header}}</h4>
                            <p class="mb-2">
                                {{wbGetWords({{text}},50)}}
                            </p>
                            <a href="{{_var.link}}">Подробно</a><br><br>
                            <empty>
                                <h4>Ничего не найдено</h4>
                            </empty>
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