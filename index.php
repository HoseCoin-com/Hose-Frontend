<!DOCTYPE html>
<html lang="en" xml:lang="en">    
<head>       
    <meta charset="UTF-8">  
    <!-- Responsive Meta -->                    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- favicon & bookmark -->
    <link rel="shortcut icon" href="{{ site_favicon() }}">

    <link rel="apple-touch-icon-precomposed" sizes="144x144"  href="{{ url('/') }}/images/bookmark.png" type="image/x-icon" />
    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>

    <!-- Website Title -->
    <title>Hosecoin - Blockchain for Healthy Living</title>
    <!-- Stylesheets Start -->
    <link rel="stylesheet" href="{{ url('/') }}/frontend/css/fontawesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="{{ url('/') }}/frontend/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="{{ url('/') }}/frontend/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="{{ url('/') }}/frontend/css/fancybox/jquery.fancybox.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ url('/') }}/frontend/css/owl.carousel.min.css" type="text/css"/>
    <link rel="stylesheet" href="{{ url('/') }}/frontend/css/slick.css" type="text/css"/>
    <link rel="stylesheet" href="{{ url('/') }}/frontend/style.css" type="text/css"/>
    <link rel="stylesheet" href="{{ url('/') }}/frontend/css/responsive.css" type="text/css"/>
     <!-- Stylesheets End -->
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <style>
    body {
    font-family: 'Rajdhani';
    font-weight:900;
    font-size: 15px;
    color: #ffffff;
    line-height: 28px;
}

.platinum-animation .coin-icon {
    height: 140px;
    width: 140px;
    background: url({{ url('/') }}/images/hosecoin.png) no-repeat scroll 0px 0px;
    opacity: 0;
    visibility: hidden;
    -webkit-transform: translate(-50%, -50%) scale(0);
    transform: translate(-50%, -50%) scale(0);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    left: 50%;
    top: 50%;
    position: absolute;
    background-size: cover;
    z-index: 6;
}

    .white-bg {
    background: #033f72 !important;
}
    .roadmap-sec.diamond-layout {
    background-image: none;
    border: none;
    background-color: #0f6ab8;
}
    nav ul li a {
    font-weight: 900;
    font-size: 12px;
    
}

	.pre-sale-timer-outer {
    border: 3px solid rgb(247 247 1);
    border-radius: 17px;
    padding: 6px;
    margin-top: 15px;
	}
	
	.teal {
    border-color: #58f3cd;
    color: rgba(59,208,216,0.2);
    bg-board-color-2: rgba(59,208,216,0);
    text-color: #3bd0d8;
    blur-size: 6px;
    border-radius: 12px;
}

	.h2title {
    font-size: 2.5rem;
    margin: 0px 0px 30px 0px;
    color: #ffff01;
    font-weight: bold;
    font-weight:900;
}
	
	.tab-section .nav-tabs .nav-item {
    margin: 0px 15px;
    color: #02ff3c;
    font-weight: bold;
    font-size: 18px;
}
	
	.about-section {
    padding: 90px 0;
    background: #012c51;
}

