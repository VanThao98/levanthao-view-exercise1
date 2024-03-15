<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <title> Làm quen nhanh với laravel cơ bản</title> 
         <!-- CSS And JavaScript --> 
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-***********" crossorigin="anonymous" />

        </head> 

   <body> 
        <div class="container"> 
           <nav class="navbar navbar-default"> 
                <!-- Navbar Contents --> 
                <div style="border-radius:5px;background-color: rgba(211, 211, 211, 0.5) ; border: 1px solid; width: 55%; display: flex; justify-content: space-between;padding: 20px;" class="nav">
                    <h3>
                        Task list
                    </h3>
                    <i style="border: 1px solid; padding:5px;" class="fa fa-bars fa-2x" aria-hidden="true"></i>
                </div>
           </nav> 
           @yield('content')
        </div> 

    </body> 
 </html> 