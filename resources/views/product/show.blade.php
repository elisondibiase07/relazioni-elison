<x-layout>
    <x-header title="Dettaglio Prodotto"/>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <img src="{{Storage::url($product->img)}}" alt="" class="img-fluid">
            </div>
            <div class="col-6">
                <h5 >{{$product->name}}</h5>
                <h5 > Venditore : {{$product->user->name}}</h5>
                <p>{{$product->description}}</p>
                <p>Prezzo : {{$product->price}}</p>
            </div>
        </div>
    </div>
</x-layout>