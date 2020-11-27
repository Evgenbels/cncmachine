window.addEventListener("load", function(){
  $('#moibutton').click(function(){ 
    alert('Pres Button');

/*
let response = await fetch('/article/fetch/logo-fetch.svg');

let blob = await response.blob(); // скачиваем как Blob-объект

// создаём <img>
let img = document.createElement('img');
img.style = 'position:fixed;top:10px;left:10px;width:100px';
document.body.append(img);

// выводим на экран
img.src = URL.createObjectURL(blob);

setTimeout(() => { // прячем через три секунды
  img.remove();
  URL.revokeObjectURL(img.src);
}, 3000);
**/
let res = fetch('http://www.mocky.io/v2/5944e07213000038025b6f30')
  .then((response) => {
    return response.json();
  })
  .then((data) => {
    console.log(data);
  });
console.log(res);
  });
  
}); 