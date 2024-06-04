
<x-app-layout>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" >
            <div class="p-6">
            
            

            <h1 class="text-xl font-bold mb-5">Course Details</h1>
            
            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Title:</label>
                <p class="text-gray-900">{{ $course->title }}</p>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Description:</label>
                <p class="text-gray-900">{{ $course->description }}</p>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Start Date:</label>
                <p class="text-gray-900">{{ $course->start_date }}</p>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 font-bold">End Date:</label>
                <p class="text-gray-900">{{ $course->end_date }}</p>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('courses.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back to List</a>
                <a href="{{ route('courses.edit', $course->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
