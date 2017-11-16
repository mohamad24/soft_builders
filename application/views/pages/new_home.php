<?php require_once(APPPATH.'views/theme/head.php');?>



   <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<nav class="collapse navbar-collapse navbar-left"> 
					<ul class="nav navbar-nav">
                 
				   <?php if($lang == 'english'){?>
				   <li><a id="switch" data-val="ar" href='<?php echo base_url(); ?>LangSwitch/switchLanguage/arabic'>عربي</a></li>
			    	<?php }else if ($lang == 'arabic'){?>
			    	<li><a id="switch" data-val="en" href='<?php echo base_url(); ?>LangSwitch/switchLanguage/english'>English</a></li>
                    <?php }?>
                    
                      </ul>
					  </nav>
                </div> 
               
				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                    <?php if($lang == 'english'){?>
                        <li class="current"><a href="#body"><?php echo $list1;?></a></li>
                  
                        <li><a href="#works"><?php echo $list3;?></a></li>
                        <li><a href="#team"><?php echo $list4;?></a></li>
                        <li><a href="#contact"><?php echo $list5;?></a></li>
                    <?php }else if ($lang == 'arabic'){?>

                         <li><a href="#contact"><?php echo $list5;?></a></li>
                         <li><a href="#team"><?php echo $list4;?></a></li>
                         <li><a href="#works"><?php echo $list3;?></a></li>
                         <li><a href="#features"><?php echo $list2;?></a></li>
                         <li class="current"><a href="#body"><?php echo $list1;?></a></li>
                             
                    
                    
                    <?php }?>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->

        <!--
        Home Slider
        ==================================== -->
		
		<section id="slider">
            <div  data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated firstimg">
                <img src="./images/demo/img15.png" alt="">
            </div>
            <div data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInUp animated secandimg" >
                <img src="./images/demo/img16.png" alt="">
            </div>

            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="caption">
                            <h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated"><?php echo $slider1;?></h2>
                                							<h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><?php echo $slider2;?> <span class="color"><?php echo $slider22;?></span> </h3>
                                							<p data-wow-duration="1000ms" class="wow slideInRight animated"><?php  echo $slider3;?></p>

                                							<ul class="social-links text-center">
                                								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                                								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                                								<li><a href=""><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a></li>
                                							</ul>
                        </div>
                    </div>

                </div>
            </div>
		</section>
		
        <!--End Home SliderEnd==================================== -->
		
        <!--Features==================================== -->
		<section>
		<div class="container">
			<div class="row">
			<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="1500ms" >
						<h2><?php echo $heads1;?></h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="col-md-8">
                        <?php if ($lang == 'english'){?>

    <div class="panel panel-default wow slideInLeft animated" data-wow-duration="1000ms">
        <div class="panel-heading">
            <h4 class="panel-title text-primary">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><b class="caret"></b> <?php echo $quaity;?> </a>
               <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> <span class="pull-right glyphicon glyphicon-plus cucolor"></span></a> 
                
                
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse">
            <div class="panel-body">
               <p><?php echo $qcontent;?></>
            </div>
        </div>
    </div>
    <div class="panel panel-default wow slideInLeft animated" data-wow-duration="1000ms" >
        <div class="panel-heading">
            <h4 class="panel-title text-primary">
           
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><b class="caret"></b> <?php echo $warranty ;?></a>
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> <span class="pull-right glyphicon glyphicon-plus cucolor"></span></a> 
              
                 </h4>
        </div>
         <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">                                                  
               <p><?php echo $wcontent;?></p>
            </div>
        </div>
        
    </div>
    <div class="panel panel-default wow slideInLeft animated" data-wow-duration="1000ms" >
        <div class="panel-heading">
            <h4 class="panel-title text-primary">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapsethree"><b class="caret"></b> <?php echo $price;?> </a>
                <a data-toggle="collapse" data-parent="#accordion" href="#collapsethree"> <span class="pull-right glyphicon glyphicon-plus cucolor"></span></a> 
                
            </h4>
        </div>
        <div id="collapsethree" class="panel-collapse collapse">
            <div class="panel-body">                                                  
               <p><?php echo $pcontent1;?></p>

            </div>
        </div>
    </div>
    <div class="panel panel-default wow slideInLeft animated" data-wow-duration="1000ms" >
        <div class="panel-heading">
            <h4 class="panel-title text-primary">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour"><b class="caret"></b> <?php echo $cost;?> </a>
             <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour"> <span class="pull-right glyphicon glyphicon-plus cucolor"></span></a> 
                
            </h4>
        </div>
        <div id="collapsefour" class="panel-collapse collapse">
            <div class="panel-body">
                <p><?php echo $ccontent;?></p>
            </div>
        </div>
    </div>
    <div class="panel panel-default wow slideInLeft animated" data-wow-duration="1000ms" >
        <div class="panel-heading">
            <h4 class="panel-title">
            
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapsefive"><b class="caret"></b> <?php echo $com; ?></a>
             <a data-toggle="collapse" data-parent="#accordion" href="#collapsefive"> <span class="pull-right glyphicon glyphicon-plus cucolor"></span></a> 
                     
            </h4>
        </div>
        <div id="collapsefive" class="panel-collapse collapse">
            <div class="panel-body">
                <p><?php echo $comcontent;?></p>
            </div>
        </div>
    </div>

                        <?php }else { ?>

                        <div class="panel panel-default wow slideInRight animated" data-wow-duration="1000ms"  style="direction: rtl;">
                            <div class="panel-heading">
                                <h4 class="panel-title text-primary">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><b class="caret"></b> <?php echo $quaity;?> </a>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> <span class="pull-left glyphicon glyphicon-plus cucolor"></span></a>


                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p><?php echo $qcontent;?></>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default wow slideInRight animated" data-wow-duration="1000ms" style="direction: rtl;">
                            <div class="panel-heading">
                                <h4 class="panel-title text-primary">

                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><b class="caret"></b> <?php echo $warranty ;?></a>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> <span class="pull-left glyphicon glyphicon-plus cucolor"></span></a>

                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p><?php echo $wcontent;?></p>
                                </div>
                            </div>

                        </div>
                        <div class="panel panel-default wow slideInRight animated" data-wow-duration="1000ms" style="direction: rtl;">
                            <div class="panel-heading">
                                <h4 class="panel-title text-primary">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsethree"><b class="caret"></b> <?php echo $price;?> </a>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsethree"> <span class="pull-left glyphicon glyphicon-plus cucolor"></span></a>

                                </h4>
                            </div>
                            <div id="collapsethree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p><?php echo $pcontent1;?></p>

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default wow slideInRight animated" data-wow-duration="1000ms" style="direction: rtl;">
                            <div class="panel-heading">
                                <h4 class="panel-title text-primary">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour"><b class="caret"></b> <?php echo $cost;?> </a>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour"> <span class="pull-left glyphicon glyphicon-plus cucolor"></span></a>

                                </h4>
                            </div>
                            <div id="collapsefour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p><?php echo $ccontent;?></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default wow slideInRight animated" data-wow-duration="1000ms" style="direction: rtl;">
                            <div class="panel-heading">
                                <h4 class="panel-title">

                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsefive"><b class="caret"></b> <?php echo $com;?> </a>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsefive"> <span class="pull-left glyphicon glyphicon-plus cucolor"></span></a>

                                </h4>
                            </div>
                            <div id="collapsefive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p><?php echo $comcontent;?></p>
                                </div>
                            </div>
                        </div>

                        <?php }?>
					
					</div>
					

				<div class="[   col-md-4 ] wow bounceInDown animated visioncard" data-wow-duration="700ms" data-wow-delay="500ms" >
				<div class="[ info-card ]">
					<img style="width: 100%" src="<?php base_url();?>layout/images/idea.jpg" />
					<div class="[ info-card-details ] animate">
						<div class="[ info-card-header ]">
							<h1><?php echo $whyq;?> </h1>
							<h3> <?php echo $vision;?></h3>
						</div>
						<div class="[ info-card-detail ]">
							<!-- Description -->
							<p><?php echo $ourvision ;?></p>
							<div class="social">
								<a href="https://www.facebook.com/rem.mcintosh" class="[ social-icon facebook ] animate"><span class="fa fa-facebook"></span></a>

								<a href="https://twitter.com/Mouse0270" class="[ social-icon twitter ] animate"><span class="fa fa-twitter"></span></a>



								<a href="www.linkedin.com/in/remcintosh/" class="[ social-icon linkedin ] animate"><span class="fa fa-linkedin"></span></a>
							</div>
						</div>
					</div>
				</div>


			</div>




		</div>
		
		</section>
		<section id="features" class="features">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2><?php echo $list2;?></h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>

					<!-- service item -->
					<?php if ($lang == "english"){?>
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">
						
							<div class="service-icon">
								<i class="fa fa-globe fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3><?php echo $service1;?></h3>
								<p><?php echo $service11;?></p>
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-pencil fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3><?php echo $service2;?></h3>
								<p><?php echo $service22 ;?></p>
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-bullhorn fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3><?php echo $service3;?></h3>
								<p><?php echo $service33;?></p>
							</div>
						</div>
					</div>
					<?php } else if ($lang == "arabic"){?>
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">
						
							<div class="service-ar-icon">
								<i class="fa fa-globe fa-2x"></i>
							</div>
							
							<div class="service-ar-desc">
								<h3><?php echo $service1;?></h3>
								<p><?php echo $service11;?></p>
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="service-item">
							<div class="service-ar-icon">
								<i class="fa fa-pencil fa-2x"></i>
							</div>
							
							<div class="service-ar-desc">
								<h3><?php echo $service2;?></h3>
								<p><?php echo $service22 ;?></p>
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
						<div class="service-item">
							<div class="service-ar-icon">
								<i class="fa fa-bullhorn fa-2x"></i>
							</div>
							
							<div class="service-ar-desc">
								<h3><?php echo $service3;?></h3>
								<p><?php echo $service33;?></p>
							</div>
						</div>
					</div>
					<?php }?>
					<!-- end service item -->
						
				</div>
			</div>
		</section>
		
        <!--
        End Features
        ==================================== -->
		
		
        <!--
        Our Works
        ==================================== -->
