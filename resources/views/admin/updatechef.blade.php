<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">


    @include('admin.admincss');
  </head>
  <body>
    <div class="container-scroller">
        @include('admin.navbar');


        <form action="{{ url('/updatefoodchef', $data->id) }}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label class="form-label">Chef Name</label>
                <input class="form-control" type="text" name="name"  value="{{ $data->name }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Speciality</label>
                <input class="form-control" type="text" name="speciality"  value="{{ $data->speciality }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Old Image</label>
               <img height="300" width="300" src="/chefimage/{{ $data->image }}">
            </div>

            <div class="mb-3">
                <label class="form-label">New Image</label>
               <input type="file" name="image" >
            </div>



            <div class="mb-3">

                <input class="form-control" type="submit" value="update Chef">
            </div>


        </form>
    </div>
    @include('admin.adminscript');

  </body>
</html>


