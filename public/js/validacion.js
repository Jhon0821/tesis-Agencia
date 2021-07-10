function Validacion(){
    var nombre=document.getElementById('txtname');


    if(nombre.value==''){

        document.getElementById('errornombre').innerHTML='<font color =#ff000> El Campo es Obligatorio(*)<font>';
        nombre.focus();
        return false;
    }else{
        document.getElementById('errornombre').innerHTML='';
    }

    return true; 
}