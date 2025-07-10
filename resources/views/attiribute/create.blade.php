@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Create New Attribute</h2>

    <form action="{{ route('attributes.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-gray-700">Attribute Name</label>
            <input type="text" name="name" id="name" required class="w-full mt-1 p-2 border rounded">
        </div>

        <div class="mb-4">
            <label for="type" class="block text-gray-700">Type</label>
            <select name="type" id="type" class="w-full mt-1 p-2 border rounded">
                <option value="text">Text</option>
                <option value="select">Select</option>
                <option value="checkbox">Checkbox</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Create</button>
    </form>
</div>
@endsection
