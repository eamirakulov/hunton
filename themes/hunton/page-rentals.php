<?php get_header(); ?>
<div class="page dev2">
	<div class="container">
		<div class="page-bg" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;">
			<div class="text">
				<h1><?php echo the_title(); ?></h1>
				<p><?php echo get_field('subheading'); ?></p>
			</div>
		</div>

		<div class="why-about-block rental-capabilities-block content-block">
			<div class="center">
				<h2 class="bottom-line">Rental Capabilities</h2>
				<p>Hunton Services Builds value</p>
			</div>
			<div class="block-840">
				<p>Our turnkey installation team is ready to assist you 24/7, and regardless of market or application, we can
					serve as your reliable rental partner. Let Trane help you plan ahead for your next shutdown or
					turnaround. Unlike other HVAC rental companies, we can handle all of your needs under one umbrella-
					we can fabricate, install, rent, service, and use a turnkey approach to ensure that your equipment up
					and running. We even have an entire dedicated <a href="<?php bloginfo('url'); ?>/industrial-services">Industrial Plant Services</a> Team that has the industrial
					experience necessary to mitigate risk and seamlessly decrease down time. Your optimal production is
					our priority.
				</p>
			</div>

			<div class="video">
				<div class="text">
					<h3>Hunton R'newal</h3>
					<a href="#video-1" class="modal-trigger play-btn" tabindex="0">
						<img src="<?php bloginfo('template_url'); ?>/img/play.svg">
						<img class="rotate" src="<?php bloginfo('template_url'); ?>/img/dottedcircle.svg">
					</a>

	                <div id="video-1" class="modal">
	                  <div class="modal-content">
	                  	<iframe width="640" height="360" src="https://www.youtube.com/embed/RlXDVXzQ9Ac?feature=oembed&amp;controls=0&amp;hd=1&amp;autohide=1&amp;rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
	                  </div>
	                </div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="rental-capabilities-block2 content-block">
			<div class="center">
				<h2 class="bottom-line">Rental Capabilities</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="coolers row flex">
				<div class="item col l3">
					<div class="inner">
						<img src="<?php bloginfo('template_url'); ?>/img/cooler.png">
						<h4>Power</h4>
						<p>Diesel and Natural Gas Generator Rentals</p>
					</div>
				</div>
				<div class="item col l3">
					<div class="inner">
						<img src="<?php bloginfo('template_url'); ?>/img/cooler.png">
						<h4>Cooling</h4>
						<p>Diesel and Natural Gas Generator Rentals</p>
					</div>
				</div>
				<div class="item col l3">
					<div class="inner">
						<img src="<?php bloginfo('template_url'); ?>/img/cooler.png">
						<h4>Heating</h4>
						<p>Diesel and Natural Gas Generator Rentals</p>
					</div>
				</div>
				<div class="item col l3">
					<div class="inner">
						<img src="<?php bloginfo('template_url'); ?>/img/cooler.png">
						<h4>Dehumidification</h4>
						<p>Diesel and Natural Gas Generator Rentals</p>
					</div>
				</div>
				<div class="item col l3">
					<div class="inner">
						<img src="<?php bloginfo('template_url'); ?>/img/cooler.png">
						<h4>Oil-Free Air</h4>
						<p>Diesel and Natural Gas Generator Rentals</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container bg-gray">
		<div class="rental-capabilities-block2 content-block">
			<div class="center">
				<h2 class="bottom-line">Rental Applications</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="applications">
				<div class="row flex">
					<div class="item col m6 l3">
						<div class="inner">
							<img src="<?php bloginfo('template_url'); ?>/img/ap-construction.png">
							<div class="text">
								<h4>Construction</h4>
								<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam et suscipit laboriosam...</p>
							</div>
						</div>
					</div>
					<div class="item col m6 l3">
						<div class="inner">
							<img src="<?php bloginfo('template_url'); ?>/img/ap-contracting.png">
							<div class="text">
								<h4>Contracting</h4>
								<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam et suscipit laboriosam...</p>
							</div>
						</div>
					</div>
					<div class="item col m6 l3">
						<div class="inner">
							<img src="<?php bloginfo('template_url'); ?>/img/ap-facilities.png">
							<div class="text">
								<h4>Facilities managment</h4>
								<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam et suscipit laboriosam...</p>
							</div>
						</div>
					</div>
					<div class="item col m6 l3">
						<div class="inner">
							<img src="<?php bloginfo('template_url'); ?>/img/ap-food.png">
							<div class="text">
								<h4>Food and beverage</h4>
								<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam et suscipit laboriosam...</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<section class="contingency content-section" id="contingency">
			<div class="row flex">
				<div class="col s12 xl6 center-align"><img src="<?php echo bloginfo('template_url'); ?>/img/contingency2.jpg"></div>
				<div class="col s12 xl6 more-margin">
					<h2>Contingency Planning<div class="num"><img src="<?php echo bloginfo('template_url'); ?>/img/stat.svg"></h2>
					<p><b>One Call + Plan = Minimum Interruption</b></p>
					<p>The value of utilizing Trane Rental Services is that you only make one call. If an unplanned outage or a
					critical need arises, our team can ensure a quick response and expert installation. We offer contingency
					planning that can cover all your utility needs- HVAC, Power, and Compressed Air. Implementing a plan
					that will identify the building’s critical or essential needs will help streamline the utilization of
					equipment and personnel used to mitigate any unforeseen risk that may interrupt your fiduciary
					responsibilities. For customers with multiple sites, the plan will have each location and building
					identified with its specific tonnage of cooling, power requirements, as well as connection points to
					minimize an unplanned outage. This will identify the best equipment and accessories for that specific
					situation. Talk to your account manager or our rental manager to discuss implementing a contingency
					plan. Peace of mind is priceless.</p>
					<p><b>One call + plan = minimum interruption.</b></p>
				</div>
			</div>

			<div class="row steps">
				<div class="col m6 s12">
					<div class="row">
						<div class="col s4"><img src="<?php echo bloginfo('template_url'); ?>/img/step1.svg"></div>
						<div class="col s8">
							<h4>Step 1- <span>Financial Risk Analysis</span></h4>
							<p>The contingency process begins with
