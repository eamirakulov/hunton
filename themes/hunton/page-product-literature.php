<?php get_header(); ?>
<div class="page container dev2 literature_page">
	<div class="page-bg" style="background: url(http://design-austin.com/hunton/wp-content/uploads/2017/12/whats_header.jpg) no-repeat top center; background-size: cover;">
		<div class="text">
			<h1>What’s Happening</h1>
			<p></p><p>Hunton comes with a blogging platform, packed with versatile and amazing blog layouts</p>
		</div>
	</div>

	<div class="row flex">
		<div class="col m6 left-col">

			<h2>Product Literature</h2>
			<h5 class="semibold">Search for Current Literature</h5>
			<div class="tiny">Narrow your search by selecting one or more options below.</div>

			<form action="">
				<select>
					<option value="" disabled selected>SELECT PRODUCT TYPE</option>
					<option value="1">Option 1</option>
					<option value="2">Option 2</option>
					<option value="3">Option 3</option>
				</select>

				<select>
					<option value="" disabled selected>SELECT PRODUCT NAME</option>
					<option value="1">Option 1</option>
					<option value="2">Option 2</option>
					<option value="3">Option 3</option>
				</select>

				<select>
					<option value="" disabled selected>SELECT LITERATURE TYPE</option>
					<option value="1">Option 1</option>
					<option value="2">Option 2</option>
					<option value="3">Option 3</option>
				</select>

				<select>
					<option value="" disabled selected>ENGLISH (US)</option>
					<option value="1">Option 1</option>
					<option value="2">Option 2</option>
					<option value="3">Option 3</option>
				</select>

				<input type="text" placeholder="ENTER KEYWORD OR MODEL#">

				<input type="submit" value="SUBMIT" class="btn-default blue">
			</form>
		</div>
		<div class="col m6 right-col">
			<img src="<?php bloginfo('template_url'); ?>/img/product-literature.svg" alt="">
		</div>
	</div>

</div>



<?php get_footer(); ?>