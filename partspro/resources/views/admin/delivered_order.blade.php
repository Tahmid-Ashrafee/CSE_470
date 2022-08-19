<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
   <style type="text/css">
   	.center
   	{
   		margin: auto;
   		width: 100%;
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


            <h1 class="font_size">Delivered Order List</h1>

            @foreach($order as $order)

            @if($order->delivery_status=='Delivered')

          	<table class="center">
          		<tr class="th_color">
          			<th class="th_d">Name</th>
          			<th class="th_d">Email</th>
          			<th class="th_d">Phone</th>
          			<th class="th_d">Address</th>
          			<th class="th_d">Product Title</th>
          			<th class="th_d">Quantity</th>
          			<th class="th_d">Price</th>
          			<th class="th_d">Image</th>
          			
          			<th class="th_d">Delivery Status</th>
          			
                	
          			

          		</tr>

          		
          		<tr>
          			<td>{{$order->name}}</td>
          			<td>{{$order->email}}</td>
          			
          			<td>{{$order->phone}}</td>
          			<td>{{$order->address}}</td>
          			<td>{{$order->product_title}}</td>
          			<td>{{$order->quantity}}</td>
          			<td>{{$order->price}}</td>
          			
          			

          			<td>
          				<img class="image_size" src="/product/{{$order->image}}">
          			</td>
          			<td>{{$order->delivery_status}}</td>
                
          			
          		</tr>

          		
          		


          	</table>
            

          	@endif
          	@endforeach




          </div>
      </div>
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>