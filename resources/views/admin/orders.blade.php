<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
   @include("admin.navbar")
<div class="container">

<h1>Customer Orders</h1>

<form action="{{url('/search')}}" method="get">
@csrf

<input type="text" name="search" style="color: burlywood;">

<input type="submit" value="Search" class="btn btn-success">
</form>

<table>
<tr align="center">
<td style="padding: 30px;">Name</td>
<td style="padding: 30px;">Phone Number</td>
<td style="padding: 30px;">Address</td>
<td style="padding: 30px;">Food Name</td>
<td style="padding: 30px;">Quantity</td>
<td style="padding: 30px;">Price (RM)</td>
<td style="padding: 30px;">Total Price (RM)</td>
</tr>
@foreach($data as $data)
<tr align="center" style="background-color:black;">
<td>{{$data->name}}</td>
<td>{{$data->phone}}</td>
<td>{{$data->address}}</td>
<td>{{$data->foodname}}</td>
<td>{{$data->quantity}}</td>
<td>{{$data->price}}</td>
<td>{{$data->price * $data->quantity}}</td>
</tr>
@endforeach
</table>

</div>
  </div>
   @include("admin.adminscript")
    
  </body>
</html>