<?php 
//MEMBERSHIP COVER STYLE BELOW, HIDES PAGE CONTENT IN THE SECOND WHILE REDIRECT SCRIPT RUNS  
?>

<style>
	.membership-cover {
		visibility: hidden;
	}
</style>


<?php
// MEMBERSHIP PAGE REDIRECT SCRIPT BELOW
?>


<script type="text/javascript">
	$(document).ready(function(){
		var isloggedin = NOP.Membership.IsLoggedIn();
		if (isloggedin) {
			$('.membership-cover').css({'visibility':'visible'});
			var subscriptions = [ 
				//ATTN: SUBSCRIPTIONS NEED TO BE EDITED HERE
					'f0fd38ec-c4b0-41cf-aac5-d395a6ca3bc1'
				];
		} else {
		//ATTN: MEMBERSHIP LINK NEEDS TO BE EDITED HERE, REDIRECT TO MEMBERSHIP SIGNUP PAGE 
		window.location = "https://members.BonnieRaitt.com/register"
		}
	});
</script> 

<footer class="site-footer" role="contentinfo" id="footer">
  <div class="container">
	<div class="footer-left">
		<div class="footer-social">
      <ul class="menu">
        <li>
          <a href="https://twitter.com/TheBonnieRaitt" title="Twitter" target="_blank">
            <svg aria-hidden="true" focusable="false" aria-label="twitter" data-prefix="fab" data-icon="twitter" class="svg-inline--fa fa-twitter fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
            <span class="screen-reader-text">Twitter</span>
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/bonnieraittofficial/" title="Instagram" target="_blank">
            <svg aria-hidden="true" focusable="false" aria-label="Instagram" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
            <span class="screen-reader-text">Instagram</span>
          </a>
        </li>
        <li>
          <a href="https://www.facebook.com/officialbonnieraitt" title="Facebook" target="_blank">
            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" class="svg-inline--fa fa-facebook-square fa-w-14" role="img" aria-label="Facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path></svg>
            <span class="screen-reader-text">Facebook</span>
          </a>
        </li>
        <!-- <li>
          <a href="" title="Spotify" target="_blank">
            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="spotify" class="svg-inline--fa fa-spotify fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" aria-label="Spotify"><path d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm100.7 364.9c-4.2 0-6.8-1.3-10.7-3.6-62.4-37.6-135-39.2-206.7-24.5-3.9 1-9 2.6-11.9 2.6-9.7 0-15.8-7.7-15.8-15.8 0-10.3 6.1-15.2 13.6-16.8 81.9-18.1 165.6-16.5 237 26.2 6.1 3.9 9.7 7.4 9.7 16.5s-7.1 15.4-15.2 15.4zm26.9-65.6c-5.2 0-8.7-2.3-12.3-4.2-62.5-37-155.7-51.9-238.6-29.4-4.8 1.3-7.4 2.6-11.9 2.6-10.7 0-19.4-8.7-19.4-19.4s5.2-17.8 15.5-20.7c27.8-7.8 56.2-13.6 97.8-13.6 64.9 0 127.6 16.1 177 45.5 8.1 4.8 11.3 11 11.3 19.7-.1 10.8-8.5 19.5-19.4 19.5zm31-76.2c-5.2 0-8.4-1.3-12.9-3.9-71.2-42.5-198.5-52.7-280.9-29.7-3.6 1-8.1 2.6-12.9 2.6-13.2 0-23.3-10.3-23.3-23.6 0-13.6 8.4-21.3 17.4-23.9 35.2-10.3 74.6-15.2 117.5-15.2 73 0 149.5 15.2 205.4 47.8 7.8 4.5 12.9 10.7 12.9 22.6 0 13.6-11 23.3-23.2 23.3z"></path></svg>
            <span class="screen-reader-text">Spotify</span>
          </a>
        </li>

        <li>
          <a href="" title="Apple Music" target="_blank">
            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="apple" class="svg-inline--fa fa-apple fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-label="Apple"><path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path></svg>
            <span class="screen-reader-text">Apple Music</span>
          </a>
        </li> -->
        <li>
          <a href="https://www.youtube.com/channel/UCsKULr2K0JSPUfMZOVzQ4DQ" target="_blank" title="Youtube">
            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" class="svg-inline--fa fa-youtube fa-w-18" aria-label="Youtube" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>
            <span class="screen-reader-text">Youtube</span>
          </a>
        </li>
        <!-- <li>
          <a href="" title="Amazon Music" target="_blank">
            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="amazon" class="svg-inline--fa fa-amazon fa-w-14" aria-label="Amazon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M257.2 162.7c-48.7 1.8-169.5 15.5-169.5 117.5 0 109.5 138.3 114 183.5 43.2 6.5 10.2 35.4 37.5 45.3 46.8l56.8-56S341 288.9 341 261.4V114.3C341 89 316.5 32 228.7 32 140.7 32 94 87 94 136.3l73.5 6.8c16.3-49.5 54.2-49.5 54.2-49.5 40.7-.1 35.5 29.8 35.5 69.1zm0 86.8c0 80-84.2 68-84.2 17.2 0-47.2 50.5-56.7 84.2-57.8v40.6zm136 163.5c-7.7 10-70 67-174.5 67S34.2 408.5 9.7 379c-6.8-7.7 1-11.3 5.5-8.3C88.5 415.2 203 488.5 387.7 401c7.5-3.7 13.3 2 5.5 12zm39.8 2.2c-6.5 15.8-16 26.8-21.2 31-5.5 4.5-9.5 2.7-6.5-3.8s19.3-46.5 12.7-55c-6.5-8.3-37-4.3-48-3.2-10.8 1-13 2-14-.3-2.3-5.7 21.7-15.5 37.5-17.5 15.7-1.8 41-.8 46 5.7 3.7 5.1 0 27.1-6.5 43.1z"></path></svg>
            <span class="screen-reader-text">Amazon Music</span>
          </a>
        </li> -->
      </ul>
    </div>
    <!-- footer-social -->

		<p class="footer-copyright">&copy; BonnieRaitt.com <?php  echo ' ' . date('Y') ?>. All Rights Reserved.</p>
  </div>
  <!-- footer-left -->

  <div class="footer-middle">
    <ul id="myLinks" class="menu">
      <?php  
        // Membership list items prepended here 
      ?>
    </ul>
	<?php wp_nav_menu( array(
				'container' => false,
				'theme_location' => 'footer'
		)); ?>

    <a class="footer-occ-logo" href="http://www.officialcommunity.com/" target="_blank" title="Powered by Official Community">
      <?php 
      // ATTN: edit the theme name here 
      ?>
      <img src="<?php echo home_url( '/' ); ?>wp-content/themes/bonnieraitt/images/occ-logo.png" alt="Powered By Official Community" loading="lazy" width="350" height="110">
		</a>
  </div>

	<div class="footer-right">
	
		<a href="/cookies#SellingData" class="do-not-sell-link">Do Not Sell My Personal Information</a>
  </div>
  <!-- footer-right -->
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>