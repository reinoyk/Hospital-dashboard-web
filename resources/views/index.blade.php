@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Home Section -->
    <div class="banner_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="banner_taital">Welcome to Aeon Medical Center</h1>
                    <p class="banner_text">
                        At Aeon Medical Center, we combine expert care with cutting-edge technology to ensure you receive the personalized treatment you deserve for a healthier tomorrow
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Section Start -->
    <div class="testimonial_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="testimonial_taital">Our Testimonial</h1>
                </div>
            </div>
            <div class="customer_section_2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box_main">
                            <div id="main_slider" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="customer_main">
                                            <div class="customer_right">
                                                <h3 class="customer_name">Irgy Ardian <span class="quick_icon"><img src="images/quick-icon.png"></span></h3>
                                                <p class="default_text">Dear Aeon,</p>
                                                <p class="enim_text">I had an exceptional experience at Aeon Medical Center. From the moment I walked in, the staff was warm, welcoming, and highly professional. The doctors took the time to thoroughly explain my treatment options and addressed all my concerns with genuine care. The facility was modern, clean, and equipped with the latest technology. I truly felt like I was in good hands, and my recovery was smooth thanks to their outstanding medical attention.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="customer_main">
                                            <div class="customer_right">
                                                <h3 class="customer_name">Davin Hakim <span class="quick_icon"><img src="images/quick-icon.png"></span></h3>
                                                <p class="default_text">Dear Aeon,</p>
                                                <p class="enim_text">Aeon Medical Center exceeded my expectations in every way. The entire team, from the reception to the medical staff, displayed kindness and expertise. I received timely and efficient care, and the atmosphere of the clinic put me at ease. The doctor was knowledgeable and approachable, and I felt well-informed about my treatment plan. I highly recommend Aeon Medical Center to anyone seeking top-notch healthcare services!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="customer_main">
                                            <div class="customer_right">
                                                <h3 class="customer_name">Dhafin Ocean <span class="quick_icon"><img src="images/quick-icon.png"></span></h3>
                                                <p class="default_text">Dear Aeon,</p>
                                                <p class="enim_text">I can’t recommend Aeon Medical Center enough! The entire experience, from booking the appointment to receiving treatment, was seamless. The staff went above and beyond to ensure my comfort, and the doctors were incredibly knowledgeable and compassionate. They made me feel like I was their top priority, taking the time to listen and provide personalized care. The clinic's state-of-the-art facilities and calm environment really set it apart. I left feeling reassured and well taken care of</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Contact Section Start -->
    <div class="contact_section layout_padding">
        <div class="container-fluid">
            <div class="contact_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="contact_taital">Get In Touch</h1>
                        <form action="">
                            <div class="mail_section_1">
                                <input type="text" class="mail_text" placeholder="Name" name="Name">
                                <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number">
                                <input type="text" class="mail_text" placeholder="Email" name="Email">
                                <textarea class="massage-bt" placeholder="Description" rows="5" id="comment" name="Description"></textarea>
                                <div class="send_bt"><a href="#">SEND</a></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 padding_left_15">
                        <div class="map_main">
                            <div class="map-responsive">
                                <iframe src="https://www.google.com/maps/embed/v1/place?key=API_KEY_HERE&amp;q=Eiffel+Tower+Paris+France" width="600" height="600" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->
@endsection
