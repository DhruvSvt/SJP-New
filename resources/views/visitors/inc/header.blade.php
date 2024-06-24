<script type="text/javascript">
    $(document).ready(function() {
        $("#catlog").fancybox({
            'width': 450,
            'height': 450,
            'type': 'iframe'
        });

    });
</script>
<style>
    @media only screen and (max-width: 700px) {
        .dropdown-submenu .dropdown-menu {
            display: block;
            background: rgb(0 0 0 / 31%);
        }

        .dropdown-submenu .dropdown-toggle {
            color: #c3c3c3;
            font-weight: 600;
        }
    }
</style>
<!-- Sweet Alert CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- End Google Tag Manager (noscript) -->
<style>
    .dropdown-menu>li>a:hover,
    .dropdown-menu>li>a:focus {
        color: #ffffff;
        text-decoration: none;
        background-color: #2f3c69;
    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu>.dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -6px;
        margin-left: -1px;
        -webkit-border-radius: 0 6px 6px 6px;
        -moz-border-radius: 0 6px 6px;
        border-radius: 0 6px 6px 6px;
    }

    .dropdown-submenu:hover>.dropdown-menu {
        display: block;
    }

    .dropdown-submenu>a:after {
        display: block;
        content: " ";
        float: right;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid;
        border-width: 5px 0 5px 5px;
        border-left-color: #ccc;
        margin-top: 5px;
        margin-right: -10px;
    }

    .dropdown-submenu:hover>a:after {
        border-left-color: #fff;
    }

    .dropdown-submenu.pull-left {
        float: none;
    }

    .dropdown-submenu.pull-left>.dropdown-menu {
        left: -100%;
        margin-left: 10px;
        -webkit-border-radius: 6px 0 6px 6px;
        -moz-border-radius: 6px 0 6px 6px;
        border-radius: 6px 0 6px 6px;
    }

    @media (min-width: 768px) {

        /*added by T Morphy */
        /*from http://www.barrykooij.com/bootstrap-submenu-open-on-mouse-over/ to get hover behaviour on desktop */
        ul.nav li.dropdown:hover ul.dropdown-menu {
            display: block;
        }

        ul.nav li.dropdown:hover ul.dropdown-menu li.dropdown-submenu ul.dropdown-menu {
            display: none;
        }

        ul.nav li.dropdown ul.dropdown-menu li.dropdown-submenu:hover ul.dropdown-menu {
            display: block;
        }

        .lead {
            font-size: 21px;
        }
    }
