@extends("layout.main")
@section('content')




<div class="p4" style="height : 70px">

</div>


<!--Events starts here-->

<div class="container">


    <div class="col-12 text-center">
        <h3>EVENTS</h3>
        <hr class=" black lighten-5  accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
    </div>



    <div class="row">


        @foreach( $events as $event)

        <div class="col-md-4  eventsideedit2 p-3">
            <!-- Card -->
            <div class="card">

                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="{{asset($event->image)}}" alt="Card image cap" height="252px">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body unique-color-dark white-text rounded-bottom">
                    <!-- Title -->
                    <!-- Title -->
                    <h4 class="card-title text-uppercase">
                        {{$event->title}}
                    </h4>
                    <hr class="hr-light">
                    <!-- Text -->
                    <p class="card-text white-text mb-4 text-justify">
                        <?php 
                        $result = mb_substr($event->description, 0, 120);

                        ?>
                        {{$result}}{{" "}}{{".........."}}
                    </p>
                    <!-- Button -->
                    <a href="{{    route('event',$event->id) }}" class="btn btn-primary">Explore</a>

                </div>

            </div>
            <!-- Card -->

        </div>

        @endforeach


        {{ $events->links() }}







    </div>

</div>




<!--Events ends    here-->




@endsection
