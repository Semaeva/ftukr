<div class="container">
    <h3>Детальный просмотр</h3><hr>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">detail</th>
            <th scope="col">Image</th>
        </tr>
        </thead>
        <tbody>
        <td>{{$data['name']}}</td>
        <td>{{$data['description']}}</td>
        <td>

            <img alt="image name" src="{{ url(  'newsImage/'.$data['file_path']) }}" />
            202204281134icons8-edit-24.png
                        </td>

        </tbody>
    </table>
</div>
