<section id="partners" data-name="Список сайтов партнёров">
    <!-- tpl/section.list.partners.inc.php -->
    <div class="container">
        <div class="partners__wrap" data-wb-role="tree" data-wb-item="partners" data-wb-hide="wb">
            <div class="partners__item flex">
                <div class="partners__ancor">
                    <a href="{{data.link}}" target="_blank">
                        <img data-wb-role="thumbnail" data-wb-size="323;187" src="/uploads/tree/partners/{{id}}/{{data.image[0].img}}" data-wb-noimg="/tpl/img/progress/partners.jpg"/>
                    </a>
                </div>
                <div class="partners__text">
                    <span>{{name}}</span>
                    <p>{{data.text}}</p>
                </div>
            </div>
        </div>
    </div>

</section>
