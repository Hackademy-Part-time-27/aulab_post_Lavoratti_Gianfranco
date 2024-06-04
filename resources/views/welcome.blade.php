<x-layout>
    <div class="container-fluid p-5 bg-secondary-subtle text-center headerCustom">
        <div class="row justify-content-center containerTitlte">
            <div class="col-12">
                <h1 class="display-1 titleCustom">
                    The Aulab Post
                </h1>
            </div>
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @if (session('alert'))
        <div class="alert alert-danger">
            {{ session('alert') }}
        </div>
    @endif
    <div class="container my-3">
        <div class="row justify-content-evenly custom-row">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3 custom-col">
                    <x-article-card :article="$article"/>
                </div>
            @endforeach
        </div>
    </div>    
</x-layout>
