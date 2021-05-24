@extends('home')
@section('content')
    <div class="album py-5 bg-light">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
{{--            {{dump($produits)}}--}}
            @foreach($produits as $produit)
            <div class="col">
                <div class="card shadow-sm">
{{--                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"  role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>--}}
                    <img class="card-img-top"  alt="Card image cap" src="{{ asset('produits/'.$produit->photo_principale) }}">
                    <div class="card-body">
                        <p class="card-text">{{$produit->nom}} <br> {{$produit->description}} <br>
                            <span class="badge bg-info"><a class="text-white" href="{{route('voir_produit_par_cat',['id'=>$produit->category->id])}}">{{$produit->category->nom}}</a></span></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">{{ number_format($produit->prix_ht,2) }} €</span>
                            <a href="{{route('voir_produit', ['id'=>$produit->id])}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
