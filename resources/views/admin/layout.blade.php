
<!DOCTYPE html>
<html lang="bn en">

<head>

     @include('layout.head')

     @yield('title')   
     
 
</head>


<body>

     <!--  layoutheader -->

        @include('admin.header')

     <!--  end layoutheader -->


     <!--  topnav -->

        @include('admin.navbar')

     <!--  end topnav -->
     

        <!--row -->
     <div class="row">


         @yield('content')

         
     </div>

     <!-- end row -->


      
     <!-- footer -->
 
    
     @include ('layout.footer')

     <!-- end footer -->


  
</body>
</html>
