
@extends('layouts.navbar')
@section('navbar')

  <div class="view hm-white-light jarallax " >
          
         <img src="{{asset('image/admin.jpg') }}" width="100%" height="400px"> 

           <div class="full-bg-img">

                <div class="container flex-center">

                    <div class="row">

                        <div class="col-md-12 wow fadeIn">

                            <div class="text-center">

                                <h1 class="display-2 mb-2 wow fadeInDown btn btn-danger btn-lg wow fadeInDown" data-wow-delay="0.3s" style="font-size: 5em;"><em>BienVenue    {{ Auth::user()->name }} </h1>

                            

                            </div>

                        </div>

                    </div>

                </div>
 
           </div>
   </div>

<!-- aside -->

   <div class="container-fluid">

            <div class="row">

                <div class="col-xl-6 col-lg-2 col-md-6 col-sm-12 col-xs-12"></div>

                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-12 col-xs-12" >

                    <div class="thumbnail image1">

                        <img class="img-fluid" src="{{ asset('image/car-min.png') }}" alt="Ver post" >
                           
                            <h4 class="">Véhicules</h4>

                            <p class="">Por: <a class="text-danger"><b>Miguel92</b></a></p>

                              

                            <a href="/véhicules" class="btn btn-primary">Commencer Maintenant</a>

                        </div>

                    </div>
                

              <div class="col-xl-6 col-lg-4 col-md-6 col-sm-12 col-xs-12" style="height: 600px">

                    <div class="thumbnail ">
                        <div class="image2">

                        <img class="img-fluid " src="{{asset('image/conducteur-min.jpg')}}"  >


                            <h4 class="">Conducteurs</h4>

                            <p class="">Por: <a class="text-danger"><b>Miguel92</b></a></p>

                               
                            <a href="/Conducteur" class="btn btn-primary">Commencer MaintenantVer post</a>

                       
                    </div>
                    </div>
                </div>


                <div class="col-xl-6 col-lg-2 col-md-6 col-sm-12 col-xs-12"></div>

            </div>
        </div>
   
  



<hr>




@endsection 
