<?php
      
    include 'header.php';
?>


    <!--Banner Inner-->
    <section>
        <div class="lgx-banner lgx-banner-inner">
            <div class="lgx-page-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading-area">
                                <div class="lgx-heading lgx-heading-white">
                                    <h2 class="heading">Get In Touch</h2>
                                </div>
                                <ul class="breadcrumb">
                                    <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                                    <li class="active">Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--//.ROW-->
                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>
    </section> <!--//.Banner Inner-->


    <main>
        <div class="lgx-page-wrapper">
            <!--News-->
            <section>
                <div class="container">
                    <div class="row">

                        <div class="col-sm-12 col-md-6 col-md-offset-3">

                            <form method="POST" class="lgx-contactform" action="https://themearth.com/demo/html/emeet/view/php/form-handler.php">
                                <div class="form-group">
                                    <input type="text" name="lgxname" class="form-control lgxname" id="lgxname" placeholder="Enter Your Name" required>
                                </div>

                                <div class="form-group">
                                    <input type="email" name="lgxemail" class="form-control lgxemail" id="lgxemail" placeholder="Enter email" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="lgxsubject" class="form-control lgxsubject" id="lgxsubject" placeholder="Subject" required>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control lgxmessage" name="lgxmessage" id="lgxmessage" rows="5" placeholder="We expect drop some line from you..." required></textarea>
                                </div>


                                <button type="submit" name="submit" value="contact-form" class="lgx-btn hvr-glow hvr-radial-out lgxsend lgx-send"><span>Send Massage</span></button>
                            </form>

                            <!-- MODAL SECTION -->
                            <div id="lgx-form-modal" class="modal fade lgx-form-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content lgx-modal-content">
                                        <div class="modal-header lgx-modal-header">
                                            <button type="button" class="close brand-color-hover" data-dismiss="modal" aria-label="Close">
                                                <i class="fa fa-power-off"></i>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="alert lgx-form-msg" role="alert"></div>
                                        </div> <!--//MODAL BODY-->

                                    </div>
                                </div>
                            </div> <!-- //MODAL -->

                        </div> <!--//.COL-->
                    </div>
                </div><!-- //.CONTAINER -->
            </section>
            <!--News END-->
        </div>
    </main>




<?php

  include 'footer.php';

?>


</div>
<!--//.LGX SITE CONTAINER-->
<!-- *** ADD YOUR SITE SCRIPT HERE *** -->
<!-- JQUERY  -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

<!-- BOOTSTRAP JS  -->
<script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>

<!-- Smooth Scroll  -->
<script src="assets/libs/jquery.smooth-scroll.js"></script>

<!-- SKILLS SCRIPT  -->
<script src="assets/libs/jquery.validate.js"></script>

<!-- if load google maps then load this api, change api key as it may expire for limit cross as this is provided with any theme -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIKbFTvAyZuB8CuFqSIEVEHmbqfDm6UD8"></script>

<!-- CUSTOM GOOGLE MAP -->
<script type="text/javascript" src="assets/libs/gmap/jquery.googlemap.js"></script>

<!-- adding magnific popup js library -->
<script type="text/javascript" src="assets/libs/maginificpopup/jquery.magnific-popup.min.js"></script>

<!-- Owl Carousel  -->
<script src="assets/libs/owlcarousel/owl.carousel.min.js"></script>

<!-- COUNTDOWN   -->
<script src="assets/libs/countdown.js"></script>
<script src="assets/libs/timer/TimeCircles.js"></script>

<!-- Counter JS -->
<script src="assets/libs/waypoints.min.js"></script>
<script src="assets/libs/counterup/jquery.counterup.min.js"></script>

<!-- SMOTH SCROLL -->
<script src="assets/libs/jquery.smooth-scroll.min.js"></script>
<script src="assets/libs/jquery.easing.min.js"></script>

<!-- type js -->
<script src="assets/libs/typed/typed.min.js"></script>

<!-- header parallax js -->
<script src="assets/libs/header-parallax.js"></script>

<!-- instafeed js -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>-->
<script src="assets/libs/instafeed.min.js"></script>

<!-- CUSTOM SCRIPT  -->
<script src="assets/js/custom.script.js"></script>

<div class="lgx-switcher-loader"></div>
<!-- For Demo Purpose Only// Remove From Live -->



</body>

<!-- Mirrored from themearth.com/demo/html/emeet/view/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Mar 2023 06:02:12 GMT -->
</html>
