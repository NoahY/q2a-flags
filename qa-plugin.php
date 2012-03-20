<?php

/*
        Plugin Name: Flags
        Plugin URI: https://github.com/NoahY/q2a-flags
        Plugin Update Check URI: https://github.com/NoahY/q2a-flags/raw/master/qa-plugin.php
        Plugin Description: 
        Plugin Version: 0.3
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

	function qa_flag_array() {
		$flags = array(
			'Andorra' => 'ad',
			'United Arab Emirates' => 'ae',
			'Afghanistan' => 'af',
			'Antigua and Barbuda' => 'ag',
			'Anguilla' => 'ai',
			'Albania' => 'al',
			'Armenia' => 'am',
			'Netherlands Antilles' => 'an',
			'Angola' => 'ao',
			'Antarctica' => 'aq',
			'Argentina' => 'ar',
			'American Samoa' => 'as',
			'Austria' => 'at',
			'Australia' => 'au',
			'Aruba' => 'aw',
			'Aland Islands' => 'ax',
			'Azerbaijan' => 'az',
			'Bosnia and Herzegovina' => 'ba',
			'Barbados' => 'bb',
			'Bangladesh' => 'bd',
			'Belgium' => 'be',
			'Burkina Faso' => 'bf',
			'Bulgaria' => 'bg',
			'Bahrain' => 'bh',
			'Burundi' => 'bi',
			'Benin' => 'bj',
			'Bermuda' => 'bm',
			'Brunei Darussalam' => 'bn',
			'Bolivia' => 'bo',
			'Brazil' => 'br',
			'Bahamas' => 'bs',
			'Bhutan' => 'bt',
			'Bouvet Island' => 'bv',
			'Botswana' => 'bw',
			'Belarus' => 'by',
			'Belize' => 'bz',
			'Canada' => 'ca',
			'Cocos (Keeling) Islands' => 'cc',
			'Democratic Republic of the Congo' => 'cd',
			'Central African Republic' => 'cf',
			'Congo' => 'cg',
			'Switzerland' => 'ch',
			'Cote D`Ivoire (Ivory Coast)' => 'ci',
			'Cook Islands' => 'ck',
			'Chile' => 'cl',
			'Cameroon' => 'cm',
			'China' => 'cn',
			'Colombia' => 'co',
			'Costa Rica' => 'cr',
			'Serbia and Montenegro' => 'cs',
			'Cuba' => 'cu',
			'Cape Verde' => 'cv',
			'Christmas Island' => 'cx',
			'Cyprus' => 'cy',
			'Czech Republic' => 'cz',
			'Germany' => 'de',
			'Djibouti' => 'dj',
			'Denmark' => 'dk',
			'Dominica' => 'dm',
			'Dominican Republic' => 'do',
			'Algeria' => 'dz',
			'Ecuador' => 'ec',
			'Estonia' => 'ee',
			'Egypt' => 'eg',
			'Western Sahara' => 'eh',
			'Eritrea' => 'er',
			'Spain' => 'es',
			'Ethiopia' => 'et',
			'Finland' => 'fi',
			'Fiji' => 'fj',
			'Falkland Islands (Malvinas)' => 'fk',
			'Federated States of Micronesia' => 'fm',
			'Faroe Islands' => 'fo',
			'France' => 'fr',
			'France, Metropolitan' => 'fx',
			'Gabon' => 'ga',
			'Great Britain (UK)' => 'gb',
			'Grenada' => 'gd',
			'Georgia' => 'ge',
			'French Guiana' => 'gf',
			'Ghana' => 'gh',
			'Gibraltar' => 'gi',
			'Greenland' => 'gl',
			'Gambia' => 'gm',
			'Guinea' => 'gn',
			'Guadeloupe' => 'gp',
			'Equatorial Guinea' => 'gq',
			'Greece' => 'gr',
			'S. Georgia and S. Sandwich Islands' => 'gs',
			'Guatemala' => 'gt',
			'Guam' => 'gu',
			'Guinea-Bissau' => 'gw',
			'Guyana' => 'gy',
			'Hong Kong' => 'hk',
			'Heard Island and McDonald Islands' => 'hm',
			'Honduras' => 'hn',
			'Croatia (Hrvatska)' => 'hr',
			'Haiti' => 'ht',
			'Hungary' => 'hu',
			'Indonesia' => 'id',
			'Ireland' => 'ie',
			'Israel' => 'il',
			'India' => 'in',
			'British Indian Ocean Territory' => 'io',
			'Iraq' => 'iq',
			'Iran' => 'ir',
			'Iceland' => 'is',
			'Italy' => 'it',
			'Jamaica' => 'jm',
			'Jordan' => 'jo',
			'Japan' => 'jp',
			'Kenya' => 'ke',
			'Kyrgyzstan' => 'kg',
			'Cambodia' => 'kh',
			'Kiribati' => 'ki',
			'Comoros' => 'km',
			'Saint Kitts and Nevis' => 'kn',
			'Korea (North)' => 'kp',
			'Korea (South)' => 'kr',
			'Kuwait' => 'kw',
			'Cayman Islands' => 'ky',
			'Kazakhstan' => 'kz',
			'Laos' => 'la',
			'Lebanon' => 'lb',
			'Saint Lucia' => 'lc',
			'Liechtenstein' => 'li',
			'Sri Lanka' => 'lk',
			'Liberia' => 'lr',
			'Lesotho' => 'ls',
			'Lithuania' => 'lt',
			'Luxembourg' => 'lu',
			'Latvia' => 'lv',
			'Libya' => 'ly',
			'Morocco' => 'ma',
			'Monaco' => 'mc',
			'Moldova' => 'md',
			'Madagascar' => 'mg',
			'Marshall Islands' => 'mh',
			'Macedonia' => 'mk',
			'Mali' => 'ml',
			'Myanmar' => 'mm',
			'Mongolia' => 'mn',
			'Macao' => 'mo',
			'Northern Mariana Islands' => 'mp',
			'Martinique' => 'mq',
			'Mauritania' => 'mr',
			'Montserrat' => 'ms',
			'Malta' => 'mt',
			'Mauritius' => 'mu',
			'Maldives' => 'mv',
			'Malawi' => 'mw',
			'Mexico' => 'mx',
			'Malaysia' => 'my',
			'Mozambique' => 'mz',
			'Namibia' => 'na',
			'New Caledonia' => 'nc',
			'Niger' => 'ne',
			'Norfolk Island' => 'nf',
			'Nigeria' => 'ng',
			'Nicaragua' => 'ni',
			'Netherlands' => 'nl',
			'Norway' => 'no',
			'Nepal' => 'np',
			'Nauru' => 'nr',
			'Niue' => 'nu',
			'New Zealand (Aotearoa)' => 'nz',
			'Oman' => 'om',
			'Panama' => 'pa',
			'Peru' => 'pe',
			'French Polynesia' => 'pf',
			'Papua New Guinea' => 'pg',
			'Philippines' => 'ph',
			'Pakistan' => 'pk',
			'Poland' => 'pl',
			'Saint Pierre and Miquelon' => 'pm',
			'Pitcairn' => 'pn',
			'Puerto Rico' => 'pr',
			'Palestinian Territory' => 'ps',
			'Portugal' => 'pt',
			'Palau' => 'pw',
			'Paraguay' => 'py',
			'Qatar' => 'qa',
			'Reunion' => 're',
			'Romania' => 'ro',
			'Russian Federation' => 'ru',
			'Rwanda' => 'rw',
			'Saudi Arabia' => 'sa',
			'Solomon Islands' => 'sb',
			'Seychelles' => 'sc',
			'Sudan' => 'sd',
			'Sweden' => 'se',
			'Singapore' => 'sg',
			'Saint Helena' => 'sh',
			'Slovenia' => 'si',
			'Svalbard and Jan Mayen' => 'sj',
			'Slovakia' => 'sk',
			'Sierra Leone' => 'sl',
			'San Marino' => 'sm',
			'Senegal' => 'sn',
			'Somalia' => 'so',
			'Suriname' => 'sr',
			'Sao Tome and Principe' => 'st',
			'USSR (former)' => 'su',
			'El Salvador' => 'sv',
			'Syria' => 'sy',
			'Swaziland' => 'sz',
			'Turks and Caicos Islands' => 'tc',
			'Chad' => 'td',
			'French Southern Territories' => 'tf',
			'Togo' => 'tg',
			'Thailand' => 'th',
			'Tajikistan' => 'tj',
			'Tokelau' => 'tk',
			'Timor-Leste' => 'tl',
			'Turkmenistan' => 'tm',
			'Tunisia' => 'tn',
			'Tonga' => 'to',
			'East Timor' => 'tl',
			'Turkey' => 'tr',
			'Trinidad and Tobago' => 'tt',
			'Tuvalu' => 'tv',
			'Taiwan' => 'tw',
			'Tanzania' => 'tz',
			'Ukraine' => 'ua',
			'Uganda' => 'ug',
			'United Kingdom' => 'uk',
			'United States Minor Outlying Islands' => 'um',
			'United States' => 'us',
			'Uruguay' => 'uy',
			'Uzbekistan' => 'uz',
			'Vatican City State (Holy See)' => 'va',
			'Saint Vincent and the Grenadines' => 'vc',
			'Venezuela' => 've',
			'Virgin Islands (British)' => 'vg',
			'Virgin Islands (U.S.)' => 'vi',
			'Viet Nam' => 'vn',
			'Vanuatu' => 'vu',
			'Wallis and Futuna' => 'wf',
			'Samoa' => 'ws',
			'Yemen' => 'ye',
			'Mayotte' => 'yt',
			'Yugoslavia (former)' => 'yu',
			'South Africa' => 'za',
			'Zambia' => 'zm',
			'Zaire (former)' => 'zr',
			'Zimbabwe' => 'zw'
		);
		if(!qa_opt('flags_register_required')) {
			$flags = array_merge(array('0' => ''),$flags);
		}
		return $flags;
	}

	function qa_flag_html($uid,$size,$path) {
		$which = function_exists('xprofile_insert_field')?'Buddypress':(!QA_FINAL_EXTERNAL_USERS?'Q2A':false);

		if($which == 'Buddypress') {
			$country = xprofile_get_field_data(qa_opt('flags_field'),$uid);
			$name = bp_core_get_user_displayname($uid);
		}
		else if($which == 'Q2A') {
			$user = qa_db_read_all_assoc(
				qa_db_query_sub(
					"SELECT title,content FROM ^userprofile WHERE userid=# AND (title=$ OR title='name')",
					$uid,qa_opt('flags_field')
				)
			);
			foreach($user as $c) {
				if($c['title']==qa_opt('flags_field'))
					$country = $c['content'];
				else if($c['title']=='name')
					$name = $c['content'];
			}
			if(!$name) {
				$name = qa_userids_to_handles(array($uid));
				$name = $name[$uid];
			}
		}
		else return;
		
		if(!@$country) return;
		
		$qa_flag_array = qa_flag_array();
		
		$code = $qa_flag_array[$country];

		$flag_src = $path . "images/$size/";
		if ( file_exists( dirname(__FILE__) . "/images/$size/" . strtolower( $code ) . '.png' ) ) {
				$png = $flag_src . strtolower( $code ) . '.png';
		} 
		else {
			$png = $flag_src . 'none.png';
        }
        $title = qa_lang_sub('flags/x_is_from_y',$name);
        $country = (qa_lang('flags/'.$country) == '[flags/'.$country.']'?$country:qa_lang('flags/'.$country));
        $title = str_replace('$',$country,$title);
		return '<img src="'.$png.'" style="vertical-align:middle; padding-left:4px" class="flag" title="'.$title.'" />';
	
	}

    qa_register_plugin_module('module', 'qa-flags-admin.php', 'qa_flags_admin', 'Flags Admin');
	qa_register_plugin_layer('qa-flags-layer.php', 'Flags Layer');	
	qa_register_plugin_phrases('qa-flags-lang-*.php', 'flags');
	qa_register_plugin_overrides('qa-flags-overrides.php');

/*
	Omit PHP closing tag to help avoid accidental output
*/
