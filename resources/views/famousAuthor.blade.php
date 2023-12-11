@include('components.header')

<table>
    <tr>
        <td>No</td>
        <td>Author Name</td>
        <td>Voter</td>
    </tr>
    @php
        $i = 1;
    @endphp
    @foreach ($authors as $author)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $author->author_name }}</td>
            <td>Voter</td>

        </tr>
    @endforeach
</table>

@include('components.footer')
