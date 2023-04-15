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
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: Form -->
          <section class="">
            <form action="">
              <!--Grid row-->
              <div class="row d-flex justify-content-center">
                <!--Grid column-->
                <div class="col-auto">
                  <p class="pt-2">
                    <strong > <a class="nav-link  " aria-current="page" >Inserisci la tua mail per ricevere le nostre Newsletter</a></strong>
                  </p>
                </div>
                <!--Grid column-->
                
                <!--Grid column-->
                <!--Grid column-->
                
                <!--Grid column-->
                <!-- Submit button -->
                <form method="POST" action="{{route('submit')}}" >
                  @csrf
                  <div class="col-md-5 col-12">
                    <!-- Email input -->
                    <div class="form-outline form-white mb-4">
                      <label class="form-label" for="form5Example29">Email address</label>
                      <input type="email"  name="email"  class="form-control" />
                    </div>
                  </div>
                  <div class="col-auto">
                                  
                    <button type="submit" class="btn btn-primary">Invia</button>
                    {{-- <a class=" btn btn-outline-light mb-4 "  aria-current="page" href="{{route('register')}}"> --}}
                      {{-- </a> --}}
                    </form>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </form>
            </section>
            <!-- Section: Form -->
          </div>
          <!-- Grid container -->
          
        </footer>
</x-layout>