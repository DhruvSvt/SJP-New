@extends('visitors.layouts.visitors', ['title' =>$title])
@section('content')
<div class="section welcome">
    <div class="container">
        <div class="head1">Welcome To SJP</div>
        <div style="text-align: center">
            <img class="reset-width" src="{{ config('app.url') }}\images\jewelbg.png" </div>
            <hr>
            <p class="row"><b>SJP is committed to offering premium goods with cutting-edge designs and the highest
                    caliber. We produce a wide range of
                    gift items, including calendars, diaries, conference notepads, wall and table clocks, desk
                    calendars, bags, mugs, key
                    chains, pen drives, and gift pens, to name a few. We create products based on the demands and
                    preferences of each
                    individual client while also considering the brand appeal that the product should have with its
                    intended market.</b></p>
        </div>
    </div>

    <!-- /.row -->
    <div class="section welcome">
        <div class="container">
            <div class="head1">About Saurabh Jewel Pack</div>
            <div style="text-align: center">
                <img class="reset-width" src="{{ config('app.url') }}\images\jewelbg.png" </div>
                <hr>
                <p class="row"><b>In field of Provide a Great Service to jewellers as Packing providers, Saurabh Jewel
                        Pack Have a Great Trust Since 1983,
                        This company is doing an Excellent work in the market Since last 41 years, Thousands Of happy
                        customers are with us,
                        Earning Trust is More Important than earning anything else, SJP strongly Believes in This and
                        though we provide you The
                        Unbeatable Quality With Unbearable Prices, There Are much jewellery packing providers in market
                        but we beleive Brand
                        power we hold is because of our quality, simply saying the Quality of packing, You provide to
                        Customer, Is Directly
                        connected with Your impression on them. As for that problem Saurabh Jewel Pack Comes On your Way
                        a Great Solution.</b></p>
            </div>
        </div>
        {{-- <div class="innercontent">

            <!-- Intro Content -->

            <div class="row">

                <div class="col-md-5">

                    <img class="img-responsive fullimg" src="images/" alt="">

                </div>

                <div class="col-md-7">

                    <div class="head2"><b>About Saurabh Jewel Pack</b></div>
                    <div style="text-align: center">
                        <img class="reset-width" src="{{ config('app.url') }}\images\jewelbg.png" </div>
                        <hr>



                        <p><b>In field of Provide a Great Service to jewellers as Packing providers, Saurabh Jewel Pack
                                Have a Great Trust Since 1983,
                                This company is doing an Excellent work in the market Since last 41 years, Thousands Of
                                happy customers are with us,
                                Earning Trust is More Important than earning anything else, SJP strongly Believes in
                                This and though we provide you The
                                Unbeatable Quality With Unbearable Prices, There Are much jewellery packing providers in
                                market but we beleive Brand
                                power we hold is because of our quality, simply saying the Quality of packing, You
                                provide to Customer, Is Directly
                                connected with Your impression on them. As for that problem Saurabh Jewel Pack Comes On
                                your Way a Great Solution.<< /p>




                    </div>

                </div> --}}

                <!-- /.row -->



                <!-- Intro Content -->

                {{-- <div class="row">

                    <div class="col-md-6">

                        <div class="head2">Parshwa Padmavati Industries Mission</div>

                        <p>With an aim to be Numero Uno solution in the manufacturing of Corporate Gifts & Complimentary
                            Gifts in India and becoming the most trusted & preferred partner, we are working towards
                            creating a niche space as a highly visible brand name and actively going into expansion
                            mode. Our mission is to grow, develop & establish ourselves into a corporate identity that
                            is Customer Centric, Employee friendly & Socially Conscious in all its activities &
                            initiatives.</p>



                    </div>

                    <div class="col-md-6">

                        <div class="head2">Vision Values of Parshwa Padmavati Industries</div>

                        <ul class="custom-ul">

                            <li>To enable ourselves to stand firm on our aforementioned missions, we are keen to serve
                                the Industry & to generate enough value & return for the company.</li>

                            <li>Being a part and parcel of this industry, we have the vision to serve the industry with
                                the most innovative & exclusive products channelized from all over the Globe.</li>

                        </ul>

                        <p>To serve our customers with the most innovative</p>

                    </div>

                </div> --}}

                <!-- /.row -->

                <div class="section clients">
                    <div class="container">
                        <div class="head1"><b>Our Valuable Customers</b></div>
                        <div style="text-align: center">
                            <img class="reset-width" src="{{ config('app.url') }}\images\jewelbg.png" </div>
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

            <hr>

            @endsection