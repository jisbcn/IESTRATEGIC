<?php include 'common/_settings.php'; ?>

<main>
    <section class="top_header" >
            <div class="top_img">
                <div class="top_text" style="    background:
                    linear-gradient(
                    rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)
                    ),
                    url(<?php echo($top_image_section->image) ?>);">
                    <h1><?php echo($top_image_section->title) ?></h1>
                    <p><?php print_r($top_image_section->content) ?></p>
                </div>
            </div>
    </section>



    <section class="first_section_pages">
        <div class="spectial_icon">
            <img width="120" height="120" src="images/logo-icon.png" alt="">
            <div class="special_txt">
                <div>PRODUCTOS</div>
                <h1>DESTACADOS</h1>
            </div>
        </div>
        <?php foreach($first_section_pages as $cate){ ?>

                <div>
                    <img class="img-special" style="width: 100%;height: 200px;" src="<?php echo $cate["image"] ?>" alt="">
                    <div class="cate_title"><?php echo $cate["title"] ?></div>
                    <div class="cate_desc"><?php echo $cate["description"] ?></div>
                </div>
        <?php } ?>
    </section>


    <section class="second_section" style="    background:
                    linear-gradient(
                    rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)
                    ),
                    
                    url(<?php echo($second_section->image) ?>);">
            <div class="left">
            <h1 style="font-size: 2rem;"><?php echo($second_section->title) ?></h1>
                    <p style="width: 60%;"><?php print_r($second_section->content) ?></p>
            </div>

            <div class="right">

            <?php foreach ($second_section->logos as $logo) { ?>
                <div><img src="<?php echo $logo ?>" alt=""></div>
           <?php } ?>

            </div>

    </section>


    <section class="third_section_pages">

                <h1 style="font-size: 1.5rem">PRODUCTOS MÁS VENDIDOS</h1>

                <div class="flex">
                    <?php foreach($third_section_pages as $prod){ ?>

                        <div style="flex: 1;" class="cate_flex">
                            <img  src="<?php echo $prod["image"] ?>" alt="">
                            <div class="txt" style="width:80%; ">
                                <h1><?php echo $prod["title"] ?></h1>
                                <div><?php echo $prod["description"] ?></div>
                            </div>
                        </div>


                    <?php } ?>
                </div>

    </section>



    <section class="fourth_section_pages">

            <div class="fourth_flex">
                        
                <?php foreach($fourth_section_pages as $cater){ ?>

                    <div>
                        <img  src="<?php echo $cater["image"] ?>" alt="">
                        <div><?php echo $cater["title"] ?></div>

                    </div>

                <?php } ?>

            </div>

    </section>





    <section class="body_form">
    <div class="form_part1">
        <h1 class="header_for_from">
        iEstrategic
        </h1>

        <div >
            <div class="info_in_from"><?php echo $_contact_section->address ?> </div>
            <div class="info_in_from"> <?php echo $_contact_section->postal_code ?> - <?php echo $_contact_section->address_city ?> </div>
            <div class="info_in_from">Trabaja con nosotros</div> 
        </div>

        <div class="to_fix">
       <img width="17" height="17" src="./images/icons/pin.png" alt=""> Ver en google maps 935 22 22 44
        </div>

        <div class="to_fix"> <img width="17" height="17" src="./images/icons/telephone.png" alt=""><?php echo $_contact_section->phone ?></div>

        <div class="to_fix"> <img width="15" height="15" src="./images/icons/arroba.png" alt=""> <?php echo $_contact_section->email ?></div>


    </div>
    
    
     <div  class="form_part1">

        <div>
        Si desea más información acerca de cualquiera de nuestros servicios rellene el <br> siguiente formulario y nos pondremos en contacto con usted.
        
    </div>
                
             <div class="form_cont">

                <div class="inputs_form_body">

                    <div class="adjustor">
                    <label class="label_for_forms" for="NOMBRE">NOMBRE</label>
                    <input class="form_inputs" type="text" id="NOMBRE">
                    </div>
             
                    <div class="adjustor">
                    <label class="label_for_forms" for="APELLIDOS">APELLIDOS</label>
                    <input class="form_inputs" type="text" id="APELLIDOS">
                    </div>
              
                </div>
                  
                <div class="inputs_form_body">

                    <div  class="adjustor">
                    <label class="label_for_forms" for="TELÉFONO">TELÉFONO</label>
                     <input class="form_inputs" type="text" id="TELÉFONO">
                    </div>
                    
                    <div class="adjustor">
                    <label class="label_for_forms" for="EMAIL">EMAIL</label>
                    <input class="form_inputs" type="text" id="EMAIL">
                    </div>

         

                    </div>

                    <div class="inputs_form_body form_submmiter_cont">
                      <div  class="adjustor">
                    <label class="label_for_forms"  for="COMENTARIOS">COMENTARIOS</label>
                   <textarea class="form_inputs" id="COMENTARIOS" cols="30" rows="10"></textarea>
                     </div>

                    <div>
                        <div class="checkbox_form">
                        
                        <input  type="checkbox" class="checkbox_forform" name="accept"  id="accpetance" >    
                        <label for="accpetance">He leído y acepto el aviso legal</label>
                       
                        </div>
                        <button class="btn_in_form" id="form_submitter">ENVIAR</button>

                    </div>

                    </div>


                    <div class="error">
                        <div>Porfavor complete todos los campos</div>
                    </div>

                   
                </div>

      </div>




</section>




</main>