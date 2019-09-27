<section id="paid-desc" class="sm-section-bottom" data-name="Список категорий услуг">
    <div class="container">
        <div class="activity__wrap flex" 
                data-wb-role="tree" 
                data-wb-item="products_category" 
                data-wb-branch="{{data.content.category}}" 
                data-wb-parent="false" 
                data-wb-children="false" 
                data-wb-hide="wb">
            <div class="activity__block">
                <a href="#" class="activity__item">
                    <img src="img/paid/paid-3.jpg" alt="">
                    <div class="activity__text">
                        <p>{{name}}</p>
                    </div>
                </a>
                <p>{{wbGetWords({{data.text}},20)}}</p>
            </div>
        </div>
    </div>
</section>
