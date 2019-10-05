<div class="container">
    <div class="schedule-table__item">
                <h3>Отделы центра</h3>
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
                        <tbody data-wb-role="foreach" data-wb-form="branches" data-wb-tpl="false" data-wb-size="false" data-wb-where='type = "office"' data-wb-hide="wb">
                            <tr>
                                <td>{{_ndx}}</td>
                                <td>{{name}}</td>
                                <td>
                                    <nobr>{{phone}}</nobr>
                                </td>
                                <td>{{address}}<br>
                                    <a href="#">Показать на карте</a></td>
                                <td>{{worktime}}
                                </td>
                                <td><a href="/branches/{{id}}/order/">Онлайн-запись</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


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
                        <tbody data-wb-role="foreach" data-wb-form="branches" data-wb-tpl="false" data-wb-size="false" data-wb-where='type = "branch"' data-wb-hide="wb">
                            <tr>
                                <td>{{_ndx}}</td>
                                <td>{{name}}</td>
                                <td>
                                    <nobr>{{phone}}</nobr>
                                </td>
                                <td>{{address}}<br>
                                    <a href="#">Показать на карте</a></td>
                                <td>{{worktime}}
                                </td>
                                <td><a href="/branches/{{id}}/order/">Онлайн-запись</a></td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
<meta data-name="Таблица филиалов и контакты">
</div>