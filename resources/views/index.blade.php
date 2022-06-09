<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Laravel Multiple Database Connections</title>
  </head>
  <body>
    <div class="container my-5">
        <h1 class="fs-5 fw-bold my-3 text-center">Laravel Multiple Database Connections</h1>
        <div class="row">
            <h2 class="fs-5 fw-bold my-3">Database 1: laravel_multiple_database1</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $item)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $item->name_customer }}</td>
                            <td>{{ $item->email_customer }}</td>
                            <td>{{ $item->address_customer }}</td>
                            <td>{{ $item->phone_customer }}</td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="row">
            <h2 class="fs-5 fw-bold my-3">Database 2: laravel_multiple_database2</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $key => $item)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $item->title }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>