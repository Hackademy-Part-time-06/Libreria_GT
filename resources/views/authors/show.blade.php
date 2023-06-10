<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">

                    <p>Nome Autore: {{$author->name}} </p>
                    <p>Cognome Autore: {{$author->surname}} </p>
                    <p>Età Autore: {{$author->birthday}} </p>



                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row row-cols-1 row-cols-md-2  row-cols-lg-3 g-4">

                @forelse ($author->books as $book)

                <div class="col">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-6 text-center">
                                <img style="height:20rem;"
                                    src="{{empty($book->image) ? Storage::url('image/default.jpg') : Storage::url($book->image)}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{$book->name}}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty

                @endforelse
            </div>
        </div>
    </section>
</x-main>
