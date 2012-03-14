<?php

/*
        Plugin Name: Flags
        Plugin URI: https://github.com/NoahY/q2a-flags
        Plugin Update Check URI: https://github.com/NoahY/q2a-flags/raw/master/qa-plugin.php
        Plugin Description: 
        Plugin Version: 0.1
        Plugin Date: 2012-03-14
        Plugin Author: NoahY
        Plugin Author URI: 
        Plugin License: GPLv2
        Plugin Minimum Question2Answer Version: 1.5
*/


	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
			header('Location: ../../');
			exit;
	}

	function qa_flag_html($uid,$path) {

		$flag['Andorra'] = 'ad';
		$flag['United Arab Emirates'] = 'ae';
		$flag['Afghanistan'] = 'af';
		$flag['Antigua and Barbuda'] = 'ag';
		$flag['Anguilla'] = 'ai';
		$flag['Albania'] = 'al';
		$flag['Armenia'] = 'am';
		$flag['Netherlands Antilles'] = 'an';
		$flag['Angola'] = 'ao';
		$flag['Antarctica'] = 'aq';
		$flag['Argentina'] = 'ar';
		$flag['American Samoa'] = 'as';
		$flag['Austria'] = 'at';
		$flag['Australia'] = 'au';
		$flag['Aruba'] = 'aw';
		$flag['Aland Islands'] = 'ax';
		$flag['Azerbaijan'] = 'az';
		$flag['Bosnia and Herzegovina'] = 'ba';
		$flag['Barbados'] = 'bb';
		$flag['Bangladesh'] = 'bd';
		$flag['Belgium'] = 'be';
		$flag['Burkina Faso'] = 'bf';
		$flag['Bulgaria'] = 'bg';
		$flag['Bahrain'] = 'bh';
		$flag['Burundi'] = 'bi';
		$flag['Benin'] = 'bj';
		$flag['Bermuda'] = 'bm';
		$flag['Brunei Darussalam'] = 'bn';
		$flag['Bolivia'] = 'bo';
		$flag['Brazil'] = 'br';
		$flag['Bahamas'] = 'bs';
		$flag['Bhutan'] = 'bt';
		$flag['Bouvet Island'] = 'bv';
		$flag['Botswana'] = 'bw';
		$flag['Belarus'] = 'by';
		$flag['Belize'] = 'bz';
		$flag['Canada'] = 'ca';
		$flag['Cocos (Keeling) Islands'] = 'cc';
		$flag['Democratic Republic of the Congo'] = 'cd';
		$flag['Central African Republic'] = 'cf';
		$flag['Congo'] = 'cg';
		$flag['Switzerland'] = 'ch';
		$flag['Cote D`Ivoire (Ivory Coast)'] = 'ci';
		$flag['Cook Islands'] = 'ck';
		$flag['Chile'] = 'cl';
		$flag['Cameroon'] = 'cm';
		$flag['China'] = 'cn';
		$flag['Colombia'] = 'co';
		$flag['Costa Rica'] = 'cr';
		$flag['Serbia and Montenegro'] = 'cs';
		$flag['Cuba'] = 'cu';
		$flag['Cape Verde'] = 'cv';
		$flag['Christmas Island'] = 'cx';
		$flag['Cyprus'] = 'cy';
		$flag['Czech Republic'] = 'cz';
		$flag['Germany'] = 'de';
		$flag['Djibouti'] = 'dj';
		$flag['Denmark'] = 'dk';
		$flag['Dominica'] = 'dm';
		$flag['Dominican Republic'] = 'do';
		$flag['Algeria'] = 'dz';
		$flag['Ecuador'] = 'ec';
		$flag['Estonia'] = 'ee';
		$flag['Egypt'] = 'eg';
		$flag['Western Sahara'] = 'eh';
		$flag['Eritrea'] = 'er';
		$flag['Spain'] = 'es';
		$flag['Ethiopia'] = 'et';
		$flag['Finland'] = 'fi';
		$flag['Fiji'] = 'fj';
		$flag['Falkland Islands (Malvinas)'] = 'fk';
		$flag['Federated States of Micronesia'] = 'fm';
		$flag['Faroe Islands'] = 'fo';
		$flag['France'] = 'fr';
		$flag['France, Metropolitan'] = 'fx';
		$flag['Gabon'] = 'ga';
		$flag['Great Britain (UK)'] = 'gb';
		$flag['Grenada'] = 'gd';
		$flag['Georgia'] = 'ge';
		$flag['French Guiana'] = 'gf';
		$flag['Ghana'] = 'gh';
		$flag['Gibraltar'] = 'gi';
		$flag['Greenland'] = 'gl';
		$flag['Gambia'] = 'gm';
		$flag['Guinea'] = 'gn';
		$flag['Guadeloupe'] = 'gp';
		$flag['Equatorial Guinea'] = 'gq';
		$flag['Greece'] = 'gr';
		$flag['S. Georgia and S. Sandwich Islands'] = 'gs';
		$flag['Guatemala'] = 'gt';
		$flag['Guam'] = 'gu';
		$flag['Guinea-Bissau'] = 'gw';
		$flag['Guyana'] = 'gy';
		$flag['Hong Kong'] = 'hk';
		$flag['Heard Island and McDonald Islands'] = 'hm';
		$flag['Honduras'] = 'hn';
		$flag['Croatia (Hrvatska)'] = 'hr';
		$flag['Haiti'] = 'ht';
		$flag['Hungary'] = 'hu';
		$flag['Indonesia'] = 'id';
		$flag['Ireland'] = 'ie';
		$flag['Israel'] = 'il';
		$flag['India'] = 'in';
		$flag['British Indian Ocean Territory'] = 'io';
		$flag['Iraq'] = 'iq';
		$flag['Iran'] = 'ir';
		$flag['Iceland'] = 'is';
		$flag['Italy'] = 'it';
		$flag['Jamaica'] = 'jm';
		$flag['Jordan'] = 'jo';
		$flag['Japan'] = 'jp';
		$flag['Kenya'] = 'ke';
		$flag['Kyrgyzstan'] = 'kg';
		$flag['Cambodia'] = 'kh';
		$flag['Kiribati'] = 'ki';
		$flag['Comoros'] = 'km';
		$flag['Saint Kitts and Nevis'] = 'kn';
		$flag['Korea (North)'] = 'kp';
		$flag['Korea (South)'] = 'kr';
		$flag['Kuwait'] = 'kw';
		$flag['Cayman Islands'] = 'ky';
		$flag['Kazakhstan'] = 'kz';
		$flag['Laos'] = 'la';
		$flag['Lebanon'] = 'lb';
		$flag['Saint Lucia'] = 'lc';
		$flag['Liechtenstein'] = 'li';
		$flag['Sri Lanka'] = 'lk';
		$flag['Liberia'] = 'lr';
		$flag['Lesotho'] = 'ls';
		$flag['Lithuania'] = 'lt';
		$flag['Luxembourg'] = 'lu';
		$flag['Latvia'] = 'lv';
		$flag['Libya'] = 'ly';
		$flag['Morocco'] = 'ma';
		$flag['Monaco'] = 'mc';
		$flag['Moldova'] = 'md';
		$flag['Madagascar'] = 'mg';
		$flag['Marshall Islands'] = 'mh';
		$flag['Macedonia'] = 'mk';
		$flag['Mali'] = 'ml';
		$flag['Myanmar'] = 'mm';
		$flag['Mongolia'] = 'mn';
		$flag['Macao'] = 'mo';
		$flag['Northern Mariana Islands'] = 'mp';
		$flag['Martinique'] = 'mq';
		$flag['Mauritania'] = 'mr';
		$flag['Montserrat'] = 'ms';
		$flag['Malta'] = 'mt';
		$flag['Mauritius'] = 'mu';
		$flag['Maldives'] = 'mv';
		$flag['Malawi'] = 'mw';
		$flag['Mexico'] = 'mx';
		$flag['Malaysia'] = 'my';
		$flag['Mozambique'] = 'mz';
		$flag['Namibia'] = 'na';
		$flag['New Caledonia'] = 'nc';
		$flag['Niger'] = 'ne';
		$flag['Norfolk Island'] = 'nf';
		$flag['Nigeria'] = 'ng';
		$flag['Nicaragua'] = 'ni';
		$flag['Netherlands'] = 'nl';
		$flag['Norway'] = 'no';
		$flag['Nepal'] = 'np';
		$flag['Nauru'] = 'nr';
		$flag['Niue'] = 'nu';
		$flag['New Zealand (Aotearoa)'] = 'nz';
		$flag['Oman'] = 'om';
		$flag['Panama'] = 'pa';
		$flag['Peru'] = 'pe';
		$flag['French Polynesia'] = 'pf';
		$flag['Papua New Guinea'] = 'pg';
		$flag['Philippines'] = 'ph';
		$flag['Pakistan'] = 'pk';
		$flag['Poland'] = 'pl';
		$flag['Saint Pierre and Miquelon'] = 'pm';
		$flag['Pitcairn'] = 'pn';
		$flag['Puerto Rico'] = 'pr';
		$flag['Palestinian Territory'] = 'ps';
		$flag['Portugal'] = 'pt';
		$flag['Palau'] = 'pw';
		$flag['Paraguay'] = 'py';
		$flag['Qatar'] = 'qa';
		$flag['Reunion'] = 're';
		$flag['Romania'] = 'ro';
		$flag['Russian Federation'] = 'ru';
		$flag['Rwanda'] = 'rw';
		$flag['Saudi Arabia'] = 'sa';
		$flag['Solomon Islands'] = 'sb';
		$flag['Seychelles'] = 'sc';
		$flag['Sudan'] = 'sd';
		$flag['Sweden'] = 'se';
		$flag['Singapore'] = 'sg';
		$flag['Saint Helena'] = 'sh';
		$flag['Slovenia'] = 'si';
		$flag['Svalbard and Jan Mayen'] = 'sj';
		$flag['Slovakia'] = 'sk';
		$flag['Sierra Leone'] = 'sl';
		$flag['San Marino'] = 'sm';
		$flag['Senegal'] = 'sn';
		$flag['Somalia'] = 'so';
		$flag['Suriname'] = 'sr';
		$flag['Sao Tome and Principe'] = 'st';
		$flag['USSR (former)'] = 'su';
		$flag['El Salvador'] = 'sv';
		$flag['Syria'] = 'sy';
		$flag['Swaziland'] = 'sz';
		$flag['Turks and Caicos Islands'] = 'tc';
		$flag['Chad'] = 'td';
		$flag['French Southern Territories'] = 'tf';
		$flag['Togo'] = 'tg';
		$flag['Thailand'] = 'th';
		$flag['Tajikistan'] = 'tj';
		$flag['Tokelau'] = 'tk';
		$flag['Timor-Leste'] = 'tl';
		$flag['Turkmenistan'] = 'tm';
		$flag['Tunisia'] = 'tn';
		$flag['Tonga'] = 'to';
		$flag['East Timor'] = 'tl';
		$flag['Turkey'] = 'tr';
		$flag['Trinidad and Tobago'] = 'tt';
		$flag['Tuvalu'] = 'tv';
		$flag['Taiwan'] = 'tw';
		$flag['Tanzania'] = 'tz';
		$flag['Ukraine'] = 'ua';
		$flag['Uganda'] = 'ug';
		$flag['United Kingdom'] = 'uk';
		$flag['United States Minor Outlying Islands'] = 'um';
		$flag['United States'] = 'us';
		$flag['Uruguay'] = 'uy';
		$flag['Uzbekistan'] = 'uz';
		$flag['Vatican City State (Holy See)'] = 'va';
		$flag['Saint Vincent and the Grenadines'] = 'vc';
		$flag['Venezuela'] = 've';
		$flag['Virgin Islands (British)'] = 'vg';
		$flag['Virgin Islands (U.S.)'] = 'vi';
		$flag['Viet Nam'] = 'vn';
		$flag['Vanuatu'] = 'vu';
		$flag['Wallis and Futuna'] = 'wf';
		$flag['Samoa'] = 'ws';
		$flag['Yemen'] = 'ye';
		$flag['Mayotte'] = 'yt';
		$flag['Yugoslavia (former)'] = 'yu';
		$flag['South Africa'] = 'za';
		$flag['Zambia'] = 'zm';
		$flag['Zaire (former)'] = 'zr';
		$flag['Zimbabwe'] = 'zw';
		
		$country = xprofile_get_field_data('country',$uid);
		
		if($country == '') return;
		$code = $flag[$country];

		$flag_src = $path . "images/flags/32/";
		if ( file_exists( dirname(__FILE__) . "/images/32/" . strtolower( $code ) . '.png' ) ) {
				$png = $flag_src . strtolower( $code ) . '.png';
		} 
		else {
			$png = $flag_src . 'none.png';
        }
		return '<img src="'.$png.'" class="flag" title="'.bp_core_get_user_displayname($uid).' is from '.$country.'" />';
	
	}

    qa_register_plugin_module('module', 'qa-flags-admin.php', 'qa_flags_admin', 'Flags Admin');
	qa_register_plugin_layer('qa-flags-layer.php', 'Flags Layer');	

/*
	Omit PHP closing tag to help avoid accidental output
*/
