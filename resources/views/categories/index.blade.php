@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Danh sách Category</h2>

    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">
        Thêm mới
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Danh mục cha</th>
                <th>Trạng thái</th>
                <th width="150">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->parent?->name }}</td>
                    <td>
                        {{ $item->is_active ? 'Hiển thị' : 'Ẩn' }}
                    </td>
                    <td>
                        <a href="{{ route('categories.edit',$item->id) }}" class="btn btn-warning btn-sm">Sửa</a>

                        <form action="{{ route('categories.destroy',$item->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
