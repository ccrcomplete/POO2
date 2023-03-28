<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconne ct" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
</head>

<body class="">
<div class="container-fluid ">
  <div class="row " alt="">
    <!-- columna izquierda -->
    <div class="col-sm-2 bg-pantalla ">
    <div class="mt-3 px-2 ">
                    
                    <h4 class="ps-2 text-light"> <img src="img/icons8-c++-50 (1).png" width="35" height="35" alt="">   CodingLab</h4>
                </div>
                    <?php 
                        include_once("./db/ClassPoo.php");
                        $lista = new lista();
                        $lista->listaDash();
                    
                    ?>
                        </div>
    <!-- columna de la derecha -->
        <div class="col-sm-10  px-4">
            <!-- navbar-->
        <div class="row p-2">
        <div class="col-sm-3 mt-2 ml-3">
        <h5 clas><img src="img/menu.png" width="35" height="35" alt=""> ㅤDashboard</h5> 
            </div>
            <div class="col-sm-7 ">
            <form class="d-flex mt-1">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
            </div>
            <div class="col-sm-2 ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Prem Shahi
            </a>
            
            </div>
            </div>
            <!-- tarjetas -->
            <div class="row mt-2">
            <div class="col-sm-3 ">
            <div class="card" style="width: 15rem;">
        <div class="card-body">
        <h6 class="card-subtitle mb-2 text-muted">Total Order</h6>
        <h5 class="card-title">40,876ㅤㅤㅤㅤ<img src="img/flecha-hacia-arriba.png" class="arriba" width="50px" height="50px" alt="arriba"></h5>
        <h6 class="card-subtitle mb-2 text-muted">Up from yesterday</h6>
        
        </div>
    </div> 
            </div>
            
            <div class="col-sm-3 ">
            <div class="card" style="width: 15rem;">
        <div class="card-body">
        <h6 class="card-subtitle mb-2 text-muted">Total Sales</h6>
        <h5 class="card-title">38,876ㅤㅤㅤㅤ<img src="img/flecha-hacia-arriba.png" width="50px" height="50px" class="arriba " alt="arriba"></h5>
        <h6 class="card-subtitle mb-2 text-muted">Up from yesterday</h6>
        </div>
    </div>
            </div>
            <div class="col-sm-3 ">
            <div class="card" style="width: 15rem;">
        <div class="card-body">
        <h6 class="card-subtitle mb-2 text-muted">Total Profit</h6>
        <h5 class="card-title">12,876ㅤㅤㅤㅤ<img src="img/flecha-hacia-arriba.png" width="50px" height="50px" class="widh" alt="arriba"></h5>
        <h6 class="card-subtitle mb-2 text-muted">Up from yesterday</h6>
        </div>
    </div>
            </div>
            <div class="col-sm-3 "> 
            <div class="card" style="width: 15rem;">
        <div class="card-body">
        <h6 class="card-subtitle mb-2 text-muted">Total Return</h6>
        <h5 class="card-title">11,086ㅤㅤㅤㅤ<img src="img/flecha-hacia-abajo.png" width="50px" height="50px" class="abajo" alt="abajo"></h5>
        <h6 class="card-subtitle mb-2 text-muted">Down from yesterday</h6>
        </div>
    </div>
            </div>
            </div>
            <!-- parte de abajo -->
            <div class="row mt-3 ">
            <div class="col-sm-8 "> 
            <div class="card" style="width: 45rem;">
        <div class="card-body">
            <h4>Recent Sales</h4>
            <!-- tablaaa -->
            <table class="table">
    <thead>
        <tr>
        <th scope="col">Date</th>
        <th scope="col">Costumer</th>
        <th scope="col">Sales</th>
        <th scope="col">Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>02 Jan 2021</td>
        <td>Alex Doe</td>
        <td>Delivered</td>
        <td>$204.98</td>
        </tr>
        <tr>
        <td>02 Jan 2021</td>
        <td>David Mart</td>
        <td>Pending</td>
        <td>$24.55</td>
        </tr>
        <tr>
        <td>02 Jan 2021</td>
        <td>Roe Parter</td>
        <td>Returned</td>
        <td>$25.88</td>
        </tr>
        <tr>
        <td>02 Jan 2021</td>
        <td>Diana Penty</td>
        <td>Delivered</td>
        <td>$170.66</td>
        </tr>     
    </tbody>
    </table>  
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn btn-primary" type="button">See all</button>
    </div>
        </div>
        </div>
    </div> 
    <!--   top seling pro.  -->
    <div class="col-sm-4 "> 
    <div class="card" style="width: 25rem;">
        <div class="card-body">
        <h5>Top Seling Product</h5>
        <table class="table table-borderless">
        <tbody>
        <tr>      
        <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/76/Louis_Vuitton_logo_and_wordmark.svg/800px-Louis_Vuitton_logo_and_wordmark.svg.png" width="35px" class="img img-fluid ml-2" alt="...">
        Vuitton Sunglasses</td>     
        <td>$1142</td>
        </tr>
        <tr>      
        
        <td><img src="https://images.asos-media.com/products/asos-design-hourglass-high-rise-stretch-slim-straight-leg-jeans-in-vintage-wash/14577687-3?$n_640w$&wid=513&fit=constrain" width="50px"  class="img img-fluid" alt="...">Hourglass Jeans</td>      
        <td>$1567</td>
        </tr>
        <tr>      
        
        <td><img src="https://cdn-icons-png.flaticon.com/512/732/732229.png"  width="50px" class="img img-fluid" alt="nike">Nike Sport Shoe</td>     
        <td>$1234</td>
        </tr>
        <tr>        
        
        <td><img src="https://realstyle.therealreal.com/wp-content/uploads/2018/02/0313_HowToSpotRealHermesScarf_FeatureImg-360x360.jpg" width="50px"  class="img img-fluid" alt="...">Hermes Silk Scarves</td>      
        <td>$2312</td>
        </tr>
        
    </tbody>
    </table>
        </div>
        </div>
    </div>
        </div>
        </div>
        </div>


    </body>

    </html>