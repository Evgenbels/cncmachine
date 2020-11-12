<div id="blok_menu">
<?php global $var  ?>
<p>Механика</p>
<ul class="menu_nav">
   <li><a href="index.php?var=prof" <?php if ($var=="prof") echo 'class="selected"' ?> >Рама&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;</a></li>
   <li><a href="index.php?var=rabic" <?php if ($var=="rabic") echo 'class="selected"' ?> >Стол&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;</a></li>
   <li><a href="index.php?var=paneli" <?php if ($var=="paneli") echo 'class="selected"' ?> >Привода осей&emsp;</a></li>
   <li><a href="index.php?var=kamen" <?php if ($var=="kamen") echo 'class="selected"' ?> >Шпиндель&emsp;&emsp;&nbsp;&nbsp;</a></li>
</ul>
<p>Электроника</p>
<ul class="menu_nav">
   <li><a href="index.php?var=besed" <?php if ($var=="besed") echo 'class="selected"' ?> >Пульт&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;</a></li>
   <li><a href="index.php?var=naves" <?php if ($var=="naves") echo 'class="selected"' ?> >Плата&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <li><a href="index.php?var=lesn" <?php if ($var=="lesn") echo 'class="selected"' ?> >Блоки питания&nbsp;</a></li>
</ul>
<p>Справочники</p>
<ul class="menu_nav">
   <li><a href="index.php?var=besed" <?php if ($var=="besed") echo 'class="selected"' ?> >Электроника&emsp;&nbsp;</a></li>
</ul>
</div>