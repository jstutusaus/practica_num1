<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Currículum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/curriculum/curriculum.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="materialize.min.css">

    <script src="funciones.js"></script>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="materialize.min.js"></script>





  </head>
  <body>


  <div class="col 16">

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Direcció</th>
                <th>Telefon</th>
                <th>Correu</th>
                <th>Data</th>
                <th>País</th>
                <th>Mòbil</th>
                <th>Estat</th>
                <th>Vehicle</th>
            </tr>
        </thead>
        <?php 
        include 'databaseCV.php';
        $sql=" SELECT * FROM DB_CV_1 ";
        $execucio=mysqli_query($conn1, $sql);
        while($fila=mysqli_fetch_array($execucio)){

            $dades=$fila[0]."||".
            $fila[1]."||".
            $fila[2]."||".
            $fila[3]."||".
            $fila[4]."||".
            $fila[5]."||".
            $fila[6]."||".
            $fila[7]."||".
            $fila[8]."||".
            $fila[9];
        
        ?>
        
        
        <tbody>
            <tr>
               <td><?php echo $fila[0]; ?></td> 
               <td><?php echo $fila[1]; ?></td> 
               <td><?php echo $fila[2]; ?></td> 
               <td><?php echo $fila[3]; ?></td> 
               <td><?php echo $fila[4]; ?></td> 
               <td><?php echo $fila[5]; ?></td> 
               <td><?php echo $fila[6]; ?></td> 
               <td><?php echo $fila[7]; ?></td> 
               <td><?php echo $fila[8]; ?></td> 
               <td><?php echo $fila[9]; ?></td> 
               <td><button class="btn-smal modal-trigger"  data-target="modal1" id="veure" onclick="omplirModal_actualitzar('<?php echo $dades ?>');">EDITAR</button></td>
            </tr>
            
        </tbody>
        
        <?php 
        
    }
        
        ?>




    </table>







  </div>

  


  <div id="modal1" class="modal">
    <div class="modal-content">
    <form id=form_actualitzar method="POST">



                    <div id="datospersonales">
                        
                        
                        <h4><strong>Datos personales</strong></h4>
                        <hr>

                        <div id=dades-atr>
                        <span class="material-symbols-outlined">
                            
                        </span>
                        <input type="text" name="id" value="" id="aid" placeholder="ID"></input>
                        </div>

                        <div id=dades-atr>
                        <span class="material-symbols-outlined">
                            person
                        </span>
                        <input type="text" name="nom" value="" id="anom" placeholder="nom"></input>
                        </div>

                        <div id=dades-atr>
                        <span class="material-symbols-outlined">
                            house
                        </span>
                        <input type="text" name="direccio" value="" id="adireccio" placeholder="direccio"></input>
                        </div>
                        <div id=dades-atr>
                        <span class="material-symbols-outlined">
                            phone_enabled
                        </span>
                        <input type="number" name="telefon" value="" id="atelefon" placeholder="telefon"></input>
                        </div>
                        <div id=dades-atr>
                        <span class="material-symbols-outlined">
                            alternate_email
                        </span>
                        <input type="email" name="correu" value="" id="acorreu" placeholder="email"></input>
                        </div>

                        <div id=dades-atr>
                        <span class="material-symbols-outlined">
                            calendar_month
                        </span>
                        <input type="date" name="data" value="" id="adata" placeholder="Data"></input>
                        </div>

                        <div id=dades-atr>
                        <span class="material-symbols-outlined">
                            flag
                        </span>
                        <input type="text" name="pais" value="" id="apais" placeholder="Pais"></input>
                        </div>

                        <div id=dades-atr>
                        <span class="material-symbols-outlined">
                            smartphone
                        </span>
                        <input type="number" name="mobil" value="" id="amobil" placeholder="Mobil"></input>
                        </div>

                        <div id=dades-atr>
                        <span class="material-symbols-outlined">
                            wc
                        </span>
                        <input type="text" name="estat" value="" id="aestat" placeholder="Estat"></input>
                        </div>

                        <div id=dades-atr>
                        <span class="material-symbols-outlined">
                            directions_car
                        </span>
                        <input type="text" name="vehicle" value="" id="avehicle" placeholder="Vehicle"></input>
                        </div>
                        <input type="submit" name="btn_actualitzar" value="Actualitzar" id="Actualitzar" placeholder="">Actualitzar</input>
                        
                        <br>
                    </div>
                </form>

    </div>
    <div>
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Agree</a>
    </div>
  </div>

<script type="text/javascript">

    $(document).ready(function(){

        $("#Actualitzar").on('click',function(e){
                e.preventDefault();
            actualitzar_dades();
            });



});

    



</script>



<script type="text/javascript">
            
    $(document).ready(function(){
        $("#actualitzar").on('click',function(e){
            e.preventDefault();
            afegir_dades();
        });
    });

</script>
        
<script>

$(document).ready(function(){
    M.AutoInit();
});
</script>
  </body>
</html>

