<div class="modal fade" id="{{_form}}_{{_mode}}" data-keyboard="false" data-backdrop="true" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">{{header}}</h5>
            </div>
            <div class="modal-body">

                <form autocomplete="off" id="{{_form}}EditForm" data-wb-form="{{_form}}" data-wb-item="{{_item}}" class="form-horizontal" role="form">
                    <input type="hidden" class="form-control" name="id" required>

                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">{{_LANG[datetime]}}</label>
                        <meta data-wb-role="variable" var="date" data-wb-if='date>""' value='{{date("Y-m-d H:i:s",{{strtotime({{date}})}})}}' else='{{date("Y-m-d H:i:s")}}' data-wb-hide="*">
                        <div class="col-sm-4"><input type="datetimepicker" class="form-control" data-format="" name="date" value="{{_var.date}}" placeholder="{{_LANG[datetime]}}" required></div>
                        <meta data-wb-role="variable" var="enddate" data-wb-if='enddate>""' value='{{date("Y-m-d H:i:s",{{strtotime({{enddate}})}})}}' else='{{date("Y-m-d H:i:s")}}' data-wb-hide="*">
                        <label class="col-sm-2 form-control-label">{{_LANG[endtime]}}</label>
                        <div class="col-sm-4"><input type="datetimepicker" class="form-control" data-format="" name="enddate" value="{{_var.enddate}}" placeholder="{{_LANG[endtime]}}" ></div>
                        
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">{{_LANG[visible]}}</label>
                        <div class="col-sm-2"><label class="switch switch-success"><input type="checkbox" name="active" value="on"><span></span></label></div>

                        <label class="col-3 form-control-label">{{_LANG[home]}}</label>
                        <div class="col-2"><label class="switch switch-success"><input type="checkbox" name="home"><span></span></label></div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-7 form-control-label">Клиническая конференция</label>
                        <div class="col-sm-2"><label class="switch switch-success"><input type="checkbox" name="conf"><span></span></label></div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">{{_LANG[header]}}</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="header" placeholder="{{_LANG[header]}}" required></div>
                    </div>

                    <div class="nav-active-primary">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" href="#{{_form}}Descr" data-toggle="tab">{{_LANG[content]}}</a></li>
                            <li class="nav-item"><a class="nav-link" href="#{{_form}}Images" data-toggle="tab">Изображение / Программа</a></li>
                            <li class="nav-item"><a class="nav-link" href="#{{_form}}Seo" data-toggle="tab">{{_LANG[seo]}}</a></li>
                        </ul>
                    </div>
                    <div class="tab-content  p-a m-b-md">
                        <br />
                        <div id="{{_form}}Descr" class="tab-pane fade show active" role="tabpanel">

                            <!--div class="form-group row">
                                <label class="col-sm-3 form-control-label">{{_LANG[short]}}</label>
                                <div class="col-sm-9"><textarea class="form-control" name="descr" placeholder="{{_LANG[short]}}"></textarea></div>
                            </div-->

                            <div class="form-group row">
                                <textarea data-wb-role="module" src="jodit" class="jodit" name="text"></textarea>
                            </div>

                        </div>
                        <div id="{{_form}}Images" class="tab-pane fade" role="tabpanel">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label class="form-control-label">Изображение</label>
                                    <input type="hidden" name="image" data-wb-role="uploader">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-control-label">Программа мероприятия</label>
                                    <input type="hidden" name="program" data-wb-role="uploader" data-wb-ext="pdf">
                                </div>
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
<script type="text/locale" data-wb-role="inlclude" src="news_edit"></script>


<div class="col-6 col-sm-12" data-wb-after="input[name=id]">
    <div class="form-group row" data-wb-before=".nav-active-primary">
        <label class="col-2 form-control-label">ID</label>
        <div class="col-10">
            <input type="text" class="form-control" name="id" placeholder="ID" required>
        </div>
    </div>
</div>

<script>
    $("[href='#{{_form}}Images'").on("click", function() {
        wb_delegates();
        console.log("wb_delegetes");
    });

</script>
