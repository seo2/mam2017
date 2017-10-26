<h4 class="divider"><?php echo $tit2; ?></h4>
<div class="container">
  <div class="row">
    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv1box">
          <a href="javascript:void(0);" class="borde_verde"  data-toggle="collapse" data-target="#content_farmacia">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/ico-farmacia.png"  class="center-block">
            <!--   <p><?php echo $serv1; ?></p> -->
                  <p>Farmacias</p>
          </a>
        </div>
        <div class="box_more_info">
          <a  data-toggle="collapse" data-target="#content_farmacia" ><?php echo $btn1; ?></a>
        </div>
    </div>


    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv2box">
          <a href="javascript:void(0);" class="borde_azul" data-toggle="collapse" data-target="#content_casas_cambio">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/casa_cambio.svg"   class="center-block">
              <p><?php echo $serv2; ?></p>
          </a>
        </div>
         <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_casas_cambio" ><?php echo $btn1; ?></a>
          </div>
    </div>


    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv3box">
          <a href="javascript:void(0);" class="borde_naranja" data-toggle="collapse" data-target="#content_agencia">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/agencia.svg"  class="center-block">
              <p><?php echo $serv3; ?></p>
          </a>
        </div>
          <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_agencia" ><?php echo $btn1; ?></a>
          </div>
    </div>

    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv4box">
          <a href="javascript:void(0); " class="borde_amarillo" data-toggle="collapse" data-target="#content_taxis">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/taxis.svg"  class="center-block">
              <p><?php echo $serv4; ?></p>
          </a>
        </div>
        <div class="box_more_info">
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_taxis" ><?php echo $btn1; ?></a>
        </div>
    </div>

    <div id="content_farmacia" class="content_servicio collapse">
    	<div id="content_farmaciaancla" class="anclita"></div>
    	<div class="container">
        	<h4 class="divider verde">Farmacias</h4>
			<div class="close_servicio" data-target="#serv1"></div>
			<div class="row">
            	<div class="col-md-6 col-md-push-6">
                 <div class="desc_servicio">
					      
             Cruz Verde<br> <br>

<p>Todos los productos y servicios orientados a cuidar la salud est&aacute;n en Farmacias Cruz Verde, una de las m&aacute;s importantes cadenas de farmacias chilenas. Una variada l&iacute;nea de productos cosm&eacute;ticos completa la oferta. Lo mejor en servicio, con personal capacitado y orientado a atender todas tus necesidades.

Horario. Lunes a domingos y festivos, de 10:30 a 21:30 hrs.

     </p>
                <a href="http://www.cruzverde.cl/" target="_blank" class="url_agencia">www.cruzverde.cl</a>
            	</div>
               </div>
            
				<div class="col-md-6 col-md-pull-6 ">
                    <div class="desc_servicio">
                     <p>
                      Salco Brand <br><br>
La m&aacute;s completa farmacia que tiene adem&aacute;s a su disposici&oacute;n de sus clientes la zona de servicios, un lugar que cuenta con sillas de espera, m&aacute;quina de agua purificada y orientaci&oacute;n farmac&eacute;utica.

