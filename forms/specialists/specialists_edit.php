<div class="modal fade" id="{{_GET[form]}}_{{_GET[mode]}}" data-keyboard="false" data-backdrop="true" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">{{name}}</h5>
            </div>
            <div class="modal-body">
                <form id="{{_GET[form]}}EditForm" data-wb-form="{{_GET[form]}}" data-wb-item="{{_GET[item]}}" class="form-horizontal" role="form">

<div class="nav-active-primary">
<ul class="nav nav-tabs" role="tablist">
	<li class="nav-item"><a class="nav-link active" href="#{{_form}}Descr" data-toggle="tab">Основное</a></li>
	<li class="nav-item"><a class="nav-link" href="#{{_form}}Union" data-toggle="tab">Профсоюз</a></li>
  <li class="nav-item"><a class="nav-link" href="#{{_form}}Seo" data-toggle="tab">СЕО</a></li>
</ul>
</div>
<div class="tab-content  p-a m-b-md">
    <br />
    <div id="{{_form}}Descr" class="tab-pane fade show active" role="tabpanel">
                    <input type="hidden" class="form-control" name="id">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label class="col-sm-6 form-control-label">Отображать</label>
                                <div class="col-sm-6"><label class="switch switch-success"><input type="checkbox" value="on" name="active"><span></span></label></div>
                            </div>
                            <input type="hidden" name="image" data-wb-path="/uploads/{{_form}}/{{_item}}" data-wb-role="uploader" >
                        </div>
                        <div class="col">

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Полное имя</label>
                                <div class="col-sm-9"><input type="text" placeholder="Ф.И.О." name="name" class="form-control" required></div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Должность</label>
                                <div class="col-sm-9"><input type="text" placeholder="Должность" name="spec" class="form-control" required></div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Описание</label>
                              <div class="col-sm-9"><textarea class="w-100" placeholder="Короткое описание" rows="auto" name="descr"></textarea></div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Филиал</label>
                                <div class="col-sm-9">
                                <select class="form-control select-type control-value-branch" name="branch" placeholder="Филиал" data-wb-role="foreach" data-wb-tpl="false" data-wb-form="branches" data-wb-where='active = "on" AND type="branch"'>
                                    <option value="{{id}}">{{name}}</option>
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Отделение</label>
                                <div class="col-sm-9">
                                <select class="form-control select-type control-update-branch" data-wb-update="/ajax/branches/offices/" name="office" placeholder="Отделение" data-wb-role="foreach" data-wb-form="branches" data-wb-where='active = "on" AND type="office"'>
                                    <option value="{{id}}">{{name}}</option>
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 form-control-label">В платное отделение</label>
                                <div class="col-sm-2"><label class="switch switch-success"><input type="checkbox" name="commerce"><span></span></label></div>

                                <label class="col-sm-3 form-control-label">В виджет</label>
                                <div class="col-sm-2"><label class="switch switch-success"><input type="checkbox" name="widget"><span></span></label></div>
                            </div>
                        </div>

                    </div>
                    <div class="form-group row v-textonly">
                        <div class="col-12"><textarea data-wb-role="module" src="summernote" class="summernote" name="text"></textarea></div>
                    </div>
    </div>
    <div id="{{_form}}Union" class="tab-pane fade" role="tabpanel">
        <div class="form-group row">
            <label class="col-sm-3 form-control-label">В профсоюзе</label>
            <div class="col-sm-2"><label class="switch switch-success"><input type="checkbox" name="union"><span></span></label></div>
            <label class="col-sm-3 form-control-label">Виджет профсоюза</label>
            <div class="col-sm-2"><label class="switch switch-success"><input type="checkbox" name="uniwidget"><span></span></label></div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Телефон</label>
            <div class="col-sm-9"><input type="phone" data-wb-mask="+7 (999) 999-99-99" placeholder="Телефон" name="phone" class="form-control"></div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Часы приема по личным вопросам</label>
            <div class="col-sm-9"><input type="text" placeholder="Часы приема по личным вопросам" name="worktime" class="form-control"></div>
        </div>

    </div>
    <div id="{{_form}}Seo" class="tab-pane fade" data-wb-role="include" src="seo" role="tabpanel"></div>
</div>

                </form>
            </div>
            <div class="modal-footer" data-wb-role="include" src="form" data-wb-name="common_close_save" data-wb-hide="wb">
            </div>
        </div>
    </div>
</div>
    <script type="text/locale" data-wb-role="include" src="products_common"></script>
    <script>
        if ($("#{{_form}}EditForm [name=branch]").val() == "") {
            var url = $(".content-box").data("wb_ajax");
            url = explode("/", url);
            $("#{{_form}}EditForm [name=branch]").val(url[4]);
        }
    </script>
