<?php get_header();

/*
    Template Name: Home
*/ ?>
<section class="home-module-1">
    <div class="sub-header">
        <div class="container">
            <div class="row ">
                <div class="v-align">
                    <div class="col-xs-12 navbar-button text-center">
                        <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>
                        <ul class="nav navbar-nav navbar-right visible-xs">
                            <li class="menu-item directions"><a
                                        href="<?php echo get_site_url() ?>/contact-us"></a></a></li>
                            <li class="menu-item contact"><a href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
    <div class="jumbotron">
        <div class="jumbo-content">
            <h1>
                <span class="brand">Bob  O’s</span> Family Fun Center
                <span class="br-md">in El Paso</span>
            </h1>

            <h2>Non-Stop Fun for the Whole Family!</h2>

            <a href="<?= SITEURL ?>/contact-us/">
                <button class="btn btn-primary">
                    CONTACT US TODAY
                </button>
            </a>
        </div>
    </div>
</div>
</section>
    </div> <!-- end home-bg -->
<section class="home-module-2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <?php echo non_responsive_bs_menu('secondary-menu', 'left', SITENAME); ?>
            </div>
        </div>
    </div>
</section>
<section class="home-module-3">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-6 flex-col">
                <div><h4>What Bob-O's Family Fun Center Has to Offer</h4>
                <p class="blurb">
                    At Bob-O’s Family Fun Center, we are completely devoted to providing the highest level of fun and excitement to people of all ages.
                </p>

                <p>If you’re looking for fun things to do in El Paso, we’ve got you covered! Our goal is to provide a safe and wholesome family environment for people of all ages to enjoy. The safety of our guests is Bob-O’s number one concern. Visit us today for a safe, wholesome day of fun for the entire family!
                </p></div>
            </div>
            <div class="col-md-6 flex-col">
                <div class="card">
                    <div class="card-title">Book your next</div>
                    <div class="card-text">
                        <p><span class="big">Birthday</span>
                        <span class="small">Celebration</span></p>

                        <a class="arrow" href="<?= SITEURL ?>/contact-us/">Birthday Booking</a>
                    </div>
                    <div class="card-img">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-module-4">
    <div class="top">
        <img src="<?=IMGURL?>play.png" alt="El Paso's Place to Play" />
    </div>
    <h2>Visit us today for a safe, wholesome day of fun for the entire family!</h2>
</section>
<section class="home-module-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="no-margin">Laser Odyssey (ages 6 and up)</h3>
                <ul>
                    <li>Two story industrial-themed laser tag arena</li>
                    <li>Great for team building</li>
                </ul>

                <h3>Go-Karts (Minimum of 58” to drive)</h3>
                <ul>
                    <li>Double Go-Karts (Driver 58” AND 18 years old, Passenger 40” up to 56”)</li>
                </ul>

                <h3>18-Hole Miniature Golf Course</h3>
                <ul>
                    <li>Boulder Creek Miniature Golf – voted best in El Paso</li>
                    <li>Equipped with a handicap-friendly sidewalk for all to enjoy</li>
                </ul>

                <h3>State-of-the-Art Arcade</h3>
                <ul>
                    <li>Full of the latest video and redemption games</li>
                </ul>
            </div>
            <div class="col-md-6">

                <div class="blox"><h3>Kiddie Rides</h3>
                <ul>
                    <li>Mini Go-Karts (Minimum 45” to drive, no taller than 58”)</li>
                    <li>Dizzy Drums (Minimum height requirement 35”, between 35” and 44” must ride with an adult)</li>
                    <li>Miniature Train (Ages 2 and up, not intended for adults)</li>
                </ul></div>

                <div class="blox"><h3>Bumper Boats (Driver 45”, Passenger 40”)</h3>
                <ul>
                    <li>Equipped with water guns and electrical motors</li>
                    <li>Beware of the waterfall, guaranteed to soak you</li>
                </ul></div>

                <div class="blox"><h3>Batting Cages</h3>
                <ul>
                    <li>Ranges from 45 mph all the way up to 80 mph</li>
                    <li>Bat at your own risk! Everyone must wear protective headgear</li>
                    <li>Every Tuesday is buy-one-get-one-free batting cage tokens (Limit 5)</li>
                    <li>Military get buy-one-get-one-free batting cage tokens every day! (Limit 5)</li>
                    <li>Hourly rates available for teams (Call for more details.)</li>
                </ul></div>

            </div>
        </div>
    </div>
</section>
<section class="home-module-6">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-6 flex-col">
                <h2>Bob-O’s Family Fun Center in El Paso | Non-Stop Fun for the Whole Family!</h2>
                <p class="blurb">We are located on El Paso’s Westside, off Sunland Park Drive. We first opened our doors on the Fourth of July in 2002.</p>
                <p>From that day on, we’ve made it our goal to become the Sun City’s premier family fun center. We’ve achieved this distinction by offering a variety of entertaining options that are proven to bring joy to the entire family. From Laser Odyssey, our legendary laser tag arena, to the city’s most exciting go-kart track and our state-of-the-art arcade, El Paso families never run out of things to do when they visit Bob-O’s Family Fun Center!
                </p>
            </div>
            <div class="col-md-6 flex-col">
                <div class="circle"><img src="<?=IMGURL?>carts.jpg"  alt="Go Karts" /></div>
            </div>
        </div>
    </div>
</section>
<img src="<?=IMGURL ?>bg-party.jpg" alt="Party" class="full-size" />

<section class="home-module-8">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Birthday Parties, Group Rates, School Events, Military Discounts, and More!</h2>
            </div>
        </div>
        <div class="row flex-row">
            <div class="col-md-6">
                <h3>Birthday Parties at Bob-O’s
                </h3>
                <p>Tired of the same old birthday party? Book your next birthday celebration at Bob-O’s Family Fun Center! We have great packages from which to choose. We take care of everything, from the setup to the cleanup, so you’ll be able to relax and have as much fun as possible. Let us take care of all the details!
                </p>

                <h3>Group Rates</h3>
                <p>Who said laser tag and go-karts are exclusively for children? At Bob-O's Family Fun Center, we believe people of all ages have a right to have fun! For this reason, we offer corporate rates for professional groups who are looking for great team building exercises. Give us a call today to learn more about our corporate event options!
                </p>
            </div>
            <div class="col-md-6">
                <img src="<?=IMGURL?>pinball.jpg" alt="Pinball" />
            </div>
        </div>
    </div>
</section>
<section class="home-module-9">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?=IMGURL?>bg-train.jpg" alt="Train" />
            </div>
            <div class="col-md-6">
                <h3>School Events</h3>
                <p>Bob-O's Family Fun Center is a great place to host school events. We offer school field trips at discounted rates as well as End of the Year parties and Project Celebrations. We also offer educational materials upon request.</p>

                <h3>Military Discounts</h3>

                <p>Bob-O's Family Fun Center offers military discounts on attractions and birthday parties. Contact us today to find out more about our discounts. Remember, discounts cannot be combined!</p>
            </div>
        </div>
    </div>

</section>
    <img src="<?=IMGURL ?>bg-boats-bottom.jpg" alt="Boats" class="full-size" />
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