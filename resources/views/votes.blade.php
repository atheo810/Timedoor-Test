@include('components.header')

<h1>Insert Rating</h1>

<form action="/vote" method="post">
    @csrf
    <label for="author">Book Author</label>
    <select name="author" id="author">
        @foreach ($authors as $author)
            <option value="{{ $author->id }}">{{ $author->author_name }}</option>
        @endforeach
    </select>
    <br>
    <label for="book_name">Book name</label>
    <select name="book_name" id="book_name">
        @foreach ($books as $book)
            <option value="{{ $book->id }}">{{ $book->book_name }}</option>
        @endforeach
    </select>
    <br>
    <label for="rating">Rating</label>
    <select name="rating" id="rating">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>

    <button type="submit">Submit</button>

</form>

@include('components.footer')
