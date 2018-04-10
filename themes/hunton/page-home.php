<?php get_header(); ?>

	<section class="intro-video ">
		<div class="item-content">
			<h1>High Performance Buildings for Life</h1>
			<a href="#video-1" class="modal-trigger play-btn" tabindex="0">
				<img src="http://design-austin.com/hunton/wp-content/themes/hunton/img/play.svg">
				<img class="rotate" src="http://design-austin.com/hunton/wp-content/themes/hunton/img/dottedcircle.svg">
			</a>
			<p></p><p>Delivering energy efficient HVAC systems and top-notch mechanical services.</p>
			<p></p>
		</div>
		<video loop muted autoplay id="myVideo" >			
			<source src="<?php bloginfo('template_url'); ?>/files/TraneBeyond.mp4" type="video/mp4">
		</video>
	</section>

	<div id="video-1" class="modal">
		<div class="modal-content">
			<iframe width="640" height="360" src="https://www.youtube.com/embed/UGfp338GyRc?feature=oembed&controls=0&hd=1&autohide=1&rel=0&showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
		</div>
	</div>

	<section class="intro pt80a">
		<a href="#why" class="smooth scroll"><img src="<?php bloginfo('template_url'); ?>/img/scroll.png"></a>
    <?php
        $args = array(
          'post_type' => 'slide',
          'posts_per_page' => -1
        );
        $the_query = new WP_Query( $args ); ?>
        <?php if ( $the_query->have_posts() ) : ?>
          <?php $iframe_id = 0; ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php $iframe_id++; ?>
                <?php
                  // get iframe HTML
                  $iframe = get_field('video');
                  // use preg_match to find iframe src
                  preg_match('/src="(.+?)"/', $iframe, $matches);
                  $src = $matches[1];
                  // add extra params to iframe src
                  $params = array(
                      'controls'    => 0,
                      'hd'        => 1,
                      'autohide'    => 1,
                      'rel' => 0,
                      'showinfo' => 0
                  );
                  $new_src = add_query_arg($params, $src);
                  $iframe = str_replace($src, $new_src, $iframe);
                  // add extra attributes to iframe html
                  $attributes = 'frameborder="0"';
                  $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
                  ?>
                <div id="<?php echo "video-". $iframe_id; ?>" class="modal">
                  <div class="modal-content">
                    <?php echo $iframe; ?>
                  </div>
                </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php else : ?>
          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

		<div class="container">
			<div class="main-slider">
				<?php 
				$the_query = new WP_Query( $args ); ?>
				<?php if ( $the_query->have_posts() ) : ?>
          <?php $iframe_id = 0; ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
           <?php $iframe_id++; ?>
						<div class="item" style="background-color: rgba(0, 0, 0, 0.25); background: url(<?php echo get_field('image'); ?>) no-repeat top center; background-size: cover;">
							<div class="item-content">
								<h1><?php echo the_title(); ?></h1>
								<?php if(get_field('video')) : ?>
									<a href="#<?php echo "video-". $iframe_id; ?>" class="modal-trigger play-btn">
										<img src="<?php bloginfo('template_url'); ?>/img/play.svg">
										<img class="rotate" src="<?php bloginfo('template_url'); ?>/img/dottedcircle.svg">
									</a>
								<?php endif; ?>
								<p><?php echo get_field('text'); ?></p>
							</div>
							
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<section id="why" class="content-section scrollify">
		<div class="container">
			<div class="row">
				<div class="col s12 xl6">
					<h2>Why Hunton?<div class="num">01</div></h2>
					<p>It is our mission to customize a solution that delivers the lowest total life-cycle cost of ownership for the operation, ownership, and maintenance of your mechanical systems. We are a proud member of the Hunton Group family of companies, and as Houston’s Trane OEM since 1981, we are ready to assist you with any phase of your energy project in any market- from engineering and design, to maintenance and continual commissioning. We speak the language of buildings, and we understand that every building has a purpose.</p>
					<p><a href="<?php bloginfo('url'); ?>/why-hunton" class="learn">Learn more</a></p>
				</div>
				<div class="col s12 xl6">
					<div class="r-grid">
						<a href="<?php bloginfo('url'); ?>/our-team" class="team"></a>
						<a href="<?php bloginfo('url'); ?>/why-hunton#partners" class="partners"></a>
						<a href="<?php bloginfo('url'); ?>/why-hunton#testimonials" class="test"></a>
						<img class="rombus" src="<?php bloginfo('template_url'); ?>/img/grennrombus.svg">
						<a href="<?php bloginfo('url'); ?>/why-hunton#training" class="training"></a>
						<a href="<?php bloginfo('url'); ?>/why-hunton#case_studies" class="case"></a>
						<a href="<?php bloginfo('url'); ?>/safety" class="safety"></a>

            <!-- preload hover images -->
            <img width="0" height="0" src="<?php bloginfo('template_url'); ?>/img/casestudies-hover.svg" alt="">
            <img width="0" height="0" src="<?php bloginfo('template_url'); ?>/img/safety-hover.svg" alt="">
            <img width="0" height="0" src="<?php bloginfo('template_url'); ?>/img/training-hover.svg" alt="">
            <img width="0" height="0" src="<?php bloginfo('template_url'); ?>/img/testimonials-hover.svg" alt="">
            <img width="0" height="0" src="<?php bloginfo('template_url'); ?>/img/partners-hover.svg" alt="">
            <img width="0" height="0" src="<?php bloginfo('template_url'); ?>/img/ourteam-hover.svg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="services" class="content-section scrollify">
		<div class="container">
			<div class="row valign-wrapper">
				<div class="col s12 xl6">
					<h2>Our Services<div class="num">02</div></h2>
					<p><a href="mailto:marketing@huntongroup.com" class="btn-green">CONTACT US TODAY!</a></p>
				</div>
        <div class="col s12 xl6 right-align">
					<img src="<?php bloginfo('template_url'); ?>/img/services-2.jpg">
				</div>
			</div>
		</div>
	</section>

	<section id="safety" class="content-section scrollify">
		<div class="container">
			<div class="row valign-wrapper">
				<div class="col s12 xl6">
					<h2>Safety<div class="num">03</div></h2>
					<p>Safety is the foundation of our culture. Ensuring “Nobody Gets Hurt” is our first Core Value. We believe in providing a safe work environment and instilling safe work habits in our employees through training and continuing education. What keeps Hunton safe?</p>

					<ul>
						<li>Full-time Safety Director, Tommy Denning (Link to Bio: Client will send)</li>
						<li>Loss Prevention Systems (LPS) and mandatory Job Safety Analysis (JSA)</li> 
						<li>Ongoing goal to maintain our Experience Modifier Rating (EMR)</li> 
						<li>Ongoing goal to maintain our OSHA Total Recordable Incident Rates (TRIR)</li>
						<li>Office and Field Safety Committees</li> 
						<li>PPE for all employees</li>
						<li>“Stop. Think. Act.” Initiatives & Safety Incentive Programs</li>
						<li>Monthly Mandatory Safety Training</li>
						<li>Basic Plus for All Employees</li>
					</ul>

					<p><a href="<?php bloginfo('url'); ?>/safety" class="learn">Learn more</a></p>
				</div>
        <div class="col s12 xl6 right-align">
					<img src="<?php bloginfo('template_url'); ?>/img/safety-2.jpg">
				</div>
			</div>
		</div>
	</section>

	<section id="whats" class="content-section scrollify">
		<div class="container">
			<div class="row valign-wrapper">
				<div class="col s12 xl6">
					<h2>What’s Happening?<div class="num">04</div></h2>
					<p>Want to keep up with all of the latest Hunton Happenings? Be sure to follow us on social media and sign up for our informative quarterly newsletter. Engage with us, and discover HVAC tips and tools, new equipment offerings, and industry news.</p>
					<p><a href="<?php bloginfo('url'); ?>/whats-happening" class="learn">Learn more</a></p>
				</div>
				<div class="col s12 xl5 offset-xl1">

							<div class="tabs-box">
								<ul class="tabs">
									<li class="tab col s3"><a class="active" href="#news">news</a></li>
