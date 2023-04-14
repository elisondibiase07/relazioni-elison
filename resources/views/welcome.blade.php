<x-layout>
    <x-header title="I migliori Film di Sempre"/>
    <div class="container my-5">
        <div class="row  ">
                @foreach ($products as $product)
                <div class="col-12 col-md-8 col-lg-4 ">
                    <div class="card " style="width: 18rem;">
                        <img src="{{Storage::url($product->img)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <h5 class="card-title"> Venditore : 
                           <a href="{{route('user.products' , $product->user)}}">{{$product->user->name}}</a></h5>
                        {{-- <p class="card-text">{{$product->description}}</p> --}}
                        <p class="card-text">{{$product->category->name}}</p>
                        <p class="card-text">Prezzo : € {{$product->price}}</p>
                        <a href="{{route('product.show' , $product)}}" class="btn btn-primary">Mostra di più</a>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</x-layout>