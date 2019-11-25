<section id="union-pdf" data-name="Блок с программами конференций">
    <!-- tpl/section.unionpdf.inc.php -->
    <div class="container">
        <p>Программа мероприятия</p>
        <div class="union-pdf__wrap flex" >
            <div  data-wb-role="formdata" data-wb-form="{{_form}}" data-wb-item="{{_item}}" data-wb-hide="*">
                <div class="union-pdf__item ac-pdf mb-3" data-wb-where='"{{program[0][img]}}" > ""' >
                    <a href="/uploads/activities/{{id}}/{{program[0][img]}}" target="_blank">
                        Программа мероприятия<br>
                        {{header}}</a>
                </div>
            </div>

            <div data-wb-role="formdata" data-wb-form="pages" data-wb-item="conferences" id="unionpdfplan"  data-wb-where='"{{data.content.type}}" = "section.unionpdf.inc.php"'>
                <div class="union-pdf__item ac-pdf mb-3">
                    <a href="/uploads/pages/{{id}}/{{images.0.img}}">{{images.0.title}}</a>
                </div>
            </div>
        </div>
        <p>Программы прошлых мероприятий</p>
        <div class="union-pdf__wrap flex" data-wb-role="foreach" data-wb-form="activities" data-wb-limit="4" data-wb-sort="date:d" data-wb-where='id != "{{_item}}" AND date <= "{{date}}" AND "{{program[0][img]}}" > ""'>
            <div class="union-pdf__item knd-pdf">
                <a href="/uploads/activities/{{id}}/{{program[0][img]}}" target="_blank">{{header}}</a>
            </div>
        </div>


    </div>
</section>
