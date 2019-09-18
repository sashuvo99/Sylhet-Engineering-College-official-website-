@extends("layout.main")
@section('content')



<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade " data-ride="carousel" style="  height :450px; ">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view">
                <img class="d-block  sliderimageheight  " src="{{asset('img/s1.jpg')}}" alt="First slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Light mask</h3>
                <p>First text</p>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block  sliderimageheight " src="{{asset('img/s2.jpg')}}" alt="Second slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Strong mask</h3>
                <p>Secondary text</p>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block  sliderimageheight  " src="{{asset('img/s3.jpg')}}" alt="Third slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Slight mask</h3>
                <p>Third text</p>
            </div>
        </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
</div>
</div>
</div>









<div class="conteiner">
    <div class="row principalMsg">
        <div class="col-9">
            <h2 class="principalMsgTitle text-right text-uppercase">Welcome Message from <strong>Principal</strong></h2>
            <div class="principalMsgBody">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates asperiores omnis dicta eos quos
                obcaecati repudiandae nihil quia. Explicabo earum unde ad delectus amet, accusantium hic voluptatem
                numquam voluptas porro perferendis blanditiis aliquam harum odit itaque voluptatibus accusamus in iusto
                esse minus corporis aut iste libero. Numquam voluptates iste quaerat possimus maiores nihil qui! Soluta
                eius nostrum esse temporibus asperiores, deserunt reprehenderit ullam. Adipisci voluptatibus
                repellendus, est perspiciatis veniam delectus enim esse! Animi, quidem sit.
            </div>

            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-danger btn-rounded ">Read More</button>
            </div>
        </div>

        <div class="col-2 principalImgSection">
            <img class="principalImg" src=" {{asset('img/principle.jpg')}}" alt="Generic placeholder image">
        </div>
    </div>
</div>




<div class="departmentsection">

    <div class="text-center departmenttitle">
        <h1 class="text-center text-light  "
            style=" padding: 40px; padding-bottom:0px ;  margin-bottom: 0px;   font-size: 22px;"> Departments</h1>
        <h1 class="text-center text-light" style="margin-bottom: 10px; padding-bottom:40px;   font-size: 22px;"> ------
        </h1>

    </div>

    <div class="container ">
        <div class="row " id='departmentid'>


            <div class="wrapper col-md-4  justify-content-center   ">
                <div class="card">
                    <h1>
                        <span class="enclosed">C</span>
                        <span class="enclosed">S</span>
                        <span class="enclosed">E</span>
                    </h1>
                </div>
            </div>

            <div class="wrapper col-md-4  justify-content-center   ">
                <div class="card">
                    <h1>
                        <span class="enclosed">E</span>
                        <span class="enclosed">E</span>
                        <span class="enclosed">E</span>
                    </h1>
                </div>
            </div>

            <div class="wrapper col-md-4  justify-content-center  ">
                <div class="card">
                    <h1>
                        <span class="enclosed">C</span>
                        <span class="enclosed">E</span>
                    </h1>
                </div>
            </div>



        </div>
    </div>

</div>






<div class="conteiner">
    <div class="row noticecampusarea">
        <div class="col-md-6 campuslife ">


            <!-- Card Dark -->
            <div class="card">


                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="{{asset('img/campuslife.JPG')}}" alt="Card image cap">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body elegant-color white-text rounded-bottom">

                    <!-- Title -->
                    <h4 class="card-title text-uppercase">Life at sec</h4>
                    <hr class="hr-light">
                    <!-- Text -->
                    <p class="card-text white-text mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio, aliquam? Quos veniam, voluptas, perspiciatis numquam totam quia inventore quisquam
                        modi a quibusdam cupiditate temporibus non eaque aliquam optio alias nam!</p>
                    <!-- Link -->
                    <a href="#!" class="white-text d-flex justify-content-end">
                        <h5>Read more <i class="fas fa-angle-double-right"></i></h5>
                    </a>

                </div>

            </div>
            <!-- Card Dark -->




        </div>

        <div class="col-md-6  noticesection ">
          <h4 class="text-center">NOTICE BOARD</h4>
          

            <ul class="border border-success p-5">



                

                <li>

                    <div class="row">
                        <div class="date col-md-2 text-light">
                            <div>
                                17 <span>Sep 19</span>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <p>
                                ৪র্থ বর্ষ ২য়, ৩য় বর্ষ ২য়, ২য় বর্ষ ১ম এবং ১ম বর্ষ ১ম সেমিস্টার ফাইনাল পরীক্ষার ফরম
                                ফিলাপের নোটিশ

                                <a class="d-flex flex-row-reverse  text-center"
                                    href="https://www.sust.edu/about/news-and-events-detail/288">Read More</a> </p>
                        </div>
                    </div>

                    <hr>
                </li>

                <li>

                    <div class="row">
                        <div class="date col-md-2 text-light">
                            <div>
                                17 <span>Sep 19</span>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <p>
                                ৪র্থ বর্ষ ২য়, ৩য় বর্ষ ২য়, ২য় বর্ষ ১ম এবং ১ম বর্ষ ১ম সেমিস্টার ফাইনাল পরীক্ষার ফরম
                                ফিলাপের নোটিশ

                                <a class="d-flex flex-row-reverse  text-center"
                                    href="https://www.sust.edu/about/news-and-events-detail/288">Read More</a> </p>
                        </div>
                    </div>

                    <hr>
                </li>

                <li>

                    <div class="row">
                        <div class="date col-md-2 text-light">
                            <div>
                                17 <span>Sep 19</span>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <p>
                                ৪র্থ বর্ষ ২য়, ৩য় বর্ষ ২য়, ২য় বর্ষ ১ম এবং ১ম বর্ষ ১ম সেমিস্টার ফাইনাল পরীক্ষার ফরম
                                ফিলাপের নোটিশ

                                <a class="d-flex flex-row-reverse  text-center"
                                    href="https://www.sust.edu/about/news-and-events-detail/288">Read More</a> </p>
                        </div>
                    </div>

                    <hr>
                </li>



            </ul>





        </div>

    </div>

</div>



@endsection
