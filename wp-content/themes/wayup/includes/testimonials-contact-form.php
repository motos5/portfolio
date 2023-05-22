<?php
/* ================ AJAX Form on Testimonials Page ================ */
add_action( 'wp_ajax_my_action', 'my_action_callback' );
add_action( 'wp_ajax_nopriv_my_action', 'my_action_callback' );


function my_action_callback() {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$mail_to = "allmarket198@gmail.com";

		$name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $phone = trim($_POST["tel"]);
        $social = trim($_POST["social"]);
        $message = trim($_POST["message"]);

		$content = "Name: $name\n";
        $content .= "Email: $email\n";
      	$content .= "Phone: $phone\n";
      	$content .= "Social Link: $social\n";
      	$content .= "Message: $message\n";

        $subject = '"' . esc_html__('Application from the site', 'wayup').': "' . get_bloginfo( 'name' );

		$success = wp_mail($mail_to, $subject, $content);
        if ($success) {
            # Отправляем 200 (okay)
            http_response_code(200);
            echo '"' . esc_html__('Thank you. Your review has been successfully sent to the site administrator for review.', 'wayup') . '"';
        } else {
            # Отправляем 500 (internal server error)
            http_response_code(500);
            echo '"' . esc_html__('Oops! Something went wrong.', 'wayup') . '"';
        }
	}
	wp_die();
}
/* ================ End AJAX Form on Testimonials Page ================ */