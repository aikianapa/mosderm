<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8">
		<link href="/engine/lib/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="/engine/js/bootstrap/bootstrap.min.css" rel="stylesheet">
	</head>
	 <body>
		 <div class="container" data-wb-role="formdata" data-wb-form="spravki" data-wb-item="{{_route.item}}">
			 <center>
			 <img src="/forms/spravki/head_rus.jpg">

			<div data-wb-where='_id == "{{_route.item}}"'>
				<h2>Справка действительна!</h2>
				<i class="fa fa-check-circle-o text-success"></i>
				<p>
				Выдана {{date("d.m.Y",strtotime({{date}}))}}<br>
				на имя {{fullname}} {{birthyear}} г.р.
				</p>
				<h3 data-wb-where='result == "Y"' class="text-danger">Результат ПОЛОЖИТЕЛЬНЫЙ</h3>
				<h3 data-wb-where='result == "N"' class="text-primary">Результат ОТРИЦАТЕЛЬНЫЙ</h3>
			</div>
			<div data-wb-where='_id !== "{{_route.item}}"'>
				<h2 class="text-primary">Справка не действительна!</h2>
				<i class="fa fa-ban text-danger"></i>
			</div>

			 </center>
		 </div>
	 </body>
	 
<style>
	img {
		width:100%;
		max-width:1000px;
	}
	.fa {
		font-size: 9rem;
	}
	
	h2 {
		font-size: 2.2rem;
	}
	
	h3 {
		font-size: 1.6rem;
	}
</style>
</html>