a review of the different functional
areas of your facility, their dependence on
power, HVAC and compressed air equipment,
and the impact a loss could potentially have.
By understanding the importance of these
items to your operations and quantifying
their fi nancial impact, we can determine
the areas that need to be considered. </p>
						</div>
					</div>
				</div>
				<div class="col m6 s12">
					<div class="row">
						<div class="col s4"><img src="<?php echo bloginfo('template_url'); ?>/img/step2.svg"></div>
						<div class="col s8">
							<h4>Step 2- <span>Risk Assessment </span></h4>
							<p>We will identify the potential causes
for an interruption and rank them
based on cost impact, probability
of occurrence and system downtime. </p>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col m6 s12">
					<div class="row">
						<div class="col s4"><img src="<?php echo bloginfo('template_url'); ?>/img/step3.svg"></div>
						<div class="col s8">
							<h4>Step 3- <span>Equipment Identification </span></h4>
							<p>Your Trane account manager will
work with you to document all
equipment in your HVAC and power systems,
including their operating conditions. This process
may uncover system weaknesses that need to be
addressed prior to implementation of the plan.</p>
						</div>
					</div>
				</div>
				<div class="col m6 s12">
					<div class="row">
						<div class="col s4"><img src="<?php echo bloginfo('template_url'); ?>/img/step4.svg"></div>
						<div class="col s8">
							<h4>Step 4- <span>Prioritization </span></h4>
							<p>We will evaluate your most critical
facility loads and process needs for
essential operations, including those with the
highest fi nancial implications for your business.
At this point, you may want to consider
load prioritization and/or load shedding to
reduce the amount of capacity required. For
a short period of time, you may be able to
operate with higher air temperatures in certain
areas and completely shut down others. </p>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col m6 s12">
					<div class="row">
						<div class="col s4"><img src="<?php echo bloginfo('template_url'); ?>/img/step5.svg"></div>
						<div class="col s8">
							<h4>Step 5- <span>System Connection  </span></h4>
							<p>How and where connections are
made helps reduce time and money.
Care will be taken to choose a location that
is easily accessible and that requires the least
amount of temporary installation material
to keep additional costs to a minimum. </p>
						</div>
					</div>
				</div>
				<div class="col m6 s12">
					<div class="row">
						<div class="col s4"><img src="<?php echo bloginfo('template_url'); ?>/img/step5.svg"></div>
						<div class="col s8">
							<h4>Step 6- <span>Power availability</span></h4>
							<p>The need to document the available
voltage(s) and amperage is vital
because a transformer or generator may be
required. Even if your power has not been
affected, some temporary units may require
more power than your existing units. </p>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col m6 s12">
					<div class="row">
						<div class="col s4"><img src="<?php echo bloginfo('template_url'); ?>/img/step5.svg"></div>
						<div class="col s8">
							<h4>Step 7- <span> Electrical connection</span></h4>
							<p>Whether existing electrical service
is adequate or new electrical service
will be installed, we will establish
the location of the temporary electrical
connection(s) and how they will be made.</p>
						</div>
					</div>
				</div>
				<div class="col m6 s12">
					<div class="row">
						<div class="col s4"><img src="<?php echo bloginfo('template_url'); ?>/img/step5.svg"></div>
						<div class="col s8">
							<h4>Step 8- <span>Temporary
