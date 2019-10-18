<div data-wb-role="include" src="form" data-wb-name="engine:news_edit"></div>

<div class="col-6 col-sm-12" data-wb-after="input[name=id]">
        <div class="form-group row" data-wb-before=".nav-active-primary">
                <label class="col-2 form-control-label">ID</label>
                <div class="col-10">
                        <input type="text" class="form-control" name="id" placeholder="ID" required>
                </div>
        </div>
</div>


<div  data-wb-before=".nav-active-primary">

    <div class="form-group row">
      <label class="col-sm-2 form-control-label">Заголовок</label>
       <div class="col-sm-10">
            <input type="text" class="form-control" name="header" placeholder="Заголовок" required>
        </div>
    </div>

    <div class="form-group row">
            <label class="col-2 form-control-label">{{_LANG[home]}}</label>
            <div class="col-2"><label class="switch switch-success"><input type="checkbox" name="home"><span></span></label></div>

    </div>

</div>

<div class="form-group row"  data-wb-html="#newsDescr">
    <div class="col-sm-12">
            <meta data-wb-role="include" src="editor" name="text">
	</div>
</div>

<div class="form-group row"  data-wb-html="#newsImages">
    <div class="col-sm-12">
            <input type="hidden" name="image" data-wb-role="uploader" multiple >
	</div>
</div>
<script>
    $("[href='#newsImages'").on("click",function(){
        wb_delegates();
        console.log("wb_delegetes");
    });
</script>