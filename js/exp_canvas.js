
var canv=document.getElementById("canvas");
ctx=canv.getContext("2d");      				//тип CANVAS 2D
canv.width=window.innerWidth;					//размер на весь размер браузера
canv.height=window.innerHeight;				//что не было полос прокрутки в элеменет CANVAS добавить style="display: block;"

var x=50;
var n=1;
ctx.fillStyle="#007f7f";						//устанорвка цвера области
ctx.fillRect(x,50,100,100);					//прямоугольник  X, Y, lenX, lenY  отсчет от верхнего левого угла

/*
setInterval(function () {
ctx.fillStyle="#ffffff";
ctx.fillRect(x,50,100,100);
x+=n;
ctx.fillStyle="#007f7f";
ctx.fillRect(x,50,100,100);
if (x>500) n=-1;
if (x<50) n=1;
},10)
*/

ctx.strokeStyle="#007f7f";						//устанорвка цвера линии
ctx.lineWidth=10;									//толщина линии
ctx.strokeRect(50,170,100,100);				//прямоугольник  X, Y, lenX, lenY  отсчет от верхнего левого угла

ctx.scale(2,2);    								//все последующие координаты X*2 и Y*2
ctx.rotate(0.2);									//все последующие координаты поварачивать на 0.2 (в радианах)

ctx.arc(250,230,50,0,Math.PI,false);		//круг (дуга)  X, Y, R ,угол начала, угол окончания, направление против часов
ctx.stroke();										//отобразить дугу
//ctx.fill();										//отобразить круг

ctx.scale(0.5,0.5);
ctx.rotate(-0.2);

ctx.beginPath();									//Начать фигуру
ctx.moveTo(350,170);								//Переместить точку в X,Y
ctx.lineTo(450,170);								//Провести линию до X,Y
ctx.lineTo(450,270);								//
//ctx.lineTo(350,170);							//предполагалось замкнуть фигуру ноэто не корректно
ctx.closePath();									//замкнуть фигуру (провести линию до начала)
ctx.stroke();										//отобразить линию
/*
var grad=ctx.createLinearGradient(500,0,700,0);		//Градиент
grad.addColorStop("0","magenta");
grad.addColorStop(".50","blue");
grad.addColorStop("1","red");
ctx.fillStyle=grad;								//Применить градиент цвета
*/
ctx.font="bold 30px Georgia";					//параметры шрифта
ctx.fillText("Привет!",500,200);				//вывод техта в координатах X, Y (левый нижний угол области вывода текста)

canv.addEventListener('mousedown',function (e) {				//реакция на событие нажата кнопка мыши
	ctx.beginPath();
	ctx.arc(e.clientX,e.clientY,30,0,Math.PI*2);
	ctx.fill();
});

document.addEventListener('keydown',function (e) {				//реакция на событие нажата кнопка клавиатуры
	console.log(e.keyCode);						//вывод на консоль
	if (e.keyCode==27) {
	// чтото делать при нажатии ESC
	}
});


