@extends('front.master')

@section('content')


    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('images/img_2.jpg');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="post-entry text-center">
                        <h1 class="mb-4"><a href="#">Contact Us</a></h1>
                        <div class="post-meta align-items-center text-center">
                            <figure class="author-figure mb-0 mr-3 d-inline-block"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></figure>
                            <span class="d-inline-block mt-1">By {{$user->name}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="site-section py-lg">
        <div class="container">

            <div class="row blog-entries element-animate">

                <div class="col-md-12 col-lg-8 main-content">


                    <form action="{{url('/message')}}" method="post">
                        @csrf
                        <div class="form-group">
                                <label for="FirstName">Name</label>
                                <input type="text" class="form-control" name="name" id="" placeholder="Enter  Name">

                        </div>

                        <div class="form-group">

                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">

                        </div>

                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" id="" name="subject" placeholder="subject">
                        </div>

                        <div class="form-group">
                            <label for="Message">Message</label>
                            <textarea type="text" class="form-control col-form-label-lg" name="message"  placeholder="Message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Send</button>

                    </form>


                </div>

                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">
                    <div class="sidebar-box search-form-wrap">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                            </div>
                        </form>
                    </div>
                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        <div class="bio text-center">
                            <img src="{{$user->image}}" alt="Image Placeholder" class="img-fluid mb-5">
                            <div class="bio-body">
                                <h2>{{$user->name}}</h2>
                                <p class="mb-4">{{$user->description}}</p>

                                <p class="mb-0 font-weight-bold">Address</p>
                                <p class="mb-4">{{$setting->address}}</p>

                                <p class="mb-0 font-weight-bold">Email</p>
                                <p class="mb-4">{{$setting->email}}</p>

                                <p class="mb-0 font-weight-bold">Phone Number</p>
                                <p class="mb-4">{{$setting->phone_number}}</p>

                                <p class="social">
                                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- END sidebar-box -->

                    <!-- END sidebar-box -->


                    <!-- END sidebar-box -->

                </div>
                <!-- END sidebar -->

            </div>
        </div>
    </section>




    <div class="site-section bg-lightx">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-5">
                    <div class="subscribe-1 ">
                        <h2>Subscribe to our newsletter</h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error illum a explicabo, ipsam nostrum.</p>
                        <form action="#" class="d-flex">
                            <input type="text" class="form-control" placeholder="Enter your email address">
                            <input type="submit" class="btn btn-primary" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
