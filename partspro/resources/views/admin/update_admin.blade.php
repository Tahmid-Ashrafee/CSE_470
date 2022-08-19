<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   <base href="/public">
   @include('admin.css')

   <style type="text/css">

      .div_center
      {
        text-align: center;
        padding-top: 40px;

      }  
      .font_size
      {
        font-size: 40px;
        padding-bottom: 40px;
      } 

      .text_color
      {
        color: black;
        padding-bottom: 20px;


      }
      label{

        display: inline-block;
        width: 200px;

      }
      .div_design{
        padding-top: 50px;
      }

    </style>
   



  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
       @include('admin.header')
      <div class="main-panel">

          <div class="content-wrapper">

            @if(session()->has('message'))

            <div class="alert alert-success">

              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">#</button>

              {{session()->get('message')}}

             </div>

            @endif
              
            <div class="div_center">


              <h1 class="font_size">Update User To Admin</h1>

              <form action="{{url('/update_admin',$user->id)}}" method="post" enctype="multipart/form-data">
              @csrf

              <div class="div_design">
              <label>Name</label>
              <input class="text_color" type="text" name="Name" required="" value="{{$user->name}}" >
              </div>

             

              <div class="div_design">
              <label>Email</label>
              <input class="text_color" type="text" name="Email" placeholder="Write a description" required="" value="{{$user->email}}">
              </div>

              <div class="div_design">
              <label>Phone</label>
              <input class="text_color" type="number" name="Phone" required="" value="{{$user->phone}}">

              </div>

              <div class="div_design">
              <label>User type</label>
              <input class="text_color" type="number" name="Usertype" required="" value="{{$user->usertype}}">

              </div>

              <div class="div_design">
              <label>Address</label>
              <input class="text_color" type="text" name="Address" value="{{$user->address}}">
            

             
              <div class="div_design">
                
              
              <input type="submit" value="Update User to admin"class="btn btn-success">
              </div>
              </div>

              </form>

              

            </div>

          </div>
        </div>
        
    @include('admin.script')
    
  </body>
</html>