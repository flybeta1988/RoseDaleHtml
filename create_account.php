<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta name="google-translate-customization" content="9729011a1ca8ad32-859f9c8a4b0ac788-g484bdfbbefc9c2be-14" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Prevents top nav menu items from flashing on page load -->
<style>
	.top_nav_container .top_nav > ul > li > ul { display:none; }
</style>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Create Account </title>
 <meta name="Description" content="" />
 <meta name="Keywords" content="" />
 <meta name="robots" content="noodp" />
 <meta name="slurp" content="noydir" />
 <link rel="canonical" href="create_account.php"  >
 	<base href="" />

	<!-- LINKS -->
	<link rel="stylesheet" type="text/css" href="ext/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="includes/css/responsive_menu.css" />
	<link type="text/css" href="ext/mmenu/dist/css/jquery.mmenu.all.css" rel="stylesheet" />
	<link type="text/css" href="ext/mmenu/dist/extensions/positioning/jquery.mmenu.positioning.css" rel="stylesheet" />
	<link href="ext/mmenu/dist/extensions/pagedim/jquery.mmenu.pagedim.css" type="text/css" rel="stylesheet" />
	<link href="ext/mmenu/dist/extensions/multiline/jquery.mmenu.multiline.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="ext/jquery/ui/ecw/jquery-ui.css" />
	<link rel="stylesheet" type="text/css" href="includes/css/jquery.bxslider.css" />
	<link rel="stylesheet" type="text/css" href="includes/css/slideshows.css" />
	<link rel="stylesheet" type="text/css" href="ext/jquery/colorbox/theme_1/colorbox.css">
	<link rel="stylesheet" type="text/css" href="includes/css/stylesheet.css" />
	<link rel="stylesheet" type="text/css" href="includes/css/print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="includes/css/headertags_seo_styles.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="includes/css/menu.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="includes/css/rosedale_products.css" />
	<link rel="stylesheet" type="text/css" href="includes/css/galleries.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="includes/css/forms.css" media="screen">
	<link rel="stylesheet" type="text/css" href="includes/css/part-builder.css">
    <link rel="stylesheet" type="text/css" href="ext/evenzoom/dist/evenZoom.css">
		<link rel="SHORTCUT ICON" href="images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="includes/css/responsive.css" />
	<!-- end LINKS -->

	<!-- SCRIPTS -->
	<script src="/public/js/jquery.min.js"></script>
	<script type="text/javascript" src="ext/jquery/ui/jquery-ui-1.10.4.custom.js"></script>
		<script src="ext/jquery/bxGallery/jquery.bxGallery.1.1.js"></script>
	<script src="ext/jquery/bxslider/jquery.bxslider.js"></script>
	<script src="ext/jquery/jcarousel/jquery.jcarousel.min.js"></script>
	<script src="includes/javascript/jquery.cycle.all.js"></script>
	<script src="ext/jquery/colorbox/jquery.colorbox.js"></script>
	<script src="includes/javascript/product_variables.js"></script>
	<script src="includes/javascript/jquery.hoverIntent.minified.js"></script>
	<script src="includes/javascript/jquery.jumbomenu.js"></script>
	<script src="includes/javascript/savePDF.js"></script>
	<script src="ext/mmenu/dist/js/jquery.mmenu.all.min.js"></script>
	<script src="includes/javascript/responsive_menu.js"></script>
	<script src="includes/javascript/jquery.browser.min.js"></script>
    <script src="ext/evenzoom/dist/evenZoom.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&amp;render=explicit" async defer></script>
	<script type="text/javascript">
		var CaptchaCallback = function(){
			if ($('#flyoutRecaptcha').length > 0) {
				grecaptcha.render('flyoutRecaptcha', {'sitekey' : '6Ld1IBwTAAAAAHbsjtVhBshVeVbTE3cU0yUQXc-w'});
			}
			if ($('#formRecaptcha').length > 0) {
				grecaptcha.render('formRecaptcha', {'sitekey' : '6Ld1IBwTAAAAAHbsjtVhBshVeVbTE3cU0yUQXc-w'});
			}
			if ($('#quickContactRecaptcha').length > 0) {
				grecaptcha.render('quickContactRecaptcha', {'sitekey' : '6Ld1IBwTAAAAAHbsjtVhBshVeVbTE3cU0yUQXc-w'});
			}
			if ($('#createAccountRecaptcha').length > 0) {
				grecaptcha.render('createAccountRecaptcha', {'sitekey' : '6Ld1IBwTAAAAAHbsjtVhBshVeVbTE3cU0yUQXc-w'});
			}
		};
	</script>
	<script>
		jQuery(document).ready(function() {
			$("#responsive_nav").css('display', 'block');
			$('div.mm-panels li.selected > a').click();
		});
	</script>
	<!-- end SCRIPTS -->

	<!--
	<link rel="stylesheet" type="text/css" href="ext/jquery/fancybox/jquery.fancybox-1.3.4.css" />
	<script type="text/javascript" src="ext/jquery/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	-->
	<!--
	<link rel="stylesheet" type="text/css" href="ext/jquery/jcarousel/slick.css" />
	<script type="text/javascript" src="ext/jquery/jcarousel/slick.min.js"></script>
	-->

<meta name="robots" content="noindex,follow" />

	
<!-- BOF head -->
	<link rel="stylesheet" type="text/css" href="includes/css/accounts.css" media="screen">
	<script type="text/javascript">
		/* Setup vars */
		var countries_with_states = ['223,38'];
		var countries_with_counties = ['223'];
		var countries_with_postcodes = ['223,38'];
		var defaultCountry = 223;

		var useAntirobot = true;

		var loctax_enabled = false;
		var loc_tax_ajax_file = 'account_ajax.php';

		var formPosted = 'false';
		var formAction = 'create_account';

		// Default / Billing fields
		var addr = new Object();
		addr.state = '';
		addr.state_other = '';
		addr.county = '';
		addr.city = '';
		addr.country = '';
		addr.county_html = '';
		addr.city_html = '';
		addr.zip_html = '';

		// Shipping / Billing fields
		var s_addr = new Object();
		s_addr.state = '';
		s_addr.state_other = '';
		s_addr.county = '';
		s_addr.city = '';
		s_addr.country = '';
		s_addr.county_html = '';
		s_addr.city_html = '';
		s_addr.zip_html = '';

		var addrTypes_map = new Array();
		addrTypes_map['b'] = 'billing';
		addrTypes_map['s'] = 'shipping';
		addrTypes_map['d'] = 'default';

		// Enabled fields
		var frmFields_enabled = new Array();
		frmFields_enabled['city'] = 'true';
frmFields_enabled['company'] = 'true';
frmFields_enabled['company_tax_id'] = 'true';
frmFields_enabled['country'] = 'true';
frmFields_enabled['email_address'] = 'true';
frmFields_enabled['fax'] = 'true';
frmFields_enabled['firstname'] = 'true';
frmFields_enabled['lastname'] = 'true';
frmFields_enabled['password'] = 'true';
frmFields_enabled['postcode'] = 'true';
frmFields_enabled['state'] = 'true';
frmFields_enabled['street_address_2'] = 'true';
frmFields_enabled['street_address'] = 'true';
frmFields_enabled['telephone'] = 'true';

		// Required fields
		var reqFlds = new Array();
		reqFlds[0] = 'city';
reqFlds[1] = 'country';
reqFlds[2] = 'email_address';
reqFlds[3] = 'firstname';
reqFlds[4] = 'lastname';
reqFlds[5] = 'password';
reqFlds[6] = 'postcode';
reqFlds[7] = 'state';
reqFlds[8] = 'street_address';
reqFlds[9] = 'password_confirm';
reqFlds[10] = 'antirobotreg';
		// Field Min char lengths
		var frmFields_mins = new Array();
		frmFields_mins['cc_number'] = '10';
