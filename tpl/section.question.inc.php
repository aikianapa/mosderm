    <section id="{{_var.qid}}" data-name="Виджет - Задать вопрос">
        <div class="container">
            <h2>Задайте ваш вопрос</h2>
            <div class="question__border">
                <div class="question__wrap flex">
                    <div class="question__right">
                        <input type="text" placeholder="Ваше Имя">
                        <input type="text" placeholder="Телефон">
                        <input type="text" placeholder="E-mail">
                    </div>
                    <div class="question__left">
                        <textarea placeholder="Коментарий"></textarea>
                        <div class="question__bottom flex">
                            <a href="#" data-wb-ajax="/ajax/mail/" class="btn" style="cursor:pointer;">Отправить</a>
                            <p>Нажимая кнопку «Отправить», Вы соглашаетесь с обработкой персональных данных</p>
                        </div>
                    </div>

                </div>

            </div>


        </div>
    </section>

<meta data-wb-role="variable" var="qid" data-wb-if='"{{data.content.color}}">""' value="{{data.content.color}}" else="question">
<meta data-wb-role="select" data-wb-attr="id" value="{{_var.qid}}">