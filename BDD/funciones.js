function afegir_dades(){

    var dades=$('#form_actualitzar').serialize();

    $.ajax({

        method:"POST",
        url:"insertar.php",
        data:dades,
        success: function(e){

            if(e==1){
                alert("Registre exitós");
                
                

            }else{
                alert("Error en el Registre");
            }


        }
    });

    return false;

}


function omplirModal_actualitzar(dades){


    d=dades.split('||');
    $("#id").val(d[0]);
    $("#nom").val(d[1]);
    $("#direccio").val(d[2]);
    $("#telefon").val(d[3]);
    $("#email").val(d[4]);
    $("#data").val(d[5]);
    $("#pais").val(d[6]);
    $("#mobil").val(d[7]);
    $("#estat").val(d[8]);
    $("#vehicle").val(d[9]);
}


function actualitzar_dades(){


    var dades= $("#form_actualitzar").serialize();

$.ajax({
    method:"POST",
    url:"actualitzar.php",
    data:dades,
    success: function(e){
        
    }
});
return false;
}