<section id="branches-top" class="sm-section sm-section-bottom" data-name="Список филиалов">
    <div class="container">
        <p>{{_sett.fullname}}</p>
        <div class="branches__forms">
            <input type="text" class="input-control" placeholder="Поиск по названию филиала">
            <div class="branches__forms-bottom flex">
                <div class="branches__forms-list">
                    <input type="text" class="input-control" placeholder="Выбор из списка">
                    <div class="spec-dropdown">
                        <ul>
                            <li><a href="#">Пункт</a></li>
                            <li><a href="#">Пункт</a></li>
                            <li><a href="#">Пункт</a></li>
                            <li><a href="#">Пункт</a></li>
                            <li><a href="#">Пункт</a></li>
                            <li><a href="#">Пункт</a></li>
                        </ul>
                    </div>

                </div>
                <div class="branches__forms-btn">
                    <a href="#">Применить</a>
                </div>

            </div>
        </div>
        <div class="branches__wrap" data-wb-role="foreach" data-wb-form="branches" data-wb-size="12" data-wb-where='active="on"'>
            <div class="branches__item flex">
                <div class="branches__img">
                    <a href="/branches/{{id}}/{{wbFurlGenerate({{name}})}}"></a>
                    <img src="img/branches/branches.jpg"/>
                </div>
                <div class="branches__info">
                    <a href="/branches/{{id}}/{{wbFurlGenerate({{name}})}}"><strong>{{name}}</strong></a>
                    <a href="/branches/{{id}}/{{wbFurlGenerate({{name}})}}" class="branches__address">{{address}}</a>
                    <p>{{strip_tags(wbGetWords({{text}},60))}}</p>

                </div>
            </div>
        </div>

    </div>
</section>
