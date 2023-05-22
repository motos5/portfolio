<?php
/* ================ AJAX Form on Testimonials Page ================ */
add_action( 'wp_ajax_order', 'order_callback' );
add_action( 'wp_ajax_nopriv_order', 'order_callback' );


function order_callback() {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$mail_to = "allmarket198@gmail.com";
        // Form Data
		$name = trim($_POST["name"]);
        $phone = trim($_POST["tel"]);
        $email = trim($_POST["email"]);
        $theme = trim($_POST["subject"]);

        // Message to Admin
		$content = "Name: $name\n";
        $content .= "Phone: $phone\n";
        $content .= "E-mail: $email\n";

        $subject = '"' . esc_html__('Service request', 'wayup').':' . $theme;

		$success = wp_mail($mail_to, $subject, $content);
        if ($success) {
            # Отправляем 200 (okay)
            http_response_code(200);
            echo '"' . esc_html__('Thank you. Your application for the service has been sent to the site administrator.', 'wayup') . '"';
        } else {
            # Отправляем 500 (internal server error)
            http_response_code(500);
            echo '"' . esc_html__('Oops! Something went wrong.', 'wayup') . '"';
        }
	}
	wp_die();
}
/* ================ End AJAX Form on Testimonials Page ================ */