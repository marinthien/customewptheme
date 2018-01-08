

<?php wp_footer(); ?>
</div> <!--start main container-->
<div id="footer">
    <!--                <div class="hoz-empt"></div>
                    <div class="hoz-color"></div>-->

    <div class="footer-content">

        <div class="float-container">
            <div class="float-box">
                <div class="float-header">Latest</div>
                <div class="float-content">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis...</div>
                
                
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header_sidebar') ) : 

                endif; ?>
            </div>
            <div class="float-box">
                <div class="float-header">Social Network</div>
                <div class="float-content">
                    <div class="social-connect"> </div>
                    <div class="social-connect-twitter"> </div>
                    <div class="social-connect-linkedin"> </div>
                    <div class="social-connect-fb"> </div>
                   
                        
                   
                </div>
            </div>

            <div class="float-box">
                <div class="float-header">Contact</div>
                <div class="float-content">
                    <span>
                       Address: 128 Highview Grove,
                       Burwood East, Vic 3151 Australia
                    </span>
                    <span>
                        Email: vdmdac@yahoo.com
                    </span>
                     <span>
                        Tel: +61 8080 7020
                    </span>
                     
                </div>
            </div>
        </div>
    </div>
    <div class="hoz-box">
        Copyright &#169 TechBoy 2015. All Rights Reserved
    </div>
</div>


</body>
</html>