/* Use this script if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-home' : '&#x21;',
			'icon-office' : '&#x22;',
			'icon-camera' : '&#x23;',
			'icon-music' : '&#x24;',
			'icon-headphones' : '&#x25;',
			'icon-play' : '&#x26;',
			'icon-film' : '&#x27;',
			'icon-connection' : '&#x28;',
			'icon-podcast' : '&#x29;',
			'icon-feed' : '&#x2a;',
			'icon-book' : '&#x2b;',
			'icon-books' : '&#x2c;',
			'icon-library' : '&#x2d;',
			'icon-qrcode' : '&#x2e;',
			'icon-barcode' : '&#x2f;',
			'icon-credit' : '&#x30;',
			'icon-cart' : '&#x31;',
			'icon-support' : '&#x32;',
			'icon-map' : '&#x33;',
			'icon-keyboard' : '&#x34;',
			'icon-screen' : '&#x35;',
			'icon-laptop' : '&#x36;',
			'icon-bubbles' : '&#x37;',
			'icon-bubbles-2' : '&#x38;',
			'icon-bubbles-3' : '&#x39;',
			'icon-bubbles-4' : '&#x3a;',
			'icon-users' : '&#x3b;',
			'icon-quotes-left' : '&#x3c;',
			'icon-bars' : '&#x3d;',
			'icon-stats' : '&#x3e;',
			'icon-leaf' : '&#x3f;',
			'icon-link' : '&#x40;',
			'icon-safari' : '&#x41;',
			'icon-opera' : '&#x42;',
			'icon-IE' : '&#x43;',
			'icon-firefox' : '&#x44;',
			'icon-chrome' : '&#x45;',
			'icon-code' : '&#x46;',
			'icon-untitled' : '&#x47;',
			'icon-untitled-2' : '&#x48;',
			'icon-untitled-3' : '&#x49;',
			'icon-untitled-4' : '&#x4a;',
			'icon-untitled-5' : '&#x4b;',
			'icon-untitled-6' : '&#x4c;',
			'icon-untitled-7' : '&#x4d;',
			'icon-untitled-8' : '&#x4e;',
			'icon-untitled-9' : '&#x4f;',
			'icon-untitled-10' : '&#x50;',
			'icon-untitled-11' : '&#x51;',
			'icon-untitled-12' : '&#x52;',
			'icon-untitled-13' : '&#x53;',
			'icon-untitled-14' : '&#x54;',
			'icon-untitled-15' : '&#x55;',
			'icon-untitled-16' : '&#x56;',
			'icon-untitled-17' : '&#x57;',
			'icon-untitled-18' : '&#x58;',
			'icon-untitled-19' : '&#x59;',
			'icon-untitled-20' : '&#x5a;',
			'icon-untitled-21' : '&#x5b;',
			'icon-untitled-22' : '&#x5c;',
			'icon-untitled-23' : '&#x5d;',
			'icon-untitled-24' : '&#x5e;',
			'icon-untitled-25' : '&#x5f;',
			'icon-untitled-26' : '&#x60;',
			'icon-untitled-27' : '&#x61;',
			'icon-untitled-28' : '&#x62;',
			'icon-untitled-29' : '&#x63;',
			'icon-untitled-30' : '&#x64;',
			'icon-untitled-31' : '&#x65;',
			'icon-untitled-32' : '&#x66;',
			'icon-untitled-33' : '&#x67;',
			'icon-untitled-34' : '&#x68;',
			'icon-untitled-35' : '&#x69;',
			'icon-untitled-36' : '&#x6a;',
			'icon-untitled-37' : '&#x6b;',
			'icon-untitled-38' : '&#x6c;',
			'icon-untitled-39' : '&#x6d;',
			'icon-untitled-40' : '&#x6e;',
			'icon-untitled-41' : '&#x6f;',
			'icon-untitled-42' : '&#x70;',
			'icon-untitled-43' : '&#x71;',
			'icon-untitled-44' : '&#x72;',
			'icon-untitled-45' : '&#x73;',
			'icon-untitled-46' : '&#x74;',
			'icon-untitled-47' : '&#x75;',
			'icon-untitled-48' : '&#x76;',
			'icon-untitled-49' : '&#x77;',
			'icon-untitled-50' : '&#x78;',
			'icon-untitled-51' : '&#x79;',
			'icon-untitled-52' : '&#x7a;',
			'icon-untitled-53' : '&#x7b;',
			'icon-untitled-54' : '&#x7c;',
			'icon-untitled-55' : '&#x7d;',
			'icon-untitled-56' : '&#x7e;',
			'icon-untitled-57' : '&#x2190;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; i < els.length; i += 1) {
		el = els[i];
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};