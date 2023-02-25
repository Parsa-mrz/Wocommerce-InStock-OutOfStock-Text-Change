<?php
add_filter( 'woocommerce_get_availability', 'wcs_custom_get_availability',1,2);
function wcs_custom_get_availability($availability,$_product ) {
   global $product;
	switch($_product->slug){
        // Enter product slug for case
		case "test-1":
            // text for in stock mode 
			if($_product->manage_stock = true){
					$availability['availability'] = str_replace($availability['availability'],"Enter your custom text here $_product->stock_quantity",$availability['availability']);
			}
            // text for out of stock mode 
			if ( ! $_product->is_in_stock() ) {
       				 $availability['availability'] = __('Enter your custom text here', 'woocommerce');
			}

			break;
			
		case "test2":
			if($_product->manage_stock = true){
					$availability['availability'] = str_replace($availability['availability'],"Enter your custom text here $_product->stock_quantity",$availability['availability']);
			}
			if ( ! $_product->is_in_stock() ) {
       				 $availability['availability'] = __(' Enter your custom text here', 'woocommerce');
			}
			break;
			
		case "test3":
			if($_product->manage_stock = true){
					$availability['availability'] = str_replace($availability['availability'],"Enter your custom text here $_product->stock_quantity نفر",$availability['availability']);
			}
			if ( ! $_product->is_in_stock() ) {
       				 $availability['availability'] = __(' Enter your custom text here', 'woocommerce');
			}
			break;
	}


    return $availability;
}