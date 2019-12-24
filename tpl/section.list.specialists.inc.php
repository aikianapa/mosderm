<section id="specialists" class="sm-section" data-name="Список специалистов">
    <!-- tpl/section.list.specialists.inc.php -->
    <div class="container">
    <div class="specialists-desc flex" data-wb-role="foreach" data-wb-form="specialists" data-wb-where='active="on"' data-wb-size="8">
            <div class="our-specialist__item">
                    <div class="our-specialist__img">
                        <a href="/specialists/{{id}}/{{wbFurlGenerate({{name}})}}"></a>
                        <img data-wb-role="thumbnail" data-wb-size="240px;320px;src" src="/uploads/{{_table}}/{{id}}/{{image[0].img}}" data-wb-hide="wb,data-src" alt="{{name}} - {{spec}}">
                    </div>
                    <div class="our-specialist__text">
                        <p><strong>{{name}}</strong></p>
                        <p>
                            <span>{{spec}}</span>
                            <small class="empty-control" data-wb-role="formdata" data-wb-form="branches" data-wb-item="{{branch}}" data-wb-hide="wb">
                                <br>{{name}}
                            </small>
                        </p>
                        <p>{{descr}}</p>
                    </div>
                </div>
        </div>
    </div>
</section>
