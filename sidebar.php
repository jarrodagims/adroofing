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

        <img src="<?=IMGURL?>years.png" height="262" alt="14 Years" />

        <section class="ribbon">
           <em class="ribbon-em"><span class="brand">10<sup>%</sup></span> Military Discounts</em> <a href=""><button class="btn btn-outline">LEARN MORE</button></a>
        </section>

        <div class="extra-padding"><img src="<?=IMGURL ?>satisfaction-guaranteed.png" alt="100% Satisfaction guaranteed" />
            <h2>About Our Guarantee & Discounts</h2>
            <p>We are confident in our services and roofers. For all residential roofing jobs, we offer 100% upon completion. <span class="brand">This means you don’t have to pay us until you see the final result of our labor</span>. At the same time, we offer a ten-year warranty labor guarantee on commercial and residential jobs. </p>
        </div>
    <?php endif; ?>
</div>
