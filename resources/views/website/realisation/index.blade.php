@extends('partials.template')
@section('content')
<div class="page-content">
    <!-- inner page banner -->
    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ asset('assets/images/background/b2.jpg') }});">
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white" style="text-align: center">Nos Réalisations</h1>
            </div>
        </div>
    </div>

    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="javascript:void(0);">Acceuil</a></li>
                <li>Nos Réalisations</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <div class="content-area">
        <!-- Left & right section start -->
        <div class="container">
            <!-- Gallery -->
            <div class="site-filters clearfix center  m-b40">

            </div>
            <div class="clearfix">
                <ul id="masonry" class="row dez-gallery-listing gallery-grid-4 mfp-gallery">
                    <li class="home card-container col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/images/gallery/pic1.jpg') }}"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a>
                                        <a href="{{ asset('assets/images/gallery/pic1.jpg') }}" class="mfp-link" title="Tile Come Here"> <i class="far fa-image icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="office card-container col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow dez-img-effect zoom"> <a href="javascript:void(0);"> <img src="{{ asset('assets/images/gallery/pic2.jpg') }}"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a>
                                        <a href="{{ asset('assets/images/gallery/pic2.jpg') }}" class="mfp-link" title="Tile Come Here"> <i class="far fa-image icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/images/gallery/pic3.jpg') }}"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a>
                                        <a href="{{ asset('assets/images/gallery/pic3.jpg') }}" class="mfp-link" title="Tile Come Here"> <i class="far fa-image icon-bx-xs"></i> </a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="commercial children-aid card-container col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/images/gallery/pic4.jpg') }}"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="{{ asset('assets/images/gallery/pic4.jpg') }}" class="mfp-link" title="Tile Come Here"> <i class="far fa-image icon-bx-xs"></i> </a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="window card-container col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/images/gallery/pic5.jpg') }}"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="{{ asset('assets/images/gallery/pic5.jpg') }}" class="mfp-link" title="Tile Come Here"> <i class="far fa-image icon-bx-xs"></i> </a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="apartment card-container col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/images/gallery/pic6.jpg') }}"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="{{ asset('assets/images/gallery/pic6.jpg') }}" class="mfp-link" title="Tile Come Here"> <i class="far fa-image icon-bx-xs"></i> </a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="construction card-container col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/images/gallery/pic1.jpg') }}"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="{{ asset('assets/images/gallery/pic1.jpg') }}" class="mfp-link" title="Tile Come Here"> <i class="far fa-image icon-bx-xs"></i> </a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="home card-container col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/images/gallery/pic2.jpg') }}"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="{{ asset('assets/images/gallery/pic2.jpg') }}" class="mfp-link" title="Tile Come Here"> <i class="far fa-image icon-bx-xs"></i> </a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Gallery END -->
            <!-- Pagination start -->
            <div class="pagination-bx  clearfix ">
                <ul class="pagination">
                    <li class="previous"><a href="javascript:void(0);"><i class="fa fa-angle-double-left"></i></a></li>
                    <li class="active"><a href="javascript:void(0);">1</a></li>
                    <li><a href="javascript:void(0);">2</a></li>
                    <li><a href="javascript:void(0);">3</a></li>
                    <li class="next"><a href="javascript:void(0);"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
            <!-- Pagination END -->
        </div>
    </div>
</div>
@endsection