
function cargar_modelo(){
    //GEOMETRIA
    var miGeometria = new THREE.Geometry();
    var vertices = [[1, 1, 0], [25.5, 1, 0], [25.5, 13.5, 0], [1, 13.5, 0], [1, 1, 0]];
    for (i = 0; i < vertices.length; i++) {
        x = vertices[i][0];
        y = vertices[i][1];
        z = vertices[i][2];
        //Agregamos vertices al vector
        vector = new THREE.Vector3(x,y,z);
        //Agregamos el vector a la geometria
        miGeometria.vertices.push(vector);
    }

    var vertices = [[1, 1, 1], [25.5, 1, 1], [25.5, 1, 0]];
    for (i = 0; i < vertices.length; i++) {
        x = vertices[i][0];
        y = vertices[i][1];
        z = vertices[i][2];
        //Agregamos vertices al vector
        vector = new THREE.Vector3(x,y,z);
        //Agregamos el vector a la geometria
        miGeometria.vertices.push(vector);
    }



    var vertices = [[25.5, 1, 1], [25.5, 13.5, 1], [25.5, 13.5, 0]];
    for (i = 0; i < vertices.length; i++) {
        x = vertices[i][0];
        y = vertices[i][1];
        z = vertices[i][2];
        //Agregamos vertices al vector
        vector = new THREE.Vector3(x,y,z);
        //Agregamos el vector a la geometria
        miGeometria.vertices.push(vector);
    }




    var vertices = [[25.5, 13.5, 1], [1, 13.5, 1], [1, 13.5, 0]];
    for (i = 0; i < vertices.length; i++) {
        x = vertices[i][0];
        y = vertices[i][1];
        z = vertices[i][2];
        //Agregamos vertices al vector
        vector = new THREE.Vector3(x,y,z);
        //Agregamos el vector a la geometria
        miGeometria.vertices.push(vector);
    }

    var vertices = [[1, 13.5, 1], [1, 1, 1]];
    for (i = 0; i < vertices.length; i++) {
        x = vertices[i][0];
        y = vertices[i][1];
        z = vertices[i][2];
        //Agregamos vertices al vector
        vector = new THREE.Vector3(x,y,z);
        //Agregamos el vector a la geometria
        miGeometria.vertices.push(vector);
    }



    var vertices = [[1, 13.5, 1], [1, 1, 1]];
    for (i = 0; i < vertices.length; i++) {
        x = vertices[i][0];
        y = vertices[i][1];
        z = vertices[i][2];
        //Agregamos vertices al vector
        vector = new THREE.Vector3(x,y,z);
        //Agregamos el vector a la geometria
        miGeometria.vertices.push(vector);
    }
