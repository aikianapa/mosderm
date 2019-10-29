    <section id="news" data-name="Виджет новостей">
        <!-- tpl/section.news.inc.php -->
        <div class="container">
            <h2>Новости <a href="/news">Все новости</a></h2>
            <div class="news__wrap flex">
                <div class="news__first-block" data-wb-role="foreach" data-wb-form="news" data-wb-limit="4" data-wb-sort="date:d" data-wb-tpl="false"  data-wb-where='active = "on" AND home="on"' data-wb-hide="wb">
                    <div class="news__fb-item" data-wb-where='"{{_ndx}}" != "1"'>
                        <a href="/news/{{id}}/{{wbFurlGenerate({{header}})}}"></a>
                        <span>{{date("d.m.Y",strtotime({{date}}))}}</span>
                        <p>{{header}}</p>
                    </div>
                </div>
                <div  data-wb-role="foreach" data-wb-form="news" data-wb-limit="1" data-wb-sort="date:d"  data-wb-where='active = "on" AND home="on"' data-wb-tpl="false" data-wb-hide="*">
                    <div class="news__second-block">
                        <img data-wb-role="thumbnail" data-wb-size="348;433;src" src="/uploads/news/{{id}}/{{image[0].img}}" data-wb-noimg="/tpl/img/news/news-img.png" alt="{{header}}">
                    </div>
                    <div class="news__third-block">
                        <div class="news__third-block-top">
                            <p><a href="/news/{{id}}/{{wbFurlGenerate({{header}})}}">{{header}}</a></p>
                            <span>{{date("d.m.Y",strtotime({{date}}))}}</span>
                            <div class='news__gray-text'>
                                <p><a href="/news/{{id}}/{{wbFurlGenerate({{header}})}}">{{strip_tags(wbGetWords({{text}},"55"))}}</a></p>
                            </div>
                        </div>
                        <div class="news__third-block-bottom">
                            <a href="/news/{{id}}/{{wbFurlGenerate({{header}})}}">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>