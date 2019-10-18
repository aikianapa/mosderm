<!doctype html>
<html lang="en">
<!-- tpl/site-find.php -->
<head data-wb-role="include" src="template" data-wb-name="head.inc.php">
    <base href="/tpl/">
</head>
<body>
<meta data-wb-role="include" src="template" data-wb-name="section.menu.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="section.request.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="section.breadcrumbs.inc.php">

    
<section id="paid-desc" class="sm-section sm-section-bottom" data-name="Поиск услуг">
    <div class="container">
                        <div data-wb-role="foreach" data-wb-from="result" data-wb-size="10" data-wb-where='{{where}}'>
                            <div class="mb-5">
                            <meta data-wb-role="variable" var="link" value="/{{id}}" data-wb-where='"{{_table}}" = "pages"'>
                            <meta data-wb-role="variable" var="link" value="/news/{{id}}/{{wbFurlGenerate({{header}})}}" data-wb-where='"{{_table}}" = "news"'>
                            <meta data-wb-role="variable" var="link" value="/activity/{{id}}/{{wbFurlGenerate({{header}})}}" data-wb-where='"{{_table}}" = "activities"'>
                            <meta data-wb-role="variable" var="link" value="/specialists/{{id}}/{{wbFurlGenerate({{header}})}}" data-wb-where='"{{_table}}" = "specialists"'>
                            <meta data-wb-role="variable" var="link" value="/vacancy/{{id}}/{{wbFurlGenerate({{header}})}}" data-wb-where='"{{_table}}" = "vacancy"'>

                            <h4><a class="link" href="{{_var.link}}">
                                <span data-wb-where='header > ""'>{{header}}</span>
                                <span data-wb-where='header = ""'>Заголовок</span>
                            </a></h4>
                            <div class="mb-2" style="padding:5px 20px">
                                <div class="mb-2">{{wbGetWords({{text}},40)}}</div>
                                <a class="link" href="{{_var.link}}">Подробно</a>
                            </div>
                            </div>
                            <empty>
                                <h4>Ничего не найдено</h4>
                            </empty>
                                
                        </div>


    </div>
</section>
<link rel="stylesheet" href="css/stacktable.css" data-wb-append="head">
<script src="js/stacktable.js"  data-wb-append="body"></script>
<meta data-wb-role="include" src="template" data-wb-name="section.question.inc.php" data-wb-id="question-2">
<meta data-wb-role="include" src="template" data-wb-name="section.footer.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="scripts.inc.php">
</body>
</html>