<section id="further" data-name="Блок списка (дальнейшие действия)">
    <!-- tpl/section.futher.inc.php -->
    <div class="container">
        <p>{{data.content.text}}</p>
        <ul data-wb-role="foreach" data-wb-from="data.content.list">
            <li>{{line}}</li>
        </ul>
        <p>{{data.content.after}}</p>
    </div>
</section>