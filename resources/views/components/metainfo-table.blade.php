<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome Tag</th>
                <th scope="col">Q.tà articoli collegati</th>
                <th scope="col" class="text-center">Aggiorna</th>
                <th scope="col">Cancella</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($metaInfos as $metaInfo)
                <tr>
                    <th scope="row">{{$metaInfo->id}}</th>
                    <td>{{$metaInfo->name}}</td>
                    <td>{{count($metaInfo->articles)}}</td>
                    @if ($metaType == 'tags')
                        <td class="text-center">
                            <form action="{{route('admin.editTag', ['tag' => $metaInfo])}}" method="POST" class="d-flex justify-content-center align-items-center">
                                @csrf
                                @method('PUT')
                                <input type="text" name="name" placeholder="Nuovo nome tag" class="form-control input-custom">
                                <button type="submit" class="btn btn-secondary btn-custom ml-2">Aggiorna</button>
                            </form>
                        </td>
                        <td class="text-center">
                            <form action="{{route('admin.deleteTag', ['tag' => $metaInfo])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-custom">Elimina</button>
                            </form>
                        </td>
                    @else
                        <td class="text-center">
                            <form action="{{route('admin.editCategory', ['category' => $metaInfo])}}" method="POST" class="d-flex justify-content-center align-items-center">
                                @csrf
                                @method('PUT')
                                <input type="text" value="{{$metaInfo->name}}" name="name" placeholder="Nuovo nome categoria" class="form-control input-custom">
                                <button type="submit" class="btn btn-secondary btn-custom ml-2">Aggiorna</button>
                            </form>
                        </td>
                        <td class="text-center">
                            <form action="{{route('admin.deleteCategory', ['category' => $metaInfo])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-custom">Elimina</button>
                            </form>
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
