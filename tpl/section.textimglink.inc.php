<div class="container for-doctors__item flex">
    <!-- tpl/section.textimglink.inc.php -->
    {{data.content.slide}}
    <div >
        <a href="{{data.content.link}}" class="for-doctors__img">
            <img data-wb-role="thumbnail" data-wb-size="320;187;src" src="/uploads/{{_form}}/{{_item}}/{{data.content.image[0].img}}" data-wb-noimg="/tpl/img/news/news-img.png" alt="" data-wb-hide="wb,data-src"/>
        </a>
    </div>
    <div class="for-doctors__info">
        <a href="{{data.content.link}}" class="for-doctors__info-title">
            <h3>{{data.content.header}}</h3>
        </a>
        <div class="text">{{data.content.text->clearStyles()}}</div>
    </div>
</div>
<meta data-name="Блок контента изображение, текст, ссылка">