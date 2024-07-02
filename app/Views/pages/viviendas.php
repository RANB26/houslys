<div class="row viviendas">
    <div class="col-7 viviendas-scroll">
        <div class="section-title">
            <h2>Viviendas</h2>
            <p>Viviendas disponibles</p>
        </div>
        <div class="row portfolio listaviviendas-scroll">
            <?php foreach($viviendas as $i){ ?>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 py-3">
                    <div class="opciones">
                        <div class="valoracion">
                            <button  onclick="Favoritos(<?php echo $i->id_vivienda ?>)">
                                <i id="iFavoritos<?php echo $i->id_vivienda ?>" class="fas fa-star <?php foreach($favoritos as $j){ if ($j->id_vivienda==$i->id_vivienda){ echo "activado"; }}?>"></i>
                            </button>
                        </div>
                    </div>
                    <a href="<?php echo base_url().'vivienda/'.$i->id_vivienda ?>">
                        <div class="card">
                            <img src="<?php echo base_url();?>/img/vivienda.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title precio_vivienda"><b>$<?php echo $i->precio_vivienda ?></b> COP</h5>
                                <h6 class="card-text mt-3"><?php echo $i->numhabitaciones_vivienda ?> hab - <?php echo $i->numbaño_vivienda ?> baño - <?php echo $i->area_vivienda ?>m2</h6>
                                <h6 class="card-text mt-2"><?php echo $i->direccion_vivienda ?></h6>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Publicada hace 
                                    <?php
                                        date_default_timezone_set('America/Bogota');
                                        $tiempo1 = date_create($i->fpublicacion_vivienda);
                                        $tiempo2 = date_create(getdate()['year']."-".getdate()['mon']."-".getdate()['mday']." ".getdate()['hours'].":".getdate()['minutes'].":00");
                                        $intervalo = date_diff($tiempo1, $tiempo2);

                                        $tiempo = array();

                                        foreach ($intervalo as $valor){
                                            $tiempo[]=$valor;
                                        }
                                        
                                        if($tiempo[0]>0){
                                            echo $tiempo[0]." años";
                                        }else if($tiempo[1]>0){
                                            echo $tiempo[1]." meses";
                                        }else if($tiempo[2]>0){
                                            echo $tiempo[2]." dias";
                                        }else if($tiempo[3]>0){
                                            echo $tiempo[3]." horas";
                                        }else{
                                            echo $tiempo[4]." minutos";
                                        }

                                    ?>
                                </small>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="col-5">
        <div id="mapa"></div>
    </div>
</div>
<script src="<?php echo base_url();?>/js/viviendas.js"></script>
<script src="<?php echo base_url();?>/js/mapa_viviendas.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMapa"></script>