<x-layout>
    <div class="container-fluid p-5 bg-secondary-subtle text-center headerCustom">
        <div class="row justify-content-center containerTitlte">
            <div class="col-12">
                <h1 class="display-1 titleCustom">Modifica l'articolo</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{route('article.update', $article)}}" method="POST" class="card p-5 shadow" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label" style="font-size:32px">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{$article->title}}">
                        @error('title')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="subtitle" class="form-label" style="font-size:28px">Sottotitolo</label>
                        <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{$article->subtitle}}">
                        @error('subtitle')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label style="font-size:22px">Immagine Attuale</label>
                        <img src="{{Storage::url($article->image)}}" alt="{{$article->title}}" class="w-50 d-flex">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label" style="font-size:22px">Nuova Immagine</label>
                        <input type="file" name="image" class="form-control" id="image">
                        @error('image')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label" style="font-size:22px">Categoria</label>
                        <select name="category" id="category" class="form-control">
                            <option selected disabled>Seleziona categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" @if($article->category_id == $category->id) selected @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tags" class="form-label" style="font-size:22px">Tags</label>
                        <input type="text" name="tags" class="form-control" id="tags" value="{{$article->tags->implode('name', ', ')}}">
                        <span class="small text-muted fst-italic">Dividi ogni tag con una virgola</span>
                        @error('tags')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label" style="font-size:22px">Corpo del testo</label>
                        <textarea name="body" class="form-control" id="body" cols="30" rows="7">{{$article->body}}</textarea>
                        @error('body')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mt-3 d-flex justify-content-center flex-column align-items-center">
                        <div class="containerEditBtn">
                            <button type="submit" class="btn btn-outline-secondary editBtnCustom">Modifica articolo</button>
                            <button type="button" class="btn btn-outline-secondary undoBtnCustom" onclick="window.history.back()">Annulla</button>
                        </div>
                        <a href="{{route('homepage')}}" class="text-secondary mt-2">Torna alla home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>