</style>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xs-12 col-sm-6">
                <div class="mobilenumbers">
                    <!-- <a href="https://api.whatsapp.com/send?phone=919321177663&amp;text=" target="_blank" class="call"><img src="{{ config('app.url') }}/images/icon-whatsapp.png" alt="" />93211 77663</a> <span class="separator">|</span> -->
                    <a href="javascript:;" class="call"><img src="{{ config('app.url') }}/images/footer_callus.png"
                            width="21" alt="" />932292392</a> <span class="separator">|</span> <a href="javascript:;"
                        class="call" src="{{ config('app.url') }}/images/footer_callus.png" width="21" alt="" />99206
                    50797</a>
                </div>

                <a class="navbar-brand" href="{{ route('home') }}"><img
                        src="{{ config('app.url') }}\images\sauravlogo.png" class="img-responsive"
                        alt="Saurav Jewel Pack" title="Saurav Jewel Pack"></a>
            </div>
            <div class="col-md-7 col-xs-12 col-sm-6">
                <div class="head_right">
                    <ul class="list-unstyled" style="padding-top: 34px;">
                        <li>
                            <!-- <a href="https://api.whatsapp.com/send?phone=919321177663&amp;text=" target="_blank" class="call"><img src="{{ config('app.url') }}/images/icon-whatsapp.png" alt="" />93211 77663</a> <span class="separator">|</span> <a href="javascript:;" class="call"><img src="{{ config('app.url') }}/images/footer_callus.png" width="21" alt="" />93222 17216</a> <span class="separator">|</span> -->
                            <a href="tel:9548942643" class="call"><i class="fa fa-phone"></i>&nbsp;+91 9548942643</a>
                            <span class="separator">|</span>
                            <a href="tel:5623531556" class="call"><i class="fa fa-phone"></i>&nbsp;+91 5623531556</a>
                            <span class="separator">|</span>
                            <a href="mailto:s.jewelpack@gmail.com" class="call"><i class="fa fa-map-marker"></i>&nbsp;
                                s.jewelpack@gmail.com</a>
                        </li>



                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container" style="margin-top: 0;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <span class="topicons">
                <!--<a href="https://api.whatsapp.com/send?phone=919321177663&amp;text=" target="_blank"><img src="{{ config('app.url') }}/images/icon-whatsapp.png" alt="" /></a>
     -->
                <a href="tel:9548942643"><img src="{{ config('app.url') }}/images/footer_callus.png" width="21"
                        alt="" /></a>
                <a href="tel:5623531556"><img src="{{ config('app.url') }}/images/icon-call2.png" height="20"
                        alt="" /></a>

                <a href="mailto:s.jewelpack@gmail.com"><img src="{{ config('app.url') }}/images/mail.png"></a>
            </span>
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav ">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('company-profile') }}">Company Profile</a></li>
                <li class="dropdown"><a href="https://sjewelpack.in/our-product" data-toggle="dropdown"
                        class="dropdown-toggle enable">Our Products&nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">

                        <li class="dropdown-submenu"><a href="#" class="dropdown-toggle enable">Pouches&nbsp;
                                <!--<span class="caret"></span>-->
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="https://sjewelpack.in/category/single-pouche">Single Pouche</a>
                                </li>
                                <li><a href="https://sjewelpack.in/category/pouche-set">Pouche Set</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="https://sjewelpack.in/category/sjp-exclusive">SJP Exclusive</a></li>
                        <li><a href="https://sjewelpack.in/category/women-carry-bags">Women Carry Bags</a></li>
                        <li><a href="https://sjewelpack.in/category/complimentary-items">Complimentary Items</a></li>
                        <li class="dropdown-submenu"><a href="#" class="dropdown-toggle enable">Boxes&nbsp;
                                <!--<span class="caret"></span>-->
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="https://sjewelpack.in/category/regular-box">Regular Box</a>
                                </li>
                                <li><a href="https://sjewelpack.in/category/premium-box">Premium Box</a>
                                </li>
                                <li><a href="https://sjewelpack.in/category/stock-box">Stock Box</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="dropdown"><a href="{{ route('our-product') }}" data-toggle="dropdown"
                        class="dropdown-toggle enable">Our Products&nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        @php
                        $Footer_gallery = TCG\Voyager\Models\Category::orderBy('order', 'ASC')
                        ->whereNull('parent_id')
                        ->get();
                        @endphp

                        @foreach ($Footer_gallery as $row)
                        @php
                        $id = $row->id;
                        $Footer_gallery1 = TCG\Voyager\Models\Category::where('parent_id', $id)
                        ->orderBy('order', 'ASC')
                        ->get();
                        @endphp
                        @if ($Footer_gallery1->count() >= 1)
                        <li class="dropdown-submenu"><a href="#" class="dropdown-toggle enable">{{ $row->name }}&nbsp;
                                <!--<span class="caret"></span>-->
                            </a>
                            <ul class="dropdown-menu">
                                @foreach ($Footer_gallery1 as $item)
                                <li><a href="{{ route('category', $item->slug) }}">{{ $item->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @else
                        <li><a href="{{ route('category', $row->slug) }}">{{ $row->name }}</a></li>
                        @endif
                        @endforeach

                    </ul>
                </li>

                <li><a href="{{ route('contact-us') }}">Contact us</a></li>
                {{-- <li><a href="">Blog</a></li> --}}

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<div class="flt-enq">
    <img src="{{ config('app.url') }}/images/eimg2.png" class="quick-enq" />

    <div class="enq-form">
        <div class="head2">Quick Enquire us</div>
        <form name="request_quote" id="request_quote" method="POST" enctype="multipart/form-data"
            action="{{ route('formaction') }}" class="">
            @csrf
            <input name="act" id="act" type="hidden" value="request_quote" /> <input name="cur_page" id="cur_page"
                type="hidden" value="/" />
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
                    placeholder="Enter Contact No" pattern="[6-9]{1}[0-9]{9}"
                    title="Phone number with 6-9 and remaing 9 digit with 0-9" onblur="return check_validation();"
                    required>
            </div>

            {{-- <div class="form-group">
                <label for="formGroupExampleInput4">City</label>
                <input type="tel" name="city" class="form-control" id="formGroupExampleInput4"
                    placeholder="Enter City Name" onblur="return check_validation();" required>
            </div> --}}
            <div class="form-group">
                <label for="formGroupExampleInput4">City</label>
                <input type="text" name="city" class="form-control" id="formGroupExampleInput4"
                    placeholder="Enter City Name" onblur="return check_validation();" required>
            </div>
            <input type="submit" class="btn-orange" value="Send Enquiry" />
        </form>
    </div>
</div>

{{-- <div class="flt-cat">
    <img src="{{ config('app.url') }}/images/icon-download-catalog.gif" class="quick-enq" width="80px" />
    <div class="enq-form">
        <div class="head2">Catalogue</div>
        <form name="catalogue" id="catalogue" method="post" enctype="multipart/form-data"
            action="https://www.ppinds.in/?view=default" class="">
            <input name="act" id="act" type="hidden" value="catalogue" /> <input name="cur_page" id="cur_page"
                type="hidden" value="" />
            <div class="form-group">
                <label for="formGroupExampleInput">Full Name</label>
                <input type="text" name="person_name" class="form-control" id="formGroupExampleInput"
                    placeholder="Enter Full Name" required>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Email ID</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Valid Email ID">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput3">Mobile No</label>
                <input type="tel" class="form-control" name="mobile_no" placeholder="Enter Mobile No" required>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput3">City</label>
                <input type="city" class="form-control" name="city" placeholder="Enter City" required>
            </div>

            <input type="submit" class="btn-orange btn-cat" value="Get Brochure Now" />
        </form>
    </div>
</div> --}}
<script>
    function check_validation() {
        var email = $('#formGroupExampleInput2').val();
        var contact = $('#formGroupExampleInput3').val();
        //alert(contact.length);
        if (email != '') {
            var atpos = email.indexOf("@");
            var dotpos = email.lastIndexOf(".");
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) {
                alert("Please Provide Valid Email");
                return false;
            }
        }
        if (contact != '' && (contact.length < 10 || isNaN(contact))) {
            alert("Please Enter Valid Contact.");
            return false;
        }
        //alert("hello");
    }
</script>