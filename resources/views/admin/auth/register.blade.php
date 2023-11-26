<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
</head>
<body>
    <h2>Form Registrasi</h2>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <form action="{{ route('register') }}" method="post">
        @csrf

        <label for="first_name">Nama Depan:</label><br>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="last_name">Nama Belakang:</label><br>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone_number">Nomor Telepon:</label><br>
        <input type="tel" id="phone_number" name="phone_number" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="password_confirmation">Konfirmasi Password:</label><br>
        <input type="password" id="password_confirmation" name="password_confirmation" required><br><br>

        <label for="role">Pilih Peran (Role):</label><br>
        <select id="role" name="role">
            <option value="admin">Admin</option>
            <option value="founder">Founder</option>
            <option value="programmer">Programmer</option>
            <option value="marketing">Marketing</option>
            <option value="journalist">Journalist</option>
        </select><br><br>

        <input type="checkbox" id="terms" name="terms" required>
        <label for="terms">Saya setuju dengan syarat dan ketentuan</label><br><br>

        <button type="submit">Daftar</button>
    </form>
</body>
</html>






<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Hope UI | Responsive Bootstrap 5 Admin Dashboard Template</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
<!-- resources/views/admin/styles.blade.php -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/core/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/vendor/aos/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/hope-ui.min.css?v=2.0.0') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/custom.min.css?v=2.0.0') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/dark.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/customizer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/rtl.min.css') }}">
      
      
  </head>
  <body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body"></div>
      </div>    </div>
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="login-content">
         <div class="row m-0 align-items-center bg-white vh-100">            
               <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
               <img src="../../assets/images/auth/05.png" class="img-fluid gradient-main animated-scaleX" alt="images">
            </div>
            <div class="col-md-6">               
               <div class="row justify-content-center">
                  <div class="col-md-10">
                     <div class="card card-transparent auth-card shadow-none d-flex justify-content-center mb-0">
                        <div class="card-body">
                           <a href="../../dashboard/index.html" class="navbar-brand d-flex align-items-center mb-3">
                              <!--Logo start-->
                              <!--logo End-->
                              
                              <!--Logo start-->
                              <div class="logo-main">
                                  <div class="logo-normal">
                                      <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                                          <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                                          <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                                          <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                                      </svg>
                                  </div>
                                  <div class="logo-mini">
                                      <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                                          <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                                          <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                                          <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                                      </svg>
                                  </div>
                              </div>
                              <!--logo End-->
                              
                              
                              
                              
                              <h4 class="logo-title ms-3">Hope UI</h4>
                           </a>
                           <h2 class="mb-2 text-center">Sign Up</h2>
                           <p class="text-center">Create your Hope UI account.</p>
                           <form>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="full-name" class="form-label">Full Name</label>
                                       <input type="text" class="form-control" id="full-name" placeholder=" ">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="last-name" class="form-label">Last Name</label>
                                       <input type="text" class="form-control" id="last-name" placeholder=" ">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="email" class="form-label">Email</label>
                                       <input type="email" class="form-control" id="email" placeholder=" ">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="phone" class="form-label">Phone No.</label>
                                       <input type="text" class="form-control" id="phone" placeholder=" ">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="password" class="form-label">Password</label>
                                       <input type="password" class="form-control" id="password" placeholder=" ">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="confirm-password" class="form-label">Confirm Password</label>
                                       <input type="text" class="form-control" id="confirm-password" placeholder=" ">
                                    </div>
                                 </div>
                                 <div class="col-lg-12 d-flex justify-content-center">
                                    <div class="form-check mb-3">
                                       <input type="checkbox" class="form-check-input" id="customCheck1">
                                       <label class="form-check-label" for="customCheck1">I agree with the terms of use</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="d-flex justify-content-center">
                                 <button type="submit" class="btn btn-primary">Sign Up</button>
                              </div>
                              <p class="text-center my-3">or sign in with other accounts?</p>
                              <div class="d-flex justify-content-center">
                                 <ul class="list-group list-group-horizontal list-group-flush">
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="../../assets/images/brands/fb.svg" alt="fb"></a>
                                    </li>
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="../../assets/images/brands/gm.svg" alt="gm"></a>
                                    </li>
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="../../assets/images/brands/im.svg" alt="im"></a>
                                    </li>
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="../../assets/images/brands/li.svg" alt="li"></a>
                                    </li>
                                 </ul>
                              </div>
                              <p class="mt-3 text-center">
                                 Already have an Account <a href="sign-in.html" class="text-underline">Sign In</a>
                              </p>
                           </form>
                        </div>
                     </div>    
                  </div>
               </div>           
               <div class="sign-bg sign-bg-right">
                  <svg width="280" height="230" viewBox="0 0 421 359" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g opacity="0.05">
                        <rect x="-15.0845" y="154.773" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 -15.0845 154.773)" fill="#3A57E8"/>
                        <rect x="149.47" y="319.328" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 149.47 319.328)" fill="#3A57E8"/>
                        <rect x="203.936" y="99.543" width="310.286" height="77.5714" rx="38.7857" transform="rotate(45 203.936 99.543)" fill="#3A57E8"/>
                        <rect x="204.316" y="-229.172" width="543" height="77.5714" rx="38.7857" transform="rotate(45 204.316 -229.172)" fill="#3A57E8"/>
                     </g>
                  </svg>
               </div>
            </div>   
         </div>
      </section>
      </div>
    
    <!-- scripts.blade.php -->
    <script src="{{ asset('public/assets/js/core/libs.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/core/external.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/charts/widgetcharts.js') }}"></script>
    <script src="{{ asset('public/assets/js/charts/vectore-chart.js') }}"></script>
    <script src="{{ asset('public/assets/js/charts/dashboard.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/fslightbox.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/setting.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/slider-tabs.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/form-wizard.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('public/assets/js/hope-ui.js') }}" defer></script>
    
  </body>
</html>
