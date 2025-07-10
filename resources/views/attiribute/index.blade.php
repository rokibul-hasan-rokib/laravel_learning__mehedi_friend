@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto mt-10">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold">All Attributes</h2>
        <a href="{{ route('attributes.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Add Attribute</a>
    </div>

    @if ($attributes->count())
        <div class="bg-white rounded shadow overflow-hidden">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-100 text-left">
                    <tr>
                        <th class="px-4 py-2">#</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Type</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($attributes as $index => $attribute)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $index + 1 }}</td>
                        <td class="px-4 py-2 font-medium text-gray-800">{{ $attribute->name }}</td>
                        <td class="px-4 py-2 capitalize">{{ $attribute->type }}</td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="{{ route('attributes.show', $attribute->id) }}" class="text-blue-600 hover:underline">View</a>
                            <a href="{{ route('attributes.edit', $attribute->id) }}" class="text-yellow-600 hover:underline">Edit</a>
                            <form action="{{ route('attributes.destroy', $attribute->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Delete this attribute?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $attributes->links() }}
        </div>
    @else
        <p class="text-gray-600">No attributes found.</p>
    @endif
</div>
@endsection
