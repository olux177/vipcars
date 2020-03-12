"use strict";

jQuery(function($){
	
	var default_theme=1;
	var active_theme=default_theme;
	var $css_link=$('#omfw-style-custom-css');
	var default_css=$css_link.attr('href');
	var $logo_img=$('.header__logo .non-retina');
	var default_logo_img=$logo_img.attr('src');
	var $logo_img2x=$('.header__logo .only-retina');
	var default_logo_img2x=$logo_img2x.attr('src');

	var activate_theme=function(theme, no_cookie) {
		if(theme != active_theme) {
			if(theme == default_theme) {
				$css_link.attr('href',default_css);
				$logo_img.attr('src',default_logo_img);
				$logo_img2x.attr('src',default_logo_img2x);
			} else {
				$css_link.attr('href',om_theme_preview_url+'css/c'+theme+'-style-custom.css');
				$logo_img.attr('src',om_theme_preview_url+'img/c'+theme+'-logo.png');
				$logo_img2x.attr('src',om_theme_preview_url+'img/c'+theme+'-logo@2x.png');
			}
			active_theme=theme;
			if(no_cookie != true) {
				document.cookie='om_theme_preview_site_'+om_theme_preview_site_id+'='+theme+';path=/wheelsberry/';
			}
		}
	}
	
	var $div=$('<div class="om-theme-preview"><div class="om-theme-preview-control"></div><div class="om-theme-preview-inner"><div class="om-theme-preview-title">Color Presets</div><a href="#" class="item-1 active" data-theme="1"></a><a href="#" class="item-2" data-theme="2"></a><a href="#" class="item-3" data-theme="3"></a><a href="#" class="item-4" data-theme="4"></a><a href="#" class="item-5" data-theme="5"></a><a href="#" class="item-6" data-theme="6"></a></div></div>');
	
	$div.find('a').click(function(){
		$div.find('a').removeClass('active');
		$(this).addClass('active');

		var theme=$(this).data('theme');
		activate_theme(theme, true);
		return false;
	});
	
	$div.find('.om-theme-preview-control').click(function(){
		$div.toggleClass('active');
	});
	
	$div.mouseleave(function(){
		$(this).removeClass('active');
	});
	
	$('body').append($div);
	
});