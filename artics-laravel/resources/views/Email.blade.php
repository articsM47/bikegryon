
@extends('template')

@section('contenu')
<style>* {
  margin: 0;
  padding: 0;
}

body {
  font-family: sans-serif;
  font-weight: 300;
}

h1, p {
  line-height: 1.5;
}

h1 {
  font-size: 3rem;
  font-weight: inherit;
  line-height: 1.5;
  color: slateblue;
}

p {
  margin-bottom: 2rem;
  font-size: 1.5rem;
  color: #282828;
}

button {
  padding: 0.5rem 2rem;
  border: none;
  border-radius: 2px;
  font-size: 1.2rem;
  font-weight: inherit;
  letter-spacing: 0.03rem;
  background: #fff;
  -webkit-box-shadow: 0 4px 6px rgba(50,50,93,.11), 0 1px 3px rgba(0,0,0,.08);
    box-shadow: 0 4px 6px rgba(50,50,93,.11), 0 1px 3px rgba(0,0,0,.08);
  color: #282828;
  cursor: pointer;
}

header {
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background: #eee;
}


form {
  width: 600px;
  margin: 2em auto;

  font-family: 'Source Sans Pro', sans-serif;
  font-weight: 300;
  font-size: 22px;
  }
legend {
    font-size: 2em;
    margin-bottom: 1em;
    width: 100%;
    border-bottom: @border;
  }




.float-label {
  .control {
    float: left;
    position: relative;
    width: 100%;
    border-bottom: @border;
    padding-top: @padding + @label-font-size;
    padding-bottom: @padding;

  }
    .small {
      width: 30%;
      border-right: @border;
    }

    .medium {
      width: 70%;
      padding-left: @padding;
    }

    :last-child {
     border: 0;
    }
  }

  input, textarea {
    display: block;
    width: 100%;
    border: 0;
    outline: 0;
    resize: none;
  }

   label {
      position: absolute;
      top: 10px;
      transition: top 0.7s ease, opacity 0.7s ease;
      opacity: 0;


      font-size: @label-font-size;
      font-weight: 600;
      color: #ccc;
    }


   :valid + label {
      opacity: 1;
      top: 3px;
    }

    :focus + label {
      color: #2c8efe;
    }
  }
}</style>

<header>
  <h1>Salut {{$prenom ?? ''}} !</h1>
  <p>Bike Test Gryon 2020 aura lieu dans Quelques jours !</p>
  <p> Vu que tu n’as pas encore de compte sur bikegryon.ch, on t’offre un moyen de pouvoir visualiser ta wishlist sur n’importe lesquels de tes appareil électroniques pendant l’événement. Cool non ?</p>
  <button href="http://127.0.0.1:8000/Catalogue">Voir ma wishlist</button>
</header>


    <h4 class="card-title text-center">récaputilatif de commande</h4>
<form class="float-label" spellcheck="false">
  <legend>{{$nom ?? ''}} {{$prenom ?? ''}} Né le {{$birthday ?? ''}}</legend>
<label class="form-check-label checkBox" for="vendredi">
            Vendredi
            <input type="checkbox" id="vendredi" name="vendredi" value="{{$vendredi ?? ''}}">
            <span class="checkmark"></span>
          </label>
          <label class="form-check-label checkBox" for="vendredi">
            Samedi
            <input type="checkbox" id="samedi" name="samedi" value="{{$samedi ?? ''}}">
            <span class="checkmark"></span>
          </label>
          <label class="form-check-label checkBox" for="vendredi">
            Dimanche
            <input type="checkbox" id="dimanche" name="dimanche" value="{{$dimanche ?? ''}}">
            <span class="checkmark"></span>
          </label>
</form>
<button href="http://127.0.0.1:8000/Catalogue">Voir ma wishlist</button>




@endsection
