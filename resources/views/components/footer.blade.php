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