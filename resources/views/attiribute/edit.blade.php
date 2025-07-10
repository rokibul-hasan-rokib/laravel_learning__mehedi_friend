@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Edit Attribute</h2>

    <form action="{{ route('attributes.update', $attribute->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block text-gray-700">Attribute Name</label>
            <input type="text" name="name" id="name" value="{{ $attribute->name }}" required class="w-full mt-1 p-2 border rounded">
        </div>

        <div class="mb-4">
            <label for="type" class="block text-gray-700">Type</label>
            <select name="type" id="type" class="w-full mt-1 p-2 border rounded">
                <option value="text" {{ $attribute->type === 'text' ? 'selected' : '' }}>Text</option>
                <option value="select" {{ $attribute->type === 'select' ? 'selected' : '' }}>Select</option>
                <option value="checkbox" {{ $attribute->type === 'checkbox' ? 'selected' : '' }}>Checkbox</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
    </form>
</div>
@endsection
