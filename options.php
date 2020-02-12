<?php
/**
 * Created by PhpStorm.
 * User: milivoj
 * Date: 28.10.19.
 * Time: 05.29
 */
include dirname( __FILE__ ) . '/apf/admin-page-framework.php';
if( class_exists('AdminPageFramework') ) {


	class WICFR extends AdminPageFramework {

		public function setUp() {

			// Create a top-level menu.
			$this->setRootMenuPage( 'CF Redirect', 'dashicons-redo' );

			// Add sub menu items.
			$this->addSubMenuItems(
				array(
					'title'     => 'CloudFlare GeoIP Redirect Options',    // page title
					'menu_title'    => 'Options',
					'page_slug' => 'wi_cfr_options',    // page slug
					'screen_icon'   => 'options-general'
				)
			);

			// Add form sections
			$this->addSettingSections(
				'wi_cfr_options',    // target page slug
				array(
					'section_id'        => 'settings',
					'section_tab_slug'  => 'repeatable_sections',
					'repeatable'        => true,
					'title'             => __('Repeatable Tabbed Section', 'wicfr' ),
					'description'       => __('You may add multiple redirects. Order of tabs will represent order of redirect execution. Use "+" or "-" buttons to your right to add or remove.', 'wicfr' ),
				)
			);

			// Add form fields
			$this->addSettingFields(
				'settings',    // target page slug
				array(
					'field_id'   => 'title',
					'type'       => 'section_title',
					'label'      => __('Redirect #', 'wicfr' )
				),
				array(
					'field_id'   => 'country',
					'title'      => __('Visitors Country', 'wicfr' ),
					'description'=> __('Select one or multiple countries', 'wicfr' ),
					'type'       => 'select',
					'is_multiple'   => true,
					'attributes'    => array(
						'select' => array(
							'style' => "height: 200px;",
						),
					),
					'label'      => array(
						'XX' => __( 'Unknown/reserved', 'wicfr' ),
						'AF' => __( 'Afghanistan', 'wicfr' ),
						'AX' => __( 'Åland Islands', 'wicfr' ),
						'AL' => __( 'Albania', 'wicfr' ),
						'DZ' => __( 'Algeria', 'wicfr' ),
						'AS' => __( 'American Samoa', 'wicfr' ),
						'AD' => __( 'Andorra', 'wicfr' ),
						'AO' => __( 'Angola', 'wicfr' ),
						'AI' => __( 'Anguilla', 'wicfr' ),
						'AQ' => __( 'Antarctica', 'wicfr' ),
						'AG' => __( 'Antigua and Barbuda', 'wicfr' ),
						'AR' => __( 'Argentina', 'wicfr' ),
						'AM' => __( 'Armenia', 'wicfr' ),
						'AW' => __( 'Aruba', 'wicfr' ),
						'AU' => __( 'Australia', 'wicfr' ),
						'AT' => __( 'Austria', 'wicfr' ),
						'AZ' => __( 'Azerbaijan', 'wicfr' ),
						'BS' => __( 'Bahamas', 'wicfr' ),
						'BH' => __( 'Bahrain', 'wicfr' ),
						'BD' => __( 'Bangladesh', 'wicfr' ),
						'BB' => __( 'Barbados', 'wicfr' ),
						'BY' => __( 'Belarus', 'wicfr' ),
						'BE' => __( 'Belgium', 'wicfr' ),
						'BZ' => __( 'Belize', 'wicfr' ),
						'BJ' => __( 'Benin', 'wicfr' ),
						'BM' => __( 'Bermuda', 'wicfr' ),
						'BT' => __( 'Bhutan', 'wicfr' ),
						'BO' => __( 'Bolivia, Plurinational State of', 'wicfr' ),
						'BQ' => __( 'Bonaire, Sint Eustatius and Saba', 'wicfr' ),
						'BA' => __( 'Bosnia and Herzegovina', 'wicfr' ),
						'BW' => __( 'Botswana', 'wicfr' ),
						'BV' => __( 'Bouvet Island', 'wicfr' ),
						'BR' => __( 'Brazil', 'wicfr' ),
						'IO' => __( 'British Indian Ocean Territory', 'wicfr' ),
						'BN' => __( 'Brunei Darussalam', 'wicfr' ),
						'BG' => __( 'Bulgaria', 'wicfr' ),
						'BF' => __( 'Burkina Faso', 'wicfr' ),
						'BI' => __( 'Burundi', 'wicfr' ),
						'KH' => __( 'Cambodia', 'wicfr' ),
						'CM' => __( 'Cameroon', 'wicfr' ),
						'CA' => __( 'Canada', 'wicfr' ),
						'CV' => __( 'Cape Verde', 'wicfr' ),
						'KY' => __( 'Cayman Islands', 'wicfr' ),
						'CF' => __( 'Central African Republic', 'wicfr' ),
						'TD' => __( 'Chad', 'wicfr' ),
						'CL' => __( 'Chile', 'wicfr' ),
						'CN' => __( 'China', 'wicfr' ),
						'CX' => __( 'Christmas Island', 'wicfr' ),
						'CC' => __( 'Cocos (Keeling) Islands', 'wicfr' ),
						'CO' => __( 'Colombia', 'wicfr' ),
						'KM' => __( 'Comoros', 'wicfr' ),
						'CG' => __( 'Congo', 'wicfr' ),
						'CD' => __( 'Congo, the Democratic Republic of the', 'wicfr' ),
						'CK' => __( 'Cook Islands', 'wicfr' ),
						'CR' => __( 'Costa Rica', 'wicfr' ),
						'CI' => __( 'Côte d\'Ivoire', 'wicfr' ),
						'HR' => __( 'Croatia', 'wicfr' ),
						'CU' => __( 'Cuba', 'wicfr' ),
						'CW' => __( 'Curaçao', 'wicfr' ),
						'CY' => __( 'Cyprus', 'wicfr' ),
						'CZ' => __( 'Czech Republic', 'wicfr' ),
						'DK' => __( 'Denmark', 'wicfr' ),
						'DJ' => __( 'Djibouti', 'wicfr' ),
						'DM' => __( 'Dominica', 'wicfr' ),
						'DO' => __( 'Dominican Republic', 'wicfr' ),
						'EC' => __( 'Ecuador', 'wicfr' ),
						'EG' => __( 'Egypt', 'wicfr' ),
						'SV' => __( 'El Salvador', 'wicfr' ),
						'GQ' => __( 'Equatorial Guinea', 'wicfr' ),
						'ER' => __( 'Eritrea', 'wicfr' ),
						'EE' => __( 'Estonia', 'wicfr' ),
						'ET' => __( 'Ethiopia', 'wicfr' ),
						'FK' => __( 'Falkland Islands (Malvinas)', 'wicfr' ),
						'FO' => __( 'Faroe Islands', 'wicfr' ),
						'FJ' => __( 'Fiji', 'wicfr' ),
						'FI' => __( 'Finland', 'wicfr' ),
						'FR' => __( 'France', 'wicfr' ),
						'GF' => __( 'French Guiana', 'wicfr' ),
						'PF' => __( 'French Polynesia', 'wicfr' ),
						'TF' => __( 'French Southern Territories', 'wicfr' ),
						'GA' => __( 'Gabon', 'wicfr' ),
						'GM' => __( 'Gambia', 'wicfr' ),
						'GE' => __( 'Georgia', 'wicfr' ),
						'DE' => __( 'Germany', 'wicfr' ),
						'GH' => __( 'Ghana', 'wicfr' ),
						'GI' => __( 'Gibraltar', 'wicfr' ),
						'GR' => __( 'Greece', 'wicfr' ),
						'GL' => __( 'Greenland', 'wicfr' ),
						'GD' => __( 'Grenada', 'wicfr' ),
						'GP' => __( 'Guadeloupe', 'wicfr' ),
						'GU' => __( 'Guam', 'wicfr' ),
						'GT' => __( 'Guatemala', 'wicfr' ),
						'GG' => __( 'Guernsey', 'wicfr' ),
						'GN' => __( 'Guinea', 'wicfr' ),
						'GW' => __( 'Guinea-Bissau', 'wicfr' ),
						'GY' => __( 'Guyana', 'wicfr' ),
						'HT' => __( 'Haiti', 'wicfr' ),
						'HM' => __( 'Heard Island and McDonald Islands', 'wicfr' ),
						'VA' => __( 'Holy See (Vatican City State)', 'wicfr' ),
						'HN' => __( 'Honduras', 'wicfr' ),
						'HK' => __( 'Hong Kong', 'wicfr' ),
						'HU' => __( 'Hungary', 'wicfr' ),
						'IS' => __( 'Iceland', 'wicfr' ),
						'IN' => __( 'India', 'wicfr' ),
						'ID' => __( 'Indonesia', 'wicfr' ),
						'IR' => __( 'Iran, Islamic Republic of', 'wicfr' ),
						'IQ' => __( 'Iraq', 'wicfr' ),
						'IE' => __( 'Ireland', 'wicfr' ),
						'IM' => __( 'Isle of Man', 'wicfr' ),
						'IL' => __( 'Israel', 'wicfr' ),
						'IT' => __( 'Italy', 'wicfr' ),
						'JM' => __( 'Jamaica', 'wicfr' ),
						'JP' => __( 'Japan', 'wicfr' ),
						'JE' => __( 'Jersey', 'wicfr' ),
						'JO' => __( 'Jordan', 'wicfr' ),
						'KZ' => __( 'Kazakhstan', 'wicfr' ),
						'KE' => __( 'Kenya', 'wicfr' ),
						'KI' => __( 'Kiribati', 'wicfr' ),
						'KP' => __( 'Korea, Democratic People\'s Republic of', 'wicfr' ),
						'KR' => __( 'Korea, Republic of', 'wicfr' ),
						'KW' => __( 'Kuwait', 'wicfr' ),
						'KG' => __( 'Kyrgyzstan', 'wicfr' ),
						'LA' => __( 'Lao People\'s Democratic Republic', 'wicfr' ),
						'LV' => __( 'Latvia', 'wicfr' ),
						'LB' => __( 'Lebanon', 'wicfr' ),
						'LS' => __( 'Lesotho', 'wicfr' ),
						'LR' => __( 'Liberia', 'wicfr' ),
						'LY' => __( 'Libya', 'wicfr' ),
						'LI' => __( 'Liechtenstein', 'wicfr' ),
						'LT' => __( 'Lithuania', 'wicfr' ),
						'LU' => __( 'Luxembourg', 'wicfr' ),
						'MO' => __( 'Macao', 'wicfr' ),
						'MK' => __( 'Macedonia, the Former Yugoslav Republic of', 'wicfr' ),
						'MG' => __( 'Madagascar', 'wicfr' ),
						'MW' => __( 'Malawi', 'wicfr' ),
						'MY' => __( 'Malaysia', 'wicfr' ),
						'MV' => __( 'Maldives', 'wicfr' ),
						'ML' => __( 'Mali', 'wicfr' ),
						'MT' => __( 'Malta', 'wicfr' ),
						'MH' => __( 'Marshall Islands', 'wicfr' ),
						'MQ' => __( 'Martinique', 'wicfr' ),
						'MR' => __( 'Mauritania', 'wicfr' ),
						'MU' => __( 'Mauritius', 'wicfr' ),
						'YT' => __( 'Mayotte', 'wicfr' ),
						'MX' => __( 'Mexico', 'wicfr' ),
						'FM' => __( 'Micronesia, Federated States of', 'wicfr' ),
						'MD' => __( 'Moldova, Republic of', 'wicfr' ),
						'MC' => __( 'Monaco', 'wicfr' ),
						'MN' => __( 'Mongolia', 'wicfr' ),
						'ME' => __( 'Montenegro', 'wicfr' ),
						'MS' => __( 'Montserrat', 'wicfr' ),
						'MA' => __( 'Morocco', 'wicfr' ),
						'MZ' => __( 'Mozambique', 'wicfr' ),
						'MM' => __( 'Myanmar', 'wicfr' ),
						'NA' => __( 'Namibia', 'wicfr' ),
						'NR' => __( 'Nauru', 'wicfr' ),
						'NP' => __( 'Nepal', 'wicfr' ),
						'NL' => __( 'Netherlands', 'wicfr' ),
						'NC' => __( 'New Caledonia', 'wicfr' ),
						'NZ' => __( 'New Zealand', 'wicfr' ),
						'NI' => __( 'Nicaragua', 'wicfr' ),
						'NE' => __( 'Niger', 'wicfr' ),
						'NG' => __( 'Nigeria', 'wicfr' ),
						'NU' => __( 'Niue', 'wicfr' ),
						'NF' => __( 'Norfolk Island', 'wicfr' ),
						'MP' => __( 'Northern Mariana Islands', 'wicfr' ),
						'NO' => __( 'Norway', 'wicfr' ),
						'OM' => __( 'Oman', 'wicfr' ),
						'PK' => __( 'Pakistan', 'wicfr' ),
						'PW' => __( 'Palau', 'wicfr' ),
						'PS' => __( 'Palestine, State of', 'wicfr' ),
						'PA' => __( 'Panama', 'wicfr' ),
						'PG' => __( 'Papua New Guinea', 'wicfr' ),
						'PY' => __( 'Paraguay', 'wicfr' ),
						'PE' => __( 'Peru', 'wicfr' ),
						'PH' => __( 'Philippines', 'wicfr' ),
						'PN' => __( 'Pitcairn', 'wicfr' ),
						'PL' => __( 'Poland', 'wicfr' ),
						'PT' => __( 'Portugal', 'wicfr' ),
						'PR' => __( 'Puerto Rico', 'wicfr' ),
						'QA' => __( 'Qatar', 'wicfr' ),
						'RE' => __( 'Réunion', 'wicfr' ),
						'RO' => __( 'Romania', 'wicfr' ),
						'RU' => __( 'Russian Federation', 'wicfr' ),
						'RW' => __( 'Rwanda', 'wicfr' ),
						'BL' => __( 'Saint Barthélemy', 'wicfr' ),
						'SH' => __( 'Saint Helena, Ascension and Tristan da Cunha', 'wicfr' ),
						'KN' => __( 'Saint Kitts and Nevis', 'wicfr' ),
						'LC' => __( 'Saint Lucia', 'wicfr' ),
						'MF' => __( 'Saint Martin (French part)', 'wicfr' ),
						'PM' => __( 'Saint Pierre and Miquelon', 'wicfr' ),
						'VC' => __( 'Saint Vincent and the Grenadines', 'wicfr' ),
						'WS' => __( 'Samoa', 'wicfr' ),
						'SM' => __( 'San Marino', 'wicfr' ),
						'ST' => __( 'Sao Tome and Principe', 'wicfr' ),
						'SA' => __( 'Saudi Arabia', 'wicfr' ),
						'SN' => __( 'Senegal', 'wicfr' ),
						'RS' => __( 'Serbia', 'wicfr' ),
						'SC' => __( 'Seychelles', 'wicfr' ),
						'SL' => __( 'Sierra Leone', 'wicfr' ),
						'SG' => __( 'Singapore', 'wicfr' ),
						'SX' => __( 'Sint Maarten (Dutch part)', 'wicfr' ),
						'SK' => __( 'Slovakia', 'wicfr' ),
						'SI' => __( 'Slovenia', 'wicfr' ),
						'SB' => __( 'Solomon Islands', 'wicfr' ),
						'SO' => __( 'Somalia', 'wicfr' ),
						'ZA' => __( 'South Africa', 'wicfr' ),
						'GS' => __( 'South Georgia and the South Sandwich Islands', 'wicfr' ),
						'SS' => __( 'South Sudan', 'wicfr' ),
						'ES' => __( 'Spain', 'wicfr' ),
						'LK' => __( 'Sri Lanka', 'wicfr' ),
						'SD' => __( 'Sudan', 'wicfr' ),
						'SR' => __( 'Suriname', 'wicfr' ),
						'SJ' => __( 'Svalbard and Jan Mayen', 'wicfr' ),
						'SZ' => __( 'Swaziland', 'wicfr' ),
						'SE' => __( 'Sweden', 'wicfr' ),
						'CH' => __( 'Switzerland', 'wicfr' ),
						'SY' => __( 'Syryan Arab Republic', 'wicfr' ),
						'TW' => __( 'Taiwan, Province of China', 'wicfr' ),
						'TJ' => __( 'Tajikistan', 'wicfr' ),
						'TZ' => __( 'Tanzania, United Republic of', 'wicfr' ),
						'TH' => __( 'Thailand', 'wicfr' ),
						'TL' => __( 'Timor-Leste', 'wicfr' ),
						'TG' => __( 'Togo', 'wicfr' ),
						'TK' => __( 'Tokelau', 'wicfr' ),
						'TO' => __( 'Tonga', 'wicfr' ),
						'TT' => __( 'Trinidad and Tobago', 'wicfr' ),
						'TN' => __( 'Tunisia', 'wicfr' ),
						'TR' => __( 'Turkey', 'wicfr' ),
						'TM' => __( 'Turkmenistan', 'wicfr' ),
						'TC' => __( 'Turks and Caicos Islands', 'wicfr' ),
						'TV' => __( 'Tuvalu', 'wicfr' ),
						'UG' => __( 'Uganda', 'wicfr' ),
						'UA' => __( 'Ukraine', 'wicfr' ),
						'AE' => __( 'United Arab Emirates', 'wicfr' ),
						'GB' => __( 'United Kingdom', 'wicfr' ),
						'US' => __( 'United States', 'wicfr' ),
						'UM' => __( 'United States Minor Outlying Islands', 'wicfr' ),
						'UY' => __( 'Uruguay', 'wicfr' ),
						'UZ' => __( 'Uzbekistan', 'wicfr' ),
						'VU' => __( 'Vanuatu', 'wicfr' ),
						'VE' => __( 'Venezuela, Bolivarian Republic of', 'wicfr' ),
						'VN' => __( 'Vietnam', 'wicfr' ),
						'VG' => __( 'Virgin Islands, British', 'wicfr' ),
						'VI' => __( 'Virgin Islands, U.S.', 'wicfr' ),
						'WF' => __( 'Wallis and Futuna', 'wicfr' ),
						'EH' => __( 'Western Sahara', 'wicfr' ),
						'YE' => __( 'Yemen', 'wicfr' ),
						'ZM' => __( 'Zambia', 'wicfr' ),
						'ZW' => __( 'Zimbabwe', 'wicfr' )
					)

				),
				array(
					'field_id'   => 'url',
					'title'      => __('URL redirect', 'wicfr' ),
					'description'=> __('Where you want to redirect visitors? (eg. https://www.another-website.com)', 'wicfr' ),
					'type'       => 'url',
					'attributes'    => array(
						'style' => "width: 100%;",
					)
				),
				array(
					'field_id'   => 'type',
					'title'      => __('Redirect type', 'wicfr' ),
					'type'       => 'radio',
					'label' => array(
						100 => __('None (Inactive)', 'wicfr' ),
						307 => __('Temporary Redirect (307)', 'wicfr' ),
						301 => __('Moved Permanently (301)', 'wicfr' )
					),
					'default' => 100
				)
			);

		}

		/**
		 * @callback        action      do_ + page slug
		 */
		public function do_wi_cfr_options() {

			submit_button();
			
			$country_code = $_SERVER["HTTP_CF_IPCOUNTRY"];
			if(!empty($country_code)) {
				new AdminPageFramework_AdminNotice( __('Cloudflare GeoIP is Active, your country code: ', 'wicfr' ) . $country_code, array( 'class' => 'updated' ) );
			}else{
				new AdminPageFramework_AdminNotice( __('<strong>Country is not detected!</strong><br>Activate GeoIP in your <a href="https://dash.cloudflare.com/" target="_blank">Cloudflare account</a>, link with instructions is <a href="https://support.cloudflare.com/hc/en-us/articles/200168236-Configuring-Cloudflare-IP-Geolocation" target="_blank">here</a>.', 'wicfr' ) );
			}
		}

	}

	new WICFR;

}
