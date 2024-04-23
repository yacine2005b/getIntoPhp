@extends('layout.layout')

@section('content')
<section>
    @include('shared.success_affichage')
   @include('shared.submit_affichage')
   <div class="allaffichages">
    @foreach ($affichages as $affichage)
      <a href="{{route('affichages.show',$affichage->id)}}">
        <div class="singleAffichage">

            <div class="top">
                @if ($affichage->user->role == 'parent')
                <h4 style="color: green;text-transform :uppercase">{{$affichage->user->role}} <b style="color: black;text-transform:initial">{{$affichage->user->name}}</b></h4>
                @else
                <h4 style="color: red;text-transform :uppercase">{{$affichage->user->role}} <b style="color: black;text-transform:initial">{{$affichage->user->name}}</b></h4>
                @endif
             @auth
             @if ($affichage->user->id  == Auth::user()->id)
             <div>@include('shared.deleteAffichage')</div>
             @endif
             @endauth


             </div>
             <h6>{{$affichage->created_at}}</h6>


          <p class="affichage">{{$affichage->content}}</p>
          <p class="comment"><a href="">{{$affichage->comments->count()}} comments</a></p>
        </div></a>

    @endforeach
    {{$affichages->links()}}
   </div>

</section>

@endsection

