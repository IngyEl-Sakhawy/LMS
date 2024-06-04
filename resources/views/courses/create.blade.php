<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body class="bg-gray-100">
<x-app-layout>
    <div class="container mx-auto mt-10">
        <div class="max-w-md mx-auto bg-white p-5 rounded shadow-md">
            <h1 class="text-xl font-bold mb-5">Create a New Course</h1>
            
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

            <form action="{{ route('courses.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-gray-700">Course Title:</label>
                    <input type="text" id="title" name="title" class="w-full border-2 border-gray-300 p-2 rounded" required>
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700">Description:</label>
                    <textarea id="description" name="description" rows="4" class="w-full border-2 border-gray-300 p-2 rounded" required></textarea>
                </div>

                <div class="mb-4">
                    <label for="start_date" class="block text-gray-700">Start Date:</label>
                    <input type="date" id="start_date" name="start_date" class="w-full border-2 border-gray-300 p-2 rounded" required>
                </div>

                <div class="mb-4">
                    <label for="end_date" class="block text-gray-700">End Date:</label>
                    <input type="date" id="end_date" name="end_date" class="w-full border-2 border-gray-300 p-2 rounded" required>
                </div>

                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 text-white p-2 rounded">Create Course</button>
                </div>
            </form>
        </div>
    </div>
    </x-app-layout>
</body>
</html>