@extends ('layout')
<h1> Projekat velike vaznosti</h1>
<span class="h1">Forma za izradu projekta</span>
@section ('title', 'Adnane izdrzi')
@section ('content')
    <form method="POST" action="/projects">
      {{ csrf_field() }}
      <div class="form-group">
         <label class="form-label" for="input-example-1">Ime projekta</label>
         <input class="form-input" type="text" name='title' id="input-example-1" placeholder="ime projekta">
   </div>
   <div class="form-group">
         <label class="form-label" for="input-example-3">Upisati nesto</label>
         <textarea class="form-input" id="input-example-3" name='description' placeholder="Upisati nesto" rows="3"></textarea>
   </div>
     <div>
         <button class="btn btn-success">Izradi projekat</button>
         <button class="btn btn-error">Izbrisi  projekat</button>
     </div>
    </form>


@endsection
