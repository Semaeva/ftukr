<div class="container">
    <h3>View all image</h3><hr>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">name</th>
            <th scope="col">description</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $news)
            <tr>
                <td>{{$news->name}}</td>
                <td>
                <td>{{$news->description}}</td>

                </td>
                <td>
                    <a class="btn btn-small btn-success" href="{{ URL::to('admin/' . $news->id) }}">Detail</a>
                    <a class="btn btn-small btn-info" href="{{ URL::to('admin/' . $news->id . '/edit') }}">Edit</a>

{{--                    <a href="{{ route('admin.show',  ['id' => $news->id]) }}">Редактировать</a>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
