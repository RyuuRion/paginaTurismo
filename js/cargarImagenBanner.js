function validarExt(){
    var archivoInput1= document.getElementById('archivoinput1');
    var archivoRuta= archivoInput1.Value;
    var extPermitidas= [".png"];

    if(!extPermitidas.exec(archivoRuta)){
        alert("asegurate de haber seleccionado un archivo PNG");

        archivoInput1.Value="";
        return false;
    }
    else{
        if(archivoInput1.file && archivoInput1.files[0]){
            var visor = new FileReader();

            visor.onload=function(e){
                document.getElementById('bannerEmpresa').innerHTML= '<img src="'+e.target.result+'" alt="imagen no cargada" id="banner-Empresa" width="480" height="1400">';
                visor.readAsDataURL(archivoInput1)
            };

        }
    }
};