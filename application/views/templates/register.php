  <!-- PAGE settings -->
<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="text-center col-md-7 mx-auto"> <img class="img-fluid d-block mx-auto mb-5" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Apple_logo_black.svg/505px-Apple_logo_black.svg.png" width="50">
          <h2><b>Registration</b></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-12 order-md-1">
          <form class="needs-validation" novalidate="" action="register">
            <div class="row">
              <div class="col-md-6 mb-3"> <label for="firstName">Name</label>
                <input type="text" class="form-control" id="firstName">
                <div class="invalid-feedback"> Valid first name is required. </div>
              </div>
              <div class="col-md-6 mb-3"> <label for="lastName">Address</label>
                <input type="text" class="form-control" id="lastName">
                <div class="invalid-feedback"> Valid last name is required. </div>
              </div>
            </div>
            <div class="mb-3"> <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend"> <span class="input-group-text">@</span> </div>
                <input type="text" class="form-control" id="username" placeholder="Username">
                <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
              </div>
            </div>
            <div class="mb-3"> <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
            </div>
            <div class="mb-3"> <label for="email">Phone number<span class="text-muted"></span></label>
              <input type="number" class="form-control" id="email" placeholder="380XXX-XXX-XX-XX" >
              <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
            </div>
            <div class="col-md-6 mb-3"> <label for="zip">Password</label>
              <input type="password" class="form-control" id="zip">
              <div class="invalid-feedback"> Zip code required. </div>
            </div>
            <div class="col-md-6 mb-3"> <label for="zip">Confirm Password</label>
              <input type="password" class="form-control" id="zip" placeholder="" required="">
              <div class="invalid-feedback"> Zip code required. </div>
            </div>
            <div class="mb-3">
              <div class="invalid-feedback"> Please enter your shipping address. </div>
            </div>
            <hr class="mb-4">
          </form><a class="btn btn-primary btn-lg" href="/login">Sign in</a>
        </div>
      </div>
    </div>
  </div>
  
