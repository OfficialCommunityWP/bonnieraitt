<?php /* Template Name: Members Only Default */ ?>

<?php get_header(); ?>

<main class="main members-page" id="main" role="main">
    <div class="container">
	<?php 
      $title = get_field('title');
      $text = get_field('text');
      $background_image = get_field('background_image');
      $alignment = get_field('alignment');
    ?>
    <?php wp_reset_postdata() ?>
    <div class="section-intro <?php echo $alignment ?>" style="background-image: url(<?php echo $background_image ?>;">
      <div class="content">
        <h2 class="content-title"><?php echo $title; ?></h2>
        <img src="<?php echo get_template_directory_uri()?>/images/member-divider.png">
        <p><?php echo $text; ?></p>
        <?php wp_reset_postdata() ?>
      </div>
    </div>
    <!-- end section intro -->
		
<section class="membership-controls">
	<div class="membership-logged-out" style="">
		<form onsubmit="event.preventDefault(); return onSignInSubmit(this);">
			<div class="form-control">
				<label for="Username">Email Address: </label>
				<input type="text" placeholder="Username" name="email">
			</div>
			<div class="form-control">
				<label for="password">Password: </label>
				<input type="password" placeholder="Password" name="password">
			</div>
			<span class="membership-error" style="display: none;"></span>
			<div class="form-checkbox">
				<p>Remember me</p>
				<input type="checkbox" placeholder="Remember Me" name="rememberme" value="false" onchange="this.value=this.checked">
			</div>
			<input type="submit" value="Sign In" class="button-style-1">
		</form>
		<ul class="member-links">
        <li><a href="https://members.bonnieraitt.com/Identity/Account/Register">Register</a></li>
        <li><a href="https://members.bonnieraitt.com/Identity/Account/ForgotPassword">Forgot Password</a></li>
      </ul>
	</div>
	<div class="membership-logged-in" style="display: none;">
		<form onsubmit="event.preventDefault(); return onSignOutSubmit();">
			<label class="membership-logged-in-username" style="display: none;"></label>
				<div class="logged-in-controls">
					<a href="https://members.bonnieraitt.com/Identity/Account/Manage">Manage your account</a>
					<input type="submit" value="Sign Out" class="sign-out-button">
				</div>
		</form>
	</div>
	
</section>


<div class="members-content membership-logged-in" style="display: none;">
				<!-- single-item -->
				<div class="single-item">
					<a href="https://tour.BonnieRaitt.com/">
					<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ticket-alt" class="svg-inline--fa fa-ticket-alt fa-w-18" role="img" aria-label="ticket" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M128 160h320v192H128V160zm400 96c0 26.51 21.49 48 48 48v96c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48v-96c26.51 0 48-21.49 48-48s-21.49-48-48-48v-96c0-26.51 21.49-48 48-48h480c26.51 0 48 21.49 48 48v96c-26.51 0-48 21.49-48 48zm-48-104c0-13.255-10.745-24-24-24H120c-13.255 0-24 10.745-24 24v208c0 13.255 10.745 24 24 24h336c13.255 0 24-10.745 24-24V152z"></path></svg>
					<h3>Member-only Pre-sales and Special Benefit Seats</h3>
				</a>
				<p>Purchase some of the best seats in the house,
