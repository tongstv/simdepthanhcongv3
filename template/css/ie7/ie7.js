/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-sbg': '&#xe929;',
		'icon-home': '&#xe900;',
		'icon-home2': '&#xe901;',
		'icon-home3': '&#xe902;',
		'icon-podcast': '&#xe903;',
		'icon-price-tag': '&#xe92a;',
		'icon-price-tags': '&#xe92b;',
		'icon-cart': '&#xe904;',
		'icon-credit-card': '&#xe92c;',
		'icon-phone': '&#xe905;',
		'icon-phone-hang-up': '&#xe906;',
		'icon-printer': '&#xe907;',
		'icon-display': '&#xe908;',
		'icon-laptop': '&#xe909;',
		'icon-mobile': '&#xe90a;',
		'icon-mobile2': '&#xe90b;',
		'icon-tablet': '&#xe90c;',
		'icon-tv': '&#xe90d;',
		'icon-undo': '&#xe90e;',
		'icon-redo': '&#xe90f;',
		'icon-undo2': '&#xe910;',
		'icon-user': '&#xe911;',
		'icon-user-check': '&#xe92d;',
		'icon-hour-glass': '&#xe92e;',
		'icon-spinner': '&#xe92f;',
		'icon-spinner3': '&#xe930;',
		'icon-spinner6': '&#xe912;',
		'icon-spinner9': '&#xe931;',
		'icon-search': '&#xe932;',
		'icon-zoom-in': '&#xe913;',
		'icon-zoom-out': '&#xe914;',
		'icon-lock': '&#xe933;',
		'icon-unlocked': '&#xe934;',
		'icon-accessibility': '&#xe935;',
		'icon-target': '&#xe936;',
		'icon-menu': '&#xe915;',
		'icon-menu2': '&#xe937;',
		'icon-menu3': '&#xe938;',
		'icon-menu4': '&#xe939;',
		'icon-flag': '&#xe922;',
		'icon-bookmark': '&#xe923;',
		'icon-bookmarks': '&#xe924;',
		'icon-star-full': '&#xe93a;',
		'icon-plus': '&#xe916;',
		'icon-minus': '&#xe917;',
		'icon-cross': '&#xe918;',
		'icon-checkmark': '&#xe919;',
		'icon-checkmark2': '&#xe91a;',
		'icon-arrow-up': '&#xe91b;',
		'icon-arrow-right': '&#xe91c;',
		'icon-arrow-down': '&#xe91d;',
		'icon-circle-up': '&#xe91e;',
		'icon-circle-right': '&#xe91f;',
		'icon-circle-down': '&#xe920;',
		'icon-circle-left': '&#xe921;',
		'icon-checkbox-checked': '&#xe925;',
		'icon-checkbox-unchecked': '&#xe926;',
		'icon-paragraph-right': '&#xe93b;',
		'icon-paragraph-justify': '&#xe93c;',
		'icon-indent-increase': '&#xe93d;',
		'icon-indent-decrease': '&#xe93e;',
		'icon-mail': '&#xe93f;',
		'icon-mail2': '&#xe940;',
		'icon-mail3': '&#xe941;',
		'icon-mail4': '&#xe942;',
		'icon-google': '&#xe943;',
		'icon-google2': '&#xe944;',
		'icon-google3': '&#xe945;',
		'icon-google-plus': '&#xe946;',
		'icon-google-plus2': '&#xe947;',
		'icon-google-plus3': '&#xe948;',
		'icon-facebook': '&#xe949;',
		'icon-facebook2': '&#xe94a;',
		'icon-rss': '&#xe94b;',
		'icon-rss2': '&#xe94c;',
		'icon-youtube': '&#xe94d;',
		'icon-youtube2': '&#xe94e;',
		'icon-windows': '&#xe927;',
		'icon-windows8': '&#xe928;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
