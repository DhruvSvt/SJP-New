<!-- Footer -->
<footer>
    <div class="container">
        <div class="footer-logo">
            <img src="{{ config('app.url') }}/images/sauravlogo.png" alt="">
            <br>
            <ul class="list-unstyled list-inline list-social-icons" style="width: 100%;
    text-align: center;
    margin: auto auto;">
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
        <div class="quickLinks">
            <h2>Categories</h2>
            <ul>
                @php
                $Footer_gallery = \App\Models\Product_category::orderBy('order', 'ASC')->get();
                @endphp
                @foreach ($Footer_gallery as $row)


                <li><a href="{{ route('category',$row->slug) }}">{{ $row->name
                        }}</a></li>
                @endforeach

            </ul>
        </div>
        <div class="contactDetails">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('company-profile') }}">Company Profile</a></li>


                <li><a href="{{ route('contact-us') }}">Contact us</a></li>
            </ul>
        </div>
        <div class="stayConnected">
            <h2>Contact Details</h2>
            <p>212A, ASHOKA TOWER, MARUTI FOREST AGRA</p>

            <a href="tel:9548942643" class="call2"><img src="{{ config('app.url') }}/images/footer_callus.png" <<<<<<< HEAD
                    width="21" alt="" />&nbsp; +91 9548942643 (24*7)</a><br>
            <a href="tel:9528033298" class="call2"><img src="{{ config('app.url') }}/images/footer_callus.png" width="21"
                    alt="" />&nbsp;+91 9528033298 (24*7)</a><br>
            <a href="mailto:s.jewelpack@gmail.com" class="call2"><img src="{{ config('app.url') }}/images/mail.png"
                    width="21" alt="" />&nbsp;s.jewelpack@gmail.com</a>

        </div>



    </div>
    <div class="text-center p-3" style="color: white; padding-top:5rem;padding-bottom:2rem; font-size:18px">Copyright
        &copy;
        SAURABH JEWEL PACK (OPC) PVT . LTD 2024
        <div>
            Designed by <a style="color: #ffa917" href="https://svtindia.in/">SVT
                India</a>
        </div>
    </div>


</footer>

</div>
<!-- /.container -->
