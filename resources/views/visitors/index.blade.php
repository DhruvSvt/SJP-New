@extends('visitors.layouts.visitors', ['title' => $title])
@section('content')
    <!-- Header Carousel -->
    <div id="myCarousel" class="carousel slide home-slider">
        <!-- Indicators -->


        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <!--<div class="item active">
                        <div class="nocontainer">
             <div class="row">
              <div class="col-md-12"><img src="images/ppinds_banner.jpg" class="slider_img_full" alt="slider image"></div>
             </div>
            </div>
                    </div>-->
            <!--<div class="item active">
                        <div class="nocontainer">
             <div class="row">
              <div class="col-md-12"><img src="images/website-banner-01.jpg" class="slider_img_full" alt="slider image"></div>
             </div>
            </div>
                    </div>-->
            @foreach ($banner as $row)
                <div class="item @if ($loop->index == 0) active @endif">
                    <div class="nocontainer">
                        <div class="row">
                            <div class="col-md-12"><img src="{{ Voyager::image($row->image) }}" class="slider_img_full"
                                    alt="slider image"></div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>

    <div class="section welcome">
        <div class="container">
            <div class="head1">Welcome To SJP</div>
            <div style="text-align: center">
                <img class="reset-width" src="{{ config('app.url') }}\images\jewelbg.png">
            </div>
            <hr>
            <div class="content">
                <p style="font-size: 1.5rem">We are available to assist you with any needs you may have. We can meet all
                    of your needs with simply a phone call. We
                    are committed to providing our customers with a range of high-quality services that will result in
                    complete
                    satisfaction. Give us a call or send us an email to obtain the amazing “PPI” experience with assured
                    fixes. We are here
                    to assist you around-the-clock.</p>
                <br>
                <p style="font-size: 1.5rem">Our area of expertise is serving retail jewelry segments, diamond
                    boutiques, and gold showrooms. We produce a wide range
                    of goods, mostly for the gold and diamond jewelry markets, including jewelry boxes, plastic
                    boxes, jewelry bags, jute
                    bags, purses, handbags, and gold coin packing cards.</p>

            </div>



        </div>
    </div>
    </div>

    <br>
    <div class="section products">
        <div class="container">
            <div class="head1">Product Category</div>
            <div style="text-align: center">
                <img class="reset-width" src="{{ config('app.url') }}\images\jewelbg.png" </div>
                <hr>
                <!--<div id="owl-demo">-->
                <div class="row" style="display: flex;  flex-wrap: wrap;">
                    <div id="owl-demo4">
                        @foreach ($category as $row)
                            {{-- <div class="col-sm-3 col-xs-12"> --}}
                                <a href="{{ route('category', $row->slug) }}" class="hvr-bounce-to-bottom product">
                                    <div class="prod_box">
                                        {{-- <div class="img_div"><span></span><img src="{{ Voyager::image($row->image) }}"
                                                alt="{{ $row->name }}"></div> --}}
                                        <div class="prod_title">{{ $row->name }}</div>
                                    </div>
                                </a>
                                <a href="{{ route('category', $row->slug) }}" class="hvr-bounce-to-bottom product">
                                    <div class="prod_box">
                                        {{-- <div class="img_div"><span></span><img src="{{ Voyager::image($row->image) }}"
                                                alt="{{ $row->name }}"></div> --}}
                                        <div class="prod_title">{{ $row->name }}</div>
                                    </div>
                                </a>
                            {{-- </div> --}}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="section testimonials">
            <div class="container">
                <div class="head1">What our clients says </div>
                <div style="text-align: center">
                    <img class="reset-width" src="{{ config('app.url') }}\images\jewelbg.png" </div>
                    <hr>
                    <div id="owl-demo2">
                        <div class="item">
                            <div class="testi_box">
                                <div class="testi_img"><img src="uploads/client-feedback/Abby-David.jpg" alt="Abby David">
                                </div>
                                <div class="testi_text">We are working with Parshwa Padmavati Industries for more than 6
                                    years &
                                    we do not think of them as our vendor but our trusted packaging partner. A satisfied
                                    customer as always.
                                    <small>- Abby David</small>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi_box">
                                <div class="testi_img"><img
                                        src="uploads/client-feedback/tushar-suwarna-IMG-20170220-WA0038.jpg"
                                        alt="Tushar Suvarna"></div>
                                <div class="testi_text">It was a wonderful experience working with the team at Parshwa
                                    Padmavati
                                    Industries.They made us feel "WOW". Everything done in the right way at the
                                    committed time.
                                    <small>- Tushar Suvarna</small>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi_box">
                                <div class="testi_img"><img
                                        src="uploads/client-feedback/abhishek-singh-IMG-20170220-WA0037.jpg"
                                        alt="Abhishek Singh"></div>
                                <div class="testi_text">Urgent Order. Executed & Delivered at short notice.Perfectly
                                    Done.Thanks
                                    a lot.
                                    <small>- Abhishek Singh</small>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi_box">
                                <div class="testi_img"><img src="uploads/client-feedback/Manish-Kothari.jpg"
                                        alt="Manish Kothari"></div>
                                <div class="testi_text">During Opening of my Jewellery Shop,I was looking for "All IN
                                    ONE"
                                    vendor. My worries got evaporated in the first meet itself. I could term them
                                    Perfectionist
                                    the way they conceptualized, designed, executed & delivered within a short period of
                                    time.
                                    <small>- Manish Kothari</small>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi_box">
                                <div class="testi_img"><img src="uploads/client-feedback/Vinod.jpg"
                                        alt="Vinod (Pooja Silver)">
                                </div>
                                <div class="testi_text">5 out of 5 stars. You deserve it guys.
                                    <small>- Vinod (Pooja Silver)</small>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi_box">
                                <div class="testi_img"><img src="uploads/client-feedback/Vinu-Paul.jpg"
                                        alt="Vinu Sir (Paul Alukkas)"></div>
                                <div class="testi_text">Quality, Service, Trust & Price. You have delivered on all
                                    parameters.Thank you so much.
                                    <small>- Vinu Sir (Paul Alukkas)</small>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi_box">
                                <div class="testi_img"><img src="uploads/client-feedback/Simmy-Viraj.jpg"
                                        alt="Simmy Viraj">
                                </div>
                                <div class="testi_text">My experience was very good with them. Very professional. Good
                                    Quality &
                                    Service too....
                                    <small>- Simmy Viraj</small>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi_box">
                                <div class="testi_img"><img
                                        src="uploads/client-feedback/deepika-bhatnagar-IMG-20170220-WA0039.jpg"
                                        alt="Deepika Bhatnagar"></div>
                                <div class="testi_text">Build Trust, Build your Brand, Build Relations & You don't need
                                    to run
                                    after sales afterwards. Parshwa Padmavati Group knows it much better than anyone
                                    else.
                                    <small>- Deepika Bhatnagar</small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <br>
            <div class="section clients">
                <div class="container">
                    <div class="head1">Our Clients</div>
                    <div style="text-align: center">
                        <img class="reset-width" src="{{ config('app.url') }}\images\jewelbg.png">
                        <hr>
                        <div id="owl-demo3">
                            @foreach ($clients as $row)
                                <div class="item">
                                    <div class="client_box">
                                        <img src="{{ Voyager::image($row->image) }}"
                                            alt="Joyalukkas World favourite jeweller">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
