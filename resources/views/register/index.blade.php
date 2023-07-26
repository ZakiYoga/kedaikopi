<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>RnR | {{ $title }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon-->
    <link rel="icon" href="assets/img/favicon.svg" type="image/svg+xml">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="./assets/css/styles-main.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
   
   <div class="row justify-content-center align-content-center flex">
     <div class="col-lg-5">
       <main class="form-registration">
         <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
           <form action="/register" method="post">
           @csrf    
           <div class="form-floating">
               <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
               <label for="name">Name</label>
               @error('name')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
               @enderror
           </div>
           <div class="form-floating">
               <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
               <label for="email">Email address</label>
               @error('email')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
               @enderror
           </div>
           <div class="form-floating">
               <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required >
               <label for="password">Password</label>
               @error('password')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
               @enderror
           </div>
           <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
           </form>
           <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
       </main>
     </div>
   </div>
   
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="./assets/js/scripts.js"></script>
</body>

</html>