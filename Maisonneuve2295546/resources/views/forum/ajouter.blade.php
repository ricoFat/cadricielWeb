@extends('.layouts.app')
@section('title', 'Ajout article')
@section('titleHeader', 'Ajouter un article')
@section('content')

<div class="row mt-4 justify-content-center">
    <div class="col-6">
        <div class="card">
            <form method="post">
                @csrf
                <div class="card-header">
                    Formulaire
                </div>
                  <!-- Language Tabs -->
                  <ul class="nav nav-tabs mt-3">
                    <li class="nav-item">
                        <a class="nav-link active" id="fr-tab-btn" data-bs-toggle="tab" href="#fr-tab">Français</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="en-tab-btn" data-bs-toggle="tab" href="#en-tab">English</a>
                    </li>
                </ul>
                <div class="card-body">
                    <!-- French Tab -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="fr-tab">
                            <label for="titre_fr">Titre </label>
                            <input type="text" name="titre_fr" id="title_fr" class="form-control">
                            <label for="article_fr">Article </label>
                            <textarea name="contenu_fr" id="article_fr" class="form-control"></textarea>
                        </div>

                        <!-- English Tab -->
                        <div class="tab-pane fade" id="en-tab">
                            <label for="title_en">Title </label>
                            <input type="text" name="titre" id="title_en" class="form-control">
                            <label for="article_en">Article </label>
                            <textarea name="contenu" id="article_en" class="form-control"></textarea>
                        </div>
                    </div>
              
                </div>
                <div class="card-footer text-center">
                    <input type="submit" class="btn btn-success" value="Sauvegarder">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
