<?php
        if(cs_get_option('contact')!= ''):?>
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                      <?php echo do_shortcode( '[contact-form-7 id="19" title="quote"]' );?>
                </form>
            </div>
        </section>
        <?php endif;?>