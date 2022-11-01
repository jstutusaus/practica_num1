<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Currículum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/curriculum/curriculum.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    <script src="funciones.js"></script>
<script src="jquery-3.6.0.min.js"></script>
<script src="materialize.min.js"></script>





  </head>
  <body>


        






    <div class="container">
        <div class="row-md-12" id="titol">
          <h1 class="titol">Germà Rosset</h1>
        </div>
      <img src="assets/curriculum/fotocurriculum.jpeg" class="img-fluid" id="imatgerodona">
        
      
      
      
      <div class="row" id="tabla_registros">
            <div class="col-md-4">

            <button class="btn-smal modal-trigger"  data-target="modal1" id="veure"  onclick="omplirModal_actualitzar('<?php echo $dades ?>')";>EDITAR</button>
            
        <form id=dadesper method="POST">




        <?php 
        include 'databaseCV.php';
        $sql=" SELECT * FROM DB_CV_1 WHERE id = (SELECT MAX(id) FROM DB_CV_1)";
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
        <div id="datospersonales">
            
            <span class="material-symbols-outlined">
                double_arrow
            </span>
            <h4><strong>Datos personales</strong></h4>
            <hr>
            <div id="carac">
                <span class="material-symbols-outlined">
                person
                </span>
                <h6><?php echo $fila[1]; ?></h6>
                <span class="material-symbols-outlined">
                    house
                </span>
                <h6><?php echo $fila[2]; ?></h6>
                <span class="material-symbols-outlined">
                    phone_enabled
                </span>
                <h6><?php echo $fila[3]; ?></h6>
                <span class="material-symbols-outlined">
                    alternate_email
                </span>
                <h6><?php echo $fila[4]; ?></h6>
                <span class="material-symbols-outlined">
                    calendar_month
                </span>
                <h6 ><?php echo $fila[5]; ?></h6>
                <span class="material-symbols-outlined">
                    flag
                </span>
                <h6><?php echo $fila[6]; ?></h6>
                <span class="material-symbols-outlined">
                    smartphone
                </span>
                <h6><?php echo $fila[7]; ?></h6>
                <span class="material-symbols-outlined">
                    wc
                </span>
                <h6><?php echo $fila[8]; ?></h6>
                <span class="material-symbols-outlined">
                    directions_car
                </span>
                <h6><?php echo $fila[9]; ?></h6>
            </div>
                <br>
        </div>

        <?php }?>  
        </form>

                
                <div id="habilidades">
                    <span class="material-symbols-outlined">
                        double_arrow
                    </span>
                    <h4><strong>Habilidades</strong></h4>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <h6>Disciplinado</h6>
                            <h6>Liderazgo</h6>
                            <h6>Visionario</h6>
                            <h6>Habilidad numérica</h6>
                            <h6>Relaciones públicas</h6>
                        </div>
                        <div class="col">
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                    </div>
                                </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div id="Idiomas">
                    <span class="material-symbols-outlined">
                        double_arrow
                    </span>
                    <h4><strong>Idiomas</strong></h4>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <h6>Español</h6>
                            <h6>Inglés</h6>
                            <h6>Francés</h6>
                            <h6>Portugués</h6>
                            <br>
                        </div>
                        <div class="col">
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                    </div>
                                </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="80" style="width:80%">
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="80" style="width:80%">
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="50" style="width:50%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="informatica">
                    <span class="material-symbols-outlined">
                        double_arrow
                    </span>
                    <h4><strong>Informática</strong></h4>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <h6>Microsoft Excel</h6>
                            <h6>Microsoft Word</h6>
                            <h6>Software Delbol</h6>
                            <h6>Contalux</h6>
                            <h6>Cegit</h6>
                            <br>
                        </div>
                        <div class="col">
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                    </div>
                                </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100" style="width:20%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="competencias">
                    <span class="material-symbols-outlined">
                        double_arrow
                    </span>
                    <h4><strong>Competencias</strong></h4>
                    <hr>
                    <span class="material-symbols-outlined">
                        arrow_right
                    </span>
                    <h6>Comunicación</h6>
                    <span class="material-symbols-outlined">
                        arrow_right
                    </span>
                    <h6>Trabajo en equipo</h6>
                    <br>
                </div> 
            </div>
            <div class="col-md-8">
                <div id="perfil">
                    <span class="material-symbols-outlined">
                        double_arrow
                    </span>
                    <h4><strong>Perfil</strong></h4>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <br>
                </div> 
                <div id="experiencias">
                    <span class="material-symbols-outlined">
                        double_arrow
                    </span>
                    <h4><strong>Experiencias de trabajo</strong></h4>
                    <hr>
                    <div class="row">
                        <div class="col"><h8>01/2017 - Presente</h8></div>
                        <div class="col">
                            <p><strong>Consultor SAP</strong><br>Bunge Cono Bur</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque blandit fringilla blandit. Nulla pretium sapien justo, quis blandit justo egestas sit amet. Sed id erat id leo tristique fermentum a a dolor.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"><h8>08/2016 - 12/2016</h8></div>
                        <div class="col">
                            <p><strong>Consultor SAP FICO Sr.</strong><br>Softlek - La Plata, Buenos Aires</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit:</p>
                            <ul>
                                    <li><p>Banco hipotecario</p></li>
                                    <li><p>Pc Arts Argentina</p></li>
                                    <li><p>Laboratorios Sanofi Auentis</p></li>
                                    <li><p>Investigación y desarrollo de casos de estudio sobre parametrización y aplicación del módulo TRM - PlazosFijos</p></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col"><h8>01/2015 - 07/2016</h8></div>
                        <div class="col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                    </div>
                    <br>
                </div> 
                <div id="educacion">
                    <span class="material-symbols-outlined">
                        double_arrow
                    </span>
                    <h4><strong>Educación</strong></h4>
                    <hr>
                    <div class="row">
                        <div class="col"><h8>08/2009 - Presente</h8></div>
                        <div class="col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                    </div>
                </div>


            </div>
        </div>
