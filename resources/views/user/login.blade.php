@include('partials.header')

<form action="/login/process" method="POST">

  @csrf

  @error('email')
      <p>Your e-mail is invalid!</p>
  @enderror


  <section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form>

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Hello World!</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                  
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input 
                        type="email" 
                        class="form-control" 
                        id="exampleInputEmail1" 
                        aria-describedby="emailHelp"
                        name="email">
                        <div id="emailHelp" class="form-text">E-mails are confidential.</div>
                  </div>

                  <div class="form-outline mb-4">
                 
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" 
                    class="form-control" 
                    id="exampleInputPassword1"
                    name="password">
    
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                      style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



  <div
         style="background-color:#C3E0E5"
	</div>
  <h1>Log in to your account!</h1>


    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input 
      type="email" 
      class="form-control" 
      id="exampleInputEmail1" 
      aria-describedby="emailHelp"
      name="email">
      <div id="emailHelp" class="form-text">EMAILS ARE CONFIDENTIAL.</div>
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" 
      class="form-control" 
      id="exampleInputPassword1"
      name="password">
    </div>
   

    <button type="submit" class="btn btn-primary">Log in</button>
    <br>
    <h6><br><a href={{"/register"}}>No account yet? Sign up here!</a></h6>

</form>

  <br>

  

  @include('partials.footer')