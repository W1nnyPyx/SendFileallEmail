  <!DOCTYPE html>
  <!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
  <!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
  <!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
  <!--[if gt IE 8]><!-->
  <html lang="ru">
  <!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="css/normalize.css"> 
    <link rel="stylesheet" href="css/jquery.steps.css"> 
    <link rel="stylesheet" href="css/main.css"> 
    <title>ХелпСервис</title>

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
  </head>

  <style type="text/css">
  	
  	.box{
  		margin: 30px auto auto auto;
  		width: 1004px;
  		height: 400px;
  	}
 	.wizard > .steps a,
 	.wizard > .steps a:hover,
 	.wizard > .steps a:active{
 		font-size: 14px !important;
 		text-align: center;
 	}
 	.wizard > .steps a span{
 		display: none !important;
 	}
  	.wizard>.content {
  		background: #eee;
  		display: block;
  		min-height: 35em;
  		overflow: hidden;
  		position: relative;
  		width: 75%;
  		margin: 0em auto 1em auto;
  		/*width: auto;
  		margin: .5em;*/
  		-webkit-border-radius: 5px;
  		-moz-border-radius: 5px;
  		border-radius: 5px;
  	}
  	.wizard > .actions {
  		position: relative;
  		display: block;
  		text-align: center;
  		width: 100%;
  		margin-bottom: 30px;
  	}
  	.wizard > .steps > ul > li {
  		width: 20% !important;
  	}
  	legend {
  		display: block;
  		width: 100%;
  		padding: 0;
  		margin-bottom: 20px;
  		font-size: 21px;
  		line-height: 40px;
  		color: #333;
  		border: 0;
  		border-bottom: 1px solid #e5e5e5;
  	}
  	.wizard>.content>.body label {
  		display: inline-block;
  		margin-bottom: .5em;
  		font-size: 14px;
  		color: #5d5d5d;
  	}
  	.wizard>.content>.body input {
  		display: block;
  		border: 1px solid #ccc;
  	}
  	select{
  		display: block !important;
  		height: 42px !important;
  		width: 530px !important;
  		outline: none !important;
  	}
  	select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
  		background-color: #fff;
  		border: 1px solid #ccc;
  		-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
  		-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
  		box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
  		-webkit-transition: border linear .2s,box-shadow linear .2s;
  		-moz-transition: border linear .2s,box-shadow linear .2s;
  		-o-transition: border linear .2s,box-shadow linear .2s;
  		transition: border linear .2s,box-shadow linear .2s;
  	}
  	select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
  		display: inline-block;
  		height: 32px;
  		width: 515px;
  		padding: 4px 6px;
  		margin-bottom: 15px;
  		font-size: 14px;
  		line-height: 20px;
  		color: #555;
  		-webkit-border-radius: 4px;
  		-moz-border-radius: 4px;
  		border-radius: 4px;
  		vertical-align: middle;
  	}
  	textarea:focus, input[type="text"]:focus, input[type="password"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="date"]:focus, input[type="month"]:focus, input[type="time"]:focus, input[type="week"]:focus, input[type="number"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="color"]:focus, .uneditable-input:focus {
  		border-color: rgba(82,168,236,.8);
  		outline: 0;
  		outline: thin dotted \9;
  		-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);
  		-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);
  		box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);
  	}
  	input, textarea{
  		outline: none;
  	}
  	.logo{
  		display: block;
  		margin: 20px auto auto auto;
  	}
  	.wizard > .content > .body {
  		float: left;
  		position: absolute;
  		width: 95%;
  		height: 95%;
  		padding: 2.5%;
  		overflow: auto;
  	}
    .hidetext{
      display: none;
    }
    .hidetext p{
      margin-bottom: 10px;
      font-size: 14px;
      color: #444;
    }
    .hidetextshow{
    	color: #444;
    }

    #fade {
    	display: none;
    	background: #000;
    	position: fixed;
    	left: 0;
    	top: 0;
    	width: 100%;
    	height: 100%;
    	opacity: .80;
    	z-index: 9999;
    }
    .popupbox {
    	width: 700px;
    	height: 400px;
    	background: #fff;
    	display: none;
    	border: 2px solid #fff;
    	float: left;
    	position: fixed;
    	z-index: 99999;
    	-webkit-box-shadow: 0px 0px 10px #4a4a4a;
    	-moz-box-shadow: 0px 0px 10px #4a4a4a;
    	box-shadow: 0px 0px 10px #4a4a4a;
    	top: 50%;
    	left: 50%;
    	overflow: auto;
    }
	.popupbox p{
		font-size: 16px;
		margin-bottom: 10px;
	}
    #close {
    	width: 30px;
    	height: 30px;
    	position: absolute;
    	float: right;
    	cursor: pointer;
    	right: 9px;
    	font-weight: bold;
    	top: 9px;
    	text-align: center;
    	line-height: 15px;
    	background: url(close.png) no-repeat;
    }
    #fom2 {
    	/*height: 250px;*/
    	padding: 15px;
    	-webkit-box-sizing: border-box;
    	   -moz-box-sizing: border-box;
    	    -ms-box-sizing: border-box;
    	     -o-box-sizing: border-box;
    	        box-sizing: border-box;
    	text-align: justify;
    }
    #loader{
    	display: none;
      width: 300px;
      height: 250px;
      background: #fff;
      display: none;
      border: 2px solid #fff;
      float: left;
      position: fixed;
      z-index: 99999;
      -webkit-box-shadow: 0px 0px 10px #4a4a4a;
      -moz-box-shadow: 0px 0px 10px #4a4a4a;
      box-shadow: 0px 0px 10px #4a4a4a;
      top: 50%;
      left: 50%;
      margin-top: -125px;
      margin-left: -150px;
      overflow: auto;
    }
     #loader h1{
      text-align: center;
      font-size: 21px;
      padding-top: 52px;
      color: #2184be;
    }
    .loader_img {
      display: block;
      margin: 28px auto auto auto;
    }
    #anc_add_more{
      background: #2184be;
      color: #fff;
      display: block;
      padding: 0.5em 1em;
      text-decoration: none;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      width: 111px;
      cursor: pointer;
      border-radius: 5px;
    }
    #anc_add_more2{
      background: #2184be;
      color: #fff;
      display: block;
      padding: 0.5em 1em;
      text-decoration: none;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      width: 111px;
      cursor: pointer;
      border-radius: 5px;
    }
  </style>
