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

        <div>

            <form action="{{ url('/update', $data->id) }}" method="post" enctype="multipart/form-data">

                @csrf

                <div class="mb-3">
                    <label class="form-label">title</label>
                    <input class="form-control" type="text" name="title" value="{{ $data->title }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">price</label>
                    <input class="form-control" type="num" name="price" value="{{ $data->price }}" required>
                </div>


                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input class="form-control" type="text" name="description" value="{{ $data->description }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">old Image</label>
                    <img height="200" width="200" src=" /foodimage/{{ $data->image }}" >
                </div>

                <div class="mb-3">
                    <label class="form-label">New Image</label>
                    <input class="form-control" type="file" name="image">
                </div>


                <div class="mb-3">

                    <input class="form-control" type="submit" value="save">
                </div>


            </form>

        </div>



    </div>
    @include('admin.adminscript');

  </body>
</html>


