<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function products_priority(){
	$priorityArray = array(1=>50983,2=>11715,3=>43554,4=>43574,5=>15688,6=>15684,7=>15689,8=>15693,9=>13707,10=>44845,11=>14665,12=>51219,13=>16418,14=>46157,15=>52431,16=>16582,17=>16561,18=>16565,19=>16572,20=>15522,21=>15516,22=>50981,23=>16575,24=>16563,25=>16574,26=>47849,27=>16577,28=>12045,29=>48922,30=>26821,31=>48923,32=>50156,33=>47491,34=>48815,35=>48507,36=>48814);
	return $priorityArray;
}
function products_checkot_process(){
	$carProduct = WC()->cart;
	foreach ($carProduct->cart_contents as $key => $value) {
		$cartProductList[] = $value['product_id'];
	}

	//-----------------------------------------------------
	// Puppy Preschool 7-Session Puppy Dog Training Class
	//-----------------------------------------------------
	if(in_array(50983, $cartProductList)){
		$product_list = array(11984,14571);
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
			$product_list[] = 43544;
		}
		$result = array_diff($product_list, $cartProductList);
		array_unshift($result , 50983);
		$ProductPage = array(50983=>50983,11984=>52239,14571=>52241,43544=>52233);
		for($i=0;$i<count($result);$i++){
			$next = $result[$i+1];
			$current = $result[$i];
			$next_page = $ProductPage[$next];
			if($ProductPage[$current]==52233){
				$allUrlArray[50983]['decline_url'][$ProductPage[$current]] = get_the_permalink(52235);
				$allUrlArray[50983]['add_to_cart_url'][$ProductPage[$current]] = get_the_permalink(52234);
				$allUrlArray[50983]['decline_url'][52235] = get_site_url()."/shop/checkout";
				$allUrlArray[50983]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
				$allUrlArray[50983]['decline_url'][52234] = get_site_url()."/shop/checkout";
				$allUrlArray[50983]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
			}elseif($i==(count($result)-1)){
				$allUrlArray[50983]['add_to_cart_url'][$ProductPage[$current]] = get_site_url()."/shop/checkout";
				$allUrlArray[50983]['decline_url'][$ProductPage[$current]] = get_site_url()."/shop/checkout";
			}else{
				$allUrlArray[50983]['add_to_cart_url'][$ProductPage[$current]] = get_the_permalink($next_page);
				$allUrlArray[50983]['decline_url'][$ProductPage[$current]] = get_the_permalink($next_page);
			}
		}
	}

	//-----------------------------------------------------
	// Basic Training 7-Session Dog Training Class For Adult Dogs 5 Months and Older
	//-----------------------------------------------------

	if(in_array(11715, $cartProductList)){
		$product_list = array(50907);
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
			$product_list[] = 43544;
		}
		$result = array_diff($product_list, $cartProductList);
		array_unshift($result , 11715);
		$ProductPage = array(11715=>11715,50907=>52238,43544=>52233);
		for($i=0;$i<count($result);$i++){
			$next = $result[$i+1];
			$current = $result[$i];
			$next_page = $ProductPage[$next];
			if($ProductPage[$current]==52233){
				$allUrlArray[11715]['decline_url'][$ProductPage[$current]] = get_the_permalink(52235);
				$allUrlArray[11715]['add_to_cart_url'][$ProductPage[$current]] = get_the_permalink(52234);
				$allUrlArray[11715]['decline_url'][52235] = get_site_url()."/shop/checkout";
				$allUrlArray[11715]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
				$allUrlArray[11715]['decline_url'][52234] = get_site_url()."/shop/checkout";
				$allUrlArray[11715]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
			}elseif($i==(count($result)-1)){
				$allUrlArray[11715]['add_to_cart_url'][$ProductPage[$current]] = get_site_url()."/shop/checkout";
				$allUrlArray[11715]['decline_url'][$ProductPage[$current]] = get_site_url()."/shop/checkout";
			}else{
				$allUrlArray[11715]['add_to_cart_url'][$ProductPage[$current]] = get_the_permalink($next_page);
				$allUrlArray[11715]['decline_url'][$ProductPage[$current]] = get_the_permalink($next_page);
			}
		}
	}

	//-----------------------------------------------------
	// Puppy Preschool Package
	//-----------------------------------------------------

	if(in_array(43554, $cartProductList)){
		$product_list = array(11984);
		$result = array_diff($product_list, $cartProductList);
		array_unshift($result , 43554);
		$ProductPage = array(43554=>43554,11984=>52239);
		for($i=0;$i<count($result);$i++){
			$next = $result[$i+1];
			$current = $result[$i];
			$next_page = $ProductPage[$next];
			if($i==(count($result)-1)){
				$allUrlArray[43554]['add_to_cart_url'][$ProductPage[$current]] = get_site_url()."/shop/checkout";
				$allUrlArray[43554]['decline_url'][$ProductPage[$current]] = get_site_url()."/shop/checkout";
			}else{
				$allUrlArray[43554]['add_to_cart_url'][$ProductPage[$current]] = get_the_permalink($next_page);
				$allUrlArray[43554]['decline_url'][$ProductPage[$current]] = get_the_permalink($next_page);
			}
		}
	}

	//-----------------------------------------------------
	// Basic Training Package
	//-----------------------------------------------------

	if(in_array(43574, $cartProductList)){
		$product_list = array(50907);
		$result = array_diff($product_list, $cartProductList);
		array_unshift($result , 43574);
		$ProductPage = array(43574=>43574,50907=>52238);
		for($i=0;$i<count($result);$i++){
			$next = $result[$i+1];
			$current = $result[$i];
			$next_page = $ProductPage[$next];
			if($i==(count($result)-1)){
				$allUrlArray[43574]['add_to_cart_url'][$ProductPage[$current]] = get_site_url()."/shop/checkout";
				$allUrlArray[43574]['decline_url'][$ProductPage[$current]] = get_site_url()."/shop/checkout";
			}else{
				$allUrlArray[43574]['add_to_cart_url'][$ProductPage[$current]] = get_the_permalink($next_page);
				$allUrlArray[43574]['decline_url'][$ProductPage[$current]] = get_the_permalink($next_page);
			}
		}
	}

	//-----------------------------------------------------
	// Private Consultation & Training, Initial Session
	//-----------------------------------------------------

	if(in_array(15688, $cartProductList)){
		//$allUrlArray = priority_private_same(15688);
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[15688]['add_to_cart_url'][15688] = get_the_permalink(52233);
		$allUrlArray[15688]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[15688]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[15688]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[15688]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[15688]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[15688]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[15688]['decline_url'][15688] = get_site_url()."/shop/checkout";
			$allUrlArray[15688]['add_to_cart_url'][15688] = get_site_url()."/shop/checkout";
		}
	}

	//-------------------------------------------------------
	// Private Consultation & Training Package, Five Sessions
	//-------------------------------------------------------

	if(in_array(15684, $cartProductList)){
		//$allUrlArray = priority_private_same(15688);
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[15684]['add_to_cart_url'][15684] = get_the_permalink(52233);
		$allUrlArray[15684]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[15684]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[15684]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[15684]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[15684]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[15684]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[15684]['decline_url'][15684] = get_site_url()."/shop/checkout";
			$allUrlArray[15684]['add_to_cart_url'][15684] = get_site_url()."/shop/checkout";
		}
	}


	//-------------------------------------------------------
	// Private Consultation & Training, Follow-up Session
	//-------------------------------------------------------

	if(in_array(15689, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[15689]['add_to_cart_url'][15689] = get_the_permalink(52233);
		$allUrlArray[15689]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[15689]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[15689]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[15689]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[15689]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[15689]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[15689]['decline_url'][15689] = get_site_url()."/shop/checkout";
			$allUrlArray[15689]['add_to_cart_url'][15689] = get_site_url()."/shop/checkout";
		}
	}


	//---------------------------------------------------------------------------
	// Private Consultation & Training, Follow-up Training Package, Five Sessions
	//---------------------------------------------------------------------------

	if(in_array(15693, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[15693]['add_to_cart_url'][15693] = get_the_permalink(52233);
		$allUrlArray[15693]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[15693]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[15693]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[15693]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[15693]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[15693]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[15693]['decline_url'][15693] = get_site_url()."/shop/checkout";
			$allUrlArray[15693]['add_to_cart_url'][15693] = get_site_url()."/shop/checkout";
		}
	}

	//---------------------------------------------------------------------------
	// Dog Boarding for Adult Dogs
	//---------------------------------------------------------------------------

	if(in_array(13707, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[13707]['add_to_cart_url'][13707] = get_the_permalink(52233);
		$allUrlArray[13707]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[13707]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[13707]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[13707]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[13707]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[13707]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[13707]['decline_url'][13707] = get_site_url()."/shop/checkout";
			$allUrlArray[13707]['add_to_cart_url'][13707] = get_site_url()."/shop/checkout";
		}
	}


	//---------------------------------------------------------------------------
	// Dog Boarding for Puppies
	//---------------------------------------------------------------------------

	if(in_array(44845, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[44845]['add_to_cart_url'][44845] = get_the_permalink(52233);
		$allUrlArray[44845]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[44845]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[44845]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[44845]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[44845]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[44845]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[44845]['decline_url'][44845] = get_site_url()."/shop/checkout";
			$allUrlArray[44845]['add_to_cart_url'][44845] = get_site_url()."/shop/checkout";
		}
	}


	//---------------------------------------------------------------------------
	// Basic Training Online Course Special Offer
	//---------------------------------------------------------------------------

	if(in_array(51219, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[51219]['add_to_cart_url'][51219] = get_the_permalink(52233);
		$allUrlArray[51219]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[51219]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[51219]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[51219]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[51219]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[51219]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[51219]['decline_url'][51219] = get_site_url()."/shop/checkout";
			$allUrlArray[51219]['add_to_cart_url'][51219] = get_site_url()."/shop/checkout";
		}
	}

	//---------------------------------------------------------------------------
	// Canine Good Citizen Test Preparation Class and CGC Test
	//---------------------------------------------------------------------------

	if(in_array(16418, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[16418]['add_to_cart_url'][16418] = get_the_permalink(52233);
		$allUrlArray[16418]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[16418]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[16418]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[16418]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[16418]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[16418]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[16418]['decline_url'][16418] = get_site_url()."/shop/checkout";
			$allUrlArray[16418]['add_to_cart_url'][16418] = get_site_url()."/shop/checkout";
		}
	}


	//---------------------------------------------------------------------------
	// Distracted Dogs
	//---------------------------------------------------------------------------

	if(in_array(46157, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[46157]['add_to_cart_url'][46157] = get_the_permalink(52233);
		$allUrlArray[46157]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[46157]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[46157]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[46157]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[46157]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[46157]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[46157]['decline_url'][46157] = get_site_url()."/shop/checkout";
			$allUrlArray[46157]['add_to_cart_url'][46157] = get_site_url()."/shop/checkout";
		}
	}


	//---------------------------------------------------------------------------
	// Dog Parkour
	//---------------------------------------------------------------------------

	if(in_array(52431, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[52431]['add_to_cart_url'][52431] = get_the_permalink(52233);
		$allUrlArray[52431]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[52431]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[52431]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[52431]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[52431]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[52431]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[52431]['decline_url'][52431] = get_site_url()."/shop/checkout";
			$allUrlArray[52431]['add_to_cart_url'][52431] = get_site_url()."/shop/checkout";
		}
	}


	//---------------------------------------------------------------------------
	// Dogs Unleashed
	//---------------------------------------------------------------------------

	if(in_array(16582, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[16582]['add_to_cart_url'][16582] = get_the_permalink(52233);
		$allUrlArray[16582]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[16582]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[16582]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[16582]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[16582]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[16582]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[16582]['decline_url'][16582] = get_site_url()."/shop/checkout";
			$allUrlArray[16582]['add_to_cart_url'][16582] = get_site_url()."/shop/checkout";
		}
	}


	//---------------------------------------------------------------------------
	// Feisty Fido
	//---------------------------------------------------------------------------

	if(in_array(16561, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[16561]['add_to_cart_url'][16561] = get_the_permalink(52233);
		$allUrlArray[16561]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[16561]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[16561]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[16561]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[16561]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[16561]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[16561]['decline_url'][16561] = get_site_url()."/shop/checkout";
			$allUrlArray[16561]['add_to_cart_url'][16561] = get_site_url()."/shop/checkout";
		}
	}


	//---------------------------------------------------------------------------
	// Fun & Games
	//---------------------------------------------------------------------------

	if(in_array(16565, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[16565]['add_to_cart_url'][16565] = get_the_permalink(52233);
		$allUrlArray[16565]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[16565]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[16565]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[16565]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[16565]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[16565]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[16565]['decline_url'][16565] = get_site_url()."/shop/checkout";
			$allUrlArray[16565]['add_to_cart_url'][16565] = get_site_url()."/shop/checkout";
		}
	}


	//---------------------------------------------------------------------------
	// Get Fit Class
	//---------------------------------------------------------------------------

	if(in_array(16572, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[16572]['add_to_cart_url'][16572] = get_the_permalink(52233);
		$allUrlArray[16572]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[16572]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[16572]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[16572]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[16572]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[16572]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[16572]['decline_url'][16572] = get_site_url()."/shop/checkout";
			$allUrlArray[16572]['add_to_cart_url'][16572] = get_site_url()."/shop/checkout";
		}
	}


	//---------------------------------------------------------------------------
	// Intermediate Training
	//---------------------------------------------------------------------------

	if(in_array(15522, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[15522]['add_to_cart_url'][15522] = get_the_permalink(52233);
		$allUrlArray[15522]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[15522]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[15522]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[15522]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[15522]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[15522]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[15522]['decline_url'][15522] = get_site_url()."/shop/checkout";
			$allUrlArray[15522]['add_to_cart_url'][15522] = get_site_url()."/shop/checkout";
		}
	}


	//---------------------------------------------------------------------------
	// Juvenile Delinquents: Mind Your Manners
	//---------------------------------------------------------------------------

	if(in_array(15516, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[15516]['add_to_cart_url'][15516] = get_the_permalink(52233);
		$allUrlArray[15516]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[15516]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[15516]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[15516]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[15516]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[15516]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[15516]['decline_url'][15516] = get_site_url()."/shop/checkout";
			$allUrlArray[15516]['add_to_cart_url'][15516] = get_site_url()."/shop/checkout";
		}
	}


	//---------------------------------------------------------------------------
	// Polite Pooches in Public
	//---------------------------------------------------------------------------

	if(in_array(50981, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[50981]['add_to_cart_url'][50981] = get_the_permalink(52233);
		$allUrlArray[50981]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[50981]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[50981]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[50981]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[50981]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[50981]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[50981]['decline_url'][50981] = get_site_url()."/shop/checkout";
			$allUrlArray[50981]['add_to_cart_url'][50981] = get_site_url()."/shop/checkout";
		}
	}


	//---------------------------------------------------------------------------
	// Rabbit Recall
	//---------------------------------------------------------------------------

	if(in_array(16575, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[16575]['add_to_cart_url'][16575] = get_the_permalink(52233);
		$allUrlArray[16575]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[16575]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[16575]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[16575]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[16575]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[16575]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[16575]['decline_url'][16575] = get_site_url()."/shop/checkout";
			$allUrlArray[16575]['add_to_cart_url'][16575] = get_site_url()."/shop/checkout";
		}
	}


	//---------------------------------------------------------------------------
	// Rally Obedience for Fun
	//---------------------------------------------------------------------------

	if(in_array(16563, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[16563]['add_to_cart_url'][16563] = get_the_permalink(52233);
		$allUrlArray[16563]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[16563]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[16563]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[16563]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[16563]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[16563]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[16563]['decline_url'][16563] = get_site_url()."/shop/checkout";
			$allUrlArray[16563]['add_to_cart_url'][16563] = get_site_url()."/shop/checkout";
		}
	}

	//---------------------------------------------------------------------------
	// The Nose Knows
	//---------------------------------------------------------------------------

	if(in_array(16574, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[16574]['add_to_cart_url'][16574] = get_the_permalink(52233);
		$allUrlArray[16574]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[16574]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[16574]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[16574]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[16574]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[16574]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[16574]['decline_url'][16574] = get_site_url()."/shop/checkout";
			$allUrlArray[16574]['add_to_cart_url'][16574] = get_site_url()."/shop/checkout";
		}
	}


	//---------------------------------------------------------------------------
	// Therapy Dog Class
	//---------------------------------------------------------------------------

	if(in_array(47849, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[47849]['add_to_cart_url'][47849] = get_the_permalink(52233);
		$allUrlArray[47849]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[47849]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[47849]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[47849]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[47849]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[47849]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[47849]['decline_url'][47849] = get_site_url()."/shop/checkout";
			$allUrlArray[47849]['add_to_cart_url'][47849] = get_site_url()."/shop/checkout";
		}
	}


	//---------------------------------------------------------------------------
	// Tricks for Treats
	//---------------------------------------------------------------------------

	if(in_array(16577, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[16577]['add_to_cart_url'][16577] = get_the_permalink(52233);
		$allUrlArray[16577]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[16577]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[16577]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[16577]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[16577]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[16577]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[16577]['decline_url'][16577] = get_site_url()."/shop/checkout";
			$allUrlArray[16577]['add_to_cart_url'][16577] = get_site_url()."/shop/checkout";
		}
	}



	//-----------------------------------------------------
	// Basic Training Online Course
	//-----------------------------------------------------

	if(in_array(14665, $cartProductList)){
		$product_list = array(40486);
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
			$product_list[] = 43544;
		}
		$result = array_diff($product_list, $cartProductList);
		array_unshift($result , 14665);
		$ProductPage = array(14665=>14665,40486=>52535,43544=>52233);
		for($i=0;$i<count($result);$i++){
			$next = $result[$i+1];
			$current = $result[$i];
			$next_page = $ProductPage[$next];
			if($ProductPage[$current]==52233){
				$allUrlArray[14665]['decline_url'][$ProductPage[$current]] = get_the_permalink(52235);
				$allUrlArray[14665]['add_to_cart_url'][$ProductPage[$current]] = get_the_permalink(52234);
				$allUrlArray[14665]['decline_url'][52235] = get_site_url()."/shop/checkout";
				$allUrlArray[14665]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
				$allUrlArray[14665]['decline_url'][52234] = get_site_url()."/shop/checkout";
				$allUrlArray[14665]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
			}elseif($i==(count($result)-1)){
				$allUrlArray[14665]['add_to_cart_url'][$ProductPage[$current]] = get_site_url()."/shop/checkout";
				$allUrlArray[14665]['decline_url'][$ProductPage[$current]] = get_site_url()."/shop/checkout";
			}else{
				$allUrlArray[14665]['add_to_cart_url'][$ProductPage[$current]] = get_the_permalink($next_page);
				$allUrlArray[14665]['decline_url'][$ProductPage[$current]] = get_the_permalink($next_page);
			}
		}
	}

	//-----------------------------------------------------
	// Puppy Nipping Dog Training Handout and Video Resource
	//-----------------------------------------------------

	if(in_array(12045, $cartProductList)){
		$product_list = array(16663);
		$result = array_diff($product_list, $cartProductList);
		array_unshift($result , 12045);
		$ProductPage = array(12045=>12045,16663=>52240);
		for($i=0;$i<count($result);$i++){
			$next = $result[$i+1];
			$current = $result[$i];
			$next_page = $ProductPage[$next];
			if($i==(count($result)-1)){
				$allUrlArray[12045]['add_to_cart_url'][$ProductPage[$current]] = get_site_url()."/shop/checkout";
				$allUrlArray[12045]['decline_url'][$ProductPage[$current]] = get_site_url()."/shop/checkout";
			}else{
				$allUrlArray[12045]['add_to_cart_url'][$ProductPage[$current]] = get_the_permalink($next_page);
				$allUrlArray[12045]['decline_url'][$ProductPage[$current]] = get_the_permalink($next_page);
			}
		}
	}


	//-----------------------------------------------------
	// Puppy Nipping Dog Training Handout and Video Resource
	//-----------------------------------------------------

	if(in_array(48922, $cartProductList)){
		$product_list = array(16663);
		$result = array_diff($product_list, $cartProductList);
		array_unshift($result , 48922);
		$ProductPage = array(48922=>48922,16663=>52240);
		for($i=0;$i<count($result);$i++){
			$next = $result[$i+1];
			$current = $result[$i];
			$next_page = $ProductPage[$next];
			if($i==(count($result)-1)){
				$allUrlArray[48922]['add_to_cart_url'][$ProductPage[$current]] = get_site_url()."/shop/checkout";
				$allUrlArray[48922]['decline_url'][$ProductPage[$current]] = get_site_url()."/shop/checkout";
			}else{
				$allUrlArray[48922]['add_to_cart_url'][$ProductPage[$current]] = get_the_permalink($next_page);
				$allUrlArray[48922]['decline_url'][$ProductPage[$current]] = get_the_permalink($next_page);
			}
		}
	}


	//-----------------------------------------------------
	// Impulse Control Dog Training Handout and Video Resource
	//-----------------------------------------------------

	if(in_array(26821, $cartProductList)){
		$product_list = array(16663);
		$result = array_diff($product_list, $cartProductList);
		array_unshift($result , 26821);
		$ProductPage = array(26821=>26821,16663=>52240);
		for($i=0;$i<count($result);$i++){
			$next = $result[$i+1];
			$current = $result[$i];
			$next_page = $ProductPage[$next];
			if($i==(count($result)-1)){
				$allUrlArray[26821]['add_to_cart_url'][$ProductPage[$current]] = get_site_url()."/shop/checkout";
				$allUrlArray[26821]['decline_url'][$ProductPage[$current]] = get_site_url()."/shop/checkout";
			}else{
				$allUrlArray[26821]['add_to_cart_url'][$ProductPage[$current]] = get_the_permalink($next_page);
				$allUrlArray[26821]['decline_url'][$ProductPage[$current]] = get_the_permalink($next_page);
			}
		}
	}


	//-------------------------------------------------------------
	// Impulse Control Dog Training Handout and Video Resource Free
	//-------------------------------------------------------------

	if(in_array(48923, $cartProductList)){
		$product_list = array(16663);
		$result = array_diff($product_list, $cartProductList);
		array_unshift($result , 48923);
		$ProductPage = array(48923=>48923,16663=>52240);
		for($i=0;$i<count($result);$i++){
			$next = $result[$i+1];
			$current = $result[$i];
			$next_page = $ProductPage[$next];
			if($i==(count($result)-1)){
				$allUrlArray[48923]['add_to_cart_url'][$ProductPage[$current]] = get_site_url()."/shop/checkout";
				$allUrlArray[48923]['decline_url'][$ProductPage[$current]] = get_site_url()."/shop/checkout";
			}else{
				$allUrlArray[48923]['add_to_cart_url'][$ProductPage[$current]] = get_the_permalink($next_page);
				$allUrlArray[48923]['decline_url'][$ProductPage[$current]] = get_the_permalink($next_page);
			}
		}
	}

	//-------------------------------------------------------------
	// Juvenile Delinquent Dogs Book-Members Access
	//-------------------------------------------------------------

	if(in_array(50156, $cartProductList)){
		$product_list = array(16663);
		$result = array_diff($product_list, $cartProductList);
		array_unshift($result , 50156);
		$ProductPage = array(50156=>50156,16663=>52240);
		for($i=0;$i<count($result);$i++){
			$next = $result[$i+1];
			$current = $result[$i];
			$next_page = $ProductPage[$next];
			if($i==(count($result)-1)){
				$allUrlArray[50156]['add_to_cart_url'][$ProductPage[$current]] = get_site_url()."/shop/checkout";
				$allUrlArray[50156]['decline_url'][$ProductPage[$current]] = get_site_url()."/shop/checkout";
			}else{
				$allUrlArray[50156]['add_to_cart_url'][$ProductPage[$current]] = get_the_permalink($next_page);
				$allUrlArray[50156]['decline_url'][$ProductPage[$current]] = get_the_permalink($next_page);
			}
		}
	}


	//---------------------------------------------------------------------------
	// Raw Dog Food Preparation Video & Guide
	//---------------------------------------------------------------------------

	if(in_array(47491, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[47491]['add_to_cart_url'][47491] = get_the_permalink(52233);
		$allUrlArray[47491]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[47491]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[47491]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[47491]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[47491]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[47491]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[47491]['decline_url'][47491] = get_site_url()."/shop/checkout";
			$allUrlArray[47491]['add_to_cart_url'][47491] = get_site_url()."/shop/checkout";
		}
	}

	//---------------------------------------------------------------------------
	// Raw Dog Food Preparation Video & Guide Trial
	//---------------------------------------------------------------------------

	if(in_array(48815, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[48815]['add_to_cart_url'][48815] = get_the_permalink(52233);
		$allUrlArray[48815]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[48815]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[48815]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[48815]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[48815]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[48815]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[48815]['decline_url'][48815] = get_site_url()."/shop/checkout";
			$allUrlArray[48815]['add_to_cart_url'][48815] = get_site_url()."/shop/checkout";
		}
	}

	//---------------------------------------------------------------------------
	// Raw Dog Food Preparation Video & Guide-Upgrade From Trial Version
	//---------------------------------------------------------------------------

	if(in_array(48507, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[48507]['add_to_cart_url'][48507] = get_the_permalink(52233);
		$allUrlArray[48507]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[48507]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[48507]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[48507]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[48507]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[48507]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[48507]['decline_url'][48507] = get_site_url()."/shop/checkout";
			$allUrlArray[48507]['add_to_cart_url'][48507] = get_site_url()."/shop/checkout";
		}
	}

	//---------------------------------------------------------------------------
	// Raw Dog Food Preparation Video & Guide Special Offer
	//---------------------------------------------------------------------------

	if(in_array(48814, $cartProductList)){
		if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
		$allUrlArray[48814]['add_to_cart_url'][48814] = get_the_permalink(52233);
		$allUrlArray[48814]['decline_url'][52233] = get_the_permalink(52235);
		$allUrlArray[48814]['add_to_cart_url'][52233] = get_the_permalink(52234);
		$allUrlArray[48814]['decline_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[48814]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
		$allUrlArray[48814]['decline_url'][52234] = get_site_url()."/shop/checkout";
		$allUrlArray[48814]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
		}else{
			$allUrlArray[48814]['decline_url'][48814] = get_site_url()."/shop/checkout";
			$allUrlArray[48814]['add_to_cart_url'][48814] = get_site_url()."/shop/checkout";
		}
	}
	return $allUrlArray;
}

