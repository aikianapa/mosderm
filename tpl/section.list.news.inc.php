<section id="news-desc" class="sm-section" data-name="Список новостей">
    <div class="container">
        <div class="news__wrap flex" data-wb-role="foreach" data-wb-form="news" data-wb-size="6" data-wb-sort="date:d" data-wb-where='active = "on" AND ("{{_post.search_name}}" > "" AND "{{_post.search_name}}" LIKE "{{header}}")'>
            <div class="news-block flex">
                <div class="news-block__img">
                    <img data-wb-role="thumbnail" data-wb-size="251;169;src" src="/uploads/news/{{id}}/{{image[0].img}}" data-wb-noimg="/tpl/img/news/news-img.png" alt="{{header}}">
                </div>
                <div class="news-block__info">
                    <strong>
                        {{header}}
                    </strong>
                    <span>{{date("d.m.Y",strtotime({{date}}))}}</span>
                    <p>
                        {{strip_tags(wbGetWords({{text}},"15"))}}
                    </p>
                    <a href="/news/{{id}}/{{wbFurlGenerate({{header}})}}">
                        Читать далее
                    </a>

                </div>

            </div>
            <meta data-wb-selector=".container nav ul" data-wb-addclass="flex">
        </div>
        
    </div>
</section>