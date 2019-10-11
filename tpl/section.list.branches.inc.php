<section id="branches-top" class="sm-section sm-section-bottom" data-name="Список филиалов">
    <div class="container">
        <p>{{_sett.fullname}}</p>
        <form class="branches__forms" method="post">
            <input type="text" name="branch_name" class="input-control" placeholder="Поиск по названию филиала">
            <div class="branches__forms-bottom flex">
                <div class="branches__forms-list">
                    <input type="text" class="input-control" placeholder="Выбор из списка">
                    <div class="spec-dropdown">
                        <ul data-wb-role="foreach" data-wb-form="branches" data-wb-tpl="false" data-wb-where='active="on"' data-wb-sort="name" data-wb-hide="wb">
                            <a href="/branches/{{id}}/{{wbFurlGenerate({{name}})}}/">{{name}}</a>
                        </ul>
                    </div>

                </div>
                <div class="branches__forms-btn">
                    <a href="javascript:$('.branches__forms').submit();">Применить</a>
                </div>

            </div>
        </form>
        <meta data-wb-role="variable" var="where" value='active = "on" AND type="branch" '>
        <meta data-wb-role="variable" var="where" data-wb-where='"{{_post.branch_name}}" > ""' value='{{_var.where}} AND name LIKE "{{_post.branch_name}}"'>
        <div class="branches__wrap" data-wb-role="foreach" data-wb-form="branches" data-wb-size="12" data-wb-where='{{_var.where}}'>
            <div class="branches__item flex">
                <div class="branches__img">
                    <a href="/branches/{{id}}/{{wbFurlGenerate({{name}})}}"></a>
                    <img data-wb-role="thumbnail" data-wb-size="320;187;src" src="{{_image}}" data-wb-noimg="/tpl/img/branches/branches.jpg"/>
                </div>
                <div class="branches__info">
                    <a href="/branches/{{id}}/{{wbFurlGenerate({{name}})}}"><strong>{{name}}</strong></a>
                    <a href="/branches/{{id}}/{{wbFurlGenerate({{name}})}}" class="branches__address">{{address}}</a>
                    <p>{{wbGetWords(strip_tags_smart({{text}}),60)}}</p>
                </div>
            </div>
        </div>

    </div>
</section>
