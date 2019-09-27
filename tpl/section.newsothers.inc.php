<section id="spec-reviews" data-name="Виджет Другие новости">
    <div class="container">
        <h2>Другие новости</h2>
        <meta data-wb-role="variable" var="exclude" value='"{{_item}}"'>
        <div class="spec-reviews__slider" data-wb-role="foreach" data-wb-tpl="false" data-wb-count="2" data-wb-hide="wb">
            <div class="spec-reviews__slider-item-wrap">
                <div class="spec-reviews__slider-wrap flex" data-wb-role="foreach" data-wb-tpl="false" data-wb-limit="2" data-wb-form="news" data-wb-where='id NOT_IN_ARRAY({{_VAR[exclude]}})' data-wb-hide="wb">
                    <div class="spec-reviews__item">
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