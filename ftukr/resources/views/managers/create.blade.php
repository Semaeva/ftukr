
<head>
    <title>Создание нового члена руководящего состава</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
<h2>Добавить нового члена руководящего состава</h2>

<form action="{{ route('managers.store') }}" method="post" enctype="multipart/form-data">
    <!-- Add CSRF Token -->
    @csrf
    <div class="form-group">
        <label>ИМЯ, Отчество </label>
        <input type="text" class="form-control" name="name" required>
        <p>description</p>
        <input type="text" class="form-control" name="description" required>

        <div class="form-group {{ $errors->has('positions') ? ' has-error' : '' }}">
            <label for="positions">Должность</label>

            <select id="positions" name="positions" class="form-control">
                <option value="">--- Должность ---</option>
                @foreach ($positions as $item)
                    <option value="{{ $item->id }}" {{ ( $item->id == 0) ? 'selected' : '' }}> {{ $item->name }} </option>
                @endforeach
                <option id="test">
{{--                    //<button type="button">Создать</button>--}}
                <option value='donations'>Создать</option>

                </option>
            </select>
            @if ($errors->has('designation'))
                <span class="help-block">
            <strong>{{ $errors->first('positions') }}</strong>
        </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <input type="file" name="image" required>
    </div>
    <button type="submit">Добавить</button>
</form>
</div>

<div class="modal" id="myMod">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Добавить должность</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="modal-body">
                    <form action="{{ route('positions.store') }}" method="post" enctype="multipart/form-data">
                    <!-- Add CSRF Token -->
                        @csrf
                        <div class="form-group">
                            <div></div>
                            <label>ФИО </label>
                            <input type="text" class="form-control" name="name" placeholder="Введите название новой должности" >
                        </div>
                            <div>
                            <label>Приоритет</label>
                            <input type="number" name="prioritet">
                            </div>

                            <div>
                                <label for="team">Относится ли должность к рук.составу?</label>

                                <select name="team" id="manager">
                                    <option value="1">Да</option>
                                    <option value="0">Нет</option>

                                </select>
                            </div>
                            <div style="margin-top: 20px;">
{{--                            <label>Приоритеты и позиции:</label>--}}

                            <table>
                                <tr><th>Наименование должности</th><th>приоритет</th><th>Руководящий состав</th></tr>
                            @foreach( $positions  as $positions)
                                    <tr>  <td>
                                    {{ $positions['name']}}
                                        </td>
                                    <td> {{$positions['prioritet']}}</td>
                                        @if ($positions['ManagementTeam'] != 0)
                                        <td>
                                            Да
                                        </td>
                                           @else <td>Нет</td>
                                           @endif
                                    </tr>
                                    @endforeach
                            </table>
                            </div>
                            </div>
                        <button type="submit">Добавить</button>
                    </form>
                </div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

</body>

<style>
</style>
<script>
    $('#positions').change(function(){
        $modal = $('#myMod');
        if($(this).val() === 'donations'){
            $modal.modal('show');
        }
    });
    // let _token   = $('meta[name="csrf-token"]').attr('content');
    //    function addPositions(){
    //             $.ajax({
    //                 url: '/positions/store',
    //                 type: 'POST',
    //
    //                 data:{_token: _token,
    //                     positions:'test',
    //
    //                     data: 'text'
    //
    //                 },
    //                 success: function(data) {
    //                     console.log("ok");
    //                 },
    //             });
    //     };

</script>
