<ul>
    @foreach($authors as $author)
        <li>{{ $author->name }}
            <ul>
                @foreach($author->books as $book)
                    <li>{{ $book->title }}</li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>