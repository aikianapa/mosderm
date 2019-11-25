<!doctype html>
<html lang="en">

<head data-wb-role="include" src="template" data-wb-name="head.inc.php">
</head>
<body>
<meta data-wb-role="include" src="template" data-wb-name="section.menu.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="section.request.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="section.breadcrumbs.inc.php">

    <!-- tpl/branches-show.php -->

<section id="branches-card" class="sm-section">
    <div class="container">
        <div class="branches-card__address flex">
            <meta data-wb-role="variable" var="branch" data-wb-if='type="branch"' value="{{id}}" else="{{main}}">
            <div class="branches-card__address-info">
                <div  data-wb-role="formdata" data-wb-form="branches" data-wb-item="{{_var.branch}}" data-wb-hide="*">
                <strong class="empty-remove-adr">Адрес филиала:</strong>
                <p class="empty-control-adr">{{address}}</p>
                <strong class="empty-remove-how">Как добраться:</strong>
                <p class="empty-control-how">{{howto}}</p>
                <strong class="empty-remove-wtm">Время работы:</strong>
                <p class="empty-control-wtm">{{worktime}}</p>
                <strong class="empty-remove-phone">Единый телефон  для справок и предварительной записи МНПЦДК:</strong>
                    <p><nobr class="empty-control-phone"><a href="tel:+{{text2tel({{phone}})}}">{{phone}}</a></nobr><br>
                    <span class="empty-remove-fax">Факс:<nobr class="empty-control-fax">{{fax}}</nobr><br></span>
                        <span class="empty-remove-pha">Телефон администратора и платных услуг: <nobr class="empty-control-pha"><a href="tel:+{{text2tel({{phoneadm}})}}">{{phoneadm}}</a></nobr></span>
                </p>

                <strong class="empty-remove-eml">Адрес электронной почты: </strong>
                    <p class="empty-control-eml"><a class="link" href="mailto:{{email}}">{{email}}</a></p>
                </div>

                <strong data-wb-where='type="branch"' data-wb-hide="wb" class="empty-remove-zav">Заведующий филиалом:</strong>
                <strong data-wb-where='type="office"' data-wb-hide="wb" class="empty-remove-zav">Заведующий отделением:</strong>
                <p data-wb-role="formdata" data-wb-form="specialists"
                   data-wb-item="{{boss}}" data-wb-clear="true" data-wb-hide="wb"
                   class="empty-control-zav"><a class="link" href="/specialists/{{id}}/{{wbFurlGenerate({{name}})}}">{{name}}</p>

            </div>
            <div class="branches-card__address-map">
                <meta data-wb-role="include" src="template" data-wb-name="section.widget.contactsmap.inc.php">
                <meta data-wb-remove="[idx={{_item}}] .baloon-off">
                <meta data-wb-selector="[idx={{_item}}] .baloon-on" data-wb-attr="style" value="display:block;">
                <meta data-wb-selector="[idx={{_item}}] .baloon-info" data-wb-attr="style" value="display:block;">
            </div>

        </div>
</section>
<section id="record" class="sm-section">
    <div class="container">
        <div class="record__wrap flex">
            <div class="record__left">
                <div class="record__btn-box" data-wb-where='mapnum != "17"'>
                    <div class="record__btn">
                        <a href="/branches/{{id}}/order/" data-wb-where='"{{type}}" = "branch"' data-wb-hide="wb">Онлайн запись</a>
                        <a href="/branches/{{main}}/order/" data-wb-where='"{{type}}" = "office"' data-wb-hide="wb">Онлайн запись</a>
                    </div>
                    <div class="record__btn">
                        <a data-wb-where='"{{srvaddr[0][img]}}">""' href="/uploads/branches/{{id}}/{{srvaddr[0][img]}}" data-wb-hide="wb">Обслуживаемые адреса</a>
                    </div>
                </div>
                <div class="record__img">
                    <img data-wb-role="thumbnail" data-wb-size="261;381;src" src="{{_image}}" data-wb-noimg="/tpl/img/record/record-img.png" data-wb-hide="wb,data-src"/>
                </div>

            </div>
            <div class="record__right text">
                {{text->clearStyles()}}
            </div>
        </div>
    </div>
</section>
<section  class="sm-section-bottom empty-remove-schedule">
     <div class="container">
        <div class="schedule-table__item">
            <h3>Расписание приёма по личным вопросам</h3>
            <div class="stacktable-table">
                <table>
                    <thead>
                    <tr>
                        <th></th>
                        <th>Адрес приемной</th>
                        <th>Телефон для записи</th>
                        <th>ФИО, должность</th>
                        <th>Время приема</th>
                        <th>Округ</th>
                    </tr>
                    </thead>
                    <tbody data-wb-role="foreach" data-wb-from="schedule" data-wb-tpl="false" class="empty-control-schedule">
                    <tr class="empty-remove-schtr{{_ndx}}">
                        <th>{{_ndx}}</th>
                        <td>{{address}}</td>

                        <td><nobr class="empty-control-schtr{{_ndx}}">{{phone}}</nobr></td>

                        <td data-wb-role="formdata" data-wb-form="specialists" data-wb-item="{{boss}}" data-wb-hide="wb">
                            <a href="/specialists/{{id}}/{{wbFurlGenerate({{name}})}}">
                            <strong>{{name}}</strong>
                            </a>
                            <div><small>{{spec}}</small></div>
                        </td>

                        <td>{{worktime}}</td>
                        <td data-wb-role="tree" data-wb-item="area" data-wb-branch="{{%area}}">{{name}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="empty-remove-offices" data-wb-where='"{{type}}" = "branch"'>
    <div class="container">
        <div class="schedule-table__item">
            <h3>Отделения</h3>
            <div data-wb-role="foreach" data-wb-form="branches" data-wb-tpl="false" data-wb-where='main="{{id}}"' class="empty-control-offices">
                <div class="sm-section">
                    <h4 class="mb-3"> - <a href="/branches/{{id}}/{{wbFurlGenerate({{name}})}}">{{name}}</a></h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="specialists" class="sm-section-bottom" data-wb-where='"{{type}}" = "office"'>
    <div class="container">
        <h3>Наши специалисты</h3>
            <div data-wb-role="include" src="template" data-wb-name="section.widget.spec.inc.php" class="sm-section" data-wb-json='{"office":"{{id}}"}' data-wb-hide="*">
                <meta data-wb-remove="#our-specialists h2"><br>
            </div>
    </div>
</section>

<section id="specialists" class="sm-section-bottom" data-wb-where='"{{type}}" = "branch"'>
    <div class="container">
        <h3>Наши специалисты</h3>
            <div data-wb-role="include" src="template" data-wb-name="section.widget.spec.inc.php" class="sm-section" data-wb-hide="*">
                <meta data-wb-remove="#our-specialists h2"><br>
            </div>
    </div>
</section>

<link rel="stylesheet" href="css/stacktable.css" data-wb-append="head">
<script src="js/stacktable.js"  data-wb-append="body"></script>

<meta data-wb-role="include" src="template" data-wb-name="section.question.inc.php" data-wb-id="question-2" class="sm-section">
<meta data-wb-role="include" src="template" data-wb-name="section.footer.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="scripts.inc.php">
</body>
</html>
