@extends('template')

@section('contenu')
<div class="container">
    <h1 class="title-page">Informations pratiques</h1>
    <div class="info-block-content">
        <div class="row">
            <div class="col-sm-offset-3 col-sm-6">
                <div class="info-border">
                    <input type="checkbox" id="faq-1" class="input-info">
                    <h3> <label class="info-title" for="faq-1">Les tests</label></h3>
                    <div class="info-content">
                        <ul>
                            <li> Casque obligatoire <img src="http://pingouin1.heig-vd.ch/artics/fonts/error_outline.svg" alt="add_circle"> 
                            Prends ton casque et si possible tes pédales pour faciliter la préparation du vélo.</li>
                            <li>Ta carte d’identité te sera demandé avant un test</li>
                            <li>Un Bike-Wash est à disposition avec des produits de nettoyage! Du coup, merci
                                de retourner le vélo propre après ton ride</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-offset-3 col-sm-6">
                <div class="info-border">
                    <input type="checkbox" id="faq-2" class="input-info">
                    <h3> <label class="info-title" for="faq-2">Les lieux</label></h3>
                    <div class="info-content">
                        <ul>
                            <li>Des vestiaires et des douches sont à disposition gratuitement à la grande salle</li>
                            <li>Un PUMPTRACK gratuit spécialement installé pour l'événement.</li>
                            <li>Gryon Parc (mini-golf, petit train, jeux, tyrolienne, etc) à proximité occupent les enfants pour ceux qui viennent en famille.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-offset-3 col-sm-6">
                <div class="info-border">
                    <input type="checkbox" id="faq-3" class="input-info">
                    <h3> <label class="info-title" for="faq-3">La nourriture</label></h3>
                    <div class="info-content">
                        <ul>
                            <li> Un cantine sur place te servira à boire et à manger. Tous les jours: cafés, gâteaux,
                                boissons froides, bières artisanales, repas, vins, et plein d’autres choses !</li>
                            <li>Vendredi Geneviève, Sylviane and Friends te serviront les pâtes et la soupe</li>
                            <li>Samedi et dimanche le Ski Club de Gryon et le restaurant Cookie family te serviront à boire, soupe et autres délice</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-offset-3 col-sm-6">
                <div class="info-border">
                    <input type="checkbox" id="faq-4" class="input-info">
                    <h3> <label class="info-title" for="faq-4">Accès</label></h3>
                    <div class="info-content">
                        <ul>
                            <li> Accès en train : Le train BVB au départ de Bex t'amène directement sur-place (Barboleuse). Il y un train par heure</li>
                            <li>Accès en voiture : Sortie autoroute Aigle puis suivre Ollon, puis Villars et enfin Gryon. Ou sortie autoroute
                                Bex puis traverser Bex et suivre Gryon. Adresse GPS: Place de Barboleuse 1882 Gryon</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection