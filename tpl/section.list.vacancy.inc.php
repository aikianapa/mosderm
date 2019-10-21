<section id="vacancy-content" class="sm-section sm-section-bottom" data-name="Список вакансий">
    <!-- tpl/section.list.vacancy.inc.php -->
    <div class="container">
        <h3>У нас открыты следующие вакансии:</h3>
        <div class="vacancy-content__box flex" data-wb-role="foreach" data-wb-form="vacancy" data-wb-tpl="false" >
            <div class="vacancy-content__item">
                <strong>{{name}}</strong>
                <p>{{descr}}</p>
                <a href="/vacancy/{{id}}/{{wbFurlGenerate({{name}})}}">Подробнее</a>
            </div>
        </div>
    </div>
</section>