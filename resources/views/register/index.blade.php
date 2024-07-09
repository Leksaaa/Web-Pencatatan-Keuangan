<link rel="stylesheet" href="/css/styles.css">
<main class="form-signin w-100 m-auto">
    <form action="/register" method="post">
        @csrf
      <h1 class="h3 mb-3 fw-normal text-center">Please Register</h1>
        
      <div class="form-floating">
        <input type="text" name="name" class="form-control" id="name" placeholder="name">
        <label for="name">Name</label>
      </div>  
      
      <div class="form-floating">
        <input type="text" name="username" class="form-control" id="username" placeholder="username">
        <label for="username">Username</label>
      </div>  
      
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" placeholder="password">
        <label for="password">Password</label>
      </div>
  
      <p class="mt-2 mb-3 text-body-secondary d-block text-center"> sudah punya akun? <a href="/login">Login</a></p>

      <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
      <p class="mt-5 mb-3 text-body-secondary">&copy; 2017-2024</p>
    </form>
  </main>