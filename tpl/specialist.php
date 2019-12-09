<!doctype html>
<html lang="en">
<!-- tpl/specialist.php -->
<head data-wb-role="include" src="template" data-wb-name="head.inc.php">
</head>
<body>
<meta data-wb-role="include" src="template" data-wb-name="section.menu.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="section.request.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="section.breadcrumbs.inc.php">

<section id="spec-card" class="sm-section">
    <div class="container">
        <meta data-wb-remove="#navigation h2">
        <h2>{{name}}</h2>
        <span>
            {{spec}}
            <small class="empty-control" data-wb-role="formdata" data-wb-form="branches" data-wb-item="{{branch}}" data-wb-hide="wb">
                <br>{{name}}
            </small>
        </span>
        <div class="spec-card__wrap flex">
            <div class="spec-card__img">
                <img data-wb-role="thumbnail" data-wb-size="400px;550px;src" src="/uploads/{{_table}}/{{id}}/{{image[0].img}}" alt="{{name}} - {{spec}}" data-wb-hide="wb,data-src">
            </div>
            <div class="spec-card__info text">
                <p data-wb-where='text=""'>{{descr}}</p>
                    {{text->clearStyles()}}
                    <div class="spec-card__buttons flex">
                        <a href="/branches/{{branch}}/order/" class="btn spec-btn-reception">Записаться на прием</a>
                        <a href="#question-2" class="btn spec-btn-review">Оставить отзыв</a>
                    </div>
            </div>
        </div>
    </div>
</section>

    <meta data-wb-role="include" src="template" name="section.diplomas.inc.php" data-wb-vars='{"spec_id":"{{_item}}"}'>

    <section id="spec-reviews" class="empty-remove-reviews">
        <div class="container">
            <h2>Отзывы</h2>
            <div class="spec-reviews__slider empty-control-reviews" data-wb-role="foreach" data-wb-form="comments" data-wb-call="getChunkComments" data-wb-where='active="on" AND spec = "{{_item}}" ' >
                <div class="spec-reviews__slider-item">
                    <div class="spec-reviews__slider-wrap flex" data-wb-role="foreach" data-wb-from="_value" data-wb-sort="date:d" data-wb-tpl="false" data-wb-step="2">
                        <div class="spec-reviews__item">
                            <span>
                                {{_value.date->stdDate()}}
                            </span>
                            <strong>
                                {{_value.name}}
                            </strong>
                            <p>
                                {{_value.text->clearStyles()}}
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="question-2">
    <div class="container">
        <h2>Оставьте отзыв</h2>
        <div class="question__border" data-wb-role="formdata" data-wb-json='{"name":"","text":"","phone":"","email":""}'>
            <form class="question__wrap flex" id="Comment" data-wb-form="comments" data-wb-item="_new">
                <div class="question__right">
                    <input type="text" placeholder="Ваше Имя" name="name" required value="">
                    <input type="phone" placeholder="Телефон" name="phone" required value="">
                    <input type="email" placeholder="E-mail" name="email" required value="">
                    <input type="hidden" name="spec" value="{{_item}}">
                </div>
                <div class="question__left">
                    <textarea placeholder="Комментарий" name="text" min-length="10"></textarea>
                    <div class="question__bottom flex">
                        <a data-wb-formsave="#Comment" class="btn">Отправить</a>
                        <p>Нажимая кнопку «Отправить», Вы соглашаетесь с обработкой персональных данных</p>
                    </div>
                </div>

            </form>

        </div>


    </div>
</section>

<meta data-wb-role="include" src="template" data-wb-name="section.footer.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="scripts.inc.php">
</body>
</html>
