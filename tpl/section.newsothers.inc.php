<section id="spec-reviews" data-name="Виджет Другие новости">
    <!-- tpl/section.newsothers.inc.php -->
    <div class="container">
        <h2>Другие новости</h2>
        <meta data-wb-role="variable" var="exclude" value='"{{_item}}"'>
        <div class="spec-reviews__slider" data-wb-role="foreach" data-wb-tpl="false" data-wb-count="3" data-wb-hide="wb">
            <div class="spec-reviews__slider-item-wrap">
                <div class="spec-reviews__slider-wrap flex" data-wb-role="foreach" data-wb-tpl="false" data-wb-limit="2" data-wb-form="news" data-wb-where='id NOT_IN_ARRAY({{_VAR[exclude]}})' data-wb-sort="date:d" data-wb-hide="wb">
                    <div class="spec-reviews__item" onclick='javascript:document.location.href = "/news/{{id}}/{{wbFurlGenerate({{header}})}}";'>
                        <span>
                            {{date("d.m.Y",strtotime({{date}}))}}
                        </span>
                        <p>
                            {{header}}
                        </p>
                        <meta data-wb-role="variable" var="exclude" value='{{_var.exclude}},"{{id}}"'>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
