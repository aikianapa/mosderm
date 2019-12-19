<section id="news-desc" class="sm-section" data-name="Список новостей">
    <!-- tpl/section.list.news.inc.php -->
    <div class="container">
        <meta data-wb-role="variable" var="where" data-wb-if='"{{_post.search_name}}" > ""' value=' AND header LIKE "{{_post.search_name}}" ' else="">
        <div class="news__wrap flex" data-wb-role="foreach" data-wb-form="news" data-wb-size="6" data-wb-sort="date:d" data-wb-where='active = "on" {{_var.where}}' data-wb-hide="false">
            <div class="news-block flex">
                <div class="news-block__img">
                  <a href="/news/{{id}}/{{wbFurlGenerate({{header}})}}">
                    <img data-wb-role="thumbnail" data-wb-size="251;312;src" offset="50;0" src="/uploads/news/{{id}}/{{image[0].img}}"  data-wb-hide="wb,data-src" data-wb-noimg="/tpl/img/news/news-img.png" alt="{{header}}">
                  </a>
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
                            <empty>
                                <div>
                                <h4>Ничего не найдено</h4>
                                    <br>
                                <p><a class="link" href="/news">Вернуться к списку новостей</a></p>
                                </div>
                            </empty>
            <meta data-wb-selector=".container nav ul" data-wb-addclass="flex">
        </div>

    </div>
</section>
