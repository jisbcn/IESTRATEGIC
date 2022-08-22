<?php include 'common/_settings.php'; ?>

<footer>
    <div class="footer_body">
        <div class="footer_body_part1">
        
            <div class="CATEGORÍA_PRODUCTOS">
                
            <h1><?php print_r($footer_1_menu["/1"]) ?></h1>    
            
            <?php for ($i=2; $i < count($footer_1_menu) + 1 ; $i++) { ?>
                
            
                <div><?php echo $footer_1_menu["/".$i] ?></div>


            <?php } ?>

            </div>

            <div class="CATEGORÍA_PRODUCTOS">
            <h1><?php print_r($footer_2_menu["/1"]) ?></h1>    
            
            <?php for ($i=2; $i < count($footer_2_menu) + 1 ; $i++) { ?>
                
            
                <div><?php echo $footer_2_menu["/".$i] ?></div>


            <?php } ?>
            </div>

            <div class="CATEGORÍA_PRODUCTOS">
            <h1><?php print_r($footer_3_menu["/1"]) ?></h1>    
            
            <?php for ($i=2; $i < count($footer_3_menu) + 1 ; $i++) { ?>
                
            
                <div><?php echo $footer_3_menu["/".$i] ?></div>


            <?php } ?>
            </div>

            <div class="CATEGORÍA_PRODUCTOS">
            <h1><?php print_r($footer_4_menu["/1"]) ?></h1>    
            
            <?php for ($i=2; $i < count($footer_4_menu) + 1 ; $i++) { ?>
                
            
                <div><?php echo $footer_4_menu["/".$i] ?></div>


            <?php } ?>   
            </div>

        </div>

        <div class="footer_body_part2">
     
        <div class="invis">
            <h1>CATEGORÍA PRODUCTOS 5</h1>     
            </div>

          
            <div class="CATEGORÍA_PRODUCTOS">
            <hr class="underline_footer">
            <h1 class="title_part2">CATEGORÍA PRODUCTOS 5</h1>     
            </div>


            <div class="CATEGORÍA_PRODUCTOS">
            <hr class="underline_footer">
            <h1 class="title_part2">CATEGORÍA PRODUCTOS 6</h1>     
            <div>Subcategoría 1</div>
            </div>


            <div class="CATEGORÍA_PRODUCTOS">
            <hr class="underline_footer">
            <h1 class="title_part2">CATEGORÍA PRODUCTOS 7</h1>     
            </div>
            
        </div>

        <div class="footer_body_part3">
            <div class="body_underline_footer2">

                <hr id="underline1" class="underline_footer2" ></div>

            <img width="143px" height="25px" src="./images/logo.png" alt="">

            <div class="body_underline_footer2">

                <hr id="underline2" class="underline_footer2" ></div>

        </div>

            <div class="footer_body_part4" >
                <?php foreach($footer_nav_menu as $menu){ ?>
                <div><?php echo $menu . " | " ?> </div>
                    <?php } ?>
            </div>

            <div class="footer_body_part5">
                <div>Copyright © 2021 Estrategic | Aviso Legal | Política de privacidad | Política de Cookies | Website by Estrategic</div>

            </div>
    </div>
</footer>