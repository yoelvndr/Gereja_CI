<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<style>
    #map {
        height: 200px;
        width: 100%;
        border:1px dashed saddlebrown;
    }
	
	.menu{
		z-index:2;
		position:absolute;
		margin-top:50px;
		margin-left:30px;
		font-size:150%;
	
	}
	
	.mn{
		background:white;
		border-radius:10%;
		margin-left:20px;
	}
	 
	.note{
		
		z-index:1;
		text-align:right;
		width:300%;
		
	}
	.sehat{
		width:100%; 
		height:100%;
	}
	.sehat_detail{
		width:100%; 
		margin-top:40px;
	}

</style>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>GBI Anugerah Sulung</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/ico" href="<?php echo base_url(); ?>/favicon.ico">


        <link rel="stylesheet" href="assets/css/navmenu/styles.css">
        <link rel="stylesheet" href="assets/css/portfolio.jquery.css">
        <link rel="stylesheet" href="assets/css/fonticons.css">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="assets/fonts/stylesheet.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--Home page style-->
        <nav>
            <div class="container">
                <div class="nav-top clearfix">
                    <div class="logo" style ="width:20%;">
                        <a href="index.html" class="navbar-brand" style ="width:250px; margin-top:-15px;" ><img src="assets/images/logo dan nama.png" alt="Logo" /></a>
                    </div>

                    <div class="head_top_social pull-right">
                        <ul class="list-inline">
                            Ikuti perkembangan kami melalui-->
                            <li class="top_socail">
                                <a href="https://www.facebook.com/GBI-Anugerah-Sulung-148841488828/" target="blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/gbi_anugerahsulung/?hl=en" target="blank"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.youtube.com/channel/UCjyayXEK0M932qe8Rz_tvBw" target="blank"><i class="fa fa-youtube"></i></a>
                            </li>

                        </ul>
                    </div>

                    <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                        <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                    </button>

                </div>
            </div>

            <div class="main-nav navbar-collapse collapse">
                <div class="container">
                    <div class="minilogo">
                        <a  href="index.html" class="navbar-brand"><img style="width:65%; margin-left:30px; margin-top:-13px;" src="assets/images/logo gbi.png" alt="ourpLogo" /></a>
                    </div>
                    <ul class="nav nav-justified">
                        <li><a id="tmpactive" href="#home">EVENT</a></li>
                        <li><a href="#service">IBADAH</a></li>
                        <li><a href="#lessons">PELAYANAN</a></li>
                        <li><a href="#portfolio">KESAKSIAN</a></li>
                        <li><a href="#callus">INFO</a></li>
                        <li><a href="#footer_widget">ABOUT US</a></li>
                    </ul>
                </div>
            </div>
        </nav>



        <section id="home" class="home text-right" style="background:url('assets/images/pelita1.jpg'); background-size: cover;">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-4">
                            <div class="main_home_content">
                                <div class="single_home">
                                    <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                        <h1>Kunjungan Bakti Werdha</h1>
                                        <h1 class="subtitle">17 Maret 2018</h1>
                                        <h4 class="subtitle">Berbagi kasih Yesus kepada sesama, <br> yang sudah lanjut usia.</h4>

                                        <div class="video_play_icon">
                                            <!--<a href="https://www.youtube.com/embed/_l6CQRHIGyg"><i class="fa fa-play-circle-o"></i></a>
                                        --></div>

                                    </div>
                                </div>
                                <div class="single_home">
                                    <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                        <h1>Retreat GBI Anugerah Sulung</h1>
                                        <h1 class="subtitle">13 - 15 April 2018</h1>
										<h4 class="subtitle">Tema : Bertumbuh Bersama </h4>
                                        <div class="video_play_icon">
                                            <!--<a href="https://www.youtube.com/embed/_l6CQRHIGyg"><i class="fa fa-play-circle-o"></i></a>
                                        --></div>

                                    </div>
                                </div>
                                <div class="single_home">
                                    <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                        <h1>Terang Bagi Sekitar</h1>
                                        <h1 class="subtitle">1 Mei 2018</h1>
										<h4 class="subtitle"> Bakti sosial untuk kalangan sekitar gereja, <br>berupa baju bekas dan sembako murah.</h4>
                                        <div class="video_play_icon">
                                           <!-- <a href="https://www.youtube.com/embed/_l6CQRHIGyg"><i class="fa fa-play-circle-o"></i></a>
                                      -->  </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		 <section id="service" class="service">
            <div class="container">
                <div class="row">
                    <div class="main_news sections">
                        <div class="head_title text-center">
                            <h2>IBADAH</h2>
                            <div class="separator"></div>
                        </div>


                        <div class="main_news_content_area">
                            <div class="main_news_content">
                                <div class="col-sm-5 ">
                                    <div class="single_news_content_left">
                                        <div class="news_content_left_thumbnail">
                                            <img src="assets/images/umum.jpg" style="height:300px;"  alt="" />
                                        </div>
                                        <div class="news_content_left_content">
                                            <p class="subtitle" style="font-size:16pt;"><b>KEBAKTIAN IBADAH RAYA</b></p>
											
                                            <div class="separator2"></div>
                                            <p>Ibadah yang disiapkan untuk semua kalangan yang rindu berkumpul dan bersatu hati untuk memuji, memuliakan nama Tuhan. Serta juga Firman Tuhan yang merupakan makanan rohani yang telah dipersiapkan dengan matang, agar jemaat dapat mengerti dan mengenal lebih dalam lagi tentang Tuhan Yesus.</p>