// function priority_private_same($id){
// 	$carProduct = WC()->cart;
// 	foreach ($carProduct->cart_contents as $key => $value) {
// 		$cartProductList[] = $value['product_id'];
// 	}
// 	if(!in_array(43544, $cartProductList) && !in_array(12053, $cartProductList)){
// 		$allUrl[$id]['add_to_cart_url'][$id] = get_the_permalink(52233);
// 		$allUrl[$id]['decline_url'][52233] = get_the_permalink(52235);
// 		$allUrl[$id]['add_to_cart_url'][52233] = get_the_permalink(52234);
// 		$allUrl[$id]['decline_url'][52235] = get_site_url()."/shop/checkout";
// 		$allUrl[$id]['add_to_cart_url'][52235] = get_site_url()."/shop/checkout";
// 		$allUrl[$id]['decline_url'][52234] = get_site_url()."/shop/checkout";
// 		$allUrl[$id]['add_to_cart_url'][52234] = get_site_url()."/shop/checkout";
// 	}else{
// 		$allUrl[$id]['decline_url'][$id] = get_site_url()."/shop/checkout";
// 		$allUrl[$id]['add_to_cart_url'][$id] = get_site_url()."/shop/checkout";
// 	}
// 	return $allUrl;
// }

add_action("wp_ajax_update_cart_product_ajax", "update_cart_product_ajax");
add_action("wp_ajax_nopriv_update_cart_product_ajax", "update_cart_product_ajax");

