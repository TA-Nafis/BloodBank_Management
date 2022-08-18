@extends('layouts.app')
@push('css')
        <!-- Styles -->
    <link href="{{ asset('plugins/grid-gallery/css/grid-gallery.min.css') }}" rel="stylesheet">
@endpush
@section('content')    
       
    <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('images/slider/slide-02.jpg')}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class=" bounceInDown">{{__('Donate Blood & Save a Life')}}</h5>
                        <h3 class="bounceInDown text-center text-danger font-weight-bold">{{__('Click on Below Button For Blood Request')}}</h3>
                        <p class=" bounceInLeft">{{__('')}}</p>

                        <div class=" vbh">

                            {{-- <div class="btn btn-success  bounceInUp"> {{__('Book Appointment')}} </div> --}}
                            <a href="{{route('consumer.hospitals')}}" class="btn btn-success  bounceInUp"> {{__('Request Blood')}} </a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('images/slider/slide-03.jpg')}}" alt="Third slide">
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class=" bounceInDown">{{__('Donate Blood & Save a Life')}}</h5>
                        <h3 class="bounceInDown text-center">{{__('Click on Below Button For Blood Request')}}</h3>
                        <p class=" bounceInLeft">
                            {{('')}}
                            </p>

                        <div class=" vbh">
                            <a href="{{route('consumer.hospitals')}}" class="btn btn-success  bounceInUp"> {{__('Request Blood')}} </a>
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">{{__('Previous')}}</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">{{__('Next')}}</span>
            </a>
        </div>


    </div>
    
    <!--*************** About Us Starts Here ***************-->
<section id="about" class="contianer-fluid about-us">
    <div class="container">
        <div class="row session-title">
            <h2>{{__('')}}</h2>
            <p>
                {{__('')}}
            </p>
        </div>
            <div class="row">
                <div class="col-md-6 text">
                    <h2>{{__('')}}</h2>
                    <p>{{__('')}}</p>
                    <p>{{__('')}}</p>
                    <p>{{__('')}}</p>
                    <p>{{__('')}}</p>
                    
                </div>
                <div class="col-md-6 image">
                    <img src="{{asset('images/about.jpg')}}" alt="">
                </div>
            </div>
    </div>
