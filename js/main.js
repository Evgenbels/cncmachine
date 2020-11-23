
function onTDClick(){
//    alert("Кликс!");
/*     var trElem = $(this).closest("tr");// grabs the button's parent tr element
        var firstTd = $(trElem).children("td")[0]; //takes the first td which would have your Id
        alert($(firstTd).text())
*/
     var trElem = $(this).closest("td");// grabs the button's parent tr element
//        var firstTd = $(trElem).children("td")[0]; //takes the first td which would have your Id
//        alert($(trElem).text())
        
     var row = $(this).closest("tr");
     var indexr = row.parent().children("tr").index(row);
     var indexc = trElem.parent().children("td").index(trElem);
//alert(index);  
  console.log(indexr+'  '+indexc);
//  document.getElementById('miimag').setAttribute("src","foto/LED.jpg");
//  $('#miimag').attr("src","foto/LED.jpg");
  console.log('id='+row.find('td:eq(1)').html());
  $('#miimag0').attr("src","imageprg.php?id="+row.find('td:eq(1)').html());
//  document.location.href="index.php";

   if (event.ctrlKey) {

let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
width=600,height=300,left=100,top=100`;

open('/index.php', 'test', params);

    alert('нажат Ctrl');
  }
  if (event.altKey) {
//    $('.popup-window').popup(); //запускаем функцию на наш блок с формой
//    alert('нажат Alt');
  document.location.href = "tabl_elem_row.php";
  }
  if (event.shiftKey) {
    alert('нажат Shift');
  }
/*  
var result = prompt("Enter you age:", "20");
              if(result != null)  {
                  alert("Your age is " + result);
              }  
*/  
}
window.addEventListener("load", function(){
  var table = document.getElementById('takompl');
  for (i=0; i < table.rows.length; i++) {
//        console.log(i);
    for (j=0; j < table.rows[i].cells.length; j++) {
        table.rows[i].cells[j].onclick = onTDClick;
    }
  }
  $('.backpopup,.close').click(function(){ //событие клик на тень и крестик - закрываем окно и тень:
    $('.popup-window').fadeOut();
    $('.backpopup').fadeOut();
  });
  $( "#target" ).contextmenu(function() {
    alert( "Вызвано событие .contextmenu()" );
    return false;
  });
  var swiper = new Swiper('.swiper-container', {
    pagination: {
      el: '.swiper-pagination',
      type: 'fraction',
      },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
      }
    });
}); 

$.fn.popup = function() {   //функция для открытия всплывающего окна:
      this.css('position', 'absolute').fadeIn();  //задаем абсолютное позиционирование и эффект открытия
      //махинации с положением сверху:учитывается высота самого блока, экрана и позиции на странице:
      this.css('top', ($(window).height() - this.height()) / 2 + $(window).scrollTop() + 'px');
      //слева задается отступ, учитывается ширина самого блока и половина ширины экрана
      this.css('left', ($(window).width() - this.width()) / 2  + 'px');
      //открываем тень с эффектом:
      $('.backpopup').fadeIn();
    }
