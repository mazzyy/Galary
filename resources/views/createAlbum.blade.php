
@extends('layouts.app')

@section('content')
  <div class="container">
      <div class='row'>
          <div class="col-md-3"></div>
          <div class="col-md-6">
           {{-- <form action="/Gallary/store" method="get" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleFormControlSelect">name</label>
                  <input type="name" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">details</label>
                    <textarea class="form-control" name="bio" rows="3" spellcheck="false"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Example file input</label>
                    <input type="file" name="file" required id="fileToUpload"  class=" img-thumbnail shadow-sm" > 
                </div>
                


                <button type="submit" class="btn btn-primary">Submit</button>
              </form> --}}
              <form class="pb-5 pt-1 " action="/Gallary/upload" method="post" enctype="multipart/form-data">
                
                
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleFormControlSelect">name</label>
                    <input type="name" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1">details</label>
                      <textarea class="form-control" name="bio" rows="3" spellcheck="false"></textarea>
                  </div>
                {{-- Select image to upload: --}}
                <input type="file" name="file" required id="fileToUpload"  class=" img-thumbnail shadow-sm" > 
             
                <button type="submit"  class="btn btn-primary" value="Upload Image" name="submit">update</button>
            </form>
          </div>
      </div>
  </div>
@endsection