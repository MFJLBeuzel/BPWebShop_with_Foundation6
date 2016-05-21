<?php
    include('header.php');
?>

  <div id="contact">
          <hr>
          <h1>Get in touch with us!</h1>
          
<?php
    // Check for Header Injections
    // You dont't want people get junk mail with your company name
    function has_header_injection($str) {
    return preg_match( "/[\r\n]/", $str );
    }

    if (isset($_POST['contact_submit'])) {

			// Trimmed form data asagnide to a variable
			$name	= trim($_POST['name']);
			$email	= trim($_POST['email']);
			$msg	= $_POST['message'];

      // When $name or $email have header injections
			if (has_header_injection($name) || has_header_injection($email)) {

				die(); // true will result in killing script

			}

      if (!$name || !$email || !$msg) {
				echo '<h4 class="error">All fields are required.</h4><a href="contact.php"
        class="button block">Go back and please try again</a>';
				exit;
			}

      // The recipient email as a variable
			$to	= "maartenbeuzel@gmail.com";

			// Create a subject
			$subject = "$name sent you a message via your contact form";

			// Body message
			$message .= "Name: $name\r\n";
			$message .= "Email: $email\r\n\r\n";
			$message .= "Message:\r\n$msg";

      // If subscribe checkbox checked
			if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe' ) {

				// Add a new line to the $message
				$message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";

			}

      $message = wordwrap($message, 72); // Keep the message ordered

			// Mail headers into a variable
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
			$headers .= "From: " . $name . " <" . $email . ">\r\n";
			$headers .= "X-Priority: 1\r\n"; //to prevent label:spam
			$headers .= "X-MSMail-Priority: High\r\n\r\n";

			// Send the email
			mail($to, $subject, $message, $headers);

?>

<!--Show success message after email has sent -->
<h5>Thanks for contacting Maarten's Vinyl Shop!</h5>
<p>We will contact you as soon as possible.</p>
<p><a href="index.php" class="button block">&laquo;
Go to Home Page</a></p>

<?php
  } else {
?>
          <form method="post" action="" id="contact-form">

              <label for="name">Your name</label>
              <input type="text" id="name" name="name">

              <label for="email">Your email</label>
              <input type="email" id="email" name="email">

              <label for="message">Your message</label>
              <textarea id="message" name="message"></textarea>

              <input type="checkbox" id="subscribe" name="subscribe"
              value="Subscribe">
              <label for="subscribe">Subscribe to newsletter</label>

              <input type="submit" class="button next" name="contact_submit"
              value="Send Message">

          </form>
  <?php
    }
  ?>
