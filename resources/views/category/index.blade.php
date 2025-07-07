@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Categories</h2>

    {{-- Create Button --}}
    <a href="{{ route('category.create') }}" class="btn btn-primary mb-3">Add Category</a>

    {{-- Flash Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Categories Table --}}
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th width="180">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="2">No categories found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
