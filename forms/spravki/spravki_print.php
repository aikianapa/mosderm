

<print id="print">
<div class="container" data-wb-role="formdata" data-wb-form="spravki" data-wb-item="{{_route.item}}">
    <header class="text-center">
    <img src="/forms/spravki/head_{{_post.lang}}.jpg">
	<h2 data-wb-where='"{{_post.lang}}"=="rus"'>ЦЕНТРАЛИЗОВАННАЯ КЛИНИКО-ДИАГНОСТИЧЕСКАЯ ЛАБОРАТОРИЯ</h2>
	<h2 data-wb-where='"{{_post.lang}}"=="eng"'>CENTRALIZED CLINICAL DIAGNOSTIC LABORATORY</h2>

	<h3 class="text-center" data-wb-where='"{{_post.lang}}"=="rus" AND "{{_post.type}}"=="igm"'>
	НАПРАВЛЕНИЕ<br>
	на диагностическое исследование методом ИФА (ИХЛА) на COVID-19 (коронавирус)
	</h3>
	<h3 class="text-center" data-wb-where='"{{_post.lang}}"=="rus" AND "{{_post.type}}"=="pcr"'>
	НАПРАВЛЕНИЕ<br>
	на диагностическое исследование методом ПЦР на COVID-19 (коронавирус)
	</h3>
	<h3 class="text-center" data-wb-where='"{{_post.lang}}"=="eng" AND "{{_post.type}}"=="igm"'>
	CLINICAL TEST REQUEST FORM <br>
	Coronavirus SARS-CoV-2, antibody testing
	</h3>
	<h3 class="text-center" data-wb-where='"{{_post.lang}}"=="eng" AND "{{_post.type}}"=="pcr"'>
	CLINICAL TEST REQUEST FORM <br>
	Coronavirus SARS-CoV-2, PCR (qalitative detection)
	</h3>
