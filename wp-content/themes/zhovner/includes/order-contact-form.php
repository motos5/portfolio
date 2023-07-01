<?php
/* ================ AJAX Product Form ================ */
add_action( 'wp_ajax_order', 'order_callback' );
add_action( 'wp_ajax_nopriv_order', 'order_callback' );


function order_callback() {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$mail_to = "allmarket198@gmail.com";
        // Form Data
		$name = trim($_POST["name"]);
        $phone = trim($_POST["phone"]);
        $message = trim($_POST["message"]);
        $theme = trim($_POST["product"]);

        // Message to Admin
		$content = "Name: $name\n";
        $content .= "Phone: $phone\n";
        $content .= "Message: $message\n";

        $subject = '"' . esc_html__('Service request', 'zhovner').': ' . $theme;

		$success = wp_mail($mail_to, $subject, $content);
        if ($success) {
            # Отправляем 200 (okay)
            http_response_code(200);
            wp_send_json_success(array('message' => 'Your message has been sent successfully.'));
            
        } else {
            # Отправляем 500 (internal server error)
            http_response_code(500);
            wp_send_json_error(array('message' => 'Sorry, your message could not be sent.'));
        }
	}
	wp_die();
}
/* ================ End AJAX Product Form ================ */