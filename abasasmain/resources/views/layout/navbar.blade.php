<!--Navbar -->


<nav class="nav  lighten-4 py-1  primarybg " id="navtop">


    <ul class="nav mr-auto">
        <li class="nav-item">
            <img src=" {{asset('img/logo2.png')}} " alt="SEC logo" width="30px">
        </li>
        <li class="nav-item"><h4>Sylhet Engineering College</h4>
        </li>

    </ul>


    <ul class="nav ml-auto" id="contactnav">


{{--        <li class="nav-item">
            <a class="nav-link waves-effect waves-light">
                <i class="fa fa-phone"></i> 01732914039 (9AM - 5PM)
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link waves-effect waves-light">
                <i class="fa  fa-envelope ">info@sec.ac.bd</i>
            </a>
        </li>--}}


    </ul>


</nav>


<!--Navbar-->
<nav class="navbar   navbar-expand-lg   reversebg  sticky-top "  id ="mainNav" >

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">
        <img src=" {{asset('img/logo2.png')}} " alt="SEC logo" width="30px" id="logosmallimageid">

    </a>

    <a class="" href="#">
        <img src=" {{asset('img/logo2.png')}} " alt="SEC logo" class="logoimagebig" id="logoimageid">
    </a>


    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->

        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Admission</a>
            </li>



            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false"   class="nav-link dropdown-toggle"  style=" color: #000 ">Academic</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">


                    <div class="col-12 megamenu" >

                        <div class="container">
                            <div class="row">


                                <div class="col  col-6 pb-3 ">
                                    <h1 class="text-center text-light primarybg p-1 ">Faculity</h1>
                                    <ul>
                                        <li><a href="#" style=" padding: 0px; margin: 0px; "> Faculity of CSE </a></li>
                                        <li><a href="#" style=" padding: 0px; margin: 0px; ">Faculity of EEE </a></li>
                                        <li><a href="#" style=" padding: 0px; margin: 0px; ">Faculity of CE </a></li>
                                        <li><a href="#" style=" padding: 0px; margin: 0px; ">Faculity of Non-Tech</a>
                                        </li>
                                    </ul>
                                </div>


                                <div class="col  col-6 pb-3 ">
                                    <h1 class="text-center text-light primarybg   p-1 ">Offices</h1>
                                    <ul>
                                        <li><a href="#" style=" padding: 0px; margin: 0px; "> Principle's Office </a>
                                        </li>
                                        <li><a href="#" style=" padding: 0px; margin: 0px; "> Register's Office </a>
                                        </li>
                                        <li><a href="#" style=" padding: 0px; margin: 0px; "> Examinations
                                                Controller </a></li>
                                    </ul>
                                </div>


                                <div class="col  col-6 pb-3 ">
                                    <h1 class="text-center text-light primarybg   p-1 ">Profile</h1>
                                    <ul>
                                        <li><a href="#" style=" padding: 0px; margin: 0px; "> Teachers </a></li>
                                        <li><a href="#" style=" padding: 0px; margin: 0px; "> staff </a></li>
                                    </ul>
                                </div>


                                <div class="col  col-6 pb-3 ">
                                    <h1 class="text-center text-light primarybg   p-1 ">Others </h1>
                                    <ul>
                                        <li><a href="#" style=" padding: 0px; margin: 0px; "> Academic celendar </a>
                                        </li>
                                        <li><a href="#" style=" padding: 0px; margin: 0px; "> Exam Schedule </a></li>
                                    </ul>
                                </div>


                            </div>

                        </div>

                    </div>


                </div>
            </li>


            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false"  style=" color: #000 ">Organization</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">


                        <div class="col-md-12 megamenu " >

                            <div class="container">
                                <div class="row">


                                    <div class="col  col-6 pb-3 ">
                                        <h1 class="text-center text-light primarybg   p-1 ">Academic</h1>
                                        <ul>
                                            <li><a href="#" style=" padding: 0px; margin: 0px; "> CSE Society </a></li>
                                            <li><a href="#" style=" padding: 0px; margin: 0px; "> EEE Society </a></li>
                                            <li><a href="#" style=" padding: 0px; margin: 0px; "> CE Society </a></li>
                                            <li><a href="#" style=" padding: 0px; margin: 0px; "> Programmer's Club </a></li>
                                        </ul>
                                    </div>






                                    <div class="col  col-6 pb-3 ">
                                        <h1 class="text-center text-light primarybg  p-1  ">Cultural</h1>
                                        <ul>
                                            <li><a href="#" style=" padding: 0px; margin: 0px; "> Soroborrno </a></li>
                                            <li><a href="#" style=" padding: 0px; margin: 0px; "> Pantaton </a></li>
                                        </ul>
                                    </div>








                                    <div class="col  col-6 pb-3 ">
                                        <h1 class="text-center text-light primarybg   p-1 ">Other</h1>
                                        <ul>
                                            <li><a href="#" style=" padding: 0px; margin: 0px; "> Blood Bank </a></li>

                                            <li><a href="#" style=" padding: 0px; margin: 0px; "> Sports Club </a></li>
                                        </ul>
                                    </div>




                                </div>

                            </div>

                        </div>
                </div>
            </li>


        </ul>

        {{--/////////////////////////////////////////////////////////////////////////////////--}}

        <ul class="navbar-nav ml-auto">




            <li class="nav-item">
                <a class="nav-link" href="#">Notice Board</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Library</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Student Login</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Web Mail</a>
            </li>


        </ul>


</nav>



<!--/.Navbar-->