frmFields_mins['cc_owner'] = '3';
frmFields_mins['city'] = '3';
frmFields_mins['company'] = '2';
frmFields_mins['county'] = '3';
frmFields_mins['dob'] = '10';
frmFields_mins['email_address'] = '6';
frmFields_mins['first_name'] = '2';
frmFields_mins['last_name'] = '2';
frmFields_mins['password'] = '5';
frmFields_mins['postcode'] = '4';
frmFields_mins['state'] = '2';
frmFields_mins['street_address'] = '5';
frmFields_mins['telephone'] = '3';
frmFields_mins['review_text'] = '50';
frmFields_mins['antirobotreg'] = '';

		var frmFields_type = new Array();
		frmFields_type['state'] = 'pulldown';
		frmFields_type['county'] = 'text';
		frmFields_type['city'] = 'text';
		frmFields_type['postcode'] = 'text';

		var ship_to_bill = 1;

		var createAccount = 0;
		var chkd = 0;

		var sel_country = '';
		var sel_state = '';
		var other_state = '';
		var sel_county = '';
		var sel_city = '';
		var sel_postcode = '';

		var fldValsArray = new Array();
		function set_fldValsArray(at) {
			// alert(at);
			$("#account_address_block_" + at + " :input").each(function() {
				fldValsArray[this.id] = this.value;
			});
		}

		function clear_fieldSet(at) {
				$("." + at + "-address-field").val('');
		}

		function toggle_ship_enable() {
			if(ship_to_bill > 0) {
				$(".s-address-field").prop('disabled', true);
				$(".s-address-field").css('color', '#878787');
				syncAddrs_bill_to_ship();
			} else {
				$(".s-address-field").removeProp('disabled');
				$(".s-address-field").css('color', '#000');
			}
		}

		function set_ship_to_bill() {
			chkd = $("#ship_to_bill").is(':checked');
			ship_to_bill = (chkd == true ? 1 : 0);
		}

		function syncAddrs_bill_to_ship() {
			$(".d-address-field").each(function() {
				syncFld_to_ship(this.id);
			});
		}

		function syncFld_to_ship(fn) {
			var fld_val = $("#" + fn).val();
			if(ship_to_bill > 0) {
				$("#s_" + fn).val(fld_val);
			}
		}

		function toggle_req(fld) {
			// alert(fld.id);
			var cf = addr.country;
			var baseID = fld.id.replace(/^._/, '');
			var ft = 'd';
			if(fld.id.search(/^s_/) > -1) {
				cf = s_addr.country;
				ft = 's';
			}
			var cwl = countries_with_states;
			if(baseID == 'state') {
				cwl = countries_with_states;
			} else if(baseID == 'county') {
				cwl = countries_with_counties;
			} else if(baseID == 'postcode') {
				cwl = countries_with_postcodes;
			}
			// alert(cf);

			if(reqFlds.indexOf(baseID) > -1 && cwl.indexOf(cf) > -1) {
				$("#account_address_block_" + ft + " label.lbl-" + baseID + " .req-fld-indicator").show();
				validate_fldError_val(fld);
			} else {
				$("#account_address_block_" + ft + " label.lbl-" + baseID).removeClass("lbl-error invalid valid afilled");
				$("#account_address_block_" + ft + " label.lbl-" + baseID + " .req-fld-indicator").hide();
			}
		}

		// Country Handling
		function selectCountry(at) {
			var aPrefix = (at != 'd' ? at + '_' : '');
			// var fName = aPrefix + 'country';
			var sfName = aPrefix + 'state';
			var sCountry = $("#" + aPrefix + "country").val();
			var sState = $("#" + aPrefix + "state").val();
			var sState_other = $("#" + aPrefix + "other_state").val();
			var sCounty = $("#" + aPrefix + "county").val();
			var sCity = $("#" + aPrefix + "city").val();
			var sPostcode = $("#" + aPrefix + "postcode").val();

			var ckCtry = (at == 's' ? s_addr.country : addr.country);
			var country_change = 0;
			if(sCountry != ckCtry) {
				country_change = 1;
			}

			if(at == 's') {
				if(ship_to_bill > 0) {
					s_addr.country = addr.country;
					if(country_change == 0) {
						s_addr.state = addr.state;
						s_addr.state_other = addr.state_other;
						s_addr.county = addr.county;
						s_addr.city = addr.city;
						s_addr.postcode = addr.postcode;
					} else {
						s_addr.state = '';
						s_addr.state_other = '';
						s_addr.county = '';
						s_addr.city = '';
						s_addr.postcode = '';
					}

				} else {
					s_addr.country = sCountry;
					if(country_change == 0) {
						s_addr.state = sState;
						s_addr.state_other = sState_other;
						s_addr.county = sCounty;
						s_addr.city = sCity;
						s_addr.postcode = sPostcode;
					} else {
						s_addr.state = '';
						s_addr.state_other = '';
						s_addr.county = '';
						s_addr.city = '';
						s_addr.postcode = '';
					}
				}
				sel_country = s_addr.country;
				sel_state = s_addr.state;
				sel_state_other = s_addr.state_other;
				sel_county = s_addr.county;
				sel_county_other = s_addr.county_other;
				sel_city = s_addr.city;
				sel_city_other = s_addr.city_other;
				sel_postcode = s_addr.postcode;
				sel_postcode_other = s_addr.postcode_other;

			} else {
				addr.country = sCountry;
				if(country_change == 0) {
					addr.state = sState;
					addr.state_other =  sState_other;
					addr.county = addr.sCounty;
					addr.county_other = addr.sCounty_other;
					addr.city = addr.sCity;
					addr.city_other = addr.sCity_other;
					addr.postcode = addr.sPostcode;
					addr.postcode_other = addr.sPostcode_other;
				} else {
					addr.state = '';
					addr.state_other = '';
					addr.county = '';
					addr.county_other = '';
					addr.city = '';
					addr.city_other = '';
					addr.postcode = '';
					addr.postcode_other = '';
				}

				sel_country = addr.country;
				sel_state = addr.state;
				sel_state_other = addr.state_other;
				sel_county = addr.county;
				sel_county_other = addr.county_other;
				sel_city = addr.city;
				sel_city_other = addr.city_other;
				sel_postcode = addr.postcode
				sel_postcode_other = addr.postcode_other
			}
			// alert(sel_country);

			var fldClass = $("#" + sfName).attr("class");
			$.post(loc_tax_ajax_file, { selGet: "getState", aType: at, fAction: formAction, selCountry: sel_country, selState: sel_state, otherState: other_state, fldName: sfName, fPosted: formPosted, fld_class: fldClass }, function(data) {
				// alert(data);
					$("#" + aPrefix + "state_field_box").html(data);

					var sVal = $("#" + sfName).val();
					if(sVal != 'other' && sVal.length > 0) {
						selectState(at);
					}
					var fld = document.getElementById(aPrefix +'state');
					if(fld != null && fld.value != "undefined") {
						// alert(fld.id);
						toggle_req(fld);
					}

					fld = document.getElementById(aPrefix + 'county');
					if(fld != null && fld.value != "undefined") {
						toggle_req(fld);
					}

					fld = document.getElementById(aPrefix + 'postcode');
					if(fld != null && fld.value != "undefined") {
						toggle_req(fld);
					}

					toggle_ship_enable();
			}, "html");

			if(at != 's') {
				if(ship_to_bill > 0) {
					$("#s_country").val(addr.country);
				}
				selectCountry('s');
				}
		}

		// State Handling
		function toggle_otherState(at, ss) {
			var aPrefix = (at != 'd' ? at + '_' : '');
			if(ss != 'other') {
				$("#" + aPrefix + "state_other").attr('name', aPrefix + 'state_other');
				$("#" + aPrefix + "state_other").val('').hide();
				$("#" + aPrefix + "state").attr('name', aPrefix + 'state');
			} else {
				$("#" + aPrefix + "state").attr('name', aPrefix + 'state_other');
				$("#" + aPrefix + "state_other").show();
				$("#" + aPrefix + "state_other").attr('name', aPrefix + 'state');
			}
		}

		function selectState(at) {
			var aPrefix = (at != 'd' ? at + '_' : '');
			sel_state = $("#" + aPrefix + "state").val();

			if(at == 'd') {
				addr.state = sel_state;
			} else if(at == 's') {
				s_addr.state = sel_state;
			}

			toggle_otherState(at, sel_state);
			if(frmFields_enabled['county'] > 0 && frmFields_type['county'] != 'text') {
				draw_county_fld(at);
			}
			if(frmFields_enabled['city'] > 0 && frmFields_type['city'] != 'text') {
				draw_city_fld(at);
			}
			if(frmFields_enabled['postcode'] > 0 && frmFields_type['postcode'] != 'text') {
				draw_postcode_fld(at);
			}
			var fld = document.getElementById(aPrefix + 'state');
			validate_fldError_val(fld);

			if(ship_to_bill > 0 && at != 's') {
				syncFld_to_ship('state');
				selectState('s');
			}
			// alert(sel_state);

		}

		// City Handling
		function selectCity(at) {
			var aPrefix = (at != 'd' ? at + '_' : '');
			sel_city = $("#" + aPrefix + "city").val();

			if(at == 'd') {
				addr.city = sel_city;
			} else if(at == 's') {
				s_addr.city = sel_city;
			}

			if(sel_city == 'other') {
				$("#" + aPrefix + "city").attr('name', aPrefix + 'city_other');
				$("#" + aPrefix + "city_other").show();
				$("#" + aPrefix + "city_other").attr('name', aPrefix + 'city');
			} else {
				$("#" + aPrefix + "city_other").attr('name', aPrefix + 'city_other');
				$("#" + aPrefix + "city_other").val('').hide();
				$("#" + aPrefix + "city").attr('name', aPrefix + 'city');
			}

			if(ship_to_bill > 0 && at != 's') {
				syncFld_to_ship('city');
				selectCity('s');
			}
			// alert(sel_city);

		}

		function draw_city_fld(at) {
			var aPrefix = (at == 's' ? 's_' : '');
			var sCountry = (at == 's' ? s_addr.country : addr.country);
			if(countries_with_states.indexOf(sCountry) > -1) {
				var sCounty = (at == 's' ? s_addr.county : addr.county);
				var sCity = (at == 's' ? s_addr.city : addr.city);
				var sState = (at == 's' ? s_addr.state : addr.state);
				$.post(loc_tax_ajax_file, { selGet: "getCity", fAction: formAction, selCounty: sCounty, selCity: sCity, selState: sState, fldName: aPrefix + "city" }, function(data) {
					// alert(data);
						$("#" + aPrefix + "city_field_box").html(data);
						var fld = document.getElementById('city');
							toggle_req(fld);

					toggle_ship_enable();
				}, "html");
			}
		}

		// County Handling
		function selectCounty(at) {
			var aPrefix = (at != 'd' ? at + '_' : '');
			sel_county = $("#" + aPrefix + "county").val();

			if(at == 'd') {
				addr.county = sel_county;
			} else if(at == 's') {
				s_addr.county = sel_county;
			}

			if(sel_county == 'other') {
				$("#" + aPrefix + "county").attr('name', aPrefix + 'county_other');
				$("#" + aPrefix + "county_other").show();
				$("#" + aPrefix + "county_other").attr('name', aPrefix + 'county');
			} else {
				$("#" + aPrefix + "county_other").attr('name', aPrefix + 'county_other');
				$("#" + aPrefix + "county_other").val('').hide();
				$("#" + aPrefix + "county").attr('name', aPrefix + 'county');
			}

			if(ship_to_bill > 0 && at != 's') {
					syncFld_to_ship('county');
					selectCounty('s');
				}

			if(frmFields_enabled['city'] > 0 && frmFields_type['city'] != 'text') {
				draw_city_fld(at);
			}
			if(frmFields_enabled['postcode'] > 0 && frmFields_type['postcode'] != 'text') {
				draw_postcode_fld(at);
			}

		}

		function draw_county_fld(at) {
				var aPrefix = (at != 'd' ? at + '_' : '');
				var sCountry = (at == 's' ? s_addr.country : addr.country);
				var sState = (at == 's' ? s_addr.state : addr.state);
				// var sState_other = (at == 's' ? s_addr.state_other : addr.state_other);
				var sCounty = (at == 's' ? s_addr.county : addr.county);

			if(countries_with_counties.indexOf(sCountry) > -1) {
					$.post(loc_tax_ajax_file, { selGet: "getCounty", fAction: formAction, selCountry: sCountry, selState: sState, selCounty: sCounty, fldName: aPrefix + "county" }, function(data) {
						// alert(data);
							$("#" + aPrefix + "county_field_box").html(data);
							var fld = document.getElementById('county');
							toggle_req(fld);

							toggle_ship_enable();
					}, "html");

			} else {
				$("#account_address_block_" + at + " label.lbl-county, #account_address_block_" + at + " #county").removeClass("lbl-error fld-error req-fld invalid valid afilled");
				$(".lbl-county .req-fld-indicator").hide();
				var sCounty = (at == 's' ? s_addr.county_html : addr.county_html);
				$("#" + aPrefix + "county_field_box").html(sCounty);
			}
			//
		}

		// Postcode handling
		function selectPostcode(at) {
			var aPrefix = (at != 'd' ? at + '_' : '');
			sel_postcode = $("#" + aPrefix + "postcode").val();

			if(at == 'd') {
				addr.postcode = sel_postcode;
			} else if(at == 's') {
				s_addr.postcode = sel_postcode;
			}

			if(sel_postcode == 'other') {
				$("#" + aPrefix + "postcode").attr('name', aPrefix + 'postcode_other');
				$("#" + aPrefix + "postcode_other").show();
				$("#" + aPrefix + "postcode_other").attr('name', aPrefix + 'postcode');
			} else {
				$("#" + aPrefix + "postcode_other").attr('name', aPrefix + 'postcode_other');
				$("#" + aPrefix + "postcode_other").val('').hide();
				$("#" + aPrefix + "postcode").attr('name', aPrefix + 'postcode');
			}

			if(ship_to_bill > 0 && at != 's') {
					syncFld_to_ship('postcode');
					selectPostcode('s');
				}
		}

		function draw_postcode_fld(at) {
			var aPrefix = (at != 'd' ? at + '_' : '');
				var sCountry = (at == 's' ? s_addr.country : addr.country);
				var sState = (at == 's' ? s_addr.state : addr.state);
				// var sState_other = (at == 's' ? s_addr.state_other : addr.state_other);
				var sCounty = (at == 's' ? s_addr.county : addr.county);
				var sPostcode = (at == 's' ? s_addr.postcode : addr.postcode);

			if(countries_with_postcodes.indexOf(sCountry) > -1) {
					$.post(loc_tax_ajax_file, { selGet: "getZip", fAction: formAction, selCountry: sCountry, selState: sState, selCounty: sCounty, fldName: aPrefix + "postcode" }, function(data) {

							$("#" + aPrefix + "postcode_field_box").html(data);
							var fld = document.getElementById('postcode');
							toggle_req(fld);

							toggle_ship_enable();
					}, "html");

			} else {
				$("#account_address_block_" + at + " label.lbl-postcode, #account_address_block_" + at + " #postcode").removeClass("lbl-error fld-error req-fld invalid valid afilled");
				$(".lbl-postcode .req-fld-indicator").hide();
				// var sCounty = (at == 's' ? s_addr.postcode_html : addr.postcode_html);
				$("#" + aPrefix + "postcode_field_box").html(sPostcode);
			}
		}


		function togglePasswords() {
			chkd = $("#create_account").prop('checked');
			createAccount = (chkd != 1 ? 0 : 1);
			if(createAccount == 1) {
				$("#passwords_box").show();
				$(".password-fld").val('');
				$(".password-fld").removeProp('disabled');
				$("#guest_account").val('0');
			} else {
				// alert('Here');
				$("#passwords_box").hide();
				$(".password-fld").val('');
				$(".password-fld").prop('disabled', 'true');
				$("#guest_account").val('1');
			}
		}

		function validate_fldError_val(fld) {
			var baseID = (fld.id == 'password_confirm' ? 'password' : fld.id.replace(/^._/, ''));
			var ft = (fld.id.search(/^s_/) > -1 ? 's' :'d');

			if(reqFlds.indexOf(baseID) > -1) {
					if(fld.value.length > 0 && (frmFields_mins[baseID] == "undefined" || (frmFields_mins[baseID] != "undefined" && fld.value.length >= frmFields_mins[baseID])) ) {
						if(fld.id != 'password_confirm' || (fld.id == 'password_confirm' && fld.value == $("#password").val())) {
								$("#" + fld.id).removeClass('invalid').addClass('valid');
								$("#account_address_block_" + ft + " label.lbl-" + fld.id).removeClass('invalid').addClass('valid');
								if(useAntirobot == true && fld.id == 'antirobotreg') {
										$("#antirobotreg").removeClass("invalid").addClass("valid");
										$("#account-antirobot-reg .lbl-error").addClass("valid");
								} else if(fld.id.search('password') > -1) {
									$("#passwords_box .lbl-error").addClass("valid");
								}
						}
				} else {
					$("#" + fld.id).removeClass('valid').addClass('invalid');
					$("#account_address_block_" + ft + " label.lbl-" + fld.id).removeClass('valid').addClass('invalid');
					if(useAntirobot == true && fld.id == 'antirobotreg') {
									$("#antirobotreg").removeClass("valid").addClass("invalid");
									$("#account-antirobot-reg .lbl-error").removeClass("valid").addClass("invalid");
							} else if(fld.id.search('password') > -1) {
								$("#passwords_box .lbl-error").removeClass("valid").addClass("invalid");
							}
				}
			}
		}

		function validateEmail(fld) {
			var emailPattern = /^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i;
			if(fld.value.match(emailPattern) != null) {
				$("#" + fld.id).removeClass('invalid').addClass('valid');
				$("label.lbl-email_address").removeClass('invalid').addClass('valid');
			} else {
				$("#" + fld.id).removeClass('valid').addClass('invalid');
				$("label.lbl-email_address").removeClass('valid').addClass('invalid');
			}
		}

		function toggle_s2b() {
			set_ship_to_bill();

			addr.country = $("#country").val();
			addr.city = $("#city").val();
			addr.state = $("#state").val();
			addr.state_other = $("#state_other").val();
			addr.county = $("#county").val();
			addr.postcode = $("#postcode").val();

			if(ship_to_bill > 0) {
				s_addr.country = addr.country;
				s_addr.city = addr.city;
				s_addr.state = addr.state;
				s_addr.state_other = addr.state_other;
				s_addr.county = addr.county;
				s_addr.postcode = addr.postcode;
				$("#account_address_block_s label, #account_address_block_s input, #account_address_block_s select").removeClass("fld-error lbl-error invalid valid afilled");
			} else {
				s_addr.country = $("#s_country").val();
				s_addr.city = $("#s_city").val();
				s_addr.state = $("#s_state").val();
				s_addr.state_other = $("#s_state_other").val();
				s_addr.county = $("#s_county").val();
				s_addr.postcode = $("#s_postcode").val();
			}
			selectCountry('s');
			toggle_ship_enable();
		}

		$(document).ready(function() {
				// Init ship to bill value
			set_ship_to_bill();
			// alert( + ' -- ' + ship_to_bill);

			addr.country = $("#country").val();
			addr.state = $("#state").val();
			addr.state_other = $("#state_other").val();
			addr.county = $("#county").val();
			addr.city = $("#city").val();
			addr.postcode = $("#postcode").val();
			s_addr.country = $("#s_country").val();
			s_addr.state = $("#s_state").val();
			s_addr.state_other = $("#s_state_other").val();
			s_addr.county = $("#s_county").val();
			s_addr.city = $("#s_city").val();
			s_addr.postcode = $("#s_postcode").val();

			// Customers Address
			addr.country_html = $("#country_field_box").html();
			addr.state_html = $("#state_field_box").html();
			addr.county_html = $("#county_field_box").html();
			addr.city_html = $("#city_field_box").html();
			addr.zip_html = $("#zip_field_box").html();

				sel_state = $("#state").val();

			// Shipping Address
			s_addr.country_html = $("#s_country_field_box").html();
			s_addr.state_html = $("#s_state_field_box").html();
			s_addr.county_html = $("#s_county_field_box").html();
			s_addr.city_html = $("#s_city_field_box").html();
			s_addr.zip_html = $("#s_zip_field_box").html();

			selectCountry('d');

									$("#ship_to_bill").prop('checked', true);
					ship_to_bill = 1;

				
				if(ship_to_bill == 1) {
				syncAddrs_bill_to_ship();
				}
			toggle_ship_enable();

			$("#ship_to_bill").change(function() {
				toggle_s2b();
			});

			$("#create_account").change(function() {
				togglePasswords();
			});

			$(".d-address-field").on({
				keyup: function() {
						if(ship_to_bill == 1) {
							syncFld_to_ship(this.id)
						}
				},
				keydown: function(event) {
					if(event.which == 13) {
						event.preventDefault();
					}
				},
				blur: function() {
						if(ship_to_bill == 1) {
							$("#" + this.id).keyup();
						}
				}
				});

			$(".fld-error").on("keyup change blur", function() {
				if(this.id.search("email_address") > -1) {
					validateEmail(this);
				} else {
					validate_fldError_val(this);
				}
				});

			togglePasswords();
		});

	</script>
	<!-- EOF head -->




<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', "UA-15958394-1", 'auto');
  ga('send', 'pageview');

</script>

<script type="text/javascript">
	function printPage() {
		// $('#flyout_contact').css('display','none');
		$('#flyout_contact').addClass("noprint");
		window.print();
		// $('#flyout_contact').css('display','block');
		$('#flyout_contact').removeClass("noprint");
		return false;
	}


	$(document).ready(function() {
		if ($(window).width() >= 990) {
			$("#top_nav .top_nav").jumboMenu({timeout: 150, columns: 4});
		} else {
			var jumbonavDrawn = false;
			window.addEventListener("resize", function() {
				if (($(window).width() >= 990) && jumbonavDrawn == false) {
					$("#top_nav .top_nav").jumboMenu({timeout: 150, columns: 4});
					jumbonavDrawn = true;
				}
			});
		}
		$(".click-to-enlarge").colorbox();
	});
</script>
</head>
<body id="page_create_account">
	<!-- Flyout -->
	<!-- <script type="text/javascript" src="includes/javascript/fly_out.js"></script> -->
	<div style="display: none;" id="flyout_contactBg">
</div>
<div id="flyout_contact" class="noprint">
	<div id="flyout_contactHelp"></div>
   	<div id="fc_messageOK">Thank you! Question Sent!</div>
	<div id="fc_messageERROR"></div>
	<div id="fc_formBox" class="fc-form">
		<script type="text/javascript">/**
 * jquery.meio.mask.js
 * @author: fabiomcosta
 * @version: 1.1.3
 *
 * Created by Fabio M. Costa on 2008-09-16. Please report any bug at http://www.meiocodigo.com
 *
 * Copyright (c) 2008 Fabio M. Costa http://www.meiocodigo.com
 *
 * The MIT License (http://www.opensource.org/licenses/mit-license.php)
 *
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 */

