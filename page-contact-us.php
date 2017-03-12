<?php
/*
Template Name: contact-us
*/
// if the submit button is clicked, send the email
$_SESSION['taptip_contact_alert_display']='none';
if ( isset( $_POST['cf-submitted'] ) && !empty($_POST['cf-submitted'])) {
	//cf-submitted
	if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        //your site secret key
        $secret = '6LfXBxcUAAAAAMcerx24fbV5ju6JyQn_cq65UZQi';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success) {
		    // sanitize form values
		    $name    = sanitize_text_field( $_POST["cf-name"] );
		    $email   = sanitize_email( $_POST["cf-email"] );
		    $subject = sanitize_text_field( $_POST["cf-subject"] );
		    $message = esc_textarea( $_POST["cf-message"] );

		    // get the blog administrator's email address
		    $to = get_option( 'admin_email' );

		    $headers = "From: $name <$email>" . "\r\n";

		    // If email has been process for sending, display a success message
		    if ( wp_mail( $to, $subject, $message, $headers ) ) {
		    	$_SESSION['taptip_contact_alert_type']='success';
		    	$_SESSION['taptip_contact_alert_message']='<p>Thanks for contacting me, expect a response soon.</p>';
		    	$_SESSION['taptip_contact_alert_display']='block';
		    	unset($_POST);
		    	wp_redirect( esc_url( $_SERVER['REQUEST_URI'] ) );
				exit;
		    } else {
		    	$_SESSION['taptip_contact_alert_type']='danger';
		    	$_SESSION['taptip_contact_alert_message']='<p>An unexpected error occurred.</p>';
		    	$_SESSION['taptip_contact_alert_display']='block';
		    	unset($_POST['cf-submitted']);
		    }
		} else {
			$_SESSION['taptip_contact_alert_type']='danger';
	    	$_SESSION['taptip_contact_alert_message']='<p>Robot verification failed, please try again.</p>';
	    	$_SESSION['taptip_contact_alert_display']='block';
	    	unset($_POST['cf-submitted']);
		}
	} else {
		$_SESSION['taptip_contact_alert_type']='danger';
    	$_SESSION['taptip_contact_alert_message']='<p>Please click on the reCAPTCHA box.</p>';
    	$_SESSION['taptip_contact_alert_display']='block';
    	unset($_POST['cf-submitted']);
	}

    //cf-submitted
}
?>
<?php get_header(); ?>
<!-- INDEX: End of Header  -->
		<!-- INDEX: Start of Content  -->
		<section id="contact">
		    <div class="container">
		        <h2>Contact Us</h2>
		        <hr class="sep">
		        <div id="cf-alert-messages" class="col-md-6 col-md-offset-3" style="display:<?php echo $_SESSION['taptip_contact_alert_display']; ?>;">
		        	<div  class="alert alert-<?php echo $_SESSION['taptip_contact_alert_type']; ?>" role="alert"><?php echo $_SESSION['taptip_contact_alert_message']; ?></div>
		        <?php 
		        unset($_SESSION['taptip_contact_alert_display']);
		        unset($_SESSION['taptip_contact_alert_type']);
		        unset($_SESSION['taptip_contact_alert_message']);
				$_SESSION['taptip_contact_alert_display']='none';
		        ?>
		        </div>
		        <div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
		            <form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>" method="post" name="contact-form" id="contact-form" >
		                <div class="form-group">
		                    <!-- <input type="text" class="form-control" name="cf-name" placeholder="Name" pattern="[a-zA-Z0-9 ]+" value="<?php echo ( isset( $_POST["cf-name"] ) ? esc_attr( $_POST["cf-name"] ) : '' ); ?>" size="50" required> -->
		                    <input type="text" class="form-control" name="cf-name" placeholder="Name" data-parsley-pattern="[a-zA-Z0-9 ]+" value="<?php echo ( isset( $_POST["cf-name"] ) ? esc_attr( $_POST["cf-name"] ) : '' ); ?>" maxlength="256" required>
		                </div>
		                <div class="form-group">
		                    <!-- <input type="email" class="form-control" name="cf-email" placeholder="Email" value="<?php ( isset( $_POST["cf-email"] ) ? esc_attr( $_POST["cf-email"] ) : '' ); ?>" size="150" required> -->
		                    <input type="email" class="form-control" name="cf-email" placeholder="Email" value="<?php echo ( isset( $_POST["cf-email"] ) ? esc_attr( $_POST["cf-email"] ) : '' ); ?>" maxlength="256" required>
		                </div>
		                <div class="form-group">
		                    <!-- <input type="text" class="form-control" name="cf-subject" placeholder="Subject" name="cf-subject" pattern="[a-zA-Z ]+" value="<?php ( isset( $_POST["cf-subject"] ) ? esc_attr( $_POST["cf-subject"] ) : '' );?>" size="50" required> -->
		                    <input type="text" class="form-control" name="cf-subject" placeholder="Subject" name="cf-subject" data-parsley-pattern="[a-zA-Z0-9 ]+" value="<?php echo ( isset( $_POST["cf-subject"] ) ? esc_attr( $_POST["cf-subject"] ) : '' );?>" maxlength="256" required>
		                </div>
		                <div class="form-group">
		                    <textarea class="form-control" rows="3" name="cf-message" placeholder="Message" maxlength="640" required><?php echo ( isset( $_POST["cf-message"] ) ? esc_attr( $_POST["cf-message"] ) : '' ); ?></textarea>
		                </div>
		                <div class="form-group">
		                	<div class="g-recaptcha" data-sitekey="6LfXBxcUAAAAAKXnOP7veU0PKfxaKfFz8JorwzN5"></div>
		                </div>
		                <input type="submit" class="btn-block" name="cf-submitted" value="Send"/>
		            </form>
		        </div>
		    </div>
		</section>
		<!-- INDEX: End of Content  -->
		<!-- INDEX: Start of Sidebar  -->
		<?php 
		// get_sidebar(); 
		?>
		<!-- INDEX: End of Sidebar  -->
<!-- INDEX: Start of Content  -->
<?php get_footer(); ?>