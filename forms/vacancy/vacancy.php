<?php
    wbRouterAdd("/vacancy/(:any)/(:any)",'/controller:form/form:vacancy/mode:show/item:$1/tpl:vacancy.php');

function vacancyAfterItemRead($Item) {
    $Item["header"] = $Item["name"];
    return $Item;
}

?>