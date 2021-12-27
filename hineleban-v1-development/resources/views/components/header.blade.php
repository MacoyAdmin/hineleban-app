<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" style="background:red;">
            <div class="container-fluid">
            <a class="navbar-brand" href="/">
                    <img src="{{URL::asset('/media/hineleban-logo.png')}}" alt="" width="170" height="40" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link {{$home}}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{$store}}" href="/store">Store</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{$contact}}" href="/contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{$tac}}" href="/tac">Terms & Condition</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{$faq}}" href="/faq">FAQs</a>
                    </li>
                </ul>
    
                @if(session('firstname') == '')
                
                <span class="navbar-text">
                <a class="nav-link" href="#" role="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Login</a>
                </span>
                <span class="navbar-text">
                <a class="nav-link" href="#" role="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight">Register</a>
                </span>
                @else
                <span class="navbar-text">
                <div class="btn-group">
                <a class="nav-link" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg> Hello, {{session('lastname')}}, {{session('firstname')}}
                </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                      <li><a class="dropdown-item" href="/users">Account</a></li>
                      <li><a class="dropdown-item" href="#">My Cart <span class="badge bg-primary text-dark">5</span></a></li>
                      <li><a class="dropdown-item" href="#">Orders <span class="badge bg-primary">1</span></a></li>
                      <li><a class="dropdown-item" href="#">Order History</a></li>
                      <li><a class="dropdown-item" href="#">Settings</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </div>
                </span>
                @endif
                </div>
            </div>
        </nav>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
          <h5 id="offcanvasRightLabel">Login</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    
    <div class="offcanvas-body">
    <form action="users" method="POST">
      @csrf
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" name="username" placeholder="name@example.com">
          <span style="color:red">@error('username'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Password</label>
          <input type="password" class="form-control" name="userPass">
          <span style="color:red">@error('userPass'){{$message}}@enderror</span>
        </div>
        <div class="d-grid gap-2">
        <input type="hidden" name="action" value="login">
          <button class="btn btn-primary" type="submit" value="login">Login</button>
          <a href="www.test.com">Forgot Password?</a>
        </div>
        </form>
        <br>
          <p style="text-align:center">or</p>
          <p style="text-align:left">Login with :</p>
          <a href="www.test.com">
            <img src="{{URL::asset('/media/fb.png')}}" class="card-img-top" alt="..." style="width:15%;">
          </a>
          <a href="www.test.com">
            <img src="{{URL::asset('/media/google.png')}}" class="card-img-top" alt="..." style="width:15%;">
          </a>
  </div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-2" id="offcanvasRight1" aria-labelledby="offcanvasRightLabel1">
    <div class="offcanvas-header">
          <h5 id="offcanvasRightLabel1">Register</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas1" aria-label="Close"></button>
    </div>
    
    <div class="offcanvas-body">
    <form action="users" method="POST">
      @csrf
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Firstname</label>
          <input type="text" class="form-control" name="firstname" placeholder="Juan">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Lastname</label>
          <input type="text" class="form-control" name="lastname" placeholder="Dela Cruz">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email Address</label>
          <input type="email" class="form-control" name="email" placeholder="Juandelacruz@company.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Contact No.</label>
          <input type="text" class="form-control" name="contactno" placeholder="+639123948573">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" placeholder="">
        </div>
        <div class="d-grid gap-2">
        <input type="hidden" name="action" value="register">
          <button class="btn btn-primary" type="submit" value="register">Register</button>
        </div>
        </form>
        <br>
          <p style="text-align:center">or</p>
          <p style="text-align:left">Login with :</p>
          <a href="www.test.com">
            <img src="{{URL::asset('/media/fb.png')}}" class="card-img-top" alt="..." style="width:15%;">
          </a>
          <a href="www.test.com">
            <img src="{{URL::asset('/media/google.png')}}" class="card-img-top" alt="..." style="width:15%;">
          </a>
  </div>
</div>