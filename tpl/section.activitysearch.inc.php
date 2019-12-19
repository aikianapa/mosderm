<div id="activity-search" class="sm-section">
    <!-- tpl/section.activitysearch.inc.php -->
    <meta  data-name="Поиск по мероприятиям">
    <div class="container">
        <form class="activity__search flex" action="{{_route.uri}}" method="post">
            <input type="text" name="search_name" class="input-control activity__control" placeholder="Поиск по названию">
            <button type="submit" class="btn">Применить</button>
        </form>
    </div>
</div>
