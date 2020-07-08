@extends('template')

@section('contenu')
<div class="container">
  <div id="product">
    <!-- Breadcrumb -->
    <div class="row">
      <div class="col-sm-12">
        <ul class="breadcrumb">
          <button href="/Catalogue" class="button-breadcrumb"><a href="/Catalogue"><img src="http://pingouin1.heig-vd.ch/artics/fonts/arrow_back.svg" alt="arrow_back"></a></button>
          <li><a href="/Catalogue" class="breadcrumb-catalogue">Les vélos à tester</a> <span class="divider"></span></li>
          <li class="breadcrumb-catalogue">{{$bike -> category}}<span class="divider"></span></li>
          <li class="active">{{$bike -> shortDescr}}</li>
        </ul>
      </div>
    </div>

    <!-- Brand image -->
    <div class="row" style="margin-top: 50px; margin-bottom: 20px">
      <div class="col-sm-12">
        <img src="http://pingouin1.heig-vd.ch/artics/pictures/brands/{{$bike -> brand->picture}}" alt="{{$bike -> brand->shortDescr}}" width=100px>
      </div>
    </div>
    <!-- Product info -->
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h1 class="card-title product-title">{{$bike -> shortDescr}}</h3>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body product-descr">
            <p class="card-text product-descr-text">{{$bike -> longDescr}}</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Product height and category -->
    <div class="row">
      <div class="col-sm-6">
        <table>
          <tr style="text-align: center;">
            <td>
              <img src="http://pingouin1.heig-vd.ch/artics/fonts/height_bike.svg" alt="height_bike" width="30px">
            </td>
            <td>
              <img src="http://pingouin1.heig-vd.ch/artics/mountain.svg" alt="mountain" width="40px">
            </td>
          </tr>
          <tr style="text-align: center;">
            <td width="100px" height="50px">
              <p class="card-text">{{$bike -> frameSize}} {{$bike -> frameUnit}}</p>
            </td>
            <td>
              <p class="card-text">{{$bike -> category}}</p>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-sm-6">
        <button type="button" id="wish{{$bike -> id}}" class="button-wish notWished" onClick="addOrDelWish()"><span>Ajouter à ma liste</span></button>
        <script>
          let wishlist = JSON.parse(localStorage.getItem('wishlist'));
          let wishes = [];
          let product = {
            "id": {
              {
                $bike - > id
              }
            },
            "shortDescr": "{{$bike -> shortDescr}}",
            "longDescr": "{{$bike -> longDescr}}",
            "distinctiveSign": "{{$bike -> distinctiveSign}}",
            "brand_id": "{{$bike -> brand_id}}",
            "picture": "{{$bike -> picture}}",
            "frameSize": "{{$bike -> frameSize}}",
            "frameUnit": "{{$bike -> frameUnit}}",
            "category": "{{$bike -> category}}"
          };

          // Initial button
          wishlist.forEach(wish => {
            if ({
                {
                  $bike - > id
                }
              } === wish.id) {
              document.getElementById("wish{{$bike -> id}}").innerHTML = "Retirer de ma liste";
              document.getElementById("wish{{$bike -> id}}").className = "button-wish wished";
            }
          });

          //button action & name
          function wishlistAdd() {
            wishlist.push(product);
            let data = JSON.stringify(wishlist);
            localStorage.setItem('wishlist', data);
          }

          function wishlistDel() {
            wishlist = wishlist.filter(ele => ele.id != product.id);
            let data = JSON.stringify(wishlist);
            localStorage.setItem('wishlist', data);
          }

          function addOrDelWish() {
            if (document.getElementById("wish{{$bike -> id}}").className == "button-wish notWished") {
              wishlistAdd();
              document.getElementById("wish{{$bike -> id}}").innerHTML = "Retirer de ma liste";
              document.getElementById("wish{{$bike -> id}}").className = "button-wish wished";
            } else if (document.getElementById("wish{{$bike -> id}}").className == "button-wish wished") {
              wishlistDel();
              document.getElementById("wish{{$bike -> id}}").innerHTML = "Ajouter à ma liste";
              document.getElementById("wish{{$bike -> id}}").className = "button-wish notWished";
            } else {
              console.log("Cette condition ne devrait jamais avoir lieu !");
            }
          }
        </script>
      </div>

    </div>
    <img src="http://pingouin1.heig-vd.ch/artics/pictures/products/{{$bike -> picture}}" alt="{{$bike -> shortDescr}}" width=100%>
  </div>
</div>



@endsection