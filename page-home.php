<?php get_header();

/*
    Template Name: Home
*/ ?>
<section class="home-module-1">

    <div class="container">

        <?php $sm = new SocialMedia(array('facebook', 'twitter'));
        $sm->setSize('md');
        $sm->showNetworkButtons();
        $sm->setColorType('singleColor');
        ?>
    <div class="jumbotron">

        <div class="jumbo-content">
            <h1 class="expander" data-target="#expand"><em>El Paso’s</em>
                Roofing Company
            </h1>

            <h2>Repairs, Installations, & More</h2>

            <a href="<?= SITEURL ?>/contact-us/">
                <button class="btn btn-outline">SCHEDULE AN APPOINTMENT</button>
            </a>

            <a href="<?= SITEURL ?>/contact-us/">
                <button class="btn btn-primary">CONTACT US</button>
            </a>


        </div>
    </div>
</div>
</section>
    </div> <!-- end home-bg -->
    <section class="icon-row">
        <div class="container-fluid">
            <?php echo get_template_part('template-parts/icon', 'row'); ?>
        </div>
    </section>

    <section class="ribbon">
        <div class="container">
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

<section class="home-module-3">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-6 flex-col bg-side">
                <img class="visible-md visible-lg" src="<?=IMGURL?>years.png" alt="14 Years" />
            </div>
            <div class="col-md-6 flex-col">
                <div class="extra-padding">
<!--                    <h2><ul class="expand" id="expand">-->
<!--                            <li>We’re proud to be the best auto body shop in El Paso.</li>-->
<!--                            <li>Top-rated auto collision services for drivers.</li>-->
<!--                            <li>We’re happy to be highly reviewed by our customers!</li>-->
<!--                            <li>We are a local team that is dedicated to serving the community.</li>-->
<!--                            <li>Make us your go-to auto body shop company.</li>-->
<!--                            <li>Give us a call for information on quotes.</li>-->
<!--                            <li>We work quickly and can provide you with time estimates so that you can plan accordingly.-->
<!--                            </li>-->
<!--                            <li>Our team is here for all of your car repair needs.</li>-->
<!--                            <li>In need of dent repair? We’re the team to choose!</li>-->
<!--                            <li>Elite Auto Collision Center is here for you when you need us most.</li>-->
<!--                        </ul></h2>-->

                    <p class="blurb"><span class="brand">A D Roofing</span> is a locally owned and operated <span class="brand">roofing company</span> in El Paso, Texas with over fourteen years of experience.</p>

                    <p>A D Roofing is a locally owned and operated roofing company in El Paso, Texas with over fourteen years of experience. We have serviced and worked on every kind of roofing scenario possible including full installations, replacements, routine maintenance, and storm and wind damage.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <img class="visible-sm visible-xs" src="<?=IMGURL?>years.png" alt="14 Years" />
</section>

<section class="home-module-5">
    <div class="container">
        <div class="flex-row row">
            <div class="col-md-6 flex-col">
                <div class="extra-padding">
                    <h2>Our Specialty</h2>

                    <p class="blurb">A D Roofing specializes in all things roofing. We know that people are often overwhelmed when it comes to dealing with their roof. Many times the damage has snuck up on them or suddenly appears after a storm.</p>

                    <p>Without proper maintenance and inspections, roof damage can also occur without visible indications until it’s too late. Other times, the issue is complex and somewhat catastrophic. That’s why we’re here. We spend every day working around the city of El Paso to help residents resolve their roofing issues. Our experienced roofers perform all roofing repairs and maintenance needed to keep your roof secure. We perform everything from roof replacement, coating, leak repairs, inspections, gutter fixes, and more!</p>

                    <p>While we are lucky to have great weather in El Paso, having approximately 290 days of sunlight a year and moderate rain means specific maintenance and care for your roof. You don’t need much rain to cause damage to a roof. All it takes is a small amount of moisture breaking through a badly installed roof or compromised shingles. Moisture then seeps into your walls and begins to do structural damage to your home. This type of damage is generally caused by a small leak, bad flashing, and broken shingles.</p>

                    <p>Even when a storm doesn’t produce hail or rain, wind and debris can cause damage over time. El Paso is known to have some pretty heavy wind storms. Over time, this can cause damage to your roof or house.</p>
                </div>
            </div>


            <div class="col-md-6 bg-construction flex-col">

            </div>
        </div>
    </div>
</section>

<section class="home-module-10">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="extra-padding">
                        <h2>We Service the Entire El Paso Area</h2>


                        <p>A D Roofing has been working the entire El Paso area for more than a decade. We have seen this city grow and have helped many people take care of their roofing needs. We are located on the east side of town on 6455 Hiller, Suite 10. While our offices are here, we work all throughout the city. Upon our appointment, we will come to your house and give you a free estimate. Whether you’re looking to replace the entire roof or simply perform routine maintenance. </p>

                        <a href=""><button class="btn btn-outline">SCHEDULE AN APPOINTMENT</button></a>

                    </div>

                </div>
            </div>
        </div>
    </section>

<section class="home-module-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">
                <h2>The Importance of Maintenance</h2>

                <p>We stress the importance of maintaining and servicing your roof with regularity. To ensure there are no issues, we offer regular maintenance service and inspections. Our roofers will look for any trouble spots and if there are any, we will fix and stop the problem from becoming a bigger (and more expensive) issue.</p>
            </div>
        </div>
    </div>

</section>

<section class="home-module-6">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?=IMGURL?>bg-roof.jpg" alt="Roof" />
            </div>
            <div class="col-md-6">
                <h2>Our Values and Our Promise</h2>

                <h3>We strive for quality, value, and honesty.</h3>

                <p>There are dozens of roofing companies in El Paso. So what sets A D Roofing apart? We take great care in doing the job right from the start. Many companies do a sloppy job, cut corners, and sacrifice quality for expediency. This often manifests in roof leaks, broken shingles, or damage soon after the work is done. Lazy roofers will do a haphazard job to collect their check and then disappear. You might not notice until the damage has spread and then becomes a hassle to deal with.</p>

                <p>At A D Roofing, we are detail oriented and meticulous because we value quality. Our goal is longevity for your roof. We only employ qualified and experienced roofers who are proficient and knowledgeable in this line of work.</p>

                <p>We are confident in all of our roof experts’ performance. That’s why we offer a 100% satisfaction guarantee and a ten-year labor warranty. It’s also why we do payment upon completion of our residential work. We want you to be satisfied and feel that the work you paid for was completed in a thorough and professional way.</p>
            </div>
        </div>
    </div>
</section>


<section class="home-module-7">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <h2>About Our Guarantee & Discounts</h2>
                <p>We are confident in our services and roofers. For all residential roofing jobs, we offer 100% upon completion. This means you don’t have to pay us until you see the final result of our labor. At the same time, we offer a ten-year warranty labor guarantee on commercial and residential jobs. </p>
            </div>
        </div>
    </div>
</section>

<?php if (is_active_sidebar('form_widgets')) { //if the field is not empty
    ?>
    <section id="contact-form" class="visible-xs">
        <div class="container" id="contact-form2">
            <div class="row">
                <div class="<?= FULLWIDTH ?>">
                    <?php dynamic_sidebar('form_widgets'); ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php get_footer(); ?>