function update_cart_product_ajax() {
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	// exit;
   $productList = $_POST['id'];
   $productQuantity = $_POST['quantity'];
   $cart = WC()->instance()->cart;
   $total = 0;
   $checkArray = array();
   for ($i=0; $i <count($productList) ; $i++) { 
   		$cart_id = $cart->generate_cart_id($productList[$i]);
		$cart_item_id = $cart->find_product_in_cart($cart_id);
		if($cart_item_id){
		   $cart->set_quantity($cart_item_id,0);
		}
   		WC()->cart->add_to_cart( $productList[$i],$productQuantity[$i] );
   }
   echo WC()->cart->get_cart_subtotal();
   die();
}
/**
 * WooCommerce Extra Feature
 * --------------------------
 *
 * Change number of related products on product page
 * Set your own value for 'posts_per_page'
 *
 */ 
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
  function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 6; // 4 related products
	$args['columns'] = 3; // arranged in 2 columns
	return $args;
}

// remove wp version param from any enqueued scripts
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_action("wp_ajax_get_country_state", "get_country_state");
add_action("wp_ajax_nopriv_get_country_state", "get_country_state");
function get_country_state(){
	$states = WC()->countries->get_states( $_POST['country'] );
	$html = '';
	if($_POST['type']=='billing'){
		$state = "billing_state";
	}else{
		$state = "shipping_state";
	}
	
	if(!empty($states)){
		$html .= '<select required id="'.$state.'" class="form-control" name="user[billing]['.$state.']">';
		foreach ($states as $key => $value) {
			$select = "";
			if($_POST['load_state']==$key){
				$select = "selected";
			}
			$html .= '<option value="'.$key.'" '.$select.'>'.$value.'</option>';
		}
		$html .= '</select>';
	}else{
		$html .= '<input required type="text" id="billing_state" name="user[billing][billing_state]">';
	}
	echo $html; die;
}
