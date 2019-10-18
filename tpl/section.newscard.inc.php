<section id="news-card" class="sm-section" data-name="Блок контента новости">
    <div class="container" data-wb-role="formdata" data-wb-form="{{_form}}" data-wb-item="{{_item}}" data-wb-hide="wb">
        <span>{{date("d.m.Y",strtotime({{date}}))}}</span>
        <div class="news-card__wrap flex">
            <div class="spec-card__info text">
                {{text->clearStyles()}}
            </div>
            <!--div class="news-card__img">
                <img data-wb-role="thumbnail" data-wb-size="330;309;src" src="/uploads/{{_form}}/{{id}}/{{image[0].img}}" data-wb-noimg="/tpl/img/news/news-img.png" alt="{{header}}">
            </div-->
        </div>
    </div>
</section>