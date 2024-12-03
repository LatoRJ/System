<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .category {
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>
    <h1>Available Products</h1>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price (PHP)</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>
                        {{ $product->Product_Name }}
                        <div class="category">({{ $product->category->Category_Name }})</div>
                    </td>
                    <td>{{ $product->category->Category_Name }}</td>
                    
                    <td>{{ number_format($product->Price, 2) }}</td>
                    <td>{{ $product->Product_Quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>