(function($){

	var isIphone = (window.orientation != undefined),
		// browsers like firefox2 and before and opera doenst have the onPaste event, but the paste feature can be done with the onInput event.
		pasteEvent = (($.browser.opera || ($.browser.mozilla && parseFloat($.browser.version.substr(0,3)) < 1.9 ))? 'input': 'paste');

	$.event.special.paste = {
		setup: function() {
	    	if(this.addEventListener)
	        	this.addEventListener(pasteEvent, pasteHandler, false);
   			else if (this.attachEvent)
				this.attachEvent(pasteEvent, pasteHandler);
		},

		teardown: function() {
			if(this.removeEventListener)
	        	this.removeEventListener(pasteEvent, pasteHandler, false);
   			else if (this.detachEvent)
				this.detachEvent(pasteEvent, pasteHandler);
		}
	};

	// the timeout is set because we can't get the value from the input without it
	function pasteHandler(e){
		var self = this;
		e = $.event.fix(e || window.e);
		e.type = 'paste';
		// Execute the right handlers by setting the event type to paste
		setTimeout(function(){ $.event.handle.call(self, e); }, 1);
	};

	$.extend({
		mask : {

			// the mask rules. You may add yours!
			// number rules will be overwritten
			rules : {
				'z': /[a-z]/,
				'Z': /[A-Z]/,
				'a': /[a-zA-Z]/,
				'*': /[0-9a-zA-Z]/,
				'@': /[0-9a-zA-Z]/
			},

			// these keys will be ignored by the mask.
			// all these numbers where obtained on the keydown event
			keyRepresentation : {
				8	: 'backspace',
				9	: 'tab',
				13	: 'enter',
				16	: 'shift',
				17	: 'control',
				18	: 'alt',
				27	: 'esc',
				33	: 'page up',
				34	: 'page down',
				35	: 'end',
				36	: 'home',
				37	: 'left',
				38	: 'up',
				39	: 'right',
				40	: 'down',
				45	: 'insert',
				46	: 'delete',
				116	: 'f5',
				123 : 'f12',
				224	: 'command'
			},

			iphoneKeyRepresentation : {
				10	: 'go',
				127	: 'delete'
			},

			signals : {
				'+' : '',
				'-' : '-'
			},

			// default settings for the plugin
			options : {
				attr: 'alt', // an attr to look for the mask name or the mask itself
				mask: null, // the mask to be used on the input
				type: 'fixed', // the mask of this mask
				maxLength: -1, // the maxLength of the mask
				defaultValue: '', // the default value for this input
				signal: false, // this should not be set, to use signal at masks put the signal you want ('-' or '+') at the default value of this mask.
							   // See the defined masks for a better understanding.

				textAlign: true, // use false to not use text-align on any mask (at least not by the plugin, you may apply it using css)
				selectCharsOnFocus: true, // select all chars from input on its focus
				autoTab: true, // auto focus the next form element when you type the mask completely
				setSize: false, // sets the input size based on the length of the mask (work with fixed and reverse masks only)
				fixedChars : '[(),.:/ -]', // fixed chars to be used on the masks. You may change it for your needs!

				onInvalid : function(){},
				onValid : function(){},
				onOverflow : function(){}
			},

			// masks. You may add yours!
			// Ex: $.fn.setMask.masks.msk = {mask: '999'}
			// and then if the 'attr' options value is 'alt', your input should look like:
			// <input type="text" name="some_name" id="some_name" alt="msk" />
			masks : {
				'phone'				: { mask : '(99) 9999-9999' },
				'phone-us'			: { mask : '(999) 999-9999' },
				'cpf'				: { mask : '999.999.999-99' }, // cadastro nacional de pessoa fisica
				'cnpj'				: { mask : '99.999.999/9999-99' },
				'date'				: { mask : '39/19/9999' }, //uk date
				'date-us'			: { mask : '19/39/9999' },
				'cep'				: { mask : '99999-999' },
				'time'				: { mask : '29:59' },
				'cc'				: { mask : '9999 9999 9999 9999' }, //credit card mask
				'integer'			: { mask : '999.999.999.999', type : 'reverse' },
				'decimal'			: { mask : '99,999.999.999.999', type : 'reverse', defaultValue : '000' },
				'decimal-us'		: { mask : '99.999,999,999,999', type : 'reverse', defaultValue : '000' },
				'signed-decimal'	: { mask : '99,999.999.999.999', type : 'reverse', defaultValue : '+000' },
				'signed-decimal-us' : { mask : '99,999.999.999.999', type : 'reverse', defaultValue : '+000' }
			},

			init : function(){
				// if has not inited...
				if( !this.hasInit ){

					var self = this, i,
						keyRep = (isIphone)? this.iphoneKeyRepresentation: this.keyRepresentation;

					this.ignore = false;

					// constructs number rules
					for(i=0; i<=9; i++) this.rules[i] = new RegExp('[0-'+i+']');

					this.keyRep = keyRep;
					// ignore keys array creation for iphone or the normal ones
					this.ignoreKeys = [];
					$.each(keyRep,function(key){
						self.ignoreKeys.push( parseInt(key) );
					});

					this.hasInit = true;
				}
			},

			set: function(el,options){

				var maskObj = this,
					$el = $(el),
					mlStr = 'maxLength';

				options = options || {};
				this.init();

				return $el.each(function(){

					if(options.attr) maskObj.options.attr = options.attr;

					var $this = $(this),
						o = $.extend({}, maskObj.options),
						attrValue = $this.attr(o.attr),
						tmpMask = '';

					// then we look for the 'attr' option
					tmpMask = (typeof options == 'string')? options: (attrValue != '')? attrValue: null;
					if(tmpMask) o.mask = tmpMask;

					// then we see if it's a defined mask
					if(maskObj.masks[tmpMask]) o = $.extend(o, maskObj.masks[tmpMask]);

					// then it looks if the options is an object, if it is we will overwrite the actual options
					if(typeof options == 'object' && options.constructor != Array) o = $.extend(o, options);

					//then we look for some metadata on the input
					if($.metadata) o = $.extend(o, $this.metadata());

					if(o.mask != null){

						if($this.data('mask')) maskObj.unset($this);

						var defaultValue = o.defaultValue,
							reverse = (o.type=='reverse'),
							fixedCharsRegG = new RegExp(o.fixedChars, 'g');

						if(o.maxLength == -1) o.maxLength = $this.attr(mlStr);

						o = $.extend({}, o,{
							fixedCharsReg: new RegExp(o.fixedChars),
							fixedCharsRegG: fixedCharsRegG,
							maskArray: o.mask.split(''),
							maskNonFixedCharsArray: o.mask.replace(fixedCharsRegG, '').split('')
						});

						//setSize option (this is not removed from the input (while removing the mask) since this would be kind of funky)
						if((o.type=='fixed' || reverse) && o.setSize && !$this.attr('size')) $this.attr('size', o.mask.length);

						//sets text-align right for reverse masks
						if(reverse && o.textAlign) $this.css('text-align', 'right');

						if(this.value!='' || defaultValue!=''){
							// apply mask to the current value of the input or to the default value
							var val = maskObj.string((this.value!='')? this.value: defaultValue, o);
							//setting defaultValue fixes the reset button from the form
							this.defaultValue = val;
							$this.val(val);
						}

						// compatibility patch for infinite mask, that is now repeat
						if(o.type=='infinite') o.type = 'repeat';

						$this.data('mask', o);

						// removes the maxLength attribute (it will be set again if you use the unset method)
						$this.removeAttr(mlStr);

						// setting the input events
						$this.bind('keydown.mask', {func:maskObj._onKeyDown, thisObj:maskObj}, maskObj._onMask)
							.bind('keypress.mask', {func:maskObj._onKeyPress, thisObj:maskObj}, maskObj._onMask)
							.bind('keyup.mask', {func:maskObj._onKeyUp, thisObj:maskObj}, maskObj._onMask)
							.bind('paste.mask', {func:maskObj._onPaste, thisObj:maskObj}, maskObj._onMask)
							.bind('focus.mask', maskObj._onFocus)
							.bind('blur.mask', maskObj._onBlur)
							.bind('change.mask', maskObj._onChange);
					}
				});
			},

			//unsets the mask from el
			unset : function(el){
				var $el = $(el);

				return $el.each(function(){
					var $this = $(this);
					if($this.data('mask')){
						var maxLength = $this.data('mask').maxLength;
						if(maxLength != -1) $this.attr('maxLength', maxLength);
						$this.unbind('.mask')
							.removeData('mask');
					}
				});
			},

			//masks a string
			string : function(str, options){
				this.init();
				var o={};
				if(typeof str != 'string') str = String(str);
				switch(typeof options){
					case 'string':
						// then we see if it's a defined mask
						if(this.masks[options]) o = $.extend(o, this.masks[options]);
						else o.mask = options;
						break;
					case 'object':
						o = options;
				}
				if(!o.fixedChars) o.fixedChars = this.options.fixedChars;

				var fixedCharsReg = new RegExp(o.fixedChars),
					fixedCharsRegG = new RegExp(o.fixedChars, 'g');

				// insert signal if any
				if( (o.type=='reverse') && o.defaultValue ){
					if( typeof this.signals[o.defaultValue.charAt(0)] != 'undefined' ){
						var maybeASignal = str.charAt(0);
						o.signal = (typeof this.signals[maybeASignal] != 'undefined') ? this.signals[maybeASignal] : this.signals[o.defaultValue.charAt(0)];
						o.defaultValue = o.defaultValue.substring(1);
					}
				}

				return this.__maskArray(str.split(''),
							o.mask.replace(fixedCharsRegG, '').split(''),
							o.mask.split(''),
							o.type,
							o.maxLength,
							o.defaultValue,
							fixedCharsReg,
							o.signal);
			},

			// all the 3 events below are here just to fix the change event on reversed masks.
			// It isn't fired in cases that the keypress event returns false (needed).
			_onFocus: function(e){
				var $this = $(this), dataObj = $this.data('mask');
				dataObj.inputFocusValue = $this.val();
				dataObj.changed = false;
				if(dataObj.selectCharsOnFocus) $this.select();
			},

			_onBlur: function(e){
				var $this = $(this), dataObj = $this.data('mask');
				if(dataObj.inputFocusValue != $this.val() && !dataObj.changed)
					$this.trigger('change');
			},

			_onChange: function(e){
				$(this).data('mask').changed = true;
			},

			_onMask : function(e){
				var thisObj = e.data.thisObj,
					o = {};
				o._this = e.target;
				o.$this = $(o._this);
				// if the input is readonly it does nothing
				if(o.$this.attr('readonly')) return true;
				o.data = o.$this.data('mask');
				o[o.data.type] = true;
				o.value = o.$this.val();
				o.nKey = thisObj.__getKeyNumber(e);
				o.range = thisObj.__getRange(o._this);
				o.valueArray = o.value.split('');
				return e.data.func.call(thisObj, e, o);
			},

			_onKeyDown : function(e,o){
				// lets say keypress at desktop == keydown at iphone (theres no keypress at iphone)
				this.ignore = $.inArray(o.nKey, this.ignoreKeys) > -1 || e.ctrlKey || e.metaKey || e.altKey;
				if(this.ignore){
					var rep = this.keyRep[o.nKey];
					o.data.onValid.call(o._this, rep? rep: '', o.nKey);
				}
				return isIphone ? this._keyPress(e, o) : true;
			},

			_onKeyUp : function(e, o){
				//9=TAB_KEY 16=SHIFT_KEY
				//this is a little bug, when you go to an input with tab key
				//it would remove the range selected by default, and that's not a desired behavior
				if(o.nKey==9 || o.nKey==16) return true;

				if(o.data.type=='repeat'){
					this.__autoTab(o);
					return true;
				}

				return this._onPaste(e, o);
			},

			_onPaste : function(e,o){
				// changes the signal at the data obj from the input
				if(o.reverse) this.__changeSignal(e.type, o);

				var $thisVal = this.__maskArray(
					o.valueArray,
					o.data.maskNonFixedCharsArray,
					o.data.maskArray,
					o.data.type,
					o.data.maxLength,
					o.data.defaultValue,
					o.data.fixedCharsReg,
					o.data.signal
				);

				o.$this.val( $thisVal );
				// this makes the caret stay at first position when
				// the user removes all values in an input and the plugin adds the default value to it (if it haves one).
				if( !o.reverse && o.data.defaultValue.length && (o.range.start==o.range.end) )
					this.__setRange(o._this, o.range.start, o.range.end);

				//fix so ie's and safari's caret won't go to the end of the input value.
				if( ($.browser.msie || $.browser.safari) && !o.reverse)
					this.__setRange(o._this,o.range.start,o.range.end);

				if(this.ignore) return true;

				this.__autoTab(o);
				return true;
			},

			_onKeyPress: function(e, o){

				if(this.ignore) return true;

				// changes the signal at the data obj from the input
				if(o.reverse) this.__changeSignal(e.type, o);

				var c = String.fromCharCode(o.nKey),
					rangeStart = o.range.start,
					rawValue = o.value,
					maskArray = o.data.maskArray;

				if(o.reverse){
					 	// the input value from the range start to the value start
					var valueStart = rawValue.substr(0, rangeStart),
						// the input value from the range end to the value end
						valueEnd = rawValue.substr(o.range.end, rawValue.length);

					rawValue = valueStart+c+valueEnd;
					//necessary, if not decremented you will be able to input just the mask.length-1 if signal!=''
					//ex: mask:99,999.999.999 you will be able to input 99,999.999.99
					if(o.data.signal && (rangeStart-o.data.signal.length > 0)) rangeStart-=o.data.signal.length;
				}

				var valueArray = rawValue.replace(o.data.fixedCharsRegG, '').split(''),
					// searches for fixed chars begining from the range start position, till it finds a non fixed
					extraPos = this.__extraPositionsTill(rangeStart, maskArray, o.data.fixedCharsReg);

				o.rsEp = rangeStart+extraPos;

				if(o.repeat) o.rsEp = 0;

				// if the rule for this character doesnt exist (value.length is bigger than mask.length)
				// added a verification for maxLength in the case of the repeat type mask
				if( !this.rules[maskArray[o.rsEp]] || (o.data.maxLength != -1 && valueArray.length >= o.data.maxLength && o.repeat)){
					// auto focus on the next input of the current form
					o.data.onOverflow.call(o._this, c, o.nKey);
					return false;
				}

				// if the new character is not obeying the law... :P
				else if( !this.rules[maskArray[o.rsEp]].test( c ) ){
					o.data.onInvalid.call(o._this, c, o.nKey);
					return false;
				}

				else o.data.onValid.call(o._this, c, o.nKey);

				var $thisVal = this.__maskArray(
					valueArray,
					o.data.maskNonFixedCharsArray,
					maskArray,
					o.data.type,
					o.data.maxLength,
					o.data.defaultValue,
					o.data.fixedCharsReg,
					o.data.signal,
					extraPos
				);

				o.$this.val( $thisVal );

				return (o.reverse)? this._keyPressReverse(e, o): (o.fixed)? this._keyPressFixed(e, o): true;
			},

			_keyPressFixed: function(e, o){

				if(o.range.start==o.range.end){
					// the 0 thing is cause theres a particular behavior i wasnt liking when you put a default
					// value on a fixed mask and you select the value from the input the range would go to the
					// end of the string when you enter a char. with this it will overwrite the first char wich is a better behavior.
					// opera fix, cant have range value bigger than value length, i think it loops thought the input value...
					if((o.rsEp==0 && o.value.length==0) || o.rsEp < o.value.length)
						this.__setRange(o._this, o.rsEp, o.rsEp+1);
				}
				else
					this.__setRange(o._this, o.range.start, o.range.end);

				return true;
			},

			_keyPressReverse: function(e, o){
				//fix for ie
				//this bug was pointed by Pedro Martins
				//it fixes a strange behavior that ie was having after a char was inputted in a text input that
				//had its content selected by any range
				if($.browser.msie && ((o.range.start==0 && o.range.end==0) || o.range.start != o.range.end ))
					this.__setRange(o._this, o.value.length);
				return false;
			},

			__autoTab: function(o){
				if(o.data.autoTab
					&& (
						(
							o.$this.val().length >= o.data.maskArray.length
							&& !o.repeat
						) || (
							o.data.maxLength != -1
							&& o.valueArray.length >= o.data.maxLength
							&& o.repeat
						)
					)
				){
					var nextEl = this.__getNextInput(o._this, o.data.autoTab);
					if(nextEl){
						o.$this.trigger('blur');
						nextEl.focus().select();
					}
				}
			},

			// changes the signal at the data obj from the input
			__changeSignal : function(eventType,o){
				if(o.data.signal!==false){
					var inputChar = (eventType=='paste')? o.value.charAt(0): String.fromCharCode(o.nKey);
					if( this.signals && (typeof this.signals[inputChar] != 'undefined') ){
						o.data.signal = this.signals[inputChar];
					}
				}
			},

			__getKeyNumber : function(e){
				return (e.charCode||e.keyCode||e.which);
			},

			// this function is totaly specific to be used with this plugin, youll never need it
			// it gets the array representing an unmasked string and masks it depending on the type of the mask
			__maskArray : function(valueArray, maskNonFixedCharsArray, maskArray, type, maxlength, defaultValue, fixedCharsReg, signal, extraPos){
				if(type == 'reverse') valueArray.reverse();
				valueArray = this.__removeInvalidChars(valueArray, maskNonFixedCharsArray, type=='repeat'||type=='infinite');
				if(defaultValue) valueArray = this.__applyDefaultValue.call(valueArray, defaultValue);
				valueArray = this.__applyMask(valueArray, maskArray, extraPos, fixedCharsReg);
				switch(type){
					case 'reverse':
						valueArray.reverse();
						return (signal || '')+valueArray.join('').substring(valueArray.length-maskArray.length);
					case 'infinite': case 'repeat':
						var joinedValue = valueArray.join('');
						return (maxlength != -1 && valueArray.length >= maxlength)? joinedValue.substring(0, maxlength): joinedValue;
					default:
						return valueArray.join('').substring(0, maskArray.length);
				}
				return '';
			},

			// applyes the default value to the result string
			__applyDefaultValue : function(defaultValue){
				var defLen = defaultValue.length,thisLen = this.length,i;
				//removes the leading chars
				for(i=thisLen-1;i>=0;i--){
					if(this[i]==defaultValue.charAt(0)) this.pop();
					else break;
				}
				// apply the default value
				for(i=0;i<defLen;i++) if(!this[i])
					this[i] = defaultValue.charAt(i);

				return this;
			},

			// Removes values that doesnt match the mask from the valueArray
			// Returns the array without the invalid chars.
			__removeInvalidChars : function(valueArray, maskNonFixedCharsArray, repeatType){
				// removes invalid chars
				for(var i=0, y=0; i<valueArray.length; i++ ){
					if( maskNonFixedCharsArray[y] &&
						this.rules[maskNonFixedCharsArray[y]] &&
						!this.rules[maskNonFixedCharsArray[y]].test(valueArray[i]) ){
							valueArray.splice(i,1);
							if(!repeatType) y--;
							i--;
					}
					if(!repeatType) y++;
				}
				return valueArray;
			},

			// Apply the current input mask to the valueArray and returns it.
			__applyMask : function(valueArray, maskArray, plus, fixedCharsReg){
				if( typeof plus == 'undefined' ) plus = 0;
				// apply the current mask to the array of chars
				for(var i=0; i<valueArray.length+plus; i++ ){
					if( maskArray[i] && fixedCharsReg.test(maskArray[i]) )
						valueArray.splice(i, 0, maskArray[i]);
				}
				return valueArray;
			},

			// searches for fixed chars begining from the range start position, till it finds a non fixed
			__extraPositionsTill : function(rangeStart, maskArray, fixedCharsReg){
				var extraPos = 0;
				while(fixedCharsReg.test(maskArray[rangeStart++])){
					extraPos++;
				}
				return extraPos;
			},

			__getNextInput: function(input, selector){
				var formEls = input.form.elements,
					initialInputIndex = $.inArray(input, formEls) + 1,
					$input = null,
					i;
				// look for next input on the form of the pased input
				for(i = initialInputIndex; i < formEls.length; i++){
					$input = $(formEls[i]);
					if(this.__isNextInput($input, selector))
						return $input;
				}

				var forms = document.forms,
					initialFormIndex = $.inArray(input.form, forms) + 1,
					y, tmpFormEls = null;
				// look for the next forms for the next input
				for(y = initialFormIndex; y < forms.length; y++){
					tmpFormEls = forms[y].elements;
					for(i = 0; i < tmpFormEls.length; i++){
						$input = $(tmpFormEls[i]);
						if(this.__isNextInput($input, selector))
							return $input;
					}
				}
				return null;
			},

			__isNextInput: function($formEl, selector){
				var formEl = $formEl.get(0);
				return formEl
					&& (formEl.offsetWidth > 0 || formEl.offsetHeight > 0)
					&& formEl.nodeName != 'FIELDSET'
					&& (selector === true || (typeof selector == 'string' && $formEl.is(selector)));
			},

			// http://www.bazon.net/mishoo/articles.epl?art_id=1292
			__setRange : function(input, start, end) {
				if(typeof end == 'undefined') end = start;
				if (input.setSelectionRange){
					input.setSelectionRange(start, end);
				}
				else{
					// assumed IE
					var range = input.createTextRange();
					range.collapse();
					range.moveStart('character', start);
					range.moveEnd('character', end - start);
					range.select();
				}
			},

			// adaptation from http://digitarald.de/project/autocompleter/
			__getRange : function(input){
				if (!$.browser.msie) return {start: input.selectionStart, end: input.selectionEnd};
				var pos = {start: 0, end: 0},
					range = document.selection.createRange();
				pos.start = 0 - range.duplicate().moveStart('character', -100000);
				pos.end = pos.start + range.text.length;
				return pos;
			},

			//deprecated
			unmaskedVal : function(el){
				return $(el).val().replace($.mask.fixedCharsRegG, '');
			}

		}
	});

	$.fn.extend({
		setMask : function(options){
			return $.mask.set(this, options);
		},
		unsetMask : function(){
			return $.mask.unset(this);
		},
		//deprecated
		unmaskedVal : function(){
			return $.mask.unmaskedVal(this[0]);
		}
	});
})(jQuery);

