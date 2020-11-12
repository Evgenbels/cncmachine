<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/nav.css">
<script src="js/jquery-3.4.1.min.js"></script>
<title>Моя CNC Machine</title>
</head>
<body>
<?php $a=0; include 'header_nav.php'; ?>
   <section>
      <table width="100%">
         <tr valign="top">
            <td width="17%" align="top">
               <?php include 'menu_nav.php'; ?>
            </td>         
            <td>
               <div class="block2">
						<h1>Прототип станка</h1>
						<img src="foto/cncmachine.png" alt="" id="prototip">
						<h1>Схема работы</h1>
						<img src="foto/bloc_shema.png" alt="" class="map1" usemap="#exparea">
				      <p><map id="exparea" name="exparea">
<!--      <area id="squidhead" shape="circle" coords="480,640,100" href="#" alt="Информация" 
data-maphilight='{"stroke":false,"fillColor":"ff0000","fillOpacity":0.6}'>  -->

				      <area id="squidhead" shape="rect" coords="80,30,440,104"  href="#win1" alt="Информация" title="структура БД">
				      <area id="squidhead" shape="rect" coords="80,210,440,290" href="#win2" alt="Информация" >
      				<area id="squidhead" shape="rect" coords="80,380,440,470" href="#win3" alt="Информация" >
      				</map>
      				</p>
               </div>
<!-- Модальное окно 1 -->
<a href="#x" class="overlay" id="win1"></a>   <!-- Это якорь  win1  -->
<div class="popup">
   <h2>Структура БД для программы PLPM_WX</h2>
   <table id="gde">
      <tr><td>имя БД <b>ак<font color="red">N</font><font color="gree">YY</font><font color="blue">M</font>.fb</b></td><td>, где <font color="red">N</font> -- номер АК </td></tr>   
      <tr><td></td><td>до 2012г.</td></tr>   
      <tr><td></td><td>1 -- АК1 (легковая)</td></tr>   
      <tr><td></td><td>2 -- АК2 (автобусная)</td></tr>   
      <tr><td></td><td>3 -- АК3 (грузовая)</td></tr>   
      <tr><td></td><td>4 -- АК4 (технологическая)</td></tr>   
      <tr><td></td><td>5 -- уч.Рекультивации (дорожная техника):</td></tr>   
      <tr><td></td><td><font color="gree">YY</font> последние 2 цифры года (20<b>17</b>->17<sub>10</sub>->11<sub>16</sub>)</td></tr>   
      <tr><td></td><td><font color="blue">M</font> номер месяца (декабрь 12<sub>10</sub>->C<sub>16</sub>)</td></tr>   
   </table>  
   <table id="opis">
      <th>Имя</th><th>Назначение</th>      
      <tr><td>cust</td><td>справочник предприятий</td></tr>
      <tr><td>custgrup</td><td>справочник групп предприятий</td></tr>
      <tr><td>fakt_to</td><td>фактически проведенные ТО</td></tr>
      <tr><td>filgdkin</td><td>температурные коэф.</td></tr>
      <tr><td>kadr</td><td>список людей</td></tr>
      <tr><td>kalendar</td><td>календарь</td></tr>
      <tr><td>kartochka</td><td>карточка учета пробегов АМ  для механиков</td></tr>
      <tr><td>operativ_d</td><td>оперативка</td></tr>
      <tr><td>park</td><td>список АМ</td></tr>
      <tr><td>plan_nar</td><td>План-наряд</td></tr>
      <tr><td>plpma</td><td>талоны</td></tr>
      <tr><td>plpmf</td><td>остатки топлива на начало месяца</td></tr>
      <tr><td>plpmo</td><td>сдача топлива</td></tr>
   </table> 
 
 	<a class="close" title="Закрыть" href="#close"></a>
</div>
<!-- Модальное окно 2 -->
<a href="#x" class="overlay" id="win2"></a>   <!-- Это якорь  win2  -->
<div class="popup">
   <h2>Структура БД для программы SERVIS_OTIZ_TK</h2>
   <table id="gde">
      <tr><td>имя БД <b>base-<font color="gree">YY</font><font color="blue">M</font>.fb</b></td><td>, где <font color="gree">YY</font> последние 2 цифры года (20<b>17</b>->17<sub>10</sub>->11<sub>16</sub>)</td></tr>   
      <tr><td></td><td><font color="blue">M</font> номер месяца (декабрь 12<sub>10</sub>->C<sub>16</sub>)</td></tr>   
   </table>  
   
   <table id="opis">
      <th>Имя</th><th>Назначение</th>      
      <tr><td>BRIGADIR</td><td>Список бригадиров</td></tr>
      <tr><td>CEX_KOEF</td><td>Для начисления 166 ВО</td></tr>
      <tr><td>CUST</td><td>Список предприятий</td></tr>
      <tr><td>CUSTN</td><td>Список предприятий групповой</td></tr>
      <tr><td>DOPL</td><td>Доплаты</td></tr>
      <tr><td>DOPOTCH</td><td>SQL запросы для выборок</td></tr>
      <tr><td>DVIGEN</td><td>Передвижение людей по участкам</td></tr>
      <tr><td>EXPO_VO</td><td>справочник по ВО для экспорта</td></tr>
      <tr><td>FIL_ALL</td><td>Услуги</td></tr>
      <tr><td>FIL_ALLD</td><td>временная</td></tr>
      <tr><td>FN</td><td>ЗП развернутая</td></tr>
      <tr><td>FN_LICHENIA</td><td>лишения в ЗП</td></tr>
      <tr><td>FN_P</td><td>ЗП</td></tr>
      <tr><td>FN_P_UVOL</td><td>временная</td></tr>
      <tr><td>FN_PREM</td><td>премия в ЗП</td></tr>
      <tr><td>FN_PROC</td><td>Прочие начисления в ЗП</td></tr>
      <tr><td>FN_RO</td><td>временная</td></tr>
      <tr><td>IRAS</td><td>Тарифы на услуги</td></tr>
      <tr><td>KADR</td><td>Список людей</td></tr>
   </table> 
 
 	<a class="close" title="Закрыть" href="#close"></a>
</div>

<!-- Модальное окно 3 -->
<a href="#x" class="overlay" id="win3"></a>   <!-- Это якорь  win3  -->
<div class="popup">
   <table id="opis">
      <th>Имя</th><th>Назначение</th>      
      <tr><td>LUDI</td><td>Кол-во людей</td></tr>
      <tr><td>MEXANIK</td><td>Расположение мех-ма</td></tr>
      <tr><td>OGIDANIE</td><td>Ожидаемая дата завершения ремонта</td></tr>
      <tr><td>PRICH</td><td>причина ремонта</td></tr>
      <tr><td>REMONT</td><td>список ремонтов за период</td></tr>
      <tr><td>REMONTS</td><td>накопительный список ремонтов</td></tr>
      <tr><td>ZAKREP</td><td>Кол-во закрепленный водителей</td></tr>
      <tr><td>ZAPCH</td><td>список запчастей со склада</td></tr>
   </table> 
 
 	<a class="close" title="Закрыть" href="#close"></a>
</div>

            </td>         
         </tr>        
      </table>   
   </section>
<?php include 'footer_nav.php'; ?>
</body>
</html>