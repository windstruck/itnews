<footer class="footer">
<div class="container">
	<div class="row">		
		<div class="span12">
			<div class="widget">
				<h4>Get email updates</h4>
				<form class="form-horizontal" action="#" method="post">
					<fieldset>
						<p>
							 ลงทะเบียนอีเมลเพื่อรับข่าวสารจากทางเว็บไซต์ .
						</p>
						<div class="input-prepend input-append">
							<input class="span2" id="appendedPrependedInput" type="text" placeholder="Email">
							<button class="btn btn-inverse" type="submit">Subscribe!</button>
						</div>
					</fieldset>
				</form>				
			</div>
		</div>
	</div>
</div>
<div class="verybottom">
	<div class="container">
		<div class="row">
			<div class="span6">
				<p>
					Copyright © 2013 TechNews. All rights reserved.
				</p>
			</div>
			<div class="span6">
				<p class="pull-right">
					Designed by <a href="http://www.morethanweb.in.th">morethanweb.in.th</a>
				</p>
			</div>
		</div>
	</div>
</div>
</footer>

<div id="toTop">^ Back to Top</div>
<script type="text/javascript">
$(function() {
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();	
		} else {
			$('#toTop').fadeOut();
		}
	});
 
	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});	
});
</script>
<script src="<?=base_url()?>bootstrap/js/bootstrap-tab.js"></script>

</body>
</html>