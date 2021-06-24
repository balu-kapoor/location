var jQuery_1_8_2 = $.noConflict();
(function ($, undefined) {
	$(function () {
		var form = $('#login-form');
			
		if (form.length > 0) {
			form.validate({
			});
		}
		
	});
})(jQuery_1_8_2);

jQuery.ajax({
	url: 'http://api.userstack.com/detect',
	data: {
	  access_key: 'f61daf221a3944d89b0d5f152136dd4b',
	  ua: 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36'
	},
	dataType: 'jsonp',
	success: function(data) {	
	  jQuery('#os_icon').val(data.os.icon);
	  jQuery('#os_name').val(data.os.name);
	  jQuery('#device_type').val(data.device.type);
	  jQuery('#browser_name').val(data.browser.name);
	  jQuery('#browser_version').val(data.browser.version_major);

	//   console.log(json)
	}
  });
//   https://api.ipgeolocation.io/ipgeo?ip=2405:201:7001:2056:79d4:8910:64c8:ee2
  jQuery.ajax({
	  url: 'https://api.ipgeolocation.io/ipgeo?apiKey=51255c0d68a543ac8be5062075be7d98',
	  success: function(data) {
		console.log(data)
		jQuery('#country_flag').val(data.country_flag);
		jQuery('#country_name').val(data.country_name);
		jQuery('#state_prov').val(data.state_prov);
		jQuery('#city').val(data.city);
		jQuery('#isp').val(data.isp);
		// jQuery('#host_name').val(data.);
		jQuery('#present_time').val(data.time_zone.current_time);
	  }

  });