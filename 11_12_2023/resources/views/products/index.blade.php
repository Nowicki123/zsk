@extends(layouts.product)

@section('title', 'lista')

@section('content')

    <h1>Lista produktów</h1>
    <table>
        <thead>
            <tr>
                <td>Nazwa Produktu</td>
                <td>Cena Produktu</td>
                <td>Opis Produktu</td>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection