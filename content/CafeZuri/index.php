<?php
/**
 * Cafe Zuri 2012
 *
 * 2012 By Andy Jepkes
 * AJ-CORE is a code base for developing dynamic websites.
 * It's free to use. 
 * Please leave these credits in the code.
 *
 */
?>
<!--========================= INIT ZURI =========================-->
<script>
	$(document).ready( function() {

		if (user.Browser.IE) {

			//Redirect to IE friendly site.
			console.info('Using IE!!!!!');
		} else {
			console.info('You\'re good. Not using IE.');
		}

		var ui = new UI();
		ui.Init({
		    contentWidth: '880px',
		    UITopPosition: '0px',
		    UIRightPosition: '-36px',
		    BodyOffsetPadding: 39,
		    ContentTopPadding: '100px',
		    setupMode: false
		});
		var zuri = new ZURI();
		zuri.Init();
	});
</script>

<!--========================= FACEBOOK WIDGET =========================-->
<div id="fb-root"></div>
<script>
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=148251681874812";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

<div id="wrapper">
	<div id="sunset">
		<div id="header-menu">
			<div id="social-menu">
			<!--========================= HEADER MENU =========================-->	
				<div class="social-links">
					<ul>
						<li id="fbBTN"></li>
						<li id="twBTN"></li>
						<li id="gpBTN"></li>
						<li id="mpBTN"></li>
					</ul>
				</div>
				<div class="contact">
					<p class="contact-style">(720) 381-4567</p>
					<p>3718 W. 32nd Ave<br />
						Denver, CO 8021<br /></p>
					<p class="contact-style">info@cafezuri.com<br /></p>
				</div>
				<div class="address"></div>
			</div>
		</div>
	</div>
	<div id="white-brick"></div>
	<div id="header-float">
		<div id="header-logo"></div>
	</div>

	<div id="body-wrapper">

	    <div id="CONTENT-WRAPPER">
	        <!-- CONTENT-BODY & UI must both live inside of CONTENT-WRAPPER -->
	        <div id="CONTENT-BODY">

				<div id="mapWIN" class="slide-box">
					<?php include('g_map.php'); ?>
				</div>


	            <div id="mainWIN" class="slide-box">
					<div class="fb-like-box" data-href="http://www.facebook.com/pages/Cafe-Zuri/228930820531792?fref=ts" data-width="350" data-height="700" data-show-faces="true" data-stream="true" data-header="true"></div>
					<div class="content-box"></div>
					<div class="content-box"></div>
				</div><!-- end #mainContent -->


				



	        </div>
	        <div id="UI">
	            <!--========================= UI BUTTONS =========================-->
	            <div class="left-terminal"></div>
	            <div class="left-bar-pattern"></div>
	            <ul class="ui-list">
	                <li class="ui-li selected" id="mainBTN">
	                    <div class="ui-divider"></div>
	                    <a href="javascript:void(0)"><p>HOME</p></a>
	                </li>
	                <li class="ui-li" id="mapBTN">
	                    <div class="ui-divider"></div>
	                    <a href="javascript:void(0)"><p>MAP</p></a>
	                    <!-- Only the last button gets this extra divider -->
	                    <div class="ui-last-divider"></div>
	                </li>                        
	            </ul>
	            <div class="right-bar-pattern"></div>
	            <div class="right-terminal"></div>
	        </div>


	        <div id="footer"></div>
	    </div>
	</div>
</div>


