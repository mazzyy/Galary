@extends('layouts.app')

@section('content')
<section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Albums</h1>
      
      <p>
        <a href="/Gallary/create" class="btn btn-primary my-2">create Album</a>
        
      </p>
    </div>
  </section>
 

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
          @if (count($album))
              @foreach ($album as $item)
                  
              
            
        <div class="col-md-4 h-25">
         <div class="card mb-4 shadow-sm " >
          <h4 class="text-center ">{{$item->name}}</h4>
          {{-- <img class="card-img-top" src="\storage\app\public\Album_cover\{{$item->image}}" alt="Card image cap"> --}}
            
         <a href="Galary/{{$item->id}}/photos"> <img  style="height: 300px;" src="{{ asset('storage/Album_cover')}}/{{$item->image}}" class="card-img-top" alt=""></a>
         
          <div class="card-body">
          <p class="card-text">{{$item->bio}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    
                  {{-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button> --}}
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

            @endforeach
        @endif
        
       
      </div>
    </div>
  </div>


  
@endsection
