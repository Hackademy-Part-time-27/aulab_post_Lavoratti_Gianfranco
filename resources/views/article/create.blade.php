<x-layout>
    <div class="container-fluid p-5 bg-secondary-subtle text-center headerCustom">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">Inserisci un articolo</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{route('article.store')}}" method="POST" class="card p-5 shadow" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label" style="font-size: 30px">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label" style="font-size: 28px">Sottotitolo</label>
                        <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{old('subtitle')}}">
                        @error('subtitle')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label" style="font-size: 24px">Immagine</label>
                        <input type="file" name="image" class="form-control" id="image">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label" style="font-size: 24px">Categoria</label>
                        <select name="category" id="category" class="form-control">
                            <option selected disabled>Seleziona categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label" style="font-size: 24px">Corpo del testo</label>
                        <textarea name="body" class="form-control" id="body" cols="30" rows="7">{{old('body')}}</textarea>
                        @error('body')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tags" class="form-laber" style="font-size: 22px">Tags</label>
                        <input type="text" name="tags" id="tags" class="form-control" value="{{old('tags')}}">
                        <span class="small text-muted fst-italic">Dividi ogni tag con una virgola</span>
                        @error('tags')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3 d-flex justify-content-center flex-column align-items-center">
                        <button type="submit" class="btn btn-outline-secondary createArticleBtn">Inserisci articolo</button>
                        <a href="{{ route('homepage') }}" class="text-secondary mt-2">Torna alla home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>