<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/nav.css">
<link rel="stylesheet" href="css/programs.css">
<script src="js/jquery-3.4.1.min.js"></script>
<title></title>
</head>
<body>
<?php $a=5; include 'header_nav.php'; ?>
<section>
<div  id="formexp" >
   <div id="bl1">
		<h1>Таблица компонентов</h1>
		<table id="tabrezbd">
			<head>
				<th>1</th>
				<th>2</th>
				<th>3</th>
				<th>4</th>
			</head>
			<tr>
				<td>00</td>
				<td>01</td>
				<td>02</td>
				<td>03</td>
			</tr>
			<tr>
				<td>11</td>
				<td>12</td>
				<td>13</td>
				<td>14</td>
			</tr>
			<tr>
				<td>20</td>
				<td>21</td>
				<td>22</td>
				<td>23</td>
			</tr>
		</table>
	</div>
	<div id="bl2">   
	<form>
  		<fieldset>
    	<legend>Контактная информация</legend>
    	<label for="name">Имя <em>*</em></label><input type="text" id="name">
    	<label for="email">E-mail</label><input type="email" id="email">
    	</fieldset>
    	<fieldset>
    	<legend>Дата и Время</legend>
    	<p><label for="fdata">Дата</label><input type="date" id="fdata">
    	<label for="fdatatime">Дата_время</label><input type="datetime-local" id="fdatatime">
    	<label for="ftime">Время</label><input type="time" id="ftime"></p>
    	<p><label for="fweek">Неделя</label><input type="week" id="fweek">
    	<label for="fmonth">Месяц</label><input type="month" id="fmonth"></p>
    	</fieldset>
    	<fieldset>
    	<legend>Отметки</legend>
    	<label for="fchek">Отметка</label><input type="checkbox" id="fchek">
    	<label for="fradio1">Рад.мет1</label><input type="radio" name="rad1" id="fradio1">
    	<label for="fradio2">Рад.мет2</label><input type="radio" name="rad1" id="fradio2">
    	<label for="fradio3">Рад.мет3</label><input type="radio" name="rad1" id="fradio3">
    	<label>Интервал<input type="range" id="fr3"></label></p>
    	</fieldset>
    	<fieldset>
    	<legend>Разное</legend>
    	<p><label>Номер<input type="number" id="fr1"></label>
    	<label>Пароль<input type="password" id="fr2"></label>
    	<p><label>Поиск<input type="search" id="fr4"></label>
    	<label>URL<input type="url" id="fr5"></label></p>
  		</fieldset>
    	<fieldset>
    	<legend>Специальные</legend>
    	<p><label>Цвет<input type="color" id="fs1"></label>
    	<label>Файл<input type="file" id="fs2"></label>
    	<label>Картинка кнопка<input type="image" name="image" src="https://mdn.mozillademos.org/files/2917/fxlogo.png" width="50" id="fs3"></label></p>
    	<textarea cols="30" rows="10">Пример</textarea>
    	<select size="3" multiple name="hero[]">
    		<option disabled>Выберите героя</option>
		   <option value="Чебурашка">Чебурашка</option>
    		<option selected value="Крокодил Гена">Крокодил Гена</option>
    		<option value="Шапокляк">Шапокляк</option>
    		<option value="Крыса Лариса">Крыса Лариса</option>
   	</select>
    	<select name="hero1[]">
    		<option disabled>Выберите героя</option>
		   <option value="Чебурашка">Чебурашка</option>
    		<option selected value="Крокодил Гена">Крокодил Гена</option>
    		<option value="Шапокляк">Шапокляк</option>
    		<option value="Крыса Лариса">Крыса Лариса</option>
   	</select>
   	<select>
   		<optgroup label="Цвет">
    			<option value="c1">Апельсиновый</option>
    			<option value="c2">Лимонный</option>
    			<option value="c3">Персиковый</option>
   		</optgroup>
   		<optgroup label="Тон">
    			<option value="s1">Светлый</option>
    			<option value="s2">Нормальный</option>
    			<option value="s3">Темный</option>
   		</optgroup>
   	</select>
  		</fieldset>
		<p><input type="button" value="Работать">
		<input type="submit" value="Отправить">
		<input type="reset" value="Очистить"></p>
		<button id="moibutton">Button</button>
	</form>

	</div>
	<div id="bl3">
		<h1>Пример FORM -- GET и POST</h1>
		<div id="prget">
			<p>  </p>
			<form action="moiget.php" method="get">
				<fieldset>
    				<legend>Пример Get</legend>
    				<p><label>Имя 1<input type="text" id="name1" name="name1"></label></p>
    				<p><label>Имя 2<input type="text" id="name2" name="name2"></label></p>
    			</fieldset>
				<input type="submit" value="Отправить GET">
			</form>
		</div>
		<div id="prpost">
			<p>  </p>
			<form enctype="multipart/form-data" action="moipost.php" method="post">
				<fieldset>
    				<legend>Пример Post</legend>
<!--    				<p><label>Имя 3<input type="text" id="name3" name="name3" ></label></p>
    				<p><label>Имя 4<input type="text" id="name4" name="name4"></label></p>-->
<!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" value="Отправить файл" />    			</fieldset>
<!--				<input type="submit" value="Отправить POST">-->
			</form>
		</div>
	</div>
</div>
</section>
<?php include 'footer_nav.php'; ?>
</body>
<script src="js/programs.js"></script>
</html>