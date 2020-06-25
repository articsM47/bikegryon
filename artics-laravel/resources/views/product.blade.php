@extends('template')


@section('contenu')
<div class="container">
<Div id="product">

<ul class="breadcrumb">
<button href="/catalogue" ><a href="/catalogue"><img src="http://127.0.0.1:8000/fonts/arrow_back.svg"></a></button>
  <li><a href="/catalogue">Les vélos</a> <span class="divider"></span></li>
  <li class="active">Le Produit</li>
</ul>
</div>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>



<div class="carousel-item">
  <img src="http://127.0.0.1:8000/pictures/products/product1.png" alt="..." width = 100%>
  <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <p>...</p>
  </div>
</div>



    <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>

    <li class="page-item justify-content-end">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
</Div>
  <!-- grid des produits -->
<h3>Dans la même catégorie</h3>
<div class="form-group text-right ">
    <a  href="/catalogue"type="button" class="badge badge-light ">Voir plus</a>
  </div>
</Div>
<Div id="catalogue" class="row row-cols-1 row-cols-md-3">

    </Div>
</Div>
@endsection
