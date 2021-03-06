<section class="sm-section" data-name="Таблица филиалов и контакты">
    <!-- tpl/section.table.branches.inc.php -->
<div class="container">
    <meta data-wb-role="variable" var="where" value='AND active = "on"'>
    <meta data-wb-role="variable" var="where" data-wb-where='"{{_post.branch_name}}" > ""' value='{{_var.where}} AND name LIKE "{{_post.branch_name}}"'>


            <div class="schedule-table__item">
                <h3>Филиалы</h3>
                <div class="stacktable-table">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Название центра</th>
                                <th>Телефон для записи</th>
                                <th>Адрес</th>
                                <th>Режим работы</th>
                                <th>Онлайн-запись</th>
                            </tr>
                        </thead>
                        <tbody data-wb-role="foreach" data-wb-form="branches" data-wb-sort="mapnum" data-wb-tpl="false" data-wb-size="false" data-wb-where='active="on" AND type = "branch" {{_var.where}}' data-wb-hide="wb">
                            <tr data-wb-where='mapnum != "17"'>
                                <td>{{mapnum}}</td>
                                <td>{{name}}</td>
                                <td>
                                    <nobr>{{phone}}</nobr>
                                </td>
                                <td>{{address}}<br>
                                    <a href="/branches/{{id}}/{{wbFurlGenerate({{name}})}}/">Показать на карте</a></td>
                                <td>{{worktime}}
                                </td>
                                <td><a href="/branches/{{id}}/order/">Онлайн-запись</a></td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
</div>
</section>
