    <section id="our-specialists" data-name="Виджет - Наши специалисты">
        <!-- tpl/section.widget.spec.inc.php -->
        <div class="container" data-wb-role="formdata" data-wb-form="branches" data-wb-item="{{office}}" data-wb-json='{"office":"{{office}}"}'  data-wb-hide="wb">
            <h2>Наши специалисты <a href="/specialists">Все специалисты</a></h2>

            <meta data-wb-role="variable" var="where" data-wb-if='"{{_form}}"="pages" AND "{{_item}}"="home"' value=' AND "{{image[0][img]}}" > "" ' else=' AND widget="on" '>
            <meta data-wb-role="variable" var="where" data-wb-if='"{{_form}}"="branches" AND "{{_mode}}"="show"' value=' AND branch = "{{_item}}"' else='AND widget="on" '>
            <meta data-wb-role="variable" var="where" data-wb-if='"{{office}}">""' value=' AND office = "{{office}}" AND ( widget="" OR widget="on" ) ' else='{{_var.where}}'>
            <meta data-wb-role="variable" var="where" data-wb-if='"{{_form}}"="branches" AND "{{_mode}}"="show" AND type = "office"' value=' AND office = "{{_item}}"' else='{{_var.where}}'>
            <meta data-wb-role="variable" var="where" data-wb-if='{{strpos(strtolower({{name}}),"платн")}}>0 AND "{{_mode}}"="show" AND type = "office"' value='{{_var.where}} OR (active="on" AND branch = "{{main}}" AND commerce = "on" )' else='{{_var.where}}'>

            <meta data-wb-role="variable" var="limit" data-wb-if='"{{_form}}" = "branches" AND "{{_mode}}" = "show"' value="" else='10'>

            <div class="our-specialists__slider" data-wb-role="foreach" data-wb-tpl="false" data-wb-where='active="on" {{_var[where]}}' data-wb-limit="{{_var.limit}}" data-wb-rand="true" data-wb-form="specialists" data-wb-hide="wb">
                <div class="our-specialist__item">
                    <a href="/specialists/{{id}}/{{wbFurlGenerate({{name}})}}"></a>
                    <div class="our-specialist__slider-wrap">
                        <div class="our-specialist__img">
                            <img data-wb-role="thumbnail" data-wb-size="200px;200px;src" offset="50;5" src="/uploads/{{_table}}/{{id}}/{{image[0].img}}" alt="{{name}} - {{spec}}">
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