$(function() { $('[rel=meio_mask]').setMask();});
</script><div class="rf_welcome"></div><form method="post" action="create_account.php" id="rff_dbforms_flyout_contact"><div class="rf_form"><div id="rfi_your_name" class="rf_fi rfc_text rf_cr"><div class="rf_name"> <span class="rf_req">*</span>Your Name</div><div class="rf_value"><input type="text" name="your_name" id="your_name" value="" /></div></div>
<div id="rfi_your_email" class="rf_fi rfc_email rf_cr"><div class="rf_name"> <span class="rf_req">*</span>Your Email</div><div class="rf_value"><input type="email" name="your_email" id="your_email" value="" /></div></div>
<div id="rfi_your_phone" class="rf_fi rfc_phone rf_cn"><div class="rf_name">Phone (Optional)</div><div class="rf_value"><input type="text" rel="meio_mask" alt="phone-us" name="your_phone" id="your_phone" value="" /></div></div>
<div id="rfi_your_question" class="rf_fi rfc_textarea rf_cr"><div class="rf_name"> <span class="rf_req">*</span>Your Question</div><div class="rf_value"><textarea cols="40" rows="4" name="your_question" id="your_question"></textarea></div></div>
<div id="rfi_&nbsp;" class="rf_fi rfc_captcha rf_cn"><div class="rf_name"></div><div class="rf_value">
		<div id="flyoutRecaptcha" style="transform:scale(0.85);transform-origin:0 0"></div>
</div></div>
<div class="rf_fbu"><input name="dbforms_flyout_contact_bu_flyout_contactSubmit" id="flyout_contactSubmit" type="submit" value="Submit" /></div></div></form>   	</div>
	<a style="cursor: pointer;" href="javascript:void(null)" id="flyout_contactStart">&nbsp;</a>
</div>
<script type="text/javascript">
<!--
	var submitURL = 'https://www.rosedaleproducts.com/contact_ajax.php?fromForm=flyout_contact';
	
	function isEmailValid(email){
		var e = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
		return e.test(email);
	}
	
	function sendForm() {
		$("#fc_messageOK, #fc_messageERROR").hide();
		$("#flyout_contact .required").removeClass("required");
		if($("#your_name").val() == "") {
			$("#your_name, #rfi_your_name .rf_req").addClass("required");
			window.scroll(0,0);
			return false;
		}
		if($("#your_email").val() == "" || !isEmailValid($("#your_email").val())) {
			$("#your_email, #rfi_your_email .rf_req").addClass("required");
			window.scroll(0,0);
			return false;
		}
		if($("#your_phone").val() == "" && 1 == 2) {
			$("#your_phone, #rfi_your_phone .rf_req").addClass("required");
			window.scroll(0,0);
			return false;
		}
		if($("#your_question").val() == "") {
			$("#your_question, #rfi_your_question .rf_req").addClass("required");
			window.scroll(0,0);
			return false;
		}
		if($("#your_a_human").val() == "") {
			$("#your_email, #rfi_your_a_human .rf_req").addClass("required");
			window.scroll(0,0);
			return false;
		}
		
		$("#flyout_contactSubmit").val("Please Wait...");
		
		$.post(submitURL, $("#rff_dbforms_flyout_contact").serialize(), function(data) {
			// alert(data);
			if(data.result == 'success') {
				$("#flyout_contactSubmit").val("Submit");
				$("#your_name, #your_email, #your_phone, #your_question").val('');
//				$("#rfi_your_a_human .rf_name .fc-cproblem").html(data.fc_cproblem);
				$(".rf_form").slideUp(function(){	 
					$("#fc_messageOK").fadeIn();
					$("#flyout_contact").click(function() {
						$("#fc_messageOK").fadeOut(function() {
							$(".rf_form").slideDown();
						});
					});					 
				});
			} else {
				$("#fc_messageERROR").append('<br />' + data.msg).slideDown();
				$("#flyout_contactSubmit").val("Submit");
			}
		}, "json");
	}

	$(document).ready(function() {
		$("#flyout_contactBg").fadeOut();
		$("#flyout_contact").animate({
			left: "-310px"
		},0);
		
		$("#flyout_contactStart").css({'cursor':'pointer'}).click(function(){
			// alert($(this).offset().left);
			// 20
			if($(this).offset().left > 139) {
				// hide
				$("#flyout_contactBg").fadeOut();
				$("#flyout_contact").animate({
					left: "-310px"
				}, 500, "linear", function() {
					$("#flyout_contact").css("z-index", "initial");
				} );
				$("#flyout_contactStart").animate({
					right: "-32px"
				}, 500 );
			} else {
				// show
				$("#flyout_contact").css("z-index", "2001");
				$("#flyout_contactBg").fadeIn();
				$("#flyout_contactStart").animate({
					right: "-32px"
				}, 500);
				$("#flyout_contact").animate({
					left: "0px"
				}, 500 );
			}
		});
		
		$("#flyout_contact :input").focus(function() {
			$("#fc_messageERROR").slideUp();
		});

		$("#flyout_contactSubmit").click(function(event) {
			event.preventDefault();
			sendForm();
			return false;
		});
		
		$("#flyout_contactBg").click(function() {
			$("#flyout_contactStart").trigger('click');
		});        
		
	});
//-->
</script>
	<!-- End Flyout -->

	<div id="bodyWrapper" class="body-wrapper" style="position: relative;">


<div id="header" class="header-block noprint">
	<div id="header_top">
		<div class="container">
			<div class="row">
				<div class="header-phone col-xs-5 col-lg-2">
					<ul>
						<li id="head_phone" class="orange">800.821.5373</li>
					</ul>
				</div>
				<div id="upperNavAndHeaderShortcutsContainer" class="visible-lg col-lg-7">
					<div class="header-top-cell upper_nav">
					<span class="upper_nav">
<ul class="nav_upper nav_0">
    <li class="nav_0  first">
      <a class="nav_0  first" href="rosedale-videos" >News</a>
    </li>
    <li class="nav_0 ">
      <a class="nav_0 " href="find-distributors-i-20.html" >Find Distributors</a>
    </li>
    <li class="nav_0 ">
      <a class="nav_0 " href="contact" >Contact</a>
    </li>
    <li class="nav_0 ">
      <a class="nav_0 " href="request-quote" >Request Quote</a>
    </li>
    <li class="nav_0 ">
      <a class="nav_0 " href="request-catalog-i-23.html" >Request Catalog</a>
      <ul class="nav_1">
        <li class="nav_1  first">
          <a class="nav_1  first" href="request-catalog-i-23.html" >Request a Printed Catalog</a>
        </li>
      </ul>
    </li>
    <li class="nav_0  last">
      <a class="nav_0  last" href="literature" >Catalog Download</a>
    </li>
  </ul>
</span>
					</div>
					
		<div id="headerShortcuts">
			<ul class="header-shortcuts">
    <li class="nav_0  my-account first">
      <a class="nav_0  my-account first" href="account.php" >Online Store</a>
  <ul class="nav_1">
    <li class="nav_1  first">
      <a class="nav_1  first" href="account.php" >My Account</a>
    </li>
    <li class="nav_1  first">
      <a class="nav_1  first" href="rfq_cart.php" >View Quote</a>
    </li>
    <li class="nav_1  first">
      <a class="nav_1  first" href="checkout_address.php?order_type=rfq" >Submit Quote</a>
    </li>
    <li class="nav_1  first">
      <a class="nav_1  first" href="shopping_cart.php" >View Cart</a>
    </li>
    <li class="nav_1  first">
      <a class="nav_1  first" href="checkout_address.php" >Checkout</a>
    </li>
  </ul>
    </li>
  </ul>

</div>

				</div>
				<div class="col-xs-7 col-lg-3" id="gtranslate">			<div id="google_translate_element"></div>
			<script type="text/javascript">
				function googleTranslateElementInit() {
				  new google.translate.TranslateElement({
				  	pageLanguage: 'en',
				  	layout: google.translate.TranslateElement.InlineLayout.SIMPLE
				  }, 'google_translate_element');
				}
			</script>
			<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>
				<div class="clearFloats"></div>
			</div>
		</div>
	</div>

	<div id="header_main">
		<div class="container">
			<div class="row">
				<div id="storeLogo" class="col-xs-9 col-lg-4 header-main-cell"><a href="index.php"><img src="images/site/head_logo.png"  class="img-responsive inlineImg" border="0" alt="Rosedale Products" title="Rosedale Products"></a></div>
				<div id="responsiveMenuButton" class="col-xs-3 hidden-lg"><a href="home-i-1.html#responsive_nav"><img src="images/icons/menu_icon_smaller.png"  class="img-responsive" border="0" alt="Responsive Menu Button" title="Responsive Menu Button"></a></div>
				<div id="top_nav" class="col-lg-8 visible-lg top_nav_container header-main-cell">
				<div class="top_nav">
