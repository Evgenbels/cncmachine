
var canv=document.getElementById("canvas");
//ctx=canv.getContext("3d");      				//тип CANVAS 2D
var wi=window.innerWidth;
var hi=window.innerHeight;
canv.width=wi;					//размер на весь размер браузера
canv.height=hi;				//что не было полос прокрутки в элеменет CANVAS добавить style="display: block;"

var datgui = {
	rotationX:0,
	rotationY:0,
	rotationZ:0
}

var gui = new dat.GUI();
gui.add(datgui,'rotationX').min(-0.2).max(0.2).step(0.001);
gui.add(datgui,'rotationY').min(-0.2).max(0.2).step(0.001);
gui.add(datgui,'rotationZ').min(-0.2).max(0.2).step(0.001);

var renderer = new THREE.WebGLRenderer({canvas : canv});
renderer.setClearColor(0x000000);

var scene = new THREE.Scene();

var camera = new THREE.PerspectiveCamera(45,wi/hi, 0.1, 5000);
camera.position.set(0,0,1000);

var light = new THREE.AmbientLight(0xffffff);
scene.add(light);

//var geom = new THREE.PlaneGeometry(300,300,12,12);
var geom = new THREE.SphereGeometry(200,12,12);
//var mat = new THREE.MeshBasicMaterial({color: 0x00ff00, wireframe: true});
var mat = new THREE.MeshBasicMaterial({color: 0xffffff, wireframe: false, vertexColors: THREE.FaceColors});
var i;
for (i=0; i<geom.faces.length; i++ ) {
	geom.faces[i].color.setRGB(Math.random(),Math.random(),Math.random());
}
var mesh = new THREE.Mesh(geom,mat);
scene.add(mesh);

function loop() {
//mesh.position.x +=1;
mesh.rotation.x += datgui.rotationX;
mesh.rotation.y += datgui.rotationY;
mesh.rotation.z += datgui.rotationZ;
renderer.render(scene,camera);
requestAnimationFrame(function () {loop();});
}

loop();