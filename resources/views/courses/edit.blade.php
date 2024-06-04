
<x-app-layout>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" >
            <div class="p-6">
            
            <h1 class="text-xl font-bold mb-5">Edit Course</h1>
            
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <strong class="font-bold">Whoops!</strong>
                    <span class="block sm:inline">There were some problems with your input.</span>
                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('courses.update', $course->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="title" class="block text-gray-700">Course Title:</label>
                    <input type="text" id="title" name="title" class="w-full border-2 border-gray-300 p-2 rounded" value="{{ $course->title }}" required>
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700">Description:</label>
                    <textarea id="description" name="description" rows="4" class="w-full border-2 border-gray-300 p-2 rounded" required>{{ $course->description }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="start_date" class="block text-gray-700">Start Date:</label>
                    <input type="date" id="start_date" name="start_date" class="w-full border-2 border-gray-300 p-2 rounded" value="{{ $course->start_date }}" required>
                </div>

                <div class="mb-4">
                    <label for="end_date" class="block text-gray-700">End Date:</label>
                    <input type="date" id="end_date" name="end_date" class="w-full border-2 border-gray-300 p-2 rounded" value="{{ $course->end_date }}" required>
                </div>

                <div class="mb-4">
                    <button type="submit" class=" p-2 rounded" style="background-color: grey;">Update Course</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>
