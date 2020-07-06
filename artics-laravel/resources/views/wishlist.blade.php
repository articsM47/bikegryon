@extends('template')

@section('contenu')

<h1>Ma liste d'envie<img src="http://127.0.0.1:8000/fonts/wishlist.svg" alt="wishlist"></h1>


<!-- clear localstorage wishlist -->
<button type="button" id= "wishlistDel" class="btn btn-primary float-right">Vider ma liste</button>
<script>
document.getElementById("wishlistDel").addEventListener("click", cleanWishlist);

function cleanWishlist() {

  localStorage.removeItem('wishlist');
  location.reload();
}
</script>

<!-- wishlist's pdf creator -->
<!-- <button type="button" id= "pdf_creator" class="btn btn-primary float-right">Télécharger ma list</button>

<script>
document.getElementById("pdf_creator").addEventListener("click", createpdf);


function createpdf() {
  var employees = [
    {"firstName":"John", "lastName":"Doe"}, 
    {"firstName":"Anna", "lastName":"Smith"},
    {"firstName":"Peter", "lastName":"Jones"}
];
  var doc = new jsPDF();
employees.forEach(function(employee, i){
    doc.text(20, 10 + (i * 10), 
        "First Name: " + employee.firstName +
        "Last Name: " + employee.lastName);
});
doc.save('Test.pdf');
}
</script> -->


<!-- grid with wishlist's products -->
<div id="wishlist_products" class="row row-cols-1 row-cols-md-3">

</div>



<!-- product's carousel -->
    <h1>Les plus aimés dans la communauté</h1>
    <div id="advice" class="row row-cols-1 row-cols-md-3">

</div>

@endsection