hand-selected by her team for Bonnie's upcoming concerts!</p>
			</div>
			<div class="single-item">
					<a href="https://tour.bonnieraitt.com/">
					<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"/></svg>

					<h3>VIP Merch Bundle Add-Ons</h3>
				</a>
				<p>Featuring an exclusive organic cotton tote bag, eco-conscious water bottle, tour poster and more, enhance your concert experience with our VIP Merch Bundle and Deluxe Merch bundle add-ons! For more information visit the Tour page.</p>

			</div>
			<div class="single-item">
					<a href="https://www.bonnieraitt.com/members-JLTbookletlanding/">
					<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="book-open-cover" class="svg-inline--fa fa-solid fa-book-open-cover" role="img" aria-label="book" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M544 32.01c0-19.62-17.5-34.63-36.89-31.62L336 26.86v384l208-46.23V32.01zM304 26.86L132.9 .3828C113.5-2.617 96 12.38 96 32.01v332.6l208 46.23V26.86zM600.2 32.97L576 39.03v325.6c0 14.1-10.42 27.98-25.06 31.24L320 447.2L89.06 395.9C74.42 392.6 64 379.7 64 364.7V39.03L39.76 32.97C19.56 27.92 0 43.19 0 64.01v351.1c0 15 10.42 27.98 25.06 31.24l288 63.1c4.572 1.016 9.311 1.016 13.88 0l288-63.1C629.6 443.1 640 431 640 416V64.01C640 43.19 620.4 27.92 600.2 32.97z"/></svg>

					<h3><em>Just Like That...</em> Digital Booklet PDF</h3>
				</a>
				<p>Thank you for all your support for Bonnie's new album! For those of you asking, we have a digital booklet for <em>Just Like That…</em>, where you can find out about musicians, songwriters, lyrics and more.</p>

				<a class="jlt-button-style-1" href="https://lnk.to/justlikethat_br">Buy/Stream The Album Here</a>
			</div>
			<!-- single-item -->
			<div class="single-item">
				<a href="/gallery/members-gallery/">
					<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="camera" class="svg-inline--fa fa-camera fa-w-16" role="img" aria-label="Camera" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M512 144v288c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48h88l12.3-32.9c7-18.7 24.9-31.1 44.9-31.1h125.5c20 0 37.9 12.4 44.9 31.1L376 96h88c26.5 0 48 21.5 48 48zM376 288c0-66.2-53.8-120-120-120s-120 53.8-120 120 53.8 120 120 120 120-53.8 120-120zm-32 0c0 48.5-39.5 88-88 88s-88-39.5-88-88 39.5-88 88-88 88 39.5 88 88z"></path></svg>
					<h3>Members-only Photo and Video Gallery</h3>
				</a>
				<p>Enjoy this exclusive collection of photos and videos and from the Bonnie Raitt archives.</p>
			</div>
			<div class="single-item">
				<a href="/members/contest/">
					<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="question-circle" class="svg-inline--fa fa-question-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" aria-label="Trivia"><path d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 448c-110.532 0-200-89.431-200-200 0-110.495 89.472-200 200-200 110.491 0 200 89.471 200 200 0 110.53-89.431 200-200 200zm107.244-255.2c0 67.052-72.421 68.084-72.421 92.863V300c0 6.627-5.373 12-12 12h-45.647c-6.627 0-12-5.373-12-12v-8.659c0-35.745 27.1-50.034 47.579-61.516 17.561-9.845 28.324-16.541 28.324-29.579 0-17.246-21.999-28.693-39.784-28.693-23.189 0-33.894 10.977-48.942 29.969-4.057 5.12-11.46 6.071-16.666 2.124l-27.824-21.098c-5.107-3.872-6.251-11.066-2.644-16.363C184.846 131.491 214.94 112 261.794 112c49.071 0 101.45 38.304 101.45 88.8zM298 368c0 23.159-18.841 42-42 42s-42-18.841-42-42 18.841-42 42-42 42 18.841 42 42z"></path></svg>
					<h3>Members-only Contest</h3> </a>
					<p>Enter to win a signed vinyl copy of Bonnie's album <em>Streetlights</em>!</p>
			
				<!-- <p><a href="/newsletter/">Join the BonnieRaitt.com mailing list</a> to be notified about our next exclusive, Members-Only contest!</p> -->
			</div>
			<!-- single-item -->
			<div class="single-item">
				<a href="/shop/">
					<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="unlock" class="svg-inline--fa fa-unlock fa-w-14" role="img" aria-label="Unlock" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 256H152V152.9c0-39.6 31.7-72.5 71.3-72.9 40-.4 72.7 32.1 72.7 72v16c0 13.3 10.7 24 24 24h32c13.3 0 24-10.7 24-24v-16C376 68 307.5-.3 223.5 0 139.5.3 72 69.5 72 153.5V256H48c-26.5 0-48 21.5-48 48v160c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path></svg>
					<h3>Exclusive Merch</h3>
				</a>
				<p>Check out Bonnie's Members-only shop!</p>
			</div>

			
			<!-- single-item -->
			<!-- <div class="single-item">
				<a href="">
					<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="music" class="svg-inline--fa fa-music fa-w-16" role="img" aria-label="music" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M470.38 1.51L150.41 96A32 32 0 0 0 128 126.51v261.41A139 139 0 0 0 96 384c-53 0-96 28.66-96 64s43 64 96 64 96-28.66 96-64V214.32l256-75v184.61a138.4 138.4 0 0 0-32-3.93c-53 0-96 28.66-96 64s43 64 96 64 96-28.65 96-64V32a32 32 0 0 0-41.62-30.49z"></path></svg>
					<h3>Heading</h3>
				</a>
				<p>Paragraph paragraph paragraph paragraph paragraph paragraph paragraph paragraph paragraph paragraph paragraph paragraph paragraph paragraph paragraph paragraph paragraph paragraph paragraph paragraph.</p>
			</div> -->
			<!-- single-item -->
			<!-- <div class="single-item">
				
					<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="camera" class="svg-inline--fa fa-camera fa-w-16" role="img" aria-label="Camera" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M512 144v288c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48h88l12.3-32.9c7-18.7 24.9-31.1 44.9-31.1h125.5c20 0 37.9 12.4 44.9 31.1L376 96h88c26.5 0 48 21.5 48 48zM376 288c0-66.2-53.8-120-120-120s-120 53.8-120 120 53.8 120 120 120 120-53.8 120-120zm-32 0c0 48.5-39.5 88-88 88s-88-39.5-88-88 39.5-88 88-88 88 39.5 88 88z"></path></svg>
					<h3>Members-Only Exclusive Video</h3>
				
				<p>New video coming soon!</p>
			</div> -->
			<!-- single-item -->
		</div>
		<!-- members-content -->

	

	</div>
	<!-- container -->
</main>

<?php get_footer(); ?>