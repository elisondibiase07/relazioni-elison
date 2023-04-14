<x-layout>
    <div class="container-fluid bg-warning py-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Modifica Prodotto {{$product->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <form method="POST" action="{{route('product.update' , $product)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Nome</label>
                      <input type="text" class="form-control" name="name" value="{{$product->name}}"> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrizione Prodotto</label>
                        <textarea name="description" cols="30" rows="10" class="form-control">{{$product->description}}</textarea>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Prezzo Prodotto</label>
                        <input type="number" class="form-control" name="price" value="{{$product->price}}"> 
                      </div>
                      <div class="mb-3">
                        {{-- ! devo mostrare la categoria a cui fa riferiemnto il mio prodotto --}}
                        <label class="form-label">Categorie : </label>
                        <select name="category_id" id="" class="form-control">
                          @foreach ($categories as $category)
                            {{-- * la catg che sto ciclando e == a;;a cat associata me la mostra altrimenti no --}}
                              <option value="{{$category->id}}" {{$category == $product->category ? 'selected' : ''}}>{{$category->name}}</option>
                          @endforeach  
                        </select> 
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Tag : </label>
                        <select name="tag_id[]" id="" class="form-control" multiple>
                          @foreach ($tags as $tag)
                          <option
                          @if($product->tags->contains($tag)) selected @endif
                              value="{{$tag->id}}">{{$tag->name}}</option>
                          @endforeach  
                        </select> 
                        <small>Premi Ctrl + Click per selzionare piu'tag</small>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Immagine in Uso :     </label>
                       <img src="{{Storage::url($product->img)}}" alt="" class="w-25 my-3">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Immagine</label>
                        <input type="file" class="form-control" name="img"> 
                      </div>
                    <button type="submit" class="btn btn-primary">Salva Modifica</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>