<body>
	<img src="http://u0.platformalp.ru/s/1fr5pk051/3280522b19ac1f48d45d9d20046204dc/cb2e15aa8ef0ad84c9057eb2f5574454.jpg" class="logo">
<div class="box">
	<form id="example-advanced-form" enctype="multipart/form-data" method="POST">
	    <h3>Начало </h3>
		
	    <fieldset>
	        <label for="LastName">Укажите фамилию:</label>
	        <input id="LastName" name="LastName" type="text" class="required" placeholder="Укажите фамилию">
	        <label for="Name">Укажите имя:</label>
	        <input id="Name" name="Name" type="text" class="required" placeholder="Укажите имя">
	        <label for="otches">Укажите отчество:</label>
	        <input id="otches" name="otches" type="text" class="required" placeholder="Укажите отчество">
	        <label for="snils">СНИЛС необходимо предъявить при посещении клиентского центра:</label>
	        <input id="snils" name="snils" type="text" class="required" placeholder="Укажите СНИЛС">
	        <label for="emails">E-mail:</label>
	        <input id="emails" name="emails" type="text" class="required email" placeholder="Укажите E-mail">
	        <label for="phone">Мобильный телефон:</label>
	        <input id="phone" name="phone" type="text" class="required" placeholder="Укажите телефон">
        
          <input type="checkbox" name="soglasie" id="soglasie"  class="required"><label style="position: relative;top: -2px;padding-left: 5px;" for="soglasie">даю согласие на обработку данных <a href="#" class="hidetextshow" rel="popuprel">( смотреть )</a></label>
	    </fieldset>
	 
	   <h3>Основное</h3>
	     <fieldset>
	         <label for="soc">Социальный статус:</label>
	         <select class="required" id="soc" name="soc">
	        	<option>Выбрать</option>
	        	<option>Работаю (служу)</option>
	        	<option>Не работаю</option>
	        	<option>Студент</option>
	        	<option>Пенсионер</option>
	        	<option>Домохозяйка</option>
	        </select> 

	        <label>Пол:</label>
	         
			<p style=" margin: 0;"><input type="radio" style="text-align: left;display: inline-block;position: relative;top: 2px;" name="pol" value="mens" class="required"> мужской<br>
			   <input type="radio" style="text-align: left;display: inline-block;position: relative;top: 2px;" name="pol" value="woman" class="required"> женский<br></p>

	     <h4>Адрес фактического проживания</h4>
			 <label for="index">Индекс:</label>
			 <input id="index" name="index" type="text" class="required" placeholder="Укажите индекс">

			 <label for="naselpunkt">Населенный пункт:</label>
			 <input id="naselpunkt" name="naselpunkt" type="text" class="required" placeholder="Укажите населенный пункт">
 
			 <label for="ulica">Улица:</label>
			 <input id="ulica" name="ulica" type="text" class="required" placeholder="Укажите улицу">

			 <label for="home">Дом:</label>
			 <input id="home" name="home" type="text" class="required" placeholder="Укажите дом">

			 <label for="korpus">Корпус:</label>
			 <input id="korpus" name="korpus" type="text"  placeholder="Укажите корпус">

			 <label for="stroenie">Строение:</label>
			 <input id="stroenie" name="stroenie" type="text"  placeholder="Укажите строение">

			 <label for="kvartira">Квартира:</label>
			 <input id="kvartira" name="kvartira" type="text"  placeholder="Укажите квартиру">
				
			 <label for="status">Статус места жительства:</label>
			  <select class="required" id="status" name="status">
			 	<option>Выбрать</option>
			 	<option>Собственное, в том числе приватизированное</option>
			 	<option>Съемное жилье</option>
			 	<option>Проживаю у родственников (знакомых)</option>
			 	<option>Муниципальное, служебное</option>
			 </select> 

	    </fieldset>
	 
	    <h3>Паспорт </h3>
	   <fieldset>
	  <!-- <legend>Работа со временем</legend> -->
	      <label for="pasport">Паспорт:</label>
	      <input id="pasport" name="pasport" type="text" class="required" placeholder="Например, 0000 00000">


	      <label for="datavidachi">Дата выдачи:</label>
	      <input id="datavidachi" name="datavidachi" type="text" class="required" placeholder="Например, 31.12.1982">

	      <label for="kodpodrazdeleniya">Код подразделения:</label>
        <input id="kodpodrazdeleniya" name="kodpodrazdeleniya" type="text" class="required" placeholder="Например, 000-000">

	      <label for="mestorojdeniya">Место рождения:</label>
	      <input id="mestorojdeniya" name="mestorojdeniya" class="required" type="text" placeholder="Точно как указано в паспорте. Например, гор. Москва">

	      <h4>Адрес постоянной регистрации (как в паспорте)</h4>

	     <label for="index2">Индекс:</label>
       <input id="index2" name="index2" type="text" class="required" placeholder="Укажите индекс">

       <label for="naselpunkt2">Населенный пункт:</label>
       <input id="naselpunkt2" name="naselpunkt2" type="text" class="required" placeholder="Укажите населенный пункт">

       <label for="ulica2">Улица:</label>
       <input id="ulica2" name="ulica2" type="text" class="required" placeholder="Укажите улицу">

       <label for="home2">Дом:</label>
       <input id="home2" name="home2" type="text" class="required" placeholder="Укажите дом">

       <label for="korpus2">Корпус:</label>
       <input id="korpus2" name="korpus2" type="text"  placeholder="Укажите корпус">

       <label for="stroenie2">Строение:</label>
       <input id="stroenie2" name="stroenie2" type="text"  placeholder="Укажите строение">

       <label for="kvartira2">Квартира:</label>
       <input id="kvartira2" name="kvartira2" type="text"  placeholder="Укажите квартиру">

       <label for="status2">Статус места жительства:</label>
       <select class="required" id="status2" name="status2">
        <option>Выбрать</option>
        <option>Собственное, в том числе приватизированное</option>
        <option>Съемное жилье</option>
        <option>Проживаю у родственников (знакомых)</option>
        <option>Муниципальное, служебное</option>
      </select> 

	   <label for="dataregister">Дата регистрации:</label>
    <input id="dataregister" name="dataregister" type="text" class="required" placeholder="Указана в разделе «Место жительства» на 5-ой странице паспорта.">

     <label>Фото паспорта ( 1 сторона и прописка ):</label>
     <input name="attachfile[]" type="file" class="pasportphoto"  style="margin-bottom: 10px;">
     <div id="spn_inputs"></div>
     <div id="anc_add_more">Добавить поле</div><br>

      <label for="docsd">Второй документ:</label>
      <select class="required" id="docsd" name="docsd">
      	<option>Выбрать</option>
      	<option>Водительское удостоверения </option>
      	<option>ИНН </option>
      	<option>Страховое Свидетельство </option>
      	<option>Загран. Паспорт</option>
      </select> 
     <input name="attachfile[]" type="file" id="docphoto"  style="margin-bottom: 10px;">
      <div id="spn_inputs2"></div>
     <div id="anc_add_more2">Добавить поле</div><br>
	</fieldset>

	   
	 
	    <h3>Работа</h3>
	    <fieldset>
	    	<!-- <legend>Работа со временем</legend> -->
	    	<label for="nazvanieorganizachiye">Название организации:</label>
	    	<input id="nazvanieorganizachiye" name="nazvanieorganizachiye" type="text" class="required" placeholder="Укажите название организации, в которой работаете">
	    	<label for="innrabotodatelaya">ИНН работодателя:</label>
	    	<input id="innrabotodatelaya" name="innrabotodatelaya" type="text" class="required" placeholder="Укажите ИНН работодателя">
	    	<label for="otrasl">Отрасль:</label>
	    	<select class="required" id="otrasl" name="otrasl">
	    		<option>Выбрать</option>
	    		<option>Добыча полезных ископаемых</option>
          <option>ЖКХ, СМИ, реклама, культура, охрана, услуги для юр.и физ.лиц, спорт</option>
          <option>Здравоохранение и социальная помощь</option>
          <option>Наука и образование</option>
          <option>Операции с недвижимым имуществом, аренда и предоставление услуг</option>
          <option>Производство и распределение электроэнергии, газа и воды</option>
          <option>Рыбное хозяйство, добыча водных биоресурсов</option>
          <option>Сельское и лесное хозяйство, охота</option>
          <option>Транспорт, логистика, связь, информ.технологии, телекоммуникации</option>
          <option>Туристический и гостиничный бизнес, общепит и рестораны</option>
          <option>Тяжелая, легкая, пищевая пром., химия, парфюмерия, фармацевтика</option>
          <option>Федеральное, муниципальное управление, армия, силовики, таможня</option>
          <option>Финансы, банковское дело, страхование, аудит, консалтинг</option>
	    		<option>Прочее</option>
	    	</select>
	    	<label for="datetrs">Дата трудоустройства:</label>
	    	<input id="datetrs" name="datetrs" class="required" type="text" placeholder="На текущее место работы. Например 10.12.2000">
	    	<label for="dolgnost">Должность:</label>
	    	<select class="required" id="dolgnost" name="dolgnost">
	    		<option>Выбрать</option>
	    		<option>Служащий (специалист)</option>
          <option>Административный персонал</option>
          <option>Руководитель среднего звена</option>
          <option>Руководитель высшего звена</option>
	    		<option>Военнослужащий по контракту</option>
	    	</select>

	    	<label for="colvosotrs">Количество сотрудников:</label>
	    	<select class="required" id="colvosotrs" name="colvosotrs">
	    		<option>Выбрать</option>
	    		<option>до 10 человек</option>
          <option>до 100 человек</option>
          <option>от 100 до 1000 человек</option>
          <option>свыше 1000 человек</option>
	    	</select>
	   
      
      <h4>Адрес организации</h4>
      <label for="indexorg">Индекс:</label>
      <input id="indexorg" name="indexorg" class="required" type="text" placeholder="123456">

      <label for="naselpunkt3">Населенный пункт:</label>
      <input id="naselpunkt3" name="naselpunkt3" type="text" class="required" placeholder="Укажите населенный пункт">

      <label for="ulica3">Улица:</label>
      <input id="ulica3" name="ulica3" type="text" class="required" placeholder="Укажите улицу">

      <label for="home3">Дом:</label>
      <input id="home3" name="home3" type="text" class="required" placeholder="Укажите дом">

      <label for="korpus3">Корпус:</label>
      <input id="korpus3" name="korpus3" type="text" placeholder="Укажите корпус">

      <label for="stroenie3">Строение:</label>
      <input id="stroenie3" name="stroenie3" type="text"  placeholder="Укажите строение">

      <label for="ofis">Офис:</label>
      <input id="ofis" name="ofis" type="text" placeholder="Укажите офис">

      <label for="phomeorganizachiya">Номер телефона организации:</label>
      <input id="phomeorganizachiya" name="phomeorganizachiya" type="text" class="required" placeholder="Укажите номер телефона организации">

     </fieldset>

	    <h3>Личная информация</h3>
	    <fieldset>
         <label for="obrazovaniye">Образование:</label>
         <select class="required" id="obrazovaniye" name="obrazovaniye">
         <option>Выбрать</option>
         <option>Высшее</option>
         <option>Среднее специальное</option>
         <option>Среднее</option>
         <option>Начальное</option>
        </select>

         <label for="semeinoepologenie">Семейное положение:</label>
         <select class="required" id="semeinoepologenie" name="semeinoepologenie">
           <option>Выбрать</option>
           <option>Женат (замужем)</option>
           <option>Холост (не замужем)</option>
           <option>Разведен (разведена)</option>
           <option>Гражданский брак</option>
           <option>Вдовец (вдова)</option>
         </select>

         <label for="deti">Количество детей:</label>
         <select class="required" id="deti" name="deti">
          <option>Нет</option>
          <option>Один</option>
          <option>Двое</option>
          <option>Трое</option>
          <option>Больше трех</option>
         </select>

         <label for="colvoingevencov">Количество иждивенцев:</label>
         <select class="required" id="colvoingevencov" name="colvoingevencov">
           <option>Нет</option>
           <option>Один</option>
           <option>Двое</option>
           <option>Трое</option>
           <option>Больше трех</option>
         </select>
         
         <h4>Доходы и расходы</h4>
         <label for="doxod">Ваш доход в месяц, руб.:</label>
         <input id="doxod" name="doxod" type="text" class="required" placeholder="Укажите Ваш доход в месяц, руб.:">

         <label for="doxodmecyac">Доход семьи в месяц, руб.:</label>
         <input id="doxodmecyac" name="doxodmecyac" type="text" class="required" placeholder="Укажите доход семьи в месяц, руб.:">

	       <label for="rasxod">Расход семьи в месяц, руб.:</label>
         <input id="rasxod" name="rasxod" type="text" class="required" placeholder="Укажите расход семьи в месяц, руб.:">

        <h4>Имущество в собственности</h4>

        <label for="sobstvennosts">Вид собственности:</label>
        <select  id="sobstvennosts" name="sobstvennosts">
          <option>Квартира</option>
          <option>Индивидуальный дом</option>
          <option>Дача</option>
          <option>Земельный участок</option>
          <option>Гараж</option>
          <option>Автомобиль</option>
        </select>

        <h4>Адрес для корреспонденции</h4>

        <label for="korespondentadress">Для корреспонденции использовать адрес:</label>
        <select  id="korespondentadress" name="korespondentadress">
          <option>Адрес регистрации</option>
          <option>Адрес проживания</option>
          <option>Адрес работы</option>
        </select>

        <label for="chelkredit">Цель кредита:</label>
        <select  id="chelkredit" name="chelkredit">
          <option>Запланированная покупка (бытовая техника, электроника, транспортные средства)</option>
          <option>Ремонт, покупка мебели</option>
          <option>Приобретение недвижимости</option>
          <option>Незапланированная покупка</option>
          <option>Путешествие</option>
          <option>Свадьба, день рождения, другое значимое событие</option>
          <option>Учеба</option>
          <option>Рефинансирование другого кредита</option>
          <option>Просто нужны деньги (это вариант когда нет четкой цели, до зарплаты, долг отдать)</option>
          <option>Другое</option>
        </select>

	    </fieldset>
	</form>