</p>

                                            <div class="news_content_left_bottom">
                                                <a class="news_icon" href="#service"><i class="fa fa-circle"></i>Setiap Minggu, pk 16.30 WIB</a>
        
                                            </div>
											<br>
											<div class="single_icon_area text-center" style="background:#042f3f; color:white; padding:5px;" >
                                                    
                                                        <div class="single_icon_content single_icon_content_calander">
                                                            <i class="fa fa-calendar"></i>
                                                            <p href="">This Week at 18/03/2018</p>
                                                        </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
								
                                <div class="col-sm-7 col-xs-12">
								 <div class="single_news_right_content">
                                            <div class="row">
                                                <div class="col-sm-4 col-xs-4 no-padding">
                                                    <div class="single_right_img">
                                                         <img src="assets/images/sm.jpg" style="height:156px;"  alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 col-xs-8 no-padding" >
                                                    <div class="single_right_content" style="height:100px;">
                                                        <p class="subtitle" style="font-size:12pt;">SEKOLAH MINGGU</p>
                                                        <p><a class="news_icon" href="#service"><i class="fa fa-circle"></i>Setiap Minggu, pk 09.00 WIB</a>
                                                  
														</p>
													</div>
													<div class="single_icon_area text-center" >
                                                    
                                                        <div class="single_icon_content single_icon_content_calander">
                                                            <i class="fa fa-calendar"></i>
                                                            <p href="">This Week at 18/03/2018</p>
                                                        </div>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    <div class="news_right_content">
                                        <div class="single_news_right_content">
                                            <div class="row">
                                                <div class="col-sm-4 col-xs-4 no-padding">
                                                    <div class="single_right_img">
                                                         <img src="assets/images/kekal.jpg" style="height:156px;"  alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 col-xs-8 no-padding" >
                                                    <div class="single_right_content" style="height:100px;">
                                                        <p class="subtitle" style="font-size:12pt;">KELOMPOK KELUARGA ALLAH</p>
                                                        <p><a class="news_icon" href="#service"><i class="fa fa-circle"></i>Setiap Senin, pk 19.00 WIB</a>
                                                  
														</p>
													</div>
													<div class="single_icon_area text-center" >
                                                    
                                                        <div class="single_icon_content single_icon_content_calander">
                                                            <i class="fa fa-calendar"></i>
                                                            <p href="">This Week at 12/03/2018</p>
                                                        </div>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                        </div>
                                        <div class="single_news_right_content">
                                            <div class="row">
                                                <div class="col-sm-4 col-xs-4 no-padding">
                                                    <div class="single_right_img">
                                                         <img src="assets/images/doa.jpg" style="height:156px;"  alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 col-xs-8 no-padding" >
                                                    <div class="single_right_content" style="height:100px;">
                                                        <p class="subtitle" style="font-size:12pt;">KEBAKTIAN DOA KAMIS</p>
                                                        <p><a class="news_icon" href="#service"><i class="fa fa-circle"></i>Setiap Kamis, pk 19.00 WIB</a>
                                                  
														</p>
													</div>
													<div class="single_icon_area text-center" >
                                                    
                                                        <div class="single_icon_content single_icon_content_calander">
                                                            <i class="fa fa-calendar"></i>
                                                            <p href="">This Week at 15/03/2018</p>
                                                        </div>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                        </div>
                                        <div class="single_news_right_content">
                                            <div class="row">
                                                <div class="col-sm-4 col-xs-4 no-padding">
                                                    <div class="single_right_img">
                                                         <img src="assets/images/youth.jpg" style="height:156px;"  alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 col-xs-8 no-padding" >
                                                    <div class="single_right_content" style="height:100px;">
                                                        <p class="subtitle" style="font-size:12pt;">Youth GBI Anugerah Sulung</p>
                                                        <p><a class="news_icon" href="#service"><i class="fa fa-circle"></i>Setiap Kamis, pk 19.00 WIB</a>
                                                  
														</p>
													</div>
													<div class="single_icon_area text-center" >
                                                    
                                                        <div class="single_icon_content single_icon_content_calander">
                                                            <i class="fa fa-calendar"></i>
                                                            <p href="">This Week at 16/03/2018</p>
                                                        </div>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                        </div>
										
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>
	
	   <div class="menu"><br>
	   <h1 style="color:white; text-shadow: 2px 2px 2px #000000;">PELAYANAN</h1><br>
            
                <i class="fa fa-music mn" style="padding:10px 12px 10px 12px;"></i> <a href="#myCarousel" data-slide-to="0" class="active" style="color:white; text-shadow: 2px 2px 2px #000000;">Praise and Worship</a>
                <br><br><i class="fa fa-tv mn" style="padding:10px 10px 10px 10px;"></i> <a href="#myCarousel" data-slide-to="1"style="color:white; text-shadow: 2px 2px 2px #000000;">Multimedia</a>
                <br><br><i class="lnr lnr-user mn" style="padding:10px 10px 10px 10px;"></i> <a href="#myCarousel" data-slide-to="2" style="color:white; text-shadow: 2px 2px 2px #000000;">Usher</a>
              <br> <br> <i class="lnr lnr-volume-high mn" style="padding:10px 10px 10px 10px;"></i> <a href="#myCarousel" data-slide-to="3" style="color:white; text-shadow: 2px 2px 2px #000000;">Sound System</a>	
            
        </div>
		<div id="lessons" class="note col-sm-12 lessons" style="background-size: cover; background:#0D3542;">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
								
					
								<!-- deklarasi carousel -->
								<div class="carousel-inner" role="listbox" >
									<div class="single_home item active" style="background:red;">
										<img src="assets/images/paws.jpg" alt="www.malasngoding.com">
									</div>
									<div class="single_home item" style="background:green;">
										<img src="assets/images/mulmeds.jpg" alt="www.malasngoding.com">
									</div>
									<div class="single_home item" >
										<img src="assets/images/ushers.jpg" alt="www.malasngoding.com">	
									</div>		
									<div class="single_home item" style="background:yellow;">
										<img src="assets/images/sounds.jpg" alt="www.malasngoding.com">										
									</div>			
								</div>
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>		
									<li data-target="#myCarousel" data-slide-to="3"></li>		
								</ol>
					
							</div>
         </div>
						
     
		
		 <section id="lessons" class="lesson">
            <div class="container">
                <div class="row">
                    <div class="main_lessons">
					
                                
                            </div>
                        </div>
						
						
                    </div>
                </div>
            
        </section>
		
		<section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="main_portfolio sections">
                        <div class="head_title text-center">
                            <h2>KESAKSIAN</h2>
                            <div class="separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus.
                                Etiam tempor odio tellus, at bibendum neque faucibus quis.
                                Sed vel facilisis elit. Nullam fringilla pharetra diam non accumsan.
                                Morbi eget aliquam mauris. Etiam vehicula efficitur mi.</p>
                        </div>

					<!--isi konten-->
					<div id="isi-sharing" style="text-align:left;">
                        <div class="mymodalcontentarea modal fade bs-example-modal-lg" id="share1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <!--<div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                    </div>-->
                                    <div class="modal-body">
                                        <div class="row">
                                            
                                                <!-- Wrapper for slides -->
                                                    <div class="item1 active">
                                                        <div class="col-sm-7">
                                                            <div class="single_left_content sehat_detail">
															    <a class="modal_calander" href=""><i class="fa fa-calendar"></i>12/03/2018</a>
                                                                <br><br>
																<iframe style="width:100%; height:315px" src="https://www.youtube.com/embed/DAp_JW4HCTg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>   </div>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="single_right_content">
                                                                <div class="singel_top_modal_content">
                                                                </div>
                                                                <div class="single_modal_content">
                                                                    <p class="subtitle">TUHAN TIDAK TULI</p>
                                                                    <div class="separator2"></div>
                                                                    <p>Tuhan tidak tuli adalah kisah nyata dari Yahya yang dilahirkan dengan keterbatasan fisik. Sampai disuatu saat, dia tidak terima akan keadaannya. Apakah kita mengalami hal yang sama yang Yahya rasakan, kuatir, takut dan tidak punya pengharapan masa depan...? Silahkan lanjutkan videonya ke tahap berikutnya<br></p></div>
                                                                <div class="modal_socail">
                                                               
                                                                        <!-- share: <a href=""><i class="fa fa-facebook"></i></a> -->

                                                                   
                                                                </div>
                                                            </div>
													
                                                        </div>

                                                    </div>
										
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
									
                                </div>
                            </div>

                        </div>
						
						<div class="mymodalcontentarea modal fade bs-example-modal-lg" id="share2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <!--<div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                    </div>-->
                                    <div class="modal-body">
                                        <div class="row">
                                            
                                                <!-- Wrapper for slides -->
                                                    <div class="item1 active">
                                                       <div class="col-sm-7">
                                                            <div class="single_left_content sehat_detail">
															    <a class="modal_calander" href=""><i class="fa fa-calendar"></i>12/03/2018</a>
                                                                <br><br>
                                                               <iframe style="width:100%; height:315px" src="https://www.youtube.com/embed/fUcIrkQdg38" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                                <div class="col-sm-5">
                                                            <div class="single_right_content">
                                                                <div class="singel_top_modal_content">
                                                                </div>
                                                                <div class="single_modal_content">
                                                                    <p class="subtitle">KESAKSIAN NYATA JACQLIEN CELOSSE</p>
                                                                    <div class="separator2"></div>
                                                                    <p>Jacqlien Celosse adalah seorang penyanyi , pencipta lagu dan pengkhotbah.
																		Bersama suaminya , beliau menggembalakan sebuah gereja yaitu The Rock Church di Jakarta, Indonesia. 
																		Talentanya membawa Jacqlien untuk mendapatkan kesempatan memuliakan nama Tuhan lewat konser music dan pelayanan gereja-gereja diberbagai negara.
																		Berikut ini adalah kesaksian asal pelayanan beliau.<br>Silahkan lanjutkan videonya ke tahap berikutnya<br></p></div>
                                                                <div class="modal_socail">
                                                               
                                                                        <!-- share: <a href=""><i class="fa fa-facebook"></i></a> -->

                                                                   
                                                                </div>
                                                            </div>
													
                                                        </div>

                                                    </div>
										
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
									
                                </div>
                            </div>

                        </div>
						
						<div class="mymodalcontentarea modal fade bs-example-modal-lg" id="share3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <!--<div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                    </div>-->
                                    <div class="modal-body">
                                        <div class="row">
                                            
                                                <!-- Wrapper for slides -->
                                                   <div class="item1 active">
                                                       <div class="col-sm-7">
                                                            <div class="single_left_content sehat_detail">
															    <a class="modal_calander" href=""><i class="fa fa-calendar"></i>12/03/2018</a>
                                                                <br><br>
                                                               <iframe style="width:100%; height:315px" src="https://www.youtube.com/embed/Bvq3pYsHidA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>  </div>
                                                        </div>
                                                                <div class="col-sm-5">
                                                            <div class="single_right_content">
                                                                <div class="singel_top_modal_content">
                                                                </div>
                                                                <div class="single_modal_content">
                                                                    <p class="subtitle">Dibalik Pujian "IT IS WELL WITH MY SOUL”</p>
                                                                    <div class="separator2"></div>
                                                                    <p>“It is Well with My Soul” diciptakan oleh Horatio G.Spafford.
																	Horatio merupakan seorang pengusaha yang sangat sukses. Pengusaha yang berasal dari Chicago ini mendirikan sebuah praktek hukum, dan juga memiliki usaha di Â bidang real estate.
																	Namun kesuksesan tersebut lenyap dalam sekejap, <br>Silahkan lanjutkan videonya ke tahap berikutnya<br></p></div>
                                                                <div class="modal_socail">
                                                               
                                                                        <!-- share: <a href=""><i class="fa fa-facebook"></i></a> -->

                                                                   
                                                                </div>
                                                            </div>
													
                                                        </div>

                                                    </div>
										
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
									
                                </div>
                            </div>
                        </div>
						
						<div class="mymodalcontentarea modal fade bs-example-modal-lg" id="share4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <!--<div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                    </div>-->
                                    <div class="modal-body">
                                        <div class="row">
                                            
                                                <!-- Wrapper for slides -->
                                                        <div class="item1 active">
                                                       <div class="col-sm-7">
                                                            <div class="single_left_content sehat_detail">
															    <a class="modal_calander" href=""><i class="fa fa-calendar"></i>12/03/2018</a>
                                                                <br><br>
                                                               <iframe style="width:100%; height:315px" src="https://www.youtube.com/embed/Bvq3pYsHidA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>  </div>
                                                        </div>
                                                                <div class="col-sm-5">
                                                            <div class="single_right_content">
                                                                <div class="singel_top_modal_content">
                                                                </div>
                                                                <div class="single_modal_content">
                                                                    <p class="subtitle">Dibalik Pujian "IT IS WELL WITH MY SOUL”</p>
                                                                    <div class="separator2"></div>
                                                                    <p>“It is Well with My Soul” diciptakan oleh Horatio G.Spafford.
																	Horatio merupakan seorang pengusaha yang sangat sukses. Pengusaha yang berasal dari Chicago ini mendirikan sebuah praktek hukum, dan juga memiliki usaha di Â bidang real estate.
																	Namun kesuksesan tersebut lenyap dalam sekejap, <br>Silahkan lanjutkan videonya ke tahap berikutnya<br></p></div>
                                                                <div class="modal_socail">
                                                               
                                                                        <!-- share: <a href=""><i class="fa fa-facebook"></i></a> -->

                                                                   
                                                                </div>
                                                            </div>
													
                                                        </div>

                                                    </div>
										
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
									
                                </div>
                            </div>
                        </div>
					</div>
				<!---->

                        <div class="main_portfolio_content_area">
                            <div class="main_portfolio_content">
                                <div class="single_portfolio_content">
                                    <div class="col-sm-4 col-xs-12">
                                        <div data-toggle="modal" data-target="#share1" class="single_content_item">
                                            <img src="assets/images/kesaksian/saksi1_title.jpg"alt="" />
                                            <div class="single_portfolio_overlay" style="text-align:center; padding-top:160px;">
                                                <a><i>Tekan gambar untuk lebih jelas</i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">
                                                <div data-toggle="modal" data-target="#share2" class="single_content_item single_content_item2">
                                                    <img src="assets/images/kesaksian/saksi2_title.jpg" alt="" />
                                                     <div class="single_portfolio_overlay" style="text-align:center; padding-top:70px;">
														<a><i>Tekan gambar untuk lebih jelas</i></a>
													</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-xs-12">
                                                <div data-toggle="modal" data-target="#share3" class="single_content_item single_content_item2">
                                                    <img src="assets/images/kesaksian/saksi3_title.jpg" alt="" />
                                                     <div class="single_portfolio_overlay" style="text-align:center; padding-top:70px;">
														<a><i>Tekan gambar untuk lebih jelas</i></a>
													  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-xs-12">
                                        <div data-toggle="modal" data-target="#share4" class="single_content_item">
                                             <img src="assets/images/kesaksian/saksi3_title.jpg" alt="" />
                                             <div class="single_portfolio_overlay" style="text-align:center; padding-top:160px;">
                                                <a><i>Tekan gambar untuk lebih jelas</i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						  <div class="bottom_btn_area_content text-center">
                            <a href="" class="btn btn-larg btn_news_color">ALL ARTICLES</a>
                        </div>
                    </div>
                </div>
            </div>
			
        </section>
	
        <section id="callus" style="background:#e5e5e5;" class="callus">
				
            <div class="container">
			
                <div class="row">

                    <div class="main_service_area sections text-center">
                        <div class="head_title text-center">
                            <h2>INFO</h2>
                            <div class="separator"></div>
                        </div>
						<div class="col-sm-4">
						<h3><b>WARTA GEREJA</b></h3></a>
                       
                            <div class="single_service">
                                <div class="single_service_icon">
                                    <a href="https://drive.google.com/file/d/1CaHXeLjEw40wKDoUqbxYD7FbAttjIFhw/view?usp=sharing" target="blank"> <img src="assets/images/warta.jpg" style="width:50%; border-radius:100px;">
                                </div>
								<br>
                               <i>Tekan gambar <br>untuk mendapatkan Warta Gereja</i></a>
                                <div class="separator"></div>
                            </div>
                        </div>
						
						<!--isi  tips -->
						
						<div id="isi-tips" style="text-align:left;">
							<div class="mymodalcontentarea modal fade bs-example-modal-lg" id="tips1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <!--<div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                    </div>-->
                                    <div class="modal-body">
                                        <div class="row">
                                            
                                                <!-- Wrapper for slides -->
                                                    <div class="item1 active">
                                                        <div class="col-sm-7">
                                                            <div class="single_left_content sehat_detail">
															    <a class="modal_calander" href=""><i class="fa fa-calendar"></i>12/03/2018</a>
                                                                <br><br>
																<img src="assets/images/Kesehatan/sehat1.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="single_right_content">
                                                                <div class="singel_top_modal_content">
                                                                </div>
                                                                <div class="single_modal_content">
                                                                    <p class="subtitle">JANTUNG SEHAT is Real</p>
                                                                    <div class="separator2"></div>
                                                                    <p>Data yang diperoleh dari Riset Kesehatan Dasar (Riskesda) 2013 menyatakan bahwa penyebab tertinggi dari penyakit jantung koroner adalah penyakit kardiovaskuler atau penyakit jantung. Gaya hidup yang tidak sehat dituding sebagai salah satu penyebabnya.
																	<br><br>Oleh sebab itu, di usia yang masih tergolong muda, ada banyak aktivitas yang dapat Anda lakukan untuk membuat jantung sehat dan terhindar dari penyakit berbahaya ini. Berikut ini adalah gaya hidup sehat yang bisa Anda ikuti untuk menjaga kesehatan jantung
																	<br></p></div>
                                                                <div class="modal_socail">
                                                                   
																		<a href="">Baca Selengkapnya</a>
                                                                        <!-- share: <a href=""><i class="fa fa-facebook"></i></a> -->

                                                                   
                                                                </div>
                                                            </div>
													
                                                        </div>

                                                    </div>
										
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
									
                                </div>
                            </div>
                        </div>
						
							<div class="mymodalcontentarea modal fade bs-example-modal-lg" id="tips2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <!--<div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                    </div>-->
                                    <div class="modal-body">
                                        <div class="row">
                                            
                                                <!-- Wrapper for slides -->
                                                    <div class="item1 active">
                                                        <div class="col-sm-7">
                                                            <div class="single_left_content sehat_detail">
                                                                <a class="modal_calander" href=""><i class="fa fa-calendar"></i>12/03/2018</a>
                                                                <br><br>
																<img src="assets/images/Kesehatan/sehat2.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="single_right_content">
																<div class="singel_top_modal_content">
                                                                </div>
                                                                <div class="single_modal_content">
                                                                    <p class="subtitle">Tips memilih makanan beku</p>
                                                                    <div class="separator2"></div>
                                                                    <p>Bahan makanan yang tersedia dalam bentuk beku biasanya adalah sayur, buah, makanan hewani dan bahan makanan olahan karbohidrat. Makanan beku menjadi pilihan agar suatu bahan makanan dapat kita konsumsi lebih awet. Umumnya makanan beku kita pilih sebagai stok simpanan bahan makanan di frezeer. Maka dari itu kita harus dapat memilih bahan makanan beku yang baik dan sehat untuk tubuh kita.

