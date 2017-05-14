<?php
// Before anything is sent, set the appropriate header
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="stylesheet" href="web/css/style.css">
        <link rel="stylesheet" href="web/css/responsive.css">

        <link rel="apple-touch-icon" sizes="180x180" href="web/images/fav-icon/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="web/images/fav-icon/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="web/images/fav-icon/favicon-16x16.png" sizes="16x16">

        <?php
        /*         * *
         * This section specifies the page header
         */

        // The page title
        if ($templateResource = TemplateResource::getResource('title')) {
            ?>
            <title><?php echo $templateResource; ?></title>
        <?php } ?>	
        <!-- Basic CSS -->
        <!-- End of basic CSS -->
        <?php
        // The CSS included
        if ($templateResource = TemplateResource::getResource('css')) {
            ?>
            <!-- Additional CSS -->
            <?php
            foreach ($templateResource as $style) {
                $style = "web/$style";
                ?>
                <link rel="stylesheet" href="<?php echo $style; ?>" />
                <?php
            }
            ?>
            <!-- Additional CSS end -->
            <?php
        }
        ?>

        <!-- Favicon and touch icons -->


    </head>
    <!--    <body>-->

    <body> 
        <div class="boxed_wrapper">
            <?php
            require_once "header.php";
            ?>

            <?php
            require_once $currentPage;
            ?>

            <?php
            require_once "footer.php";
            ?>

            <!-- Basic scripts -->  
            <!-- jQuery js -->
            <script src="web/js/jquery.js"></script>
            <!-- bootstrap js -->
            <script src="web/js/bootstrap.min.js"></script>
            <!-- jQuery ui js -->
            <script src="web/js/jquery-ui.js"></script>
            <!-- owl carousel js -->
            <script src="web/js/owl.carousel.min.js"></script>
            <!-- jQuery validation -->
            <script src="web/js/jquery.validate.min.js"></script>

                        
            <!-- mixit up -->
            <script src="web/js/wow.js"></script>
            <script src="web/js/jquery.mixitup.min.js"></script>
            <script src="web/js/jquery.fitvids.js"></script>
            <script src="web/js/bootstrap-select.min.js"></script>
            <script src="web/js/menuzord.js"></script>
            

            <!-- revolution slider js -->
            <script src="web/js/jquery.themepunch.tools.min.js"></script>
            <script src="web/js/jquery.themepunch.revolution.min.js"></script>
            <script src="web/js/revolution.extension.actions.min.js"></script>
            <script src="web/js/revolution.extension.carousel.min.js"></script>
            <script src="web/js/revolution.extension.kenburn.min.js"></script>
            <script src="web/js/revolution.extension.layeranimation.min.js"></script>
            <script src="web/js/revolution.extension.migration.min.js"></script>
            <script src="web/js/revolution.extension.navigation.min.js"></script>
            <script src="web/js/revolution.extension.parallax.min.js"></script>
            <script src="web/js/revolution.extension.slideanims.min.js"></script>
            <script src="web/js/revolution.extension.video.min.js"></script>

                        
            <!-- fancy box -->
            <script src="web/js/jquery.fancybox.pack.js"></script>
            <script src="web/js/jquery.polyglot.language.switcher.js"></script>
            <script src="web/js/nouislider.js"></script>
            <script src="web/js/jquery.bootstrap-touchspin.js"></script>
            <script src="web/js/SmoothScroll.js"></script>
            <script src="web/js/jquery.appear.js"></script>
            <script src="web/js/jquery.countTo.js"></script>
            <script src="web/js/jquery.flexslider.js"></script>
            <script src="web/js/imagezoom.js"></script> 
            <script id="map-script" src="web/js/default-map.js"></script>
            <script src="web/js/custom.js"></script>

            
            <!-- End of basic scripts -->
            <?php
            /*             * *
             * Specify the scripts that are to be added.
             */
            if ($templateResource = TemplateResource::getResource('js')) {
                ?>
                <!-- Additional Scripts -->
                <?php
                foreach ($templateResource as $js) {
                    $js = "web/$js";
                    ?>
                    <script src="<?php echo $js; ?>"></script>
                    <?php
                }
                ?>
                <?php
            }
            ?>
            <?php if (!App::isLoggedIn()) { ?>
                <script>
                    jQuery(document).ready(function () {
                        App.initLogin();
                    });
                </script>
            <?php } else { ?>
                <script>
                    jQuery(document).ready(function () {
                        // initiate layout and plugins
                        App.init();
                        //App.setMainPage(true);

                    });
                </script>
                <?php
            }
            ?>
        </div>
    </body>
</html>
