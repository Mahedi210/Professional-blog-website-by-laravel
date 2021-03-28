  <div class="site-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <h3 class="footer-heading mb-4">About Us</h3>
                    <p>{{$setting->about_site}}</p>
                </div>
                <div class="col-md-3 ml-auto">
                    <!-- <h3 class="footer-heading mb-4">Navigation</h3> -->
                    <ul class="list-unstyled float-left mr-5">
                        <li><a href="{{url('/about')}}">About Us</a></li>
                        <li><a href="{{url('/contact')}}">Contact</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="{{url('/')}}">Home</a></li>
                    </ul>
                    <ul class="list-unstyled float-left">
                        @foreach($categories as $category)
                            <li><a href="{{url('/category',['slug'=>$category->slug])}}">{{$category->name}} </a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-4">


                    <div>
                        <h3 class="footer-heading mb-4">Connect With Us</h3>
                        <p>
                            <a href="{{$setting->facebook}}" target="_blank"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
                            <a href="#"><span class="icon-twitter p-2"></span></a>
                            <a href="#"><span class="icon-instagram p-2"></span></a>
                            <a href="#"><span class="icon-rss p-2"></span></a>
                            <a href="#"><span class="icon-envelope p-2"></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>

                    <p class="mb-0">Developed By Mahedi Hasan <a href="">Laravel practice project series</a></p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="{{'/front/'}}/js/jquery-3.3.1.min.js"></script>
<script src="{{'/front/'}}/js/jquery-migrate-3.0.1.min.js"></script>
<script src="{{'/front/'}}/js/jquery-ui.js"></script>
<script src="{{'/front/'}}/js/popper.min.js"></script>
<script src="{{'/front/'}}/js/bootstrap.min.js"></script>
<script src="{{'/front/'}}/js/owl.carousel.min.js"></script>
<script src="{{'/front/'}}/js/jquery.stellar.min.js"></script>
<script src="{{'/front/'}}/js/jquery.countdown.min.js"></script>
<script src="{{'/front/'}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{'/front/'}}/js/bootstrap-datepicker.min.js"></script>
<script src="{{'/front/'}}/js/aos.js"></script>

<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="{{'/front/'}}/gtag/js.js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>
</html>

