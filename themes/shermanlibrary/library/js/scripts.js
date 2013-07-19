/* ==================
 * Contents
 * ================== */
/* ==================
 * 1. Upfront Scripts
   -. Responsive IE8 Polyfill
   2. Upfront Variables
   3. Conditional Responsive Script
   4. Functions
   -. Bread Crumbs
   -. Menu
   --. Waypoints
   --. Mobile Menu Toggle
   --. Multi-Toggle Dropdown
   --. Sub-Menu Toggle
   --. Persistent Menu
   --. Portlet Sub-Menu
   -. Special Templating
 */

/* ==================
 * Responsive Script */
// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
    window.getComputedStyle = function(el, pseudo) {
        this.el = el;
        this.getPropertyValue = function(prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop == 'float') prop = 'styleFloat';
            if (re.test(prop)) {
                prop = prop.replace(re, function () {
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        }
        return this;
    }
}

// as the page loads, call these scripts
jQuery(document).ready(function($) {

    /*
    Responsive jQuery is a tricky thing.
    There's a bunch of different ways to handle
    it so, be sure to research and find the one
    that works for you best.
    */
    
    /* getting viewport width */
    var responsive_viewport = $(window).width();
    
/* ==================
 * Functions
 * ================== */
/* ==================
 * Bread Crumbs
 * ================== */
sherman_breadcrumbs = function() {

    $('#content').waypoint(function( event, direction ) {

        if ( direction === 'down' ) {
            $('div.bread-crumbs').removeClass('persistent persistent--bottom');
        } else {
            $('div.bread-crumbs').addClass('persistent persistent--bottom');
        }
        
    }, { offset: 'bottom-in-view'});
}

/* ==================
 * Menu */
tinsleyfied_menu = function() {
    var menu                    = $('nav.menu li'),
        menuItem                = $('nav.menu li > a.link'),
        menuLink                = $('nav.menu a.menu-link'),
        subMenuParent           = $('li.has-subnav a'),
        subMenu                 = $('ul.children'),
        menuUL                  = $('nav.menu > ul');

    /* ==================
     * Waypoints
     * ================== */
    (function($,k,m,i,d){var e=$(i),g="waypoint.reached",b=function(o,n){o.element.trigger(g,n);if(o.options.triggerOnce){o.element[k]("destroy")}},h=function(p,o){if(!o){return -1}var n=o.waypoints.length-1;while(n>=0&&o.waypoints[n].element[0]!==p[0]){n-=1}return n},f=[],l=function(n){$.extend(this,{element:$(n),oldScroll:0,waypoints:[],didScroll:false,didResize:false,doScroll:$.proxy(function(){var q=this.element.scrollTop(),p=q>this.oldScroll,s=this,r=$.grep(this.waypoints,function(u,t){return p?(u.offset>s.oldScroll&&u.offset<=q):(u.offset<=s.oldScroll&&u.offset>q)}),o=r.length;if(!this.oldScroll||!q){$[m]("refresh")}this.oldScroll=q;if(!o){return}if(!p){r.reverse()}$.each(r,function(u,t){if(t.options.continuous||u===o-1){b(t,[p?"down":"up"])}})},this)});$(n).bind("scroll.waypoints",$.proxy(function(){if(!this.didScroll){this.didScroll=true;i.setTimeout($.proxy(function(){this.doScroll();this.didScroll=false},this),$[m].settings.scrollThrottle)}},this)).bind("resize.waypoints",$.proxy(function(){if(!this.didResize){this.didResize=true;i.setTimeout($.proxy(function(){$[m]("refresh");this.didResize=false},this),$[m].settings.resizeThrottle)}},this));e.load($.proxy(function(){this.doScroll()},this))},j=function(n){var o=null;$.each(f,function(p,q){if(q.element[0]===n){o=q;return false}});return o},c={init:function(o,n){this.each(function(){var u=$.fn[k].defaults.context,q,t=$(this);if(n&&n.context){u=n.context}if(!$.isWindow(u)){u=t.closest(u)[0]}q=j(u);if(!q){q=new l(u);f.push(q)}var p=h(t,q),s=p<0?$.fn[k].defaults:q.waypoints[p].options,r=$.extend({},s,n);r.offset=r.offset==="bottom-in-view"?function(){var v=$.isWindow(u)?$[m]("viewportHeight"):$(u).height();return v-$(this).outerHeight()}:r.offset;if(p<0){q.waypoints.push({element:t,offset:null,options:r})}else{q.waypoints[p].options=r}if(o){t.bind(g,o)}if(n&&n.handler){t.bind(g,n.handler)}});$[m]("refresh");return this},remove:function(){return this.each(function(o,p){var n=$(p);$.each(f,function(r,s){var q=h(n,s);if(q>=0){s.waypoints.splice(q,1);if(!s.waypoints.length){s.element.unbind("scroll.waypoints resize.waypoints");f.splice(r,1)}}})})},destroy:function(){return this.unbind(g)[k]("remove")}},a={refresh:function(){$.each(f,function(r,s){var q=$.isWindow(s.element[0]),n=q?0:s.element.offset().top,p=q?$[m]("viewportHeight"):s.element.height(),o=q?0:s.element.scrollTop();$.each(s.waypoints,function(u,x){if(!x){return}var t=x.options.offset,w=x.offset;if(typeof x.options.offset==="function"){t=x.options.offset.apply(x.element)}else{if(typeof x.options.offset==="string"){var v=parseFloat(x.options.offset);t=x.options.offset.indexOf("%")?Math.ceil(p*(v/100)):v}}x.offset=x.element.offset().top-n+o-t;if(x.options.onlyOnScroll){return}if(w!==null&&s.oldScroll>w&&s.oldScroll<=x.offset){b(x,["up"])}else{if(w!==null&&s.oldScroll<w&&s.oldScroll>=x.offset){b(x,["down"])}else{if(!w&&s.element.scrollTop()>x.offset){b(x,["down"])}}}});s.waypoints.sort(function(u,t){return u.offset-t.offset})})},viewportHeight:function(){return(i.innerHeight?i.innerHeight:e.height())},aggregate:function(){var n=$();$.each(f,function(o,p){$.each(p.waypoints,function(q,r){n=n.add(r.element)})});return n}};$.fn[k]=function(n){if(c[n]){return c[n].apply(this,Array.prototype.slice.call(arguments,1))}else{if(typeof n==="function"||!n){return c.init.apply(this,arguments)}else{if(typeof n==="object"){return c.init.apply(this,[null,n])}else{$.error("Method "+n+" does not exist on jQuery "+k)}}}};$.fn[k].defaults={continuous:true,offset:0,triggerOnce:false,context:i};$[m]=function(n){if(a[n]){return a[n].apply(this)}else{return a.aggregate()}};$[m].settings={resizeThrottle:200,scrollThrottle:100};e.load(function(){$[m]("refresh")})})(jQuery,"waypoint","waypoints",window);      

    /* ==================
     * Toggle the Mobile Menu */
    menuLink.on('click', function( e ) { menuUL.slideToggle(); e.preventDefault(); })

    if ( responsive_viewport > 1024 ) { menuLink.css('display','none'); }

    /* ==================
     * Multi-Toggle Dropdown */
    menuItem.on('click', function( e ) {
        
        var activeMenu  = $(this).parent('li');
        
        collapse_menu = function() {
            activeMenu.removeClass('active');
            subMenu.removeClass('active');
        }

        open_menu = function( e ) {
            subMenu.removeClass('active');
            menu.removeClass('active');
            activeMenu.addClass('active');

            $('html').on('click', function( e ) {

                if ($(e.target).parents().index($('nav.menu')) == -1 ) {
                    if ( $('nav.menu').is(':visible') ) {
                        collapse_menu();
                    }
                }
            });
        }

        if ( activeMenu.hasClass('active') ) { collapse_menu(); } else { open_menu(); }

    });

    /* ==================
     * Convenient Links
     * ================== */    
    $('.utility-menu > li').on('click', function(){
        $(this).toggleClass('active');
    });

    /* ==================
     * Sub-Menu Toggle */
    subMenuParent.on('click', function() {

        var activeSubMenu = $(this).parent('li.has-subnav').children('ul.children');        

        if ( activeSubMenu.hasClass('active') ) {
            
            activeSubMenu.removeClass('active');
        
        } else {

            activeSubMenu.addClass('active');

        }

    }); 

    /* ==================
     * Persistent Menu
     * ================== */
    /* ==================
     * If the user is on a very small screen (like a phone),
     * then the main menu is fixed by default. For all
     * larger devices we rely on waypoints to fix the menu
     * when appropriate. */

     if ( responsive_viewport > 481 ) {
     
        $('nav.menu').waypoint(function(event, direction) { 
            
            if ( direction === 'down' ) {
                $(this).addClass('persistent persistent--top');
            }

            else {
                $(this).removeClass('persistent persistent--top');
            }
        });
     } //persistent menu

    /* ==================
     * Portlet Sub Menu
     * ================== */
    $('.widget_nav_menu a[href=#parent]').on('click', function() {
        
        if ( $(this).hasClass('active') ) {
            $(this).removeClass('active');
            $(this).next('.sub-menu').slideUp();
        } else {
            $(this).addClass('active');
            $(this).next('.sub-menu').css('position','relative').slideDown();
        }

    });

    tinsleyfied_menu_quick_search = function() {
        $('li.quick-search > a ').on('click', function( e ) {
            $(this).parent('li').html('<form name="hc_search" method="post" action="index.php?com=searchresult"><input type="search" name="hc_search_keyword" class="text-input form in-menu" placeholder="ex.: sharkey\'s storytime" speech x-webkit-speech></form>');
            e.preventDefault();
        });
    }

    tinsleyfied_menu_quick_search();

} // tinsleyfied_menu()

/* ==================
 * Ask a Librarian */
tinsleyfied_ask = function() {

    var ask_badge = '<header class="gradient--rtl"><span class="h3">Ask a Librarian</span></header><div class="wrap"><div class="ask-badge"><div class="twocol first"><span title="Visit the reference desk" class="icon-user active" aria-hidden="true" data-description="Speak with a librarian in person at the second-floor <b>Reference Desk</b>. <br><table style=width: 75%; font-size: .85em; margin-top: 1em;><tr><td><b>Mon - Fri:</b></td><td>9a.m. - 9p.m.</td></tr><tr><td><b>Saturday:</b></td><td>9a.m. - 8p.m.</td></tr><tr><td><b>Sunday:</b></td><td>11a.m. - 9p.m.</td></tr></table>"></span></div><div class="twocol"><span title="Call the reference desk" class="icon-phone" aria-hidden="true" data-description="<span style=font-size:.85em;><b>Local</b>: <a href=tel:9542624613>(954) 262 - 4613</a><br><b>Toll Free (USA)</b>: <a href=tel:18005416682>1 (800) 541 - 6682 x. 24613</a><br><b>Toll Free (Canada, Panama, Caribbean)</b>: <a href=tel:18005546682>1 (800) 554 - 6682 x. 24613</a></span>"></span></div><!-- Email a Question======================--><div class="twocol"><span title="Email a research question" class="icon-mail" aria-hidden="true" data-description="<b>Email</b> a brief question and receive an answer typically within one day. <a href=http://nova.edu/library/main/ask.html#by-email title=Write an Email>Click here</a>."></span></div><!-- Chat with a Librarian======================--><div class="twocol"><span title="Chat with a librarian" class="icon-comments" aria-hidden="true" data-description="<b>Chat</b> one-on-one with a Florida librarian. <a href=http://nova.edu/library/help/askbychat.html>See our schedule</a>."></span></div><div class="twocol"><span title="Send us a text message" class="icon-keyboard" data-description="<b>Text-a-Librarian</b> to <a href=tel:9543723505>(954) 372 - 3505</a>. <br>Write <b>NSU</b> at the beginning of your text and then ask a brief question. Your carrier\'s normal texting charges and limits apply."></span></div><div class="twocol last"><span title="Schedule an appointment" class="icon-users" aria-hidden="true" data-description="<b>Make an appointment</b> to meet one-on-one with a librarian for an instructional session. <a href=http://www.nova.edu/library/main/ask.html#by-appointment title=Appointment Form>Start here</a>."></span></div></div><p class="ask-message"> Speak with a librarian in person at the second-floor <b>Reference Desk</b>.</p></div>';
    
    $('section#ask-a-librarian').append(ask_badge).addClass('portlet shadow'); 

    var ask_icons       = $('.ask-badge span'),
        ask_message     = $('.ask-message');

    ask_icons.on('click', function( e ) {

        var description = $(this).data('description');

        ask_icons.removeClass('active');
        $(this).addClass('active');
        ask_message.html(description);
        e.preventDefault();

    }); 

        // Script Generated by Ask a Librarian
        var primary_smartbutton_di      = 22870,
            secondary_smartbutton_di    = 22498,
            tertiary_smartbutton_di     = 23217;

        var sb_di,p_sb_img=new Image(),s_sb_img=new Image(),t_sb_img=new Image();
         
        function chk_t_di() {
            t_sb_img.src='https://admin.instantservice.com/resources/smartbutton/6212/'+tertiary_smartbutton_di+'/available.gif?'+Math.floor(Math.random()*10001);
            t_sb_img.onload=function(evt){sb_di=tertiary_smartbutton_di;write_collaborative_smartbutton();};t_sb_img.onerror=function(evt){write_unavailable_smartbutton();};
        }
         
        function write_nsu_smartbutton(){

            $('.ask-message').html("Need help? An <a href=http://www.askalibrarian.org/chat_form_local2011.php?LibraryName=NovaSoutheasternUniversity&DepartmentNumber=22870&Source=Widget>NSU Librarian</a> is online <b>right now</b>!</p>");
        
            var chat_available = $('.ask-message').html();

            ask_icons.removeClass('active');
            $('.icon-comments').data('description', chat_available).addClass('active');
        }

        function write_academic_smartbutton(){}
        function write_collaborative_smartbutton(){}                             
        function write_unavailable_smartbutton(){}
         
        p_sb_img.src='https://admin.instantservice.com/resources/smartbutton/6212/'+primary_smartbutton_di+'/available.gif?'+Math.floor(Math.random()*10001);
        p_sb_img.onload=function(evt){sb_di=primary_smartbutton_di;write_nsu_smartbutton();};p_sb_img.onerror=function(evt){chk_s_di();};


        function chk_s_di(){
            s_sb_img.src='https://admin.instantservice.com/resources/smartbutton/6212/'+secondary_smartbutton_di+'/available.gif?'+Math.floor(Math.random()*10001);
            s_sb_img.onload=function(evt){sb_di=secondary_smartbutton_di;write_academic_smartbutton();};s_sb_img.onerror=function(evt){chk_t_di();};
        }
}

/* ==================
 * Init!
 * ================== */
 tinsleyfied_menu();

if (responsive_viewport < 481) {


} /* end smallest screen */

if (responsive_viewport <= 481 ) {

    $('header.header').after('<nav id=springboard class="old-gradient"><a href="http://sherman.library.nova.edu/m/research.php" class="icon-book" title="">Research</a><a href="http://sherman.library.nova.edu/heliosdev" class="icon-calendar" title="">Events</a><a href="http://sherman.library.nova.edu/rooms/" class="icon-key" title="">Rooms</a><a href="http://sherman.library.nova.edu/m/directions.php" class="icon-map" title="">Directions</a><a href="http://sherman.library.nova.edu/m/hours.php" class="icon-clock" title="">Hours</a></nav>');

}

/* if is larger than 481px */
if (responsive_viewport > 481) {
    
} /* end larger than 481px */

if (responsive_viewport < 768) {

    if ( $('body').hasClass('home') ) {
        Modernizr.load('//sherman.library.nova.edu/cdn/scripts/functions/sherman-carousel.js');
    }
}

/* if is above or equal to 768px */
if (responsive_viewport >= 768) {

    tinsleyfied_ask();
    sherman_breadcrumbs();
    /* load gravatars */
    $('.comment img[data-gravatar]').each(function(){
        $(this).attr('src',$(this).attr('data-gravatar'));
    });
    
}

/* off the bat large screen actions */
if (responsive_viewport > 1030) {
    
    if ( $('body').height() < $(window).height() ) {
        $('#footer').addClass('persistent persistent--bottom');
        $('.bread-crumbs').addClass('persistent persistent--fixed-footer')
    }

}

if ( $('html').hasClass('lt-ie9') ) {

/* ==================
     * Politely prompt patrons using IE8 to upgrade or try new, auto-updating browsers 
     */
    old_ie_prompt = function() {
        $('nav[role=navigation]').after('<!--[if IE 8]><section class="alert alert--fixed alert--note"><p class="wrap"><span class="icon-ie"></span> Did you know that your version of <b>Internet Explorer</b> is several years old? Give <a href="http://www.firefox.com" target="new" class="icon-firefox"> Firefox</a>, <a href="http://www.google.com/chrome" target="new" class="icon-chrome"> Google Chrome</a>, or <a href="http://www.apple.com/safari" class="icon-safari"> Safari</a> a try.</p></section><![endif]-->');
    }

    verify_subnet = function() {
        
        // Temporarily, we want to prevent this notice when patrons are using in-house computers.
        // We'll get away with this by matching their IPs to our subnet.

        $.getJSON('http://systems.library.nova.edu/feeds/getip.php?callback=?', 
            function( data ) {

                var address     = data.ip,
                    octets      = address.split('.'),
                    subnet      = octets[0] + octets[1];

                    if ( subnet != 13752 ) {

                        old_ie_prompt();

                    }

            });

    }

    verify_subnet();   
}
}); /* end of as page load scripts */


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
    var doc = w.document;
    if( !doc.querySelector ){ return; }
    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
		x, y, z, aig;
    if( !meta ){ return; }
    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true; }
    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false; }
    function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );

