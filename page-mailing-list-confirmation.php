<?php

/*
	Template Name: Mailing List Confirmation
*/

get_header();  ?>

<main class="main general-page" id="main" role="main">
  <div class="container">
    <h2 class="content-title">Mailing List</h2>
      <div id="messageCenter"  class="<?php  echo $_GET['msg'];?>">
          <div id="subscriptionReq" class="msg1">
        	    <p> You're not done! Please check your email to confirm the subscription.</p>
          </div>
          <div id="subscriptionComp" class="msg2">
        	  	<p>You were successfully subscribed. Thank you!</p>
          </div>             
          <div id="noEmail" class="msg3">
            <p>We cannot find your email address in our system. If you believe that you are receiving this message in error, please contact us.</p>
          </div>            
           <div id="error" class="msg4">
              <p>Oops! There was a technical issue. Please try again later and contact us if the problem persists.</p>
          </div>
          <div id="unsubscribe" class="msg5">
            <p> You were successfully unsubscribed. Sorry to see you go!</p>
          </div>
          <div id="alreadySubscribed" class="msg6">
         		 <p>It looks like you had already subscribed. So, you should be all set. If you believe that you are receiving this message in error, please contact us.</p>
          </div>
          <div id="confirmationEmail" class="msg7">
         		 <p>Oops! There was a technical issue and we were not able to send the subscription confirmation request message. Please try again. If the issue persists, please contact us.</p>
          </div>
          <div id="alreadyUnSub" class="msg8">
         		<p>It looks like you had already unsubscribed that email address. So, you should be all set. If you believe that you are receiving this message in error, please contact us.</p>
          </div>
          <div id="noSubs" class="msg9">
         		 <p>Oops! No subscribers found.</p>
          </div>
          <div id="noEmail" class="msg10">
         		 <p>Please provide a valid email address.</p>
          </div>
          <div id="noGroup" class="msg11">
         		 <p>Please select at least one group.</p>
          </div>
          <div id="subSaved" class="msg12">
         		 <p>Welcome back!<br/>It's great to see that you chose to come back and keep receiving our messages.<br/>Thank you!</p>
          </div>
      </div>
      <!-- #messageCenter -->
  </div> 
  <!-- container -->
</main>

<?php get_footer(); ?>
