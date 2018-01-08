<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">  
        <title><?php bloginfo('name'); ?></title>
        
            
            
            <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="main-container"> <!--start main container-->

<!--            <div class="business-social">
                
            </div>-->
            <div class="site-logo" id="Site-Nav">
                <div class="logo">
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/logo1.png"/>
                </div>

                <div class="site-header">
                    <?php
                    wp_nav_menu(array('echo' => true, 'container' => '', 'menu_class' => '',
                        'menu_id' => '',
                        'walker' => new Customize_Nav_Menu()
                    ));
                    ?>
                </div>  
            </div>

            <div class="site-gallery" id="Company-Space">
                
                
                <img src="<?php echo bloginfo('template_directory'); ?>/images/1.jpg"/>
                <div class="custom">
                    <div class="information-box">
                        <div class="story">
                            Providing long term engagement
                            <span class="slogan">Build your career path with us</span>
                             <a href=""> >> More Info</a>
                        </div>
                             
                    </div>
                   
                </div>
               <img src="<?php echo bloginfo('template_directory'); ?>/images/2.jpg"/>
                 <div class="custom">
                    <div class="information-box">
                        <div class="story">
                            Providing long term engagement
                            <span class="slogan">Build your career path with us</span>
                             <a href=""> >> More Info</a>
                        </div>
                             
                    </div>
                   
                </div>
                <img src="<?php echo bloginfo('template_directory'); ?>/images/3.jpg"/>
                 <div class="custom">
                    <div class="information-box">
                        <div class="story">
                            Providing long term engagement
                            <span class="slogan">Build your career path with us</span>
                             <a href=""> >> More Info</a>
                        </div>
                             
                    </div>
                   
                </div>
                
                <img src="<?php echo bloginfo('template_directory'); ?>/images/4.jpg"/>
                 <div class="custom">
                    <div class="information-box">
                        <div class="story">
                            Providing long term engagement
                            <span class="slogan">Build your career path with us</span>
                             <a href=""> >> More Info</a>
                        </div>
                             
                    </div>
                   
                </div>
               

            </div>


            <div id="content">
                
                <div class="portfolio">
                    <div class="left-header">Recent Works</div>
                    <div class="float-container">
                        <div class="float-box">
                        <div class="float-img">
                            <img src="<?php echo bloginfo('template_directory'); ?>/images/1.jpg"/>
                        </div>
                        <div class="float-header">West Factory Recruitment 2008</div>
                        <div class="float-content">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis...</div>
                        </div>
                        <div class="float-box">
                        <div class="float-img">
                            <img src="<?php echo bloginfo('template_directory'); ?>/images/2.jpg"/>
                        </div>
                        <div class="float-header">West Factory Recruitment 2008</div>
                        <div class="float-content">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis...</div>
                        </div>
                        <div class="float-box">
                        <div class="float-img">
                            <img src="<?php echo bloginfo('template_directory'); ?>/images/4.jpg"/>
                        </div>
                        <div class="float-header">West Factory Recruitment 2008</div>
                        <div class="float-content">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis...</div>
                        </div>
                        
                    </div>
                </div>
                 <div class="partner">

                    <div class="float-container">
                        <div class="show-case-desc">
                            <div> We provide you a complete solution</div>
                            <ul class="show-case-list">
                                <li>Better and co-operating management approach </li>
                                <li>Market knowledge and estimation proven history record </li>
                                <li>Competitive training approach and skills </li>
                            </ul>
                            
                        </div>
                        <div class="show-case-img">
                          
                            <img src="<?php echo bloginfo('template_directory'); ?>/images/2.jpg"/>
                            <img src="<?php echo bloginfo('template_directory'); ?>/images/3.jpg"/>
                            <img src="<?php echo bloginfo('template_directory'); ?>/images/4.jpg"/>
                        </div>
                       
                    </div>
               </div>
                <div class="service">
                    <div class="center-header">Our Services</div>
                    <div class="float-container">
                         <div class="float-box">
                        <div class="icon-header-com">   </div>
                        <div class="float-header purple">Communication</div>
                        <div class="float-content">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis...</div>
                        <div class="float-button">
                            More Info
                        </div>
                        </div>
                        <div class="float-box">
                        <div class="icon-header">   </div>
                        <div class="float-header">Express Recruitment</div>
                        <div class="float-content">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis...</div>
                        <div class="float-button">
                            More Info
                        </div>
                        </div>
                        
                       
                         <div class="float-box">
                        <div class="icon-header-network">   </div>
                        <div class="float-header orange">Network</div>
                        <div class="float-content">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis...</div>
                        <div class="float-button">
                            More Info
                        </div>
                         </div>
                         <div class="float-box">
                        <div class="icon-header-team">   </div>
                        <div class="float-header red">Team Work</div>
                        <div class="float-content">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis...</div>
                        <div class="float-button">
                            More Info
                        </div>
                         </div>
                    </div>
                   
                </div>
                
                <div class="express">
                    <div class="center-header">Our Services</div>
                    <div class="float-container">
                         <div class="float-box">
                        <div class="icon-header-com">   </div>
                        <div class="float-header purple">Communication</div>
                        <div class="float-content">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis...</div>
                        <div class="float-button">
                            More Info
                        </div>
                        </div>
                        <div class="float-box">
                        <div class="icon-header">   </div>
                        <div class="float-header">Express Recruitment</div>
                        <div class="float-content">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis...</div>
                        <div class="float-button">
                            More Info
                        </div>
                        </div>
                        
                       
                         <div class="float-box">
                        <div class="icon-header-network">   </div>
                        <div class="float-header orange">Network</div>
                        <div class="float-content">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis...</div>
                        <div class="float-button">
                            More Info
                        </div>
                         </div>
                         <div class="float-box">
                        <div class="icon-header-team">   </div>
                        <div class="float-header red">Team Work</div>
                        <div class="float-content">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis...</div>
                        <div class="float-button">
                            More Info
                        </div>
                         </div>
                    </div>
                   
                </div>
               
                      
           
                
      
                

            </div>   

            <header class="site-header">
                <h1><?php //bloginfo('name') ?></h1>
                <h5><?php //bloginfo('description') ?></h5>
            </header>



