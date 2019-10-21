    <section id="our-services" data-name="Виджет с услугами платные/бесплатные">
        <!-- tpl/section.widget.services.inc.php -->
        <div class="container">
            <h2>{{data.content.header}}</h2>
            <div class="our-services__wrap flex mb-3" data-wb-role="foreach" data-wb-from="data.content.slide" data-wb-tpl="false" data-wb-hide="wb">
                <a href="{{btn_link}}" class="our-services__item" target="{{btn_target}}">
                    <img data-wb-role="thumbnail" data-wb-size="554;260;src" src="/uploads/{{_form}}/{{_item}}/{{image[0].img}}" data-noimg="/tpl/img/our-services/os-bg1.jpg" alt="{{header}}" data-wb-hide="wb,data-src" >
                    <div class="our-services__text">
                        <h3>{{header}}</h3>
                        <p>{{text}}</p>
                    </div>
                </a>
            </div>
        </div>
    </section>