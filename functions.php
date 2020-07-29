// Cambia la dirección de correo electrónico de notificación dependiendo el estado de la república

function cambia_destinatario_de_notificacion( $recipient, $order ) {
    global $woocommerce;
    
    //podría cambiarse a un switch
    if ( $order->get_billing_state() == 'PU' ) { //Puebla
        $recipient = "me@jesuscm.dev";
    } elseif ( $order->get_billing_state() == 'OA' ) { //Oaxaca
        $recipient = "hola@jesuscm.dev";
    }else {
		$recipient = "contacto@jesuscm.dev";
}
    return $recipient;
}
add_filter('woocommerce_email_recipient_new_order', 'cambia_destinatario_de_notificacion', 1, 2);

