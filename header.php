<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header role="banner" class="site-header">
    <div class="skip-links-container">  
        <a href="#main" class="skip-links">Skip to Main Content</a>
        <a href="#footer" class="skip-links">Skip to Footer</a>
    </div>
    <!-- skip-links-container -->
    <div class="container">
      <div class="header-row">
        <nav role="navigation" aria-label="Main navigation to all pages">
        
        <button class="hamburger hamburger-spring" type="button" aria-controls="headerMobileWrapper">
          <span class="screen-reader-text">Navigation Menu</span>
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
        <div class="logo-bar">
          <h1 class="header-logo">
            <a href="/" class="homeLink">
              <img src="<?php echo get_template_directory_uri()?>/images/logo.png" alt="Bonnie Raitt" height=68 width=336>
              <span class="screen-reader-text">Bonnie Raitt</span>
            </a>
          </h1>
        </div>
        <div class="header-mobile-wrapper" id="headerMobileWrapper">
          <div class="header-mobile-menu-container">
            <div class="header-row-3">
              <div class="header-main-navigation">
                <ul id="menu-primary" class="header-primary-nav">
                  <div class="menu-left">
                  <li id="menu-item-978" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-978"><a href="/" aria-current="page">Home</a></li>
                  <li id="menu-item-979" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-979"><a href="https://tour.BonnieRaitt.com/">Tour</a></li>
                  <li id="menu-item-980" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-980"><a href="/news/" aria-haspopup="true" aria-expanded="false">News</a>
                    <ul class="sub-menu">
                      <li id="menu-item-1013" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1013"><a href="/news/latest-news/">Latest News</a></li>
                      <li id="menu-item-1012" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1012"><a href="/news/reviews/">Reviews</a></li>
                      <li id="menu-item-1011" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1011"><a href="/news/press-archive/">Press Archive</a></li>
                    </ul>
                  </li>
                  <li id="menu-item-981" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-981"><a href="/music/" aria-haspopup="true" aria-expanded="false">Music</a>
                    <ul class="sub-menu">
                      <li id="menu-item-1056" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1056"><a href="/music/latest-release/">Latest Release</a></li>
                      <li id="menu-item-1055" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1055"><a href="/music/music-catalog/">Music Catalog</a></li>
                      <li id="menu-item-1054" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1054"><a href="/music/guest-discography/">Guest Discography</a></li>
                    </ul>
                  </li>
                  <li id="menu-item-982" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-982"><a href="/gallery/bonnie/">Gallery</a></li>
                  </div>
                  <div class="menu-right">
                  <li id="menu-item-983" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-983"><a href="/activism/" aria-haspopup="true" aria-expanded="false">Activism</a>
                  <ul class="sub-menu">
                    <li id="menu-item-1185" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1185"><a href="/activism/benefit-history/">Benefit History</a></li>
                    <li id="menu-item-1186" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1186"><a href="/activism/activism-on-tour/">Activism On Tour</a></li>
                  </ul>
                  </li>
                  <li id="menu-item-984" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-984"><a href="/bio/" aria-haspopup="true" aria-expanded="false">Bio</a>
                  <ul class="sub-menu">
                    <li id="menu-item-1188" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1188"><a href="/bio/bonnies-story/">Bonnie’s Story</a></li>
                    <li id="menu-item-1187" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1187"><a href="/bio/the-band/">The Band</a></li>
                  </ul>
                  </li>
                  <li id="menu-item-985" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-985"><a href="/video/">Video</a></li>
                  <li id="menu-item-986" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-986"><a href ="http://stores.portmerch.com/bonnieraitt/" target="_blank" rel="noopener noreferrer">Store</a></li>
                  <li id="menu-item-987" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-987"><a href="/members/" aria-haspopup="true" aria-expanded="false">Members</a>
                  <ul class="sub-menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1189"><a href="/newsletter/">Newsletter</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1190"><a href="/sms-updates/">Text/SMS Updates</a></li>
                  </ul>
                </li>
                  </div>
                </ul>
                <div class="header-social">
                  <ul class="menu">
                  <li>
                    <a href="https://twitter.com/TheBonnieRaitt" title="X" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg> <span class="screen-reader-text">X</span>
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
                    <li>
                      <a href="https://twitter.com/TheBonnieRaitt" target="_blank" title="Youtube">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" class="svg-inline--fa fa-youtube fa-w-18" aria-label="Youtube" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>
                        <span class="screen-reader-text">Youtube</span>
                      </a>
                    </li>
                    <li>
            <a href="https://www.tiktok.com/@bonnieraittofficial" target="_blank" title="TikTok">
              <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg>
              <span class="screen-reader-text">TikTok</span>
            </a>
          </li>
                  </ul>
                </div>
              </div>
              <!-- header-main-navigation -->
            </div>
            <!-- header-row-3 -->
          </div>
          <!-- header-mobile-menu-container -->
        </div>
        <!-- header-mobile-wrapper -->
      </nav>
        
        
      </div>
      <!-- header-row -->
    </div>
  </header>