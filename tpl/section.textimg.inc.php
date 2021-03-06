<section id="news-card" class="sm-section sm-section-bottom" data-name="Блок контента редактор и изображение">
    <!-- tpl/section.textimg.inc.php -->
    <div class="container">

            <div class="history__box flex" data-wb-where='"{{data.content.position}}" = "right"'>
                <div class="history__text history__block-1 text">
                    {{data.content.text->clearStyles()}}
                </div>
                <div class="history__img">
                    <img src="/uploads/{{_form}}/{{_item}}/{{data.content.image[0].img}}" data-wb-noimg="/tpl/img/news/news-img.png" alt="">
                </div>
            </div>

            <div class="history__box"  data-wb-where='"{{data.content.position}}" = "top"'>
                <div class="history__long-img mb-5">
                    <img src="/uploads/{{_form}}/{{_item}}/{{data.content.image[0].img}}" data-wb-noimg="/tpl/img/news/news-img.png" alt="">
                </div>
                <div class="history__text text">
                    {{data.content.text->clearStyles()}}
                </div>
            </div>
        
            <div class="history__box"  data-wb-where='"{{data.content.position}}" = "bottom"'>
                <div class="history__text mb-5 text">
                    {{data.content.text->clearStyles()}}
                </div>
                <div class="history__long-img">
                    <img src="/uploads/{{_form}}/{{_item}}/{{data.content.image[0].img}}" data-wb-noimg="/tpl/img/news/news-img.png" alt="">
                </div>
            </div>

            <div class="history__box flex" data-wb-where='"{{data.content.position}}" = "left"'>
                <div class="history__img history__block-1">
                    <img src="/uploads/{{_form}}/{{_item}}/{{data.content.image[0].img}}" data-wb-noimg="/tpl/img/news/news-img.png" alt="">
                </div>
                <div class="history__text text">
                    {{data.content.text->clearStyles()}}
                </div>
            </div>
            
        </div>

</section>