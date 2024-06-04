<x-layout>
    <div class="container-fluid p-5 bg-secondary-subtle text-center headerCustom">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-4 titleCustom">
                    Tutti gli articoli per {{$query}}
                </h1>
            </div>
        </div>
    </div>   
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <x-article-card :article="$article"/>
                </div>
            @endforeach
        </div>
    </div>    
</x-layout>
