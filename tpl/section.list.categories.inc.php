<section id="paid-desc" class="sm-section sm-section-bottom" data-name="Список категорий услуг">
    <div class="container">
        
        <meta data-wb-role="include" src="template" data-wb-name="section.form.find.services.php">
        
        <div class="activity__wrap flex" 
                data-wb-role="tree" 
                data-wb-item="products_category" 
                data-wb-branch="{{data.content.category}}" 
                data-wb-parent="false" 
                data-wb-children="false" 
                data-wb-hide="wb">
            <div class="activity__block">
                <a href="/products/{{id}}/{{wbFurlGenerate({{name}})}}" class="activity__item">
                    <img data-wb-role="thumbnail" data-wb-size="368;242;src" src="/uploads/tree/products_category/{{id}}/{{data.images[0].img}}" data-wb-noimg="/tpl/img/paid/paid-3.jpg" alt="" data-wb-hiide="wb">
                    <div class="activity__text">
                        <p>{{name}}</p>
                    </div>
                </a>
                <p>{{wbGetWords({{data.text}},20)}}</p>
            </div>
        </div>
    </div>
</section>
