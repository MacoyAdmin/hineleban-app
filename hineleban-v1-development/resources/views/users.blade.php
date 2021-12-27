<!doctype html>
<html lang="en">
  <x-head data="Welcome to Hineleban Store | Hineleban Store"/>
  <body>
       <x-header data="home"/>
       <div class="container-fluid">
       <h3 style="margin-top:100px">Manage Account</h3>
         <div class="row">
           <div class="col-sm-4">
           <img src="{{URL::asset('/media/user/mXJMb3Kn66ek97YedRzQd7bHwebK1gLP9en9M5h9.png')}}"  class="img-fluid img-thumbnail rounded " alt="Not Found" width="80%">
           <div class="row" style="margin-top:10px;margin-bottom:160px">
              <div class="col-sm-8">
              <form action="users" method="POST" enctype="multipart/form-data">
             @csrf
            <input class="form-control" type="file" name="file" id="file">
              </div>
              <div class="col-sm-4">
              <button type="submit" class="btn btn-secondary">Upload</button>
              </div>
           </div>
           </form>
           </div>
           <div class="col-sm-8">
           <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Customer Profile
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">

                    <div class="mb-3 row">
                      <label for="inputFirstname" class="col-sm-2 col-form-label">Firstname</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputFirstname" value="{{session('firstname')}}">
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="inputLastname" class="col-sm-2 col-form-label">LastName</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputLastname" value="{{session('lastname')}}">
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Email Address</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" value="{{session('emailaddress')}}">
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="inputContactNo" class="col-sm-2 col-form-label">Contact No</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputContactNo" value="{{session('contactno')}}">
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="inputContactNo" class="col-sm-2 col-form-label"> </label>
                      <div class="col-sm-10">
                      <button type="button" class="btn btn-primary">Update</button>
                      </div>
                    </div>

                    

                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Manage Password
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Change Security Question
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
            </div>
           </div>
         </div>
       </div>
       <x-footer/>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>