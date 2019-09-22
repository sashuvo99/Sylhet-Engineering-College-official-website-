@extends("layout.main")
@section('content')


<div class="p4" style="height : 70px">

</div>

<div class="container">




<div class="  noticesection ">
          <h4 class="text-center">NOTICE BOARD</h4>
          

            <ul class="border border-success p-5">


            @foreach( $notices as $notice)

          <li>

                    <div class="row">
                        <div class="date col-md-2 text-light">
                            <div class="text-center">
                                <div class="noticedate">17</div>
                                <div class="noticemonth">Sep 19</div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <p>
                                {{ $notice->title}}

                                <a class="d-flex flex-row-reverse  text-center text-success"
                                   href="{{$notice->link}}   ">Read More</a> </p>
                        </div>
                    </div>

                    <hr>
                </li>

@endforeach


            </ul>





        </div>




    </div>




</div>




@endsection