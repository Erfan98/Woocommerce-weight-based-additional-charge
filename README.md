# Woocommerce-weight-based-additional-charge
Scenerio::
There are many website owners who wants to add additonal charges for there cart weight. The case becomes more complecated when owners want a minimum charge whatever the weight becomes.
such as the owner have fixed price on his weight,assume its 0.20 cents per gram(Assume)
now the cost= (user inputed weight in gram)*0.20;
but the minimum cost is 2$
so if a user order a product which has 5 grams the cost should be 1$ but in this case it have to show 2$ although.

so sipmly add this code to your wordpress child theme and you are good to go.



//This Snippet is Used for Adding Extra Cargo Charge for as condition given
add_action( 'woocommerce_cart_calculate_fees', 'cargo_Charge' );
  
function cargo_charge() {
   // Edit "Cargo Charge" and "0.20" below to control Label and Amount
   $cart_weight = WC()->cart->get_cart_contents_weight();
		$cost = ($cart_weight*0.20);
	if($cost<=500){
   WC()->cart->add_fee( 'Cargo Charge', 2);
	}
	else{
		WC()->cart->add_fee( 'Cargo Charge', $cost);
	}
		
}
