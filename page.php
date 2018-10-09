<?php get_header(); ?>
<section id="main">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTH?>">
                <?php if(!is_front_page()) : ?>
                    <ul class="nav navbar-nav navbar-right hidden-xs">
                        <li class="menu-item directions"><a
                                    href="<?php echo get_site_url() ?>/contact-us"></a></a></li>
                        <li class="menu-item contact"><a href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>"></a></li>
                    </ul>
                <?php endif; ?>
				<?php get_template_part('template-parts/content', 'page'); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>