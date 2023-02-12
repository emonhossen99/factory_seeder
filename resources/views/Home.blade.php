<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mt-5">This is Users Add Pages</h1>
        <form class="row g-3" method="POST" action="{{ url('/form') }}">
            @csrf
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" name="email" class="form-control @error('email')
              is-invalid @enderror" value="{{ old('email') }}" id="inputEmail4"

              >

              @error('email')
               <span class="text-danger">{{ $message }}</span>
              @enderror

            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Password</label>
              <input type="password" name="password" class="form-control @error('password')
              is-invalid @enderror" value="{{ old('password') }}" id="inputPassword4">

              @error('password')
              <span class="text-danger">{{ $message }}</span>
             @enderror

            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Name</label>
              <input type="text" class="form-control @error('name')
              is-invalid @enderror" value="{{ old('name') }}" name="name" id="inputAddress" placeholder="1234 Main St">

              @error('name')
              <span class="text-danger">{{ $message }}</span>
             @enderror

            </div>
            <div class="col-12">
              <label for="inputAddress2" class="form-label">Address</label>
              <input type="text" class="form-control @error('address')
              is-invalid @enderror" value="{{ old('address') }}" name="address" id="inputAddress2" placeholder="Apartment, studio, or floor">

              @error('address')
              <span class="text-danger">{{ $message }}</span>
             @enderror

            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">Phone</label>
              <input type="text" name="phone" class="form-control @error('phone')
              is-invalid @enderror" value="{{ old('phone') }}" id="inputCity">

              @error('phone')
              <span class="text-danger">{{ $message }}</span>
             @enderror

            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">State</label>
              <select id="inputState" name="state"  class="form-select @error('state')
              is-invalid @enderror" value="{{ old('state') }}">
                <option value="">Choose...</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Ragpur">Ragpur</option>
              </select>

              @error('state')
              <span class="text-danger">{{ $message }}</span>
             @enderror

            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" name="zip" class="form-control @error('zip')
              is-invalid @enderror" value="{{ old('zip') }}" id="inputZip">

              @error('zip')
              <span class="text-danger">{{ $message }}</span>
             @enderror

            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input"  name="condition" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
                <br>

                @error('condition')
                <span class="text-danger">{{ $message }}</span>
               @enderror

              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Added Now</button>
            </div>
          </form>

          <h1 class="text-center mt-5 mb-5">This is Our All Users</h1>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">State</th>
                <th scope="col">Zip</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->password }}</td>
                    <td>{{ $data->address }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->state }}</td>
                    <td>{{ $data->zip }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{url('form/'.$data->id.'/edit')}}"><button type="button" class="btn btn-info editButton">Edit</button></a>
                            <form method="POST" action="{{ route('form.destroy', $data->id) }}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                            </form>
                            </div>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javascript">
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          console.log('hello')
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

</script>

</body>

</html>
