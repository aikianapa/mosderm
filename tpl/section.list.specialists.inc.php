<section id="specialists" class="sm-section" data-name="Список специалистов">
    <div class="container">
    <div class="specialists-desc flex" data-wb-role="foreach" data-wb-form="specialists" data-wb-where='' data-wb-size="12">
            <div class="our-specialist__item">
                    <div class="our-specialist__img">
                        <a href="/specialists/{{id}}/{{wbFurlGenerate({{name}})}}"></a>
                        <img data-wb-role="thumbnail" data-wb-size="240px;320px" offset="0%;50%" src="/uploads/{{_table}}/{{id}}/{{image[0].img}}">
                    </div>
                    <div class="our-specialist__text">
                        <p><strong>{{name}}</strong></p>
                        <p><span>{{spec}}</span></p>
                        <p>{{descr}}</p>
                    </div>
                </div>
        </div>
    </div>
</section>