Horario Lunes a domingos y festivos, de 10:30 a 21:30 hrs.



                       
                     </p>
                     <a href="http://www.salcobrand.cl/" target="_blank" class="url_agencia">www.salcobrand.cl</a>

                    </div>
            	</div>
            </div>
          <!--   <h4 class="divider verde"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $tit3; ?></h4> -->
             <!-- row -->
		</div> <!-- container -->
	</div> <!-- content transfer -->



	<?php
	    $args = array(
			'post_type' 		=> array('servicios_generales'),
			'p' 				=> 1615
	    );
		$the_query = new WP_Query ($args);
	    $i = 0;
	    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
	    	$i++;
	?>
    <div id="content_casas_cambio" class="content_servicio collapse">
            <div id="content_casas_cambioancla" class="anclita"></div>
              <div class="container">
              <h4 class="divider azul"><?php the_title(); ?></h4>
               <div class="close_servicio" data-target="#serv2"> </div>
              <div class="row">
                  <div class="col-md-6 col-md-push-6">
                      <div class="img_servicio"  style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                  </div>
                      <div class="col-md-6 col-md-pull-6 ">
                      <div class="desc_servicio">
                        <?php the_content(); ?>
                      </div>
                      </div>
              </div>
              </div>
            </div><!-- casas de cambio -->
	<?php endwhile; else: ?>
	<?php endif; ?>

    <div id="content_agencia" class="content_servicio collapse">
        <div id="content_agenciaancla" class="anclita"></div>
        <div class="container">
			<h4 class="divider naranja"><?php echo $serv3; ?></h4>
			<div class="close_servicio" data-target="#serv3"> </div>
            <div class="row">
				<?php if(ICL_LANGUAGE_CODE=='en'){ ?>
                <div class="col-md-4">
					<div class="box_agencia">
                        <div class="head_agencia">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/turistik.png" alt="" width="65" height="80">
                        </div>
                        <div class="desc_servicio text-center">
                            <p>It offers culture, entertainment and recreation through safe, secure and quality tourist services that flexibly show the most relevant tourist attractions in Santiago and its surroundings.</p>
                            <p>Telephone: +56228201000 </p>
                            <p>Currency type: Dollar, Brazilian Reais, Argentinian Pesos, Euros and others.</p>
                            <a href="http://www.turistik.cl/" target="_blank" class="url_agencia">www.turistik.cl</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                   <div class="box_agencia">
                      <div class="head_agencia">
                       <img src="<?php bloginfo('template_url'); ?>/assets/img/latam.png" alt="" width="229" height="70">
                      </div>
                      <div class="desc_servicio text-center">
                        <p>Dream vacations are easier than ever in our Lan Tam store where you can buy and reserve your tickets and tourist packages, and get information about promotions, discounts and benefits…everything at the same place!</p>
                        <a href="http://www.lan.com" target="_blank" class="url_agencia">www.lan.com</a>
                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box_agencia">
                          <div class="head_agencia">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/cocha.png" alt="" width="187" height="80">
                          </div>
                          <div class="desc_servicio text-center">
                          <p>When it comes to travels, Cocha is the expert.  With more than 60 years of experience, this agency is dedicated to travel sales considering tickets, stays and tours all over the world, with professional advice to guarantee that everything works properly in an unforgettable trip.</p>
                          <p>Vacations? Now!</p>
                          <a href="http://www.cocha.com" target="_blank" class="url_agencia">www.cocha.com</a>
                          </div>
                    </div>
                </div>
				<?php }elseif(ICL_LANGUAGE_CODE=='pt-br'){ ?>
                <div class="col-md-4">
					<div class="box_agencia">
                        <div class="head_agencia">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/turistik.png" alt="" width="65" height="80">
                        </div>
                        <div class="desc_servicio text-center">
                            <p>Oferece cultura e diversão através de serviços turísticos seguros, confiáveis e de alta qualidade que, de forma flexível, mostram os atrativos turísticos de Santiago e seus entornos</p>
                            <p>Tel.: +56228201000 </p>
                            <p>Tipo de moeda: Dólar, Reais Brasileiros, Pesos Argentinos, Euros e outras.</p>
                            <a href="http://www.turistik.cl/" target="_blank" class="url_agencia">www.turistik.cl</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                   <div class="box_agencia">
                      <div class="head_agencia">
                       <img src="<?php bloginfo('template_url'); ?>/assets/img/latam.png" alt="" width="229" height="70">
                      </div>
                      <div class="desc_servicio text-center">
                        <p>As férias sonhadas nunca foram mais simples de obter na nossa loja LATAM, onde é possível comprar e reservar suas passagens e pacotes turísticos, obter informações de promoções, descontos e benefícios. Tudo no mesmo lugar.</p>
                        <a href="http://www.lan.com" target="_blank" class="url_agencia">www.lan.com</a>
                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box_agencia">
                          <div class="head_agencia">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/cocha.png" alt="" width="187" height="80">
                          </div>
                          <div class="desc_servicio text-center">
                          <p>Quando se trata de viagens, Cocha é o expert. Acima de 60 anos de experiência, esta agencia está dedicada a venda de viagens que consideram passagens, estadias e tours por todo o mundo, com assessoramento profissional para que nada falte numa viagem inesquecível.</p>
                          <p>Férias? Agora!</p>
                          <a href="http://www.cocha.com" target="_blank" class="url_agencia">www.cocha.com</a>
                          </div>
                    </div>
                </div>
				<?php }else{  ?>
                <div class="col-md-4">
					<div class="box_agencia">
                        <div class="head_agencia">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/cocha.png" alt="" width="70" height="45">
                        </div>
                        <div class="desc_servicio text-center">
                            <p> En Cocha encuentra la mejor alternativa para tu viaje. Cruceros, pasajes, paquetes turísticos y otros servicios que te ayudaran a disfrutar al máximo tu descanso.</p>
                            <p>Tel.: +562 464 18 00 </p>
                            <p>Mail : msolari@cocha.com</p>

                            <a href="http://www.cocha.cl/" target="_blank" class="url_agencia">www.cocha.cl</a>
                        </div>
                    </div>
                </div>
            <!--     <div class="col-md-4">
                   <div class="box_agencia">
                      <div class="head_agencia">
                       <img src="<?php bloginfo('template_url'); ?>/assets/img/latam.png" alt="" width="229" height="70">
                      </div>
                      <div class="desc_servicio text-center">
                        <p> Las vacaciones soñadas nunca fueron más simples de obtener que en nuestra tienda Lan Tam,
                        donde puedes comprar y reservar tus pasajes y paquetes turísticos, informarte de promociones,
                        descuentos y beneficios ¡todo en el mismo lugar! </p>
                        <a href="http://www.lan.com" target="_blank" class="url_agencia">www.lan.com</a>
                      </div>
                    </div>
                </div> -->
           <!--      <div class="col-md-4">
                    <div class="box_agencia">
                          <div class="head_agencia">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/cocha.png" alt="" width="187" height="80">
                          </div>
                          <div class="desc_servicio text-center">
                          <p> Cuando de viajes se trata, Cocha es el experto. Con más de 60 años de experiencia,
                          esta agencia está dedicada a la venta de viajes que consideran pasajes,
                          estadías y tours por todo el mundo, con asesoría profesional para que
                          nada falle en un viaje inolvidable.</p>
                          <p>¿Vacaciones? ¡Ahora!</p>
                          <a href="http://www.cocha.com" target="_blank" class="url_agencia">www.cocha.com</a>
                          </div>
                    </div>
                </div> -->
				<?php } ?>


              </div>
        </div>
	</div> <!-- content agencia -->

	<?php
	    $args = array(
			'post_type' 		=> array('servicios_generales'),
			'p' 				=> 1622
	    );
		$the_query = new WP_Query ($args);
	    $i = 0;
	    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
	    	$i++;
	?>
    <div id="content_taxis" class="content_servicio collapse">
        <div id="content_taxisancla" class="anclita"></div>
        <div class="container">
        <h4 class="divider amarillo"><?php the_title(); ?></h4>
        <div class="close_servicio" data-target="#serv4"> </div>
            <div class="row">
                <div class="col-md-6 col-md-push-6">
                    <div class="img_servicio"  style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                </div>
				<div class="col-md-6 col-md-pull-6 ">
					<div class="desc_servicio">
						<?php the_content(); ?>
					</div>
				</div>
            </div>
        </div>
    </div> <!-- content taxis -->
	<?php endwhile; else: ?>
	<?php endif; ?>

    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv5box">
          <a href="javascript:void(0);" class="borde_rojo" data-toggle="collapse" data-target="#content_bancos">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/bancos.svg"   class="center-block">
              <p><?php echo $serv5; ?></p>
          </a>
        </div>
         <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_bancos"><?php echo $btn1; ?></a>
          </div>
    </div>

     <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv6box">
          <a href="javascript:void(0);" class="borde_verde" data-toggle="collapse" data-target="#content_telefonia">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/ico-telefonia.png"   class="center-block">
              <!-- <p><?php echo $serv5; ?></p> -->
                  <p>Telefonía</p>
          </a>
        </div>
         <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_telefonia"><?php echo $btn1; ?></a>
          </div>
    </div>



