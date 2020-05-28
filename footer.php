<!-- Site footer markup goes here -->
 
<?php //get_template_part( 'templates/partials/document-close' );?>

<footer  class="footer bg-white <?php if(is_front_page()){echo '';}else{ echo 'mt-10'; } ?> " >
    <div class="container m-auto">    
        <div  class="flex  justify-center sm:justify-end py-14  ">
            <?php  
                wp_nav_menu(array(
                    'theme_location'  => 'footer',
                    'container'       => 'nav',
                    'container_class' => 'footer-nav',
                    'container_id'    => 'footer-nav',  
                    'menu' => 'ul',
                    'menu_class'      => 'footer-menu',
                    'menu_id'         => 'footer-menu',
                ));  
                ?>   
            </div> 
        </div> 
</footer> 

<?php wp_footer(); ?>  

</body>
</html>

