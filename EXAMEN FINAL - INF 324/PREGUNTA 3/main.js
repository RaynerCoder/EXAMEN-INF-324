/************************************************* VARIABLES *****************************************/
var camara, escenario, Render;
var camaraControl;
var clock = new THREE.Clock();
var ambienteLight, light;
var figura; 
var miObjeto
/************************************************* FUNCIONES *****************************************/


/************************************************* FUNCION INICIO *****************************************/
function inicio(){
	var canvasWidth = window.innerWidth * 0.9;
	var canvasHeight = window.innerHeight * 0.9;

	// CAMARA
	camara = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 1, 80000);
	camara.position.set(-1,1,100);
	camara.lookAt(0,0,0);

	// LIGHTS
	light = new THREE.DirectionalLight(0xFFFFFF, 0.7);
	light.position.set( 1, 1, 1 );
	light.target.position.set(0, 0, 0);
	light.target.updateMatrixWorld();
    ambienteLight = new THREE.AmbientLight(0x111111);


	//RENDERIZADO
	Render = new THREE.WebGLRenderer({antialias: true });
	Render.setSize(canvasWidth, canvasHeight);
	Render.setClearColor(0x6d6e6e, 1.0);
	Render.gammaInput = true;
	Render.gammaOutput = true;
    

	//ADICIONAR AL CONTENEDOR DEL DIV EN EL HTML
	var container = document.getElementById('container');
	container.appendChild(Render.domElement);


	//CONTROL DEL MOUSE
	camaraControl = new THREE.OrbitControls(camara, Render.domElement);
	camaraControl.target.set(0, 0, 0);

    
    const grupo = new THREE.Group();



    //CARGAR NUEVO MODELO 1
    cargar_modelo();
    grupo.add(miObjeto);

    //CARGAR NUEVO MODELO 2
    cargar_modelo2();
    grupo.add(miObjeto);
    


    //ESCENARIO (agregamos la particula al escenario)
    escenario = new THREE.Scene();
    escenario.add(light);
    escenario.add(ambienteLight);
    escenario.add(grupo);   
}



function cargar_modelo(){
    //GEOMETRIA
    var miGeometria = new THREE.Geometry();

    var vertices = [
        [2,0,0],//0
        [2,5,0],//1
        [7,5,0],//2
        [7,0,0],//3
        [2,0,0],//4
    ];

    var vector_extraccion = [];
    for (i = 0; i < vertices.length; i++) {
        x = vertices[i][0];
        y = vertices[i][1];
        z = vertices[i][2];
        //Agregamos vertices al vector y  //Agregamos el vector a la geometria
        vector = new THREE.Vector3(x,y,z);
        miGeometria.vertices.push(vector);

    }

    
    //PINTAR DE COLOR LA GEOMETRIA
    miGeometria.faces.push(new THREE.Face3(4, 3, 2));
    miGeometria.faces.push(new THREE.Face3(2, 1, 0));
    miGeometria.faces.push(new THREE.Face3(0, 1, 2));
    miGeometria.faces.push(new THREE.Face3(2, 3, 4));

    //MATERIAL (agregamos un material para que el punto tenga color) 
    var material = new THREE.MeshBasicMaterial({color: 0xFF0000}); //Material de color rojo
    

    //OBJETO (creamos una figura - objeto con la geometria y el material)
    miObjeto = new THREE.Mesh(miGeometria, material); //Crea el objeto
}

function cargar_modelo2(){
    //GEOMETRIA
    var miGeometria = new THREE.Geometry();

    var vertices = [
        [2,0,10],//0
        [2,5,10],//1
        [7,5,10],//2
        [7,0,10],//3
        [2,0,10],//4
    ];

    for (i = 0; i < vertices.length; i++) {
        x = vertices[i][0];
        y = vertices[i][1];
        z = vertices[i][2];
        vector = new THREE.Vector3(x,y,z);
        miGeometria.vertices.push(vector);
    }

    
    //PINTAR DE COLOR LA GEOMETRIA
    miGeometria.faces.push(new THREE.Face3(4, 3, 2));
    miGeometria.faces.push(new THREE.Face3(2, 1, 0));
    miGeometria.faces.push(new THREE.Face3(0, 1, 2));
    miGeometria.faces.push(new THREE.Face3(2, 3, 4));


    //MATERIAL 
    var material = new THREE.MeshBasicMaterial({color: 0x6d6e6e}); 
    
    //OBJETO 
    miObjeto = new THREE.Mesh(miGeometria, material); 
}






























function animacion() {
	window.requestAnimationFrame(animacion);
	render_modelo();
}

function render_modelo() {
	var delta = clock.getDelta();
	camaraControl.update(delta);
	Render.render(escenario, camara);
}


/************************************************* MAIN *****************************************/

try {
	inicio();
	animacion();
} 
catch(e) {
	var errorReport = "Your program encountered an unrecoverable error, can not draw on canvas. Error was:<br/><br/>";
	$('#container').append(errorReport+e);
}
