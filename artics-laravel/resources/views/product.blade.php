@extends('template')


@section('contenu')
<div class="container">
<Div id="product">

<ul class="breadcrumb">
<button href="/Catalogue" ><a href="/Catalogue"><img src="http://127.0.0.1:8000/fonts/arrow_back.svg"></a></button>
  <li><a href="/Catalogue">Les vélos</a> <span class="divider"></span></li>
  <li class="active">Le Produit</li>
</ul>
</div>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">BMC</h5>
         <h3 class="card-title">E-Bike 700</h3>
        <p class="card-text">Parfait pour la montagne</p>
        <p class="card-text">50 cm</p>
        <p class="card-text">+14 ans</p>

      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">

        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra eu feugiat blandit amet, id vitae, interdum vel. Mauris orci et gravida pellentesque. Massa risus nunc nullam imperdiet tortor scelerisque elementum. </p>
        <a href="#" class="btn btn-primary">S’en souvenir</a>
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
    <a  href="/Catalogue"type="button" class="badge badge-light ">Voir plus</a>
  </div>
</Div>
<Div id="catalogue" class="row row-cols-1 row-cols-md-3">

    </Div>
</Div>
@endsection
