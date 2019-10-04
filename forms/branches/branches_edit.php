<div class="modal fade" id="{{_form}}_{{_mode}}" data-keyboard="false" data-backdrop="true" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
	<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title">Филиал</h5>
      </div>
      <div class="modal-body">

<form id="{{_form}}EditForm" data-wb-form="{{_form}}" data-wb-item="{{_item}}"  class="form-horizontal" role="form">

<input type="hidden" class="form-control" name="id">

	<div class="form-group row">
	  <label class="col-sm-3 form-control-label">Наименование</label>
	   <div class="col-sm-9"><input type="text" class="form-control" name="name" placeholder="Наименование"></div>
	</div>
    
	<div class="form-group row">
	  <label class="col-sm-3 form-control-label">Тип</label>
	   <div class="col-sm-9">
           <select class="form-control" name="type" placeholder="Тип">
               <option value="branch">Филиал</option>
               <option value="office">Отделение</option>
           </select>
        </div>
	</div>

<div class="nav-active-primary">
<ul class="nav nav-tabs" role="tablist">
	<li class="nav-item"><a class="nav-link active" href="#{{_form}}Descr" data-toggle="tab">Свойства</a></li>
	<li class="nav-item"><a class="nav-link" href="#{{_form}}Text" data-toggle="tab" >Описание</a></li>
	<li class="nav-item"><a class="nav-link" href="#{{_form}}Schedule" data-toggle="tab" >Расписание</a></li>
	<li class="nav-item"><a class="nav-link" href="#{{_form}}Images" data-toggle="tab">Изображения</a></li>
    <li class="nav-item"><a class="nav-link" href="#{{_form}}seo" data-toggle="tab">СЕО</a></li>
</ul>
</div>
<div class="tab-content  p-a m-b-md">
<br />
<div id="{{_form}}Descr" class="tab-pane fade show active" role="tabpanel">

	<div class="form-group row">
	  <label class="col-sm-3 form-control-label">Номер на карте</label>
	   <div class="col-sm-9"><input type="text" class="form-control" name="mapnum" placeholder="Номер на карте"></div>
	</div>

	<div class="form-group row">
	  <label class="col-sm-3 form-control-label">Адрес филиала</label>
	   <div class="col-sm-9"><input type="text" class="form-control" name="address" placeholder="Адрес филиала"></div>
	</div>
    
	<div class="form-group row">
	  <label class="col-sm-3 form-control-label">Время работы</label>
	   <div class="col-sm-9"><input type="text" class="form-control" name="worktime" placeholder="Время работы"></div>
	</div>
    
	<div class="form-group row">
	  <label class="col-sm-3 form-control-label">Как добраться</label>
	   <div class="col-sm-9">
           <textarea class="w-100" rows="auto" name="howto" placeholder="Как добраться"></textarea>
        </div>
	</div>

	<div class="form-group row">
	  <label class="col-sm-3 form-control-label">Заведующий</label>
	   <div class="col-sm-9">
		   <select class="form-control select2" name="boss" placeholder="Заведующий отделением" data-wb-role="foreach" data-wb-form="specialists" data-wb-tpl="false" data-wb-sort="name">
				<option value="{{id}}">{{name}}</option>
		   </select>
		</div>
	</div>
    
    <div class="form-group row">
        <div class="col-sm-3">
            <label class="form-control-label">Единый телефон</label>
            <input type="phone" class="form-control" name="phone" placeholder="Единый телефон">
        </div>
        <div class="col-sm-3">
            <label class="form-control-label">Факс</label>
            <input type="phone" class="form-control" name="fax" placeholder="Факс">
        </div>
        <div class="col-sm-3">
            <label class="form-control-label">Администратор</label>
            <input type="phone" class="form-control" name="phoneadm" placeholder="Телефон администратора">
        </div>
        <div class="col-sm-3">
            <label class="form-control-label">Эл.почта</label>
            <input type="email" class="form-control" name="email" placeholder="Электронная почта">
        </div>
        
    </div>

  <div class="form-group row">
    <label class="col-sm-3 form-control-label">Отображать</label>
    <div class="col-sm-2"><label class="switch switch-success"><input type="checkbox" name="active"><span></span></label></div>
	</div>
</div>
<div id="{{_form}}Schedule" class="tab-pane fade" role="tabpanel">
<p>Расписание приёма граждан по личным вопросам</p>
    <div data-wb-role="multiinput" name="schedule">
        <div class="col-4">
            <label class="form-control-label">Адрес приёмной</label>
            <textarea class="summernote" name="address" data-height="90" 
            data-toolbar="[['style', ['bold', 'italic', 'codeview', 'clear']]]"></textarea>
        </div>
        <div class="col-4">
            <label class="form-control-label">Время приёма</label>
            <textarea class="summernote" name="address" data-height="90" 
            data-toolbar="[['style', ['bold', 'italic', 'codeview', 'clear']]]"></textarea>
        </div>
        <div class="col mt-4">
            <div class="row">
                <div class="col">
                    <label class="form-control-label">Телефон для записи</label>
                    <input type="phone" class="form-control" name="phone" placeholder="Телефон для записи">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label class="form-control-label">Кто принимает</label>
                   <select class="form-control select2" name="boss" placeholder="Кто принимает..." data-wb-role="foreach" data-wb-form="specialists" data-wb-where='branch = "{{_item}}"' data-wb-tpl="false" data-wb-sort="name">
                        <option value="{{id}}">{{name}}</option>
                   </select>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div id="{{_form}}Text" class="tab-pane fade" data-wb-role="include" src="editor" role="tabpanel"></div>
<div id="{{_form}}Images" class="tab-pane fade" data-wb-role="include" src="uploader" role="tabpanel"></div>
<div id="{{_form}}seo" class="tab-pane fade" data-wb-role="include" src="seo" role="tabpanel"></div>
</div>
</form>


    </div>
            <div class="modal-footer" data-wb-role="include" src="form" data-wb-name="common_close_save" data-wb-hide="wb"></div>

		</div>
</div>
</div>

