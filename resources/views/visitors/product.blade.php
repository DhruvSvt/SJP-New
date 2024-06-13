@extends('visitors.layouts.visitors', ['title' => $title])
@section('content')
    <style>
        .carousel-control {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 15%;
            font-size: 20px;
            background-color: unset;
            filter: alpha(opacity=50);
            opacity: .5;
            height: 50px;
            top: 50%;
            background-image: unset !important;
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet"
        type="text/css" />

    <div class="container">

        <!-- /.row -->
        <div class="innercontent">
            <div class="row">
                <div class="col-xs-12 col-sm-12 text-center" style="margin: 2rem 0">
                    <div class="col21">
                        <h1>Product Details</h1>
                        <div style="text-align: center">
                            <img class="reset-width" src="{{ config('app.url') }}/images/jewelbg.png">
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product">

                                <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000"
                                    id="bs-carousel">
                                    <!-- Overlay -->
                                    <div class="overlay"></div>

                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#bs-carousel" data-slide-to="1"></li>
                                        <li data-target="#bs-carousel" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        @foreach (json_decode($product->image, true) as $image)
                                            <div class="item slides @if ($loop->index == 0) active @endif">
                                                <img src="{{ Voyager::image($image) }}" />
                                            </div>
                                        @endforeach
                                    </div>
                                    <a data-slide="prev" href="#bs-carousel" class="left carousel-control"><i
                                            class="fa fa-chevron-left"></i></a>
                                    <a data-slide="next" href="#bs-carousel" class="right carousel-control"><i
                                            class="fa fa-chevron-right"></i></a>
                                </div>

                            </div>


                        </div>

                        <div class="col-md-6">
                            <div>
                                <h2>{{ $product->name }}</h2>

                                <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i>
                                    <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i
                                        class="fa fa-star-o"></i>
                                </div>
                                <hr>

                                <h4>Color :- {{ $product->color}}</h4>
                                <hr>

                                <h4>Size :- {{ $product->size}}</h4>
                                <hr>

                                <h4>Prize :- ₹{{ $product->price ?? 0 }}/-</h4>
                                <hr>

                                <h4>Minimum Order Quantity :- {{ $product->moq}}</h4>


                            </div>
                        </div>

                        <div class="col-md-2"></div>
                        <div class="col-md-12" style="margin-top: 2rem">

                            <!-- Quote form -->
                            <div class="getQuoteonProduct" style="box-shadow: unset;margin-top: 23px;">
                                <h3 class="head2">Get a Quote</h3>
                                <form name="request_quote" id="request_quote" method="POST" enctype="multipart/form-data"
                                    action="{{ route('formaction') }}" class="">
                                    @csrf
                                    <input name="act" id="act" type="hidden" value="request_quote" /> <input
                                        name="cur_page" id="cur_page" type="hidden" value="/" />
                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">Full Name</label>
                                            <input type="text" name="person_name" class="form-control"
                                                id="formGroupExampleInput" placeholder="Enter Full Name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput2">Email ID</label>
                                            <input type="email" name="email" class="form-control"
                                                id="formGroupExampleInput2" placeholder="Enter Valid Email ID"
                                                onblur="return check_validation();">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput3">Contact No</label>
                                            <input type="tel" name="contact" class="form-control"
                                                id="formGroupExampleInput3" placeholder="Enter Contact No"
                                                pattern="[6-9]{1}[0-9]{9}"
                                                title="Phone number with 6-9 and remaing 9 digit with 0-9"
                                                onblur="return check_validation();" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput4">City</label>
                                            <input type="tel" name="city" class="form-control"
                                                id="formGroupExampleInput4" placeholder="Enter City Name"
                                                onblur="return check_validation();" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="submit" class="btn-orange" value="Send Enquiry" />
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="boxspacer"></div>
                            <!--<div class="head2"><span>Masks</span></div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js">
    </script>
@endsection
