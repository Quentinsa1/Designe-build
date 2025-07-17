@extends('partials.template')

@section('content')
<div class="page-content">
    <div class="container my-5">
        <h2 class="text-center mb-4">Foire aux Questions</h2>

        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                        Qu'est-ce que 7Elite Design & Build ?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        7Elite est une entreprise spécialisée dans la conception et la réalisation de projets architecturaux clé en main.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="faq2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                        Quels types de projets réalisez-vous ?
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Nous réalisons des projets résidentiels, commerciaux, institutionnels et industriels.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="faq3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                        Où êtes-vous situés ?
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Nos bureaux sont basés à Cotonou, Bénin, avec des représentations en France.
                    </div>
                </div>
            </div>

            <!-- Ajoute autant de questions que tu veux ici -->
        </div>
    </div>
</div>
@endsection
