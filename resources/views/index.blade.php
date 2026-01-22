<h1>Danh sách sản phẩm</h1>

<ul>
@foreach($products as $p)
    <li>{{ $p['name'] }}</li>
@endforeach
</ul>

<a href="{{ route('product.add') }}">➕ Thêm sản phẩm</a>
