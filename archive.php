<?php get_header(); ?>
<div class="banner-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img
                            src="<?= IMGURL; ?>logo.png"
                            alt="<?php echo get_bloginfo(
                                'description'
                            ); ?>"/></a>

                <?php $sm = new SocialMedia(array('facebook', 'twitter'));
                $sm->setSize('sm');
                $sm->showNetworkButtons();
                $sm->setColorType('singleColor');
                ?>
            </div>
        </div>
    </div>
</div>
<section id="main">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTH?>">
                <ul class="nav navbar-nav navbar-right hidden-xs">
                    <li class="menu-item directions"><a
                                href="<?php echo get_site_url() ?>/contact-us"></a></a></li>
                    <li class="menu-item contact"><a href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>"></a></li>
                </ul>
                <?php the_archive_title('<h1>','</h1>'); ?>
				<?php get_template_part('template-parts/content', 'archive'); ?>
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>