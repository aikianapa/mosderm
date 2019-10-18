<div id="{{_form}}List" class="element-wrapper">
    <h3 class="element-header">
        Специалисты
        <button class="btn btn-sm btn-success pull-right" data-wb-ajax="/form/edit/{{_form}}/_new" data-wb-append="body">
            <i class="fa fa-plus"></i> Новый
        </button>
    </h3>
    <div class="row">
        <div class="col-sm-4">
            <div class="row">
                <div class="content-left w-100" onClick="$('.kt-pagebody').scrollTop(0)">
                    <label class="content-left-label">
                        Филиалы
                    </label>
                    <ul id="{{_form}}Catalog" data-wb-role="foreach" data-wb-form="branches" data-wb-tpl="false" data-wb-where='type = "branch"' class="nav mg-t-1-force">
                        <li class="nav-item">
                            <a class="nav-link" data-wb-ajax="/form/list/specialists/{{id}}/" title="{{name}}" data-wb-html=".content-box">{{name}}</a>
                        </li>
                        <ul  data-wb-role="foreach" data-wb-form="branches" data-wb-tpl="false" data-wb-where='type="office" AND main="{{id}}"' data-wb-sort="name" data-wb-hide="*">
                            <li><a class="nav-link" data-wb-ajax="/form/list/specialists/{{id}}/" data-wb-html=".content-box">&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;{{name}}</a></li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-8 list">

            <div class="table-responsive">
                <table class="table table-striped formlist">
                    <thead>
                        <tr>
                            <th>Фото</th>
                            <th data-sort="name">Имя / Должность</th>
                            <th data-sort="name">Статус</th>
                            <th class="text-right">Действие</th>
                        </tr>
                    </thead>
                    <tbody data-wb-role="foreach" data-wb-from="result" data-wb-add="true" data-wb-sort="name" data-wb-size="{{_ENV[page_size]}}">
                        <tr item="{{id}}">
                            <td><img data-wb-role="thumbnail" data-wb-size="40px;40px;src" src="/uploads/{{_form}}/{{id}}/{{image[0].img}}"></td>
                            <td>{{name}}<br><small>{{spec}}</small></td>
                            <td class="text-center">
                                <div class="status-pill green" data-title="Отображается" data-wb-role="where" data='active="on"' data-toggle="tooltip"></div>
                                <div class="status-pill red" data-title="Скрытый" data-wb-role="where" data='active=""' data-toggle="tooltip"></div>
                            </td>

                            <td class="text-right" data-wb-role="include" src="form" data-wb-name="common_item_actions"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    #{{_form}
    }

    List #{{_form}
    }

    Catalog a {
        cursor: pointer;
    }

    #{{_form}
    }

    List #{{_form}
    }

    Catalog a {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    #{{_form}
    }

    List .content-left {
        width: 100%;
    }

</style>
<script type="text/locale" data-wb-role="include" src="products_common"></script>