<!-- 									<li class="tab col s3"><a href="#archive">archive</a></li>
									<li class="tab col s3"><a href="#blog">blog</a></li>
									<li class="tab col s3"><a href="#smedia">SOCIAL  MEDIA</a></li>
									<li class="tab col s3"><a href="#ec">EVENT CALENDAR</a></li> -->
								</ul>
							    <div id="news" class="tab-content">
							    	<div class="scroll-nav">
							    		<a href="#" class="arrow-left"></a>
							    		<a href="#" class="arrow-right"></a>
							    		<span class="count"><span class="current">1/</span>10</span>
							    	</div>
							    	<div class="item-slider">
                      <?php 
                      $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                        'cat' => 19
                      );
                      $the_query = new WP_Query( $args ); ?>
                      <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                          <div class="item">
                            <h3><?php echo the_title(); ?></h3>
                            <div class="row">
                              <div class="col s4 thumb">
                                <img src="<?php echo the_post_thumbnail_url(); ?>">
                              </div>
                              <div class="col s8 excerpt">
                                <p><?php echo the_excerpt(); ?></p>
                              <p><a href="<?php echo the_permalink(); ?>" class="learn">Learn more</a></p>
                              </div>
                              <div class="col s12 meta">
                                <span class="date"><?php echo get_the_date(); ?></span>
                                <span class="cat">
                                  <?php
                                    $post_categories = wp_get_post_categories(get_the_ID());
                                    $cats = array();
                                         
                                    foreach($post_categories as $c){
                                        $cat = get_category( $c );
                                        echo $cat->name. " ";
                                    }
                                  ?>
                                </span>
                                <span class="comments"><?php comments_number(); ?></span>
                              </div>
                            </div>
                          </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                      <?php else : ?>
                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                      <?php endif; ?>
									</div>
							    </div>
