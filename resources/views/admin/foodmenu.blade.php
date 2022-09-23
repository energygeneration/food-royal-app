<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss');
  </head>
  <body>

    <div class="container-scroller">

    @include('admin.navbar');


    <div>

        <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label class="form-label">title</label>
                <input class="form-control" type="text" name="title" placeholder="write a title" required>
              </div>

              <div class="mb-3">
                <label class="form-label">price</label>
                <input class="form-control" type="num" name="price" placeholder="price" required>
              </div>


            <div class="mb-3">
                <label class="form-label">Image</label>
                <input class="form-control" type="file" name="image">
              </div>


              <div class="mb-3">
                <label class="form-label">Description</label>
                <input class="form-control" type="text" name="description" placeholder="description"  required>
              </div>


              <div class="mb-3">

                <input class="form-control" type="submit" value="save">
              </div>


        </form>

        <div style="position: relative; top:70px; right: -150;">

            <table bgcolor:"black">

                <tr>
                    <th style="padding: 30px">Food Name</th>
                    <th style="padding: 30px">Price</th>
                    <th style="padding: 30px">Description</th>
                    <th style="padding: 30px">Images</th>
                    <th style="padding: 30px">Action</th>
                    <th style="padding: 30px">Action2</th>
                </tr>

                @foreach ($data as $data)
                <tr align="center">
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->price }}</td>
                    <td>{{ $data->description }}</td>
                    <td><img height="200" width="200" src="/foodimage/{{ $data->image }}"></td>
                    <td><a href="{{ url('/deletemenu', $data->id) }}">Delete</a></td>
                    <td><a href="{{ url('/updateview', $data->id) }}">Update</a></td>
                </tr>
                @endforeach

            </table>
        </div>

    </div>
    </div>
    @include('admin.adminscript');

  </body>
</html>


