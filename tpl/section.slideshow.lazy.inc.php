<section id="lazyslide" data-name="Слайдшоу c из папки /uploads/pages/home/lazyslide/">
    <!-- tpl/section.slideshow.lazy.inc.php -->
    <div class="container">
      <div class="slide" data-speed="{{data.content.lazyspeed}}000" data-arrows="{{data.content.lazyarrows}}">
          <ul data-wb-role="foreach" data-wb-json="{{_ENV[lazylist]}}" data-wb-tpl="false" data-wb-hide="wb">
            <li data-bg="/uploads/pages/home/lazyslide/{{img}}"></li>
          </ul>
      </div>
    </div>
    <link rel="stylesheet" href="./css/jquery.slide.css" />
</section>
