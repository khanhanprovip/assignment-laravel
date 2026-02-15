@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Cập nhật Category</h2>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Tên</label>
            <input type="text" name="name"
                    value="{{ $category->name }}"
                    class="form-control">
        </div>

        <div class="mb-3">
            <label>Danh mục cha</label>
            <select name="parent_id" class="form-control">
                <option value="">-- Danh mục cha --</option>

                @foreach($parents as $parent)
                    <option value="{{ $parent->id }}"
                        {{ $category->parent_id == $parent->id ? 'selected' : '' }}>
                        {{ $parent->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Mô tả</label>
            <textarea name="description" class="form-control">
                {{ $category->description }}
            </textarea>
        </div>

        <button class="btn btn-success">Cập nhật</button>
    </form>
</div>
@endsection
