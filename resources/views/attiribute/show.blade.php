@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-2">{{ $attribute->name }}</h2>
    <p class="text-gray-600">Type: {{ ucfirst($attribute->type) }}</p>

    <div class="mt-4 flex space-x-4">
        <a href="{{ route('attributes.edit', $attribute->id) }}" class="text-blue-600 hover:underline">Edit</a>
        <form action="{{ route('attributes.destroy', $attribute->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-600 hover:underline">Delete</button>
        </form>
    </div>
</div>
@endsection
