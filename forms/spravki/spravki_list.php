
<div class="element-wrapper">
                    <h6 class="element-header">
                     Справки SARS-CoV-19
                     <button class="btn btn-sm btn-success pull-right" data-wb-ajax="/form/edit/{{_GET[form]}}/_new" data-wb-append="body">
                       <i class="fa fa-plus"></i> Новая
                     </button>
                    </h6>
                    <div class="element-box">
                      <div class="table-responsive">
                        <table class="table table-lightborder">
                          <thead>
                            <tr>
                              <th>Ф.И.О.</th>
                              <th>Дата рождения</th>
                              <th class="text-center">Результат</th>
                              <th class="text-right">Действие</th>
                            </tr>
                          </thead>
                          <tbody data-wb-role="foreach" data-wb-table="spravki" data-wb-add="true" data-wb-size="{{_ENV[page_size]}}" data-wb-sort="_created:d">
                            <tr>
                              <td class="nowrap">
								  {{fullname}}
                                </td>
                              <td>{{birthdate}}</td>
                              <td class="text-center">
                                <div class="status-pill green" data-title="{{result}}" data-wb-role="where" data='result="N"' data-toggle="tooltip"></div>
                                <div class="status-pill red" data-title="{{result}}" data-wb-role="where" data='result="Y"' data-toggle="tooltip"></div>
                              </td>
                              <td class="text-right" data-wb-role="include" src="form" data-wb-name="common_item_actions"></td>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
</div>
