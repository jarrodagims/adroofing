<div id="sidebar">
    <?php if (is_page('contact-us')) : ?>
        <div id="contact-form">
            <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
                echo do_shortcode('[contact-form-7 id="74" title="Contact Form"]');
            } else {
                echo do_shortcode('[contact-form-7 id="74" title="Contact Form"]');
            }
            ?>
        </div>
    </div>
    <?php endif; ?>
    <?php if (!is_page('contact-us')) : ?>
        <section>
            <?php echo get_template_part('template-parts/icon', 'row-sm'); ?>
        </section>

        <section class="ribbon">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <p>GUTTERS & REMODELING</p>

                        <em>
                            Call Us To Get An <span class="brand">Estimate</span>
                        </em>
                    </div>
                </div>
            </div>
        </section>

        <img src="<?=IMGURL?>years.png" height="262" alt="14 Years" />



        <div class="extra-padding"><img src="<?=IMGURL ?>satisfaction-guaranteed.png" alt="100% Satisfaction guaranteed" class="home-guarantee" />
            <section class="ribbon">
                <em class="ribbon-em"><span class="brand">10<sup>%</sup></span> Military Discounts</em> <a href=""><button class="btn btn-outline">LEARN MORE</button></a>
            </section>
        </div>
    <?php endif; ?>
</div>
