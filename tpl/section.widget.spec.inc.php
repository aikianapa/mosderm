    <section id="our-specialists" data-name="Виджет - Наши специалисты">
        <!-- tpl/section.widget.spec.inc.php -->
        <div class="container">
            <h2>Наши специалисты <a href="/specialists">Все специалисты</a></h2>
            <meta data-wb-role="variable" var="where" data-wb-if='"{{_form}}"="branches" AND "{{_mode}}"="show"' value=' AND branch = "{{_item}}"' else=''>
            <meta data-wb-role="variable" var="where" data-wb-if='"{{office}}">""' value=' AND office = "{{office}}" AND ( widget="" OR widget="on" AND active = "on")' else='{{_var.where}}'>
            <div class="our-specialists__slider" data-wb-role="foreach" data-wb-tpl="false" data-wb-where='active="on" AND widget="on" {{_var[where]}}' data-wb-rand="true" data-wb-form="specialists" data-wb-hide="wb">
                <div class="our-specialist__item">
                    <a href="/specialists/{{id}}/{{wbFurlGenerate({{name}})}}"></a>
                    <div class="our-specialist__slider-wrap">
                        <div class="our-specialist__img">
                            <img data-wb-role="thumbnail" data-wb-size="200px;260px;src" src="/uploads/{{_table}}/{{id}}/{{image[0].img}}" alt="{{name}} - {{spec}}">
                        </div>
                        <div class="our-specialist__text">
                            <p><strong>{{name}}</strong></p>
                            <p><span>{{spec}}</span></p>
                            <p>{{descr}}</p>
                        </div>
                    </div>
                    
                </div>
            </div>
             <meta data-wb-selector=".our-specialists__slider [data-src]" data-wb-removeattr="data-src">
        </div>
    </section>