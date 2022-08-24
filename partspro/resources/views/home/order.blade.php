<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Online Car-Parts Station</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
		width: 180px;
		height: 160px;
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

    @include('sweetalert::alert')

      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         
       

          	<h1 class="font_size">Order List</h1>

          	<table class="center">
          		<tr class="th_color">
          		
          			<th class="th_d">Product Title</th>
          			<th class="th_d">Quantity</th>
          			<th class="th_d">Price</th>
          			<th class="th_d">Payment Status</th>
          			<th class="th_d">Delivery Status</th>
          			<th class="th_d">Image</th>
          			<th class="th_d">Action</th>
                <th class="th_d">Action</th>
          			

          		</tr>

          		@foreach($order as $order)
          		<tr>
          			
          			<td>{{$order->product_title}}</td>
          			<td>{{$order->quantity}}</td>
          			<td>{{$order->price}}</td>
          			<td>{{$order->payment_status}}</td>
          			<td>{{$order->delivery_status}}</td>

          			<td>
          				<img class="image_size" src="/product/{{$order->image}}">
          			</td>

          			
          			
          			<td>

          				@if($order->delivery_status=='processing')
          				<a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('cancel_order',$order->id)}}">Cancel Order</a>

          				@else
          				<p style="color: blue">No Action</p>

          				@endif

                <td>
                  <a class="btn btn-danger" onclick="confirmation(event)"  href="">Contact Support </a>
                </td>

          			</td>
          			
          		</tr>

          	@endforeach
          		


          	</table>





      </div>

      <script>
      function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect); 
        swal({
            title: "Are you facing any problem with your order?",
            text: "Please call on the given number to directly seek solution!  +8801712345678 ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {


                 
                window.location.href = urlToRedirect;
               
            }  


        });

        
    }
</script>


      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
</html>