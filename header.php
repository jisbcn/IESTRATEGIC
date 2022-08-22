
<?php include 'common/_settings.php'; ?>
<?php include 'common/_icons.php'; ?>

<header>
    <div class="left_header">

        <nav>
            <ul>
                <li><img src="images/logo.png" width="200"  alt="Logo Image"></li>
                <?php
                    foreach ($site_menu as $menu) {?>
                       <li class="nav_links nav_hidden"><?php echo $menu ?></li>
                  <?php  } ?>
                
            </ul>
        </nav>

    </div>

    <div class="right_header">
                    <ul class="header_icons">
                        <li><?php echo $_iconSearch ?></li>
                        <span>|</span>
                        <li><?php echo $_iconCart ?></li>
                        <span>|</span>
                        <li><?php echo $_svg_user ?></li>
                        <li class="menu_logo"><?php echo $_svg_menu ?></li>
                    </ul>
    </div>




    <div class="menu">
    <nav>
            <ul>
               
                <?php
                    foreach ($site_menu as $menu) {?>
                       <li class="nav_links"><?php echo $menu ?></li>
                  <?php  } ?>
                
            </ul>
        </nav>
    </div>
</header>