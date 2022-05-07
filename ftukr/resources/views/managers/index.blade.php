<head>
    <title>Руководящий состав</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="fixed-container">
    @foreach( $managers  as $managers)
    <div class="name-manager">
    {{
        $managers['name']
    }}
        <div>
        @foreach($managers->positions as $item)
        {{$item['name']}}
        <!-- The Modal -->
            <div class="modal" id="myMod{{$managers['id']}}">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Modal Heading</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="modal-body">
                                <form action="{{ route('managers.update',$managers->id) }}" method="post" enctype="multipart/form-data">
                                @method('PATCH')
                                <!-- Add CSRF Token -->
                                    @csrf
                                    <div class="form-group">
                                        <label>ФИО </label>
                                        <input type="text" class="form-control" name="name" value="{{ $managers['name']}}" >

                                        <div class="form-group {{ $errors->has('positions') ? ' has-error' : '' }}">
                                            <label for="positions">Должность</label>

                                            <select id="positions" name="positions" class="form-control">
{{--                                                                                            <option value=""> {{$item['name']}}</option>--}}
                                                @foreach ($positions as $items)
                                                    <option value="{{ $items->id }}" {{ ( $items->id == $item['id']) ? 'selected' : '' }}> {{ $items->name }} </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('positions'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('positions') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div>Описание</div>
                                        <input type="text" class="form-control" name="description" value="{{$managers['description']}}" >
                                    </div>
                                    <div class="form-group">
                                        <div class="avatars">
                                            <img  src=" {{ url('Avatars/'.$managers['image_path']) }}" height="120px;">
                                        </div>
                                        <input type="file" name="image" accept="image/png, image/jpeg">
                                    </div>
                                    <button type="submit">Ок</button>
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
            @endforeach
            <div class="avatars">  <img src=" {{ url('Avatars/'.$managers['image_path']) }}" height="120px;"></div>
        </div>
        <div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myMod{{ $managers['id'] }}">
                Редактировать
            </button>
            <form method="post" action="{{route('managers.destroy',$managers->id)}}">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
            </form>        </div>
    </div>
@endforeach
        <a class="btn btn-small btn-success" href="{{ URL::to('managers/create') }}">Создать</a>

</div>

</div>



</body>




<style>
.fixed-container{
    position: relative;
    margin: 50px 20px;
    padding: 0;
}
    .name-manager{
        /*position: absolute;*/
        display: inline-block;
        margin-right: 30px;
    }
    .avatars{
        margin-top: 20px;margin-bottom: 20px;
    }
</style>
<script>

</script>
