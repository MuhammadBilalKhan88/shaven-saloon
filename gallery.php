<!doctype html>
<html class="no-js" lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!--Header area start here-->
<?php include("./include/head.php") ?>
    <!--Header area end here-->
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!--Preloader area start-->
        <div id="loader_wrapper">
            <div class="loader"></div>
        </div>
        <!--Preloader area end-->
       <!--Header area start here-->
    <?php include("./include/header.php") ?>
    <!--Header area end here-->
          <!--Breadcumb area start here-->
        <div class="breadcumb-area jarallax">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 full_width">
						<div class="indx_title_left_wrapper">
							<h2> gallery</h2>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 full_width">
						<div class="indx_title_right_wrapper">
							<ul>
								<li><a href="index-2.php">Home</a> &nbsp;&nbsp;&nbsp;> </li>
								<li> gallery</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!--Breadcumb area end here-->

        <!--Gallery area start here-->
        <div class="gallery-area section">
            <div class="container-fluid">
                <div class="row">
                    <div class="gall-sid col-lg-2 col-md-3 col-sm-3 col-xs-12">
                        <div class="filter filter-demo portfolio-nav">
                            <ul>
                                <li class="button is-checked" data-filter="*"><span></span>All</li>
                                <li class="button" data-filter=".branding"><span></span>Branding</li>
                                <li class="button" data-filter=".ux"><span></span>UI/ UX</li>
                                <li class="button" data-filter=".rresentation"><span></span>Presentation</li>
                                <li class="button" data-filter=".print"><span></span>Print</li>
                                <li class="button" data-filter=".web"><span></span>Web Development</li>
                            </ul>
                        </div>
                    </div>
                    <div id="gallery" class="gall-img col-lg-10 col-md-9 col-sm-9 col-xs-12">
                        <div class="grid">
                            <div class="grid-item rresentation col-lg-4 col-md-6 col-sm-6 col-xs-12 pd-0">
                                <div class="gallery-list">
                                    <figure>
                                        <a href="images/gallery/1.jpg"><img src="images/gallery/1.jpg" alt=""/>
                                            <span><i class="fa fa-search"></i></span>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-item ux col-lg-4 col-md-6 col-sm-6 col-xs-12 pd-0">
                                <div class="gallery-list">
                                    <figure>
                                        <a href="images/gallery/2.jpg"><img src="images/gallery/2.jpg" alt=""/>
                                            <span><i class="fa fa-search"></i></span>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-item print web col-lg-4 col-md-6 col-sm-6 col-xs-12 pd-0">
                                <div class="gallery-list">
                                    <figure>
                                        <a href="images/gallery/3.jpg"><img src="images/gallery/3.jpg" alt=""/>
                                            <span><i class="fa fa-search"></i></span>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-item branding col-lg-4 col-md-6 col-sm-6 col-xs-12 pd-0">
                                <div class="gallery-list">
                                    <figure>
                                        <a href="images/gallery/4.jpg"><img src="images/gallery/4.jpg" alt=""/>
                                            <span><i class="fa fa-search"></i></span>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-item rresentation col-lg-4 col-md-6 col-sm-6 col-xs-12 pd-0">
                                <div class="gallery-list">
                                    <figure>
                                        <a href="images/gallery/5.jpg"><img src="images/gallery/5.jpg" alt=""/>
                                            <span><i class="fa fa-search"></i></span>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-item ux print col-lg-4 col-md-6 col-sm-6 col-xs-12 pd-0">
                                <div class="gallery-list">
                                    <figure>
                                        <a href="images/gallery/6.jpg"><img src="images/gallery/6.jpg" alt=""/>
                                            <span><i class="fa fa-search"></i></span>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-item branding web col-lg-4 col-md-6 col-sm-6 col-xs-12 pd-0">
                                <div class="gallery-list">
                                    <figure>
                                        <a href="images/gallery/7.jpg"><img src="images/gallery/7.jpg" alt=""/>
                                            <span><i class="fa fa-search"></i></span>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Gallery area end here-->
        <?php include("include/footer.php")?>
    </body>

</html>