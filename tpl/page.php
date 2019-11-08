<!doctype html>
<html lang="en">
<head data-wb-role="include" src="template" data-wb-name="head.inc.php">
</head>
<body>
<meta data-wb-role="include" src="template" data-wb-name="section.menu.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="section.request.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="section.breadcrumbs.inc.php">
<div data-wb-role="tree" data-wb-from="blocks" data-wb-hide="*">
    <meta data-wb-role="include" src="template" name="{{data.content.type}}" data-wb-where='"{{data.content.visible}}" = "on"' class="{{data.content.class}}">
</div>
<meta data-wb-role="include" src="template" data-wb-name="section.footer.inc.php">
<meta data-wb-role="include" src="template" data-wb-name="scripts.inc.php">
</body>
</html>