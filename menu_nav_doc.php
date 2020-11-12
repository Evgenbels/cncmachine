<div id="blok_menu">
<?php global $var  ?>
<p>Справочники</p>
<ul class="menu_nav">
   <li><a href="documents.php?var=prof" <?php if ($var=="prof") echo 'class="selected"' ?> >Светодиод&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;</a></li>
   <li><a href="documents.php?var=prof" <?php if ($var=="prof") echo 'class="selected"' ?> >Кнопка&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;</a></li>
   <li><a href="documents.php?var=rabic" <?php if ($var=="rabic") echo 'class="selected"' ?> >ATMega8&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;</a></li>
   <li><a href="documents.php?var=paneli" <?php if ($var=="paneli") echo 'class="selected"' ?> >Arduino&emsp;</a></li>
<!--   <li><a href="documents.php?var=kamen" <?php if ($var=="kamen") echo 'class="selected"' ?> >Шпиндель&emsp;&emsp;&nbsp;&nbsp;</a></li>  -->
</ul>
</div>