<!--       <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio">
          <a href="javascript:void(0);" class="borde_verde_oscuro" data-toggle="collapse" data-target="#content_chip">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/arauco_chip.svg"  class="center-block">
              <p>Arauco Chip </p>
          </a>
        </div>
          <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_chip" ><?php echo $btn1; ?></a>
          </div>
      </div> -->

    <div id="content_bancos" class="content_servicio collapse">
        <div id="content_bancosancla" class="anclita"></div>
        <div class="container">
            <h4 class="divider rojo"><?php echo $serv5; ?></h4>
			<div class="close_servicio" data-target="#serv5"> </div>
			<div class="row">
				<?php if(ICL_LANGUAGE_CODE=='en'){ ?>
                <div class="col-md-4">
                       <div class="box_agencia">
                             <div class="head_agencia">
                               <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_bbva.png" height="40">
                             </div>
                             <div class="desc_servicio text-center">
                             <p> Mondays to Fridays  <br>
                             from 9am to 2pm   <br>
                                  </p>
                                  <p class="tel">Telephone: +56226638365 </p>

                                   <a href="http://www.bbva.cl/" target="_blank" class="url_agencia">www.bbva.cl</a>
                              </div>

                       </div>
                 </div>
                 <div class="col-md-4">
                 <div class="box_agencia">
                       <div class="head_agencia">
                         <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_santander.jpg">
                       </div>
                       <div class="desc_servicio text-center">
                            <p> Mondays to Fridays  <br>
                             from 9am to 2pm   <br>
                                  </p>
                                  <p class="tel"> Telephone: +56232054249 </p>
                                   <a href="http://www.santander.cl/" target="_blank" class="url_agencia">www.santander.cl</a>
                       </div>
                     </div>
                 </div>
				<?php }elseif(ICL_LANGUAGE_CODE=='pt-br'){ ?>
                <div class="col-md-4">
                       <div class="box_agencia">
                             <div class="head_agencia">
                               <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_bbva.png" height="40">
                             </div>
                             <div class="desc_servicio text-center">
                             <p> Segunda a Sexta <br>
                             das 09:00h às 14:00h<br>
                                  </p>
                                  <p class="tel">Tel.: +56226638365 </p>

                                   <a href="http://www.bbva.cl/" target="_blank" class="url_agencia">www.bbva.cl</a>
                              </div>

                       </div>
                 </div>
                 <div class="col-md-4">
                 <div class="box_agencia">
                       <div class="head_agencia">
                         <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_santander.jpg">
                       </div>
                       <div class="desc_servicio text-center">
                           <p> Segunda a Sexta <br>
                             das 09:00h às 14:00h <br>
                                  </p>
                                  <p class="tel"> Tel.: +56232054249 </p>
                                   <a href="http://www.santander.cl/" target="_blank" class="url_agencia">www.santander.cl</a>
                       </div>
                     </div>
                 </div>
				<?php }else{  ?>
                <div class="col-md-4">
                       <div class="box_agencia">
                             <div class="head_agencia">
                               <img src="<?php bloginfo('template_url'); ?>/assets/img/banco-de-chile.jpg" height="40">
                             </div>
                             <div class="desc_servicio text-center">
                             <p> Sucursal Banco de Chile abierta de lunes a viernes, de 09:00 a 14:00 hrs. <br>
                              Haz todos tus trámites y luego vitrinéatelo todo!
                                  </p>
                                  <p class="tel">Banco de chile</p>

                                   <a href="http://www.bancochile.cl/" target="_blank" class="url_agencia">www.bancochile.cl</a>
                              </div>

                       </div>
                 </div>
                 <div class="col-md-4">
                 <div class="box_agencia">
                       <div class="head_agencia">
                         <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_bbva.png" height="40">
                       </div>
                       <div class="desc_servicio text-center">
                           <p> Sucursal BBVA abierta de lunes a viernes, de 09:00 a 14:00 hrs.<br>
                            Haz todos tus trámites y luego ¡tómate ese delicioso café que estabas esperando!
                             <br>
                                  </p>
                                  <p class="tel"> Banco BBVA</p>
                                   <a href="http://www.bbva.cl/" target="_blank" class="url_agencia">www.bbva.cl</a>
                       </div>
                     </div>
                 </div>

                     <div class="col-md-4">
                       <div class="box_agencia">
                             <div class="head_agencia">
                               <img src="<?php bloginfo('template_url'); ?>/assets/img/banco_bci.png" height="40">
                             </div>
                             <div class="desc_servicio text-center">
                             <p> Sucursal Banco BCI abierta de lunes a viernes, de 09:00 a 14:00 hrs.<br> Haz todos tus trámites en un espacio cómodo y grato.
                                  </p>
                                  <p class="tel">Banco BCI</p>

                                   <a href="http://www.bci.cl/" target="_blank" class="url_agencia">www.bci.cl</a>
                              </div>

                       </div>
                 </div>



                   <div class="col-md-4">
                       <div class="box_agencia">
                             <div class="head_agencia">
                               <img src="<?php bloginfo('template_url'); ?>/assets/img/falabella.png" height="40">
                             </div>
                             <div class="desc_servicio text-center">
                             <p> Sucursal Banco Falabella abierta de lunes a viernes de 09:00 a 21:00 Sábado - domingo y festivos 11:00 a 19:00 hrs. <br>Haz todos tus trámites y luego anda a buscar el regalo para esa persona tan especial!
                                  </p>
                                  <p class="tel">Banco Falabella</p>

                                   <a href="http://www.bancofalabella.cl/" target="_blank" class="url_agencia">www.bancofalabella.cl</a>
                              </div>

                       </div>
                 </div>
				<?php } ?>
			</div> <!-- row -->
        </div>
    </div><!-- content bancos -->

    <div id="content_telefonia" class="content_servicio collapse">
        <div id="content_telefoniaancla" class="anclita"></div>
        <div class="container">
            <h4 class="divider verde">Telefonía</h4>
            <div class="close_servicio" data-target="#serv6"> </div>

        </div>
              <div class="row">
                <?php if(ICL_LANGUAGE_CODE=='en'){ ?>
                        <div class="col-md-4">
                               <div class="box_agencia">
                                     <div class="head_agencia">
                                       <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_bbva.png" height="40">
                                     </div>
                                     <div class="desc_servicio text-center">
                                     <p> Mondays to Fridays  <br>
                                     from 9am to 2pm   <br>
                                          </p>
                                          <p class="tel">Telephone: +56226638365 </p>

                                           <a href="http://www.bbva.cl/" target="_blank" class="url_agencia">www.bbva.cl</a>
                                      </div>

                               </div>
                         </div>
                         <div class="col-md-4">
                         <div class="box_agencia">
                               <div class="head_agencia">
                                 <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_santander.jpg">
                               </div>
                               <div class="desc_servicio text-center">
                                    <p> Mondays to Fridays  <br>
                                     from 9am to 2pm   <br>
                                          </p>
                                          <p class="tel"> Telephone: +56232054249 </p>
                                           <a href="http://www.santander.cl/" target="_blank" class="url_agencia">www.santander.cl</a>
                               </div>
                             </div>
                         </div>
                <?php }elseif(ICL_LANGUAGE_CODE=='pt-br'){ ?>
                        <div class="col-md-4">
                               <div class="box_agencia">
                                     <div class="head_agencia">
                                       <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_bbva.png" height="40">
                                     </div>
                                     <div class="desc_servicio text-center">
                                     <p> Segunda a Sexta <br>
                                     das 09:00h às 14:00h<br>
                                          </p>
                                          <p class="tel">Tel.: +56226638365 </p>

                                           <a href="http://www.bbva.cl/" target="_blank" class="url_agencia">www.bbva.cl</a>
                                      </div>

                               </div>
                         </div>
                         <div class="col-md-4">
                         <div class="box_agencia">
                               <div class="head_agencia">
                                 <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_santander.jpg">
                               </div>
                               <div class="desc_servicio text-center">
                                   <p> Segunda a Sexta <br>
                                     das 09:00h às 14:00h <br>
                                          </p>
                                          <p class="tel"> Tel.: +56232054249 </p>
                                           <a href="http://www.santander.cl/" target="_blank" class="url_agencia">www.santander.cl</a>
                               </div>
                             </div>
                         </div>
                <?php }else{  ?>
                        <div class="col-md-4">
                               <div class="box_agencia">
                                     <div class="head_agencia">
                                       <img src="<?php bloginfo('template_url'); ?>/assets/img/claro.png" height="40">
                                     </div>
                                     <div class="desc_servicio text-center">
                                     <p> Los módulos de venta Claro ofrecen una gran variedad de productos y servicios de telefonía celular: planes mixtos, planes cuenta exacta y prepagos con modernos equipos móviles. Y tú, ¿ya tienes un Smartphone?
                                          </p>
                                          <p class="tel">Horario de atención: Lunes a domingos y festivos, de 10:30 a 21:30 hrs.</p>

                                           <a href="http://www.clarochile.cl/" target="_blank" class="url_agencia">www.clarochile.cl</a>
                                      </div>

                               </div>
                         </div>
                         <div class="col-md-4">
                         <div class="box_agencia">
                               <div class="head_agencia">
                                 <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_entel.png" height="40">
                               </div>
                               <div class="desc_servicio text-center">
                                   <p> Módulo de venta de planes, kit de prepago y tarjetas telefónicas. ¡Lo último en telefonía móvil al alcance de todos!
                                     <br>
                                          </p>
                                          <p class="tel">Horario de atención: Lunes a domingos y festivos, de 10:30 a 21:30 hrs.</p>
                                           <a href="http://www.entel.cl/" target="_blank" class="url_agencia">www.entel.cl</a>
                               </div>
                             </div>
                         </div>

                             <div class="col-md-4">
                               <div class="box_agencia">
                                     <div class="head_agencia">
                                       <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_movistar.jpg" height="40">
                                     </div>
                                     <div class="desc_servicio text-center">
                                     <p> Encuentra aquí todos los servicios Movistar: contratación de planes y productos, pago de cuentas, servicio al cliente, entre otros.
                                          </p>
                                          <p class="tel">Horario de atención: de lunes a viernes de 10:00 a 21:00 hrs., sábado de 10:00 a 14:00. Domingo y festivos cerrado.</p>

                                           <a href="http://www.movistar.cl/" target="_blank" class="url_agencia">www.movistar.cl</a>
                                      </div>

                               </div>
                         </div>

                           <div class="col-md-4">
                               <div class="box_agencia">
                                     <div class="head_agencia">
                                       <img src="<?php bloginfo('template_url'); ?>/assets/img/vtr.png" height="40">
                                     </div>
                                     <div class="desc_servicio text-center">
                                     <p> VTR ofrece en su tienda de Arauco Maipú servicios como recepción de pagos de los distintos servicios de la empresa y atención a clientes en televisión por cable, telefonía e internet. Encuentra solución a tus requerimientos en la mayor comodidad del mal.
                                          </p>
                                          <p class="tel">Horario de atención: Lunes a domingos y festivos, de 10:30 a 21:30 hrs.</p>

                                           <a href="http://www.vtr.cl/" target="_blank" class="url_agencia">www.vtr.cl</a>
                                      </div>

                               </div>
                         </div>


                                 <div class="col-md-4">
                               <div class="box_agencia">
                                     <div class="head_agencia">
                                       <img src="<?php bloginfo('template_url'); ?>/assets/img/wom.png" height="40">
                                     </div>
                                     <div class="desc_servicio text-center">
                                     <p> WOM ofrece un servicio de excelencia, data de alta calidad y a un precio justo, gracias al despliegue de nuestra red propia con cobertura nacional. Podrás encontrar en este módulo el equipo que andas buscando. ¡Te esperamos!

                                          </p>
                                          <p class="tel">Horario de atención: Lunes a domingos y festivos, de 10:30 a 21:30 hrs.</p>

                                           <a href="http://www.wom.cl/" target="_blank" class="url_agencia">www.wom.cl</a>
                                      </div>

                               </div>
                         </div>
                <?php } ?>
              </div> <!-- row -->
    </div>


        <!--
          <div id="content_chip" class="content_servicio collapse">
           <div class="container">
              <h4 class="divider verde_oscuro">Tarjeta Arauco chip</h4>
               <div class="close_servicio"> </div>
                  <div class="row">
                      <div class="col-md-12">
                          <div class="desc_servicio">
                                 <p>Arauco Pass y Arauco Chip son tarjetas que permiten prepagar los estacionamientos y así evitar
                                 pasar por cajeros cuando termines de realizar tus compras. ¿Qué cómodo, no te parece?</p>

                                 <section class="box_faq">

                                               <div class="col-sm-12">
                                                   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                     <div class="panel panel-default">
                                                       <div class="panel-heading" role="tab" id="">

                                                             <h4>
                                                               <a class="cd-faq-trigger collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#q1" aria-expanded="true" aria-controls="q1">
                                                                   ¿DÓNDE OBTENERLA?
                                                               </a>
                                                             </h4>
                                                       </div>
                                                       <div id="q1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="">
                                                         <div class="panel-body">
                                                              <p>Acercándose a los cajeros manuales de Central Parking, ubicado
                                                                  en el Acceso París y costado Clínica Arauco Salud nivel -1.</p>

                                                         </div>
                                                       </div>
                                                     </div>
                                                     <div class="panel panel-default">
                                                       <div class="panel-heading" role="tab" id="">

                                                         <h4 class="panel-title">
                                                           <a class="cd-faq-trigger collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#q2" aria-expanded="false" aria-controls="q2">
                                                             ¿CUÁNTO VALE?
                                                           </a>
                                                         </h4>
                                                       </div>
                                                       <div id="q2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="">
                                                         <div class="panel-body">
                                                           <p>La tarjeta Arauco Chip tiene un valor de $3.000, monto que quedará disponible para el pago
                                                                de estacionamiento. Una vez consumido el saldo, el monto mínimo de recarga es de $1.000</p>
                                                         </div>
                                                       </div>
                                                     </div>
                                                     <div class="panel panel-default">
                                                       <div class="panel-heading" role="tab" id="">

                                                         <h4 class="panel-title">
                                                           <a class="cd-faq-trigger collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#q3" aria-expanded="false" aria-controls="q3">
                                                             ¿Cuándo se activa la tarjeta?
                                                           </a>
                                                         </h4>
                                                       </div>
                                                       <div id="q3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="">
                                                         <div class="panel-body">
                                                         <p>Las tarjetas se activarán al momento de la entrega y una vez cargadas con el monto mínimo.
                                                              Si la tarjeta no fuera cargada por un período de un año, quedará desactivada impidiendo
                                                            la posibilidad de uso.</p>
                                                         </div>
                                                       </div>
                                                     </div>

                                                     <div class="panel panel-default">
                                                       <div class="panel-heading" role="tab" id="">

                                                         <h4 class="panel-title">
                                                           <a class="cd-faq-trigger collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#q4" aria-expanded="false" aria-controls="q3">
                                                             ¿CÓMO FUNCIONAN?
                                                           </a>
                                                         </h4>
                                                       </div>
                                                       <div id="q4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="">
                                                         <div class="panel-body">
                                                             <h3> Arauco Chip</h3>
                                                             <ol>
                                                               <li>Acercar tarjeta a gabinete donde aparece la figura de una tarjeta, una vez que se encienda la
                                                              luz anaranjada en este. NO SACAR TICKET.</li>
                                                               <li> Al término de su visita, presentar nuevamente la tarjeta en la figura en gabinete de barrera de
                                                              salida de los estacionamientos.</li>
                                                               <li>Se descontará y mostrará el saldo de su tarjeta al momento de retirarla
                                                              y luego se abrirá la barrera.</li>
                                                             </ol>
                                                         </div>
                                                       </div>
                                                     </div>

                                                     <div class="panel panel-default">
                                                       <div class="panel-heading" role="tab" id="">

                                                         <h4 class="panel-title">
                                                           <a class="cd-faq-trigger collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#q5" aria-expanded="false" aria-controls="q3">
                                                             ¿CÓMO SE CARGAN?
                                                           </a>
                                                         </h4>
                                                       </div>
                                                       <div id="q5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="">
                                                         <div class="panel-body">
                                                            <p>La carga mínima de Arauco Chip es de $3.000, se puede realizar en cualquiera de los 57
                                                                cajeros automáticos de estacionamientos ubicados dentro y fuera del mall o en los dos cajeros
                                                                manuales ubicados en el acceso a París y costado Clínica Arauco Salud nivel -1.</p>

                                                            <p>La carga de la tarjeta tiene duración indefinida y es de responsabilidad del usuario conservarla en
                                                            un lugar seguro para evitar la pérdida y en consecuencia el saldo asociado a esta.
                                                            Por tu seguridad la tarjeta no debe quedar al interior de tu automóvil cuando utilices
                                                            los estacionamientos de Parque Arauco.</p>
                                                         </div>
                                                       </div>
                                                     </div>

                                                     <div class="panel panel-default">
                                                       <div class="panel-heading" role="tab" id="">

                                                         <h4 class="panel-title">
                                                           <a class="cd-faq-trigger collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#q6" aria-expanded="false" aria-controls="q3">
                                                             ¿Qué hacer en caso de pérdida de la tarjeta?
                                                           </a>
                                                         </h4>
                                                       </div>
                                                       <div id="q6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="">
                                                         <div class="panel-body">
                                                            <p>En caso de pérdida dirigirse a la oficina central de Central Parking, ubicado al costado de la
                                                                Clínica Arauco Salud nivel -1. Debes dar el código de la tarjeta -ubicado en el costado superior
                                                                derecho de esta- para que se te asigne una tarjeta nueva con un nuevo código y realizar el
                                                                traspaso del saldo en caso que así se requiera..</p>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                               </div>
                                 </section>

                          </div>
                      </div>
                  </div>
              </div>
          </div> end content arauco chip -->
  </div>
</div>