<ul id="nav_top" class="nav_0 top-nav">
    <li class="nav_0  first home">
      <a class="nav_0  first home" href="home-i-1.html" >Home</a>
    </li>
    <li class="nav_0  products">
      <a class="nav_0  products" href="products" >Products</a>
      <ul class="nav_1">
        <li class="nav_1  first housings">
          <a class="nav_1  first housings" href="housings-c-46_47.html" >Housings</a>
          <ul class="nav_2">
            <li class="nav_2  first single bag or basket housings">
              <a class="nav_2  first single bag or basket housings" href="products/housings/single-bag-basket-housings" >Single Bag or Basket Housings</a>
            </li>
            <li class="nav_2  multi bag or basket housings / duplex">
              <a class="nav_2  multi bag or basket housings / duplex" href="products/housings/multi-bag-basket-housings" >Multi Bag or Basket Housings / Duplex</a>
            </li>
            <li class="nav_2  cartridge housings">
              <a class="nav_2  cartridge housings" href="products/housings/cartridge-housings" >Cartridge Housings</a>
            </li>
            <li class="nav_2  basket strainer">
              <a class="nav_2  basket strainer" href="housings/basket-strainer-c-46_47_156.html" >Basket Strainer</a>
            </li>
            <li class="nav_2  last application specific housings">
              <a class="nav_2  last application specific housings" href="products/housings/application-specific" >Application Specific Housings</a>
            </li>
          </ul>
        </li>
        <li class="nav_1  filtration system housings">
          <a class="nav_1  filtration system housings" href="products/filtration-housings" >Filtration System Housings</a>
          <ul class="nav_2">
            <li class="nav_2  first duplex">
              <a class="nav_2  first duplex" href="filtration-system-housings/duplex-c-46_53_139.html" >Duplex</a>
            </li>
            <li class="nav_2  backwashing automatic system">
              <a class="nav_2  backwashing automatic system" href="filtration-system-housings/backwashing-automatic-system-c-46_53_54.html" >Backwashing Automatic System</a>
            </li>
            <li class="nav_2  backwashing manual system">
              <a class="nav_2  backwashing manual system" href="filtration-system-housings/backwashing-manual-system-c-46_53_55.html" >Backwashing Manual System</a>
            </li>
            <li class="nav_2  separator">
              <a class="nav_2  separator" href="filtration-system-housings/separator-c-46_53_56.html" >Separator</a>
            </li>
            <li class="nav_2  indicating filter">
              <a class="nav_2  indicating filter" href="filtration-system-housings/indicating-filter-c-46_53_57.html" >Indicating Filter</a>
            </li>
            <li class="nav_2  convertible">
              <a class="nav_2  convertible" href="filtration-system-housings/convertible-c-46_53_58.html" >Convertible</a>
            </li>
            <li class="nav_2  portable cart">
              <a class="nav_2  portable cart" href="filtration-system-housings/portable-cart-c-46_53_59.html" >Portable Cart</a>
            </li>
            <li class="nav_2  portable coolant cart / coolant filtration">
              <a class="nav_2  portable coolant cart / coolant filtration" href="filtration-system-housings/portable-coolant-cart-coolant-filtration-c-46_53_60.html" >Portable Coolant Cart / Coolant Filtration</a>
            </li>
            <li class="nav_2  sorbent containment">
              <a class="nav_2  sorbent containment" href="filtration-system-housings/sorbent-containment-c-46_53_61.html" >Sorbent Containment</a>
            </li>
            <li class="nav_2  last solids recovery">
              <a class="nav_2  last solids recovery" href="filtration-system-housings/solids-recovery-c-46_53_62.html" >Solids Recovery</a>
            </li>
          </ul>
        </li>
        <li class="nav_1  filter bags">
          <a class="nav_1  filter bags" href="products/filter-bags" >Filter Bags</a>
          <ul class="nav_2">
            <li class="nav_2  first standard bags">
              <a class="nav_2  first standard bags" href="products/filter-bags/standard-bags" >Standard Bags</a>
            </li>
            <li class="nav_2  high efficiency filter bags">
              <a class="nav_2  high efficiency filter bags" href="products/filter-bags/high-efficiency-bags" >High Efficiency Filter Bags</a>
            </li>
            <li class="nav_2  beta bags">
              <a class="nav_2  beta bags" href="products/filter-bags/beta-bags" >Beta Bags</a>
            </li>
            <li class="nav_2  all-polypropylene bags">
              <a class="nav_2  all-polypropylene bags" href="products/filter-bags/polypropylene-bags" >All-Polypropylene Bags</a>
            </li>
            <li class="nav_2  graded density bags">
              <a class="nav_2  graded density bags" href="products/filter-bags/graded-density" >Graded Density Bags</a>
            </li>
            <li class="nav_2  giardia removal cartridge">
              <a class="nav_2  giardia removal cartridge" href="products/filter-bags/giardia-removal" >Giardia Removal Cartridge</a>
            </li>
            <li class="nav_2  last depth filtration bags">
              <a class="nav_2  last depth filtration bags" href="products/filter-bags/depth-filtration" >Depth Filtration Bags</a>
            </li>
          </ul>
        </li>
        <li class="nav_1  cartridges">
          <a class="nav_1  cartridges" href="products/filter-cartridges" >Cartridges</a>
          <ul class="nav_2">
            <li class="nav_2  first bag sized">
              <a class="nav_2  first bag sized" href="cartridges/bag-sized-c-46_72_107.html" >Bag Sized</a>
            </li>
            <li class="nav_2  platinum cartridges">
              <a class="nav_2  platinum cartridges" href="https://www.rosedaleproducts.com/products/filter-cartridges/bag-sized/platinum" >Platinum Cartridges</a>
            </li>
            <li class="nav_2  stainless steel cartridges">
              <a class="nav_2  stainless steel cartridges" href="https://www.rosedaleproducts.com/products/filter-cartridges/bag-sized/stainless-steel" >Stainless Steel Cartridges</a>
            </li>
            <li class="nav_2  absolute pleated">
              <a class="nav_2  absolute pleated" href="https://www.rosedaleproducts.com/products/filter-cartridges/bag-sized/absolute-pleated" >Absolute Pleated</a>
            </li>
            <li class="nav_2  oil/water separation">
              <a class="nav_2  oil/water separation" href="products/filter-cartridges/oil-water-separation" >Oil/Water Separation</a>
            </li>
            <li class="nav_2  last wound cartridge elements">
              <a class="nav_2  last wound cartridge elements" href="products/filter-cartridges/bag-sized/wound-cartridge" >Wound Cartridge Elements</a>
            </li>
          </ul>
        </li>
        <li class="nav_1  oil/water separation">
          <a class="nav_1  oil/water separation" href="products/oilwater-separation-c-46_108.html" >Oil/Water Separation</a>
        </li>
        <li class="nav_1  bag sized">
          <a class="nav_1  bag sized" href="cartridges/bag-sized-c-46_72_107.html" >Bag Sized</a>
          <ul class="nav_2">
            <li class="nav_2  first bag sized cartridge">
              <a class="nav_2  first bag sized cartridge" href="bag-sized/bag-sized-cartridge-c-46_74_136.html" >Bag Sized Cartridge</a>
            </li>
            <li class="nav_2  bag sized platinum cartridge">
              <a class="nav_2  bag sized platinum cartridge" href="bag-sized/bag-sized-platinum-cartridge-c-46_74_137.html" >Bag Sized Platinum Cartridge</a>
            </li>
            <li class="nav_2  bag sized surfacemaxx">
              <a class="nav_2  bag sized surfacemaxx" href="bag-sized/bag-sized-surfacemaxx-c-46_74_138.html" >Bag Sized SurfaceMaxx</a>
            </li>
            <li class="nav_2  bag sized disposable">
              <a class="nav_2  bag sized disposable" href="products/filter-cartridges/bag-sized/disposable" >Bag Sized Disposable</a>
            </li>
            <li class="nav_2  last bag/cartridge converter">
              <a class="nav_2  last bag/cartridge converter" href="bag-sized/bagcartridge-converter-c-46_74_80.html" >Bag/Cartridge Converter</a>
            </li>
          </ul>
        </li>
        <li class="nav_1  filtration systems">
          <a class="nav_1  filtration systems" href="products/filtration-systems" >Filtration Systems</a>
          <ul class="nav_2">
            <li class="nav_2  first backwashing automatic system">
              <a class="nav_2  first backwashing automatic system" href="filtration-systems/backwashing-automatic-system-c-46_81_109.html" >Backwashing Automatic System</a>
            </li>
            <li class="nav_2  backwashing manual system">
              <a class="nav_2  backwashing manual system" href="filtration-systems/backwashing-manual-system-c-46_81_110.html" >Backwashing Manual System</a>
            </li>
            <li class="nav_2  separator">
              <a class="nav_2  separator" href="filtration-systems/separator-c-46_81_111.html" >Separator</a>
            </li>
            <li class="nav_2  ethanol filtration systems">
              <a class="nav_2  ethanol filtration systems" href="products/filtration-systems/ethanol-filtration" >Ethanol Filtration Systems</a>
            </li>
            <li class="nav_2  last multi-plex filters">
              <a class="nav_2  last multi-plex filters" href="products/filtration-systems/multi-bag" >Multi-Plex Filters</a>
            </li>
          </ul>
        </li>
        <li class="nav_1  baskets">
          <a class="nav_1  baskets" href="products/basket-filters" >Baskets</a>
          <ul class="nav_2">
            <li class="nav_2  first basket strainer">
              <a class="nav_2  first basket strainer" href="products/basket-filter/basket-strainer" >Basket Strainer</a>
            </li>
            <li class="nav_2  last replacement baskets">
              <a class="nav_2  last replacement baskets" href="baskets/replacement-baskets-c-46_90_183.html" >Replacement Baskets</a>
            </li>
          </ul>
        </li>
        <li class="nav_1  mesh lined baskets">
          <a class="nav_1  mesh lined baskets" href="products/basket-filter/mesh-lined-baskets" >Mesh Lined Baskets</a>
        </li>
        <li class="nav_1  accessories">
          <a class="nav_1  accessories" href="products/filtration-accessories" >Accessories</a>
          <ul class="nav_2">
            <li class="nav_2  first heated jacketing for resins">
              <a class="nav_2  first heated jacketing for resins" href="accessories/heated-jacketing-for-resins-c-46_93_94.html" >Heated Jacketing for Resins</a>
            </li>
            <li class="nav_2  bag hold down assemblies">
              <a class="nav_2  bag hold down assemblies" href="products/filtration-accessories/bag-hold-down" >Bag Hold Down Assemblies</a>
            </li>
            <li class="nav_2  internal coatings">
              <a class="nav_2  internal coatings" href="accessories/internal-coatings-c-46_93_96.html" >Internal Coatings</a>
            </li>
            <li class="nav_2  inner baskets and bags">
              <a class="nav_2  inner baskets and bags" href="products/filtration-accessories/inner-baskets-bags" >Inner Baskets and Bags</a>
            </li>
            <li class="nav_2  differential pressure indicators">
              <a class="nav_2  differential pressure indicators" href="accessories/differential-pressure-indicators-c-46_93_98.html" >Differential Pressure Indicators</a>
            </li>
            <li class="nav_2  bag restrainer">
              <a class="nav_2  bag restrainer" href="products/filtration-accessories/bag-restrainer" >Bag Restrainer</a>
            </li>
            <li class="nav_2  last liquid displacers">
              <a class="nav_2  last liquid displacers" href="products/filtration-accessories/liquid-displacers" >Liquid Displacers</a>
            </li>
          </ul>
        </li>
        <li class="nav_1  custom manufacturing solutions">
          <a class="nav_1  custom manufacturing solutions" href="products/custom-filter-manufacturing" >Custom Manufacturing Solutions</a>
        </li>
        <li class="nav_1  last overstock sales">
          <a class="nav_1  last overstock sales" href="overstock-sales" >Overstock Sales</a>
        </li>
      </ul>
    </li>
    <li class="nav_0  replacement parts">
      <a class="nav_0  replacement parts" href="replacement-parts-c-200.html" >Replacement Parts</a>
      <ul class="nav_1">
        <li class="nav_1  first model 4 replacement parts">
          <a class="nav_1  first model 4 replacement parts" href="replacement-parts/model-replacement-parts-c-202.html" >Model 4 Replacement Parts</a>
        </li>
        <li class="nav_1  model 6 replacement parts">
          <a class="nav_1  model 6 replacement parts" href="replacement-parts/model-replacement-parts-c-205.html" >Model 6 Replacement Parts</a>
        </li>
        <li class="nav_1  model 8 replacement parts 150 & 300 psi">
          <a class="nav_1  model 8 replacement parts 150 & 300 psi" href="replacement-parts/model-replacement-parts-150-300-psi-c-201.html" >Model 8 Replacement Parts 150 & 300 PSI</a>
          <ul class="nav_2">
            <li class="nav_2  first replacement baskets">
              <a class="nav_2  first replacement baskets" href="model-replacement-parts-150-300-psi/replacement-baskets-c-200_201_218.html" >Replacement Baskets</a>
            </li>
            <li class="nav_2  last replacement filter bags">
              <a class="nav_2  last replacement filter bags" href="model-replacement-parts-150-300-psi/replacement-filter-bags-c-200_201_220.html" >Replacement Filter Bags</a>
            </li>
          </ul>
        </li>
        <li class="nav_1  model lco8 replacement parts">
          <a class="nav_1  model lco8 replacement parts" href="replacement-parts/model-lco8-replacement-parts-c-215.html" >Model LCO8 Replacement Parts</a>
        </li>
        <li class="nav_1  multi-bag replacement parts">
          <a class="nav_1  multi-bag replacement parts" href="replacement-parts/multi-bag-replacement-parts-c-206.html" >Multi-Bag Replacement Parts</a>
        </li>
        <li class="nav_1  replacement beta bags">
          <a class="nav_1  replacement beta bags" href="replacement-parts/replacement-beta-bags-c-216.html" >Replacement Beta Bags</a>
        </li>
        <li class="nav_1  last replacement polyester felt bags">
          <a class="nav_1  last replacement polyester felt bags" href="replacement-parts/replacement-polyester-felt-bags-c-217.html" >Replacement Polyester Felt Bags</a>
        </li>
      </ul>
    </li>
    <li class="nav_0  technical">
      <a class="nav_0  technical" href="technical" >Technical</a>
      <ul class="nav_1">
        <li class="nav_1  first product manuals">
          <a class="nav_1  first product manuals" href="product-manuals" >Product Manuals</a>
        </li>
        <li class="nav_1  technical tools">
          <a class="nav_1  technical tools" href="technical-tools" >Technical Tools</a>
        </li>
        <li class="nav_1  technical manual">
          <a class="nav_1  technical manual" href="technical-manual" >Technical Manual</a>
        </li>
        <li class="nav_1  chemical resistance guide">
          <a class="nav_1  chemical resistance guide" href="chemical-resistance-guide" >Chemical Resistance Guide</a>
        </li>
        <li class="nav_1  ask a rosedale technician a question">
          <a class="nav_1  ask a rosedale technician a question" href="talk-to-rosedale-technician" >Ask a Rosedale Technician a Question</a>
        </li>
        <li class="nav_1  privacy policy">
          <a class="nav_1  privacy policy" href="privacy-policy" >Privacy Policy</a>
        </li>
        <li class="nav_1  last literature">
          <a class="nav_1  last literature" href="literature" >Literature</a>
        </li>
      </ul>
    </li>
    <li class="nav_0  quality">
      <a class="nav_0  quality" href="quality" >Quality</a>
      <ul class="nav_1">
        <li class="nav_1  first manufacture license of special equipment">
          <a class="nav_1  first manufacture license of special equipment" href="manufacture-license-special-equipment-i-31_49.html" >Manufacture License of Special Equipment</a>
        </li>
      </ul>
    </li>
    <li class="nav_0  last about">
      <a class="nav_0  last about" href="about-us" >About</a>
      <ul class="nav_1">
        <li class="nav_1  first locations">
          <a class="nav_1  first locations" href="locations" >Locations</a>
        </li>
        <li class="nav_1  tradeshows">
          <a class="nav_1  tradeshows" href="rosedale-videos" >Tradeshows</a>
        </li>
        <li class="nav_1  last our team">
          <a class="nav_1  last our team" href="our-team" >Our Team</a>
        </li>
      </ul>
    </li>
  </ul>
</div>

				</div>
			</div>
		</div>
	</div>

	<div id="header_search">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<form name="quick_find" action="https://www.rosedaleproducts.com/advanced_search_result.php" method="get" id="quick_find_form">					<ul class="head-row">
						<li class="head-search icon"><img src="images/icons/icon_search_glass.png"  border="0" alt=""></li>
						<li class="head-search field">
						<input type="text" name="keywords" placeholder="Search for filters, accessories, downloads..." id="header_search_keywords" />&nbsp;<input type="hidden" name="search_in_description" value="1" />						</li>
						<li class="head-search-separator">&nbsp;</li>
						<li class="head-search button" onclick="javascript:quick_find_form.submit();">
						<span id="searchButton">Search</span>
						</li>
					</ul>
					</form>										<div class="header-search-bottom-border"></div>
									</div>
			</div>
		</div>
	</div>
</div>



		<div class="clearFloats"></div>

<!-- REGION sub_header -->


	<div class="mainContent-wrapper">
		<div id="mainContent" class="container"> <!-- Nothing inside this div can stretch full width -->
			<div class="row">
				<div id="bodyContent" class="body-content has-r-col col-md-9 ">
										<div class="main-top noprint">
						<div class="breadcrumbs"><a href="index.php" class="headerNavigation">Home</a> / <a href="create_account.php" class="headerNavigation">Create an Account</a></div>
	<!-- 					<div id="printNav">
							<img src="images/icons/icon_pdf.png" width="31" height="29" alt="Download PDF of this page" title="Download PDF of this page" onClick="savePDF();" style="cursor: pointer;">&nbsp;
							<img src="images/icons/icon_print.png" width="31" height="29" alt="Print this page" title="Print this page" onClick="printPage();" style="cursor: pointer;">
						</div>
	 -->					<div class="clearFloats"></div>
					</div>
					
<!-- BOF body -->
	<h1>My Account Information</h1>
	<ol class="titled_progressbar"><li style="width:20%" class="tp_first tp_current tp_selected"><a href="https://www.rosedaleproducts.com/Sign In">0</a></li><li style="width:20%" class=""><a href="Address.html">1</a></li><li style="width:20%" class=""><a href="Shipping">2</a></li><li style="width:20%" class=""><a href="Payment">3</a></li><li style="width:20%" class=" tp_last"><a href="https://www.rosedaleproducts.com/Finished!">4</a></li></ol><br clear="all" /><form name="create_account_frm" action="create_account.php" method="post" id="create_account_frm" enctype="multipart/form-data"><input type="hidden" name="_csrf_token_" value="bd139b507a18d4ef16731bc972efe79a1ca903f3" /><input type="hidden" name="SSL" value="SSL" /><input type="hidden" name="action" value="insert_account" /><input type="hidden" name="guest_account" id="guest_account" />	<div id="account_block">
		<div class="req-msg">(<span style="color: #FF0000;">*</span>) Required Fields</div>
		<div class="block-set row">
			<!-- Left Block -->
				<div id="account_billing_address" class="form-block col-sm-6">
					<div class="account-block panel">
					<fieldset class="acct-fieldset">		<legend>Account Information</legend><div class="req-msg">(<span style="color: #FF0000;">*</span>) Required Fields</div><input type="hidden" name="address_book_id" id="address_book_id" />		<ul id="account_frm_default" class="account-frm">		<li class="acct-row first">			<div class="lbl-wrap"><label for="" class="acct-lbl"><img src="images/site/pixel_trans.gif" width="100" height="30" /></label></div>
			<div class="fld-wrap"><input type="radio" name="customers_type" value="personal" id="customers_type_personal"/>&nbsp;<label for="customers_type_personal">Personal Account</label><br />
