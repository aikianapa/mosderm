    <section id="banner" data-name="Слайдшоу главной страницы">
        <!-- tpl/section.slideshow.inc.php -->
        <div class="container">
            <div class="banner__slider" data-wb-role="foreach" data-wb-from="data.content.slide" data-wb-tpl="false" data-wb-hide="wb">
                <div class="banner__item">
                  <div class="banner__item-wrap">
                    <div class="banner__text">
                        <span>{{toptext}}</span>
                        <h1>{{header}}</h1>
                        <p>{{text}}</p>
                        <a href="{{btn_link}}" target="{{btn_target}}" class="btn">{{btn_name}}</a>
                    </div>
                    <div class="banner-img">
                      <img src="/uploads/{{_form}}/{{_item}}/{{image[0].img}}">
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
