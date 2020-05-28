
<?php get_template_part( 'templates/partials/document-open' ); ?>

<!-- Site header markup goes here -->
<header class=" bg-white header shadow "> 
    <div class="header-wrap container m-auto flex h-26 sm:h-32 md:h-48 justify-between ">
       <div class="relative  z-40 pl-6 lg:pl-12" >   
            <?php 
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );?>
                    <?php if ( has_custom_logo() ) { ?> 
                <a class="logo__url" href="<?php echo home_url();?>" rel="home">
                    <img id=" " class=" w-32 md:w-auto " src="<?php echo esc_url( $logo[0]);?>" alt="<?php bloginfo('name'); ?>" >
                </a> 
                    <?php }else{?>
                <a class="logo__title" href="<?php echo home_url();?>" rel="home">
                    <?php echo  '<h1 class="logo__title">'.get_bloginfo( "name" ).'</h1>'; ?>
                </a>     
                    <?php }?>   
        </div>   
        <div class="self-center lg:self-end lg:h-26 " >
             <?php  
                wp_nav_menu(array(
                    'theme_location'  => 'main',
                    'container'       => 'nav',
                    'container_class' => 'header-nav',
                    'container_id'    => 'header-nav',  
                    'menu' => 'ul',
                    'menu_class'      => 'header-menu',
                    'menu_id'         => 'header-menu',
                ));  
            ?> 
            <div class="mobile-nav-wrap" id="mobile-nav-wrap"  > 
                <?php  
                wp_nav_menu(array(
                    'theme_location'  => 'mobile',
                    'container'       => 'nav',
                    'container_class' => 'mobile-nav',
                    'container_id'    => 'mobile-nav',  
                    'menu' => 'ul',
                    'menu_class'      => 'mobile-menu',
                    'menu_id'         => 'mobile-menu' ,
                ));  
            ?> 
            </div>
             <div class="nav-toggle-wrap block lg:hidden ">
                <button  id="nav-toggle" class="nav-toggle focus:outline-none border-none">  
                    <span ></span> 
                    <span ></span> 
                    <span ></span> 
                    <span ></span> 
                    <span ></span> 
                    <span ></span>  
                </button>
             </div>   
            </div>
        </div>
         
</header>