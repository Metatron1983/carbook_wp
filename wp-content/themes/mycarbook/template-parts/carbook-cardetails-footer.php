<footer class="ftco-footer ftco-bg-dark ftco-section">
            <div class="container"> 
                <div class="row mb-5"> 
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2"><a href="<?php echo home_url(); ?>" class="logo">Car<span>book</span></a></h2>
                            <p><?php echo esc_html('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'); ?></p>
                            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                                <li class="ftco-animate"><a href="<?php echo esc_url('https://twitter.com') ?>"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="<?php echo esc_url('https://facebook.com') ?>"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="<?php echo esc_url('https://instagram.com') ?>"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md"> 
                        <div class="ftco-footer-widget mb-4 ml-md-5">
                            <h2 class="ftco-heading-2"><?php echo esc_html('Information'); ?></h2>
                           <?php 
                        wp_nav_menu([
                            'theme_location'  => 'footer_info_nav',
                            'menu'            => '5',
                            'container'       => false,
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'list-unstyled',
                            'menu_id'         => '',
                            'echo'            => true,
                            // 'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                            'depth'           => 1,
                            'walker'          => '',
                            'add_a_class' => 'py-2 d-block',
                        ]);
                           ?>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2"><?php echo esc_html('Customer Support'); ?></h2>
                            <?php 
                        wp_nav_menu([
                            'theme_location'  => 'footer_customer_support_nav',
                            'menu'            => '6',
                            'container'       => false,
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'list-unstyled',
                            'menu_id'         => '',
                            'echo'            => true,
                            // 'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                            'depth'           => 1,
                            'walker'          => '',
                            'add_a_class' => 'py-2 d-block',
                        ]);
                           ?>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2"><?php echo esc_html('Have a Questions?'); ?></h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li><span class="icon icon-map-marker"></span><span class="text"><?php echo esc_html('203 Fake St. Mountain View, San Francisco, California, USA'); ?></span></li>
                                    <li><a href="tel:<?php echo esc_url('+23923929210'); ?>"><span class="icon icon-phone"></span><span class="text"><?php echo esc_html('+2 392 3929 210'); ?></span></a></li>
                                    <li><a href="mailto:<?php echo esc_url('info@yourdomain.com'); ?>&subject=вопрос"><span class="icon icon-envelope"></span><span class="text"><?php echo esc_html('info@yourdomain.com'); ?></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p><!--Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
                            Copyright &copy; All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> 
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.--></p> 
                    </div>
                </div>
            </div>
        </footer> 
  

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

