<?php
/* ================ AJAX Form on Contacts Page ================ */
add_action( 'wp_ajax_contacts', 'contacts_callback' );
add_action( 'wp_ajax_nopriv_contacts', 'contacts_callback' );


function contacts_callback() {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$mail_to = "allmarket198@gmail.com";
        // Form Data
		$name = trim($_POST["name"]);
        $phone = trim($_POST["tel"]);
        $company = trim($_POST["company"]);
        $message = trim($_POST["message"]);

        // Message to Admin
		$content = "Name: $name\n";
        $content .= "Phone: $phone\n";
        $content .= "Company: $company\n";
        $content .= "Message: $message\n";

        $subject = '"' . esc_html__('Message from the contact form on the Contacts Page from site: ', 'wayup') . get_bloginfo('name');

		$success = wp_mail($mail_to, $subject, $content);
        if ($success) {
            # Отправляем 200 (okay)
            http_response_code(200);
            echo '"' . esc_html__('Thank you. Your message has been sent to the site administrator.', 'wayup') . '"';
        } else {
            # Отправляем 500 (internal server error)
            http_response_code(500);
            echo '"' . esc_html__('Oops! Something went wrong.', 'wayup') . '"';
        }
	}
	wp_die();
}
/* ================ End AJAX Form on Testimonials Page ================ */