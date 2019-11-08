<section id="navigation" data-name="Путь к странице" data-wb-where='"{{_form}}_{{_item}}" != "pages_home"'>
    <!-- tpl/section.breadcrumbs.inc.php -->
    <div class="container">
        <div class="navigation__wrap">
            <a href="/">Главная</a>
            <a href="/act-news" data-wb-where='"{{_form}}" = "news" OR "{{_form}}" = "activity"'>Новости</a>
            <span data-wb-where='"{{_form}}" = "branches" AND main>""' data-wb-role="formdata" data-wb-form="branches" data-wb-item="{{main}}" data-wb-hide="*">
                <a href="/branches/{{id}}/{{wbFurlGenerate({{name}})}}">{{name}}</a>
            </span>
            
            
            <a href="{{_route.uri}}">{{header}}</a>
        </div>
        <h2>{{header}}</h2>
    </div>
</section>