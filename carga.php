<?php
/*     $_FILES['fichero']['name'];

    echo$_FILES['fichero']['name']."<br>";
    echo$_FILES['fichero']['tmp_name']."<br>";
    echo$_FILES['fichero']['type']."<br>";
    echo$_FILES['fichero']['error']."<br>";
    echo$_FILES['fichero']['size']."<br>";
     */

if(mime_content_type($_FILES['fichero']['tmp_name']) != "application/pdf" ){
    echo "tipo de fichero no admitido";
    exit();
}


if($_FILES['fichero']['size']/1024>3072){
    echo "archivo demasiado grande";
    exit();
}

if(!file_exists("archivos")){
    if(!mkdir("archivos",0777)){  
        echo "error al crear el directorio";
        exit();
    }
}


chmod("archivos",0777);

if(move_uploaded_file($_FILES['fichero']['tmp_name'],"archivos/".$_FILES['fichero']['name'])){
    echo "archivo subido con exito";
}else{
    echo "archivo no se subió";
}