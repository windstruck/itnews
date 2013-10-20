/*****************************************************************
*	Copyright(c) 2012 @Kuro 
*-----------------------------------------------------------------
*	File Name: plugins.js
*-----------------------------------------------------------------
*	Plug-ins:
*		$.MyPage
*		$.ChangeFontSize
*		$.StyleSwitchBg
*		$.SetupPlaceholder
*		$.TabSwicth
*		$.TopNewsList
*		$.TopPhoto
*		$.EventCalendar
*		$.PageRanking
*		$.PageUpPage
*		$.AdBannerListAndCount
*		$.Counter
/****************************************************************/
(function($) {
/*----------------------------------------------------------------
						My Page
*---------------------------------------------------------------*/
$.fn.MyPage = function(opts) {
	var opts = $.extend({
					content: this,
					cookie_name: '',
					site_url: 'index.html',
					fade: 500
				}, opts);
	
	var $content = (opts.content == this) ? $(this) : $(this).find(opts.content);
	var site_url = opts.site_url;
	var cookie_name = opts.cookie_name;
	var fade = opts.fade;
	
	return this.each(function() {
		var file_name = GetFileName();
		var url_array = $.cookie(cookie_name) ? $.cookie(cookie_name).split(',') : [];
		var file_name_array = [];
		
		for( var i=0; i<url_array.length; i++ ) {
			if( url_array[i] == site_url ) {
				var path = 'index.html';
				file_name_array.push(path);
			} else {
				var path = url_array[i].split('/');
				file_name_array.push(path.pop());
			}
		}
		
		$.ajax({
			type: 'POST',
			url: site_url + 'json_data/jsonp_mypage.php',
			data: {
				get_type: 'list',
				file_name: file_name_array
			},
			dataType: 'jsonp'
		})
		.done(function(data) {
			GetMyPageList(data);
		})
		.always(function() {
			$content
				.on('mouseover', 'li', function() {
					$(this).children('span').show();
				})
				.on('mouseout', 'li', function() {
					$(this).children('span').hide();
			});
			
			$content.on('click', 'span', function() {
				var idx = $(this).parent().index();
				url_array.splice(idx, 1);
				$(this).parent().remove();
				
		        var date = new Date();
		        date.setTime(date.getTime() + (365*24*60*60*1000));
				$.cookie(cookie_name, url_array.join(','), { path: '/', expires: date });
				CheckMyPage();
				
				return false;
			});
			
			$(document).on('click', '#btn_MyPage', function() {
				if( !CheckMyPage() ) {
					$.ajax({
						type: 'POST',
						url: site_url + 'json_data/jsonp_mypage.php',
						data: {
							get_type: 'confirm',
							file_name: file_name
						},
						dataType: 'jsonp'
					})
					.done(function(data) {
						var title = data.response.title;
						var url = data.response.url;
						
						if( title && url ) {
					        var date = new Date();
					        date.setTime(date.getTime() + (365*24*60*60*1000));
							url_array.unshift(url);
							$.cookie(cookie_name, url_array.join(','), { path: '/', expires: date });
							
							if( !$content.children('ul').length ) {
								$content.prepend('<ul>');
							}
							$content.children('ul').prepend('<li><a href="' + url + '">' + title + '</a><span title="『' + title + '』をマイページから削除します">削除</span></li>');
							CheckMyPage();
						}
					});
				}
				
				return false;
			});
		});
		
		function CheckMyPage() {
			var local_url = location.href;
			
			if( !url_array.length ) {
				if( $content.children('ul').length ) {
					$content.children('ul').remove();
				}
				if( !$content.children('p').length ) {
					$content.prepend('<p>登録されているページはありません。</p>');
				}
			} else {
				$content.children('p').remove();
			}
			
			if( $.inArray(local_url, url_array) != -1 ) {
				$('#btn_MyPage').attr('id', 'btn_registered').children('a').removeAttr('href').text('このページは登録済みです');
				return 1;
			} else {
				$('#btn_registered').attr('id', 'btn_MyPage').children('a').attr('href', '#').text('このページを登録する');
				return 0;
			}
		}
		
		function GetMyPageList(data) {
			var data = data.response;
			var html = '';
						
			if( data.length ) {
				html += '<ul>';
				for( var i=0; i<data.length; i++ ) {
					html += '<li><a href="' + data[i].url + '">' + data[i].title  + '</a><span title="『' + data[i].title + '』をマイページから削除します">削除</span></li>';
				}
				html += '</ul>';
				$content.prepend(html);
			}
			
			CheckMyPage();
			$content.children().hide().fadeIn(fade);
		}
	});
};

/*----------------------------------------------------------------
						Font Size Change
*---------------------------------------------------------------*/
$.fn.ChangeFontSize = function(opts) {
	var opts = $.extend({
					max_value: 0,
					zoom_value: 0,
					cookie_name: ''
				}, opts);
	
	return this.each(function() {
		var elm = this;
		var default_font = $(elm).css('font-size');
		
		$('#df').click(function() {
			$(elm).css('font-size', default_font);
			$.cookie(opts.cookie_name, default_font, {
				path: '/',
				expires: 365
			});
			return false;
		});
		
		$(elm).css('font-size', $.cookie(opts.cookie_name));
		$('#zf').click(function() {
			var zoom_font = parseInt(($(elm).css('font-size')).replace(/px/, ''));
			if( zoom_font != opts.max_value ) {
				zoom_font += opts.zoom_value;
			}
			$(elm).css('font-size', zoom_font + 'px');
			$.cookie(opts.cookie_name, zoom_font + 'px', {
				path: '/',
				expires: 365
			});
			return false;
		});
	});
};

/*----------------------------------------------------------------
					Background Color Change
*---------------------------------------------------------------*/
$.fn.StyleSwitchBg = function(opts) {
	var opts = $.extend({
					site_url: 'index.html',
					cookie_name: ''
				}, opts);
	
	var site_url = opts.site_url;
	
	return this.find('a').each(function() {
		$('#cssBg').attr({href: $.cookie(opts.cookie_name)});
		$(this).click(function() {
			var cssurl = site_url + $(this).attr('href');
			cssurl = cssurl.replace(/\.\.\//, '');
			$('#cssBg').attr({href: cssurl});
			$.cookie(opts.cookie_name, cssurl, {
				path: '/',
				expires: 365
			});
			return false;
		});
	});
};
	
/*----------------------------------------------------------------
						Placeholder
*---------------------------------------------------------------*/
$.fn.SetupPlaceholder = function() {
	return this.each(function() {
		var input = $(this),
			title = input.attr('title'),
			edited = false;

		input.bind('focus', function(e) {
			if( !edited && input.val() == title ) {
				input.val('');
			}
			
			input.removeClass('off').addClass('on');
			edited = true;
		}).bind('blur', function(e) {
			if( input.val() == '' || ( !edited && input.val() == title ) ) {
				input.removeClass('on').addClass('off');
				input.val(title);
				edited = false;
			}
		}); 

		input.parents('form').submit(function() {
			if( !edited && input.val() == title ) {
				input.val('');
			}
		}); 

		input.trigger('blur');
	});
};
/*----------------------------------------------------------------
						Tab Switch
*---------------------------------------------------------------*/
$.fn.TabSwitch = function(opts) {
	var opts = $.extend({
					active_tab: 0
				}, opts);
				
	var active_tab = opts.active_tab;
	
	return this.each(function() {
		$tab = $(this).find('.tab li');
		$tab.eq(active_tab).addClass('active');
		
		$tab.click(function() {
			$tab.removeClass('active');
			$(this).addClass('active');
			$('.area').hide();
			$($(this).find('a').attr('href')).fadeIn();
			return false;
		});
	});
};

/*----------------------------------------------------------------
						Top News List
*---------------------------------------------------------------*/
$.fn.TopNewsList = function(opts) {	
	var opts = $.extend({
					site_url: 'index.html',
					fade: 500
				}, opts);
	
	var $content;
	var site_url = opts.site_url;
	var fade = opts.fade;
			
	return this.each(function() {
		$.ajax({
			type: 'POST',
			url: site_url + 'json_data/jsonp_topnews.php',
			dataType: 'jsonp'
		})
		.done(function(data) {
			GetTopNewsList(data);
		});
		
		function GetTopNewsList(data) {
			var data = data.response;
			var new_icon = NewIcon();
			var decorate = DecorateIcon();
			
			if( data.length ) {
				for( var i=0; i<data.length; i++ ) {
				
					var html = '';
					
					switch( data[i].category ) {
						case 0:
							$content = $('#newsKurashi');
							break;
						case 1:
							$content = $('#newsKankou');
							break;
						case 2:
							$content = $('#newsJigyou');
							break;
						case 3:
							$content = $('#newsChousei');
							break;
					}
					
					if( data[i].news_list.length ) {
						html += '<dl>';
						for( var j=0; j<data[i].news_list.length; j++ ) {
							html += '<dt>' + data[i].news_list[j].update + '</dt>';
							html += '<dd>';
							html += '<a href="' + data[i].news_list[j].url +'">' + data[i].news_list[j].title + '</a>';
							html += (data[i].news_list[j].new_flag == 1) ? new_icon : '';
							html += (data[i].news_list[j].decorate_flag != 0) ? decorate[data[i].news_list[j].decorate_flag] : ''; 
							html += '</dd>';
						}
						html += '</dl>';
					} else {
						html += '<p>お知らせはありません。</p>';
					}
					
					$content.prepend(html).children('dl').hide().fadeIn(fade);
				}
			}
		}
		
	});
};

/*----------------------------------------------------------------
						Top Photo
*---------------------------------------------------------------*/
$.fn.TopPhoto = function(opts) {
	var opts = $.extend({
					content: this,
					site_url: 'index.html',
					fade: 500
				}, opts);
	
	var $content = (opts.content == this) ? $(this) : $(this).find(opts.content);
	var site_url = opts.site_url;
	var fade = opts.fade;
	
	return this.each(function() {
		$.ajax({
			type: 'POST',
			url: site_url + 'json_data/jsonp_topphoto.php',
			dataType: 'jsonp'
		})
		.done(function(data) {
			GetTopPhoto(data);
		});
		
		function GetTopPhoto(data) {
			var data = data.response;
			var html = '';
			
			if( data.topphoto_src && data.topphoto_title ) {
				html += '<div class="photo">';
				html += '<img src="' + data.topphoto_src + '" alt="' + data.topphoto_title + '" />';
				html += '</div>';
				html += '<div class="article">';
				html += '<h3>' + data.topphoto_title + '</h3>';
				html += '<span class="date">' + data.update + '</span>';
				html += '<div class="sentence">' + data.sentence + '</div>';
				html += '</div>';
			} else {
				html += '<p>記事はありません。</p>';
			}
			
			$content.append(html).children().hide().fadeIn(fade);
		}
		
	});
};

/*----------------------------------------------------------------
						Event Calendar
*---------------------------------------------------------------*/
$.fn.EventCalendar = function(opts) {
	var opts = $.extend({
					site_url: 'index.html',
					content: this,
					fade: 500
				}, opts);
	
	var $content = (opts.content == this) ? $(this) : $(this).find(opts.content);
	var site_url = opts.site_url;
	var fade = opts.fade;
	
	return this.each(function() {
		$.ajax({
			type: 'POST',
			url: site_url + 'json_data/jsonp_calendar.php',
			dataType: 'jsonp'
		})
		.done(function(data) {
			GetEventCalendar(data);
		});
		
		function GetEventCalendar(data) {
			var year = data.response.year;
			var month = data.response.month;
			var month_en = GetMonthEn(parseInt(month));
			var today = data.response.today;
			var days = data.response.days;
			var start_week = parseInt(data.response.start_week);
			var rows = Math.ceil((start_week + parseInt(days.length)) / 7);
			var days_index = 0;
			var html = '';
			
			if( year && month && days ) {
				html += '<div class="caption">';
				html += '<div class="year">' + year + '</div>';
				html += '<div class="month">' + month + '<span>' + month_en + '</span></div>';
				html += '</div>';
				html += '<ul class="week"><li class="sun">SUN</li><li>MON</li><li>TUE</li><li>WED</li><li>THU</li><li>FRI</li><li class="sat">SAT</li></ul>';
				html += '<div class="date">';
				
				for( var i=0; i<rows; i++ ) {
					for( var j=0; j<7; j++ ) {
						if( ((i == 0) && (j < start_week)) || ((i == rows -1) && (days.length <= days_index)) ) {
							html += '<div class="nodata"><span>&nbsp;</span></div>';
						} else {
							if( days[days_index].date == '1' ) {
								html += '<ul>';
							}
								
							var week_class = '';
							
							if( days[days_index].national != '' ) {
								week_class = 'national';
							} else if(days_index + 1 == today) {
								week_class = 'today';
							}
							
							week_class = (week_class != '') ? week_class + ' ' : '';
							
							switch( j ) {
								case 0:
									week_class = week_class + 'sun';
									break;
								case 6:
									week_class = week_class + 'sat';
									break;						
							}
							
							date = (days[days_index].url != '') ? '<a href="' + days[days_index].url + '">' + days[days_index].date + '</a>' : days[days_index].date;
							html += (week_class != '') ? '<li class="' + week_class + '">' + date + '</li>' : '<li>' + date + '</li>';
							
							if( days[days_index].date == days.length ) {
								html += '</ul>';
							}	
							
							days_index += 1;
						}
					}
				}
				html += '</div>';
			}
			
			$content.prepend(html).children().hide().fadeIn(fade);
		}
		
		
		$(document)
			.on('mouseover', '.date > dl > dd > span', function() {
				var $tips = $content.find('.date > dl > dd > div');
				var pos = ($(this).position().top - 12) - $(this).next('div').innerHeight();
				
				$tips.removeClass('show').fadeOut('fast');
				var $this_tips = $(this).next('div');
				$this_tips.css('top', pos).addClass('show').fadeIn('fast');
				
				var timer = setTimeout(function() {
								$tips.removeClass('show').fadeOut('fast');
							}, 3000);
				
				$this_tips
					.on('mouseover', function() {
						clearTimeout(timer);
						
						$this_tips.on('mouseleave', function() {
							setTimeout(function() {
								$this_tips.removeClass('show').fadeOut('fast');
							}, 100);
						})
					});
			});
			
			
				
		function GetMonthEn(month) {
			en = new Array('none', 'JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC');
			return en[month];
		}
	});
};

/*----------------------------------------------------------------
						Page Ranking
*---------------------------------------------------------------*/
$.fn.PageRanking = function(opts) {
	var opts = $.extend({
					content: this,
					site_url: 'index.html',
					fade: 500
				}, opts);
		
	var $content = (opts.content == this) ? $(this) : $(this).find(opts.content);
	var site_url = opts.site_url;
	var fade = opts.fade;
				
	return this.each(function() {
		$.ajax({
			type: 'POST',
			url: site_url + 'json_data/jsonp_ranking.php',
			dataType: 'jsonp'
		})
		.done(function(data) {
			GetPageRanking(data);
		});
		
		function GetPageRanking(data) {
			var data = data.response;
			var html = '';
			var rank_id;
			
			if( data.length ) {
				html += '<ul>';
				for( var i=0; i<data.length; i++ ) {
					html += '<li id="rank' + data[i].rank + '"><a href="' + data[i].url + '" title="『' + data[i].title + '』のページに移動します">' + data[i].title + '</a></li>';
				}
				html += '</ul>';
			} else {
				html += '<p>集計中です。</p>';
			}
			
			$content.prepend(html).children().hide().fadeIn(fade);
		}
		
	});
};

/*----------------------------------------------------------------
						Pick Up Page
*---------------------------------------------------------------*/
$.fn.PickUpPage = function(opts) {
	var opts = $.extend({
					content: this,
					site_url: 'index.html',
					fade: 500
				}, opts);
	
	var $content = (opts.content == this) ? $(this) : $(this).find(opts.content);
	var site_url = opts.site_url;
	var fade = opts.fade;
	
	return this.each(function() {
		$.ajax({
			type: 'POST',
			url: site_url + 'json_data/jsonp_pickup.php',
			dataType: 'jsonp'
		})
		.done(function(data) {
			GetPickUpPage(data);
		});
		
		function GetPickUpPage(data) {
			var data = data.response;
			var html = '';
			if( data.length ) {
				html += '<ul>';
				for( var i=0; i<data.length; i++ ) {
					html += ( i % 2 != 0 ) ? '<li class="cs_bg">' : '<li>';
					html += '<a href="' + data[i].url + '" title="『' + data[i].title + '』のページに移動します">' + data[i].title + '</a>';
					html += '</li>';
				}
				html += '</ul>';
			} else {
				html += '<p>準備中です。</p>';
			}
			
			$content.prepend(html).children().hide().fadeIn(fade);
		}
		
	});
};

/*----------------------------------------------------------------
						Print Dialog
*---------------------------------------------------------------*/
$.fn.PrintDialog = function() {
	return this.each(function() {
		$(this).children('a').click(function(){
			window.print();
			return false;
		});
	});
};
	
/*----------------------------------------------------------------
						Top Of Page
*---------------------------------------------------------------*/
$.fn.TopOfPage = function() {
	return this.each(function() {
		$(this).children('a').click(function(){
			$('html, body').animate({scrollTop: $($(this).attr('href')).offset().top }, 'slow', 'swing');
			return false;
		});
	});
};

/*----------------------------------------------------------------
				Ad Banner List And Count
*---------------------------------------------------------------*/
$.fn.AdBannerListAndCount = function(opts) {
	var opts = $.extend({
					content: this,
					pickup: '#idName',
					site_url: 'index.html',
					fade: 500
				}, opts);
				
	var $content = (opts.content == this) ? $(this) : $(this).find(opts.content);
	var $pickup = $(opts.pickup);
	var site_url = opts.site_url;
	var fade = opts.fade;
	
	return this.each(function() {
		$.ajax({
			type: 'POST',
			url: site_url + 'json_data/jsonp_banner.php',
			dataType: 'jsonp'
		})
		.done(function(data) {
			GetAdBannerList(data);
		})
		.always(function() {
			$content.on('click', 'a', AdBannerCountUp);
			$pickup.on('click', 'a', AdBannerCountUp);
		});
		
		function GetAdBannerList(data) {
			var data = data.response;
			var html = '';
			
			if( data.length ) {
				html += '<ul>';
				for( var i=0; i<data.length; i++ ) {
					html += (data[i].text_flag) == 0 ? '<li>' : '<li class="bnrtext">';
					html += data[i].bnr_tag;
					html += '</li>';
				}
				html += '</ul>';
				
				if( $pickup.length ) {
					var pickup_data = data[0];
					if( pickup_data.text_flag == 0 ) {
						$pickup.append(pickup_data.bnr_tag);
					} else {
						$pickup.append('<div class="bnrtext">' + pickup_data.bnr_tag + '</div>');
					}
				}
			}
			
			$content.prepend(html).hide().fadeIn(fade);
		}
		
		function AdBannerCountUp() {
			var ad_id = $(this).data('ad_id');
			if( typeof ad_id != 'undefined' ) {
				$.ajax({
					type: 'POST',
					url: site_url + 'json_data/jsonp_banner.php',
					dataType: 'jsonp',
					data: {
						ad_id: ad_id
					}
				});
			}
		}
	});
};

/*----------------------------------------------------------------
						Counter
*---------------------------------------------------------------*/
$.fn.Counter = function(opts) {
	var opts = $.extend({
					content: this,
					site_url: 'index.html'
				}, opts);
	
	var $content = (opts.content == this) ? $(this) : $(this).find(opts.content);
	var site_url = opts.site_url;
	
	return this.each(function() {
		var type = $('body').data('type');
		var code = $('body').data('code');
		
		$.ajax({
			type: 'POST',
			url: site_url + 'count.php',
			data: {
				type: type,
				code: code
			}
		})
		.done(function() {
			if( code != 1 ) {
				$.ajax({
					type: 'POST',
					url: site_url + 'json_data/jsonp_counter.php',
					dataType: 'jsonp',
					data: {
						type: type,
						code: code
					}
				})
				.done(function(data) {
					GetPageCount(data);
				});
			}
					
			function GetPageCount(data) {
				var count = data.response.count;
				
				if( count >= 0 ) {
					$content.append(count);
				}
			}
		});
		
	});
};
	
})(jQuery);