</header>


	<div class="d-block" data-wb-where='"{{_post.lang}}"=="rus"'>
		<img src="/module/qrcode/get/{{_route.item}}" class="qrcode">
		<table style="width:160mm;">
		<tr>
			<td class="tx-bold">Заказчик:</td>
			<td>ГБУЗ МНПЦДК ДЗМ</td>
		</tr>

		<tr>
			<td class="tx-bold">Дата и время доставки:</td>
			<td>{{date("d.m.Y",strtotime({{date}}))}}</td>
		</tr>

		<tr>
			<td class="tx-bold">Диагноз:</td>
			<td>{{diagnose}}</td>
		</tr>

		<tr>
			<td class="tx-bold">Ф.И.О. пациента:</td>
			<td>{{fullname}}</td> 
		</tr>
		<tr>
			<td class="tx-bold">Дата рождения:</td>
			<td>{{date("d.m.Y",strtotime({{birthdate}}))}}</td>
		</tr>
		<tr>
			<td class="tx-bold">Пол:</td>
			<td>{{gender}}</td>
		</tr>
		<tr>
			<td class="tx-bold">Вид материала:</td>
			<td data-wb-where='"{{_post.type}}"=="igm"'>КРОВЬ, ЦЕЛЬНАЯ (СЫВОРОТКА)</td>
			<td data-wb-where='"{{_post.type}}"=="pcr"'>МАЗОК /ОТДЕЛЯЕМОЕ ИЗ НОСОГЛОТКИ И РОТОГЛОТКИ</td>
		</tr>
		<tr>
			<td class="tx-bold">Ф.И.О. врача,<br>направившего материал:</td>
			<td>{{doctor}}</td>
		</tr>
		<tr>
			<td class="tx-bold">Дата взятия:</td>
			<td>{{date("d.m.Y",strtotime({{date}}))}}</td>
		</tr>
		</table>
	</div>
	<div class="d-block" data-wb-where='"{{_post.lang}}"=="eng"'>
		<img src="/module/qrcode/get/{{_route.item}}" class="qrcode">
		<table style="width:160mm;">
		<tr>
			<td class="tx-bold">Client:</td>
			<td>Moscow Scientific and Practical Center of Dermatovenerology and Cosmetology </td>
		</tr>

		<tr>
			<td class="tx-bold">Date & time of delivery:</td>
			<td>{{date("d.m.Y",strtotime({{date}}))}}</td>
		</tr>

		<tr>
			<td class="tx-bold">Diagnosis:</td>
			<td>{{diagnose}}</td>
		</tr>

		<tr>
			<td class="tx-bold">Patient’s name:</td>
			<td>{{wbTranslit({{fullname}})}}</td> 
		</tr>
		<tr>
			<td class="tx-bold">Date of Birth:</td>
			<td>{{date("d.m.Y",strtotime({{birthdate}}))}}</td>
		</tr>
		<tr>
			<td class="tx-bold">Gender:</td>
			<td>{{gender}}</td>
		</tr>
		<tr>
			<td class="tx-bold">Material type:</td>
			<td  data-wb-where='"{{_post.type}}"=="igm"'>BLOOD / BLOOD SERUM</td>
			<td  data-wb-where='"{{_post.type}}"=="pcr"'>A COMBINED THROAT AND NOSE SWAB FOR COVID-19</td>
		</tr>

		<tr>
			<td class="tx-bold">Requesting MD:</td>
			<td>{{wbTranslit({{doctor}})}}</td>
		</tr>
		<tr>
			<td class="tx-bold">Date of collection:</td>
			<td>{{date("d.m.Y",strtotime({{date}}))}}</td>
		</tr>
		</table>
	</div>

	<div class="d-block" data-wb-where='"{{_post.lang}}"=="rus" AND "{{_post.type}}"=="igm"'>

		<h3 class="text-center py-5">
		РЕЗУЛЬТАТ ДИАГНОСТИЧЕСКОГО ИССЛЕДОВАНИЯ
		<br>
		методом ИФА (ИХЛА) на COVID-19 (коронавирус)
		</h3>
		
		<table class="bordered">
			<tr>
				<th>Аналит</th>
				<th>Результат</th>
				<th>Ед.изм.</th>
				<th>Референсные<br>значения</th>
			</tr>
			<tr>
				<td>Качественное определение антител IgM<br>к штамму SARS-CoV-2 коронавируса</td>
				<td>{{igm}}<br><small><span data-wb-where='"{{igm}}" < "2"'>не </span>обнаружено</small></td>
				<td>Ед/мл</td>
				<td>0,00-1,99</td>
			</tr>
			<tr>
				<td>Качественное определение антител IgG <br>к штамму SARS-CoV-2 коронавируса</td>
				<td>{{igg}}<br><small><span data-wb-where='"{{igg}}" < "10"'>не </span>обнаружено</small></td>
				<td>Ед/мл</td>
				<td>0,00-9,99</td>
			</tr>
		</table>
	</div>
	<div class="d-block" data-wb-where='"{{_post.lang}}"=="eng" AND "{{_post.type}}"=="igm"'>
		<h3 class="text-center py-5">
		CLINICAL TEST RESULT
		<br>
		Coronavirus SARS-CoV-2 antibody testing
		</h3>
		<table class="bordered">
			<tr>
				<th>Test</th>
				<th>Result</th>
				<th>Units</th>
				<th>Normal range</th>
			</tr>
			<tr>
				<td>SARS-CoV-2 IgM</td>
				<td>{{igm}}<br>
				<small data-wb-where='"{{igm}}" < "2"'>Negative</small>
				<small data-wb-where='"{{igm}}" >= "2"'>Positive</small>
				</td>
				<td>Ед/мл</td>
				<td>0,00-1,99</td>
			</tr>
			<tr>
				<td>SARS-CoV-2 IgG</td>
				<td>{{igg}}<br>
				<small data-wb-where='"{{igg}}" < "10"'>Negative</small>
				<small data-wb-where='"{{igg}}" >= "10"'>Positive</small>
				</td>
				<td>u/ml</td>
				<td>0,00-9,99</td>
			</tr>
		</table>
	</div>

