    @extends('layouts.app')

    @section('content')
    <div class="overflow-x-auto">
    <table class="table-auto min-w-full">
        <thead>
            <tr>
                <th class="px-4 py-2 text-left">Author</th>
                <th class="px-4 py-2 text-left">Books</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
                <tr>
                    <td class="border px-4 py-2">{{ $author->name }}</td>
                    <td class="border px-4 py-2">
                        <ul class="list-disc list-inside">
                            @foreach($author->books as $book)
                                <li>{{ $book->title }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection