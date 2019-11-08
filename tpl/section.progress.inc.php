<section id="progress" data-name="Виджет с дипломами (малый)">
    <!-- tpl/section.progress.inc.php -->
    <div class="container">
        <div class="progress__wrap flex">
            <div class="progress__text">
                <h2>Достижения <a href="/progress">Все достижения</a></h2>
                <p data-wb-where='"{{data.content.text}}">""'>{{data.content.text}}</p>
                <p class="default" data-wb-where='"{{data.content.text}}"=""'>В последние годы работа главных врачей КВД сводилась к осуществлению хозяйственных и финансово-экономических функций, что в нынешних условиях требует постоянного повышения знаний в соответствующих областях, не связанных с базовым медицинским образованием.</p>
            </div>
            <div class="progress__slider" data-wb-role="tree" data-wb-item="certificates" data-wb-hide="wb">
                <div class="progress__slider-wrap" data-wb-where='"{{data.content.type}}"="common" AND "{{data.content.visible}}"="on"' data-wb-hide="wb">
                    <div class="progress__slider-item">
                        <a data-fancybox="gallery" href="/uploads/tree/certificates/{{data.content.image[0].img}}">
                            <img data-wb-role="thumbnail" data-wb-size="185;265;src" src="/uploads/tree/certificates/{{data.content.image[0].img}}" data-wb-noimg="/tpl/img/our-progress/diplom.jpg" alt="{{name}}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>