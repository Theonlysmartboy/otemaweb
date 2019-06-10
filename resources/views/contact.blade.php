@extends('layouts.frontlayout.design')
@section('content')
    <!-- Contact Section Starts -->
    <section class="contact">
        <!-- Map Section Starts -->
        <div class="info-map">
            <div class="google-map">
                <div class="gmap_container">
                    <div id="gmap_canvas">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15959.23969620675!2d34.7526569!3d-0.1175452!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x95fc04f45009eb81!2sOtema+Inc!5e0!3m2!1sen!2ske!4v1560144242903!5m2!1sen!2ske" id="gmap_canvas"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Info Map Boxes Starts -->
        <div class="container">
            <div class="row info-map-boxes">
                <!-- Left Info Map Box Starts -->
                <div class="col-md-6 col-sm-6">
                    <div class="info-map-boxes-item fa fa-phone">
                        <h1>Phone &amp; Online</h1>
                        <p>Phone : +254 702 293 572
                            <br>Varsity Plaza – 2<sup>nd</sup> Floor
                            Oginga Odinga Street, Kisumu</sup>
                            <br><a href="mailto:info@otemainc.com">info@otemainc.com</a></p>
                    </div>
                </div>
                <!-- Left Info Map Box Ends -->
                <!-- Right Info Map Box Starts -->
                <div class="col-md-6 col-sm-6">
                    <div class="info-map-boxes-item fa fa-clock-o">
                        <h1>Working Hours</h1>
                        <p>Monday-Thursday : 08:00–17:00
                            <br>Friday & Saturday : 08:00–12:30
                            <br>Sunday - Closed</p>
                    </div>
                </div>
                <!-- Right Info Map Box Ends -->
            </div>
        </div>
        <!-- Info Map Boxes Ends -->
    </section>
    <!-- Contact Section Ends -->
           <!-- Contact Form Section Starts -->
    <section class="contactform">
        <div class="section-overlay">
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>Send Us</span> an email</h1>
                    <h4>We are very responsive to messages</h4>
                </div>
                <!-- Main Heading Ends -->
                <div class="form-container">
                    <!-- Contact Form Starts -->
                    <form class="formcontact" method="post" action="http://slimhamdi.net/amira/demos/php/process-form.php">
                        <div class="row form-inputs">
                            <!-- First Name Field Starts -->
                            <div class="col-sm-6 form-group custom-form-group">
                                    <span class="input custom-input">
										<input placeholder="First Name" class="input-field custom-input-field" id="firstname" name="firstname" type="text" required data-error="NEW ERROR MESSAGE">
										<label class="input-label custom-input-label" >
											<i class="fa fa-user icon icon-field"></i>
										</label>
									</span>
                            </div>
                            <!-- First Name Field Ends -->
                            <!-- Last Name Field Starts -->
                            <div class="col-sm-6 form-group custom-form-group">
                                    <span class="input custom-input">
										<input placeholder="Last Name" class="input-field custom-input-field" id="lastname" name="lastname" type="text" required>
										<label class="input-label custom-input-label" >
											<i class="fa fa-user-o icon icon-field"></i>
										</label>
									</span>
                            </div>
                            <!-- Last Name Field Ends -->
                            <!-- Message Field Starts -->
                            <div class="form-group custom-form-group col-sm-12">
                                <textarea placeholder="Message" id="message" name="message" cols="45" rows="7" required></textarea>
                            </div>
                            <!-- Message Field Ends -->
                            <!-- Email Name Field Starts -->
                            <div class="col-sm-6 form-group custom-form-group">
                                    <span class="input custom-input">
										<input placeholder="Email" class="input-field custom-input-field" id="email" name="email" type="text" required>
										<label class="input-label custom-input-label" >
											<i class="fa fa-envelope icon icon-field"></i>
										</label>
									</span>
                            </div>
                            <!-- Email Name Field Ends -->
                            <!-- Submit Button Starts -->
                            <div class="col-sm-6 submit-form">
                                <button id="form-submit" name="submit" type="submit" class="custom-button" title="Send">Send Message</button>
                            </div>
                            <!-- Submit Button Ends -->
                            <!-- Form Submit Message Starts -->
                            <div class="col-sm-12 text-center output_message_holder">
                                <p class="output_message"></p>
                            </div>
                            <!-- Form Submit Message Ends -->
                        </div>
                    </form>
                    <!-- Contact Form Ends -->
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form Section Ends -->
    <!-- Logos Section Starts -->
    <section class="logos">
        <div class="container">
            <ul class="bxslider" id="bxslider">
                <!-- Logos Items Starts -->
                <li><img id="3docean" src="{{asset('images/frontend_images/logos-slider/3docean-dark-background.png')}}" alt="3docean"></li>
                <li><img id="activeden" src="{{asset('images/frontend_images/logos-slider/activeden-dark-background.png')}}" alt="activeden"></li>
                <li><img id="audiojungle" src="{{asset('images/frontend_images/logos-slider/audiojungle-dark-background.png')}}" alt="audiojungle"></li>
                <li><img id="codecanyon" src="{{asset('images/frontend_images/logos-slider/codecanyon-dark-background.png')}}" alt="codecanyon"></li>
                <li><img id="graphicriver" src="{{asset('images/frontend_images/logos-slider/graphicriver-dark-background.png')}}" alt="graphicriver"></li>
                <li><img id="photodune" src="{{asset('images/frontend_images/logos-slider/photodune-dark-background.png')}}" alt="photodune"></li>
                <li><img id="themeforest" src="{{asset('images/frontend_images/logos-slider/themeforest-dark-background.png')}}" alt="themeforest"></li>
                <!-- Logos Items Ends -->
            </ul>
        </div>
    </section>
    <!-- Logos Section Ends -->


