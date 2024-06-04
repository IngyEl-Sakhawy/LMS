<x-app-layout >

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" >
                
                <div class="p-6">

                    
                    <table class="w-full table-auto" >
                <thead>
                    <tr>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Start Date</th>
                        <th class="px-4 py-2">End Date</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($courses as $course)
                    
                        <tr>
                            
                            <td class="border px-4 py-2"><a href="{{ route('courses.show', $course->id) }}" class="inline-block">{{ $course->title }}</a></td>
                            <td class="border px-4 py-2">{{ implode(' ', array_slice(str_word_count($course->description, 1), 0, 5)) }} ..</td>
                            <td class="border px-4 py-2">{{ $course->start_date }}</td>
                            <td class="border px-4 py-2">{{ $course->end_date }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('courses.edit', $course->id) }}" class="inline-block">Edit</a>
                                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
                                </form>
                            </td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
