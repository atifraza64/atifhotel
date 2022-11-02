@extends('layouts.header')
@section('title','Home')
@section('content')
            <!-- Header Slider Start -->
        <div id="headerSlider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
                <li data-target="#headerSlider" data-slide-to="1"></li>
                <li data-target="#headerSlider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slider/header-slider-1.jpg" alt="Royal Hotel">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInRight">Nullam mattis</h1>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <img src="img/slider/header-slider-2.jpg" alt="Royal Hotel">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInLeft">Lorem ipsum</h1>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/slider/header-slider-3.jpg" alt="Royal Hotel">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInRight">Phasellus ultrices</h1>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Header Slider End -->
        
        <!-- Search Section Start -->
        <div id="search">
            <div class="container">
                <div class="form-row">
                    <div class="control-group col-md-3">
                        <label>Check-In</label>
                        <div class="form-group">
                            <div class="input-group date" id="date-3" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#date-3"/>
                                <div class="input-group-append" data-target="#date-3" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="control-group col-md-3">
                        <label>Check-Out</label>
                        <div class="form-group">
                            <div class="input-group date" id="date-4" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#date-4"/>
                                <div class="input-group-append" data-target="#date-4" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="control-group col-md-3">
                        <div class="form-row">
                            <div class="control-group col-md-6">
                                <label>Adult</label>
                                <select class="custom-select">
                                    <option selected>0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="control-group col-md-6 kid">
                                <label>Kid</label>
                                <select class="custom-select">
                                    <option selected>0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="control-group col-md-3">
                        <button class="btn btn-block">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Section End -->
        
        <!-- Welcome Section Start -->
        <div id="welcome">
            <div class="container">
                <h3>Welcome to Royal Hotel</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida sollicitudin turpis id posuere. Fusce nec rhoncus nibh. Fusce arcu libero, euismod eget commodo at, venenatis a nisi. Sed faucibus metus sed leo vulputate blandit.</p>
                <a href="#">Book Now</a>
            </div>
        </div>
        <!-- Welcome Section End -->
        
        <!-- Amenities Section Start -->
        <div id="amenities" class="home-amenities">
            <div class="container">
                <div class="section-header">
                    <h2>Amenities & Services</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in mi libero. Quisque convallis, enim at venenatis tincidunt.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-2"></i>
                        <h3>Air Conditioner</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-3"></i>
                        <h3>Bathtub</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-4"></i>
                        <h3>Shower</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-6"></i>
                        <h3>Television</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-7"></i>
                        <h3>WiFi</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-8"></i>
                        <h3>Telephone</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-9"></i>
                        <h3>Mini Bar</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-10"></i>
                        <h3>Kitchen</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Amenities Section Start -->
        
        <!-- Room Section Start -->
        <div id="rooms">
            <div class="container">
                <div class="section-header">
                    <h2>Our Rooms</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in mi libero. Quisque convallis, enim at venenatis tincidunt.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="room-img">
                                    <div class="box12">
                                        <img src="img/room/room-1.jpg">
                                        <div class="box-content">
                                            <h3 class="title">Standard Single</h3>
                                            <ul class="icon">
                                                <li><a href="#" data-toggle="modal" data-target="#modal-id"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="room-des">
                                    <h3><a href="#" data-toggle="modal" data-target="#modal-id">Standard Single</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <ul class="room-size">
                                        <li><i class="fa fa-arrow-right"></i>Size: 260 sq ft </li>
                                        <li><i class="fa fa-arrow-right"></i>Beds: 2 Single(s) </li>
                                    </ul>
                                    <ul class="room-icon">
                                        <li class="icon-1"></li>
                                        <li class="icon-2"></li>
                                        <li class="icon-3"></li>
                                        <li class="icon-4"></li>
                                        <li class="icon-5"></li>
                                        <li class="icon-6"></li>
                                        <li class="icon-7"></li>
                                        <li class="icon-8"></li>
                                        <li class="icon-9"></li>
                                        <li class="icon-10"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="room-rate">
                                    <h3>From</h3>
                                    <h1>$150</h1>
                                    <a href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="room-img">
                                    <div class="box12">
                                        <img src="img/room/room-2.jpg">
                                        <div class="box-content">
                                            <h3 class="title">Standard Double</h3>
                                            <ul class="icon">
                                                <li><a href="#" data-toggle="modal" data-target="#modal-id"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="room-des">
                                    <h3><a href="#" data-toggle="modal" data-target="#modal-id">Standard Double</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <ul class="room-size">
                                        <li><i class="fa fa-arrow-right"></i>Size: 350 sq ft </li>
                                        <li><i class="fa fa-arrow-right"></i>Beds: 2 Double(s) </li>
                                    </ul>
                                    <ul class="room-icon">
                                        <li class="icon-1"></li>
                                        <li class="icon-2"></li>
                                        <li class="icon-3"></li>
                                        <li class="icon-4"></li>
                                        <li class="icon-5"></li>
                                        <li class="icon-6"></li>
                                        <li class="icon-7"></li>
                                        <li class="icon-8"></li>
                                        <li class="icon-9"></li>
                                        <li class="icon-10"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="room-rate">
                                    <h3>From</h3>
                                    <h1>$200</h1>
                                    <a href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="room-img">
                                    <div class="box12">
                                        <img src="img/room/room-3.jpg">
                                        <div class="box-content">
                                            <h3 class="title">Premium Single</h3>
                                            <ul class="icon">
                                                <li><a href="#" data-toggle="modal" data-target="#modal-id"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="room-des">
                                    <h3><a href="#" data-toggle="modal" data-target="#modal-id">Premium Single</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <ul class="room-size">
                                        <li><i class="fa fa-arrow-right"></i>Size: 200 sq ft </li>
                                        <li><i class="fa fa-arrow-right"></i>Beds: 2 Single(s) </li>
                                    </ul>
                                    <ul class="room-icon">
                                        <li class="icon-1"></li>
                                        <li class="icon-2"></li>
                                        <li class="icon-3"></li>
                                        <li class="icon-4"></li>
                                        <li class="icon-5"></li>
                                        <li class="icon-6"></li>
                                        <li class="icon-7"></li>
                                        <li class="icon-8"></li>
                                        <li class="icon-9"></li>
                                        <li class="icon-10"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="room-rate">
                                    <h3>From</h3>
                                    <h1>$220</h1>
                                    <a href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="room-img">
                                    <div class="box12">
                                        <img src="img/room/room-4.jpg">
                                        <div class="box-content">
                                            <h3 class="title">Silver Double</h3>
                                            <ul class="icon">
                                                <li><a href="#" data-toggle="modal" data-target="#modal-id"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="room-des">
                                    <h3><a href="#" data-toggle="modal" data-target="#modal-id">Silver Double</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <ul class="room-size">
                                        <li><i class="fa fa-arrow-right"></i>Size: 200 sq ft </li>
                                        <li><i class="fa fa-arrow-right"></i>Beds: 2 Double(s) </li>
                                    </ul>
                                    <ul class="room-icon">
                                        <li class="icon-1"></li>
                                        <li class="icon-2"></li>
                                        <li class="icon-3"></li>
                                        <li class="icon-4"></li>
                                        <li class="icon-5"></li>
                                        <li class="icon-6"></li>
                                        <li class="icon-7"></li>
                                        <li class="icon-8"></li>
                                        <li class="icon-9"></li>
                                        <li class="icon-10"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="room-rate">
                                    <h3>From</h3>
                                    <h1>$180</h1>
                                    <a href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="room-img">
                                    <div class="box12">
                                        <img src="img/room/room-5.jpg">
                                        <div class="box-content">
                                            <h3 class="title">Premium Double</h3>
                                            <ul class="icon">
                                                <li><a href="#" data-toggle="modal" data-target="#modal-id"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="room-des">
                                    <h3><a href="#" data-toggle="modal" data-target="#modal-id">Premium Double</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <ul class="room-size">
                                        <li><i class="fa fa-arrow-right"></i>Size: 450 sq ft </li>
                                        <li><i class="fa fa-arrow-right"></i>Beds: 2 Double(s) </li>
                                    </ul>
                                    <ul class="room-icon">
                                        <li class="icon-1"></li>
                                        <li class="icon-2"></li>
                                        <li class="icon-3"></li>
                                        <li class="icon-4"></li>
                                        <li class="icon-5"></li>
                                        <li class="icon-6"></li>
                                        <li class="icon-7"></li>
                                        <li class="icon-8"></li>
                                        <li class="icon-9"></li>
                                        <li class="icon-10"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="room-rate">
                                    <h3>From</h3>
                                    <h1>$400</h1>
                                    <a href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Room Section End -->
        
        <!-- Modal for Room Section Start -->
        <div id="modal-id" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="port-slider">
                                    <div><img src="img/room-slider/room-1.jpg"></div>
                                    <div><img src="img/room-slider/room-2.jpg"></div>
                                    <div><img src="img/room-slider/room-3.jpg"></div>
                                    <div><img src="img/room-slider/room-4.jpg"></div>
                                    <div><img src="img/room-slider/room-5.jpg"></div>
                                    <div><img src="img/room-slider/room-6.jpg"></div>
                                </div>
                                <div class="port-slider-nav">
                                    <div><img src="img/room-slider/room-1.jpg"></div>
                                    <div><img src="img/room-slider/room-2.jpg"></div>
                                    <div><img src="img/room-slider/room-3.jpg"></div>
                                    <div><img src="img/room-slider/room-4.jpg"></div>
                                    <div><img src="img/room-slider/room-5.jpg"></div>
                                    <div><img src="img/room-slider/room-6.jpg"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <h2>Lorem ipsum dolor</h2>
                                <p>
                                    Lorem ipsum dolor viverra purus imperdiet rhoncus imperdiet. Suspendisse vulputate condimentum ligula sollicitudin hendrerit. Phasellus luctus, elit et ultrices interdum, neque mi pellentesque massorci. Nam in cursus ex, nec mattis lectus. Curabitur quis elementum nunc. Mauris iaculis, justo eu aliquam sagittis, arcu eros cursus libero, sit amet eleifend dolor odio at lacus. 
                                </p>
                                <div class="modal-link">
                                    <a href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for Room Section End -->
        
        <!-- Subscribe Section Start -->
        <div id="subscribe">
            <div class="container">
                <div class="section-header">
                    <h2>Subscribe for Special Offer</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in mi libero. Quisque convallis, enim at venenatis tincidunt.
                    </p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="subscribe-form">
                            <form>
                                <input type="email" required="required" placeholder="Enter your email here" />
                                <button>submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe Section End -->
        
        <!-- Booking Section Start -->
        <div id="booking">
            <div class="container">
                <div class="section-header">
                    <h2>Room Booking</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in mi libero. Quisque convallis, enim at venenatis tincidunt.
                    </p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="booking-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="bookingForm" novalidate="novalidate">
                                <div class="form-row">
                                    <div class="control-group col-sm-6">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" id="fname" placeholder="E.g. John" required="required" data-validation-required-message="Please enter first name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group col-sm-6">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" id="lname" placeholder="E.g. Sina" required="required" data-validation-required-message="Please enter last name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="control-group col-sm-6">
                                        <label>Mobile</label>
                                        <input type="text" class="form-control" id="mobile" placeholder="E.g. +1 234 567 8900" required="required" data-validation-required-message="Please enter your mobile number" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group col-sm-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="E.g. email@example.com" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="control-group col-sm-6">
                                        <label>Check-In</label>
                                        <input type="text" class="form-control datetimepicker-input" id="date-1" data-toggle="datetimepicker" data-target="#date-1" placeholder="E.g. MM/DD/YYYY" required="required" data-validation-required-message="Please enter date"/>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group col-sm-6">
                                        <label>Check-Out</label>
                                        <input type="text" class="form-control datetimepicker-input" id="date-2" data-toggle="datetimepicker" data-target="#date-2" placeholder="E.g. MM/DD/YYYY" required="required" data-validation-required-message="Please enter date"/>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label>Special Request</label>
                                    <input type="text" class="form-control" id="request" placeholder="E.g. Special Request" required="required" data-validation-required-message="Please enter your special request" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="button"><button type="submit" id="bookingButton">Book Now</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking Section End -->
        
        <!-- Call Section Start -->
        <div id="call-us">
            <div class="container">
                <div class="section-header">
                    <h2>Click Below to Call Us</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in mi libero. Quisque convallis, enim at venenatis tincidunt.
                    </p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="tel:+12345678900">+1 234 567 8900</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call Section End -->
@endsection