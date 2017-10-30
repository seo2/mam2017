 <div class="image_dynamic">

                   <!-- SLIDER DESTACADO HOME -->
                   <div class="slider_destacado_home owl-carousel owl-theme box">
              <?php
                $e = 0;
              $sliders = get_order_group('destacado_grande_imagen');
              foreach($sliders as $slider){
                $e++;
            ?>
                      <div class="item">
                         <!--  <div class="image_dynamic_portada" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/tendencias.gif);"> </div> -->
                          <img class="img-responsive" src="<?php echo get('destacado_grande_imagen',$slider); ?>" alt="">
                          <?php
                            if(get('destacado_grande_link',$slider)){
                          ?>
                            <a href="<?php echo get('destacado_grande_link',$slider); ?>" class="btn btn-default btn_rojo2"  role="button">ver más</a>
                          <?php } ?>
                      </div>
                        <?php } ?>
                   </div>
                   <!--  <div class="caption_revista" >
                      <div class="logo_revista" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/logo_revista_detalle.svg);"> </div>
                        <p>Suscríbete y podrás estar al día de todas las tendencias.
                            <a href="http://www.revistadetalle.cl/" target="_blank"  class="btn btn-default btn_revista hvr-float" role="button">revista detalle</a>
                       </p>
                    </div> --> <!-- caption revista -->
                 </div>
