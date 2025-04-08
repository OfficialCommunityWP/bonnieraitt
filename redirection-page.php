<?php /*Template Name: Page Redirect */?>
<?php
	 
	if (is_page('Tickets')){
  		wp_redirect("https://tour.markknopfler.com", 301);
  		exit;
		}
	elseif (is_page('music')){
  		header('Location: /discography/privateering/', 301);
		exit();
		}
	elseif (is_page('store')){
  		wp_redirect("http://alistapart.com", 301);
  		exit;
		}
	//elseif (is_page('In Our Nature Promotion')){
  	//	wp_redirect("http://store.bluerodeo.com/InOurNaturePromotion");
  	//exit;
	//	}
	
	else{}
?>