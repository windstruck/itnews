<div class="container">
	<div class="row">
	<div class="span8">
	<!--slide banner-->
	<section id="intro">
		<div class="section-2 group">
					<ul id="images" class="rs-slider">
						<li class="group">
							<a href="#">
								<img src="<?=base_url()?>style/images/article/it-techz-article-01.png" alt="" />
							</a>
							<div class="rs-caption rs-bottom">
								<h3>Three's a charm</h3>
								<p>Three turned out to be a charm for Amazon. A Seattle design review board has approved Amazon's plan to build what promises to be a stunning.</a></p>
							</div>
						</li>
						<li class="group">
							<a href="#" class="slide-parent">
								<img src="<?=base_url()?>style/images/slide/img/greenbut.jpg" alt=""/>
							</a>
							<div class="rs-caption rs-top-right">
								<p>This image is wrapped in a link.</p>
							</div>
						</li>
						<li class="group">
							<img src="<?=base_url()?>style/images/slide/img/form.jpg" alt=""/>
							<div class="rs-caption rs-bottom-right">
								<p>Adapted from <a class="button" href="http://dribbble.com/shots/154205-Cool-Green-Signup-form">Glenn Van Bogaert</a></p>
							</div>
						</li>
						<li class="group"><img src="<?=base_url()?>style/images/slide/img/red.jpg" alt=""/>
						</li>
						<li class="group"><img src="<?=base_url()?>style/images/slide/img/6.jpg" alt=""/></li>
					</ul>
				</div> <!-- /.section-2 -->
	<script src="<?=base_url()?>style/js/slide/jquery.js"></script>
	<script src="<?=base_url()?>style/js/slide/jquery.refineslide.js"></script>
	<script>
			$(function () {
				var $upper = $('#upper');

				$('#images').refineSlide({
					transition : 'fade',
					onInit : function () {
						var slider = this.slider,
						   $triggers = $('.translist').find('> li > a');

						$triggers.parent().find('a[href="#_'+ this.slider.settings['transition'] +'"]').addClass('active');

						$triggers.on('click', function (e) {
						   e.preventDefault();

							if (!$(this).find('.unsupported').length) {
								$triggers.removeClass('active');
								$(this).addClass('active');
								slider.settings['transition'] = $(this).attr('href').replace('#_', '');
							}
						});

						function support(result, bobble) {
							var phrase = '';

							if (!result) {
								phrase = ' not';
								$upper.find('div.bobble-'+ bobble).addClass('unsupported');
								$upper.find('div.bobble-js.bobble-css.unsupported').removeClass('bobble-css unsupported').text('JS');
							}
						}

						support(this.slider.cssTransforms3d, '3d');
						support(this.slider.cssTransitions, 'css');
					}
				});
			});
		</script>
	</section>
	<!--slide banner-->
	
	<!--blog video-->
	<section class="media-blog">
	<div class="row">
	<ul class="thumbnails">
		<li class="span2">
		<div class="thumbnail">
		  <img src="<?=base_url()?>style/images/vimeo-11.jpg" alt="">
		  <!-- Aside -->
			<aside class="article-aside clearfix">
			<dl class="article-info clearfix">
			<dt class="article-info-term">More info</dt>
			<dd class="createdby first-child">
			<span class="name">Written by </span><span><a href="/ja_magz/index.php/en/other-pages/userpage/10">James</a></span>													
			</dd>
			<dd class="published">
			<span>3 weeks ago</span>
			</dd>
			</dl>		
			</aside>
			<!-- //Aside -->
			<header class="article-header clearfix">
			<h2 class="article-title">
			<a href="/ja_magz/index.php/en/videos/137-making-of-actionhorse-s-ponytale-vfx-shot">iOS 7.0.3 และ iOS 7.1 จะเปิดให้อัพเดทหลังเปิดตัว iPad 5</a>
			</h2>
			</header>	
		  <section class="comment-count clearfix">		
			<!-- AddThis Button BEGIN -->
			<a class="addthis_button_compact" addthis:url="http://joomla-templates.joomlart.com/ja_magz/index.php/en/videos/137-making-of-actionhorse-s-ponytale-vfx-shot" addthis:title="Making of Actionhorse's &quot;Ponytale&quot; (VFX Shot)" href="#"> Share <i class="icon-share"></i></a>
			<!-- AddThis Button END -->
			</section>	
		</div>
		</li>
	  
		<li class="span2">
		<div class="thumbnail">
		  <img src="<?=base_url()?>style/images/vimeo-9.jpg" alt="">
		  <!-- Aside -->
			<aside class="article-aside clearfix">
			<dl class="article-info clearfix">
			<dt class="article-info-term">More info</dt>
			<dd class="createdby first-child">
			<span class="name">Written by </span><span><a href="/ja_magz/index.php/en/other-pages/userpage/10">James</a></span>													
			</dd>
			<dd class="published">
			<span>3 weeks ago</span>
			</dd>
			</dl>		
			</aside>
			<!-- //Aside -->
		  <header class="article-header clearfix">
			<h2 class="article-title">
			<a href="/ja_magz/index.php/en/videos/137-making-of-actionhorse-s-ponytale-vfx-shot">Instagram for Windows Phone กำลังจะมาเร็วๆนี้</a>
			</h2>
			</header>	
		  <section class="comment-count clearfix">		
			<!-- AddThis Button BEGIN -->
			<a class="addthis_button_compact" addthis:url="http://joomla-templates.joomlart.com/ja_magz/index.php/en/videos/137-making-of-actionhorse-s-ponytale-vfx-shot" addthis:title="Making of Actionhorse's &quot;Ponytale&quot; (VFX Shot)" href="#"> Share <i class="icon-share"></i></a>
			<!-- AddThis Button END -->
			</section>	
		</div>
		</li>
	  
		<li class="span2">
		<div class="thumbnail">
		  <img src="<?=base_url()?>style/images/vimeo-13.jpg" alt="">
		  <!-- Aside -->
			<aside class="article-aside clearfix">
			<dl class="article-info clearfix">
			<dt class="article-info-term">More info</dt>
			<dd class="createdby first-child">
			<span class="name">Written by </span><span><a href="/ja_magz/index.php/en/other-pages/userpage/10">James</a></span>													
			</dd>
			<dd class="published">
			<span>3 weeks ago</span>
			</dd>
			</dl>		
			</aside>
			<!-- //Aside -->
		  <header class="article-header clearfix">
			<h2 class="article-title">
			<a href="/ja_magz/index.php/en/videos/137-making-of-actionhorse-s-ponytale-vfx-shot">HTC ร่วมแจมพัฒนา SmartWatch Android</a>
			</h2>
			</header>	
		  <section class="comment-count clearfix">		
			<!-- AddThis Button BEGIN -->
			<a class="addthis_button_compact" addthis:url="http://joomla-templates.joomlart.com/ja_magz/index.php/en/videos/137-making-of-actionhorse-s-ponytale-vfx-shot" addthis:title="Making of Actionhorse's &quot;Ponytale&quot; (VFX Shot)" href="#"> Share <i class="icon-share"></i></a>
			<!-- AddThis Button END -->
			</section>	
		</div>
	  </li>
	
		<li class="span2">
		<div class="thumbnail">
		  <img src="<?=base_url()?>style/images/vimeo-13.jpg" alt="">
		  <!-- Aside -->
			<aside class="article-aside clearfix">
			<dl class="article-info clearfix">
			<dt class="article-info-term">More info</dt>
			<dd class="createdby first-child">
			<span class="name">Written by </span><span><a href="/ja_magz/index.php/en/other-pages/userpage/10">James</a></span>													
			</dd>
			<dd class="published">
			<span>3 weeks ago</span>
			</dd>
			</dl>		
			</aside>
			<!-- //Aside -->
		  <header class="article-header clearfix">
			<h2 class="article-title">
			<a href="/ja_magz/index.php/en/videos/137-making-of-actionhorse-s-ponytale-vfx-shot">Siri เพิ่มความเทพ ดูข้อมูลโปเกมอนได้</a>
			</h2>
			</header>	
		  <section class="comment-count clearfix">		
			<!-- AddThis Button BEGIN -->
			<a class="addthis_button_compact" addthis:url="http://joomla-templates.joomlart.com/ja_magz/index.php/en/videos/137-making-of-actionhorse-s-ponytale-vfx-shot" addthis:title="Making of Actionhorse's &quot;Ponytale&quot; (VFX Shot)" href="#"> Share <i class="icon-share"></i></a>
			<!-- AddThis Button END -->
			</section>	
		</div>
	  </li>
	
	</ul>
	</div>					
	</section>
	<!--blog video-->
	</div>
	
	<div class="span4">
	<section id="focus-articles" class="focus-articles">
	<div class="focus-item">
		<div class="focus-image clearfix">
		<div class="item-image clearfix">
			<a class="article-link" href="#" title="#">
				<img title="#" src="<?=base_url()?>style/images/article/windows-8.1-desktop.jpg" alt="Holiday travel deals before fares take off">
			</a>
			<div class="category-name blue">
				<span class="name">Category: </span><span><a href="/ja_magz/index.php/en/news">News</a></span>
			</div>
			</div>
		</div>
		<!-- Aside -->
		<aside class="article-aside clearfix">
		<dl class="article-info">
			<dt class="article-info-term">Details</dt>
			<dd class="createdby first-child">
			<span class="name">Written by </span>
			<span><a href="#">Admin</a></span>
			</dd>
			<dd class="createdby first-child">			
			<dd class="create">
			<span>3 weeks 5 days ago</span>
			</dd>	
			</dd>			
		</dl>
		</aside>
		<!-- //Aside -->
		<header class="article-header clearfix">
		<h2 class="article-title">
		<a class="article-link" href="#">Windows 8.1 เปิดให้อัพเดทแล้ว</a>
		</h2>
		</header>
		<div class="info-article">
			<section class="article-intro clearfix">
			<p>วันนี้เป็นวันแรกสำหรับ Windows 8.1 ที่ทาง Microsoft เปิดให้ผู้ใช้ Windows 8 หรือ Window RT สามารถอัพเดทกันฟรีๆ แล้ว ซึ่งเวอร์ชั่นใหม่นี้เรียกได้ว่าเป็นการพัฒนและปรับปรุงในหลายๆ ส่วนเพื่อให้ประสิทธิภาพและส่งเสริมให้ผู้ใช้สามารถใช้งานได้สะดวกรวดเร็วยิ่งขึ้น</p>
			</section>
		</div>
		<ul class="related-links inline">		
			<li class="clearfix">
			<a href="#" title="">หัวข้อข่าวประจำวันล่าสุด จากทั่วทุกมุมโลก..</a>
			</li>
			<li class="clearfix">
			<span class="marker">
			<i class="icon-camera"></i>
			</span>
			<a href="#" title="#">"เอซุส" เดินหน้า ! เปิดตัวผลิตภัณฑ์ใหม่ล่าสุด</a>
			</li>
			
			<li class="clearfix">
			<span class="marker">
			<i class="icon-facetime-video"></i>
			</span>
			<a href="#" title="#">ราคูเท็น เพิ่มยอดขาย โค้งสุดท้าย ปลายฤดูฝน</a>
			</li>
			
			<li class="clearfix">
			<span class="marker">
			<i class="icon-camera"></i>
			</span>
			<a href="#" title="#"> อาร์ทีบี เทคโนโลยี ขอแนะนำ Jabra Motion หูฟังบลูทูธที่รองรับ NFC</a>
			</li>
			
			<li class="clearfix">
			<span class="marker">
			<i class="icon-facetime-video"></i>
			</span>
			<a href="#" title="#">Galaxy Note 3 ภายนอกดูดี ข้างในล่ะ...?</a>
			</li>
		</ul>
		<ul class="latest-items">
			<li class="latest-item">
				<article>
					<div class="focus-image clearfix">
					<div class="item-image ">
					<a class="article-link" href="#" title="#">
					<i class="icon-play-sign"></i>										
					<img title="#" src="<?=base_url()?>style/images/vimeo-8.jpg" alt="#">
					</a>
					<div class="category-name green ">
					<span class="name">Category: </span><span><a href="#">Money</a></span>																			
					</div>
					</div>
					</div>

					<header class="article-header clearfix">
					<h2 class="article-title">
					<a class="article-link" href="#">AIS BPL Live - ดูสดถ่ายทอดฟุตบอลพรีเมียร์ลีก</a>
					</h2>
					</header>
						
					<!-- Aside -->
					<aside class="article-aside clearfix">
						<dl class="article-info">
						<dt class="article-info-term">Details</dt>						
						<dd class="create">
						<span>3 weeks 5 days ago</span>
						</dd>
						</dl>
					</aside>
					<!-- //Aside -->
				</article>
			</li>
			
			<li class="latest-item">
				<article>
					<div class="focus-image clearfix">
					<div class="item-image ">
					<a class="article-link" href="#" title="#">
					<i class="icon-play-sign"></i>										
					<img title="#" src="<?=base_url()?>style/images/vimeo-4.jpg" alt=" Rachel Beckwith's Mom Visits Ethiopia.">
					</a>
					<div class="category-name pink">
					<span class="name">Category: </span><span><a href="#">Life</a></span>																			
					</div>
					</div>
					</div>

					<header class="article-header clearfix">
					<h2 class="article-title">
					<a class="article-link" href="#">กสทช.พร้อมส่งมอบน้ำใจให้กับพี่น้องผู้ประสบอุทกภัย</a>
					</h2>
					</header>
						
					<!-- Aside -->
					<aside class="article-aside clearfix">
					<dl class="article-info">
					<dt class="article-info-term">Details</dt>					
					<dd class="create">
					<span>3 weeks 6 days ago</span>
					</dd>
					</dl>
					</aside>
					<!-- //Aside -->
				</article>
			</li>
			
			<li class="latest-item">
				<article>
					<div class="focus-image clearfix">
					<div class="item-image ">
					<a class="article-link" href="#" title="#">
					<i class="icon-play-sign"></i>										
					<img title="#" src="<?=base_url()?>style/images/vimeo-7.jpg" alt="Popsicle - Sweeten Your Life">
					</a>
					<div class="category-name red">
					<span class="name">Category: </span><span><a href="#">Sport</a></span>																			
					</div>
					</div>
					</div>

					<header class="article-header clearfix">
					<h2 class="article-title">
					<a class="article-link" href="#">Commart Comtech 2013 : ตอบทุกไลฟ์สไตล์ </a>
					</h2>
					</header>
						
					<!-- Aside -->
					<aside class="article-aside clearfix">
					<dl class="article-info">
					<dt class="article-info-term">Details</dt>					
					<dd class="create">
					<span>3 weeks 5 days ago</span>
					</dd>
					</dl>
					</aside>
					<!-- //Aside -->
				</article>
			</li>
		</ul>
	</div>
	</section>
	</div>
	
	</div>
	
	<!--bar download-->
	<div class="row">
		<div class="span12">
			<div class="tagline">
				<div class="row">
					<div class="span6">
						<div class="tagline_text">
							<h2>Scaffold will <span class="text-success">pimp up</span> your website</h2>
							<div class="tag_list">
								<ul>
									<li><span><i class="icon-fire"></i> Hottest price on the net</span></li>
									<li><span><i class="icon-gift"></i> More than expected</span></li>
									<li><span><i class="icon-plane"></i> Flying out of the crowd</span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="span6">
						<div class="btn-toolbar cta">
							<a class="btn btn-large btn-danger" href="#"><i class="m-icon-big-swapright m-icon-white"></i> Our pricing</a>
							<a class="btn btn-large btn-success" href="#"><i class="m-icon-big-swapdown m-icon-white"></i> Download now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="span12">
		<h3 class="module-title borderpink"><span>Popular.</span></h3>		
			<div class="row">
			
			<ul class="thumbnails">
			<li class="span4">
				<div class="showcategory thumbnail">
				<div class="view-image">
				<!-- Intro images -->
				<div class="img-intro images-content">
					<a class="article-link" href="#">
						<img title="#" src="<?=base_url()?>style/images/vimeo-1.jpg" alt="#">
					</a>
				</div>					
				<!-- Full images-->
				<span class="category-name blue">
					<a href="/ja_magz/index.php/en/news">News</a>
				</span>
				</div>

				<div class="article-content clearfix">
					<div class="article-aside clearfix">
					<span class="mod-articles-category-writtenby">
					<span class="name">Written by </span>
					<span><a href="#">James</a></span>													
					</span>
					<span class="mod-articles-category-date">3 weeks 5 days ago</span>
					</div>
					<h3>
					<a class="category-title" href="#">Holiday travel deals before fares take off</a>
					</h3>
					<div class="mod-articles-category-introtext">
					<p>Praesent nec lectus eu neque fringilla volutpat. Nulla tristique ullamcorper quam, ut dapibus massa hendrerit ac. Etiam a tempus lectus. Proin nibh nisi, vehicula non enim sed, venenatis faucibus</p>...					
					</div>					
				</div>

				<div class="comment-count clearfix">
					<div class="footer-feature clearfix">
					<span class="mod-articles-category-hits">
					<span>Hits: </span>
					420  
					</span>				
					</div>						
										
				<!-- Comment count -->
				<div class="jacomment-count">
				<a class="jacomment-counter" data-disqus-identifier="com_content:article:135" href="#" onclick="location.href='http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors#disqus_thread'; return false;" title="">2 Comments</a>
				</div><!-- Comment count -->			
				<!-- AddThis Button BEGIN -->
				<a class="addthis_button_compact" addthis:url="http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors" addthis:title="Holiday travel deals before fares take off" href="#"> Share <i class="icon-share"></i></a>
				<!-- AddThis Button END -->
				</div>
				</div>
			</li>
			
			<li class="span4">
				<div class="showcategory thumbnail">
				<div class="view-image">
				<!-- Intro images -->
				<div class="img-intro images-content">
					<a class="article-link" href="#">
						<img title="#" src="<?=base_url()?>style/images/sample-44.jpg" alt="#">
					</a>
				</div>					
				<!-- Full images-->
				<span class="category-name green">
					<a href="/ja_magz/index.php/en/news">News</a>
				</span>
				</div>

				<div class="article-content clearfix">
					<div class="article-aside clearfix">
					<span class="mod-articles-category-writtenby">
					<span class="name">Written by </span>
					<span><a href="#">James</a></span>													
					</span>
					<span class="mod-articles-category-date">3 weeks 5 days ago</span>
					</div>
					<h3>
					<a class="category-title" href="#">Holiday travel deals before fares take off</a>
					</h3>
					<div class="mod-articles-category-introtext">
					<p>Praesent nec lectus eu neque fringilla volutpat. Nulla tristique ullamcorper quam, ut dapibus massa hendrerit ac. Etiam a tempus lectus. Proin nibh nisi, vehicula non enim sed, venenatis faucibus</p>...					
					</div>					
				</div>

				<div class="comment-count clearfix">
					<div class="footer-feature clearfix">
					<span class="mod-articles-category-hits">
					<span>Hits: </span>
					420  
					</span>				
					</div>						
										
				<!-- Comment count -->
				<div class="jacomment-count">
				<a class="jacomment-counter" data-disqus-identifier="com_content:article:135" href="#" onclick="location.href='http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors#disqus_thread'; return false;" title="">2 Comments</a>
				</div><!-- Comment count -->			
				<!-- AddThis Button BEGIN -->
				<a class="addthis_button_compact" addthis:url="http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors" addthis:title="Holiday travel deals before fares take off" href="#"> Share <i class="icon-share"></i></a>
				<!-- AddThis Button END -->
				</div>
				</div>
			</li>
			
			<li class="span4">
				<div class="showcategory thumbnail">
				<div class="view-image">
				<!-- Intro images -->
				<div class="img-intro images-content">
					<a class="article-link" href="#">
						<img title="#" src="<?=base_url()?>style/images/vimeo-8.jpg" alt="#">
					</a>
				</div>					
				<!-- Full images-->
				<span class="category-name pink">
					<a href="/ja_magz/index.php/en/news">Video</a>
				</span>
				</div>

				<div class="article-content clearfix">
					<div class="article-aside clearfix">
					<span class="mod-articles-category-writtenby">
					<span class="name">Written by </span>
					<span><a href="#">James</a></span>													
					</span>
					<span class="mod-articles-category-date">3 weeks 5 days ago</span>
					</div>
					<h3>
					<a class="category-title" href="#">Holiday travel deals before fares take off</a>
					</h3>
					<div class="mod-articles-category-introtext">
					<p>Praesent nec lectus eu neque fringilla volutpat. Nulla tristique ullamcorper quam, ut dapibus massa hendrerit ac. Etiam a tempus lectus. Proin nibh nisi, vehicula non enim sed, venenatis faucibus</p>...					
					</div>					
				</div>

				<div class="comment-count clearfix">
					<div class="footer-feature clearfix">
					<span class="mod-articles-category-hits">
					<span>Hits: </span>
					420  
					</span>				
					</div>						
										
				<!-- Comment count -->
				<div class="jacomment-count">
				<a class="jacomment-counter" data-disqus-identifier="com_content:article:135" href="#" onclick="location.href='http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors#disqus_thread'; return false;" title="">2 Comments</a>
				</div><!-- Comment count -->			
				<!-- AddThis Button BEGIN -->
				<a class="addthis_button_compact" addthis:url="http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors" addthis:title="Holiday travel deals before fares take off" href="#"> Share <i class="icon-share"></i></a>
				<!-- AddThis Button END -->
				</div>
				</div>
			</li>
			
			<li class="span4">
				<div class="showcategory thumbnail">
				<div class="view-image">
				<!-- Intro images -->
				<div class="img-intro images-content">
					<a class="article-link" href="#">
						<img title="#" src="<?=base_url()?>style/images/sample-43.jpg" alt="#">
					</a>
				</div>					
				<!-- Full images-->
				<span class="category-name blue">
					<a href="/ja_magz/index.php/en/news">News</a>
				</span>
				</div>

				<div class="article-content clearfix">
					<div class="article-aside clearfix">
					<span class="mod-articles-category-writtenby">
					<span class="name">Written by </span>
					<span><a href="#">James</a></span>													
					</span>
					<span class="mod-articles-category-date">3 weeks 5 days ago</span>
					</div>
					<h3>
					<a class="category-title" href="#">Holiday travel deals before fares take off</a>
					</h3>
					<div class="mod-articles-category-introtext">
					<p>Praesent nec lectus eu neque fringilla volutpat. Nulla tristique ullamcorper quam, ut dapibus massa hendrerit ac. Etiam a tempus lectus. Proin nibh nisi, vehicula non enim sed, venenatis faucibus</p>...					
					</div>					
				</div>

				<div class="comment-count clearfix">
					<div class="footer-feature clearfix">
					<span class="mod-articles-category-hits">
					<span>Hits: </span>
					420  
					</span>				
					</div>						
										
				<!-- Comment count -->
				<div class="jacomment-count">
				<a class="jacomment-counter" data-disqus-identifier="com_content:article:135" href="#" onclick="location.href='http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors#disqus_thread'; return false;" title="">2 Comments</a>
				</div><!-- Comment count -->			
				<!-- AddThis Button BEGIN -->
				<a class="addthis_button_compact" addthis:url="http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors" addthis:title="Holiday travel deals before fares take off" href="#"> Share <i class="icon-share"></i></a>
				<!-- AddThis Button END -->
				</div>
				</div>
			</li>
			
			<li class="span4">
				<div class="showcategory thumbnail">
				<div class="view-image">
				<!-- Intro images -->
				<div class="img-intro images-content">
					<a class="article-link" href="#">
						<img title="#" src="<?=base_url()?>style/images/vimeo-4.jpg" alt="#">
					</a>
				</div>					
				<!-- Full images-->
				<span class="category-name red">
					<a href="/ja_magz/index.php/en/news">News</a>
				</span>
				</div>

				<div class="article-content clearfix">
					<div class="article-aside clearfix">
					<span class="mod-articles-category-writtenby">
					<span class="name">Written by </span>
					<span><a href="#">James</a></span>													
					</span>
					<span class="mod-articles-category-date">3 weeks 5 days ago</span>
					</div>
					<h3>
					<a class="category-title" href="#">Holiday travel deals before fares take off</a>
					</h3>
					<div class="mod-articles-category-introtext">
					<p>Praesent nec lectus eu neque fringilla volutpat. Nulla tristique ullamcorper quam, ut dapibus massa hendrerit ac. Etiam a tempus lectus. Proin nibh nisi, vehicula non enim sed, venenatis faucibus</p>...					
					</div>					
				</div>

				<div class="comment-count clearfix">
					<div class="footer-feature clearfix">
					<span class="mod-articles-category-hits">
					<span>Hits: </span>
					420  
					</span>				
					</div>						
										
				<!-- Comment count -->
				<div class="jacomment-count">
				<a class="jacomment-counter" data-disqus-identifier="com_content:article:135" href="#" onclick="location.href='http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors#disqus_thread'; return false;" title="">2 Comments</a>
				</div><!-- Comment count -->			
				<!-- AddThis Button BEGIN -->
				<a class="addthis_button_compact" addthis:url="http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors" addthis:title="Holiday travel deals before fares take off" href="#"> Share <i class="icon-share"></i></a>
				<!-- AddThis Button END -->
				</div>
				</div>
			</li>
			
			<li class="span4">
				<div class="showcategory thumbnail">
				<div class="view-image">
				<!-- Intro images -->
				<div class="img-intro images-content">
					<a class="article-link" href="#">
						<img title="#" src="<?=base_url()?>style/images/sample-8.jpg" alt="#">
					</a>
				</div>					
				<!-- Full images-->
				<span class="category-name green">
					<a href="/ja_magz/index.php/en/news">News</a>
				</span>
				</div>

				<div class="article-content clearfix">
					<div class="article-aside clearfix">
					<span class="mod-articles-category-writtenby">
					<span class="name">Written by </span>
					<span><a href="#">James</a></span>													
					</span>
					<span class="mod-articles-category-date">3 weeks 5 days ago</span>
					</div>
					<h3>
					<a class="category-title" href="#">Holiday travel deals before fares take off</a>
					</h3>
					<div class="mod-articles-category-introtext">
					<p>Praesent nec lectus eu neque fringilla volutpat. Nulla tristique ullamcorper quam, ut dapibus massa hendrerit ac. Etiam a tempus lectus. Proin nibh nisi, vehicula non enim sed, venenatis faucibus</p>...					
					</div>					
				</div>

				<div class="comment-count clearfix">
					<div class="footer-feature clearfix">
					<span class="mod-articles-category-hits">
					<span>Hits: </span>
					420  
					</span>				
					</div>						
										
				<!-- Comment count -->
				<div class="jacomment-count">
				<a class="jacomment-counter" data-disqus-identifier="com_content:article:135" href="#" onclick="location.href='http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors#disqus_thread'; return false;" title="">2 Comments</a>
				</div><!-- Comment count -->			
				<!-- AddThis Button BEGIN -->
				<a class="addthis_button_compact" addthis:url="http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors" addthis:title="Holiday travel deals before fares take off" href="#"> Share <i class="icon-share"></i></a>
				<!-- AddThis Button END -->
				</div>
				</div>
			</li>
			
			
			</ul>
			</div>
		</div>
	</div>
	
	<!--bar download-->
	<div class="row">
		<div class="span12">
			<div class="tagline">
				<div class="row">
					<div class="span6">
						<div class="tagline_text">
							<h2>Scaffold will <span class="text-success">pimp up</span> your website</h2>
							<div class="tag_list">
								<ul>
									<li><span><i class="icon-fire"></i> Hottest price on the net</span></li>
									<li><span><i class="icon-gift"></i> More than expected</span></li>
									<li><span><i class="icon-plane"></i> Flying out of the crowd</span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="span6">
						<div class="btn-toolbar cta">
							<a class="btn btn-large btn-danger" href="#"><i class="m-icon-big-swapright m-icon-white"></i> Our pricing</a>
							<a class="btn btn-large btn-success" href="#"><i class="m-icon-big-swapdown m-icon-white"></i> Download now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="span3">
			<h3 class="heading-success"><span class="btn btn-large btn-success"><i class="m-icon-big-swapright m-icon-white"></i></span>&nbsp;&nbsp;Main features</h3>
			<p>
				Aenean sodales augue ac lacus hendrerit sed rhoncus erat hendrerit. Praesent eleifend sodales felis, in congue purus scelerisque eget.
			</p>
		</div>
		<div class="span3">
			<div class="well well-primary box">
				<img src="<?=base_url()?>style/images/icon/box-1-white.png" alt="">
				<h3>Responsive</h3>
				<p>
					 Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri. Mel virtute efficiantur ne zril.
				</p>
				<a href="#">Read more</a>
			</div>
		</div>
		<div class="span3">
			<div class="well well-success box">
				<img src="<?=base_url()?>style/images/icon/box-2-white.png" alt="">
				<h3>With metro taste</h3>
				<p>
					 Ad sit option intellegat, unum populo comprehensam ut sed. Copiosae corrumpit qui ex, duo nullam feugait qualisque at an dicit saperet.
				</p>
				<a href="#">Read more</a>
			</div>
		</div>
		<div class="span3">
			<div class="well well-warning box">
				<img src="<?=base_url()?>style/images/icon/box-3-white.png" alt="">
				<h3>Well documented</h3>
				<p>
					 Ne vix clita integre expetenda, eos cetero numquam no, in sea omnes detracto. Ne iriure habemus maiestatis mei. Postea euripidis.
				</p>
				<a href="#">Read more</a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="span12">
		<h3 class="module-title borderorange"><span>Latest.</span></h3>		
			<div class="row">
			
			<ul class="thumbnails">
			<li class="span3">
				<div class="showcategory thumbnail">
				<div class="view-image">
				<!-- Intro images -->
				<div class="img-intro images-content">
					<a class="article-link" href="#">
						<img title="#" src="<?=base_url()?>style/images/vimeo-1.jpg" alt="#">
					</a>
				</div>					
				<!-- Full images-->
				<span class="category-name blue">
					<a href="/ja_magz/index.php/en/news">News</a>
				</span>
				</div>

				<div class="article-content clearfix">
					<div class="article-aside clearfix">
					<span class="mod-articles-category-writtenby">
					<span class="name">Written by </span>
					<span><a href="#">James</a></span>													
					</span>
					<span class="mod-articles-category-date">3 weeks 5 days ago</span>
					</div>
					<h3>
					<a class="category-title" href="#">Holiday travel deals before fares take off</a>
					</h3>
					<div class="mod-articles-category-introtext">
					<p>Praesent nec lectus eu neque fringilla volutpat. Nulla tristique ullamcorper quam, ut dapibus massa hendrerit ac. Etiam a tempus lectus. Proin nibh nisi, vehicula non enim sed, venenatis faucibus</p>...					
					</div>					
				</div>

				<div class="comment-count clearfix">
					<div class="footer-feature clearfix">
					<span class="mod-articles-category-hits">
					<span>Hits: </span>
					420  
					</span>				
					</div>						
										
				<!-- Comment count -->
				<div class="jacomment-count">
				<a class="jacomment-counter" data-disqus-identifier="com_content:article:135" href="#" onclick="location.href='http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors#disqus_thread'; return false;" title="">2 Comments</a>
				</div><!-- Comment count -->			
				<!-- AddThis Button BEGIN -->
				<a class="addthis_button_compact" addthis:url="http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors" addthis:title="Holiday travel deals before fares take off" href="#"> Share <i class="icon-share"></i></a>
				<!-- AddThis Button END -->
				</div>
				</div>
			</li>
			
			<li class="span3">
				<div class="showcategory thumbnail">
				<div class="view-image">
				<!-- Intro images -->
				<div class="img-intro images-content">
					<a class="article-link" href="#">
						<img title="#" src="<?=base_url()?>style/images/sample-44.jpg" alt="#">
					</a>
				</div>					
				<!-- Full images-->
				<span class="category-name green">
					<a href="/ja_magz/index.php/en/news">News</a>
				</span>
				</div>

				<div class="article-content clearfix">
					<div class="article-aside clearfix">
					<span class="mod-articles-category-writtenby">
					<span class="name">Written by </span>
					<span><a href="#">James</a></span>													
					</span>
					<span class="mod-articles-category-date">3 weeks 5 days ago</span>
					</div>
					<h3>
					<a class="category-title" href="#">Holiday travel deals before fares take off</a>
					</h3>
					<div class="mod-articles-category-introtext">
					<p>Praesent nec lectus eu neque fringilla volutpat. Nulla tristique ullamcorper quam, ut dapibus massa hendrerit ac. Etiam a tempus lectus. Proin nibh nisi, vehicula non enim sed, venenatis faucibus</p>...					
					</div>					
				</div>

				<div class="comment-count clearfix">
					<div class="footer-feature clearfix">
					<span class="mod-articles-category-hits">
					<span>Hits: </span>
					420  
					</span>				
					</div>						
										
				<!-- Comment count -->
				<div class="jacomment-count">
				<a class="jacomment-counter" data-disqus-identifier="com_content:article:135" href="#" onclick="location.href='http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors#disqus_thread'; return false;" title="">2 Comments</a>
				</div><!-- Comment count -->			
				<!-- AddThis Button BEGIN -->
				<a class="addthis_button_compact" addthis:url="http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors" addthis:title="Holiday travel deals before fares take off" href="#"> Share <i class="icon-share"></i></a>
				<!-- AddThis Button END -->
				</div>
				</div>
			</li>
			
			<li class="span3">
				<div class="showcategory thumbnail">
				<div class="view-image">
				<!-- Intro images -->
				<div class="img-intro images-content">
					<a class="article-link" href="#">
						<img title="#" src="<?=base_url()?>style/images/vimeo-8.jpg" alt="#">
					</a>
				</div>					
				<!-- Full images-->
				<span class="category-name pink">
					<a href="/ja_magz/index.php/en/news">Video</a>
				</span>
				</div>

				<div class="article-content clearfix">
					<div class="article-aside clearfix">
					<span class="mod-articles-category-writtenby">
					<span class="name">Written by </span>
					<span><a href="#">James</a></span>													
					</span>
					<span class="mod-articles-category-date">3 weeks 5 days ago</span>
					</div>
					<h3>
					<a class="category-title" href="#">Holiday travel deals before fares take off</a>
					</h3>
					<div class="mod-articles-category-introtext">
					<p>Praesent nec lectus eu neque fringilla volutpat. Nulla tristique ullamcorper quam, ut dapibus massa hendrerit ac. Etiam a tempus lectus. Proin nibh nisi, vehicula non enim sed, venenatis faucibus</p>...					
					</div>					
				</div>

				<div class="comment-count clearfix">
					<div class="footer-feature clearfix">
					<span class="mod-articles-category-hits">
					<span>Hits: </span>
					420  
					</span>				
					</div>						
										
				<!-- Comment count -->
				<div class="jacomment-count">
				<a class="jacomment-counter" data-disqus-identifier="com_content:article:135" href="#" onclick="location.href='http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors#disqus_thread'; return false;" title="">2 Comments</a>
				</div><!-- Comment count -->			
				<!-- AddThis Button BEGIN -->
				<a class="addthis_button_compact" addthis:url="http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors" addthis:title="Holiday travel deals before fares take off" href="#"> Share <i class="icon-share"></i></a>
				<!-- AddThis Button END -->
				</div>
				</div>
			</li>
			
			<li class="span3">
				<div class="showcategory thumbnail">
				<div class="view-image">
				<!-- Intro images -->
				<div class="img-intro images-content">
					<a class="article-link" href="#">
						<img title="#" src="<?=base_url()?>style/images/sample-43.jpg" alt="#">
					</a>
				</div>					
				<!-- Full images-->
				<span class="category-name blue">
					<a href="/ja_magz/index.php/en/news">News</a>
				</span>
				</div>

				<div class="article-content clearfix">
					<div class="article-aside clearfix">
					<span class="mod-articles-category-writtenby">
					<span class="name">Written by </span>
					<span><a href="#">James</a></span>													
					</span>
					<span class="mod-articles-category-date">3 weeks 5 days ago</span>
					</div>
					<h3>
					<a class="category-title" href="#">Holiday travel deals before fares take off</a>
					</h3>
					<div class="mod-articles-category-introtext">
					<p>Praesent nec lectus eu neque fringilla volutpat. Nulla tristique ullamcorper quam, ut dapibus massa hendrerit ac. Etiam a tempus lectus. Proin nibh nisi, vehicula non enim sed, venenatis faucibus</p>...					
					</div>					
				</div>

				<div class="comment-count clearfix">
					<div class="footer-feature clearfix">
					<span class="mod-articles-category-hits">
					<span>Hits: </span>
					420  
					</span>				
					</div>						
										
				<!-- Comment count -->
				<div class="jacomment-count">
				<a class="jacomment-counter" data-disqus-identifier="com_content:article:135" href="#" onclick="location.href='http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors#disqus_thread'; return false;" title="">2 Comments</a>
				</div><!-- Comment count -->			
				<!-- AddThis Button BEGIN -->
				<a class="addthis_button_compact" addthis:url="http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors" addthis:title="Holiday travel deals before fares take off" href="#"> Share <i class="icon-share"></i></a>
				<!-- AddThis Button END -->
				</div>
				</div>
			</li>
			
			<li class="span3">
				<div class="showcategory thumbnail">
				<div class="view-image">
				<!-- Intro images -->
				<div class="img-intro images-content">
					<a class="article-link" href="#">
						<img title="#" src="<?=base_url()?>style/images/vimeo-4.jpg" alt="#">
					</a>
				</div>					
				<!-- Full images-->
				<span class="category-name red">
					<a href="/ja_magz/index.php/en/news">News</a>
				</span>
				</div>

				<div class="article-content clearfix">
					<div class="article-aside clearfix">
					<span class="mod-articles-category-writtenby">
					<span class="name">Written by </span>
					<span><a href="#">James</a></span>													
					</span>
					<span class="mod-articles-category-date">3 weeks 5 days ago</span>
					</div>
					<h3>
					<a class="category-title" href="#">Holiday travel deals before fares take off</a>
					</h3>
					<div class="mod-articles-category-introtext">
					<p>Praesent nec lectus eu neque fringilla volutpat. Nulla tristique ullamcorper quam, ut dapibus massa hendrerit ac. Etiam a tempus lectus. Proin nibh nisi, vehicula non enim sed, venenatis faucibus</p>...					
					</div>					
				</div>

				<div class="comment-count clearfix">
					<div class="footer-feature clearfix">
					<span class="mod-articles-category-hits">
					<span>Hits: </span>
					420  
					</span>				
					</div>						
										
				<!-- Comment count -->
				<div class="jacomment-count">
				<a class="jacomment-counter" data-disqus-identifier="com_content:article:135" href="#" onclick="location.href='http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors#disqus_thread'; return false;" title="">2 Comments</a>
				</div><!-- Comment count -->			
				<!-- AddThis Button BEGIN -->
				<a class="addthis_button_compact" addthis:url="http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors" addthis:title="Holiday travel deals before fares take off" href="#"> Share <i class="icon-share"></i></a>
				<!-- AddThis Button END -->
				</div>
				</div>
			</li>
			
			<li class="span3">
				<div class="showcategory thumbnail">
				<div class="view-image">
				<!-- Intro images -->
				<div class="img-intro images-content">
					<a class="article-link" href="#">
						<img title="#" src="<?=base_url()?>style/images/sample-8.jpg" alt="#">
					</a>
				</div>					
				<!-- Full images-->
				<span class="category-name green">
					<a href="/ja_magz/index.php/en/news">News</a>
				</span>
				</div>

				<div class="article-content clearfix">
					<div class="article-aside clearfix">
					<span class="mod-articles-category-writtenby">
					<span class="name">Written by </span>
					<span><a href="#">James</a></span>													
					</span>
					<span class="mod-articles-category-date">3 weeks 5 days ago</span>
					</div>
					<h3>
					<a class="category-title" href="#">Holiday travel deals before fares take off</a>
					</h3>
					<div class="mod-articles-category-introtext">
					<p>Praesent nec lectus eu neque fringilla volutpat. Nulla tristique ullamcorper quam, ut dapibus massa hendrerit ac. Etiam a tempus lectus. Proin nibh nisi, vehicula non enim sed, venenatis faucibus</p>...					
					</div>					
				</div>

				<div class="comment-count clearfix">
					<div class="footer-feature clearfix">
					<span class="mod-articles-category-hits">
					<span>Hits: </span>
					420  
					</span>				
					</div>						
										
				<!-- Comment count -->
				<div class="jacomment-count">
				<a class="jacomment-counter" data-disqus-identifier="com_content:article:135" href="#" onclick="location.href='http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors#disqus_thread'; return false;" title="">2 Comments</a>
				</div><!-- Comment count -->			
				<!-- AddThis Button BEGIN -->
				<a class="addthis_button_compact" addthis:url="http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors" addthis:title="Holiday travel deals before fares take off" href="#"> Share <i class="icon-share"></i></a>
				<!-- AddThis Button END -->
				</div>
				</div>
			</li>
			
			<li class="span3">
				<div class="showcategory thumbnail">
				<div class="view-image">
				<!-- Intro images -->
				<div class="img-intro images-content">
					<a class="article-link" href="#">
						<img title="#" src="<?=base_url()?>style/images/sample-8.jpg" alt="#">
					</a>
				</div>					
				<!-- Full images-->
				<span class="category-name green">
					<a href="/ja_magz/index.php/en/news">News</a>
				</span>
				</div>

				<div class="article-content clearfix">
					<div class="article-aside clearfix">
					<span class="mod-articles-category-writtenby">
					<span class="name">Written by </span>
					<span><a href="#">James</a></span>													
					</span>
					<span class="mod-articles-category-date">3 weeks 5 days ago</span>
					</div>
					<h3>
					<a class="category-title" href="#">Holiday travel deals before fares take off</a>
					</h3>
					<div class="mod-articles-category-introtext">
					<p>Praesent nec lectus eu neque fringilla volutpat. Nulla tristique ullamcorper quam, ut dapibus massa hendrerit ac. Etiam a tempus lectus. Proin nibh nisi, vehicula non enim sed, venenatis faucibus</p>...					
					</div>					
				</div>

				<div class="comment-count clearfix">
					<div class="footer-feature clearfix">
					<span class="mod-articles-category-hits">
					<span>Hits: </span>
					420  
					</span>				
					</div>						
										
				<!-- Comment count -->
				<div class="jacomment-count">
				<a class="jacomment-counter" data-disqus-identifier="com_content:article:135" href="#" onclick="location.href='http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors#disqus_thread'; return false;" title="">2 Comments</a>
				</div><!-- Comment count -->			
				<!-- AddThis Button BEGIN -->
				<a class="addthis_button_compact" addthis:url="http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors" addthis:title="Holiday travel deals before fares take off" href="#"> Share <i class="icon-share"></i></a>
				<!-- AddThis Button END -->
				</div>
				</div>
			</li>
			
			
			<li class="span3">
				<div class="showcategory thumbnail">
				<div class="view-image">
				<!-- Intro images -->
				<div class="img-intro images-content">
					<a class="article-link" href="#">
						<img title="#" src="<?=base_url()?>style/images/sample-8.jpg" alt="#">
					</a>
				</div>					
				<!-- Full images-->
				<span class="category-name green">
					<a href="/ja_magz/index.php/en/news">News</a>
				</span>
				</div>

				<div class="article-content clearfix">
					<div class="article-aside clearfix">
					<span class="mod-articles-category-writtenby">
					<span class="name">Written by </span>
					<span><a href="#">James</a></span>													
					</span>
					<span class="mod-articles-category-date">3 weeks 5 days ago</span>
					</div>
					<h3>
					<a class="category-title" href="#">Holiday travel deals before fares take off</a>
					</h3>
					<div class="mod-articles-category-introtext">
					<p>Praesent nec lectus eu neque fringilla volutpat. Nulla tristique ullamcorper quam, ut dapibus massa hendrerit ac. Etiam a tempus lectus. Proin nibh nisi, vehicula non enim sed, venenatis faucibus</p>...					
					</div>					
				</div>

				<div class="comment-count clearfix">
					<div class="footer-feature clearfix">
					<span class="mod-articles-category-hits">
					<span>Hits: </span>
					420  
					</span>				
					</div>						
										
				<!-- Comment count -->
				<div class="jacomment-count">
				<a class="jacomment-counter" data-disqus-identifier="com_content:article:135" href="#" onclick="location.href='http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors#disqus_thread'; return false;" title="">2 Comments</a>
				</div><!-- Comment count -->			
				<!-- AddThis Button BEGIN -->
				<a class="addthis_button_compact" addthis:url="http://joomla-templates.joomlart.com/ja_magz/index.php/en/other-pages/colors" addthis:title="Holiday travel deals before fares take off" href="#"> Share <i class="icon-share"></i></a>
				<!-- AddThis Button END -->
				</div>
				</div>
			</li>
			
			
			
			</ul>
			</div>
		</div>
	</div>
	
	<!--bar download-->
	<div class="row">
		<div class="span12">
			<div class="tagline">
				<div class="row">
					<div class="span6">
						<div class="tagline_text">
							<h2>Scaffold will <span class="text-success">pimp up</span> your website</h2>
							<div class="tag_list">
								<ul>
									<li><span><i class="icon-fire"></i> Hottest price on the net</span></li>
									<li><span><i class="icon-gift"></i> More than expected</span></li>
									<li><span><i class="icon-plane"></i> Flying out of the crowd</span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="span6">
						<div class="btn-toolbar cta">
							<a class="btn btn-large btn-danger" href="#"><i class="m-icon-big-swapright m-icon-white"></i> Our pricing</a>
							<a class="btn btn-large btn-success" href="#"><i class="m-icon-big-swapdown m-icon-white"></i> Download now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
			<ul id="myTab" class="nav nav-tabs">
              <li class="success"><a href="#lifestyle" data-toggle="tab"><i class="icon-heart icon-white"></i> Technology for Lifestyle</a></li>
              <li class="primary"><a href="#business" data-toggle="tab"><i class="icon-file icon-white"></i> Technology for business</a></li>
              <li class="danger"><a href="#education" data-toggle="tab"><i class="icon-briefcase icon-white"></i> Technology for education </a></li>
			  <li class="warning2"><a href="#sport" data-toggle="tab"><i class="icon-star-empty icon-white"></i> Technology for sport </a></li>
			  <li class="info"><a href="#all" data-toggle="tab"><i class="icon-film icon-white"></i>Technology for all</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="row tab-pane fade in active" id="lifestyle">                
				<ul class="thumbnails">
					<li class="span3">
						<div class="showcategory thumbnail">
						<div class="view-image">
						<!-- Intro images -->
						<div class="img-intro images-content">
							<a class="article-link" href="#">
								<img title="#" src="<?=base_url()?>style/images/vimeo-1.jpg" alt="#">
							</a>
						</div>					
						<!-- Full images-->
						<span class="category-name blue">
							<a href="/ja_magz/index.php/en/news">News</a>
						</span>
						</div>
						<div class="marginbottom article-content clearfix">
							<div class="article-aside clearfix">
							<span class="mod-articles-category-writtenby">
							<span class="name">Written by </span>
							<span><a href="#">James</a></span>													
							</span>
							<span class="mod-articles-category-date">3 weeks 5 days ago</span>
							</div>
							<h3>
							<a class="category-title" href="#">Holiday travel deals before fares take off</a>
							</h3>				
						</div>				
						</div>
					</li>
					<li class="span3">
						<div class="showcategory thumbnail">
						<div class="view-image">
						<!-- Intro images -->
						<div class="img-intro images-content">
							<a class="article-link" href="#">
								<img title="#" src="<?=base_url()?>style/images/vimeo-1.jpg" alt="#">
							</a>
						</div>					
						<!-- Full images-->
						<span class="category-name blue">
							<a href="/ja_magz/index.php/en/news">News</a>
						</span>
						</div>
						<div class="marginbottom article-content clearfix">
							<div class="article-aside clearfix">
							<span class="mod-articles-category-writtenby">
							<span class="name">Written by </span>
							<span><a href="#">James</a></span>													
							</span>
							<span class="mod-articles-category-date">3 weeks 5 days ago</span>
							</div>
							<h3>
							<a class="category-title" href="#">Holiday travel deals before fares take off</a>
							</h3>				
						</div>				
						</div>
					</li>
					<li class="span3">
						<div class="showcategory thumbnail">
						<div class="view-image">
						<!-- Intro images -->
						<div class="img-intro images-content">
							<a class="article-link" href="#">
								<img title="#" src="<?=base_url()?>style/images/vimeo-1.jpg" alt="#">
							</a>
						</div>					
						<!-- Full images-->
						<span class="category-name blue">
							<a href="/ja_magz/index.php/en/news">News</a>
						</span>
						</div>
						<div class="marginbottom article-content clearfix">
							<div class="article-aside clearfix">
							<span class="mod-articles-category-writtenby">
							<span class="name">Written by </span>
							<span><a href="#">James</a></span>													
							</span>
							<span class="mod-articles-category-date">3 weeks 5 days ago</span>
							</div>
							<h3>
							<a class="category-title" href="#">Holiday travel deals before fares take off</a>
							</h3>				
						</div>				
						</div>
					</li>
					<li class="span3">
						<div class="showcategory thumbnail">
						<div class="view-image">
						<!-- Intro images -->
						<div class="img-intro images-content">
							<a class="article-link" href="#">
								<img title="#" src="<?=base_url()?>style/images/vimeo-1.jpg" alt="#">
							</a>
						</div>					
						<!-- Full images-->
						<span class="category-name blue">
							<a href="/ja_magz/index.php/en/news">News</a>
						</span>
						</div>
						<div class="marginbottom article-content clearfix">
							<div class="article-aside clearfix">
							<span class="mod-articles-category-writtenby">
							<span class="name">Written by </span>
							<span><a href="#">James</a></span>													
							</span>
							<span class="mod-articles-category-date">3 weeks 5 days ago</span>
							</div>
							<h3>
							<a class="category-title" href="#">Holiday travel deals before fares take off</a>
							</h3>				
						</div>				
						</div>
					</li>
					<li class="span3">
						<div class="showcategory thumbnail">
						<div class="view-image">
						<!-- Intro images -->
						<div class="img-intro images-content">
							<a class="article-link" href="#">
								<img title="#" src="<?=base_url()?>style/images/vimeo-1.jpg" alt="#">
							</a>
						</div>					
						<!-- Full images-->
						<span class="category-name blue">
							<a href="/ja_magz/index.php/en/news">News</a>
						</span>
						</div>
						<div class="marginbottom article-content clearfix">
							<div class="article-aside clearfix">
							<span class="mod-articles-category-writtenby">
							<span class="name">Written by </span>
							<span><a href="#">James</a></span>													
							</span>
							<span class="mod-articles-category-date">3 weeks 5 days ago</span>
							</div>
							<h3>
							<a class="category-title" href="#">Holiday travel deals before fares take off</a>
							</h3>				
						</div>				
						</div>
					</li>
					<li class="span3">
						<div class="showcategory thumbnail">
						<div class="view-image">
						<!-- Intro images -->
						<div class="img-intro images-content">
							<a class="article-link" href="#">
								<img title="#" src="<?=base_url()?>style/images/vimeo-1.jpg" alt="#">
							</a>
						</div>					
						<!-- Full images-->
						<span class="category-name blue">
							<a href="/ja_magz/index.php/en/news">News</a>
						</span>
						</div>
						<div class="marginbottom article-content clearfix">
							<div class="article-aside clearfix">
							<span class="mod-articles-category-writtenby">
							<span class="name">Written by </span>
							<span><a href="#">James</a></span>													
							</span>
							<span class="mod-articles-category-date">3 weeks 5 days ago</span>
							</div>
							<h3>
							<a class="category-title" href="#">Holiday travel deals before fares take off</a>
							</h3>				
						</div>				
						</div>
					</li>
					<li class="span3">
						<div class="showcategory thumbnail">
						<div class="view-image">
						<!-- Intro images -->
						<div class="img-intro images-content">
							<a class="article-link" href="#">
								<img title="#" src="<?=base_url()?>style/images/vimeo-1.jpg" alt="#">
							</a>
						</div>					
						<!-- Full images-->
						<span class="category-name blue">
							<a href="/ja_magz/index.php/en/news">News</a>
						</span>
						</div>
						<div class="marginbottom article-content clearfix">
							<div class="article-aside clearfix">
							<span class="mod-articles-category-writtenby">
							<span class="name">Written by </span>
							<span><a href="#">James</a></span>													
							</span>
							<span class="mod-articles-category-date">3 weeks 5 days ago</span>
							</div>
							<h3>
							<a class="category-title" href="#">Holiday travel deals before fares take off</a>
							</h3>				
						</div>				
						</div>
					</li>
					<li class="span3">
						<div class="showcategory thumbnail">
						<div class="view-image">
						<!-- Intro images -->
						<div class="img-intro images-content">
							<a class="article-link" href="#">
								<img title="#" src="<?=base_url()?>style/images/vimeo-1.jpg" alt="#">
							</a>
						</div>					
						<!-- Full images-->
						<span class="category-name blue">
							<a href="/ja_magz/index.php/en/news">News</a>
						</span>
						</div>
						<div class="marginbottom article-content clearfix">
							<div class="article-aside clearfix">
							<span class="mod-articles-category-writtenby">
							<span class="name">Written by </span>
							<span><a href="#">James</a></span>													
							</span>
							<span class="mod-articles-category-date">3 weeks 5 days ago</span>
							</div>
							<h3>
							<a class="category-title" href="#">Holiday travel deals before fares take off</a>
							</h3>				
						</div>				
						</div>
					</li>
				
				</ul>
              </div>
              <div class="row tab-pane fade" id="business">
                <ul class="thumbnails">
				<li class="span3">
				<div class="showcategory thumbnail">
				<div class="view-image">
				<!-- Intro images -->
				<div class="img-intro images-content">
					<a class="article-link" href="#">
						<img title="#" src="<?=base_url()?>style/images/vimeo-4.jpg" alt="#">
					</a>
				</div>					
				<!-- Full images-->
				<span class="category-name orange">
					<a href="/ja_magz/index.php/en/news">Profile</a>
				</span>
				</div>

				<div class="marginbottom article-content clearfix">
					<div class="article-aside clearfix">
					<span class="mod-articles-category-writtenby">
					<span class="name">Written by </span>
					<span><a href="#">James</a></span>													
					</span>
					<span class="mod-articles-category-date">3 weeks 5 days ago</span>
					</div>
					<h3>
					<a class="category-title" href="#">Holiday travel deals before fares take off</a>
					</h3>				
				</div>
				</div>
				</li>
				
				<li class="span3">
				<div class="showcategory thumbnail">
				<div class="view-image">
				<!-- Intro images -->
				<div class="img-intro images-content">
					<a class="article-link" href="#">
						<img title="#" src="<?=base_url()?>style/images/vimeo-4.jpg" alt="#">
					</a>
				</div>					
				<!-- Full images-->
				<span class="category-name orange">
					<a href="/ja_magz/index.php/en/news">Profile</a>
				</span>
				</div>

				<div class="marginbottom article-content clearfix">
					<div class="article-aside clearfix">
					<span class="mod-articles-category-writtenby">
					<span class="name">Written by </span>
					<span><a href="#">James</a></span>													
					</span>
					<span class="mod-articles-category-date">3 weeks 5 days ago</span>
					</div>
					<h3>
					<a class="category-title" href="#">Holiday travel deals before fares take off</a>
					</h3>				
				</div>
				</div>
				</li>
				
				<li class="span3">
				<div class="showcategory thumbnail">
				<div class="view-image">
				<!-- Intro images -->
				<div class="img-intro images-content">
					<a class="article-link" href="#">
						<img title="#" src="<?=base_url()?>style/images/vimeo-4.jpg" alt="#">
					</a>
				</div>					
				<!-- Full images-->
				<span class="category-name orange">
					<a href="/ja_magz/index.php/en/news">Profile</a>
				</span>
				</div>

				<div class="marginbottom article-content clearfix">
					<div class="article-aside clearfix">
					<span class="mod-articles-category-writtenby">
					<span class="name">Written by </span>
					<span><a href="#">James</a></span>													
					</span>
					<span class="mod-articles-category-date">3 weeks 5 days ago</span>
					</div>
					<h3>
					<a class="category-title" href="#">Holiday travel deals before fares take off</a>
					</h3>				
				</div>
				</div>
				</li>
				
				<li class="span3">
				<div class="showcategory thumbnail">
				<div class="view-image">
				<!-- Intro images -->
				<div class="img-intro images-content">
					<a class="article-link" href="#">
						<img title="#" src="<?=base_url()?>style/images/vimeo-4.jpg" alt="#">
					</a>
				</div>					
				<!-- Full images-->
				<span class="category-name orange">
					<a href="/ja_magz/index.php/en/news">Profile</a>
				</span>
				</div>

				<div class="marginbottom article-content clearfix">
					<div class="article-aside clearfix">
					<span class="mod-articles-category-writtenby">
					<span class="name">Written by </span>
					<span><a href="#">James</a></span>													
					</span>
					<span class="mod-articles-category-date">3 weeks 5 days ago</span>
					</div>
					<h3>
					<a class="category-title" href="#">Holiday travel deals before fares take off</a>
					</h3>				
				</div>
				</div>
				</li>
				
				</ul>
              </div>
			  
              <div class="tab-pane fade" id="education">
                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
              </div>
              <div class="tab-pane fade" id="sport">
                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
              </div>
			  <div class="tab-pane fade" id="all">
                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
              </div>
            </div>
         
</div>
