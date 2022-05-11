<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

  <base href="../public">

  @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
   @include("admin.navbar")

   <div style="position:relative; top: 0px; right:-150px">

<form action="{{url('/updatefoodchef',$data->id)}}" method="post" enctype="multipart/form-data">

@csrf

<div>
<label>Name</label>
<input style="color:blue;" type="text" name="name" value="{{$data->name}}" required>
</div>


<div>
<label>Speciality</label>
<input style="color:blue;" type="text" name="speciality" value="{{$data->speciality}}" required>
</div>

<div>
<label>Old Image</label>
<img height="200" width="200" src='chefimage/{{$data->image}}'>
</div>

<div>
<label>New Image</label>
<input type="file" name="image">
</div>

<div>
<input style="color:aquamarine" type="submit" value="Update Chef">
</div>

</form>
</div>

  </div>
   @include("admin.adminscript")
    
  </body>
</html>