equipment location</span></h4>
							<p>Equipment location is important for
determining how much electrical cable,
chilled water hose and/or fl ex duct will
be required. We will also consider safety
of the public and personnel, security,
ease of placement, equipment clearances,
structural loads, ground fi rmness and
level, noise, emissions (generator), public
visibility, auto and pedestrian traffi c,
permits, and many other things to minimize
the impact on normal operations.</p>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col m6 s12">
					<div class="row">
						<div class="col s4"><img src="<?php echo bloginfo('template_url'); ?>/img/step5.svg"></div>
						<div class="col s8">
							<h4>Step 8- <span>Plan creation</span></h4>
							<p>Your Trane account manager
will provide your organization
with a plan proposal. Included in
the proposal are the recommended temporary
equipment solutions, the total investment
required (both capital and expense),
budgetary fi gures for the temporary
solutions (including fi rst and recurring
costs), and detailed roles and responsibilities
for internal and external resources.</p>
						</div>
					</div>
				</div>
				<div class="col m6 s12">
					<div class="row">
						<div class="col s4"><img src="<?php echo bloginfo('template_url'); ?>/img/step5.svg"></div>
						<div class="col s8">
							<h4>Step 10- <span> Implement
and review</span></h4>
							<p>To help expedite the ordering
and delivery of a temporary system, in an
emergency situation, it is important to make
sure that all documents, such as purchase
orders and rental agreements, are completed,
and all recommended building modifi cations
are made. We also recommend that the
plan be reviewed at least once a year, or
when any facility changes are made. </p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="emergency content-section">
			<div class="row flex">
				<div class="col s12 xl6 more-margin">
					<h2>Emergency Planning<div class="num"><img src="<?php echo bloginfo('template_url'); ?>/img/stat.svg"></h2>
					<p>When the unexpected happens, our extensive network of rental depots and service
centers enable us to quickly provide generators and HVAC equipment on site to help you
recover as soon as possible. Take advantageof the <a href="<?php bloginfo('url'); ?>/rentals/#contingency">contingency planning</a> services at your
local office to be ready for anything.</p>
				</div>
				<div class="col s12 xl6 center-align"><img src="<?php echo bloginfo('template_url'); ?>/img/emergencyplanning.png"></div>
			</div>
			<div class="page-bg" style="background: url(<?php echo bloginfo('template_url'); ?>/img/cta.jpg) no-repeat top center; background-size: cover;">
				<div class="text">
					<h3>If you do not find the answer to your question, then contact us. <br> We will help you.</h3>
					<a href="" class="btn-green btn-large">CONTACT US TODAY!</a>
				</div>
			</div>
		</section>
		<div class="row flex bottom-box">
			<div class="col s12 m6 gov">
				<h4>Kilowatts to amps <br>calculator</h4>
				<h5>Kilowatts (kW) to amps (A) calculator.</h5>
				<p>Select current type, enter power in kilowatts, voltage in volts, power factor for AC circuit and press the Calculate button (DC = Direct Current, AC = Alternating Current):</p>
			</div>
			<div class="col s12 m6 ips">
				<div class="inner">
					<h3>Industrial Plant Services</h3>
					<p><a href="#">Read more</a></p>
				</div>
			</div>
		</div>
		<div class="row flex form-box">
			<div class="col s12 m6 calc">
				<div class="row cats">
					<div class="col m3 s12"><h6>Categories:</h6></div>
					<div class="col m9 s12">
						<a class="active">kW to amps</a>
						<a>Amps to Kilowatts</a>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m8 s12">
						<select id="type">
							<option>SELECT CURRENT TYPE</option>
							<option>1</option>
							<option>2</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m8 s12">
						<select id="power">
							<option>ENTER POWER IN KILOWATTS</option>
							<option>1</option>
							<option>2</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m8 s12">
						<select id="volt">
							<option>Enter VOLTAGE IN VOLTS</option>
							<option>1</option>
							<option>2</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="col s12 m4">
						<a href="#" id="calc" class="btn-green">CALCULATE</a>
					</div>
					<div class="col s12 m4">
						<a href="#" id="reset" class="btn-or-default">RESET</a>
					</div>
				</div>

				<div class="row">
					<div class="col s12 m8">
						<input type="text" name="office-find" id="office-find" placeholder="Find an office">
					</div>
				</div>
			</div>
			<div class="col s12 m6 girlmac">
				<div class="inner"></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.modal').modal({
          ready: function(modal, trigger) {
            var videoSrc = modal.find('iframe').attr("src");
            modal.find('iframe').attr("src", videoSrc+"&amp;autoplay=1");
          },
          complete: function() {
            $('iframe').attr('src', $('iframe').attr('src').replace("&amp;autoplay=1", ""));
          }
        });
    });
</script>
<?php get_footer(); ?>