.brand-logo-slider {
    background: linear-gradient(
350deg, #03233f 0%, #06466A 50%, #0477AE 100%);
    padding-top: 35px;
    padding-bottom: 35px;
    clear: both;
    overflow: hidden;
    line-height: 0;
}

.heading1 {
    font-size: 3.5rem;
    margin: 0px 0px 30px 0px;
    color: #f8f9fa;
    font-weight: bold;
}

.about-section h5 {
    font-size: 18px;
    line-height: 28px;
    color: #ffffff;
    font-weight: 700;
}
	
	.btn {
    color: #1d1d1d;
    padding: 14px 30px;
    background: #cece01;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    font-weight: 700;
    text-transform: uppercase;
}
	
	.hero-caption h1 span {
    font-weight: 300;
    color: #ffff0e;
}

.form-block.style-2 {
    padding: 36px 50px;
    background: url(https://raydium.io/_nuxt/img/index_background2.e7580d1.svg);
    box-shadow: 13px 13px 20px #03467f, -13px -13px 20px #0559a2;
    -webkit-border-radius: 10px;
    border-radius: 55px;
    /* background: linear-gradient(
90deg, #07253D 0%, #06466A 50%, #0477AE 100%); */
}

.benefits {
    background-image: url(images/tr-circle-bg.png);
    background-repeat: no-repeat;
    background-color: #cece01;
    background-position: left center;
    float: left;
    width: 100%;
}


.gold-tech-bg {
    background: linear-gradient(90deg, #07253D 0%, #06466A 50%, #0477AE 100%);
}

.menu-icon span {
    background: #fbfb01;
    border: none;
    height: 3px;
    width: 100%;
    position: absolute;
    top: 0px;
    left: 0;
    -webkit-transition: all .35s ease;
    transition: all .35s ease;
    cursor: pointer;
}

.benefit-box {
    background: #1076cf;
    g, #007bff 0%, #0871e1 50%, #0c9ee5 100%);
    padding: 50px 30px;
    margin: 15px 0px;
    -webkit-transition: all 300ms;
    transition: all 300ms;
    cursor: pointer;
}
	
    .lead, p.lead {
    font-size: 26px;
    font-weight: 300;
    line-height: 1.6;
}

nav ul li.nav-btn a {
    color: #1d1d1d;
    padding: 10px 32px;
    background: #fefe01;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}

footer {
    float: left;
    width: 100%;
    background: #03233f;
    padding: 90px 0 45px;
    color: rgba(242, 242, 242, 0.6);
}

.layout-3 .sec-title h1 {
    font-size: 50px;
}
	.pre-sale-timer {
    text-align: center;
    max-width: 420px;
    width: 100%;
    float: right;
    padding: 30px;
    padding-top: 0px;
    padding-bottom: 0px;
    background: -moz-linear-gradient(bottom, rgba(251, 189, 24, 1) 0%, rgba(251, 189, 24, 0) 100%);
    background: -webkit-linear-gradient(bottom, rgb(213 213 1) 0%, rgba(251, 189, 24, 0) 100%);
    background: linear-gradient(to top, rgb(247 247 1) 0%, rgba(251, 189, 24, 0) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#fbbd18', endColorstr='#00fbbd18', GradientType=0);
    bottom: 0px;
    position: relative;
    height: 100vh;
    display: table;
}

.form-block.style-2 h3 {
    color: #000000;
    font-size: 20px;
    font-weight: 700;
}

.btn {
    color: #f8f9fa;
    padding: 14px 30px;
    background: linear-gradient(
179deg, #ffc107 0%, #1076cf 50%, #ffff01 100%);
    -webkit-border-radius: 4px;
    border-radius: 4px;
    font-weight: 700;
    text-transform: uppercase;
    text-shadow: -2px 0px 4px black;
}

.hose_button {
    background: #F89C47;
    background: linear-gradient( 
90deg, #F89C47 0%, #F36A34 50%, #DC413D 100%);
    border: 0px none;
    color: white;
    width: 212px;
    margin: 20px 6px;
    vertical-align: middle;
    font-weight: 700;
    position: relative;
    height: 52px;
    cursor: pointer;
    font-size: 15px;
    text-transform: uppercase;
    border-radius:15px
}

.roadmap-live-slider .roadmap-item h4 {
    text-shadow: -1px 0px 1px #ffff01;
    font-size: 18px;
    color: #000000;
    font-weight: 400;
    display: block;
}

.mobile-center {
    margin-top: -150px;
}

.light-gray-bg {
    background-color: #023e6c;
}
	</style>
</head>
<body>
    <!--Main Wrapper Start-->
    <div class="wrapper" id="top">
        <!--Header Start -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4 logo">
                        <a href="{{ url('/') }}/" title="hosecoin">
                            <img class="light" src="{{ url('/') }}/images/hosecoin.png"  width="50" alt="hosecoin">
                            <img class="dark" src="{{ url('/') }}/images/hosecoin.png" width="50" alt="hosecoin">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-8 main-menu">
                        <div class="menu-icon">
                          <span class="top"></span>
                          <span class="middle"></span>
                          <span class="bottom"></span>
                        </div>
                        <nav class="onepage">
                            <ul>
                                <li class="active"><a href="#top">What is HOSE?</a></li>
                                <li><a href="#solution">Solution</a></li>
                                <li><a href="https://hosecoin.medium.com/" target="_blank">News</a></li>
                                <li><a href="#roadmap">roadmap</a></li>
                                <li><a href="https://t.me/hosescoin" target="_blank">Telegram</a></li>
                                <li><a href="#team">team</a></li>
                                <li><a href="#faq">FAQ</a></li>
                                @auth
                                <li class="nav-btn"><a style="border-radius:50px;" href="https://hosecoin.io/user">Launchapp</a></li>
                                @else
                                <li class="nav-btn"><a style="border-radius:50px;" href="https://hosecoin.io/login">Buy Now</a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!--Header End-->

        <!-- Content Section Start -->   
        <div class="midd-container">
            <!-- Hero Section Start -->   
            <div class="hero-main layout-3 white-sec" style="background-color:#022646;">
                <div class="gold-tech-bg" id="gold-tech-bg"></div>
                <div class="container">
                    <div class="row row-reverse align-items-center">
                        <div class="col-sm-12 col-md-6" data-wow-delay="0.5s">
                            <div style="margin-top: -195px;" class="platinum-animation">
                                <div class="platinum-move-1"></div>
                                <div class="platinum-move-2"></div>
                                <div class="platinum-move-3"></div>
                                <div class="platinum-move-4"></div>
                                <div class="platinum-move-5"></div>
                                <div class="top-part">
                                    <div class="coin-icon"></div>
                                </div>
                                <div class="millde-part">
                                    
                                </div>
                                <div class="base">
                                     <div class="lines">
                                        <span class="l-1"></span>
                                        <span class="l-2"></span>
                                        <span class="l-3"></span>
                                        <span class="l-4"></span>
                                        <span class="l-5"></span>
                                    </div>   
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-12 col-md-6 mobile-center">
                            <h1 style="font-size:35px;">BUILD AND FUND HEALTHCARE TOGETHER WITH <span style="color: #ffff01;">DECENTRALIZED FINANCE!</span></h1>
                            <p class="lead">Blockchain Protocol For Open Healthcare</p>
                            <div class="hero-btns">
                                @auth
                                <a href="https://hosecoin.io/user" class="btn btn3">Buy Now</a>
                                <a href="https://hosecoin.io/white-paper" class="btn btn3">Read Docs</a>
                                @else
                                <a href="https://hosecoin.io/login" class="btn btn3">Buy Now</a>
                                <a href="https://hosecoin.io/white-paper" class="btn btn3">Read Docs</a>
                                @endauth
                            </div>
                </div>
            </div>
              </div>
            <!-- Hero Section End -->   
              <div class="stipe-value-slider">
                    <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
<coingecko-coin-price-marquee-widget  coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="usd" background-color="transparent" locale="en"></coingecko-coin-price-marquee-widget>
                </div>
                
            </div>
            
            

			<div class="about-section p-tb diamond-layout" id="about">
                <div class="container">
                <h2 class="h2title" align="center">HOSECOIN INTRODUCTION</h2>
                <div class="embed-responsive embed-responsive-16by9" style="border-radius:15px;">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/m3VqydeoUZw" allowfullscreen></iframe>
                    </div>
                    <br>
                    <br>
                    <br>
                <div class="row">
                    <div class="col-lg-15 col-md-12 mt-12 mb-12 ">
                        <div class="form-block style-2 ">
                               <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="benefit-box text-center" style="border-radius:15px; height: 213px;">
                               <div class="bf-icon">
                                <img src="images/Time_1.png" alt="">
                            </div>
                            <div class="text">
                                    <h1 style="font-size:25px;">Trade</h1>
                                    
                                    <hr>
                                    <p>Swap or Trade quickly and cheaply.</p>
                                    <center><a href="#" class="btn btn-small">Enter Exchange</a><center>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="benefit-box text-center" style="border-radius:15px; height: 213px">
                                <div class="bf-icon">
                                <img src="{{ url('/') }}/images/Time_1.png" alt="">
                            </div>
                            <div class="text">
                                    <h1 style="font-size:25px;">Yield</h1>
                                    <hr>
                                    <p>Earn yield through fees and yield farms.</p>
                                     <center><a href="#" class="teal btn btn-small">Enter Farms</a> </center>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="benefit-box text-center" style="border-radius:15px; height: 213px; ">
                               <div class="bf-icon">
                                <img src="{{ url('/') }}/images/Time_1.png" alt="">
                            </div>
                            <div class="text">
                                    <h1 style="font-size:25px;">Pool</h1>
                                    <hr>
                                    <p>Rearn while providing liquidity for HOSE token.</p>
                                    <a href="#" class="btn btn-small">Add Liquidity</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="benefit-box text-center" style="border-radius:15px; height: 213px;">
                                <div class="bf-icon">
                                <img src="{{ url('/') }}/images/Time_1.png" alt="">
                            </div>
                            <div class="text">
                                    <h1 style="font-size:25px;">Accelerator</h1>
                                    <hr>
                                    <p>Launchpad for new Hosecoin projects.</p>
                                    <a href="#" class="btn btn-small">View Projects</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                            </div>
                            <br>
<br>
<br>
</div>


                        <div class="col-lg-12 col-md-12" id="solution">
                            <h2 class="h2title">ABOUT HOSECOIN</h2>
                            <h5 class="heading1" align="">There are opportunities to improve the healthcare, but it requires global collaboration. The Hose community is building open-source technology that solve urgent problems. Hose is a protocol built on top of blockchain that uses open source technology to fund and build digital public goods projects that serve everyone, and solve our most immediate health problems. It is used for Funding digital public health in the form of open source heathcare software, governed by smart contracts. With Hose, the public has the ability to share in the success of novel health projects and get rewarded.</h5>
                            <h5 align="">Through distributed funding and organizations, we build together toward our shared goals. The community help fund amazing development teams so they can create great health projects for everyone. This will provide befitting ground for rapid research in health and pharmaceutical development; thus, ensuring that most endemic and epidemic diseases that kill people worldwide are eliminated. The token will catalyze change and enhance health and wealth synchrony in line with United Nations' Sustainable Development Goal 1, 3 & 9.</h5>
                            <div class="tab-section">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs text-uppercase" role="tablist">
                                    <li class="nav-item">
                                        <span class="nav-link active" id="visnew-tab" data-toggle="tab" href="#visnew" role="tab" aria-controls="visnew" aria-selected="true">How it works</span>
                                    </li>
                                    <li class="nav-item">
                                        <span class="nav-link" id="mission-tab" data-toggle="tab" href="#mission" role="tab" aria-controls="mission" aria-selected="true">Our Mission</span>
                                    </li>
                                    <li class="nav-item">
                                        <span class="nav-link" id="vision-tab" data-toggle="tab" href="#vision" role="tab" aria-controls="vision" aria-selected="false">Vast Market</span>
                                    </li>
                                    <li class="nav-item">
                                        <span class="nav-link" id="guarantees-tab" data-toggle="tab" href="#guarantees" role="tab" aria-controls="guarantees" aria-selected="false">Strategic Partnership</span>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                     <div class="tab-pane active" id="visnew" role="tabpanel" aria-labelledby="visnew-tab">
                                         <ul>
                                         <li>Give back and become a true leader of the open healthcare. Choose the projects and technology you believe are most vital, and contribute to them directly during the next funding round. Let’s fund the future together, and build the world we want to  and get rewarded.</li>
                                         <br>
                                         <li>You can also work on open projects, take part in hackathons sponsored by innovative health organizations, or start the next great public works project. Earn for the public good, and contribute to solving some of humanity’s most pressing coordination problems. Teams have raised over 1M through Hose, join us!</li>
                                         </ul>
                                         </div>
                                         
                                    <div class="tab-pane" id="mission" role="tabpanel" aria-labelledby="mission-tab">
                                        <li>Our mission is to build and fund decentralized healthcare system. We empower communities of builders to connect and work together to create the future of decentralized healthcare.</li>
                                        <!--<ul>
                                            <li>To fund pharmaceutical companies and provide medical equipments with the objectives of cultivating standard parasitic and bacteria drugs</li>
                                            <li>To fund hospitals with objectives delivering optimum health care system to issues concerning parasitic and backteria infection with relative ease.</li>
                                            <li>To encourage and fund health related companies for in-depth researches for cure and management of diseases.</li>

                                        </ul>-->
                                    </div>
                                    <div class="tab-pane" id="vision" role="tabpanel" aria-labelledby="vision-tab">
                                        <ul>
                                        <li>It will create the marketplace of different easily affordable medicines,drugs and medical equipments in Africa and other nations of the world, especially those life saving drug and medicines which are relatively at higher price due to expensive generics.</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="guarantees" role="tabpanel" aria-labelledby="guarantees-tab">
                                        <li>Strategic Partnership with healthcare and  pharmaceutical companies to sternly  research and develop anteretroviral drugs for viral cure , their variant as well as other rare disease and life-saving drugs to co-develop them in Africa and other nation of the world.</li>
                                        <br>
                                        <li>To boost rapid production of parasitic and fungal drugs and provide funds to hospital for management of health related issues.</li>
                                    </div>
                                </div>
                            </div>
                            <div class="button-wrapper">
                                <a class="btn btn3" href="https://hosecoin.io/white-paper">Whitepaper</a>
                                <a class="btn btn3" href="#">Farming (Coming Soon)</a>
                                <a class="btn btn3" href="https://bscscan.com/token/0x896A8e20adf946dB11Cff64C30fC0E34B322dd0C">Explorer</a>
                                <a class="btn btn3" href="https://t.me/hosescoin">Telegram</a>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            
             <!-- The Roadmap  start-->
            <div class="roadmap-sec p-tb diamond-layout" id="roadmap">
                <div class="container">
                    <div class="text-center"><h2 class="h2title">OUR ROADMAP</h2></div>
                    <div class="sub-txt text-center">
                        <p>Here is the roadmap that drives the Hose development</p>
                    </div>
                    <div class="roadmap-live-slider">
                        <div class="roadmap-item">
                            <div>
                                <span class="roadmap-date">Q2: 2021</span>
                                <h4>Initial Team Formation<hr>Website Update V1.0<hr>Media Presence Formation<hr>Craft a Proper Pricing Strategy</h4>
                                <span class="live-mark">Completed</span>
                            </div>
                        </div>
                        <div class="roadmap-item">
                            <div>
                                <span class="roadmap-date">Q3 2021</span>
                                <h4>Testnet Deployment<hr>Core Team Expansion<hr>Website Update V1.2</h4>
                                <span class="live-mark">Completed</span>
                            </div>
                        </div>
                        <div class="roadmap-item active">
                            <div>
                                <span class="roadmap-date">Q4 2021</span>
                                <h4>Mainnet Deployment<hr>Private and Presales<hr>Presale - Phase 2<hr>Farming and Staking<hr>List on Pancakeswap and Uniswap</h4>
                                <span class="live-mark">Ongoing</span>
                            </div>
                        </div>
                        <div class="roadmap-item ">
                            <div>
                                <span class="roadmap-date">Q1 2022</span>
                                <h4>Launchpad Live<hr>
                                Hackathon<hr>
                                Airdrop and Community Voting<hr>
                                Marketing and PR expansion</h4>
                                <span class="live-mark">Upcoming</span>
                            </div>
                        </div>
                        <div class="roadmap-item">
                            <div>
                                <span class="roadmap-date">Q2 2022</span>
                                <h4>Listing on major exchanges<hr>Community Voting 2<hr>Hose NFT Marketplace<hr>Public Health API<hr>Further Listing on order Exchanges
</h4>
                                <span class="live-mark">Coming Soon</span>
                            </div>
                        </div>
                        <div class="roadmap-item">
                            <div>
                                <span class="roadmap-date">Q3 2022</span>
                                <h4>Strategic Partnership With health agencies<hr>Hackathons 2.0<hr>Airdrop 2.0</h4>
                                <span class="live-mark">Coming Soon</span>
                            </div>
                        </div>
                        
                    </div>
                </div>
           
            </div
            
            <!-- FAQ Section start-->
            <div class="faq-section p-tb white-bg diamond-layout" id="faq">
                <div class="container">
                    <div class="text-center"><h2 class="h2title">Frequently Asked Questions</h2></div>
                    <div class="row">
                        <div class="col-sm-12">
                            <!--Accordion wrapper-->
                            <div class="accordion md-accordion style-2" id="accordionEx" role="tablist" aria-multiselectable="true">
                                <!-- Accordion card -->
                                <div class="card">
                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="headingOne1">
                                        <a data-toggle="collapse"style="border-radius:25px;"  data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                            <h5 class="mb-0">
                                               What is Hosecoin? <i class="fas fa-caret-down rotate-icon"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <!-- Card body -->
                                    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                                        <div class="card-body">
                                           Hosecoin is an open source funding platform for open healthcare built on blockchain.
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion card -->
                                <!-- Accordion card -->
                                <div class="card">
                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="headingTwo2">
                                        <a class="collapsed" style="border-radius:25px;" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                            <h5 class="mb-0">
                                                Who is a Hose Ambassador and how do I join?
                                     <i class="fas fa-caret-down rotate-icon"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <!-- Card body -->
                                    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                                        <div class="card-body">
                                            <p>Ambassadors help onboard people to the network and earn a reward in return. The Hose Network has a thriving community of developers, enterprise partners, ambassadors, and nearly ten thousand community members engaged in global social channels. We’d love to have you onboard. <a href="https://forms.gle/yeGuNymjnb6UJAnSA" target="_blank">  CLICK HERE TO APPLY</a></p>
                                           <ul class="notion-bulleted-list">
                                             <!--<li  class="notion-list-item"><span class="notion-semantic-string"><span>As an affiliate you will earn a 20% bonus on the tokens purchased by your referrals.</span></span></li>
                                             <li  class="notion-list-item"><span class="notion-semantic-string"><span>To become an affiliate you must create an affiliate account.</span></span></li>
                                             <li  class="notion-list-item"><span class="notion-semantic-string"><span>You will be provided with an affiliate link that you may share through your referrals channels.</span></span></li>
                                            <li  class="notion-list-item"><span class="notion-semantic-string"><span>To earn the bonus your referral must choose to buy "with affiliate link" or after being logged into their own affiliate account.</span></span></li>
                                            <li class="notion-list-item"><span class="notion-semantic-string"><span><strong>NOTE: If a referral does not create an account we will not be able link their purchases with your affiliate account.</strong></span></span></li>
                                            <li  class="notion-list-item"><span class="notion-semantic-string"><span>Referral purchases will be reviewed and credited to your account.</span></span></li>--></ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion card -->
                                 <!-- Accordion card -->
                                <div class="card">
                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="headingOne3">
                                        <a data-toggle="collapse" style="border-radius:25px;" data-parent="#accordionEx" href="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                                            <h5 class="mb-0">
                                              Where can I send a marketing proposal?  <i class="fas fa-caret-down rotate-icon"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <!-- Card body -->
                                    <div id="collapseOne3" class="collapse show" role="tabpanel" aria-labelledby="headingOne3" data-parent="#accordionEx">
                                        <div class="card-body">
                                           Email proposal to <a href="mailto:sales@hose-coin.com">sales@hosecoin.io</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion card -->
                                

                            </div>
                            <!-- Accordion wrapper -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQ Section end--> 
            
            <!-- Team sec start-->
            <div class="team-section p-tb light-gray-bg mercury-layout" id="team">
                <div class="container">
                    <div class="text-center"><h2 class="h2title"><span>Meet Our Expert</span></h2></div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="team-box" style="border-radius:15px;">
                                <div class="team-img" style="border-radius:15px;">
                                    <img src="{{ url('/') }}/frontend/images/team-g.jpg"  alt="team">
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text" style="border-radius:15px;">
                                   <h4>GOD'SWILL<br> HARAMKEM</h4>
                                    <span><font color="black">Marketing officer</font></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="team-box" style="border-radius:15px;">
                                <div class="team-img" style="border-radius:15px;">
                                    <img src="{{ url('/') }}/frontend/images/team-e.jpg"  alt="team" alt="" width="400" height="293">
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text" style="border-radius:15px;">
                                    <h4>EMMANUEL<br>ARTHUR</h4>
                                    <span><font color="black">Lead Product Manager</font></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" >
                            <div class="team-box" style="border-radius:15px;">
                                <div class="team-img" style="border-radius:15px;">
                                    <img src="{{ url('/') }}/frontend/images/team-s.jpeg"  alt="team" width="400" height="293">
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text" style="border-radius:15px;">
                                    <h4>SHAGBA HUMPHREY<br>TERHEMBA</h4>
                                    <span><font color="black">Pharmacist</font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team sec end-->
            
          
            <!-- Brand logo slider -->
            <div class="brand-logo-slider c-l p-tb white-sec">
                <div class="container">
                    <div class="text-center"><h2 class="section-heading">Our <span>Partners</span></h2></div>
                     <center><span><img class="partners-img" src="{{ url('/') }}/frontend/images/patner1.png"></span>
                     <span><img class="partners-img" src="{{ url('/') }}/frontend/images/patner2.png"></span> 
                     <span><img class="partners-img" src="{{ url('/') }}/frontend/images/patner3.png"></span> 
                     <span><img class="partners-img" src="{{ url('/') }}/frontend/images/patner4.png"></span>                        
                     <span><img class="partners-img" src="{{ url('/') }}/frontend/images/patner5.png"></span></center>
                    
                    <div class="brand-logos owl-carousel">
                        <div class="item"><img src="{{ url('/') }}/frontend/images/1.png" width="100" alt="cmc" /></div>
                        <div class="item"><img src="{{ url('/') }}/frontend/images/2.png" width="100" alt="pancakeswap" /></div>
                        <div class="item"><img src="{{ url('/') }}/frontend/images/3.png" width="100" alt="solana" /></div>
                        <div class="item"><img src="{{ url('/') }}/frontend/images/5.png" width="100" alt="bsc" /></div>
                        <div class="item"><img src="{{ url('/') }}/frontend/images/logo-blue.svg" width="100" alt="who" /></div>

                    </div>
                </div>
            </div>
            <!-- Brand logo end -->
	 <!--footer Start-->   
        <footer class="platinum-footer">
            <div class="footer-widget-area text-center">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-lg-8">
                            <div class="widget-area">
                                <div class="widget widget-html">
                                    <div class="footer-logo">
                                        <a href="#" title=""><img src="images/hosecoin.png" width="200" alt="hosecoin"></a>
                                    </div>
                                    <div class="text">
                                        <p style=" margin-top:20px; margin-buttom:20px; font-size:14px;" class="lead"><font color="white">The community help fund amazing development teams so they can create great health projects for everyone. This will provide befitting ground for rapid research in health and pharmaceutical development; thus, ensuring that most endemic and epidemic diseases that kill people worldwide are eliminated. The token will catalyze change and enhance health and wealth synchrony in line with United Nations' Sustainable Development Goal 1, 3 & 9.. </font></p>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-area">
                                <div class="widget">
                                <ul class="footer-menu horizontal-menu onepage">
                                <li class="active"><a href="#top">What is HOSE?</a></li>
                                <li><a href="#solution">Solution</a></li>
                                <li><a href="https://medium.com/@hosecoin">News</a></li>
                                <li><a href="#roadmap">Roadmap</a></li>
                                <li><a href="#team">Team</a></li>
                                <li><a href="#faq">FAQ</a></li>
                                  </ul>
                                    
                                    
                                </div>
                            </div>
                            
                            <div class="widget-area">
                                <div class="widget widget-html text-center">
                                    <div class="socials">
                                        <ul>
                                            <li><a href="https://www.facebook.com/Hosecoinofficialpage/"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://twitter.com/CoinHose"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="https://t.me/hosescoin"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li><a href="https://www.youtube.com/channel/UCGU8Yk8qA3kBlsCm8jx_c_A"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="https://chat.whatsapp.com/Gdg9VRbte2DGvdEAt64ZyK"><i class="fab fa-whatsapp"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copy-text">© 2021 Hosecoin.</div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->   
    </div>
    <!--Main Wrapper End-->
 
    <script src="{{ url('/') }}/frontend/js/jquery.min.js"></script>
    <script src="{{ url('/') }}/frontend/js/circle-progress.js"></script>
    <script src="{{ url('/') }}/frontend/js/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/frontend/js/onpagescroll.js"></script>
    <script src="{{ url('/') }}/frontend/js/wow.min.js"></script>
    <script src="{{ url('/') }}/frontend/js/jquery.countdown.js"></script>
    <script src="{{ url('/') }}/frontend/js/owl.carousel.js"></script>
    <script src="{{ url('/') }}/frontend/js/slick.min.js"></script>
    <script src="{{ url('/') }}/frontend/js/Chart.js"></script>
    <script src="{{ url('/') }}/frontend/js/chart-function.js"></script>
    <script src="{{ url('/') }}/frontend/js/fancybox/jquery.fancybox.min.js"></script>
    <script src="{{ url('/') }}/frontend/js/script.js"></script>
    <script src="{{ url('/') }}/frontend/js/particles.js"></script>
    <script src="{{ url('/') }}/frontend/js/gold-app.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            setTimeout(function(){
                jQuery('.platinum-animation').addClass('start-animation');
            }, 1000);
            setTimeout(function(){
                jQuery('.platinum-animation .lines').addClass('active');
            }, 2000);
        });
    </script>
</body>
</html>