<input type="radio" name="customers_type" value="business" checked="checked" id="customers_type_business"/>&nbsp;<label for="customers_type_business">Business Account</label></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div class="lbl-wrap"><label for="firstname" class="acct-lbl lbl-firstname"><span class="req-fld-indicator">*</span> First Name:</label></div>
			<div id="firstname_field_box" class="fld-wrap"><input type="text" name="firstname" id="firstname" class="d-address-field req-fld" /></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div class="lbl-wrap"><label for="lastname" class="acct-lbl lbl-lastname"><span class="req-fld-indicator">*</span> Last Name:</label></div>
			<div id="lastname_field_box" class="fld-wrap"><input type="text" name="lastname" id="lastname" class="d-address-field req-fld" /></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div class="lbl-wrap"><label for="company" class="acct-lbl lbl-company">Company Name:</label></div>
			<div id="company_field_box" class="fld-wrap"><input type="text" name="company" id="company" class="d-address-field" /></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div id="address_field_box" class="fld-wrap">		<ul id="account_frm_default_location" class="account-frm location">		<li class="acct-row">			<div class="lbl-wrap"><label for="street_address" class="acct-lbl lbl-street_address"><span class="req-fld-indicator">*</span> Street Address:</label></div>
			<div id="street_address_field_box" class="fld-wrap"><input type="text" name="street_address" id="street_address" class="d-address-field req-fld" /></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div class="lbl-wrap">&nbsp;</div>
			<div id="street_address_2_field_box" class="fld-wrap"><input type="text" name="street_address_2" id="street_address_2" class="d-address-field" /></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div class="lbl-wrap"><label for="country" class="acct-lbl lbl-country"><span class="req-fld-indicator">*</span> Country:</label></div>
			<div id="country_field_box" class="fld-wrap"><select name="country" id="country" class="d-address-field req-fld loc-field" onchange="selectCountry('d');"><option value="">Please Select</option><option value="223" selected="selected">United States</option><option value="38">Canada</option><option value="1">Afghanistan</option><option value="2">Albania</option><option value="3">Algeria</option><option value="4">American Samoa</option><option value="5">Andorra</option><option value="6">Angola</option><option value="7">Anguilla</option><option value="8">Antarctica</option><option value="9">Antigua and Barbuda</option><option value="10">Argentina</option><option value="11">Armenia</option><option value="12">Aruba</option><option value="13">Australia</option><option value="14">Austria</option><option value="15">Azerbaijan</option><option value="16">Bahamas</option><option value="17">Bahrain</option><option value="18">Bangladesh</option><option value="19">Barbados</option><option value="20">Belarus</option><option value="21">Belgium</option><option value="22">Belize</option><option value="23">Benin</option><option value="24">Bermuda</option><option value="25">Bhutan</option><option value="26">Bolivia</option><option value="27">Bosnia and Herzegowina</option><option value="28">Botswana</option><option value="29">Bouvet Island</option><option value="30">Brazil</option><option value="31">British Indian Ocean Territory</option><option value="32">Brunei Darussalam</option><option value="33">Bulgaria</option><option value="34">Burkina Faso</option><option value="35">Burundi</option><option value="36">Cambodia</option><option value="37">Cameroon</option><option value="39">Cape Verde</option><option value="40">Cayman Islands</option><option value="41">Central African Republic</option><option value="42">Chad</option><option value="43">Chile</option><option value="44">China</option><option value="45">Christmas Island</option><option value="46">Cocos (Keeling) Islands</option><option value="47">Colombia</option><option value="48">Comoros</option><option value="49">Congo</option><option value="50">Cook Islands</option><option value="51">Costa Rica</option><option value="52">Cote D&#039;Ivoire</option><option value="53">Croatia</option><option value="54">Cuba</option><option value="55">Cyprus</option><option value="56">Czech Republic</option><option value="57">Denmark</option><option value="58">Djibouti</option><option value="59">Dominica</option><option value="60">Dominican Republic</option><option value="61">East Timor</option><option value="62">Ecuador</option><option value="63">Egypt</option><option value="64">El Salvador</option><option value="65">Equatorial Guinea</option><option value="66">Eritrea</option><option value="67">Estonia</option><option value="68">Ethiopia</option><option value="69">Falkland Islands (Malvinas)</option><option value="70">Faroe Islands</option><option value="71">Fiji</option><option value="72">Finland</option><option value="73">France</option><option value="74">France, Metropolitan</option><option value="75">French Guiana</option><option value="76">French Polynesia</option><option value="77">French Southern Territories</option><option value="78">Gabon</option><option value="79">Gambia</option><option value="80">Georgia</option><option value="81">Germany</option><option value="82">Ghana</option><option value="83">Gibraltar</option><option value="84">Greece</option><option value="85">Greenland</option><option value="86">Grenada</option><option value="87">Guadeloupe</option><option value="88">Guam</option><option value="89">Guatemala</option><option value="90">Guinea</option><option value="91">Guinea-bissau</option><option value="92">Guyana</option><option value="93">Haiti</option><option value="94">Heard and Mc Donald Islands</option><option value="95">Honduras</option><option value="96">Hong Kong</option><option value="97">Hungary</option><option value="98">Iceland</option><option value="99">India</option><option value="100">Indonesia</option><option value="101">Iran (Islamic Republic of)</option><option value="102">Iraq</option><option value="103">Ireland</option><option value="104">Israel</option><option value="105">Italy</option><option value="106">Jamaica</option><option value="107">Japan</option><option value="108">Jordan</option><option value="109">Kazakhstan</option><option value="110">Kenya</option><option value="111">Kiribati</option><option value="112">Korea, Democratic People&#039;s Republic of</option><option value="113">Korea, Republic of</option><option value="114">Kuwait</option><option value="115">Kyrgyzstan</option><option value="116">Lao People&#039;s Democratic Republic</option><option value="117">Latvia</option><option value="118">Lebanon</option><option value="119">Lesotho</option><option value="120">Liberia</option><option value="121">Libyan Arab Jamahiriya</option><option value="122">Liechtenstein</option><option value="123">Lithuania</option><option value="124">Luxembourg</option><option value="125">Macau</option><option value="126">Macedonia, The Former Yugoslav Republic of</option><option value="127">Madagascar</option><option value="128">Malawi</option><option value="129">Malaysia</option><option value="130">Maldives</option><option value="131">Mali</option><option value="132">Malta</option><option value="133">Marshall Islands</option><option value="134">Martinique</option><option value="135">Mauritania</option><option value="136">Mauritius</option><option value="137">Mayotte</option><option value="138">Mexico</option><option value="139">Micronesia, Federated States of</option><option value="140">Moldova, Republic of</option><option value="141">Monaco</option><option value="142">Mongolia</option><option value="143">Montserrat</option><option value="144">Morocco</option><option value="145">Mozambique</option><option value="146">Myanmar</option><option value="147">Namibia</option><option value="148">Nauru</option><option value="149">Nepal</option><option value="150">Netherlands</option><option value="151">Netherlands Antilles</option><option value="152">New Caledonia</option><option value="153">New Zealand</option><option value="154">Nicaragua</option><option value="155">Niger</option><option value="156">Nigeria</option><option value="157">Niue</option><option value="158">Norfolk Island</option><option value="159">Northern Mariana Islands</option><option value="160">Norway</option><option value="161">Oman</option><option value="162">Pakistan</option><option value="163">Palau</option><option value="164">Panama</option><option value="165">Papua New Guinea</option><option value="166">Paraguay</option><option value="167">Peru</option><option value="168">Philippines</option><option value="169">Pitcairn</option><option value="170">Poland</option><option value="171">Portugal</option><option value="172">Puerto Rico</option><option value="173">Qatar</option><option value="174">Reunion</option><option value="175">Romania</option><option value="176">Russian Federation</option><option value="177">Rwanda</option><option value="178">Saint Kitts and Nevis</option><option value="179">Saint Lucia</option><option value="180">Saint Vincent and the Grenadines</option><option value="181">Samoa</option><option value="182">San Marino</option><option value="183">Sao Tome and Principe</option><option value="184">Saudi Arabia</option><option value="185">Senegal</option><option value="186">Seychelles</option><option value="187">Sierra Leone</option><option value="188">Singapore</option><option value="189">Slovakia (Slovak Republic)</option><option value="190">Slovenia</option><option value="191">Solomon Islands</option><option value="192">Somalia</option><option value="193">South Africa</option><option value="194">South Georgia and the South Sandwich Islands</option><option value="195">Spain</option><option value="196">Sri Lanka</option><option value="197">St. Helena</option><option value="198">St. Pierre and Miquelon</option><option value="199">Sudan</option><option value="200">Suriname</option><option value="201">Svalbard and Jan Mayen Islands</option><option value="202">Swaziland</option><option value="203">Sweden</option><option value="204">Switzerland</option><option value="205">Syrian Arab Republic</option><option value="206">Taiwan</option><option value="207">Tajikistan</option><option value="208">Tanzania, United Republic of</option><option value="209">Thailand</option><option value="210">Togo</option><option value="211">Tokelau</option><option value="212">Tonga</option><option value="213">Trinidad and Tobago</option><option value="214">Tunisia</option><option value="215">Turkey</option><option value="216">Turkmenistan</option><option value="217">Turks and Caicos Islands</option><option value="218">Tuvalu</option><option value="219">Uganda</option><option value="220">Ukraine</option><option value="221">United Arab Emirates</option><option value="222">United Kingdom</option><option value="224">United States Minor Outlying Islands</option><option value="225">Uruguay</option><option value="226">Uzbekistan</option><option value="227">Vanuatu</option><option value="228">Vatican City State (Holy See)</option><option value="229">Venezuela</option><option value="230">Viet Nam</option><option value="231">Virgin Islands (British)</option><option value="232">Virgin Islands (U.S.)</option><option value="233">Wallis and Futuna Islands</option><option value="234">Western Sahara</option><option value="235">Yemen</option><option value="236">Yugoslavia</option><option value="237">Zaire</option><option value="238">Zambia</option><option value="239">Zimbabwe</option></select></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div class="lbl-wrap"><label for="state" class="acct-lbl lbl-state"><span class="req-fld-indicator">*</span> State/Province:</label></div>
			<div id="state_field_box" class="fld-wrap"><select name="state" id="state" class="address-field create req-fld loc-field" onchange="selectState('d');"><option value="0">Please Select</option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AS">American Samoa</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="AF">Armed Forces Africa</option><option value="AA">Armed Forces Americas</option><option value="AC">Armed Forces Canada</option><option value="AE">Armed Forces Europe</option><option value="AM">Armed Forces Middle East</option><option value="AP">Armed Forces Pacific</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District of Columbia</option><option value="FM">Federated States Of Micronesia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="GU">Guam</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MH">Marshall Islands</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="MP">Northern Mariana Islands</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PW">Palau</option><option value="PA">Pennsylvania</option><option value="PR">Puerto Rico</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VI">Virgin Islands</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option><option value="other">Other (please specify):</option></select><input type="text" name="state_other" id="state_other" class="d-address-field state-other loc-field" /></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div class="lbl-wrap"><label for="city" class="acct-lbl lbl-city loc-field"><span class="req-fld-indicator">*</span> City:</label></div>
			<div id="city_field_box" class="fld-wrap"><input type="text" name="city" id="city" class="d-address-field req-fld" /></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div class="lbl-wrap"><label for="postcode" class="acct-lbl lbl-postcode loc-field"><span class="req-fld-indicator">*</span> Zip/Postal Code:</label></div>
			<div id="postcode_field_box" class="fld-wrap"><input type="text" name="postcode" id="postcode" class="d-address-field req-fld" /></div>
			<div class="clearFloats"></div>
		</li>
