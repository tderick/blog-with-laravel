<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.admin.head')
</head>
<body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
          <div class="row justify-content-center">

            <div class="col-md-6">
                @if (session('errors'))
                    @foreach (session('errors')->all() as $error )
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        {{ $error }}
                    </div>
                    @endforeach
                 @endif

              <div class="card mb-4 mx-4 mt-4">
                <div class="card-body p-4">
                <form action="{{ route('verificateAccount') }}" method="POST">
                    @csrf
                    <h1>Register</h1>
                    <p class="text-medium-emphasis">Create your account</p>
                    <div class="input-group mb-3"><span class="input-group-text">
                        <svg class="icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>

                        </svg></span>
                      <input class="form-control" type="text" placeholder="Username" name="name">
                    </div>
                    <div class="input-group mb-3"><span class="input-group-text">
                        <svg class="icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                        </svg></span>
                      <input class="form-control" type="text" placeholder="Email" name="email">
                    </div>
                    <div class="input-group mb-3"><span class="input-group-text">
                        <svg class="icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                        </svg></span>
                      <input class="form-control" type="password" placeholder="Password" name="password">
                    </div>
                    <div class="input-group mb-4"><span class="input-group-text">
                        <svg class="icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                        </svg></span>
                      <input class="form-control" type="password" placeholder="Repeat password" name="password_confirmation">
                    </div>
                      <button class="btn btn-block btn-success" type="submit">Create Account</button>
                </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
