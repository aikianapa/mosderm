<div class="modal fade" id="{{_GET[form]}}_{{_GET[mode]}}" data-keyboard="false" data-backdrop="true" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title">{{header}}</h5>
      </div>
      <div class="modal-body">

<form id="{{_GET[form]}}EditForm" data-wb-form="{{_GET[form]}}" data-wb-item="{{_GET[item]}}"  class="form-horizontal" role="form">

<input type="hidden" class="form-control" name="id">


	<div class="form-group row">
	  <label class="col-sm-3 form-control-label">{{_LANG[name]}}</label>
	   <div class="col-sm-9"><input type="text" class="form-control" name="name" placeholder="{{_LANG[name]}}" required></div>
	</div>

	<div class="form-group row">
	  <label class="col-sm-3 form-control-label">{{_LANG[category]}}</label>
	   <div class="col-sm-9">
		   <select class="form-control" name="category" placeholder="{{_LANG[category]}}" data-wb-role="tree" data-wb-item="products_category">
				<option value="{{id}}">{{name}}</option>
		   </select>
		</div>
	</div>
    
	<div class="form-group row">
	  <label class="col-sm-3 form-control-label">{{_LANG[articul]}}</label>
	   <div class="col-sm-3"><input type="text" class="form-control" name="articul" placeholder="{{_LANG[articul]}}"></div>
		<label class="col-sm-3 form-control-label">{{_LANG[visible]}}</label>
		<div class="col-sm-3"><label class="switch switch-success"><input type="checkbox" name="active"><span></span></label></div>
	</div>

	<div class="form-group row">
	  <label class="col-sm-3 form-control-label">{{_LANG[price]}}</label>
	   <div class="col-sm-3"><input type="number" class="form-control" name="price" min="1" placeholder="{{_LANG[price]}}"></div>
    </div>
    
    <div class="form-group row">
        <div class="col-12">
	       <label class="form-control-label">Филиалы оказывающие услугу</label>
		   <select class="form-control select2" name="branches[]" multiple
                   data-wb-role="foreach" data-wb-form="branches" data-wb-where='active="on"' data-wb-sort="name">
				<option value="{{id}}">{{name}}</option>
		   </select>
		</div>
	</div>
    
    <div data-wb-role="tree" name="blocks" data-wb-dict="page_content"></div>
    
</form>


    </div>
		  <div class="modal-footer" data-wb-role="include" src="form" data-wb-name="common_close_save" data-wb-hide="wb">

		</div>
</div>
</div>
<script type="text/locale" data-wb-role="include" src="products_common"></script>
<script>
        if ($("#{{_GET[form]}}EditForm [name=category]").val() == "")  {
                var url=$(".content-box").data("wb_ajax");
                url=explode("/",url);
                $("#{{_GET[form]}}EditForm [name=category]").val(url[4]);
        }
</script>
