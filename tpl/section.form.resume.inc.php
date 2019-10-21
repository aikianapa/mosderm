<section id="question-2" data-name="Форма - Отправить резюме">
    <!-- tpl/section.form.resume.inc.php -->
    <div class="container">
        <h2>Отправить резюме</h2>
        <form class="question__border">
            <div class="question__wrap flex">
                <div class="question__right">
                    <input type="text" name="_subject" value="Резюме с сайта" style="display:none;">
                    <input type="text" name="fullname" placeholder="Ваше Имя" required>
                    <input type="phone" data-mask="+7 (999) 999-99-99" name="phone" placeholder="Телефон"  required>
                    <input type="email" name="email" placeholder="E-mail"  required>
                </div>
                <div class="question__left">
                    <textarea placeholder="Сопроводительное письмо"></textarea>
                    <div class="question__bottom flex">
                        <a href="javascript:void(0)" data-wb-ajax="/ajax/mail/" class="btn">Отправить</a>
                        <input type="file" name="file" style="display:none;">
                        <a href="javascript:void(0)" class="question-file">Прикрепить файл</a>
                        <p>Нажимая кнопку «Отправить», Вы соглашаетесь с обработкой персональных данных</p>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script data-wb-append="body">
        $(".question-file").on("click",function(e){
            $(this).prev('input').trigger('click'); 
        });
    </script>
</section>
