<div class="form-group row v-all">
    <label class="col-sm-3 form-control-label">Отделения / Персональный</label>
    <div class="col-sm-9">
    <select class="form-control select-type" name="type" placeholder="Тип блока">
        <option value="common">Отделения</option>
        <option value="person">Персональный</option>
    </select>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
      <input type="hidden" name="image" data-wb-path="/uploads/{{_form}}/{{_item}}" data-wb-role="uploader" >
    </div>
    <div class="col-sm-9">
        <div class="row">
            <label class="col-12 form-control-label">Текст</label>
            <div class="col-12">
                <textarea class="w-100" rows="auto" name="text"></textarea>
            </div>
        </div>
        
        <div class="form-group row v-person">
                <label class="col-12 form-control-label">Выдан специалисту</label>
                <div class="col-12">
                    <select class="form-control select2" data-wb-role="foreach" data-wb-form="specialists">
                        <option value="{{id}}">{{name}}</option>
                    </select>
                </div>
        </div>
        <div class="form-group row v-common">
                <label class="col-12 form-control-label">Выдан отделению</label>
                <div class="col-12">
                    <select class="form-control select2" data-wb-role="foreach" data-wb-form="branches">
                        <option value="{{id}}">{{name}}</option>
                    </select>
                </div>
        </div>
        <div class="form-group row v-all">
                <label class="col-sm-3 form-control-label">В виджет</label>
                <div class="col-sm-2"><label class="switch switch-success"><input type="checkbox" name="visible"><span></span></label></div>
        </div>
    </div>
</div>


<script>
$(".tree-edit form .select-type").off("change");
$(".tree-edit form .select-type").on("change",function(){
    var form = $(this).parents("form");
    var type = str_replace("section.","",$(this).val());
    type = str_replace(".inc.php","",type);
    $(form).find(".form-group[class*='v-']:not(.v-all)").hide();
    $(form).find(".form-group[class*='v-'].v-"+type).show();
    
    $(form).find(".form-group[class*='v-']:not(.v-all) [name]").each(function(){
        var name = $(this).attr("name");
        $(this).attr("data-fldname",name);
        $(this).removeAttr("name");
    });
    
    $(form).find(".form-group[class*='v-'].v-"+type+" [data-fldname]").each(function(){
        var name = $(this).attr("data-fldname");
        $(this).attr("name",name)
        $(this).removeAttr("data-fldname");
    });
    
    wb_delegates();
});
$(".tree-edit form .select-type").trigger("change");
</script>