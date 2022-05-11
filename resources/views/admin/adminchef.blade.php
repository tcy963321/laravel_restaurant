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

<div style="position:relative; top:10px; right:-50px">

<form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">

@csrf

<div>
<label>Name</label>
<input style="color:blue;" type="text" name="name" placeholder="Write a name" required>
</div>

<div>
<label>Speciality</label>
<input style="color:blue;" type="text" name="speciality" placeholder="Write a speciality" required>
</div>

<div>
<label>Image</label>
<input type="file" name="image" required>
</div>

<div>
<input style="color:bisque" type="submit" value="Save">
</div>
</div>
</form>

<div style="position:relative; top:0px; right:-51px">
<table bgcolor="black">
<tr>
<th style="padding: 30px">Chef Name</th>
<th style="padding: 30px">Speciality</th>
<th style="padding: 30px">Image</th>
<th style="padding: 30px">Action</th>
</tr>

@foreach($data as $data)
<tr align="center">
<td>{{$data->name}}</td>
<td>{{$data->speciality}}</td>
<td><img height="200" width="200" src="chefimage/{{$data->image}}"></td>
<td><a href="{{url('/deletechef',$data->id)}}">Delete</a>
<a href="{{url('/updatechef',$data->id)}}">Update</a></td>
</tr>
@endforeach

</table>

</div>
</div>

   @include("admin.adminscript")
    
  </body>
</html>