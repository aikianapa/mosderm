<section id="diplomas" data-name="Виджет: Дипломы и сертификаты (на синем фоне)"  class="empty-remove-diplomas">
    <!-- tpl/section.diplomas.inc.php -->
    <div class="container">
        <h2>Дипломы, лицензии, сертификаты</h2>
        <div data-wb-where='"{{spec_id}}"=""' data-wb-hide="*">
            <div class="diplomas__wrap flex" data-wb-role="tree" data-wb-item="certificates" data-wb-hide="wb">
                <div class="diplomas__item" data-wb-where='"{{data.content.type}}"="common" AND "{{data.content.visible}}"="on"'>
                    <a data-fancybox="" href="/uploads/tree/certificates/{{data.content.image[0].img}}">
                        <img data-wb-role="thumbnail" data-wb-size="185;265;src" src="/uploads/tree/certificates/{{data.content.image[0].img}}" data-wb-noimg="/tpl/img/our-progress/diplom.jpg" data-wb-hide="wb,data-src" alt="{{name}}">
                    </a>
                    <p>{{data.content.text}}</p>
                </div>
            </div>
        </div>

        <div data-wb-where='"{{spec_id}}">""' data-wb-hide="*">
            <div class="diplomas__wrap flex empty-control-diplomas" data-wb-role="tree" data-wb-item="certificates" data-wb-hide="wb">
                <div class="diplomas__item" data-wb-where='"{{data.content.type}}"="person" AND "{{data.content.visible}}"="on" AND "{{data.content.specialist}}" = "{{%spec_id}}"'>
                    <a data-fancybox="" href="/uploads/tree/certificates/{{data.content.image[0].img}}">
                        <img data-wb-role="thumbnail" data-wb-size="185;265;src" src="/uploads/tree/certificates/{{data.content.image[0].img}}" data-wb-noimg="/tpl/img/our-progress/diplom.jpg" data-wb-hide="wb,data-src" alt="{{name}}">
                    </a>
                    <p>{{data.content.text}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
