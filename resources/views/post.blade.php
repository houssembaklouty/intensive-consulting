@extends('layouts.master')

@section('content')

<div class="masthead slide">
    <div class="item active" style="background-image: url( 
    {{ Voyager::image( $post->image ) }} );">
        <div class="container">
            
            <!-- 
            <ol class="breadcrumb">

                <li><a href="/" title="Accueil">Accueil</a></li>
                <li><a href="#" title="La societe">La societe</a></li>
                <li class="active">
                    
                </li>
            </ol> -->

            <div class="h1">{{ $category->name }}</div>
            <div class="h3"> 
            	{{ $post->title }}
            </div>
        </div>
    </div>
</div>

<div class="main">

    	{!! $post->body !!}
</div>

</div>

@endsection



    