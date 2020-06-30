@extends('template')

@section('contenu')
<div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">C’est quoi le Bike Test Gryon ?</h1>
        <p class="mt-5" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec integer sit turpis ipsum sed. Elementum amet vitae morbi at vel gravida amet sit. Velit turpis ultricies urna, quam ornare. Enim imperdiet sed phasellus massa ac, nibh turpis a. Purus, aliquam mi velit ut. A, rutrum odio diam, pellentesque pharetra euismod mauris eu.</p>
      </div>
      <div class="card-deck">
  <div class="card">
    <div class="card-body">
      <h3 class="card-title text-center">Vendredi</h3>
      <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra eu feugiat bland
adipiscing elit. Ut viverra eu feugiat bland
adipiscing elit. Ut viverra eu feugiat bland
</p>
<h4 class="text-center">20.-</h4>
    </div>

  </div>

  <div class="card">

    <div class="card-body">
      <h3 class="card-title text-center">Samedi</h3>
      <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra eu feugiat bland
adipiscing elit. Ut viverra eu feugiat bland
adipiscing elit. Ut viverra eu feugiat bland

</p>
<h4 class="text-center">20.-</h4>
    </div>

  </div>

  <div class="card">

    <div class="card-body">
      <h3 class="card-title text-center">Dimanche</h3>
      <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra eu feugiat bland
adipiscing elit. Ut viverra eu feugiat bland
adipiscing elit. Ut viverra eu feugiat bland

</p>
<h4 class="text-center">20.-</h4>
    </div>

  </div>
</div>

<br>
<br>
<a type="button" class="btn btn-secondary btn-lg btn-block" href="/Inscriptions" style="background:#FF9900">Je réserve mon billet !</a>


<!-- fake content -->
<h2>Comment ca fonctionne</h2>
<br>
<div class="w-100">
  <img src="http://127.0.0.1:8000/fonts/"></img>
</div>

<h2>Les parcours de test</h2>
<br>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://127.0.0.1:8000/fonts/mountains.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="http://127.0.0.1:8000/fonts/mountains.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="http://127.0.0.1:8000/fonts/mountains.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="http://127.0.0.1:8000/fonts/mountains.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="http://127.0.0.1:8000/fonts/mountains.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="table">

<table style="width:100%">
  <thead>
<tr>
    <th>Type des vélos</th>
    <th>Parcours vert</th>
    <th>Parcours rouge</th>
    <th>Parcours noir</th>
    <th>Parcours bleu</th>
    <th>Piste VTT</th>
  </tr>
</thead>
<tbody>


  <tr>
    <th>E-Bike (trekking)</th>
    <th>        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span></th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
    </th>
    <th>        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span></th>
    <th>        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span></th>
    <th>        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span></th>
  </tr>


  <tr>
    <th>E-Road</th>
    <th>        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span></th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
    </th>
    <th>        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span></th>
    <th>        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span></th>
    <th>        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span></th>
  </tr>


  <tr>
    <th>E-VTT</th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
    </th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star "></span>
    </th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
    </th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
    </th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
    </th>
  </tr>


  <tr>
    <th>Gravel</th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
    </th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star "></span>
    </th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
    </th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
    </th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
    </th>
  </tr>
  <tr>
    <th>Junior</th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
    </th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
    </th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
    </th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
    </th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star "></span>
    </th>
  </tr>
  <tr>


    <th>Road</th>
    <th>        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span></th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
    </th>
    <th>        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span></th>
    <th>        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span></th>
    <th>        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span></th>
  </tr>
  <tr>
    <th>VTT</th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
    </th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
    </th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
    </th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
    </th>
    <th>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
    </th>
  </tr>
</tbody>
</table>

<span>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span > Pas raccomandé</span>
        <span class="fa fa-star  "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
</span>
<span>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span> Peu raccomandé</span>
        <span class="fa fa-star checked "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
</span>
<span>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span> Possible</span>
        <span class="fa fa-star checked "></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star "></span>
</span>
<span>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span> Raccomandé</span>
        <span class="fa fa-star checked "></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
</span>
</div>

    </div>

@endsection
