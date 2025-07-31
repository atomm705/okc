<table class="table">
    <thead>
    <th>#</th>
    <th>Категорія</th>
    <th>Дії</th>
    </thead>
    <tbody>
    @php $i = 1; @endphp
    @foreach($division->categories as $category)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $category->category->translation->name }}</td>
            <td></td>
        </tr>
        @php $i++; @endphp
    @endforeach
    </tbody>
</table>
