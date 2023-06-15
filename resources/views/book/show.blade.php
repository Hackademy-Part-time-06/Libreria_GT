<x-main>
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <img class="card-img-top mb-5 mb-md-0 rounded"
                        src="{{empty($book->image) ? Storage::url('/images/default.png') : Storage::url($book->image)}}"
                        alt="{{$book->name}}">
                </div>
                <div class="col-md-6 opacity-75 bg-light rounded">
                    <h1 class="display-5 fw-bolder text-black">{{$book->title}}</h1>
                    <p class="text-black">Autore: {{$book->author->name}} {{$book->author->surname}} </p>
                    <p class="text-black">Numero Pagine: {{$book->pages}} </p>
                    <p class="text-black">Categoria: {{$book->category}} </p>
                </div>
            </div>
        </div>
    </section>
</x-main>
