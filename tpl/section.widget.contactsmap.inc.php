<div id="auto-contain">
    <!-- tpl/section.widget.contactmap.inc.php -->
    <div class="panzoom-parent ">
        <div class="map-container" class="panzoom">
            <div id="map" class="panzoom">
                <img src="img/map.jpg">
                <div data-wb-role="foreach" data-wb-tpl="false" data-wb-form="branches" data-wb-where='active="on" AND type="branch" AND mapnum > ""' data-wb-hide="*">
                    <meta data-wb-role="variable" var="active" value="">
                    <meta data-wb-role="variable" var="active" value=" baloon-group--active" data-wb-where='"{{id}}" = "{{_item}}"'>
                    <meta data-wb-role="variable" var="active" value=" baloon-group--active" data-wb-where='"{{main}}" > "" AND "{{id}}" = "{{main}}"'>
                    <div class="baloon-group-{{mapnum}} baloon-group {{_var.active}}">
                        <div class="ballon-group__inner">
                            <span>{{mapnum}}</span>
                        </div>
                        <div class="baloon-info" data-wb-role="formdata" data-wb-form="branches" data-wb-item='{{id}}' data-wb-hide="wb">
                            <strong data-name="{{wbFurlGenerate({{name}})}}" data-id="{{id}}">{{name}}</strong>
                            <p>{{address}} {{phone}}</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!--div class="zoom-buttons">
            <button class="zoom-in">+</button>
            <button class="zoom-out">-</button>

        </div-->

    </div>
</div>

<meta data-wb-role="variable" var="branch_id" value="{{_item}}">
<meta data-wb-role="variable" var="branch_id" value="{{main}}" data-wb-where='main>""'>


<script src="js/jquery.tap.js"  data-wb-append="body"></script>
<script src="js/jquery.panzoom.min.js" data-wb-append="body"></script>
<script data-wb-append="body">
var item = "{{_var.branch_id}}";
$(".baloon-group .baloon-info strong[data-id="+item+"]").parent(".baloon-info").show();
$(".baloon-group .baloon-info strong[data-id="+item+"]").parent(".baloon-info").prev(".baloon-on").show();


var $section = $('#auto-contain');
/*
$section.find('.panzoom').panzoom({
$zoomIn: $section.find(".zoom-in"),
$zoomOut: $section.find(".zoom-out"),
startTransform: 'scale(1)',
increment: 0.1,
minScale: 1,
maxScale: 2,
contain: 'automatic'
}).panzoom('zoom');
*/
$(".baloon-group").on("click tap",function(){
var item = $(this).find(".baloon-info strong").attr("data-id");
var furl = $(this).find(".baloon-info strong").attr("data-name");
document.location.href = "/branches/"+item+"/"+furl;
});

$(window).on("resize",function(){
var def =  1134;
if ($(".branches-card__address").length) {
var max = ($(".branches-card__address")[0]["offsetWidth"] - $(".branches-card__address-info")[0]["offsetWidth"]);
if (0 > max) {
    max = $(".branches-card__address-info")[0]["offsetWidth"] ;
}
} else {
var max = $(".container")[0]["offsetWidth"] ;
}
$("#auto-contain").removeAttr("style");
var zoom = (max / def) * 100;

$("#auto-contain").css("zoom",zoom +"%");
});
setTimeout(function(){
$(window).trigger("resize");
},500);


</script>
