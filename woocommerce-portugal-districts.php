<?php

/*
Plugin Name: WooCommerce Portugal Districts
Plugin URI: http://github.com/jckronbauer/woocommerce-portugal-districts
Description: Add Portugal districts to WooCommerce's list of states.
Version: 1.0
Author: Julio Cezar Kronbauer
Author URI: http://jckronbauer.blogspot.com
*/

/**
 * Copyright (c) 2016 Julio Cezar Kronbauer. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */


function wc_add_portugal_districts( $states ) {

    $states['PT'] = array(
		'AV' => 'Distrito de Aveiro',
		'BE' => 'Distrito de Beja',
		'BR' => 'Distrito de Braga',
		'BG' => 'Distrito de Bragança',
		'CB' => 'Distrito de Castelo Branco',
		'CO' => 'Distrito de Coimbra',
		'EV' => 'Distrito de Évora',
		'FA' => 'Distrito de Faro',
		'GU' => 'Distrito da Guarda',
		'LE' => 'Distrito de Leiria',
		'LI' => 'Distrito de Lisboa',
		'PO' => 'Distrito do Porto',
		'PA' => 'Distrito de Portalegre',
		'SA' => 'Distrito de Santarém',
		'SE' => 'Distrito de Setúbal',
		'VC' => 'Distrito de Viana do Castelo',
		'VR' => 'Distrito de Vila Real',
		'VI' => 'Distrito de Viseu',
	);

    return $states;

}

add_filter( 'woocommerce_states', 'wc_add_portugal_districts' );
