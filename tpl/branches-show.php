<!doctype html>
<html lang="en">
<head data-wb-role="include" src="template" data-wb-name="head.inc.php">
</head>
<body>
<meta data-wb-role="include" src="template" data-wb-name="section.menu.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="section.request.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="section.breadcrumbs.inc.php">

    
    
<section id="branches-card" class="sm-section">
    <div class="container">
        <div class="branches-card__address flex">
            <div class="branches-card__address-info">
                <strong>Адрес филиала:</strong>
                <p>{{address}}</p>
                <strong>Как добраться:</strong>
                <p>{{howto}}</p>
                <strong>Время работы:</strong>
                <p>{{worktime}}</p>
                <strong>Единый телефон  для справок и предварительной записи МНПЦДК:</strong>
                <p><nobr>{{phone}}</nobr><br>
                    <span data-wb-where='"{{fax}}">""' data-wb-hidde="*">Факс:<nobr> {{fax}}</nobr><br></span>
                    Телефон администратора и платных услуг: <nobr>{{phoneadm}}</nobr></p>

                <strong>Заведующий филиалом:</strong>
                <p data-wb-role="formdata" data-wb-form="specialists" data-wb-item="{{boss}}">{{name}}</p>

                <strong>Адрес электронной почты: </strong>
                <p>{{email}}</p>
            </div>
            <div class="branches-card__address-map">
                <meta data-wb-role="include" src="template" data-wb-name="section.widget.contactsmap.inc.php">
                <meta data-wb-selector="#auto-contain" data-wb-attr="style" value="zoom:70%">
                <meta data-wb-remove="[idx={{_item}}] .baloon-off">
                <meta data-wb-selector="[idx={{_item}}] .baloon-on" data-wb-attr="style" value="display:block;">
                <meta data-wb-selector="[idx={{_item}}] .baloon-info" data-wb-attr="style" value="display:block;">
            </div>

        </div>
        
        <div class="schedule-table__item">
            <h3>Расписание приёма по личным вопросам</h3>
            <div class="stacktable-table">
                <table>
                    <tr>
                        <th></th>
                        <th>Адрес приемной</th>
                        <th>Телефон для записи</th>
                        <th>ФИО, должность</th>
                        <th>Время приема</th>
                        <th>Округ</th>
                    </tr>
                    <tbody data-wb-role="foreach" data-wb-from="schedule" data-wb-tpl="false">
                    <tr>
                        <th>{{_ndx}}</th>
                        <td>{{address}}</td>

                        <td><nobr>{{phone}}</nobr></td>

                        <td data-wb-role="formdata" data-wb-form="specialists" data-wb-item="{{boss}}" data-wb-hide="wb">
                            <strong>{{name}}</strong><br>
                            {{spec}}
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
    
<section id="record">
    <div class="container">
        <div class="record__wrap flex">
            <div class="record__left">
                <div class="record__btn-box">
                    <div class="record__btn">
                        <a href="/branches/{{id}}/order/">Онлайн запись</a>
                    </div>
                    <div class="record__btn">
                        <a href="/branches/{{id}}/addresses/">Обслуживаемые адреса</a>
                    </div>
                </div>
                <div class="record__img">
                    <img data-wb-role="thumbnail" data-wb-size="261;381;src" src="{{_image}}" data-wb-noimg="/tpl/img/record/record-img.png"/>
                </div>

            </div>
            <div class="record__right">
                {{text}}
            </div>
        </div>
    </div>
</section>

<link rel="stylesheet" href="css/stacktable.css" data-wb-append="head">
<script src="js/stacktable.js"  data-wb-append="body"></script>
    
<meta data-wb-role="include" src="template" data-wb-name="section.widget.spec.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="section.question.inc.php" data-wb-id="question-2">
<meta data-wb-role="include" src="template" data-wb-name="section.footer.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="scripts.inc.php">
</body>
</html>