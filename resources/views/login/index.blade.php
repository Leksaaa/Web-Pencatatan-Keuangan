<link rel="stylesheet" href="/css/styles.css">
<main class="form-signin w-100 m-auto">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{session('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
    </div>
    @endif

    @if (session()->has('loginerror'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{session('loginerror')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
    </div>
    @endif

    <form action="/login" method="post">

        @csrf
      <h1 class="h3 mb-3 fw-normal text-center">Please Log In</h1>
  
      <div class="form-floating">
        <input type="text" name="username" class="form-control" id="name" placeholder="name" required>
        <label for="name">Username</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
        <label for="password">Password</label>
      </div>
      <p class="mt-2 mb-3 text-body-secondary d-block text-center"> belum punya akun? <a href="/register">register</a></p>
  
      
      <button class="btn btn-primary w-100 py-2" type="submit">Log in</button>
      <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p>
    </form>
  </main>