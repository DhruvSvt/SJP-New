@extends('visitors.layouts.visitors',['title' => 'Contact-us'])
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
                <form name="request_quote" id="request_quote" method="POST" enctype="multipart/form-data"
                    action="{{ route('formaction') }}" class="">
                    @csrf
                    <input name="act" id="act" type="hidden" value="request_quote" /> <input name="cur_page"
                        id="cur_page" type="hidden" value="/" />
                    <div class="form-group">
                        <label for="formGroupExampleInput">Full Name</label>
                        <input type="text" name="person_name" class="form-control" id="formGroupExampleInput"
                            placeholder="Enter Full Name" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Email ID</label>
                        <input type="email" name="email" class="form-control" id="formGroupExampleInput2"
                            placeholder="Enter Valid Email ID" onblur="return check_validation();">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput3">Contact No</label>
                        <input type="tel" name="contact" class="form-control" id="formGroupExampleInput3"
                            placeholder="Enter Contact No" onblur="return check_validation();"
                            pattern="[6-9]{1}[0-9]{9}" title="Phone number with 6-9 and remaing 9 digit with 0-9"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput4">City</label>
                        <input type="tel" name="city" class="form-control" id="formGroupExampleInput4"
                            placeholder="Enter City Name" onblur="return check_validation();" required>
                    </div>

                    <input type="submit" class="btn-orange" value="Send Enquiry" />
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

                        <p><i class="fa fa-envelope-o"></i><a
                                href="mailto:s.jewelpack@gmail.com">s.jewelpack@gmail.com</a></p>
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

<!-- /.row -->
<br /> <br /> <br />
<!-- Contact Form -->
<!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<div class="row">
    <div class="col-md-12">
        <h3 class="head2">Find us in Map</h3>
        <div style="text-align: center">
            <img class="reset-width" src="{{ config('app.url') }}\images\jewelbg.png">
        </div>
        <hr>
        <!-- Embedded Google Map -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3550.479309425282!2d78.04294607451376!3d27.1412056502356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39747167c827e307%3A0x1d2ef98e187693d2!2sMaruti%20Forest%20Society!5e0!3m2!1sen!2sin!4v1714631738663!5m2!1sen!2sin"
            width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
            allowfullscreen></iframe>
    </div>

</div>
<!-- /.row -->

<hr>
</div>
@endsection