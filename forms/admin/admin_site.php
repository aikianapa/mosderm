<div id="__structure_prop">
<div class="form-group row">
    <label class="col-sm-3 form-control-label">Страница</label>
    <div class="col-sm-7">
    <select data-wb-role="foreach" data-wb-form="pages" name="item" data-wb-tpl="false" data-wb-sort="id:a header:a" placeholder="Выберите страницу..." class="form-control select2" id="__select_page">
        <option value="{{id}}">[{{id}}] {{header}}</option>
    </select>
    </div>
    <button class="col-2 btn btn-default" data-wb-ajax="/form/edit/pages/home" data-wb-append="body"  id="__edit_button">
        <i class="fa fa-pencil"></i>&nbsp;Редакт.
    </button>

</div>

  <div class="form-group row">
    <label class="col-sm-3 form-control-label">Отображать</label>
    <div class="col-sm-2"><label class="switch switch-success"><input type="checkbox" name="active" value="on"><span></span></label></div>
	</div>
</div>
<script>
$("#__select_page").off("change");
$("#__select_page").on("change",function(){
    if ($(this).val() == "") {
        $("#__edit_button").removeAttr("data-wb-ajax").prop("disabled",true);
        var create = $(this).parents(".tree-edit").find("form",0).find("[name='data-id']").val();
        if (create > "") {
            $("#__edit_button").attr("data-wb-ajax","/form/edit/pages/"+create).prop("disabled",false);
        }
    } else {
        $("#__edit_button").attr("data-wb-ajax","/form/edit/pages/"+$(this).val()).prop("disabled",false);
    }
});
    
$("#__structure_prop").parents(".tree-edit").find("form",0).find("[name='data-id']").off("change");
$("#__structure_prop").parents(".tree-edit").find("form",0).find("[name='data-id']").on("change",function(){
    $("#__select_page").trigger("change");
});
    
$(document).off("pages_after_formsave");
$(document).on("pages_after_formsave",function(event,form,item,data){
    if (!$("#__structure_prop #__select_page > option[value='"+item+"']").length) {
        $("#__structure_prop #__select_page").append("<option></option>");
        $("#__structure_prop #__select_page > option:last-child").attr("value",item).html("["+item+"]");
    }
    $("#__structure_prop #__select_page > option[value='"+item+"']").attr("selected",true);
    $("#__structure_prop #__select_page").trigger('change.select2');
    return false;
});
    
$("#__select_page").trigger("change");
</script>