<div class="modal fade" id="{{_GET[form]}}_{{_GET[mode]}}" data-keyboard="false" data-backdrop="true" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Справка</h5>
            </div>
            <div class="modal-body">

                <form id="{{_form}}EditForm" data-wb-form="{{_form}}" data-wb-item="{{_item}}" class="form-horizontal"
                    role="form" autocomplete="off">

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Ф.И.О.</label>
                        <div class="col-sm-9"><input type="text" class="form-control" name="fullname"
                                placeholder="Ф.И.О." required></div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Дата рождения</label>
                        <div class="col-sm-9"><input type="datepicker" class="form-control" name="birthdate"
                                placeholder="Дата рождения" required></div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Пол</label>
                        <div class="col-sm-9">
							<select name="gender" class="form-control"  required>
							<option value="M">Male</option>
							<option value="F">Female</option>
							</select>
						</div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Диагноз</label>
                        <div class="col-sm-9"><input type="text" class="form-control" name="diagnose"
                                placeholder="Диагноз" required></div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Дата <small>забора/исследования/доставки</small></label>
                        <div class="col-sm-9"><input type="datepicker" class="form-control" name="date"
                                placeholder="Дата забора/исследования/доставки" required></div>
                    </div>

                    <div class="form-group row">
						<label class="col-sm-3 form-control-label">Результат</label>
					<div class="col-sm-9">
					<div class="form-group row">
					<div class="col-6">
                        <label class="col-sm-3 form-control-label">IgM</label>
                        <div class="col-sm-9"><input type="number" class="form-control" name="igm"
                                placeholder="IgM"></div>
					</div>
					<div class="col-6">
                        <label class="col-sm-3 form-control-label">IgG</label>
                        <div class="col-sm-9"><input type="number" class="form-control" name="igg"
                                placeholder="IgG"></div>
					</div>
					</div>
					</div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Результат ПЦР</label>
                        <div class="col-sm-9">
							<select name="result" class="form-control" required >
							<option value="Y">ОБНАРУЖЕНО</option>
							<option value="N">НЕ ОБНАРУЖЕНО</option>
							</select>
						</div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Врач</label>
                        <div class="col-sm-9"><input type="text" class="form-control" name="doctor"
                                placeholder="Врач" required></div>
                    </div>
                    <div class="d-none">
						<div class="print-form"></div>
					</div>
                </form>
            </div>

            <div class="modal-footer" data-wb-role="include" src="form" data-wb-name="common_close_save"
                data-wb-hide="wb">
				</div>
			<div data-wb-append='.modal-footer'>
				<button id="{{_form}}EditFormPrint" type="button" class="btn btn-secondary dropdown-toggle" 
				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fa fa-print"></i> Печать
				</button>
				<div class="dropdown-menu" aria-labelledby="{{_form}}EditFormPrint">
				  <a class="dropdown-item btn-print" href="#" data="type=igm&lang=rus">ИГМ (рус)</a>
				  <a class="dropdown-item btn-print" href="#" data="type=pcr&lang=rus">ПЦР (рус)</a>
				  <a class="dropdown-item btn-print" href="#" data="type=igm&lang=eng">ИГМ (eng)</a>
				  <a class="dropdown-item btn-print" href="#" data="type=pcr&lang=eng">ПЦР (eng)</a>
				</div>
			</div>
        </div>
    </div>
</div>

<script>
$('#{{_form}}_{{_mode}} .btn-print').off('click');
$('#{{_form}}_{{_mode}} .btn-print').on('click',function(){
	$(this).data('print', true);
	$('#{{_form}}_{{_mode}} .btn-print').removeClass('clicked');
	$(this).addClass('clicked');
	$('#{{_form}}_{{_mode}} .btn[data-wb-formsave]').trigger('click');
})

$(document).off('spravki_after_formsave');
$(document).on('spravki_after_formsave',function(ev){
	let print = $('#{{_form}}_{{_mode}} .btn-print.clicked').data('print');
	if (print !== undefined && print == true) {
		let item = $('#{{_form}}EditForm').attr('data-wb-item');
		let params = {};
		parse_str($('#{{_form}}_{{_mode}} .btn-print.clicked').attr('data'),params);
		$.post('/spravki/print/'+item,params,function(data){
			$('#{{_form}}EditForm .print-form').html('');
			$('#{{_form}}EditForm .print-form').append(data);
			$('#{{_form}}EditForm .print-form').print();	
		})
	}
	$('#{{_form}}_{{_mode}} .btn-print.clicked').data('print',null);
});

$('#{{_form}}_{{_mode}}').find('[name=igm],[name=igg]').off('change');
$('#{{_form}}_{{_mode}}').find('[name=igm],[name=igg]').on('change',function(){
	if ($('#{{_form}}_{{_mode}} [name=igm]').val()*1 >= 2
	|| $('#{{_form}}_{{_mode}} [name=igg]').val()*1 >= 10) {
		$('#{{_form}}_{{_mode}} [name=result]').val('Y');
	} else {
		$('#{{_form}}_{{_mode}} [name=result]').val('N');
	}
});

</script>
