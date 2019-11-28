<section id="certperson" class="sm-section" data-name="Виджет сертификатов (не персональных)">
    <!-- tpl/section.certperson.inc.php -->
    <div class="container">
        <div class="our-progress__box flex" data-wb-role="tree" data-wb-item="certificates" data-wb-hide="wb">
            <div class="our-porgress__item flex" data-wb-where='"{{data.content.type}}"!="person" AND "{{data.content.visible}}"="on"'>
                <div class="our-porgress__img-box">

                <a data-fancybox="" href="/uploads/tree/certificates/{{data.content.image[0].img}}" data-fancybox="gallery">
                    <img data-wb-role="thumbnail" data-wb-size="290;191;bkg" contain="false" src="/uploads/tree/certificates/{{data.content.image[0].img}}" data-wb-noimg="/tpl/img/our-progress/diplom.jpg" alt="{{name}}">
                </a>

                </div>
                <div class="our-porgress__text-box">
                    <strong>{{name}}</strong>
                    {{data.content.text}}
                </div>

            </div>
        </div>
    </div>
</section>
