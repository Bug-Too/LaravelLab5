<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>View Products | Product Store</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>

<body>
    <div class="links">
        <a href="{{ config('app.url')}}">Home</a>
    </div>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <hl>
                Here's a list of available products
                </h1>
                <table>
                    <thead>
                        <td>Name</td>
                        <td>Description</td>
                        <td>Count</td>
                        <td>Price</td>
                    </thead>

                    <tbody>
                        @foreach( $products as $product )
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td class="inner-table">{{ $product->description }}</td>
                            <td class="inner-table">{{ $product->count }}</td>
                            <td class="inner-table">{{ $product->price }}</td>
                            @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</body>

</html>