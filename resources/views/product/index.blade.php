<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.3/datatables.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-2.0.3/datatables.min.js"></script>

</head>
<body>
<div class="container">
    <h1>Danh sách sản phẩm</h1>
    <hr/>
    <table class="table table-bordered" id="product_table">
        <thead>
        <th>Mã</th>
        <th>Tên sản phẩm</th>
        <th>Tỉ lệ</th>
        <th>Số lượng</th>
        <th>Nhà cung cấp</th>
        </thead>
        <tbody>
        @foreach($products as $item)
            <tr>
                <td>{{$item->productCode}}</td>
                <td>{{$item->productName}}</td>
                <td>{{$item->productScale}}</td>
                <td>{{$item->quantityInStock}}</td>
                <td>{{$item->productVendor}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <script>
        let table = new DataTable('#product_table');
    </script>
</div>
</body>
</html>
