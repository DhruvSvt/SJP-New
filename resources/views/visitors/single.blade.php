@extends('visitors.layouts.visitors', ['title' =>$title])
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet"
    type="text/css" />


<div class="container">

    <!-- /.row -->
    <div class="innercontent">
        <div class="row">
            <div class="col-xs-12 col-sm-12 text-center" style="margin: 2rem 0">
                <div class="col21">
                    <h1>{{ $category->name }}</h1>
                    <div style="text-align: center">
                        <img class="reset-width" src="{{ config('app.url') }}/images/jewelbg.png">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3" style="margin-top: 2rem">
                <div class="leftbar">
                    <div class="lefthead">Our Products</div>
                    <nav class="navbar navbar-default sidebar" role="navigation" style="width: 100%;">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#bs-sidebar-navbar-collapse-1">
                                    <span class="menu-text">click here to show product menu</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">

                                <ul class="nav navbar-nav" style="width: 100%;">

                                    @foreach ($categorys as $row)
                                    <li>
                                        <a href="{{ route('category',$row->slug) }}">{{ $row->name
                                            }}</a>
                                    </li>
                                    @endforeach



                                </ul>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <ul id="xyz" class="ul_show_hide">

                </ul>
            </div>
            <div class="col-xs-12 col-sm-9" style="margin-top: 2rem">


                <ul class="subcategorylist">

                    @foreach ($products as $row)
                    <li class="footer2_box ">
                        <div class="subcatimg">
                            <div class="tb">
                                <div class="tbc">
                                    <a href="{{ Voyager::image($row->image) }}" data-fancybox="gallery"
                                        data-caption="{{ $row->name }}" style="cursor: zoom-in;">
                                        <img src="{{ Voyager::image($row->image) }}" alt="Image Gallery">
                                    </a>

                                </div>
                            </div>
                        </div>

                        <h3>{{ $row->name }}</h3>

                    </li>
                    @endforeach





                </ul>
                <div class="clear"></div>

                <!-- Quote form -->
                <div class="getQuoteonProduct" style="box-shadow: unset;
    margin-top: 23px;">
                    <h3 class="head2">Get a Quote</h3>
                    <form name="request_quote" id="request_quote" method="POST" enctype="multipart/form-data"
                        action="{{ route('formaction') }}" class="">
                        @csrf
                        <input name="act" id="act" type="hidden" value="request_quote" /> <input name="cur_page"
                            id="cur_page" type="hidden" value="/" />
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Full Name</label>
                                <input type="text" name="person_name" class="form-control" id="formGroupExampleInput"
                                    placeholder="Enter Full Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Email ID</label>
                                <input type="email" name="email" class="form-control" id="formGroupExampleInput2"
                                    placeholder="Enter Valid Email ID" onblur="return check_validation();">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput3">Contact No</label>
                                <input type="tel" name="contact" class="form-control" id="formGroupExampleInput3"
                                    placeholder="Enter Contact No" pattern="[6-9]{1}[0-9]{9}"
                                    title="Phone number with 6-9 and remaing 9 digit with 0-9"
                                    onblur="return check_validation();" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput4">City</label>
                                <input type="tel" name="city" class="form-control" id="formGroupExampleInput4"
                                    placeholder="Enter City Name" onblur="return check_validation();" required>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js">
</script>
<script>
    // Fancybox Config
    $('[data-fancybox="gallery"]').fancybox({
    buttons: [
    "slideShow",
    "thumbs",
    "zoom",
    "fullScreen",
    "share",
    "close"
    ],
    loop: false,
    protect: true
    });
</script>
@endsection