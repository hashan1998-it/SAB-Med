 <!-- Back to top button -->
 <div class="back-to-top"></div>
 <header>
   <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
     <div class="container">
       <a class="navbar-brand" href="#"><span class="text-primary">SAB</span>-Med</a>

       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupport">
         <ul class="navbar-nav ml-auto">
           <li class="nav-item active p-2">
             <a class="nav-link" href="{{ url('/home') }}">Home</a>
           </li>
           <li class="nav-item p-2">
             <a class="nav-link" href={{ url('/feed') }}>Feed</a>
           </li>
           <li class="nav-item p-2">
             <a class="nav-link" href="#">Doctors</a>
           </li>
           <li class="nav-item p-2">
             <a class="nav-link" href="#">News</a>
           </li>
           <li class="nav-item p-2">
             <a class="nav-link" href="#">Contact</a>
           </li>

           @if (Route::has('login'))
               @auth
               <li class="nav-item">
                   <a class="nav-link" style="background-color:#00D9A5;color:white"  href="{{ url('/user_appointments') }}">My appoinmets</a>
               </li>
               <x-app-layout>
               </x-app-layout>
               @else
               <li class="nav-item">
                   <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
               </li>
               <li class="nav-item">
                   <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
               </li>
               @endauth
           @endif
         </ul>
       </div> <!-- .navbar-collapse -->
     </div> <!-- .container -->
   </nav>
 </header>
