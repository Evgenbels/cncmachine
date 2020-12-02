window.addEventListener("load", function() {
    $('#mbutton').click(async function() {
        //    alert('Pres Button');
        /*
        //let url='foto_ali/max6675.jpg';
        let url='imageprg.php?id=21&npp=0';
        let response = await fetch(url);

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
        */
        //let res = fetch('http://www.mocky.io/v2/5944e07213000038025b6f30')
        /*
        let res = fetch('filejson/exp001.json')
          .then((response) => {
            return response.json();
          })
          .then((data) => {
            console.log(data);
          });
        //alert('console.log(res)');
        let sjson=JSON.parse(res);
        alert(sjson[color]);
        */
        //let url='http://www.mocky.io/v2/5944e07213000038025b6f30';
        //let url='filejson/exp001.json';
        let url = 'prg_json.php';
        let response = await fetch(url);
        if (response.ok) { // если HTTP-статус в диапазоне 200-299
            // получаем тело ответа (см. про этот метод ниже)
            let json = await response.json();
            console.log(json);
            console.log(json.a0);
            /*
              console.log("Ok ");
              console.log(json);
              console.log(json.array[0]);
              console.log(json.color);
              console.log(json.boolean);
              console.log(json.number);
              console.log(json.string);
              console.log(json.object.a);
              console.log(json.color);
            */
        } else {
            alert("Ошибка HTTP: " + response.status);
        }
    });
});