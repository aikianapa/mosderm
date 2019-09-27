<section id="center" class="sm-section" data-name="Блок о центре с видео">
    <div class="container">
        <!--h2>{{header}}</h2-->
        <div class="center__title">
            <p>{{data.content.text}}</p>
        </div>
        <div class="center__info flex">
            <div class="center__video">
                <div class="center__video-item flex">
                    <div class="center__video-wrap">
                        <iframe width="100%" height="100%" src="{{data.content.youtube}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="center__video-shadow">
                    </div>
                </div>
            </div>
            <div class="center__img">
                <div class="center__img-wrap">
                    <img data-wb-role="thumbnail" data-wb-size="811;488;src" src="/uploads/{{_form}}/{{_item}}/{{data.content.image[0].img}}" data-wb-noimg="/tpl/img/center/center.jpg" alt="{{header}}">
                </div>
                <div class="center__text">
                    {{data.content.testimonial}}
                    <wrapper data-wb-where='"{{data.content.youtube}}">""'>
                        <div class="dws">
                            <div class="pulse">
                                <div class="bloc">
                                    <img src="img/video/video.png" height="17" width="10"/>
                                </div>
                            </div>
                        </div>
                    </wrapper>
                </div>
            </div>
        </div>
    </div>
</section >
