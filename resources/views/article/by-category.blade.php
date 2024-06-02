<x-layout>
  <div class="container-fluid p-5 bg-secondary-subtle text-center headerCustom">
    <div class="row justify-content-center">
      <div class="col-12">
        <h1 class="display-1 titleCustom">Tutti gli articoli</h1>
      </div>
    </div>
  </div>
  <div class="container my-5">
    <div class="row justify-content-evenly custom-row">
      @foreach ($articles as $article)
      <div class="col-12 col-md-3 custom-col">
        <div class="card" style="width: 18rem;">
          <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="Immagine dell'articolo: {{$article->title}}">
          <div class="card-body">
            <h5 class="card-title">{{ $article->title }}</h5>
            <p class="card-subtitle">{{ $article->subtitle }}</p>
          </div>
          <div class="card-footer d-flex flex-column align-items-start">
            <div class="mb-auto">
              <p>Redatto il {{$article->created_at->format('d/m/Y')}} <br> da
                <a href="{{route('article.byUser', $article->user)}}" class="text-capitalize fw-bold text-muted"> {{$article->user->name}}</a>
              </p>
              @if ($article->category)
              <p class="small text-muted">Categoria:
                <a href="{{route('article.byCategory', $article->category)}}" class="text-capitalize text-muted">{{ $article->category->name }}</a>
              </p>
              @else
              <p class="small text-muted">Nessuna categoria</p>
              @endif
            </div>
            <a href="{{route('article.show', $article)}}" class="btn btn-outline-secondary mb-2" id="readArticleBtn">Leggi</a>
            <p class="small text-muted mt-2 tagsBottom">
              @foreach ($article->tags as $tag)
              #{{ $tag->name }}
              @endforeach
            </p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>    
</x-layout>