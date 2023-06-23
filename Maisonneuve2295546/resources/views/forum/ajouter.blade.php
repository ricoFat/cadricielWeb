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
                            <label for="titre">Titre </label>
                            <input type="text" name="titre" id="title_fr" class="form-control">
                            <label for="article">Article </label>
                            <textarea name="contenu" id="article_fr" class="form-control"></textarea>
                            <label for="title">Date de création </label>
                            <input type="date" name="date_creation" id="date_creation" class="form-control">
                            <label for="user_id_en">User ID</label>
                            <input type="text" name="etudiant_id" id="user_id_en" class="form-control" value="{{ auth()->user()->id }}" readonly>
                        </div>

                        <!-- English Tab -->
                        <div class="tab-pane fade" id="en-tab">
                            <label for="titre_en">Title </label>
                            <input type="text" name="titre" id="title_en" class="form-control">
                            <label for="article_en">Article </label>
                            <textarea name="contenu" id="contenu_en" class="form-control"></textarea>
                            <label for="titre_en">Date de création </label>
                            <input type="date" name="date_creation" id="t" class="form-control">
                            
                            <input type="hidden" name="etudiant_id" id="user_id_en" class="form-control" value="{{ auth()->user()->id }}" readonly>
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