</ul>
</div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div class="lbl-wrap"><label for="telephone" class="acct-lbl lbl-telephone">Telephone Number:</label></div>
			<div id="telephone_field_box" class="fld-wrap"><input type="text" name="telephone" id="telephone" class="d-address-field" /></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div class="lbl-wrap"><label for="fax" class="acct-lbl lbl-fax">Fax Number:</label></div>
			<div id="fax_field_box" class="fld-wrap"><input type="text" name="fax" id="fax" class="d-address-field" /></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div class="lbl-wrap"><label for="email_address" class="acct-lbl lbl-email_address"><span class="req-fld-indicator">*</span> E-Mail Address:</label></div>
			<div id="email_address_field_box" class="fld-wrap"><input type="text" name="email_address" id="email_address" class="d-address-field req-fld" /></div>
			<div class="clearFloats"></div>
		</li>
		</ul>
	</fieldset>
			</div>
				</div>
			<!-- End Left Block -->
			<!-- Right Block -->
				<div id="account_shipping_address" class="form-block last col-sm-6">
					<div class="account-block panel">
					<fieldset class="acct-fieldset">		<legend>Shipping Information</legend><div class="req-msg">(<span style="color: #FF0000;">*</span>) Required Fields</div><input type="hidden" name="s_address_book_id" id="s_address_book_id" />		<ul id="account_frm_shipping" class="account-frm">		<li class="acct-row first">			<div class="lbl-wrap">&nbsp;</div>
			<div class="fld-wrap"><div class="fld-ship-to-bill"><br /><input type="checkbox" name="ship_to_bill" value="1" checked="checked"  id="ship_to_bill"/><label for="ship_to_bill">Same as Billing Information</label></div></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div class="lbl-wrap"><label for="firstname" class="acct-lbl lbl-s_firstname"><span class="req-fld-indicator">*</span> First Name:</label></div>
			<div id="firstname_field_box" class="fld-wrap"><input type="text" name="s_firstname" id="s_firstname" class="s-address-field req-fld" /></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div class="lbl-wrap"><label for="lastname" class="acct-lbl lbl-s_lastname"><span class="req-fld-indicator">*</span> Last Name:</label></div>
			<div id="lastname_field_box" class="fld-wrap"><input type="text" name="s_lastname" id="s_lastname" class="s-address-field req-fld" /></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div class="lbl-wrap"><label for="company" class="acct-lbl lbl-s_company">Company Name:</label></div>
			<div id="company_field_box" class="fld-wrap"><input type="text" name="s_company" id="s_company" class="s-address-field" /></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div id="address_field_box" class="fld-wrap">		<ul id="account_frm_shipping_location" class="account-frm location">		<li class="acct-row">			<div class="lbl-wrap"><label for="s_street_address" class="acct-lbl lbl-street_address"><span class="req-fld-indicator">*</span> Street Address:</label></div>
			<div id="s_street_address_field_box" class="fld-wrap"><input type="text" name="s_street_address" id="s_street_address" class="s-address-field req-fld" /></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div class="lbl-wrap">&nbsp;</div>
			<div id="s_street_address_2_field_box" class="fld-wrap"><input type="text" name="s_street_address_2" id="s_street_address_2" class="s-address-field" /></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div class="lbl-wrap"><label for="s_country" class="acct-lbl lbl-country"><span class="req-fld-indicator">*</span> Country:</label></div>
			<div id="s_country_field_box" class="fld-wrap"><select name="s_country" id="s_country" class="s-address-field req-fld loc-field" onchange="selectCountry('s');"><option value="">Please Select</option><option value="223" selected="selected">United States</option><option value="38">Canada</option><option value="1">Afghanistan</option><option value="2">Albania</option><option value="3">Algeria</option><option value="4">American Samoa</option><option value="5">Andorra</option><option value="6">Angola</option><option value="7">Anguilla</option><option value="8">Antarctica</option><option value="9">Antigua and Barbuda</option><option value="10">Argentina</option><option value="11">Armenia</option><option value="12">Aruba</option><option value="13">Australia</option><option value="14">Austria</option><option value="15">Azerbaijan</option><option value="16">Bahamas</option><option value="17">Bahrain</option><option value="18">Bangladesh</option><option value="19">Barbados</option><option value="20">Belarus</option><option value="21">Belgium</option><option value="22">Belize</option><option value="23">Benin</option><option value="24">Bermuda</option><option value="25">Bhutan</option><option value="26">Bolivia</option><option value="27">Bosnia and Herzegowina</option><option value="28">Botswana</option><option value="29">Bouvet Island</option><option value="30">Brazil</option><option value="31">British Indian Ocean Territory</option><option value="32">Brunei Darussalam</option><option value="33">Bulgaria</option><option value="34">Burkina Faso</option><option value="35">Burundi</option><option value="36">Cambodia</option><option value="37">Cameroon</option><option value="39">Cape Verde</option><option value="40">Cayman Islands</option><option value="41">Central African Republic</option><option value="42">Chad</option><option value="43">Chile</option><option value="44">China</option><option value="45">Christmas Island</option><option value="46">Cocos (Keeling) Islands</option><option value="47">Colombia</option><option value="48">Comoros</option><option value="49">Congo</option><option value="50">Cook Islands</option><option value="51">Costa Rica</option><option value="52">Cote D&#039;Ivoire</option><option value="53">Croatia</option><option value="54">Cuba</option><option value="55">Cyprus</option><option value="56">Czech Republic</option><option value="57">Denmark</option><option value="58">Djibouti</option><option value="59">Dominica</option><option value="60">Dominican Republic</option><option value="61">East Timor</option><option value="62">Ecuador</option><option value="63">Egypt</option><option value="64">El Salvador</option><option value="65">Equatorial Guinea</option><option value="66">Eritrea</option><option value="67">Estonia</option><option value="68">Ethiopia</option><option value="69">Falkland Islands (Malvinas)</option><option value="70">Faroe Islands</option><option value="71">Fiji</option><option value="72">Finland</option><option value="73">France</option><option value="74">France, Metropolitan</option><option value="75">French Guiana</option><option value="76">French Polynesia</option><option value="77">French Southern Territories</option><option value="78">Gabon</option><option value="79">Gambia</option><option value="80">Georgia</option><option value="81">Germany</option><option value="82">Ghana</option><option value="83">Gibraltar</option><option value="84">Greece</option><option value="85">Greenland</option><option value="86">Grenada</option><option value="87">Guadeloupe</option><option value="88">Guam</option><option value="89">Guatemala</option><option value="90">Guinea</option><option value="91">Guinea-bissau</option><option value="92">Guyana</option><option value="93">Haiti</option><option value="94">Heard and Mc Donald Islands</option><option value="95">Honduras</option><option value="96">Hong Kong</option><option value="97">Hungary</option><option value="98">Iceland</option><option value="99">India</option><option value="100">Indonesia</option><option value="101">Iran (Islamic Republic of)</option><option value="102">Iraq</option><option value="103">Ireland</option><option value="104">Israel</option><option value="105">Italy</option><option value="106">Jamaica</option><option value="107">Japan</option><option value="108">Jordan</option><option value="109">Kazakhstan</option><option value="110">Kenya</option><option value="111">Kiribati</option><option value="112">Korea, Democratic People&#039;s Republic of</option><option value="113">Korea, Republic of</option><option value="114">Kuwait</option><option value="115">Kyrgyzstan</option><option value="116">Lao People&#039;s Democratic Republic</option><option value="117">Latvia</option><option value="118">Lebanon</option><option value="119">Lesotho</option><option value="120">Liberia</option><option value="121">Libyan Arab Jamahiriya</option><option value="122">Liechtenstein</option><option value="123">Lithuania</option><option value="124">Luxembourg</option><option value="125">Macau</option><option value="126">Macedonia, The Former Yugoslav Republic of</option><option value="127">Madagascar</option><option value="128">Malawi</option><option value="129">Malaysia</option><option value="130">Maldives</option><option value="131">Mali</option><option value="132">Malta</option><option value="133">Marshall Islands</option><option value="134">Martinique</option><option value="135">Mauritania</option><option value="136">Mauritius</option><option value="137">Mayotte</option><option value="138">Mexico</option><option value="139">Micronesia, Federated States of</option><option value="140">Moldova, Republic of</option><option value="141">Monaco</option><option value="142">Mongolia</option><option value="143">Montserrat</option><option value="144">Morocco</option><option value="145">Mozambique</option><option value="146">Myanmar</option><option value="147">Namibia</option><option value="148">Nauru</option><option value="149">Nepal</option><option value="150">Netherlands</option><option value="151">Netherlands Antilles</option><option value="152">New Caledonia</option><option value="153">New Zealand</option><option value="154">Nicaragua</option><option value="155">Niger</option><option value="156">Nigeria</option><option value="157">Niue</option><option value="158">Norfolk Island</option><option value="159">Northern Mariana Islands</option><option value="160">Norway</option><option value="161">Oman</option><option value="162">Pakistan</option><option value="163">Palau</option><option value="164">Panama</option><option value="165">Papua New Guinea</option><option value="166">Paraguay</option><option value="167">Peru</option><option value="168">Philippines</option><option value="169">Pitcairn</option><option value="170">Poland</option><option value="171">Portugal</option><option value="172">Puerto Rico</option><option value="173">Qatar</option><option value="174">Reunion</option><option value="175">Romania</option><option value="176">Russian Federation</option><option value="177">Rwanda</option><option value="178">Saint Kitts and Nevis</option><option value="179">Saint Lucia</option><option value="180">Saint Vincent and the Grenadines</option><option value="181">Samoa</option><option value="182">San Marino</option><option value="183">Sao Tome and Principe</option><option value="184">Saudi Arabia</option><option value="185">Senegal</option><option value="186">Seychelles</option><option value="187">Sierra Leone</option><option value="188">Singapore</option><option value="189">Slovakia (Slovak Republic)</option><option value="190">Slovenia</option><option value="191">Solomon Islands</option><option value="192">Somalia</option><option value="193">South Africa</option><option value="194">South Georgia and the South Sandwich Islands</option><option value="195">Spain</option><option value="196">Sri Lanka</option><option value="197">St. Helena</option><option value="198">St. Pierre and Miquelon</option><option value="199">Sudan</option><option value="200">Suriname</option><option value="201">Svalbard and Jan Mayen Islands</option><option value="202">Swaziland</option><option value="203">Sweden</option><option value="204">Switzerland</option><option value="205">Syrian Arab Republic</option><option value="206">Taiwan</option><option value="207">Tajikistan</option><option value="208">Tanzania, United Republic of</option><option value="209">Thailand</option><option value="210">Togo</option><option value="211">Tokelau</option><option value="212">Tonga</option><option value="213">Trinidad and Tobago</option><option value="214">Tunisia</option><option value="215">Turkey</option><option value="216">Turkmenistan</option><option value="217">Turks and Caicos Islands</option><option value="218">Tuvalu</option><option value="219">Uganda</option><option value="220">Ukraine</option><option value="221">United Arab Emirates</option><option value="222">United Kingdom</option><option value="224">United States Minor Outlying Islands</option><option value="225">Uruguay</option><option value="226">Uzbekistan</option><option value="227">Vanuatu</option><option value="228">Vatican City State (Holy See)</option><option value="229">Venezuela</option><option value="230">Viet Nam</option><option value="231">Virgin Islands (British)</option><option value="232">Virgin Islands (U.S.)</option><option value="233">Wallis and Futuna Islands</option><option value="234">Western Sahara</option><option value="235">Yemen</option><option value="236">Yugoslavia</option><option value="237">Zaire</option><option value="238">Zambia</option><option value="239">Zimbabwe</option></select></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div class="lbl-wrap"><label for="s_state" class="acct-lbl lbl-state"><span class="req-fld-indicator">*</span> State/Province:</label></div>
			<div id="s_state_field_box" class="fld-wrap"><select name="s_state" id="s_state" class="s-address-field create req-fld loc-field" onchange="selectState('s');"><option value="0">Please Select</option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AS">American Samoa</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="AF">Armed Forces Africa</option><option value="AA">Armed Forces Americas</option><option value="AC">Armed Forces Canada</option><option value="AE">Armed Forces Europe</option><option value="AM">Armed Forces Middle East</option><option value="AP">Armed Forces Pacific</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District of Columbia</option><option value="FM">Federated States Of Micronesia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="GU">Guam</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MH">Marshall Islands</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="MP">Northern Mariana Islands</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PW">Palau</option><option value="PA">Pennsylvania</option><option value="PR">Puerto Rico</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VI">Virgin Islands</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option><option value="AB">Alberta</option><option value="BC">British Columbia</option><option value="MB">Manitoba</option><option value="NB">New Brunswick</option><option value="NF">Newfoundland</option><option value="NT">Northwest Territories</option><option value="NS">Nova Scotia</option><option value="NU">Nunavut</option><option value="ON">Ontario</option><option value="PE">Prince Edward Island</option><option value="QC">Quebec</option><option value="SK">Saskatchewan</option><option value="YT">Yukon Territory</option><option value="other">Other (please specify):</option></select><input type="text" name="s_state_other" id="s_state_other" class="s-address-field state-other loc-field" /></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div class="lbl-wrap"><label for="s_city" class="acct-lbl lbl-city loc-field"><span class="req-fld-indicator">*</span> City:</label></div>
			<div id="s_city_field_box" class="fld-wrap"><input type="text" name="s_city" id="s_city" class="s-address-field" /></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div class="lbl-wrap"><label for="s_postcode" class="acct-lbl lbl-postcode loc-field"><span class="req-fld-indicator">*</span> Zip/Postal Code:</label></div>
			<div id="s_postcode_field_box" class="fld-wrap"><input type="text" name="s_postcode" id="s_postcode" class="s-address-field" /></div>
			<div class="clearFloats"></div>
		</li>
</ul>
</div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div id="telephone_field_box" class="fld-wrap"><img src="images/site/pixel_trans.gif" width="60" height="15" /></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div id="fax_field_box" class="fld-wrap"><img src="images/site/pixel_trans.gif" width="60" height="15" /></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div id="email_address_field_box" class="fld-wrap"><img src="images/site/pixel_trans.gif" width="60" height="15" /></div>
			<div class="clearFloats"></div>
		</li>
		</ul>
	</fieldset>
			</div>
				</div>
			<!-- End Right Block -->
			</div>
		</div>
		<div id="create_account_block" class="account-block acct-options">
			<fieldset class="acct-fieldset">
					<legend>Options</legend>
					<div class="create-account-row" class="account-block form-block">
						<div class="row">
							<div class="col-sm-6">
								<label id="createAcountLbl">Create An Account:</label> 								<div style="display: inline-block;">
									<input type="checkbox" name="create_account" value="1" checked="checked" id="create_account"/>								</div>
							</div>
							<div class="clearfix visible-xs-block"></div>
							<div class="col-sm-6">
								Newsletter:								<div style="display: inline-block;"><label><input type="checkbox" name="newsletter" value="1"/> </label> </div>
							</div>
						</div>
						<div class="clearFloats"></div>
						<div id="passwords_box">
							<div id="password_field_set">
<ul id="password_flds" class="account-frm">
		<li class="acct-row">			<div class="lbl-wrap password-lbl-wrap"><label for="password" class="acct-lbl lbl-password"><span class="req-fld-indicator">*</span> Password:</label></div>
			<div id="password_field_box" class="fld-wrap"><input type="password" name="password" id="password" class="password-fld" /></div>
			<div class="clearFloats"></div>
		</li>
		<li class="acct-row">			<div class="lbl-wrap password-lbl-wrap"><label for="password_confirm" class="acct-lbl lbl-password_confirm"><span class="req-fld-indicator">*</span> Confirm Password:</label></div>
			<div id="password_confirm_field_box" class="fld-wrap"><input type="password" name="password_confirm" id="password_confirm" class="password-fld" /></div>
			<div class="clearFloats"></div>
		</li>
</ul></div>
						</div>
					</div>
					<div class="create-account-row submit-row">
							
		<div id="createAccountRecaptcha"></div>
						<div class="submit-buttons">
						<span class="tdbLink"><button id="tdb1" type="submit" >Continue Checkout</button></span><script type="text/javascript">$("#tdb1").button().addClass("ui-priority-primary").parent().removeClass("tdbLink");</script>						</div>
						<div class="clearFloats"></div>
					</div>
				</fieldset>
		</div>
		</form>
<!-- EOF body -->


				</div> <!-- bodyContent //-->

<!-- BOF right_column -->

<div id="columnRight" class="side-col right col-md-3">
	
<div id="columnRightContent" class="side-col right">
	<div id="right_content">
	<div class="heading-row">Payment Options</div>
<div class="cc-icons-row"><img src="images/icons/visa_small.gif"  border="0" alt="">&nbsp;<img src="images/icons/mc_small.gif"  border="0" alt="">&nbsp;<img src="images/icons/am_small.gif"  border="0" alt="">&nbsp;<img src="images/icons/disc_small.gif"  border="0" alt=""></div>
	<div class="heading-row">Privacy Policy</div>
	<div class="content-row">
		Your privacy is very important to us. 
		Depending on your request, we may share the information you provide in this form with one of our trusted distributors - but no one else. 
		We will never pass along your contact information to any other third party, ever.<br /><center class="privacy-policy-link"><a href="privacy-policy">View Our Privacy Policy Here</a></center>	</div>
</div>
</div>

</div>

<!-- EOF right_column -->


			</div> <!-- end row -->

<!-- REGION newsletter_quick_signup -->


<!-- REGION team_carousel -->


<!-- REGION quick_contact -->


<!-- REGION left_column -->




			<div class="clearFloats"></div>
		</div>
		<div id="responsive_nav">
	<div class="nav responsive-nav">
