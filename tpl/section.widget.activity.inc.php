<section id="activity" data-name="Виджет мероприятий">
    <!-- tpl/section.widget.activity.inc.php -->
    <div class="container">
        <h2>Мероприятия <a href="/activities">Все мероприятия</a></h2>
        <div class="activity__wrap flex" data-wb-role="foreach" data-wb-form="activities" data-wb-tpl="false" data-wb-sort="date:d" data-wb-limit="3" data-wb-where='active="on" AND home="on"' data-wb-hide="wb">
            <a href="/activity/{{id}}/{{wbFurlGenerate({{header}})}}" class="activity__item">
                <img data-wb-role="thumbnail" data-wb-size="367;242;src" src="/uploads/activities/{{id}}/{{image[0].img}}" data-wb-noimg="/tpl/img/activity/activ-1.jpg" data-wb-hide="wb,data-src" alt="{{header}}">
                <div class="activity__text">
                    <p><span>{{date("d.m.Y",strtotime({{date}}))}}</span></p>
                    <p>{{header}}</p>
                </div>
            </a>
        </div>
    </div>
</section>
