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
                @foreach ($product->tags as $tag)
                    <span>#{{$tag->name}}</span>
                @endforeach
                
                <a href="{{route('product.edit' , $product)}}" class="btn btn-danger mx-3">Modifica</a>
                @if (Auth::user()->name == $product->user->name)
                <form method="POST" action="{{route('product.destroy' , compact('product'))}}" enctype="multipart/form-data">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Elimina Prodotto</button>
            </form>
            @endif
         
            </div>
        </div>
    </div>
</x-layout>