<ul id="responsive-nav" class="nav_0">
    <li class="nav_0  depth_0 first">
      <a class="nav_0  depth_0 first" href="home-i-1.html" >Home</a>
    </li>
    <li class="nav_0  depth_0">
      <a class="nav_0  depth_0" href="account.php" >Online Store</a>
  <ul class="nav_1">
    <li class="nav_1  depth_1 first">
      <a class="nav_1  depth_1 first" href="account.php" >My Account</a>
    </li>
    <li class="nav_1  depth_1">
      <a class="nav_1  depth_1" href="rfq_cart.php" >View Quote</a>
    </li>
    <li class="nav_1  depth_1">
      <a class="nav_1  depth_1" href="checkout_address.php?order_type=rfq" >Submit Quote</a>
    </li>
    <li class="nav_1  depth_1">
      <a class="nav_1  depth_1" href="shopping_cart.php" >View Cart</a>
    </li>
    <li class="nav_1  depth_1">
      <a class="nav_1  depth_1" href="checkout_address.php" >Checkout</a>
    </li>
  </ul>
    </li>
    <li class="nav_0  depth_0">
      <a class="nav_0  depth_0" href="about-us" >About</a>
  <ul class="nav_1">
    <li class="nav_1  depth_1 first">
      <a class="nav_1  depth_1 first" href="locations" >Locations</a>
    </li>
    <li class="nav_1  depth_1">
      <a class="nav_1  depth_1" href="rosedale-videos" >Tradeshows</a>
    </li>
    <li class="nav_1  depth_1 last">
      <a class="nav_1  depth_1 last" href="our-team" >Our Team</a>
    </li>
  </ul>
    </li>
    <li class="nav_0  depth_0">
      <a class="nav_0  depth_0" href="contact" >Contact</a>
    </li>
    <li class="nav_0  depth_0">
      <a class="nav_0  depth_0" href="find-distributors-i-20.html" >Find Distributors</a>
    </li>
    <li class="nav_0  depth_0">
      <a class="nav_0  depth_0" href="rosedale-videos" >News</a>
    </li>
    <li class="nav_0  depth_0">
      <a class="nav_0  depth_0" href="products" >Products</a>
  <ul class="nav_1">
    <li class="nav_1  depth_1 first">
      <a class="nav_1  depth_1 first" href="housings-c-46_47.html" >Housings</a>
  <ul class="nav_2">
    <li class="nav_2  depth_2 first">
      <a class="nav_2  depth_2 first" href="products/housings/single-bag-basket-housings" >Single Bag or Basket Housings</a>
  <ul class="nav_3">
    <li class="nav_3  depth_3 first">
      <a class="nav_3  depth_3 first" href="basket-strainers-and-bag-filters.html" >Model 4</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="single-bag-basket-housings/model-c-46_47_49_113.html" >Model 6</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="single-bag-basket-housings/model-c-46_47_49_114.html" >Model 8</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="model-8-plastic-housing.html" >Model 8 PolyPro</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="model-8-125.html" >Model 8-125</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="single-bag-basket-housings/model-nco-c-46_47_49_115.html" >Model NCO</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="model-lco.html" >Model LCO</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="single-bag-basket-housings/model-c-46_47_49_120.html" >Model OT</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="single-bag-basket-housings/model-c-46_47_49_118.html" >Model 82</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="single-bag-basket-housings/aluminum-housing-c-46_47_49_116.html" >Aluminum Housing</a>
    </li>
    <li class="nav_3  depth_3 last">
      <a class="nav_3  depth_3 last" href="single-bag-basket-housings/heat-transfer-c-46_47_49_117.html" >Heat Transfer</a>
    </li>
  </ul>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="products/housings/multi-bag-basket-housings" >Multi Bag or Basket Housings / Duplex</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="products/housings/cartridge-housings" >Cartridge Housings</a>
  <ul class="nav_3">
    <li class="nav_3  depth_3 first">
      <a class="nav_3  depth_3 first" href="cartridge-housings/high-flow-housings-c-46_47_51_129.html" >High Flow Housings</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="cartridge-housings/model-hss300-hss750-c-46_47_51_130.html" >Model HSS300 / HSS750</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="cartridge-housings/model-7180-c-46_47_51_131.html" >Model 7180</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="cartridge-housings/cartridge-housing-standard-c-46_47_51_132.html" >Cartridge Housing (Standard)</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="cartridge-housings/clamp-lid-c-46_47_51_133.html" >Clamp Lid</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="cartridge-housings/platinum-700-c-46_47_51_134.html" >Platinum 700</a>
    </li>
    <li class="nav_3  depth_3 last">
      <a class="nav_3  depth_3 last" href="cartridge-housings/platinum-900-2040-c-46_47_51_135.html" >Platinum 900 / 2040</a>
    </li>
  </ul>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="housings/basket-strainer-c-46_47_156.html" >Basket Strainer</a>
    </li>
    <li class="nav_2  depth_2 last">
      <a class="nav_2  depth_2 last" href="products/housings/application-specific" >Application Specific Housings</a>
  <ul class="nav_3">
    <li class="nav_3  depth_3 first">
      <a class="nav_3  depth_3 first" href="application-specific-housings/sanitary-housings-c-46_47_52_123.html" >Sanitary Housings</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="application-specific-housings/bulk-loading-filters-c-46_47_52_125.html" >Bulk Loading Filters</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="application-specific-housings/giardia-cryptosporidium-municipal-drinking-water-c-46_47_52_122.html" >Giardia Cryptosporidium / Municipal Drinking Water</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="application-specific-housings/machine-coolant-filtration-c-46_47_52_126.html" >Machine Coolant Filtration</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="application-specific-housings/vibrating-filter-c-46_47_52_124.html" >Vibrating Filter</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="application-specific-housings/mini-bag-filter-c-46_47_52_121.html" >Mini-Bag Filter</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="application-specific-housings/grp-series-filters-c-46_47_52_191.html" >GRP Series Filters</a>
    </li>
    <li class="nav_3  depth_3 last">
      <a class="nav_3  depth_3 last" href="application-specific-housings/nco-brewing-beverage-filter-c-46_47_52_192.html" >NCO Brewing & Beverage Filter</a>
    </li>
  </ul>
    </li>
  </ul>
    </li>
    <li class="nav_1  depth_1">
      <a class="nav_1  depth_1" href="products/filtration-housings" >Filtration System Housings</a>
  <ul class="nav_2">
    <li class="nav_2  depth_2 first">
      <a class="nav_2  depth_2 first" href="filtration-system-housings/duplex-c-46_53_139.html" >Duplex</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="filtration-system-housings/backwashing-automatic-system-c-46_53_54.html" >Backwashing Automatic System</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="filtration-system-housings/backwashing-manual-system-c-46_53_55.html" >Backwashing Manual System</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="filtration-system-housings/separator-c-46_53_56.html" >Separator</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="filtration-system-housings/indicating-filter-c-46_53_57.html" >Indicating Filter</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="filtration-system-housings/convertible-c-46_53_58.html" >Convertible</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="filtration-system-housings/portable-cart-c-46_53_59.html" >Portable Cart</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="filtration-system-housings/portable-coolant-cart-coolant-filtration-c-46_53_60.html" >Portable Coolant Cart / Coolant Filtration</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="filtration-system-housings/sorbent-containment-c-46_53_61.html" >Sorbent Containment</a>
    </li>
    <li class="nav_2  depth_2 last">
      <a class="nav_2  depth_2 last" href="filtration-system-housings/solids-recovery-c-46_53_62.html" >Solids Recovery</a>
    </li>
  </ul>
    </li>
    <li class="nav_1  depth_1">
      <a class="nav_1  depth_1" href="products/filter-bags" >Filter Bags</a>
  <ul class="nav_2">
    <li class="nav_2  depth_2 first">
      <a class="nav_2  depth_2 first" href="products/filter-bags/standard-bags" >Standard Bags</a>
  <ul class="nav_3">
    <li class="nav_3  depth_3 first">
      <a class="nav_3  depth_3 first" href="standard-bags/filter-bag-material-c-46_63_65_186.html" >Filter Bag Material</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="standard-bags/micron-rating-c-46_63_65_187.html" >Micron Rating</a>
  <ul class="nav_4">
    <li class="nav_4  depth_4 first">
      <a class="nav_4  depth_4 first" href="micron-rating/polyester-felt-filter-bags-c-46_63_65_187_214.html" >Polyester Felt Filter Bags</a>
    </li>
  </ul>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="standard-bags/bag-finish-c-46_63_65_188.html" >Bag Finish</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="standard-bags/bag-sizes-c-46_63_65_189.html" >Bag Sizes</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="standard-bags/bag-styles-c-46_63_65_190.html" >Bag Styles</a>
    </li>
    <li class="nav_3  depth_3 last">
      <a class="nav_3  depth_3 last" href="standard-bags/bag-construction-c-46_63_65_213.html" >Bag Construction</a>
    </li>
  </ul>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="products/filter-bags/high-efficiency-bags" >High Efficiency Filter Bags</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="products/filter-bags/beta-bags" >Beta Bags</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="products/filter-bags/polypropylene-bags" >All-Polypropylene Bags</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="products/filter-bags/graded-density" >Graded Density Bags</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="products/filter-bags/giardia-removal" >Giardia Removal Cartridge</a>
    </li>
    <li class="nav_2  depth_2 last">
      <a class="nav_2  depth_2 last" href="products/filter-bags/depth-filtration" >Depth Filtration Bags</a>
    </li>
  </ul>
    </li>
    <li class="nav_1  depth_1">
      <a class="nav_1  depth_1" href="products/filter-cartridges" >Cartridges</a>
  <ul class="nav_2">
    <li class="nav_2  depth_2 first">
      <a class="nav_2  depth_2 first" href="cartridges/bag-sized-c-46_72_107.html" >Bag Sized</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="https://www.rosedaleproducts.com/products/filter-cartridges/bag-sized/platinum" >Platinum Cartridges</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="https://www.rosedaleproducts.com/products/filter-cartridges/bag-sized/stainless-steel" >Stainless Steel Cartridges</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="https://www.rosedaleproducts.com/products/filter-cartridges/bag-sized/absolute-pleated" >Absolute Pleated</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="products/filter-cartridges/oil-water-separation" >Oil/Water Separation</a>
    </li>
    <li class="nav_2  depth_2 last">
      <a class="nav_2  depth_2 last" href="products/filter-cartridges/bag-sized/wound-cartridge" >Wound Cartridge Elements</a>
    </li>
  </ul>
    </li>
    <li class="nav_1  depth_1">
      <a class="nav_1  depth_1" href="products/oilwater-separation-c-46_108.html" >Oil/Water Separation</a>
    </li>
    <li class="nav_1  depth_1">
      <a class="nav_1  depth_1" href="cartridges/bag-sized-c-46_72_107.html" >Bag Sized</a>
  <ul class="nav_2">
    <li class="nav_2  depth_2 first">
      <a class="nav_2  depth_2 first" href="bag-sized/bag-sized-cartridge-c-46_74_136.html" >Bag Sized Cartridge</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="bag-sized/bag-sized-platinum-cartridge-c-46_74_137.html" >Bag Sized Platinum Cartridge</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="bag-sized/bag-sized-surfacemaxx-c-46_74_138.html" >Bag Sized SurfaceMaxx</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="products/filter-cartridges/bag-sized/disposable" >Bag Sized Disposable</a>
    </li>
    <li class="nav_2  depth_2 last">
      <a class="nav_2  depth_2 last" href="bag-sized/bagcartridge-converter-c-46_74_80.html" >Bag/Cartridge Converter</a>
    </li>
  </ul>
    </li>
    <li class="nav_1  depth_1">
      <a class="nav_1  depth_1" href="products/filtration-systems" >Filtration Systems</a>
  <ul class="nav_2">
    <li class="nav_2  depth_2 first">
      <a class="nav_2  depth_2 first" href="filtration-systems/backwashing-automatic-system-c-46_81_109.html" >Backwashing Automatic System</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="filtration-systems/backwashing-manual-system-c-46_81_110.html" >Backwashing Manual System</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="filtration-systems/separator-c-46_81_111.html" >Separator</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="products/filtration-systems/ethanol-filtration" >Ethanol Filtration Systems</a>
  <ul class="nav_3">
    <li class="nav_3  depth_3 first">
      <a class="nav_3  depth_3 first" href="ethanol-filtration-systems/seal-water-filter-c-46_81_82_84.html" >Seal Water Filter</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="ethanol-filtration-systems/190200-proof-filter-c-46_81_82_85.html" >190/200 Proof Filter</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="ethanol-filtration-systems/water-treatment-iron-recovery-c-46_81_82_86.html" >Water Treatment & Iron Recovery</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="ethanol-filtration-systems/cook-water-evaporation-condensate-c-46_81_82_87.html" >Cook Water & Evaporation Condensate</a>
    </li>
    <li class="nav_3  depth_3">
      <a class="nav_3  depth_3" href="ethanol-filtration-systems/solidsliquid-separator-c-46_81_82_88.html" >Solids/Liquid Separator</a>
    </li>
    <li class="nav_3  depth_3 last">
      <a class="nav_3  depth_3 last" href="ethanol-filtration-systems/load-out-filter-c-46_81_82_89.html" >Load Out Filter</a>
    </li>
  </ul>
    </li>
    <li class="nav_2  depth_2 last">
      <a class="nav_2  depth_2 last" href="products/filtration-systems/multi-bag" >Multi-Plex Filters</a>
    </li>
  </ul>
    </li>
    <li class="nav_1  depth_1">
      <a class="nav_1  depth_1" href="products/basket-filters" >Baskets</a>
  <ul class="nav_2">
    <li class="nav_2  depth_2 first">
      <a class="nav_2  depth_2 first" href="products/basket-filter/basket-strainer" >Basket Strainer</a>
  <ul class="nav_3">
    <li class="nav_3  depth_3 first">
      <a class="nav_3  depth_3 first" href="basket-strainer/replacement-baskets-c-46_90_92_182.html" >Replacement Baskets</a>
    </li>
  </ul>
    </li>
    <li class="nav_2  depth_2 last">
      <a class="nav_2  depth_2 last" href="baskets/replacement-baskets-c-46_90_183.html" >Replacement Baskets</a>
  <ul class="nav_3">
    <li class="nav_3  depth_3 first">
      <a class="nav_3  depth_3 first" href="replacement-baskets/cleanable-baskets-c-46_90_183_184.html" >Cleanable Baskets</a>
    </li>
    <li class="nav_3  depth_3 last">
      <a class="nav_3  depth_3 last" href="replacement-baskets/cone-baskets-c-46_90_183_185.html" >Cone Baskets</a>
    </li>
  </ul>
    </li>
  </ul>
    </li>
    <li class="nav_1  depth_1">
      <a class="nav_1  depth_1" href="products/basket-filter/mesh-lined-baskets" >Mesh Lined Baskets</a>
    </li>
    <li class="nav_1  depth_1">
      <a class="nav_1  depth_1" href="products/filtration-accessories" >Accessories</a>
  <ul class="nav_2">
    <li class="nav_2  depth_2 first">
      <a class="nav_2  depth_2 first" href="accessories/heated-jacketing-for-resins-c-46_93_94.html" >Heated Jacketing for Resins</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="products/filtration-accessories/bag-hold-down" >Bag Hold Down Assemblies</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="accessories/internal-coatings-c-46_93_96.html" >Internal Coatings</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="products/filtration-accessories/inner-baskets-bags" >Inner Baskets and Bags</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="accessories/differential-pressure-indicators-c-46_93_98.html" >Differential Pressure Indicators</a>
    </li>
    <li class="nav_2  depth_2">
      <a class="nav_2  depth_2" href="products/filtration-accessories/bag-restrainer" >Bag Restrainer</a>
    </li>
    <li class="nav_2  depth_2 last">
      <a class="nav_2  depth_2 last" href="products/filtration-accessories/liquid-displacers" >Liquid Displacers</a>
    </li>
  </ul>
    </li>
    <li class="nav_1  depth_1">
      <a class="nav_1  depth_1" href="products/custom-filter-manufacturing" >Custom Manufacturing Solutions</a>
    </li>
    <li class="nav_1  depth_1 last">
      <a class="nav_1  depth_1 last" href="overstock-sales" >Overstock Sales</a>
    </li>
  </ul>
    </li>
    <li class="nav_0  depth_0">
      <a class="nav_0  depth_0" href="quality" >Quality</a>
  <ul class="nav_1">
    <li class="nav_1  depth_1 first">
      <a class="nav_1  depth_1 first" href="manufacture-license-special-equipment-i-31_49.html" >Manufacture License of Special Equipment</a>
    </li>
  </ul>
    </li>
    <li class="nav_0  depth_0">
      <a class="nav_0  depth_0" href="request-catalog-i-23.html" >Request Catalog</a>
  <ul class="nav_1">
    <li class="nav_1  depth_1 first">
      <a class="nav_1  depth_1 first" href="request-catalog-i-23.html" >Request a Printed Catalog</a>
    </li>
  </ul>
    </li>
    <li class="nav_0  depth_0">
      <a class="nav_0  depth_0" href="request-quote" >Request Quote</a>
    </li>
    <li class="nav_0  depth_0">
      <a class="nav_0  depth_0" href="technical" >Technical</a>
  <ul class="nav_1">
    <li class="nav_1  depth_1 first">
      <a class="nav_1  depth_1 first" href="product-manuals" >Product Manuals</a>
    </li>
    <li class="nav_1  depth_1">
      <a class="nav_1  depth_1" href="technical-tools" >Technical Tools</a>
    </li>
    <li class="nav_1  depth_1">
      <a class="nav_1  depth_1" href="technical-manual" >Technical Manual</a>
    </li>
    <li class="nav_1  depth_1">
      <a class="nav_1  depth_1" href="chemical-resistance-guide" >Chemical Resistance Guide</a>
    </li>
    <li class="nav_1  depth_1">
      <a class="nav_1  depth_1" href="talk-to-rosedale-technician" >Ask a Rosedale Technician a Question</a>
    </li>
    <li class="nav_1  depth_1">
      <a class="nav_1  depth_1" href="privacy-policy" >Privacy Policy</a>
    </li>
    <li class="nav_1  depth_1 last">
      <a class="nav_1  depth_1 last" href="literature" >Literature</a>
    </li>
  </ul>
    </li>
    <li class="nav_0  depth_0 last">
      <a class="nav_0  depth_0 last" href="sitemap" >Sitemap</a>
    </li>
  </ul>
		<div style="clear: left;"></div>
	</div>
</div>
		<div class="footerWrapper">
	<div class="container">
		<div class="footer-inner">
						<div class="footer-content"> <div class="row">
<div class="col-sm-6 col-md-4">
<div scope="col" style="text-align: left; vertical-align: top;"><a href="locations" style="color:#fa4c07; font-size: 15px; line-height:16px; font-weight: normal; width: 33%;">ROSEDALE PRODUCTS, INC.<br />
CORPORATE HQ, USA</a></div>

<div style="text-align: left; vertical-align: top;">
<p>3730 West Liberty Road<br />
Ann Arbor, MI 48103</p>

<p>P.O. Box 1085<br />
Ann Arbor, MI 48106</p>

<p>Toll Free: 800.821.5373<br />
Phone: 734.665.8201<br />
Fax: 734.665.2214</p>

<p><a href="mailto:filters@rosedaleproducts.com">Email</a></p>
</div>
</div>

<div class="col-sm-6 col-md-4">
<div scope="col" style="text-align: left; vertical-align: top;"><a href="locations" style="color:#fa4c07; font-size: 15px; line-height:16px; font-weight: normal; width: 33%;">ROSEDALE PRODUCTS, INC.<br />
TEXAS OFFICE, USA</a></div>

<div scope="col" style="color:#fa4c07; text-align: left; vertical-align: top;"><br />
<span style="font-size:15px;"><a href="locations" style="color:#fa4c07; font-size: 15px; line-height:16px; font-weight: normal; width: 33%;">BEIJING ROSEDALE FILTER<br />
SYSTEMS COMPANY, CHINA</a></span></div>
</div>

<div class="col-sm-6 col-md-4">
<div scope="col" style="text-align: left; vertical-align: top;"><a href="locations" style="color:#fa4c07; font-size: 15px; line-height:16px; font-weight: normal; width: 33%;">ROSEDALE PRODUCTS<br />
EUROPE LTD., ENGLAND</a></div>

<div scope="col" style="color:#fa4c07; text-align: left; vertical-align: top;"><br />
<span style="font-size:15px;"><a href="locations" style="color:#fa4c07; font-size: 15px; line-height:16px; font-weight: normal; width: 33%;">ROSEDALE PRODUCTS<br />
CHILE, SANTIAGO</a></span></div>
</div>
</div></div>
			<div class="footer-copyright">&copy; 2018 All Rights Reserved. Rosedale Products Inc.</div><br>
					</div>
			</div>
</div>
<script type="text/javascript">
	$('.productListTable tr:even').addClass('alt');
</script>
		</div>



	<!-- //EOF: Google Analytics MD Contib//-->
	</div> <!-- bodyWrapper //-->
    <script>
		$(function() {
			$(".magnify").evenZoom();
		});
    </script>
<div id="debug"></div>
</body>
</html>
