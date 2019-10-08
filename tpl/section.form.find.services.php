<div class="specialists__wrap mb-5">
    <form class="specialists__forms" method="post" action="/services-find">
        <h3>Поиск услуги</h3>
        <div class="specialists__fio">
            <input name="service_name" type="text" class="input-control" placeholder="Поиск по названию услуги">
        </div>
        <div class="specialists__info flex">
            <div class="specialists__item">
                <input type="text"  class="category_ph input-control" placeholder="Направление">
                <input type="hidden"  name="category_id" class=" input-control">
                <meta data-wb-role="variable" var="srvtype" value="{{data.content.category}}" data-wb-where='"{{data.content.category}}">""'>
                <meta data-wb-role="variable" var="srvtype" value="{{_post.srvtype}}" data-wb-where='"{{_post.srvtype}}">""'>
                <meta data-wb-role="variable" var="srvtype" value="paid" data-wb-where='"{{_var.srvtype}}"=""'>
                <div class="spec-dropdown">
                    <ul data-wb-role="tree" 
                        data-wb-item="products_category" 
                        data-wb-branch="{{_var.srvtype}}" 
                        data-wb-parent="false" 
                        data-wb-children="false" 
                        data-wb-hide="wb">
                        <li><a data-id="{{id}}" onclick="
                            $('.specialists__forms [name=category_id]').val($(this).attr('data-id'))
                            $('.specialists__forms .category_ph').val($(this).text())">{{name}}</a></li>
                    </ul>
                </div>
                <input type="hidden" name="srvtype" value="{{_var.srvtype}}">
            </div>
            <div class="specialists__item">
                <input type="text" class="branch_ph input-control" placeholder="Филиал">
                <input type="hidden" name="branch_id" class="input-control">
                <div class="spec-dropdown">
                    <ul data-wb-role="foreach" data-wb-form="branches" data-wb-tpl="false" data-wb-where='active="on"' data-wb-sort="name" data-wb-hide="wb">
                        <li><a data-id="{{id}}" onclick="
                            $('.specialists__forms [name=branch_id]').val($(this).attr('data-id'))
                            $('.specialists__forms .branch_ph').val($(this).text())">{{name}}</a></li>
                    </ul>
                </div>

            </div>
            <a onclick="$('.specialists__forms').submit();" class="btn">Применить</a>
        </div>
    </form>
</div>