<section id="schedule-table" class="sm-section sm-section-bottom" data-name="Список работы филиалов по приёму граждан по личным вопросам">
    <div class="container" data-wb-role="foreach" data-wb-form="branches" data-wb-where='active="on"'>
        <div class="schedule-table__item">
            <h3>{{name}}</h3>
            <div class="stacktable-table">
                <table>
                    <tr>
                        <th></th>
                        <th>Адрес приемной</th>
                        <th>Телефон для записи</th>
                        <th>ФИО, должность</th>
                        <th>Время приема</th>
                        <th>Округ</th>
                    </tr>
                    <tbody data-wb-role="foreach" data-wb-from="schedule" data-wb-tpl="false">
                    <tr>
                        <th>{{_ndx}}</th>
                        <td>{{address}}</td>

                        <td><nobr>{{phone}}</nobr></td>

                        <td data-wb-role="formdata" data-wb-form="specialists" data-wb-item="{{boss}}" data-wb-hide="wb">
                            <strong>{{name}}</strong><br>
                            {{spec}}
                        </td>

                        <td>{{worktime}}</td>
                        <td data-wb-role="tree" data-wb-item="area" data-wb-branch="{{%area}}">{{name}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

