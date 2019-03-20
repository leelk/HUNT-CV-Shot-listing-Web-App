
@foreach ($vacancies as $vacancy)

   {{--<h5> {{$vacancy->title}}</h5>--}}



   <div class="card text-center">
      <div class="card-header">
         Featured
      </div>
      <div class="card-body">
         <h5 class="card-title"><strong>Title : {{$vacancy->title}}</strong></h5>
         <p class="card-text">Description : {{$vacancy->description}}</p>
         <a href="#" class="btn btn-primary">Created at : {{$vacancy->created_at->diffForHumans()}}</a>
      </div>
      <div class="{{$vacancy->created_at->diffForHumans()}}">

      </div>
   </div>








@endforeach