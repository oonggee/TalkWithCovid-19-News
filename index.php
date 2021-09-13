<!DOCTYPE html>

<html lang="en" class="no-js">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Talk With Covid-19 NEWS</title>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/et-lineicon.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,400italic,500italic,700' rel='stylesheet' type='text/css'>
        <!--[if IE]>
        	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
	</head>
	<body>

    <?php

    $api = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-all");
    $data = json_decode($api,true);

    // echo'<pre>';
    // print_r($data[0]);
    // echo'</pre>';

    ?>
        <!-- Preloader -->
        <div class="animationload"> 
            <div class="loader">
                Loading...
            </div>
        </div> 
        <!-- End Preloader -->

        <!-- =========================
                 HOME
        ========================== -->

		<section id="home">
			<div class="content">
                <div id="large-header" class="large-header">
                    <canvas id="demo-canvas"></canvas>
                    <div id="countdown_dashboard" class="home-main container">
                        <div class="row">
                            <div class="logo">
                                <img src="logo.png" alt="logo">
                                <p>Covid-19 News Today By Talk With Covid-19</p> อัพเดทข้อมูลล่าสุด : <?php echo ($data[0]['update_date']);?>
                            </div>
                        </div>
                        <div class="row">
                            
                            <!-- ติดเชื้อเพิ่มวันนี้ -->
                            <div class="col-md-3 col-sm-3 col-xs-6 dash-glob" data-scroll-reveal="enter bottom move 25px, after 0.3s">
                                <div class="dash days_dash">
                                    <h2 style="color:white;"><?php echo ($data[0]['new_case']);?> </h2>
                                    <span class="dash_title">ติดเชื้อเพิ่มวันนี้</span>
                                </div>
                            </div>

                            <!-- ติดเชื้อสะสม -->
                            <div class="col-md-3 col-sm-3 col-xs-6 dash-glob" data-scroll-reveal="enter bottom move 25px, after 0.3s">
                                <div class="dash hours_dash">
                                <h2 style="color:red;"><?php echo ($data[0]['total_case']);?></h2>
                                    <span class="dash_title">ติดเชื้อสะสม</span> 
                                </div>
                            </div>

                            <!-- รักษาหายแล้ว -->
                            <div class="col-md-3 col-sm-3 col-xs-6 dash-glob" data-scroll-reveal="enter bottom move 25px, after 0.3s">
                                <div class="dash minutes_dash">
                                <h2 style="color:white;"><?php echo ($data[0]['new_recovered']);?> </h2>
                                    <span class="dash_title">รักษาหายแล้ว</span>
                                </div>
                            </div>

                            <!-- รักษาหายแล้วสะสม -->
                            <div class="col-md-3 col-sm-3 col-xs-6 dash-glob" data-scroll-reveal="enter bottom move 25px, after 0.3s">
                                <div class="dash minutes_dash">
                                <h2 style="color:Green;"><?php echo ($data[0]['total_recovered']);?> </h2>
                                    <span class="dash_title">รักษาหายแล้วสะสม</span>
                                </div>
                            </div>

                            <!-- เสียชีวิต -->
                            <div class="col-md-3 col-sm-3 col-xs-6 dash-glob" data-scroll-reveal="enter bottom move 25px, after 0.3s">
                                <div class="dash minutes_dash">
                                <h2 style="color:white;"><?php echo ($data[0]['new_death']);?> </h2>
                                    <span class="dash_title">เสียชีวิต</span>
                                </div>
                            </div>

                            <!-- เสียชีวิตสะสม -->
                            <div class="col-md-3 col-sm-3 col-xs-6 dash-glob" data-scroll-reveal="enter bottom move 25px, after 0.3s">
                                <div class="dash minutes_dash">
                                <h2 style="color:gray;"><?php echo ($data[0]['total_death']);?> </h2>
                                    <span class="dash_title">เสียชีวิตสะสม</span>
                                </div>
                            </div>
                            
           
                        </div> <!-- END ROW -->
                        
                        <br> <br> <br> <p>Talk With Covid-19</p> <p>ที่มาข้อมูล กระทรวงสาธารณสุข</p>
                        <?php echo ($data[0]['txn_date']);?>
                            <div class="row">
                            <p class="cradit">OongGee © 2021 </p>
                            
                    </div> <!-- END COUNTDOWN -->
                </div> <!-- LARGE HEADER -->
            </div> <!-- END CONTENT -->
        </section>

        
                            </div>

        <!-- =========================
                 NEWSLETTER
        ========================== -->

        <section class="newsletter">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="main_content">
                             

                        </div>  
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================
                cradit
        ========================== -->

        <footer class="footer">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="social list-inline">
                            <li class="social-btn" id="fb"><a href="https://www.facebook.com/oong.ong.05/"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <p class="cradit">OongGee © 2021 </p>
                </div>
            </div>
        </footer>
            
        <!-- JAVASCRIPTS --> 
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.lwtCountdown-1.0.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/animated.js"></script>
        <script src="js/main.js"></script>
	</body>
</html>