<br><br>Academy of Nutrition and Dietitian menyebutkan beberapa saran yang dapat dilakukan dalam memilih bahan makanan beku yang sehat. Pemilihan ini dilihat dari segi kandungan gizinya,beberapa tips dalam memilih bahan makanan beku adalah:
</p>
                                                                </div>
                                                                <div class="modal_socail">
                                                                    <a href="">Baca Selengkapnya</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
										
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
									
                                </div>
                            </div>
                        </div>
						
							<div class="mymodalcontentarea modal fade bs-example-modal-lg" id="tips3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <!--<div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                    </div>-->
                                    <div class="modal-body">
                                        <div class="row">
                                            
                                                <!-- Wrapper for slides -->
                                                    <div class="item1 active">
                                                        <div class="col-sm-7">
                                                            <div class="single_left_content sehat_detail">
                                                                <a class="modal_calander" href=""><i class="fa fa-calendar"></i>12/03/2018</a>
                                                                <br><br>
																<iframe style="width:100%; height:315px" src="https://20.detik.com/embed/180308004" frameborder="0" allowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="single_right_content">
																<div class="singel_top_modal_content">
                                                                </div>
                                                                <div class="single_modal_content">
                                                                    <p class="subtitle">Diet? jadi Orthorexia ?</p>
                                                                    <div class="separator2"></div>
                                                                    <p>Orthorexia ini berbeda dengan penganut pola makan sehat pada umumnya seperti vegan, raw food dan fruitarianism. Kunci perbedaannya adalah orthorexia menyebabkan orang tersebut mengalami tekanan dan kesulitan untuk menjalani kehidupannya sehari-hari. Orthorexia ini pun berdampak buruk pada kesehatan pelakunya. </p>
																	
															   </div>
                                                                
                                                            </div>
                                                        </div>

                                                    </div>
										
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
									
                                </div>
                            </div>
                        </div>
						<!--  -->
						
						<div class="col-sm-8">
						<h3><b>TIPS-TIPS KESEHATAN</b></h3></a>
                       
                            <div class="row">
                                 <div class="col-sm-8 col-xs-12">
                                        <div data-toggle="modal" data-target="#tips1" class="single_content_item">
                                            <img src="assets/images/Kesehatan/sehat1_title.jpg" class="sehat" alt="" />
                                            <div class="single_portfolio_overlay" style="text-align:center; padding-top:160px;">
                                                <a>Tekan gambar untuk lebih jelas</a>
                                            </div>
                                        </div>
                                 </div>
                                <div class="col-sm-4 col-xs-12">
                                    <div data-toggle="modal" data-target="#tips2" class="single_content_item single_content_item2">
                                        <img src="assets/images/Kesehatan/sehat2_title.jpg" class="sehat" alt="" />
                                        <div class="single_portfolio_overlay" style="text-align:center; padding-top:70px;">
                                                <a><i>Tekan gambar untuk lebih jelas</i></a>
                                            </div>
                                    </div>
                                </div>
								
								<div class="col-sm-4 col-xs-12">
                                    <div data-toggle="modal" data-target="#tips3" class="single_content_item single_content_item2">
                                        <img  src="assets/images/Kesehatan/sehat3_title.jpg" alt="" />
                                        <div class="single_portfolio_overlay" style="text-align:center; padding-top:70px;">
                                                <a><i>Tekan gambar untuk lebih jelas</i></a>
                                            </div>
                                    </div>
                                </div>
								
								
                            </div>
                        </div>
                        
                        
                      
					</div>
                    </div>
                </div>
            </div>
        </section>



        <section id="footer_widget" class="footer_widget">
            <div class="container">
                <div class="row">
                    <div class="main_widget">


                        <div class="row">
                            <div class="col-sm-4">
                                <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                    <div class="footer_logo" >
                                        <img src="assets/images/logo dan nama2.png" style=" width:80%; " alt="" />
                                  
									<div id="sosmed" style="text-align:right;">
										<a href="https://www.facebook.com/GBI-Anugerah-Sulung-148841488828/" target="blank"><i class="fa fa-facebook"></i></a>
										<a href="https://www.instagram.com/gbi_anugerahsulung/?hl=en" target="blank"><i class="fa fa-instagram"></i></a>
										<a href="https://www.youtube.com/channel/UCjyayXEK0M932qe8Rz_tvBw" target="blank"><i class="fa fa-youtube"></i></a>
									</div>
                                    <ul>
                                        <li><a href="https://mail.google.com/mail/u/0/#inbox" target="blank"><i class="fa fa-envelope"></i> gbianugerahsulung1@gmail.com</a></li>
                                        <li><a href="#"><i class="fa fa-phone"></i> 031-5677771</a></li>
                                        <li><a href="https://www.google.co.id/maps/place/Gereja+Bethel+Indonesia+Anugerah+Sulung/@-7.286375,112.7377421,17z/data=!4m8!1m2!2m1!1sgbi+anugerah+sulung!3m4!1s0x2dd7fbc073c9c335:0x1596257f6b00c8d!8m2!3d-7.286703!4d112.74082?hl=en" target="blank"><i class="fa fa-map-marker"></i> Jl. Bintoro No.1, Keputran, Tegalsari, SBY, Jawa Timur 60265</a></li>
										<br><div id="map"></div>
										
										
									</ul>
									</div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                 <h4 class="footer_title">Visi</h4>
								  <div class="separator3"></div>
                                 <p class="subtitle">Representatif kerajaan sorga di bumi. (Matius 16:19)</p>
                                 <p class="details" style="font-size:10pt;">Mewujudkan kepada dunia, bahwa Tuhan memberikan kuasa-kuasa kerajaan sorga kepada orang pilihan Nya, 
									agar bermanfaat bagi kemuliaanNya dibumi.
								</p>
                                      
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                    <h4 class="footer_title">Misi</h4>
                                    <div class="separator3"></div>
                                    <ul>
                                        <li class="single_latest_news">
                                            <p class="subtitle">Membawa jemaat kepada:</p>
                                          
											<ol class="details" style="font-size:10pt;">
											<li>Pengenalan pribadi kepada Yesus sang Mesias melalui Firman Tuhan. <br/><b>(Matius 16:15-16)</b></li>
											<li>Pengalaman hubungan dekat  dengan Tuhan dan hidup yang diperbaharui untuk menjadi kesaksian hidup. <br/> <b>(Yohanes 15:4, Titus 2:7)</b></li>
											<li>Mengenali jati diri dan talenta2 yg Tuhan percayakan, serta mengembangkan talenta yang Tuhan percayakan dengan kerjasama yang baik antar sesama, agar kuasa kerajaan sorga dinyatakan. <br/> <b>(1 Timotius 4:14-15, Mazmur 133:1-3)</b></li>
											<li>Menjadi saksi hidup agar yang terhilang diselamatkan dan dimenangkan dalam Tuhan. <br/> <b>(Matius 28:18-20)</b></li>
											<li>Berjalan dengan pertumbuhan iman dengan mata yang tertuju pada Kristus untuk bersama sama menjadi seperti Dia. <br/>  <b>(Ibrani 12:1-2)</b></li>
											</ol>
											
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </section>





        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <div class="copyright_text text-center">
                            <p class=" wow fadeInRight" data-wow-duration="1s"> <a href="#">Gereja Bethel Indonesia Anugerah Sulung</a>2018. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>
		
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.12';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/portfolio.jquery.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/jquery.slicknav.min.js"></script>
        <!--This is link only for gmaps-->
        <!-- <script src="http://maps.google.com/maps/api/js"></script>
            script src="assets/js/gmaps.min.js"></script> -->
        <script>
            function initMap() {
                var uluru = {lat: -7.28671, lng: 112.74082};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 21,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
		
			$("#tmpactive").attr("class","active"); //dklarasi awal css menu, untuk ganti warna
			
			
			$(".nav").find("a").click(function(e) { /// setiap klik plihan menu keganti warna
				$("#tmpactive").removeAttr('class'); 
				$(".active").find("a").removeAttr('class');
				
				
				e.preventDefault();
				$(this).attr("class","active");

				var section = $(this).attr("href"); // pergerakan halaman
				$("html, body").animate({
					scrollTop: $(section).offset().top
				});
				
			$(".scrollup").click(function(e) { // untuk waktu tekan scroll up, tanda warnanya pindah
				e.preventDefault();
				$(".active").find("a").removeAttr('class');
				$("#tmpactive").attr("class","active");
			});
			
			
});


	
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCs31cbxUH1YX7kmLrgWmObbon8tzhZj8w&callback=initMap">
        </script>




        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
