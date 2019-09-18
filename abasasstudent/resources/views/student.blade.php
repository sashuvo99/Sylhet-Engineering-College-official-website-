<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ruhul</title>

  <!-- Bootstrap core CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="{{  asset("vendor/fontawesome-free/css/all.min.css") }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">

</head >

<body  background="img/bg2.jpg" id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Ruhul</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/Ruhul amin rul 2.png" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
		
		
          <a class="nav-link js-scroll-trigger" href="#about">About</a>
        </li>

		  <li class="nav-item">
			  <a class="nav-link js-scroll-trigger" href="#result">Result</a>
		  </li>

		  <li class="nav-item">
		  <a class="nav-link js-scroll-trigger" href="#result"> Library</a>
	  </li>


		  <li class="nav-item">
			<a class="nav-link js-scroll-trigger "  data-toggle="modal" data-target=".bd-example-modal-lg" href="#">Payment History</a>
		  </li>
        
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0">Ruhul
          <span class="text-primary">Amin</span>
        </h1>
        <div class="subheading mb-5">3542 Berry Street · Cheyenne Wells, CO 80810 · (317) 585-8468 ·
          <a href="mailto:name@email.com">name@email.com</a>
        </div>

<div class="">
    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,
    or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
    you need to be sure there isn't anything embarrassing hidden in the
    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,
    or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
    you need to be sure there isn't anything embarrassing hidden in the
</div>
      </div>
	  
	  
    </section>
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="result">
      <div class="w-100">
	  
	   
	   
	   

@for($i =1 ; $i<=8 ; $i++)


			<hr><div class="col-md-10  ">

					<div class=" text-center  bg-dark">
				   <h3 class="text-light"> SEMESTER {{$i}} </h3>
					</div>
					
					<table class="table table-striped table-responsive-md ">
				
				<thead class="thead-dark" >
				  <tr>
					<th>Course No</th>
					<th>Cradit</th>
					<th>Lg</th>
					<th>Gp</th>
					<th>Rrecheck</th>
				  </tr>
				</thead>
				
				<tbody>
                    @foreach ($results as $result)
				<tr>
					<td>{{$result->CourseName}} </td>
					<td>{{$result->Cradit}} </td>
					<td> {{$result->LetterGrade}}</td>
					<td> {{$result->Cgpa}}</td>
					<td> <button class="btn btn-success">Apply </button></td>
				</tr>

		@endforeach

								
		
				<tr>
				   
				  <td colspan="2" class="font-weight-bold"> Semester 1 CGPA: 3.52</td>
				
					<td colspan="2" class="font-weight-bold">  Overall CGPA: 3.12</td>
				</tr>
				  
					
				</tbody>
				
				</table>
				
				</div>
				
			<hr>
          @endfor
				
				
				







      </div>
    </section>

 
	<!-- Large modal -->
<div class="modal fade bd-example-modal-lg   " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content   p-3 border " >


		<h3 class=" text-center bg-dark text-light"> PAYMENT HISTORY </h3>

		<table class="table table-striped table-responsive-md ">
		
				<thead class="thead-dark" >
				  <tr>
					<th>Payment Id</th>
					<th colspan="3">Cause</th>
					<th>Amount</th>
					<th>Date</th>
					<th>Status</th>
				  </tr>
				</thead>
				
				<tbody>
						<tr>
							<td>10010 </td>
							<td colspan="3">3rd semister admission </td>
							<td > 4700</td>
							<td > 12-5-2019</td>
							<td> <button class="btn btn-success"> success</button></td>
						</tr>

						<tr>
								<td>10011 </td>
								<td colspan="3">3rd semister Exam </td>
								<td > 4700</td>
								<td > 12-5-2019</td>
								<td> <button class="btn btn-success"> success</button></td>
							</tr>

							<tr>
									<td>10012 </td>
									<td colspan="3">3rd semister fee </td>
									<td > 4700</td>
									<td > 12-5-2019</td>
									<td> <button class="btn btn-success"> success</button></td>
							</tr>
							<tr>
									<td>10011 </td>
									<td colspan="3">3rd semister Exam </td>
									<td > 4700</td>
									<td > 12-5-2019</td>
									<td> <button class="btn btn-success"> success</button></td>
								</tr>
	
								<tr>
										<td>10012 </td>
										<td colspan="3">3rd semister fee </td>
										<td > 4700</td>
										<td > 12-5-2019</td>
										<td> <button class="btn btn-success"> success</button></td>
								</tr>
			
					
					
				</tbody>
				
				</table>
    </div>
  </div>
</div>

  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <!-- Plugin JavaScript -->
  <script src={{asset("vendor/jquery-easing/jquery.easing.min.js")}}></script>

  <!-- Custom scripts for this template -->
  <script src={{asset("js/resume.min.js")}}></script>

</body>

</html>