</section>
    
        
    
    <!-- ################# Gallery Start Here #######################--->
    
    <div id="gallery" class="gallery container-fluid">
        <div class="container">
            <div class="row session-title">
                <h2>{{__('Checkout Our Gallery')}}</h2>
            </div>
            <div class="gallery-row row">
                    <div id="gg-screen"></div>
                    <div class="gg-box">
                            <div class="gg-element">
                                <img src="{{asset('images/gallery/g1.jpg')}}">
                            </div>
                            <div class="gg-element">
                                <img src="{{asset('images/gallery/g2.jpg')}}">
                            </div>
                            <div class="gg-element">
                                <img src="{{asset('images/gallery/g3.jpg')}}">
                            </div>
                            <div class="gg-element">
                                <img src="{{asset('images/gallery/g4.jpg')}}">
                            </div>
                            <div class="gg-element">
                                <img src="{{asset('images/gallery/g5.jpg')}}">
                            </div>
                            <div class="gg-element">
                                <img src="{{asset('images/gallery/g6.jpg')}}">
                            </div>
                            <div class="gg-element">
                                <img src="{{asset('images/gallery/g7.jpg')}}">
                            </div>
                            <div class="gg-element">
                                <img src="{{asset('images/gallery/g8.jpg')}}">
                            </div>
                            <div class="gg-element">
                                <img src="{{asset('images/gallery/g9.jpg')}}">
                            </div>
                            <div class="gg-element">
                                <img src="{{asset('images/gallery/g10.jpg')}}">
                            </div>
                            
                            
                        </div>
            </div>
        </div>
    </div>
    
    
    
    <!-- ################# Donation Process Start Here #######################--->
    
    <section id="process" class="donation-care">
        <div class="container">
        <div class="row session-title">
            <h2>{{__('Donation Process')}}</h2>
            <p>{{__('')}}</p>
        </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                    <img src="{{asset('images/gallery/g1.jpg')}}" alt="">
                    <h4><b>1 - </b>{{__('Registration')}}</h4>
                    <p>{{__('')}}</p>
                    <button class="btn btn-sm btn-danger">{{__('Readmore')}} <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                    <img src="{{asset('images/gallery/g2.jpg')}}" alt="">
                        <h4><b>2 - </b>{{__('Seeing')}}</h4>
                    <p>{{__('')}}</p>
                    <button class="btn btn-sm btn-danger">{{__('Readmore')}} <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                    <img src="{{asset('images/gallery/g3.jpg')}}" alt="">
                        <h4><b>3 - </b>{{__('Donation')}}</h4>
                    <p>{{__('')}}</p>
                    <button class="btn btn-sm btn-danger">{{__('Readmore')}} <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <img src="{{asset('images/gallery/g4.jpg')}}" alt="">
                        <h4><b>4 - </b>{{__('Save Life')}}</h4>
                        <p>{{__('')}}</p>
                        <button class="btn btn-sm btn-danger">{{__('Readmore')}} <i class="fas fa-arrow-right"></i></button>
                    </div> 
                </div>
            </div>
            
            
        </div>
    </section>
    
    
    
    
        <!--################### Our Blog Starts Here #######################--->
        <div id="blog" class="blog-container contaienr-fluid">
            <div class="container">
                <div class="session-title row">
                <h2>{{__('Latest Blog')}}</h2>
                <p>{{__(' ')}}.</p>
                </div>
                <div class="row news-row">
                    <div class="col-md-6">
                        <div class="news-card">
                            <div class="image">
                                <img src="{{asset('images/blog/blog')}}_01.jpg" alt="">
                            </div>
                            <div class="detail">
                                <h3>{{__('Latest News about Us')}}</h3>
                                <p>{{__('')}}</p>
                                <p class="footp">
                                    {{__('27 Comments')}} <span>/</span>
                                    {{__('Blog Design')}} <span>/</span>
                                    {{__('Read More')}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-card">
                            <div class="image">
                                <img src="{{asset('images/blog/blog')}}_02.jpg" alt="">
                            </div>
                            <div class="detail">
                                <h3>{{__('')}}</h3>
                                <p>{{__('')}} </p>
                                <p class="footp">
                                    {{__('27 Comments')}} <span>/</span>
                                    {{__('Blog Design')}} <span>/</span>
                                    {{__('Read More')}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-card">
                            <div class="image">
                                <img src="{{asset('images/blog/blog')}}_03.jpg" alt="">
                            </div>
                            <div class="detail">
                                <h3>{{__('')}}</h3>
                                <p></p>
                                <p class="footp">
                                    {{__('27 Comments')}} <span>/</span>
                                    {{__('Blog Design')}} <span>/</span>
                                    {{__('Read More')}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-card">
                            <div class="image">
                                <img src="{{asset('images/blog/blog')}}_04.jpg" alt="">
                            </div>
                            <div class="detail">
                                <h3>{{__('Latest News about Us')}}</h3>
                                <p>{{__('')}}</p>
                                <p class="footp">
                                    {{__('27 Comments')}} <span>/</span>
                                    {{__('Blog Design')}} <span>/</span>
                                    {{__('Read More')}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
    


    <!--*************** Footer  Starts Here *************** -->
    <footer id="contact" class="container-fluid">
        <div class="container">
            
            <div class="row content-ro">
                <div class="col-lg-4 col-md-12 footer-contact">
                    <h2>{{__('Contact Informatins')}}</h2>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="detail">
                            <p>{{__('189/2, Boubazar, Badda,Dhaka-1212')}}</p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="detail">
                            <p>help@bloodapp.com <br> support@bloodapp.com</p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="detail">
                            <p>+8801625088361 <br> +8801521561609</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 footer-links">
                <div class="row no-margin mt-2">
                    <h2>{{__('Quick Links')}}</h2>
                    <ul>
                        <li>{{__('Home')}}</li>
                        <li>{{__('About Us')}}</li>
                        <li>{{__('Contacts')}}</li>
                        <li>{{__('Pricing')}}</li>
                        <li>{{__('Gallery')}}</li>
                        <li>{{__('Features')}}</li>

                    </ul>
                    </div>
                <div class="row no-margin mt-1">
                    <h2 class="m-t-2">{{__('More Products')}}</h2>
                    <ul>
                        <li>{{__('Forum ')}}</li>
                        <li>{{__('Edu Smart')}}</li>
                        <li>{{__('Smart Event')}}</li>
                        <li>{{__('Smart School')}}</li>


                    </ul>
                </div>

                </div>
                <div class="col-lg-4 col-md-12 footer-form">
                    <div class="form-card">
                        <div class="form-title">
                            <h4>{{__('Quick Message')}}</h4>
                        </div>
                        <div class="form-body">
                            <input type="text" placeholder="Enter Name" class="form-control">
                            <input type="text" placeholder="Enter Mobile no" class="form-control">
                            <input type="text" placeholder="Enter Email Address" class="form-control">
                            <input type="text" placeholder="Your Message" class="form-control">
                            <button class="btn btn-sm btn-primary w-100">{{__('Send Request')}}</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <p>Copyright © | All right reserved.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 socila-link">
                        <ul>
                            <li><a><i class="fab fa-github"></i></a></li>
                            <li><a><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a><i class="fab fa-twitter"></i></a></li>
                            <li><a><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
