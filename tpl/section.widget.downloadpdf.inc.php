<section id="union-pdf" data-name="PDF-файлы для скачивания">
    <!-- tpl/section.widget.downloadpdf.inc.php -->
    <div class="container">
        <p>PDF-файлы для скачивания</p>
        <div class="union-pdf__wrap flex" data-wb-role="foreach" data-wb-from="data.content.files" data-wb-tpl="false" data-wb-hide="wb">
            <div class="union-pdf__item knd-pdf">
                <a href="/uploads/{{_form}}/{{_item}}/{{image[0].img}}" target="_blank">
                    {{name}}
                </a>
            </div>
        </div>
    </div>
</section>