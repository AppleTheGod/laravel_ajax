<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
      <div class="add mt-3">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add">
          Add product
        </button>
      </div>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td class="d-flex justify-content-center">
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger ms-1">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
      @include('particals.add_product')
      @include('particals.product_js')
</body>

</html>
