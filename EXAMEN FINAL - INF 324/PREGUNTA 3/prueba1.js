const geometry = new THREE.BoxGeometry( 1, 1, 1 );
const material = new THREE.MeshBasicMaterial( {color: 0x00ff00} );

const cubeA = new THREE.Mesh( geometry, material );
cubeA.position.set( 100, 100, 0 );

const cubeB = new THREE.Mesh( geometry, material );
cubeB.position.set( -100, -100, 0 );

//create a group and add the two cubes
//These cubes can now be rotated / scaled etc as a group
const group = new THREE.Group();
group.add( cubeA );
group.add( cubeB );

scene.add( group );

function cargar_modelo(){
    //GEOMETRIA
    var miGeometria = new THREE.Geometry();

    var vertices = [
        [2,0,0],//0
        [2,5,0],//1
        [7,5,0],//2
        [7,0,0],//3
        [2,0,0],//4

        [2,0,10],//5
        [2,5,10],//6
        [7,5,10],//7
        [7,0,10],//8
        [2,0,10],//9
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

    miGeometria.faces.push(new THREE.Face3(7, 6, 5));
    miGeometria.faces.push(new THREE.Face3(9, 8, 7));
    miGeometria.faces.push(new THREE.Face3(5, 6, 7));
    miGeometria.faces.push(new THREE.Face3(7, 8, 9));


    //MATERIAL (agregamos un material para que el punto tenga color) 
    var material = new THREE.MeshBasicMaterial({color: 0xFF0000}); //Material de color rojo
    
    
    //OBJETO (creamos una figura - objeto con la geometria y el material)
    miObjeto = new THREE.Mesh(miGeometria, material); //Crea el objeto
}