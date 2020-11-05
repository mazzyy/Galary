@extends('layouts.app')

@section('content')
<section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Photos</h1>
      
      <p>
        <a href="/Gallary/{{$id}}/createphotos" class="btn btn-primary my-2">Add photos</a>
      <a href="/">back</a>
      </p>
    </div>
  </section>
 

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
          @if (count($photos))
              @foreach ($photos as $item)
                  
              
            
        <div class="col-md-4 h-25">
         <div class="card mb-4 shadow-sm " >
          {{-- <img class="card-img-top" src="\storage\app\public\Album_cover\{{$item->image}}" alt="Card image cap"> --}}
            
         <a href="{{ asset('storage/Album_cover')}}/{{$item->image}}"> <img  style="height: 300px;" src="{{ asset('storage/Album_cover')}}/{{$item->image}}" class="card-img-top" alt=""></a>
         
          
          </div>
        </div>

            @endforeach
        @endif
        
       
      </div>
    </div>
  </div>



@endsection
