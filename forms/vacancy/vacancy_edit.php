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
                    <input type="hidden" class="form-control" name="id">
                            <div class="form-group row">
                                <label class="col-sm-6 form-control-label">Отображать</label>
                                <div class="col-sm-6"><label class="switch switch-success"><input type="checkbox" value="on" name="active"><span></span></label></div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Наименование вакансии</label>
                                <div class="col-sm-9"><input type="text" placeholder="Наименование вакансии" name="name" class="form-control" required></div>
                            </div>

                            
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Филиал</label>
                                <div class="col-sm-9">
                                <select class="form-control select-type" name="branch" placeholder="Филиал" data-wb-role="foreach" data-wb-tpl="false" data-wb-form="branches" data-wb-where='active = "on"'>
                                    <option value="{{id}}">{{name}}</option>
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-12 form-control-label">Короткое описание</label>
                              <div class="col-12"><textarea class="w-100" placeholder="Короткое описание" rows="auto" name="descr"></textarea></div>
                            </div>

                            <div class="form-group row v-textonly">
                                <label class="col-12 form-control-label">Полное описание</label>
                                <div class="col-12"><textarea data-wb-role="module" src="summernote" class="summernote" name="text"></textarea></div>
                            </div>
                </form>
            </div>
            <div class="modal-footer" data-wb-role="include" src="form" data-wb-name="common_close_save" data-wb-hide="wb">
            </div>
        </div>
    </div>
</div>