<div class="d-block" data-wb-where='"{{_post.lang}}"=="rus" AND "{{_post.type}}"=="pcr"'>
		<h3 class="text-center py-5">
		РЕЗУЛЬТАТ ДИАГНОСТИЧЕСКОГО ИССЛЕДОВАНИЯ
		<br>
		методом ПЦР на COVID-19 (коронавирус)
		</h3>
		<h1 data-wb-where='"{{result}}" = "Y"'>
			ОБНАРУЖЕНО
		</h1>
		<h1 data-wb-where='"{{result}}" = "N"'>
			НЕ ОБНАРУЖЕНО
		</h1>
</div>

<div class="d-block" data-wb-where='"{{_post.lang}}"=="eng" AND "{{_post.type}}"=="pcr"'>
		<h3 class="text-center py-5">
		CLINICAL TEST RESULT
		<br>
		Coronavirus SARS-CoV-2, COVID -19, PCR
		</h3>
		<h1 data-wb-where='"{{result}}" = "Y"'>
			POSITIVE
		</h1>
		<h1 data-wb-where='"{{result}}" = "N"'>
			NEGATIVE
		</h1>
</div>

<footer data-wb-where='"{{_post.lang}}"=="rus"'>
<div>
	Ф.И.О. врача, проводившего исследование _______________ Полевщикова С.А.
</div>
<div>
	Дата проведения исследования: {{date( "d.m.Y", strtotime( {{date}} ) )}}
</div>
</footer>
<footer data-wb-where='"{{_post.lang}}"=="eng"'>
<div>
	Laboratory doctor_____________________Polevshсhikova S.А.
</div>
<div>
	Date of analysis: {{date("d.m.Y",strtotime({{date}}))}}
</div>
</footer>


</print>

<style>
@media print {
  @page {
    size: 210mm 297mm;
    margin: 14mm;
  }
  .container {
    width: 1000px;
  }
  html {
	  background-color: white;
  }
  
}

@media screen {
   print {
       display:block;
   }
}

  
    print {
		font-family: sans-serif;
        font-size: 1.2rem;
        color: black;
        background: white;
    }
    
  print * {
	  background: white;
  }

  print header img {
      width:100%;
      margin-bottom: 2rem;
  }

	print .qrcode {
		position:absolute;
		height: 70mm;
		right:0;
	}

  print header h3 {
      background: #1b4c92;
      color: white;
      padding: 1rem;
      font-size: 1.4rem;
      margin: 1rem 0;
  }
  
  print h1 {
	font-size: 2rem;
	text-align: center;
	text-decoration: underline;
  }


  print h2 {
	font-size: 1.6rem;
	text-align: center;
  }
  
  print h3 {
	text-align: center;
  }
  
  print table {
	  width:100%;
  }

  print table td {
	  padding: 0.15rem;
  }
  print table th {
	  padding: 0.15rem;
	  text-align: center;
	  font-weight: bold;
  }  

  print .bordered {
	  border: 1px #000000 solid;
  }

  print .bordered th {
	  border-right: 1px #000000 solid;
  }

  print .bordered tr:last-child th {
		border-bottom:0;
  }
  
  print .bordered th:last-child {
		border-right: 0;
  }
  
  print .bordered td {
	  border-top: 1px #000000 solid;
	  border-right: 1px #000000 solid;
  }

  print .bordered tr:last-child td {
		border-bottom:0;
  }
  
  print .bordered td:last-child {
		border-right: 0;
  }
  
  print footer {
	  margin-top: 2rem;
  }
  
  print footer div {
	  padding: 1rem 0;
  }
</style>
