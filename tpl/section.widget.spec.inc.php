    <section id="our-specialists" data-name="Виджет - Наши специалисты">
        <div class="container">
            <h2>Наши специалисты <a href="/specialists">Все специалисты</a></h2>
            <meta data-wb-role="variable" var="where" data-wb-if='"{{_form}}"="branches" AND "{{_mode}}"="show"' value=' AND branch = "{{_item}}"' else=''>
            <div class="our-specialists__slider" data-wb-role="foreach" data-wb-tpl="false" data-wb-where='widget="on" {{_var[where]}}' data-wb-rand="true" data-wb-form="specialists">
                <div class="our-specialist__item">
                    <a href="/specialists/{{id}}/{{wbFurlGenerate({{name}})}}">
                    <div class="our-specialist__slider-wrap">
                        <div class="our-specialist__img">
                            <img data-wb-role="thumbnail" data-wb-size="200px;200px;src" src="/uploads/{{_table}}/{{id}}/{{image[0].img}}" alt="{{name}} - {{spec}}">
                        </div>
                        <div class="our-specialist__text">
                            <p><strong>{{name}}</strong></p>
                            <p><span>{{spec}}</span></p>
                            <p>{{descr}}</p>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>