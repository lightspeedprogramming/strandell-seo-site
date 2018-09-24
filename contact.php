<?php
    $title = "Contact Us || XYZ";
    include 'header.php';
?>

        <div class="page-title parallax parallax1 ">
            <div class="overlay"></div>
            <div class="container">
                <div class="page-title-content text-center">
                    <div class="page-title-heading ">
                        <h3 class="title"><a href="#">CONTACT US</a></h3>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><a href="#">Home</a></li>
                            <li><a href="#">Contact us</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- /.page-title -->

        <div class="content-wrap main-contact-page pd-top-80 pd-bottom-80">
            <div class="container">
                <div class="wrap-contact-page pd-top-80 ">
                    <div class="container">
                         <div class="row">
                            <div class="col-md-7 col-sm-12">
                                <div class=" flat-form-contact-us"> 
                                    <div class="flat-title">
                                        <h3 class="title">Contact Us</h3>
                                    </div>

                                    <form action="mailsend.php" class="form-contact-us page-contact">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="name" placeholder="Your Name *" required>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="phone" placeholder="Your Phone *" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="email" name="email" placeholder="Your Email *" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea name="message" rows="2"  placeholder="Your Message *"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea name="address" rows="5" placeholder="Your Address *"></textarea>
                                            </div>
                                        </div>

                                        <div class="">
                                            <button type="submit" id="btn-comment" class="btn-effect" name="submit">
                                                SEND
                                            </button>
                                        </div>
                                    </form>  
                                </div>
                            </div>

                            <div class="col-md-5 col-sm-12">
                                <div class="sidebar-right">
                                    <div class="widget widget-logo-info widget-text sidebar-right">
                                        <div class="flat-title">
                                            <h3 class="title">Our Office</h3>
                                        </div>
                                        <ul class="info">
                                            <li class="phone"><a href="tel: +x-xxx-xxx-xxxx" class="data-hover">+x-xxx-xxx-xxxx</a></li>
                                            <li class="mail"><a href="mailto: contact@Xyz.com" class="data-hover">contact@Xyz.com</a></li>
                                            <li class="address"><a class="data-hover">xxxxxxxxxxxxx</a></li>   
                                        </ul>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.content-wrap -->

<?php
    include 'footer.php';
?>