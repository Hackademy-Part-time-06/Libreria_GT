<x-main>
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                
                <div class="col-md-6 opacity-75 bg-light rounded">
                    <p class="text-black">Nome: {{$author->name}} </p>
                    <p class="text-black">Cognome: {{$author->surname}} </p>
                    <p class="text-black">Anno di Nascita: {{$author->birthday}} </p>
                </div>
            </div>
        </div>
    </section>
</x-main>
