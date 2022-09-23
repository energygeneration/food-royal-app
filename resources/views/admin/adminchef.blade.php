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

        <form action="{{ url('/uploadchef') }}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input class="form-control" type="text" name="name" placeholder="Enter Name" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Specificaly</label>
                <input class="form-control" type="text" name="speciality" placeholder=" Enter speciality" required>
            </div>

            <div class="mb-3">

                <input class="form-control" type="file" name="image" required>
            </div>

            <div class="mb-3">

                <input class="form-control" type="submit" value="save">
            </div>


        </form>


        <div>
            <table bgcolor="black">

                <tr>
                    <th style="padding: 30px">Chef Name</th>
                    <th style="padding: 30px">Speciality</th>
                    <th style="padding: 30px">Image</th>
                    <th style="padding: 30px">Action</th>
                    <th style="padding: 30px">Action2</th>
                </tr>
                @foreach ($data as $data)
                <tr align="center">
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->speciality }}</td>
                    <td><img height="100" width="100" src="/chefimage/{{ $data->image }}"></td>
                    <td><a href="{{ url('/updatechef', $data->id) }}">Update</a></td>
                    <td><a href="{{ url('/deletechef', $data->id) }}">Delete</a></td>
                </tr>
                @endforeach

            </table>
        </div>

    </div>
    @include('admin.adminscript');

  </body>
</html>


