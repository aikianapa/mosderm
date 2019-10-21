<section id="education"class="sm-section sm-section-bottom" data-name="Колонки с изображением и текстом">
    <!-- tpl/section.cols.imgtext.inc.php -->
    <div class="container">
        <div class="education__wrap flex" data-wb-role="foreach" data-wb-from="data.content.slide" data-wb-tpl="false">
            <div class="education__item">
            <div class="education__img">
                <img data-wb-role="thumbnail" data-wb-size="545px;252px;src" src="/uploads/{{_form}}/{{_item}}/{{image[0].img}}" alt="{{name}} - {{spec}}">
            </div>
            <div class="education__ancors">
                {{text}}
            </div>
        </div>
        </div>
    </div>
</section>
