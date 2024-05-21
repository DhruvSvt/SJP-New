@extends('visitors.layouts.visitors',['title' => 'Enquiry'])
@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- /.row -->
        <div class="innercontent">
            <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>-->
            <div class="row pt25">
                <!-- Intro Content -->
                <div class="col-md-8 col-offset-md-2 col-sm-12 col-xs-12">
                    <h3 class="head2">Send us a Message</h3>
                    <div style="text-align: center">
                        <img class="reset-width" src="{{ config('app.url') }}\images\jewelbg.png">
                    </div>
                    <hr>
                    <!--<form name="sentMessage" id="contactForm" method="POST" action="bin/enquiry.php" novalidate>-->
                    <form name="frm_inquiry" id="frm_inquiry" method="post" enctype="multipart/form-data"
                        action="#">
                        <input name="act" id="act" type="hidden" value="inquiry" />
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Name of Organization (*)</label>
                                <input name="organization" id="organization" type="text" class="form-control" />
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Contact Person (*)</label>
                                <input name="name" id="name" type="text" class="form-control" />
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <!--<div class="control-group form-group">
                            <div class="controls">
                                <label>Designation</label>
                                <input name="designation" id="designation" type="text" class="form-control" />
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Address</label>
                                <input name="address" id="address" type="text" class="form-control" />
                                <p class="help-block"></p>
                            </div>
                        </div> -->
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>City (*)</label>
                                <input name="city" id="city" type="text" class="form-control" />
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <!--<div class="control-group form-group">
                            <div class="controls">
                                <label>State</label>
                                <input name="state" id="state" type="text" class="form-control" />
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Pin Code</label>
                                <input name="pin_code" id="pin_code" type="text" class="form-control" />
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Country</label>
                                <input name="country" id="country" type="text" class="form-control" />
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Phone</label>
                                <input name="phone" id="phone" type="text" class="form-control" />
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Fax</label>
                                <input name="fax" id="fax" type="text" class="form-control" />
                                <p class="help-block"></p>
                            </div>
                        </div>-->
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Mobile (*)</label>
                                <input name="mobile" id="mobile" type="text" class="form-control" />
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>E-mail (*)</label>
                                <input name="email" id="email" type="text" class="form-control" />
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <!--<div class="control-group form-group">
                            <div class="controls">
                                <label>Website</label>
                                <input name="website" id="website" type="text" class="form-control" />
                                <p class="help-block"></p>
                            </div>
                        </div>-->
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Your message (*)</label>
                                <textarea name="message" id="message" cols="100" rows="10"
                                    class="form-control"></textarea>
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <!-- <div class="control-group form-group">
                            <div class="controls">
                                <label>Full Name:</label>
                                <input type="text" class="form-control" name="name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email Address:</label>
                                <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Phone Number:</label>
                                <input type="tel" class="form-control" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Select Product for Enquiry:</label>
                                <select class="form-control" name="product" id="product" required data-validation-required-message="Please enter your email address.">
                                    <option>Select Product</option>
                                    <option value="Coin Card">Coin Card</option>
                                    <option value="Diary">Diary</option>
                                    <option value="Mug">Mug</option>
                                    <option value="Purse">Purse</option>
                                    <option value="Pouche">Pouche</option>
                                </select>

                            </div>
                        </div>

                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Message:</label>
                                <textarea rows="10" cols="100" class="form-control" name="message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>-->
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-primary" name="submit" id="submit"
                            onclick="return validation()"><a style="color: white" href="{{ route('home') }}">Send Message</a></button>
                    </form>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="quick_contact">
                        <h3>Quick Contact Details</h3>
                        <div class="quick-cont">
                            <p><i class="fa fa-map-marker"></i>212A, ASHOKA TOWER, MARUTI FOREST AGRA</p>
                            <p><i class="fa fa-phone"></i><a href="tel:9219693583">+91 9219693583 (24*7)</a></p>
                            <p><i class="fa fa-phone"></i><a href="tel:7253936177">+91 7253936177 (24*7)</a></p>
                            <p><i class="fa fa-phone"></i><a href="tel:9368475560">+91 9368475560 (24*7)</a></p>

                            <p><i class="fa fa-envelope-o"></i><a href="mailto:s.jewelpack@gmail.com">s.jewelpack@gmail.com</a></p>
                            <!--<p><i class="fa fa-clock-o"></i>Monday - Friday: 9:00 AM to 5:00 PM</p>-->
                            <ul class="list-unstyled list-inline list-social-icons">
                                <li>
                                    <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <hr>
@endsection
