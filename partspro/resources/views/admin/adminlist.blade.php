<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      @include('admin.css')
    <!-- End layout styles -->
	<style type="text/css">
   	.center
   	{
   		margin: auto;
   		width: 80%;
   		border: 2px solid white;
   		text-align: center;
        margin-top: 40px;
   	}
   	.font_size
	{
	    text-align: center;
	    font-size: 40px;
	    padding-bottom: 40px;
	} 
	.image_size
	{
		width: 150px;
		height: 150px;
	}
	.th_color
	{
		background: red;  
	}
	.th_d
	{
		padding: 30px;
	}
	.th_b
	{
		padding: 20px;
	}
	</style>

 

  </head>
  <body>
    <div class="container-scroller">
	      <!-- partial:partials/_sidebar.html -->
	      @include('admin.sidebar')
	      <!-- partial -->
	      <!-- navbar -->
	      @include('admin.header')      
	        <!-- partial -->
	    <!-- container-scroller -->
	    <div class="main-panel">

	          <div class="content-wrapper">
	          	@if(session()->has('message'))

	            <div class="alert alert-success">

	              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

	              {{session()->get('message')}}

	             </div>

	            @endif

	            <h1 class="font_size">User List</h1>

	          	<table class="center">
	          		<tr class="th_color">
	          			<th class="th_d">Id</th>
	          			<th class="th_d">Name</th>
	          			<th class="th_d">Email</th>
	          			
	          			<th class="th_d">Phone</th>
	          			<th class="th_d">Address</th>
	          			<th class="th_d">Action</th>
	          			<th class="th_d">Action</th>
	          			
	          		</tr>

	          		@foreach($user as $user)
	          		@if($user->usertype=='1')
	     			<tr>
		     			<td class="th_b">{{$user->id}} </td>
		     			<td class="th_b">{{$user->name}}</td>
	          			<td class="th_b">{{$user->email}}</td>
	          			
	          			<td class="th_b">{{$user->phone}}</td>
	          			<td class="th_b">{{$user->address}}</td>

	          			<td class="th_b">
          					<a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('delete_user',$user->id)}}">Delete</a>
      					</td>

      					<td class="th_b">
          				<a class="btn btn-primary" href="{{url('update_user',$user->id)}}">Edit</a>
          				</td>
          				
          			

	     			</tr>
	     			@endif
	     			@endforeach

	     			
          			
	          	</table>


	          </div>
	      </div>
	      <!-- dlt pore -->
	  </div> 
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>