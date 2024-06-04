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
          <x-article-card :article="$article"/>
        </div>
      @endforeach
    </div>
  </div>    
</x-layout>