<section id="activity" class="sm-section" data-name="Список мероприятий">
    <div class="container">
        <meta data-wb-role="variable" var="where" data-wb-if='"{{_post.search_name}}" > ""' value=' AND "{{_post.search_name}}" LIKE "{{header}}"' else="">

        <div class="activity__wrap flex"  data-wb-role="foreach" data-wb-form="activities" data-wb-sort="date:d" data-wb-size="9" data-wb-where='active="on" {{_var.where}}' >
            <div class="activity__block">
                <a href="/activity/{{id}}/{{wbFurlGenerate({{header}})}}" class="activity__item">
                    <img data-wb-role="thumbnail" data-wb-size="367;242;src" src="/uploads/activities/{{id}}/{{image[0].img}}" data-wb-noimg="/tpl/img/activity/activ-1.jpg" alt="{{header}}">
                    <div class="activity__text">
                        <p><span>{{date("d.m.Y",strtotime({{date}}))}}</span></p>
                        <p>{{header}}</p>
                    </div>
                </a>
                <p>{{strip_tags(wbGetWords({{text}},20))}}</p>
                <a href="/activity/{{id}}/{{wbFurlGenerate({{header}})}}" class="activity__ancor">Читать далее</a>
            </div>
                            <empty>
                                <div>
                                <h4>Ничего не найдено</h4>
                                    <br>
                                <p><a class="link" href="/activities">Вернуться к списку мероприятий</a></p>
                                </div>
                            </empty>
        </div>
    </div>
</section>