<section id="works">
    <div class="container">
        <div class="row">
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">


                <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                    <h2><?php echo $list3;?></h2>
                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                </div>

                <div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
                    <p><?php echo $ourwork;?></p>
                </div>
            </div>


                <div align="center">
                    <?php if ($lang == "english"){?>

                        <button class="btn btn-default filter-button" data-filter="all">All</button>
                        <button class="btn btn-default filter-button" data-filter="hdpe">Pure</button>
                        <button class="btn btn-default filter-button" data-filter="sprinkle">Prestashop</button>
                        <button class="btn btn-default filter-button" data-filter="spray">Wordpress</button>
                    <?php } elseif ($lang == 'arabic') {?>
                        <button class="btn btn-default filter-button" data-filter="spray">وردبرس</button>
                        <button class="btn btn-default filter-button" data-filter="sprinkle">بريستا شوب</button>
                        <button class="btn btn-default filter-button" data-filter="hdpe">متنوع</button>
                        <button class="btn btn-default filter-button" data-filter="all">الكل</button>
                    <?php }?>

                </div>

            <br/>


            <?php if($lang == 'english'){?>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe  wow fadeInUp animated" data-wow-duration="500ms">
                <img src="./images/demo/eldesigner.png" class="img-responsive">
                <div class="work-over">
                    <h2><?php echo $aldesiner0;?></h2>
                  <h5><?php echo $aldesiner1;?></h5>
                </div>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="200ms">
                <img src="./images/demo/oriant.png" class="img-responsive">
                <div class="work-over">
                    <h2><?php echo $jordansteps0;?></h2>
                    <h5><?php echo $jordansteps1;?></h5>
                </div>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                <img src="./images/demo/techtech.png" class="img-responsive">
                <div class="work-over">
                    <h2><?php echo $tech0;?></h2>
                    <h5><?php echo $tech1;?></h5>
                </div>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="400ms">
                <img src="./images/demo/aldawaj.png" class="img-responsive">
                <div class="work-over">
                    <h2><?php echo $aldawaj0;?></h2>
                    <h5><?php echo $aldawaj1;?></h5>
                </div>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="500ms">
                <img src="./images/demo/bigshop.png" class="img-responsive">
                <div class="work-over">
                    <h2><?php echo $bigshop0;?></h2>
                    <h5><?php echo $bigshop1;?></h5>
                </div>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                <img src="./images/demo/react.png" class="img-responsive">
                <div class="work-over">
                    <h2><?php echo $react0;?></h2>
                    <h5><?php echo $react1;?></h5>
                </div>
            </div>
            <?php } else {?>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe wow fadeInUp animated" data-wow-duration="500ms" style="float: right">
                <img src="./images/demo/eldesigner.png" class="img-responsive">
                <div class="work-over">
                    <h2><?php echo $aldesiner0;?></h2>
                    <h5><?php echo $aldesiner1;?></h5>
                </div>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="200ms" style="float: right">
                <img src="./images/demo/oriant.png" class="img-responsive">
                <div class="work-over">
                    <h2><?php echo $jordansteps0;?></h2>
                    <h5><?php echo $jordansteps1;?></h5>
                </div>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms" style="float: right">
                <img src="./images/demo/techtech.png" class="img-responsive">
                <div class="work-over">
                    <h2><?php echo $tech0;?></h2>
                    <h5><?php echo $tech1;?></h5>
                </div>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle  wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="400ms" style="float: right">
                <img src="./images/demo/aldawaj.png" class="img-responsive">
                <div class="work-over">
                    <h2><?php echo $aldawaj0;?></h2>
                    <h5><?php echo $aldawaj1;?></h5>
                </div>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="500ms" style="float: right">
                <img src="./images/demo/bigshop.png" class="img-responsive">
                <div class="work-over">
                    <h2><?php echo $bigshop0;?></h2>
                    <h5><?php echo $bigshop1;?></h5>
                </div>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms" style="float: right">
                <img src="./images/demo/react.png" class="img-responsive">
                <div class="work-over">
                    <h2><?php echo $react0;?></h2>
                    <h5><?php echo $react1;?></h5>
                </div>
            </div>
            <?php }?>


        </div>
    </div>