</div>


<div class="popupbox" id="popuprel">
  <span id="close"></span>
  <div id="intabdiv">
  	<div id="fom2">
  		<h2>Согласие на обработку персональных данных</h2>
  		<p>Я даю ООО «ХелпСервис», адрес местонахождения:  г. Казань, Матросова ул., д. 4 (далее – Компания) согласие на обработку (совершение любых действий с использованием средств автоматизации или без, в том числе на сбор, запись, систематизацию, накопление, хранение, уточнение, извлечение, использование, передачу, обезличивание, блокирование, удаление, уничтожение) моих персональных данных, указанных в Заявлении. Я согласен, что Компания вправе поручить обработку моих персональных данных третьим лицам.
  			Я предоставляю Компании право проверить все данные, которые я сообщил Компании в Заявлении, путем осуществления сотрудниками Компании опросов по телефонам, указанным в Заявлении, а также иными способами, не противоречащими законодательству Российской Федерации. Мое согласие действует в течение 75 лет, с даты подписания Заявления.
  			Я предоставляю Компании право направлять мне информацию, включая информацию рекламного характера, об услугах Компании и/или третьих лиц по всем известным Компании адресам и контактам, в том числе посредством телефонной коммуникации/ направления смс сообщений по указанному мной номеру мобильного телефона, а также посредством направления сообщений по указанному мной адресу электронной почты.
  		</p>

  		<p>Я уведомлен, что могу отозвать свое согласие на обработку персональных данных, представив в Компанию заявление в письменной форме.
  			Я подтверждаю, что указанная в Заявлении информация является достоверной, а размещенные персональные данные принадлежат мне. Я понимаю, что в случае предоставления заведомо ложных и (или) недостоверных сведений с целью получения кредита/ кредитной карты я буду нести ответственность в соответствии с законодательством Российской Федерации.
  			Я даю согласие ООО «ХелпСервис», г. Казань, Матросова ул., д. 4 на получение информации в центральном каталоге кредитных историй и основной части кредитной истории в бюро кредитных историй в целях заключения договора потребительского кредита с Банком.
  		</p>
  	</div>   
  </div>
