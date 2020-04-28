<?php
  $AFID = $_GET["id"];
  $source = $_GET["source"];
  $aff_sub = $_GET["aff_sub"];
  $aff_sub2 = $_GET["aff_sub2"];
  $aff_sub3 = $_GET["aff_sub3"];
  $aff_sub4 = $_GET["aff_sub4"];
  $aff_sub5 = $_GET["aff_sub5"];

  if (empty($AFID))
  {
    $AFID = "10200";
  }
  else
  {
  }

  if ($AFID == "10620")
  {
    $phone_link = "18449720281";
    $phone_formatted = "(844) 972-0281";
  }
  else if ($AFID == "10686")
  {
    $phone_link = "18669300098";
    $phone_formatted = "(866) 930-0098";
  }
  else
  {
    $phone_link = "18557845470";
    $phone_formatted = "(855) 784-5470";
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>MEDI-CGM.com - Authorized Provider or Freestyle Libre CGM</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta property="og:title" content="MEDI-CGM.com - Authorized Provider or Freestyle Libre CGM">
	<meta property="og:description" content="Check your glucose with a painless scan, instead of a fingerstick. Diabetes is complex enough, monitoring your diabetes shouldn’t be.">
	<meta property="og:image" content="https://medi-cgm.com/images/accurate.jpg">
	<meta property="og:site_name" content="medi-cgm.com">
	<meta property="og:url" content="https://medi-cgm.com/">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.min.css">
    <script src="https://kit.fontawesome.com/b3ca36d355.js" crossorigin="anonymous"></script>

	<style>
		.mobile-margin { margin-top: 260px; }
	</style>
	
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	 fbq('init', '2625055454444362'); 
	 fbq('track', 'ViewContent');
	</script>
	<noscript>
	 <img height="1" width="1" 
	src="https://www.facebook.com/tr?id=2625055454444362&ev=ViewContent
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->

	<!-- Global site tag (gtag.js) - Google Ads: 656370087 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-656370087"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'AW-656370087');
	</script>
	<script>
	  gtag('config', 'AW-656370087/aW0tCOyGgcsBEKfT_bgC', {
		'phone_conversion_number': '(855) 784-5470'
	  });
	</script>

	<script type="application/javascript">(function(w,d,t,r,u){w[u]=w[u]||[];w[u].push({'projectId':'10000','properties':{'pixelId':'10015524'}});var s=d.createElement(t);s.src=r;s.async=true;s.onload=s.onreadystatechange=function(){var y,rs=this.readyState,c=w[u];if(rs&&rs!="complete"&&rs!="loaded"){return}try{y=YAHOO.ywa.I13N.fireBeacon;w[u]=[];w[u].push=function(p){y([p])};y(c)}catch(e){}};var scr=d.getElementsByTagName(t)[0],par=scr.parentNode;par.insertBefore(s,scr)})(window,document,"script","https://s.yimg.com/wi/ytc.js","dotq");</script>

</head>
<body>
    <header class="header d-md-none" style="height: 150px">
		<div class="container">
			<nav class="navbar navbar-light bg-white justify-content-center">
				<a class="navbar-brand" href="#">
					<img src="images/logo.png" alt="logo" style="height: 75px">
				</a>
				<span class="navbar-text text-center">
					<h4 class="my-0">Call To See If You Qualify!</h4>
					<h5 class="mb-0 text-info"><a href="tel:<?php echo $phone_link; ?>"><?php echo $phone_formatted; ?></a></h5>
				</span>  
			</nav>
        </div>
    </header>
  
    <header class="header d-none d-md-block">
        <nav class="navbar navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <div class="logo">
                        <img src="images/logo.png" alt="logo" style="height: 75px">
                    </div>
                </a>
                <div class="ml-auto call_enquiry">
                    <p>Call To See If You Qualify!</p>
                    <p class="mb-0 text-info"><a href="tel:<?php echo $phone_link; ?>"><?php echo $phone_formatted; ?></a></p>
                </div>
            </div>
        </nav>
    </header>

    <main class="main_content m_h_page">

        <section class="banner_sec" style="min-height: 775px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="content_view">
                            <h1>Find Out What Millions of Diabetics Are Raving About!</h1>
                            <p class="d-none d-md-block lead">The New CGM monitor is the NEW way to manage your diabetics.</p>
                            <button type="button" class="btn btn_danger mr-auto d-none d-md-block">No more pricking your finger!</button>
                            <p class="mb-0 lead">Check your glucose with a painless scan 3-4 times daily, <b>no more pricking your finger!</b></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form_view">
                            <h2>Apply Now! See If Insurance Will Cover a New CGM Meter!</h2>
                            
                            <form id="cgm-form" method="POST" action="https://app.leadconduit.com/flows/5e7526505d7e3627c69a9973/sources/5e7537ce1dab3aee59e8fe5d/submit?success_redir_url=https://medi-cgm.com/thankyou.php&failure_redir_url=https://medi-cgm.com/done.php?id=<?php echo $AFID; ?>&t={{testing}}&i={{injecting}}&r={{reason}}">

								<div id="step1" name="step1">
									<div class="row">
										<div class="col-12 text-whtie">
											<label for="testing" class="lead text-white">Do you test your sugar more than 3 times per day? <small><b>(Required)</b></small></label>
											<div class="input-group mb-3">
												<select class="form-control pl-3" id="testing_xy7" name="testing_xy7">
													<option selected disabled value=" ">Select...</option>
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
												<div class="text-white"></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 text-center">
											<button type="button" id="btn-next1" name="btn-next1" class="btn btn-danger btn-lg">Next <i class="fa fa-fw fa-arrow-right" aria-hidden="true"></i></button>
										</div>								
									</div>								
								</div>
								
								<div id="step2" name="step2" style="display:none">
									<div class="row">
										<div class="col-12 text-whtie">
											<label for="injecting" class="lead text-white">Do you inject insulin more than 2 times per day? <small><b>(Required)</b></small></label>
											<div class="input-group mb-3">
												<select class="form-control pl-3" id="injecting_xy7" name="injecting_xy7">
													<option selected disabled value=" ">Select...</option>
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
												<div class="text-white"></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 text-center">
											<button type="button" id="btn-next2" name="btn-next2" class="btn btn-danger btn-lg">Next <i class="fa fa-fw fa-arrow-right" aria-hidden="true"></i></button>
										</div>								
									</div>								
								</div>

								<div id="step3" name="step3" style="display:none" >
									<div class="row">
										<div class="col-12 col-md-6">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fas fa-user-alt fa-lg text-info"></i></span>
												</div>
												<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
												<div class="invalid-feedback text-white">Please enter your first name</div>
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fas fa-user-alt fa-lg text-info"></i></span>
												</div>
												<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
												<div class="invalid-feedback text-white">Please enter your first name</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fas fa-envelope fa-lg text-info"></i></span>
												</div>
												<input type="email" class="form-control" id="email" name="email" placeholder="Email">
												<div class="help-block1"></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fas fa-mobile-alt fa-lg text-info"></i></span>
												</div>
												<input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
												<div class="help-block1"></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 text-center">
											<button type="button" id="btn-next3" name="btn-next3" class="btn btn-danger btn-lg">Next <i class="fa fa-fw fa-arrow-right" aria-hidden="true"></i></button>
										</div>								
									</div>
								</div>
								<div id="step4" name="step4" style="display:none">
									<div class="row">
										<div class="col-12">
											<div class="input-group mb-3">
												<input type="tel" class="form-control pl-3" id="dob" name="dob" placeholder="Date of Birth (MM/DD/YYYY)">
												<div class="help-block1"></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-md-4">
											<div class="input-group mb-3">
												<input type="text" class="form-control pl-3" id="city" name="city" placeholder="City">
												<div class="help-block1"></div>
											</div>
										</div>
										<div class="col-12 col-md-4">
											<div class="input-group mb-3">
												<select class="form-control pl-3" id="state" name="state">
													<option selected disabled value="">State</option>
													<option value="AL">Alabama</option>
													<option value="AK">Alaska</option>
													<option value="AZ">Arizona</option>
													<option value="AR">Arkansas</option>
													<option value="CA">California</option>
													<option value="CO">Colorado</option>
													<option value="CT">Connecticut</option>
													<option value="DE">Delaware</option>
													<option value="DC">District Of Columbia</option>
													<option value="FL">Florida</option>
													<option value="GA">Georgia</option>
													<option value="HI">Hawaii</option>
													<option value="ID">Idaho</option>
													<option value="IL">Illinois</option>
													<option value="IN">Indiana</option>
													<option value="IA">Iowa</option>
													<option value="KS">Kansas</option>
													<option value="KY">Kentucky</option>
													<option value="LA">Louisiana</option>
													<option value="ME">Maine</option>
													<option value="MD">Maryland</option>
													<option value="MA">Massachusetts</option>
													<option value="MI">Michigan</option>
													<option value="MN">Minnesota</option>
													<option value="MS">Mississippi</option>
													<option value="MO">Missouri</option>
													<option value="MT">Montana</option>
													<option value="NE">Nebraska</option>
													<option value="NV">Nevada</option>
													<option value="NH">New Hampshire</option>
													<option value="NJ">New Jersey</option>
													<option value="NM">New Mexico</option>
													<option value="NY">New York</option>
													<option value="NC">North Carolina</option>
													<option value="ND">North Dakota</option>
													<option value="OH">Ohio</option>
													<option value="OK">Oklahoma</option>
													<option value="OR">Oregon</option>
													<option value="PA">Pennsylvania</option>
													<option value="RI">Rhode Island</option>
													<option value="SC">South Carolina</option>
													<option value="SD">South Dakota</option>
													<option value="TN">Tennessee</option>
													<option value="TX">Texas</option>
													<option value="UT">Utah</option>
													<option value="VT">Vermont</option>
													<option value="VA">Virginia</option>
													<option value="WA">Washington</option>
													<option value="WV">West Virginia</option>
													<option value="WI">Wisconsin</option>
													<option value="WY">Wyoming</option>
												</select>
												<div class="help-block1"></div>											
											</div>
										</div>
										<div class="col-12 col-md-4">
											<div class="input-group mb-3">
												<input type="text" class="form-control pl-3" id="postal_code" name="postal_code" placeholder="Zip">
												<div class="help-block1"></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-md-10 offset-md-1 text-left">
											<div class="input-group mb-3">
												<input class="" type="checkbox" value="Yes" id="agree_to_terms_xy7" name="agree_to_terms_xy7">
												<label class="text-white" for="agree" style="line-height: 1em;">
													<small>I agree that I am at least 18 years of age and agree to be contacted by St Joseph's and its contracted third parties to receive helpful information on diabetes and related treatments, products and services.  I agree to receive communication through automated phone calls and text messages.  St. Joseph's will not sell or transfer my name or contact information to any third party for its marketing use.</small>
												</label>
												<div class="help-block1"></div>
											</div> 
										</div>
									</div>

									<div class="text-center">
										<button type="submit" class="btn btn_danger text-uppercase">Apply Now!</button>
									</div>
									<input name="afid_xy7" type="hidden" value="<?php echo $AFID; ?>">
									<input name="campaign_source" type="hidden" value="<?php echo $source; ?>">
									<input name="aff_sub_xy7" type="hidden" value="<?php echo $aff_sub; ?>">
									<input name="aff_sub2_xy7" type="hidden" value="<?php echo $aff_sub2; ?>">
									<input name="aff_sub3_xy7" type="hidden" value="<?php echo $aff_sub3; ?>">
									<input name="aff_sub4_xy7" type="hidden" value="<?php echo $aff_sub4; ?>">
									<input name="aff_sub5_xy7" type="hidden" value="<?php echo $aff_sub5; ?>">
								</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<div class="mobile-margin d-md-none"></div>

        <section class="glucose_sec">
            <div class="container">
                <div class="media">
                    <img src="images/glucose_img.png" alt="img">
                    <div class="media-body">
                        <h5>Check your glucose with a painless<br class="d-none d-lg-block"> scan, instead of a fingerstick</h5>
                        <p>Diabetes is complex enough.<br class="d-none d-lg-block"> Monitoring your diabetes shouldn’t be.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="images/accurate.jpg" alt="image">
                            <div class="card-body">
                                <h4 class="card-title">Accurate</h4>
                                <p class="card-text">The FreeStyle Libre 14 day sensor is part of a<br class="d-none d-xl-block"> continuous glucose monitoring system, checking your<br class="d-none d-xl-block"> readings day and night, and is accurate for insulin dosing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="images/convenient.jpg" alt="image">
                            <div class="card-body">
                                <h4 class="card-title">Convenient</h4>
                                <p class="card-text">The small sensor is about the size of two stacked quarters and can be scanned discreetly, even through clothing. You can even scan the sensor with your compatible smartphone.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="images/user_friendly.jpg" alt="image">
                            <div class="card-body">
                                <h4 class="card-title">User-friendly</h4>
                                <p class="card-text">The FreeStyle Libre 14 day sensor is painless to apply and easy to
                                    wear. It is water resistant so you can<br class="d-none d-xl-block"> swim, shower,
                                    or exercise.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="freestyle_sec">
            <div class="container">
                <p>The FreeStyle LibreLink app is compatible with NFC-enabled smartphones running Android OS 5.0 or higher and iPhone 7 or later running iOS 11 or later. Use of the FreeStyle LibreLink app requires registration with LibreView, a service provided by Abbott and Newyu, Inc.</p>
                <p>Fingersticks are required for treatment decisions when you see Check Blood Glucose symbol, when symptoms do not match system readings, when you suspect readings may be inaccurate, or when you experience symptoms that may be due to high or low blood glucose.</p>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <p class="mb-0">&copy;Copyright <?php echo date('Y'); ?> | <a href="privacy.html">Privacy</a> | <a href="dmca.html">DMCA</a></p>
            </div>
        </footer>
    </main>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
	<script src="js/main.js"></script>

	<script>
		$("#phone").mask("(999) 999-9999");
		$("#postal_code").mask("99999");
		$("#dob").mask("99/99/9999");
	</script>

</body>
</html>