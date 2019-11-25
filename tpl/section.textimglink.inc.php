<div class="container for-doctors__item flex">
    <!-- tpl/section.textimglink.inc.php -->
    {{data.content.slide}}
    <div >
        <a href="{{data.content.link}}" class="for-doctors__img">
            <meta data-wb-role="variable" var="width" data-wb-if='"{{data.content.width}}"=""' value="300" else="{{intval({{data.content.width}})}}">
            <meta data-wb-role="variable" var="height" value="{{ intval({{_var.width / 4 * 3}})}}">
            <meta data-wb-role="variable" var="height" value="{{ intval({{_var.width / 3 * 4}})}}" data-wb-where='"{{data.content.direction}}" = "v"'>
            <meta data-wb-role="variable" var="height" value="{{_var.width}}" data-wb-where='"{{data.content.direction}}" = "c"'>

            <img data-wb-role="thumbnail" data-wb-size="{{_var.width}};{{_var.height}};src" src="/uploads/{{_form}}/{{_item}}/{{data.content.image[0].img}}" data-wb-noimg="/tpl/img/news/news-img.png" alt="" data-wb-hide="wb,data-src"/>
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
