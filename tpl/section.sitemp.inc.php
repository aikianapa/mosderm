<section id="index" class="sm-section" data-name="Карта сайта">
    <style>
        #index a {display: block;padding-bottom: 10px;}
        #index b {padding-bottom:10px;}
        #index ul {padding-bottom:20px;}
    </style>
    <div class="container">


        <div class="inner_menu__right" data-wb-role="tree" data-wb-item="structure" data-wb-branch="dropmenu-left" data-wb-parent="false" data-wb-children="false">
            <b>
                <a href="/{{data.prop.item}}">{{name}}</a>
            </b>
            <ul data-wb-role="tree" data-wb-item="structure" data-wb-branch="dropmenu-left->{{id}}" data-wb-parent="false" data-wb-where='"{{count(children)}}" > "0"' data-wb-children="false">
                <li><a href="/{{data.prop.item}}">{{name}}</a></li>
            </ul>
        </div>
        <div class="inner_menu__left" data-wb-role="tree" data-wb-item="structure" data-wb-branch="dropmenu-right" data-wb-parent="false" data-wb-children="false">
            <b>
                <a href="/{{data.prop.item}}">{{name}}</a>
            </b>
            <ul data-wb-role="tree" data-wb-item="structure" data-wb-branch="dropmenu-right->{{id}}" data-wb-parent="false" data-wb-where='"{{count(children)}}" > "0" AND id != "services-paid"' data-wb-children="false">
                <li><a href="/{{data.prop.item}}">{{name}}</a></li>
            </ul>
            <ul data-wb-role="tree" data-wb-item="products_category" data-wb-branch="paid" data-wb-parent="false" data-wb-where='id = "services-paid"' data-wb-children="false">
                <li><a href="/products/{{id}}/{{wbFurlGenerate({{name}})}}">{{name}}</a></li>
            </ul>

        </div>

    </div>
</section>