</section>

<!--
        End Our Works
        ==================================== -->
		
        <!--
        Meet Our Team
        ==================================== -->		
		
		<section id="team" class="team">
			<div class="container">
				<div class="row">
		
					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2><?php echo $list4;?></h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
						<p><?php echo $caption1;?>  <span class="color"> <?php echo $caption2;?> </span></p>
					</div>

					<!-- single member -->
					
					<figure class="team-member col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
						<div class="member-thumb">
							<img src="./images/demo/moh.jpg" alt="Team Member" class="img-responsive">
							<figcaption class="overlay newoverlay">
								<h5><?php echo $postion1;?></h5>
								<p><?php echo $social1 ;?></p>
								<ul class="social-links text-center">
									<li><a href="https://twitter.com/AbuzaidMohmad" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href="https://web.facebook.com/profile.php?id=100010164881290" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href="https://www.linkedin.com/in/mohamadabuzaid94/" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4 class="textteam"><?php echo $name1 ; ?></h4>
						<span class="textteam"><?php echo $major1;?></span>
					</figure>
					<!-- end single member -->
					
					<!-- single member -->
					<figure class="team-member col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="member-thumb">
							<img src="./images/demo/mousa.jpg" alt="Team Member" class="img-responsive">
							<figcaption class="overlay newoverlay">
								<h5><?php echo $postion2;?></h5>
								<p><?php echo $social2 ;?></p>
								<ul class="social-links text-center">
									<li><a href="https://twitter.com/MousaAl_shaikh" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href="https://web.facebook.com/profile.php?id=100009006155475" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href="https://www.linkedin.com/in/mousa-alshaikh-335053128/" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4 class="textteam"><?php echo $name2 ; ?></h4>
						<span class="textteam"><?php echo $major2;?></span>
					</figure>
					<!-- end single member -->
					
					<!-- single member -->
					<figure class="team-member col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="member-thumb">
							<img src="./images/demo/burhan.jpg" alt="Team Member" class="img-responsive">
							<figcaption class="overlay newoverlay">
								<h5><?php echo $postion3;?></h5>
								<p><?php echo $social3 ;?></p>
								<ul class="social-links text-center">
									<li><a href="https://twitter.com/Mburhan90" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href="https://web.facebook.com/moh.burhan" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href="https://www.linkedin.com/in/mohammad-hamed-88a9a8118/" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4 class="textteam"><?php echo $name3 ; ?></h4>
						<span class="textteam"><?php echo $major3;?></span>
					</figure>
					<!-- end single member -->
					
		
					
				</div>
			</div>
		</section>
		
        <!--
        End Meet Our Team
        ==================================== -->
		
		<!--
        Some fun facts
        ==================================== -->		
		
		<section id="facts" class="facts">
			<div class="parallax-overlay">
				<div class="container">
					<div class="row number-counters">
						
						<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
							<h2><?php echo $fact;?></h2>
							<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
						</div>
						
						<!-- first count item -->
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
							<div class="counters-item">
								<i class="fa fa-clock-o fa-3x"></i>
								<strong data-to="13200">0</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p><?php echo $fact1;?></p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
							<div class="counters-item">
								<i class="fa fa-users fa-3x"></i>
								<strong data-to="11">0</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p><?php echo $fact2;?></p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
							<div class="counters-item">
								<i class="fa fa-rocket fa-3x"></i>
								<strong data-to="12">0</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p> <?php echo $fact3;?> </p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
							<div class="counters-item">
								<i class="fa fa-coffee fa-3x"></i>
								<strong data-to="2454">0</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p><?php echo $fact4;?></p>
							</div>
						</div>
						<!-- end first count item -->
				
					</div>
				</div>
			</div>
		</section>
		
        <!--
        End Some fun facts
        ==================================== -->
		
		
		<!--
        Contact Us
        ==================================== -->		
		
		<section id="contact" class="contact">
			<div class="container">
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2><?php echo $head;?></h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p><?php echo $descreption;?></p>
					</div>
					
					<!-- contact address -->
					<?php if($lang == "arabic"){?>
					
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
						<div class="contact-address">
						    <h3><?php echo $infotitle;?></h3>
							<p><i class="fa fa-mobile" aria-hidden="true"></i> +962791585288 </p>
							<p><i class="fa fa-mobile" aria-hidden="true"></i> +9627880343020</p>
							<p><i class="fa fa-envelope-o" aria-hidden="true"></i> abuzaidmohmad@gmail.com</p>
					
						</div>
					</div>
					<!-- end contact address -->
					
					<!-- contact form -->
					<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="contact-form">
							<h3 class="right"><?php echo $hello;?></h3>
							<form action="#" id="contact-form">
								<div class="input-group name-email">
									
									<div class="input-field">
										<input type="email" name="email" id="email" placeholder="<?php echo $email;?>" class="form-control right">
									</div>
									<div class="input-field">
										<input type="text" name="name" id="name" placeholder="<?php echo $name;?>" class="form-control right">
									</div>
								</div>
								<div class="input-group">
									<textarea name="message" id="message" placeholder="<?php echo $message;?>" class="form-control right"></textarea>
								</div>
								<div class="input-group">
									<input type="submit" id="form-submit" class="pull-left" value="<?php echo $send;?>">
								</div>
							</form>
						</div>
					</div>
						<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<ul class="footer-social">
						
							<li><a href="https://www.twitter.com/Themefisher"><i class="fa fa-twitter fa-2x"></i></a></li>
							<li><a href="https://dribbble.com/themefisher"><i class="fa fa-linkedin fa-2x"></i></a></li>
							<li><a href="https://www.facebook.com/Themefisher"><i class="fa fa-facebook fa-2x"></i></a></li>
						</ul>
					</div>
					
					<?php }else if ($lang == "english"){?>
				
					<!-- end contact address -->
					
					<!-- contact form -->
						<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<ul class="footer-social">
							
							<li><a href="https://www.twitter.com/Themefisher"><i class="fa fa-twitter fa-2x"></i></a></li>
							<li><a href="https://dribbble.com/themefisher"><i class="fa fa-linkedin fa-2x"></i></a></li>
							<li><a href="https://www.facebook.com/Themefisher"><i class="fa fa-facebook fa-2x"></i></a></li>
						</ul>
					</div>
					
					<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="contact-form">
							<h3 ><?php echo $hello;?></h3>
							<form action="#" id="contact-form">
								<div class="input-group name-email">
									<div class="input-field">
										<input type="text" name="name" id="name" placeholder="<?php echo $name;?>" class="form-control ">
									</div>
									<div class="input-field">
										<input type="email" name="email" id="email" placeholder="<?php echo $email;?>" class="form-control ">
									</div>
									
								</div>
								<div class="input-group">
									<textarea name="message" id="message" placeholder="<?php echo $message;?>" class="form-control "></textarea>
								</div>
								<div class="input-group">
									<input type="submit" id="form-submit" class="pull-right" value="<?php echo $send;?>">
								</div>
							</form>
						</div>
					</div>
					
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
						<div class="contact-address">
						    <h3><?php echo $infotitle;?></h3>
							<p><i class="fa fa-mobile" aria-hidden="true"></i> +962791585288 </p>
							<p><i class="fa fa-mobile" aria-hidden="true"></i> +9627880343020</p>
							<p><i class="fa fa-envelope-o" aria-hidden="true"></i> abuzaidmohmad@gmail.com</p>
					
						</div>
					</div>
					
					
					
					<!-- end contact form -->
					
					
					
					<!-- footer social links -->
				
					
					<?php }?>
					<!-- end footer social links -->
					
				</div>
			</div>
			
			
			
		</section>
		
        <!--
        End Contact Us
        ==================================== -->
	<?php require_once(APPPATH.'views/theme/footer.php');?>
	