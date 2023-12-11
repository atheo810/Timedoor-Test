@include('components.header')

<form action="/pagination" method="get">
    <label for="id">List Shown : </label>
    <select name="id" id="id">
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option value="40">40</option>
        <option value="50">50</option>
        <option value="60">60</option>
        <option value="70">70</option>
        <option value="80">80</option>
        <option value="90">90</option>
        <option value="100">100</option>
    </select>
    <br>
    <label for="Search">Search</label>
    <br>
    <button type="submit">Submit</button>
</form>

<table border="1">
    <tr>
        <td>No</td>
        <td>Book Name</td>
        <td>Category Name</td>
        <td>Author Name</td>
        <td>Average Rating</td>
        <td>Voter</td>
    </tr>
    @php
        $i = 1;
    @endphp
    @foreach ($books as $book)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $book->book_name }}</td>
            <td>{{ $book->category->category_name }}</td>
            <td>{{ $book->author->author_name }}</td>
            <td>
                <?php
                $x = 0;
                $y = $book->ratings->count();
                
                foreach ($book->ratings as $item) {
                    $x += $item->rating_value;
                }
                echo sprintf('%.2f', $y > 0 ? $x / $y : 0);
                ?>
            </td>
            <td>
                {{ $book->ratings->count() }}
            </td>
        </tr>
    @endforeach
</table>
@include('components.footer')