</div>

<div id="loader">
	<h1>Пожалуйста подождите, идет загрузка файлов!</h1>
  <img src="loader.gif" class="loader_img">
</div>
<!-- #### JAVASCRIPT
####################################################-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery.validate.js"></script>
<script src="jquery.steps.js"></script>
<script>

	window.onload = function () { 
    // проверяем поддерживает ли браузер FormData 
    if(!window.FormData) {
        /* * если не поддерживает, то выводим 
        * то выводим предупреждение вместо формы */
        var div = ge('content');
        div.innerHTML = "Ваш браузер не поддерживает объект FormData";
        div.className = 'notSupport'; 
      }
    }

$(document).ready(function() {

 
  
var form = $("#example-advanced-form").show();
 
form.steps({
    headerTag: "h3",
    bodyTag: "fieldset",
    transitionEffect: "slideLeft",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        // Allways allow previous action even if the current form is not valid!
        if (currentIndex > newIndex)
        {
            return true;
        }
        // Forbid next action on "Warning" step if the user is to young
        if (newIndex === 3 && Number($("#age-2").val()) < 18)
        {
            return false;
        }
        // Needed in some cases if the user went back (clean up)
        if (currentIndex < newIndex)
        {
            // To remove error styles
            form.find(".body:eq(" + newIndex + ") label.error").remove();
            form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
        }
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onStepChanged: function (event, currentIndex, priorIndex)
    {
        // Used to skip the "Warning" step if the user is old enough.
        if (currentIndex === 2 && Number($("#age-2").val()) >= 18)
        {
            form.steps("next");
        }
        // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
        if (currentIndex === 2 && priorIndex === 3)
        {
            form.steps("previous");
        }
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
          var that =  $('#example-advanced-form'),
        	  formData = new FormData(that.get(0));
             
        	$.ajax({
        	  type: "POST",
        	  url: "mail.php", //Change
        	  contentType: false, // важно - убираем форматирование данных по умолчанию
            processData: false, // важно - убираем преобразование строк по умолчанию
            data: formData,
        	  beforeSend: function() {
              $('body').append('<div id="fade"></div>');
              $('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();
        	  	$('#loader').fadeIn();

        	  },
        	  success: function(res) {
        	    		 $('#loader,#fade').fadeOut();
        	    		// document.location.href = 'http://helpservice16.ru/kredit';
        	    		setTimeout(function() {that.trigger("reset");}, 2000);
        	   },
	           error:  function(xhr, str){
	        		alert('Возникла ошибка: ' + xhr.responseCode);
	           }
        });


  }

}).validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
    rules: {
        confirm: {
            equalTo: "#password-2"
        }
    }
});

$('#anc_add_more').click(function(event) {
  $('#spn_inputs').append('<input name="attachfile[]" type="file" class="pasportphoto"  style="margin-bottom: 10px;">');
 });

$('#anc_add_more2').click(function(event) {
  $('#spn_inputs2').append('<input name="attachfile[]" type="file" class="pasportphoto"  style="margin-bottom: 10px;">');
 });

// Modal
$('.hidetextshow').click(function() {

	var popupid = $(this).attr('rel');

	$('#' + popupid).fadeIn();

	$('body').append('<div id="fade"></div>');
	$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();

	var popuptopmargin = ($('#' + popupid).height() + 10) / 2;
	var popupleftmargin = ($('#' + popupid).width() + 10) / 2;

	$('#' + popupid).css({
		'margin-top' : -popuptopmargin,
		'margin-left' : -popupleftmargin
	});
	return false;
});

$('#close, #close2, #close3, #close4').click(function() {

	$('#fade , #popuprel , #popuprel2 , #popuprel3, #popuprel4, #popuprel5 , #popuprel6 , #popuprel7, #popuprel8 , #popuprel9 , #popuprel10, #popuprel11, #popuprel12').fadeOut()
	return false;
});

});

</script>
</body>
</html>