<!-- 							    <div id="archive" class="col s12">Test 2</div>
							    <div id="blog" class="col s12">Test 3</div>
							    <div id="smedia" class="col s12">Test 4</div>
							    <div id="ec" class="col s12">Test 4</div> -->
						    </div>

				</div>
			</div>
		</div>
	</section>

	<section id="faq" class="content-section scrollify">
		<div class="container">
			<div class="row valign-wrapper">
				<div class="col s12 xl6">
					<h2>FAQ<div class="num">05</div></h2>

          <ul class="tabs faq-list">
            <li class="tab"><a class="active" href="#f1">1.  How do I request a quote?</a></li>
            <li class="tab"><a href="#f2">2.  How do I schedule a service call?</a></li>
            <li class="tab"><a href="#f3">3.  I have a question about my invoice, who do I contact?</a></li>
            <li class="tab"><a href="#f4">4.  What is Hunton’s service territory?</a></li>
            <li class="tab"><a href="#f5">5.  What is the latest version/replacement of summit?</a></li>
          </ul>

					<p><a href="<?php bloginfo('url'); ?>/faqs" class="learn">Learn more</a></p>
				</div>
				<div class="col s12 xl6">
					<div class="faq-box" id="f1">
            <h3>How do I request a quote?</h3>
            <p>Submitting a quote request is easy. You can call our main office number at 713-643- 8336 and our receptionist can place you in touch with a solution sales representative, or you can email marketing@huntongroup.com, and our team will forward your request to the appropriate person. Our website “Contact Us” form-fill can also be used to submit quote requests.</p>
          </div>
          <div class="faq-box" id="f2">
            <h3>How do I schedule a service call?</h3>
            <p>Submitting a quote request is easy. You can call our main office number at 713-643- 8336 and our receptionist can place you in touch with a solution sales representative, or you can email marketing@huntongroup.com, and our team will forward your request to the appropriate person. Our website “Contact Us” form-fill can also be used to submit quote requests.</p>
          </div>
          <div class="faq-box" id="f3">
            <h3>I have a question about my invoice, who do I contact?</h3>
            <p>Submitting a quote request is easy. You can call our main office number at 713-643- 8336 and our receptionist can place you in touch with a solution sales representative, or you can email marketing@huntongroup.com, and our team will forward your request to the appropriate person. Our website “Contact Us” form-fill can also be used to submit quote requests.</p>
          </div>
          <div class="faq-box" id="f4">
            <h3>What is Hunton’s service territory?</h3>
            <p>Submitting a quote request is easy. You can call our main office number at 713-643- 8336 and our receptionist can place you in touch with a solution sales representative, or you can email marketing@huntongroup.com, and our team will forward your request to the appropriate person. Our website “Contact Us” form-fill can also be used to submit quote requests.</p>
          </div>
          <div class="faq-box" id="f5">
            <h3>What is the latest version/replacement of summit?</h3>
            <p>Submitting a quote request is easy. You can call our main office number at 713-643- 8336 and our receptionist can place you in touch with a solution sales representative, or you can email marketing@huntongroup.com, and our team will forward your request to the appropriate person. Our website “Contact Us” form-fill can also be used to submit quote requests.</p>
          </div>
				</div>
			</div>
		</div>
	</section>


  <section id="careers" class="content-section scrollify">
    <div class="container">
      <div class="row valign-wrapper">
        <div class="col s12 xl6">
          <h2>Careers<div class="num">06</div></h2>
          <p>Want to work at a company that has been one of the Top Places to Work in Houston for 6 years?</p>
          <p><a href="https://huntongroup.applicantpro.com/jobs/" class="btn-green">JOB OPENINGS</a></p>
        </div>
        <div class="col s12 xl6 center-align">
          <img width="170" src="<?php bloginfo('template_url'); ?>/img/careersl.png">
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="content-section scrollify">
    <div class="container">
      <div class="row valign-wrapper">
        <div class="col s12 xl6">
          <h2>Contact Us<div class="num">07</div></h2>
          <p class="addr">
            Hunton Services<br>5622 Luce Street<br>
            Houston, Texas 77087 
          </p>
          <p class="phone">713 643-8336</p>
          <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3466.242371490553!2d-95.31578168489332!3d29.68375198201488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640be01c60b10af%3A0x3e52beab27e15af0!2sHunton+Services!5e0!3m2!1sru!2skg!4v1512938695670" width="380" height="240" frameborder="0" style="border:0" allowfullscreen></iframe></p>

          <p><a class="family" href="http://www.huntongroup.com/about-us/contact-us">Click here to see Hunton Family of Companies</a></p>
        </div>
        <div class="col s12 xl6 contact-form">
          <h3>How can we help?</h3>
          <p>Thank you for choosing Hunton Services to partner with.  Someone from Hunton Services will be in touch soon.</p>
          <?php echo do_shortcode('[contact-form-7 id="18" title="Contact form 1"]'); ?>
        </div>
      </div>
    </div>
  </section>
	  <script type="text/javascript">
	    $(document).ready(function(){

	    	if($('.intro-video').length){
	    		var padd = $('footer').outerHeight() + $('header').outerHeight();
	    		$('.intro-video').css('height', '-='+$('footer').outerHeight());
	    	}

	        $('.modal').modal({
	          ready: function(modal, trigger) {
	            var videoSrc = modal.find('iframe').attr("src");
	            modal.find('iframe').attr("src", videoSrc+"&amp;autoplay=1");
	          },
	          complete: function() {
	            $('iframe').attr('src', $('iframe').attr('src').replace("&amp;autoplay=1", ""));
	          }
	        });

		      $('.main-slider').slick({
		        arrows: false,
		        dots: true,
	          autoplay: true,
	          autoplaySpeed: 5000
		      });

		      $('.main-slider').append($('.scroll'));

	        var $status = $('.count');
	        var $slickElement = $('.item-slider');

	        $slickElement.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
	            var i = (currentSlide ? currentSlide : 0) + 2;
	            $status.html('<span class="current">' + i + '/</span>' + slick.slideCount);
	        });

	        $slickElement.slick({
	          arrows: true,
	          slidesToShow: 2,
	          slidesToScroll: 1,
	          vertical: true,
	          verticalSwiping: true,
	          infinite: false,
	          nextArrow: $('.arrow-right'),
	          prevArrow: $('.arrow-left')
	        });
	    });
	  </script>
	<?php if(have_posts()): the_post(); ?>
		<div>
			<article class="page">
				<div class="entry_content">
					<?php the_content(); ?>
				</div>
			</article>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>