<x-layout>
    <x-header title="Vendi un Prodotto" />
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Nome</label>
                      <input type="text" class="form-control" name="name"> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrizione Prodotto</label>
                        <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Prexxo Prodotto</label>
                        <input type="number" class="form-control" name="price"> 
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Immagine</label>
                        <input type="file" class="form-control" name="img"> 
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>

</x-layout>