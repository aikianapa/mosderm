<section id="contacts" class="sm-section sm-section-bottom" data-name="Контакты">
    <!-- tpl/section.contacts.inc.php -->
    <div class="container">
        <form class="branches__forms inner-pages-forms" method="post">
            <input type="text" name="branch_name" class="name input-control" placeholder="Поиск по названию филиала">
            <div class="branches__forms-bottom flex">
                <div class="branches__forms-list">
                    <input type="text" class="select input-control" placeholder="Выбор из списка">
                    <div class="spec-dropdown">
                        <ul data-wb-role="foreach" data-wb-form="branches" data-wb-tpl="false" data-wb-where='active="on" AND type="branch"' data-wb-sort="name" data-wb-hide="wb">
                            <li><a href="/branches/{{id}}/{{wbFurlGenerate({{name}})}}/"><b>{{name}}</b></a></li>
                            <ul  data-wb-role="foreach" data-wb-form="branches" data-wb-tpl="false" data-wb-where='active="on" AND type="office" AND main="{{id}}"' data-wb-sort="name" data-wb-hide="*">
                                <li><a href="/branches/{{id}}/{{wbFurlGenerate({{name}})}}/">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{name}}</a></li>
                            </ul>
                        </ul>
                    </div>

                </div>
                <div class="branches__forms-btn">
                    <a href="javascript:$('.branches__forms').submit();">Применить</a>
                </div>
            </div>
        </form>

        <div class="contacts-btn contact-us-btn flex">
            <a href="#" onclick="$('#contacts-map').show();$('#ip-table').hide();">
                <div class="contacts-btn__item flex svg-color active map-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21">
                        <g>
                            <g>
                                <path class="svg" fill="#8d98ad" d="M0 4c0-2 2-4 4-4h13c2 0 4 2 4 4v13c0 2-2 4-4 4H4c-2 0-4-2-4-4z" />
                            </g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <path fill="#fff" d="M10.63 11.552A2.711 2.711 0 0 1 7.92 8.845a2.711 2.711 0 0 1 2.708-2.708 2.71 2.71 0 0 1 2.707 2.708 2.71 2.71 0 0 1-2.707 2.707zm0-6.917a4.21 4.21 0 0 0-4.21 4.21c0 .177.014.35.035.523.36 3.288 3.9 7.078 3.9 7.078.064.07.125.114.183.146l.003.001.118.038.118-.038.003-.001a.7.7 0 0 0 .183-.146s3.49-3.796 3.84-7.086c.022-.17.036-.341.036-.516a4.21 4.21 0 0 0-4.21-4.21z" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <p>Показать на карте</p>
                </div>
            </a>
            <a href="#" onclick="$('#contacts-map').hide();$('#ip-table').show();">
                <div class="contacts-btn__item flex svg-color list-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21">
                        <g>
                            <g>
                                <path class="svg" fill="#8d98ad" d="M0 4c0-2 2-4 4-4h13c2 0 4 2 4 4v13c0 2-2 4-4 4H4c-2 0-4-2-4-4z" />
                            </g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <path fill="#fff" d="M9.072 8.59a.482.482 0 0 1-.482.482H5.64a.482.482 0 0 1-.482-.482V5.64c0-.266.216-.482.482-.482h2.95c.265 0 .482.216.482.482zM8.59 4.154H5.64c-.82 0-1.486.667-1.486 1.486v2.95c0 .819.667 1.485 1.486 1.485h2.95c.819 0 1.485-.666 1.485-1.485V5.64c0-.82-.666-1.486-1.485-1.486z" />
                                        </g>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <g>
                                            <path fill="#fff" d="M15.996 8.57a.502.502 0 0 1-.502.502h-2.91a.502.502 0 0 1-.502-.502V5.66c0-.277.225-.502.502-.502h2.91c.277 0 .502.225.502.502zm-.502-4.416h-2.91c-.83 0-1.505.676-1.505 1.506v2.91c0 .83.675 1.505 1.505 1.505h2.91c.83 0 1.506-.675 1.506-1.505V5.66c0-.83-.676-1.506-1.506-1.506z" />
                                        </g>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <g>
                                            <path fill="#fff" d="M9.072 15.514a.482.482 0 0 1-.482.482H5.64a.482.482 0 0 1-.482-.482v-2.95c0-.266.216-.482.482-.482h2.95c.265 0 .482.216.482.482zM8.59 11.08H5.64c-.82 0-1.486.666-1.486 1.485v2.95c0 .82.667 1.486 1.486 1.486h2.95c.819 0 1.485-.667 1.485-1.486v-2.95c0-.819-.666-1.485-1.485-1.485z" />
                                        </g>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <g>
                                            <path fill="#fff" d="M15.996 15.494a.502.502 0 0 1-.502.502h-2.91a.502.502 0 0 1-.502-.502v-2.91c0-.277.225-.502.502-.502h2.91c.277 0 .502.225.502.502zm-.502-4.415h-2.91c-.83 0-1.505.675-1.505 1.505v2.91c0 .83.675 1.506 1.505 1.506h2.91c.83 0 1.506-.676 1.506-1.506v-2.91c0-.83-.676-1.505-1.506-1.505z" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <p>Показать список</p>
                </div>
            </a>


        </div>


    <div id="ip-table" class="sm-section sm-section-bottom">
        <div class="container">
            <meta data-wb-role="include" src="template" data-wb-name="section.table.branches.inc.php">
        </div>
    </div>
    <div id="contacts-map" class="sm-section sm-section-bottom">
        <div class="container map-container">
            <meta data-wb-role="include" src="template" data-wb-name="section.widget.contactsmap.inc.php">
        </div>
    </div>

    </div>



</section>

<script src="js/stacktable.js"  data-wb-append="body"></script>
<script data-wb-append="body">
    (function() {

        $(".schedule-table__item tbody").each(function(){
           if ($(this).find("tr").length == 0) {
               $(this).parents(".schedule-table__item").remove();
           }
        });

    })();

</script>
<link rel="stylesheet" href="css/stacktable.css" data-wb-append="head">
