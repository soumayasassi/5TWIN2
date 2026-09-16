@foreach($articles as $article)
<x-article-card
:titre="$article['titre']"
:auteur="$article['auteur']"
:contenu="$article['contenu']">


</x-article-card>

    <x-alert type="success">
        Article cré avec succés
    </x-alert>
<x-alert type="info">
    juste comme info
</x-alert>
<x-alert type="danger">
    Attention
</x-alert>
@endforeach