<!-- Modal-->


<div id="modal1" class="modal">
    <div class="modal-content">
    <form id=form_actualitzar method="POST">



        <div id="datospersonales">
            
            
            <h4><strong>Datos personales</strong></h4>
            <hr>

            

            <div id=dades-atr>
            <span class="material-symbols-outlined">
                person
            </span>
            <input type="text" name="nom" value="" id="nom" placeholder="nom"></input>
            </div>

            <div id=dades-atr>
            <span class="material-symbols-outlined">
                house
            </span>
            <input type="text" name="direccio" value="" id="direccio" placeholder="direccio"></input>
            </div>
            <div id=dades-atr>
            <span class="material-symbols-outlined">
                phone_enabled
            </span>
            <input type="number" name="telefon" value="" id="telefon" placeholder="telefon"></input>
            </div>
            <div id=dades-atr>
            <span class="material-symbols-outlined">
                alternate_email
            </span>
            <input type="email" name="correu" value="" id="correu" placeholder="email"></input>
            </div>

            <div id=dades-atr>
            <span class="material-symbols-outlined">
                calendar_month
            </span>
            <input type="date" name="data" value="" id="data" placeholder="Data"></input>
            </div>

            <div id=dades-atr>
            <span class="material-symbols-outlined">
                flag
            </span>
            <input type="text" name="pais" value="" id="pais" placeholder="Pais"></input>
            </div>

            <div id=dades-atr>
            <span class="material-symbols-outlined">
                smartphone
            </span>
            <input type="number" name="mobil" value="" id="mobil" placeholder="Mobil"></input>
            </div>

            <div id=dades-atr>
            <span class="material-symbols-outlined">
                wc
            </span>
            <input type="text" name="estat" value="" id="estat" placeholder="Estat"></input>
            </div>

            <div id=dades-atr>
            <span class="material-symbols-outlined">
                directions_car
            </span>
            <input type="text" name="vehicle" value="" id="vehicle" placeholder="Vehicle"></input>
            </div>
            <a href="curriculum.php"><button type="submit"  name="btn_actualitzar" value="Actualitzar" id="Actualitzar" placeholder="" >Actualitzar</button></a>
            
            <br>
        </div>
    </form>

    </div>
    
  </div>



  <!-- FINAL-->


 



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
                $("#Actualitzar").on('click',function(e){
                    e.preventDefault();
                    afegir_dades();
                })
            });

        </script>
        <script>

        $(document).ready(function(){
            M.AutoInit();
        });
        </script>
  </body>
</html>