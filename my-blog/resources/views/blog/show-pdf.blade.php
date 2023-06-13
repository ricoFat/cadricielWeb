<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $blogPost->title }}</h1>
    <p> {!! $blogPost->body !!}</p>
    <p><strong>Auteur:</strong>{{ $blogPost->blogHasUser->name}}</p>
    <p>
        <strong>Catégorie:</strong>
        @isset($blogPost->blogHasCategory)
        <strong>Categorie :</strong> {{ $blogPost->blogHasCategory->category}}
        @endisset
    </p>
</body>
</html>