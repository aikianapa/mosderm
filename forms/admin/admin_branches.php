    <div class="form-group row v-all">
        <label class="col-sm-3 form-control-label">Тип блока</label>
        <div class="col-sm-9">
        <select class="form-control select-type" name="type" placeholder="Тип блока" data-wb-role="foreach" data-wb-tpl="false" data-wb-from="_ENV[templates]">
            <option value="{{_value}}"  data-wb-where='"{{_value}}" LIKE ".inc.php"'>{{sectionName({{_value}})}}</option>
        </select>
        </div>
    </div>

    <div class="form-group row v-all">
        <label class="col-sm-3 form-control-label">Добавить класс(ы)</label>
        <div class="col-sm-9"><input type="text" placeholder="Добавить .class" name="class" class="form-control" ></div>
    </div>


    <div class="form-group row v-all">
        <label class="col-sm-3 form-control-label">Отображать</label>
        <div class="col-sm-2"><label class="switch switch-success"><input type="checkbox" name="visible"><span></span></label></div>
    </div>

    <div class="form-group row v-question v-quote">
        <label class="col-sm-3 form-control-label">Цвет блока</label>
        <div class="col-sm-9">
        <select class="form-control" name="color">
            <option value="question">Синий</option>
            <option value="question-2">Белый</option>
        </select>
        </div>
    </div>

    <div class="form-group row v-list-categories">
        <label class="col-sm-3 form-control-label">Категория услуг</label>
        <div class="col-sm-9">
        <select class="form-control" name="category">
            <option value="paid">Платные</option>
            <option value="free">Бесплатные</option>
        </select>
        </div>
    </div>


	<div class="form-group row v-attention v-unionpdf v-widget-services">
	    <label class="col-sm-3 form-control-label">Заголовок</label>
        <div class="col-sm-9"><input type="text" name="header" class="form-control" ></div>
	</div>

	<div class="form-group row v-attention">
	    <label class="col-sm-3 form-control-label">Подзаголовок</label>
        <div class="col-sm-9"><input type="text" name="subheader" class="form-control" ></div>
	</div>

	<div class="form-group row v-attention v-further">
	    <label class="col-sm-3 form-control-label">Текст</label>
        <div class="col-sm-9"><textarea class="w-100" rows="auto" name="text"></textarea></div>
	</div>

    <div class="form-group row v-slideshow">
        <div class="col-12">
        <div data-wb-role="multiinput" name="slide">
            <div class="col-sm-4">
                <input type="hidden" class="form-control" name="image" data-wb-path="/uploads/{{_post._form}}/{{_post._item}}" data-wb-role="uploader" >
            </div>
            <div class="col-sm-8">
                <input type="text" name="toptext" class="form-control" placeholder="Надпись сверху">
                <input type="text" name="header" class="form-control" placeholder="Заголовок">
                <textarea class="w-100" rows="auto" name="text" placeholder="Текст под заголовком"></textarea>
                <div class="row" style="margin:0px -5px;">
                    <div class="col-sm-8"><input type="text" name="btn_name" class="form-control" placeholder="Надпись кнопки" ></div>
                    <div class="col-sm-4"><select name="btn_target" class="form-control"><option value="_self">_self</option><option value="_blank">_bank</option></select></div>
                </div>
                <input type="text" name="btn_link" class="form-control" placeholder="Ссылка кнопки">
            </div>
        </div>
        </div>
    </div>

    <div class="form-group row v-slideshow-lazy">
        <label class="col-3 form-control-label">Интервал отображения<br>(сек)</label>
        <div class="col-9">
            <input type="number" name="lazyspeed" min="1" max="60" class="form-control" placeholder="Интервал отображения (сек)">
        </div>

        <label class="col-sm-3 form-control-label">Отображать стрелки</label>
        <div class="col-sm-2"><label class="switch switch-success"><input type="checkbox" name="lazyarrows"><span></span></label></div>
    </div>

    <div class="form-group row v-widget-services">
        <div class="col-12">
        <div data-wb-role="multiinput" name="slide">
            <div class="col-sm-3">
                <input type="hidden" class="form-control" name="image" data-wb-path="/uploads/{{_post._form}}/{{_post._item}}" data-wb-role="uploader" >
            </div>
            <div class="col-sm-9">
                <input type="text" name="header" class="form-control" placeholder="Заголовок">
                <textarea class="w-100" rows="auto" name="text" placeholder="Текст"></textarea>
                <div class="row" style="margin:0px -5px;">
                    <div class="col-sm-8"><input type="text" name="btn_link" class="form-control" placeholder="Ссылка"></div>
                    <div class="col-sm-4"><select name="btn_target" class="form-control"><option value="_self">_self</option><option value="_blank">_bank</option></select></div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="form-group row v-cols-imgtext">
        <div class="col-12">
        <div data-wb-role="multiinput" name="slide">
            <div class="col-sm-4">
                <input type="hidden" class="form-control" name="image" data-wb-path="/uploads/{{_post._form}}/{{_post._item}}" data-wb-role="uploader" >
            </div>
            <div class="col-sm-8">
                <textarea data-wb-role="module" src="jodit" class="jodit" name="text"></textarea>
            </div>
        </div>
        </div>
    </div>

    <div class="form-group row v-textbtn">
                    <label class="col-3 form-control-label">Надпись на кнопке</label>
                    <div class="col-9">
                        <input type="text" name="header" class="form-control" placeholder="Надпись на кнопке">
                    </div>
                    <label class="col-3 form-control-label">Ссылка</label>
                    <div class="col-9">
                        <input type="text" name="link" class="form-control" placeholder="Ссылка">
                    </div>

            <div class="col-sm-12">
                <textarea data-wb-role="module" src="jodit" class="jodit" name="text"></textarea>
            </div>
    </div>

    <div class="form-group row v-textimglink">
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-12">
                        <input type="text" name="header" class="form-control" placeholder="Заголовок над текстом">
                    </div>
                    <div class="col-12">
                        <input type="text" name="link" class="form-control" placeholder="Ссылка">
                    </div>
                    <div class="col-12">
                        <select name="direction" class="form-control" >
                            <option value="h">Картинка горизонтально</a>
                            <option value="v">Картинка вертикально</option>
                            <option value="c">Квадратная картинка</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <input type="text" name="width" class="form-control" placeholder="Базовая ширина: 300px">
                    </div>

                </div>
                <input type="hidden" class="form-control" name="image" data-wb-path="/uploads/{{_post._form}}/{{_post._item}}" data-wb-role="uploader" >
            </div>
            <div class="col-sm-8">
                <textarea data-wb-role="module" src="jodit" class="jodit" name="text"></textarea>
            </div>
    </div>

    <div class="form-group row v-union-blocks">
            <label class="col-12 form-control-label">Левый блок (белый фон)</label>
            <div class="col-12">
                <textarea data-wb-role="module" src="jodit" class="jodit" name="left"></textarea>
            </div>
            <label class="col-12 form-control-label">Правый блок (серый фон)</label>
            <div class="col-12">
                <textarea data-wb-role="module" src="jodit" class="jodit" name="right"></textarea>
            </div>

    </div>

    <div class="form-group row v-widget-downloadpdf">
        <div class="col-12">
        <div data-wb-role="multiinput" name="files">
            <div class="col-sm-2">
                <input type="hidden" class="form-control" name="image" data-wb-path="/uploads/{{_post._form}}/{{_post._item}}" data-wb-role="uploader" data-wb-ext="pdf" >
            </div>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" placeholder="Описание файла" >
            </div>
        </div>
        </div>
    </div>


    <div class="form-group row v-slidersimple">
        <div class="col-12">
                <input type="hidden" class="form-control" name="images" data-wb-path="/uploads/{{_post._form}}/{{_post._item}}" data-wb-role="uploader" multiple>
        </div>
    </div>


    <div class="form-group row v-progress">
	    <label class="col-sm-3 form-control-label">Текст</label>
        <div class="col-sm-9">
            <textarea class="w-100" rows="auto" name="text" value='{{sectionData("section.progress.inc.php","p.default")}}'>
            </textarea>
        </div>
    </div>

	<div class="form-group row v-about">
	    <label class="col-sm-3 form-control-label">Текст сверху</label>
        <div class="col-sm-9"><textarea class="w-100" rows="auto" name="text"></textarea></div>

	    <label class="col-sm-3 form-control-label">
            Текст в блоке
            <hr>
            Превью видео<br>
            <input type="hidden" name="image" data-wb-path="/uploads/{{_form}}/{{_item}}" data-wb-role="uploader" >
        </label>
        <div class="col-sm-9"><textarea data-wb-role="module" src="jodit" class="jodit" name="testimonial"></textarea></div>

        <label class="col-sm-3 form-control-label">Ссылка на видео</label>
        <div class="col-sm-9"><input type="text" name="youtube" class="form-control" placeholder="Ссылка на видео"></div>
	</div>

    <div class="form-group row v-textimg">
	    <label class="col-sm-3 form-control-label">
            Текст
            <br>
            Изображение<br>
            <input type="hidden" name="image" data-wb-path="/uploads/{{_form}}/{{_item}}" data-wb-role="uploader" >
            <select name="position" class="form-control">
                <option value="left">слева</option>
                <option value="right">справа</option>
                <option value="top">сверху</option>
                <option value="bottom">снизу</option>
            </select>
        </label>
        <div class="col-sm-9"><textarea data-wb-role="module" src="jodit" class="jodit" name="text"></textarea></div>
    </div>

    <div class="form-group row v-textonly">
	    <div class="col-sm-12">
        <label class="form-control-label">Текст</label>
        <textarea data-wb-role="module" src="jodit" class="jodit" name="text"></textarea>
        </div>
    </div>

	<div class="form-group row v-further">
	  <label class="col-sm-3 form-control-label">Список</label>
      <div class="col-sm-9">
          <div data-wb-role="multiinput" name="list">
                <input type="text" name="line" class="form-control" >
          </div>
      </div>
	</div>

	<div class="form-group row v-unionpdf">
	  <label class="col-sm-3 form-control-label">Документ PDF</label>
        <div class="col-sm-5"><input type="hidden" data-wb-path="/uploads/{{_form}}/{{_item}}" name="unionpdf" data-wb-role="uploader" data-wb-ext="pdf"></div>
	</div>

	<div class="form-group row v-further">
	  <label class="col-sm-3 form-control-label">Текст после</label>
      <div class="col-sm-9"><textarea class="w-100" rows="auto" name="text_after"></textarea></div>
	</div>

	<div class="form-group row v-attention">
	  <label class="col-sm-3 form-control-label">Кнопка</label>
        <div class="col-sm-3"><input type="text" name="btn_name" class="form-control" placeholder="Надпись кнопки" ></div>
        <div class="col-sm-4"><input type="text" name="btn_link" class="form-control" placeholder="Ссылка кнопки"></div>
        <div class="col-sm-2"><select name="btn_target" class="form-control"><option value="_self">_self</option><option value="_blank">_bank</option></select></div>
	</div>

    <div class="form-group row v-before-after">
	  <label class="col-sm-3 form-control-label">Было/Стало</label>
        <div class="col-sm-4"><input type="hidden" name="before" data-wb-path="/uploads/{{_form}}/{{_item}}"  data-wb-role="uploader" ></div>
        <div class="col-sm-4"><input type="hidden" name="after" data-wb-path="/uploads/{{_form}}/{{_item}}" data-wb-role="uploader" ></div>
	</div>
	<div class="form-group row v-block-image v-block-paralax">
	  <label class="col-sm-3 form-control-label">Изображение</label>
        <div class="col-sm-5"><input type="hidden" name="image" data-wb-path="/uploads/{{_form}}/{{_item}}" data-wb-role="uploader" ></div>
	</div>

	<div class="form-group row v-block-video">
	    <label class="col-sm-3 form-control-label">Видео</label>
        <div class="col-sm-9"><input type="text" name="video" class="form-control" ></div>
	</div>

