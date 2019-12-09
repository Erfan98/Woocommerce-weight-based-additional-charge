//This Snippet is Used for Adding Extra Cargo Charge for as condition given
add_action( 'woocommerce_cart_calculate_fees', 'cargo_Charge' );
  
function cargo_charge() {
   // Edit "Fee" and "5" below to control Label and Amount
   $cart_weight = WC()->cart->get_cart_contents_weight();
		$cost = ($cart_weight*1.4);
	if($cost<=500){
   WC()->cart->add_fee( 'Cargo Charge', 500);
	}
	else{
		WC()->cart->add_fee( 'Cargo Charge', $cost);
	}
		
}
