@include('components.header')

<table border="1">
    <tr>
        <td>Book Name</td>
        <td>Category Name</td>
        <td>Author Name</td>
        <td>Average Rating</td>
        <td>Voter</td>
    </tr>

    @foreach ($books as $book)
        <tr>
            <td>{{ $book->book_name }}</td>
            <td>{{ $book->category->category_name }}</td>
            <td>{{ $book->author->author_name }}</td>
            <td></td>
            <td>{{ $book->ratings->rating_value }}</td>
        </tr>
    @endforeach
</table>
@include('components.footer')