<script>
$(".modal.tree-edit form .select-type, .modal#tree_edit form .select-type").off("change");
$(".modal.tree-edit form .select-type, .modal#tree_edit form .select-type").on("change",function(){
    var form = $(this).parents("form");
    var type = str_replace("section.","",$(this).val());
    var name = $(this).find("option:selected").text();
    name = explode(": ",name);
    if (name[1] !== undefined) {name = name[1]} else {name = name[0];}
    console.log(name);
    $(".modal.tree-edit input[name='data-name']").val(name);
    type = str_replace(".inc.php","",type);
    type = str_replace(".","-",type);
    console.log(type);
    $(form).find(".form-group[class*='v-']:not(.v-all)").hide();
    $(form).find(".form-group[class*='v-'].v-"+type).show();

    $(form).find(".form-group[class*='v-']:not(.v-all) [name]").each(function(){
        var name = $(this).attr("name");
        $(this).attr("data-fldname",name);
        $(this).removeAttr("name");
        if ($(this).is("textarea") && $(this).attr("value")>"" && $(this).html()=="") {
            $(this).html($(this).attr("value"));
            $(this).removeAttr("value");
        }
    });

    $(form).find(".form-group[class*='v-'].v-"+type+" [data-fldname]").each(function(){
        var that = this;
        var name = $(this).attr("data-fldname");
        $(this).attr("name",name)
        $(this).removeAttr("data-fldname");
    });
    wb_delegates();
});
$(".modal.tree-edit form .select-type, .modal#tree_edit form .select-type").trigger("change");
</script>
