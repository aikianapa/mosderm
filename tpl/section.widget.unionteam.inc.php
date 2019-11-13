<section id="union-team" class="sm-section-bottom sm-section" data-name="Виджет - Сотрудники профсоюза">
    <!-- tpl/section.widget.unionteam.inc.php -->
    <div class="container">
        <h2>Сотрудники профсоюза</h2>
        <div class="union-team__wrap flex" data-wb-role="foreach" data-wb-form="specialists"
             data-wb-where='active = "on" AND union = "on" AND uniwidget = "on"'
             data-wb-tpl="false" data-wb-rand="on">
            <div class="union-team__item">
                <div class="our-specialist__img">
                    <a href="/specialists/{{id}}/{{wbFurlGenerate({{name}})}}"></a>
                    <img data-wb-role="thumbnail" data-wb-size="200px;260px;src" src="/uploads/{{_table}}/{{id}}/{{image[0].img}}" alt="{{name}} - {{spec}}">
                </div>
                <div class="union-team__text">
                    <strong>{{name}}</strong>
                    <span>{{spec}}</span>
                    <strong>Телефон</strong>
                    <p>{{phone}}</p>
                    <strong>Часы приема по личным вопросам </strong>
                    <p>{{worktime}}</p>

                </div>

            </div>
        </div>
    </div>
</section>
