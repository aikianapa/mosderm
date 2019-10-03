<div class="container for-doctors__item flex">
    {{data.content.slide}}
    <div >
        <a href="{{data.content.link}}" class="for-doctors__img">
            <img data-wb-role="thumbnail" data-wb-size="320;187;src" src="/uploads/{{_form}}/{{_item}}/{{data.content.image[0].img}}" data-wb-noimg="/tpl/img/news/news-img.png" alt="" data-wb-hide="wb"/>
        </a>
    </div>
    <div class="for-doctors__info">
        <a href="{{data.content.link}}" class="for-doctors__info-title">
            <h3>{{data.content.header}}</h3>
        </a>
        {{data.content.text}}
    </div>
</div>
<meta data-name="Блок контента изображение, текст, ссылка">