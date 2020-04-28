<?php
	$testing = $_GET["t"];
	$injecting = $_GET["i"];
	$reason = $_GET["r"];
/*
	if ($testing == "No" && $injecting == "Yes") {
		$message = "Unfortunately, to be eligible for a CGM monitor, you need to be testing more than 3 times per day.";
		
	} elseif ($testing == "Yes" && $injecting == "No") {
		$message = "Unfortunately, to be eligible for a CGM monitor, you need to be injecting insulin more than 2 times per day.";
		
	} elseif ($testing == "No" && $injecting == "No") {
		$message = "Unfortunately, to be eligible for a CGM monitor, you need to be testing more than 3 times per day and injecting insulin more than 2 times per day.";
		
	} elseif ($testing == "Yes" && $injecting == "Yes") {
		
		if (strpos($reason, "X") !== false) {
		$message = "Unfortunately, to be eligible for a CGM monitor, you need to be testing more than 3 times per day.";
		
		} else ($testing == "Yes" && $injecting == "No") {
			$message = "Unfortunately, to be eligible for a CGM monitor, you need to be injecting insulin more than 2 times per day.";
	
		}
		
		
		$message = "Unfortunately, to be eligible for a CGM monitor, you need to be testing more than 3 times per day and injecting insulin more than 2 times per day.";
		
	} else {
		echo "Have a good night!";
	}
*/

	if ($AFID == "10620")
	{
		$phone_link = "18449720281";
		$phone_formatted = "(844) 972-0281";
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
	<meta property="og:url" content="https://medi-cgm.com/">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.min.css">
    <script src="https://kit.fontawesome.com/b3ca36d355.js" crossorigin="anonymous"></script>

	<style>
		.mobile-margin { margin-top: 225px; }
	</style>
	
	<script type="application/javascript">(function(w,d,t,r,u){w[u]=w[u]||[];w[u].push({'projectId':'10000','properties':{'pixelId':'10015524'}});var s=d.createElement(t);s.src=r;s.async=true;s.onload=s.onreadystatechange=function(){var y,rs=this.readyState,c=w[u];if(rs&&rs!="complete"&&rs!="loaded"){return}try{y=YAHOO.ywa.I13N.fireBeacon;w[u]=[];w[u].push=function(p){y([p])};y(c)}catch(e){}};var scr=d.getElementsByTagName(t)[0],par=scr.parentNode;par.insertBefore(s,scr)})(window,document,"script","https://s.yimg.com/wi/ytc.js","dotq");</script>

</head>
<body>
    <header class="header">
        <nav class="navbar navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <div class="logo">
                       <img src="images/logo.png" alt="logo" style="height: 75px">
                    </div>
                </a>
                <div class="ml-auto call_enquiry">
                    <p>Call For FREE Quote Today</p>
                    <p class="mb-0 text-info"><?php echo $phone_formatted ?></p>
                </div>
            </div>
        </nav>
    </header>

    <main class="main_content m_h_page">

        <section class="banner_sec" style="height: 600px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="content_view">
                            <h1>Find Out What Millions of Diabetic Are Raving About!</h1>
                            <p>The New CGM monitor is the NEW way to manage your diabetics.</p>
                            <button type="button" class="btn btn_danger mr-auto">No more pricking your finger!</button>
                            <p class="mb-0">Check your glucose with a painless scan, instead of a fingerstick.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form_view text-center" style="height: 500px;">
                        		<BR><BR>
                            	<h2>Uh Oh!</h2>
                            	<h3 class="text-white">After reviewing your info, it seems you may not qualify for the CGM monitor program.<BR><BR>If you would like more information, please call us right away at <?php echo $phone_formatted ?>.</h3>
                            

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
                                <p class="card-text">The small sensor is about the size of two stacked quarters and can be scanned discreetly, 1 even through clothing. You can even scan the sensor with your compatible smartphone.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="images/user_friendly.jpg" alt="image">
                            <div class="card-body">
                                <h4 class="card-title">User-friendly</h4>
                                <p class="card-text">The FreeStyle Libre 14 day sensor is painless1 to apply and easy to
                                    wear. 1 It is water resistant so you can<br class="d-none d-xl-block"> swim, shower,
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
                <p class="mb-0">&copy;Copyright 2020 | <a href="privacy.html">Privacy</a> | <a href="dmca.html">DMCA</a></p>
                t=<?php echo $testing; ?><BR>
                i=<?php echo $injecting; ?><BR>
                r=<?php echo $reason; ?><BR>
            </div>
        </footer>
    </main>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>