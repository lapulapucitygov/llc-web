    <div class="container-fluid nav-bg">
      <div class="row">
          <div class="offset-md-1 col-md-4">
                <img src="{{ asset('img/republic_of_ph_white.png') }}" alt="llc-logo.png" width="100%">
          </div>
      </div>
    </div>
    <div class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="row offset-md-4 col-md-6 offset-md-2">
            {{-- <div class=""> --}}
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <h4 class="font-weight-light text-light"> HOME</h4> 
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <h4 class="font-weight-light text-light dropdown-toggle">  
                            ONLINE SERVICE
                        </h4></a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#"><h5 class="font-weight-light">New/Renew Business Permit</h5></a>
                      <a class="dropdown-item" href="#"><h5 class="font-weight-light">Local Civil Registry Services</h5></a>
                      <a class="dropdown-item" href="#"><h5 class="font-weight-light">Cedula</h5></a>
                      <a class="dropdown-item" href="#"><h5 class="font-weight-light">Tax Declaration</h5></a>
                    </div>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('departments')}}">
                        <h4 class="font-weight-light text-light">  
                            DEPARTMENTS
                        </h4> 
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                        <h4 class="font-weight-light text-light dropdown-toggle">  
                            TRANSPARENCY
                        </h4></a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#"><h5 class="font-weight-light">Full Disclosure Data</h5></a>
                      <a class="dropdown-item" href="#"><h5 class="font-weight-light">Executive Order</h5></a>
                      <a class="dropdown-item" href="#"><h5 class="font-weight-light">Citizen's Chart</h5></a>
                    </div>
                  </li>
                <li class="nav-item" >
                        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                            <h4 class="font-weight-light text-light">  
                                CONTACT US
                            </h4></a>
                        <span class="sr-only">(current)</span>
                </li>
            </ul>
            {{-- </div> --}}
        </div>
    
    </div>
    