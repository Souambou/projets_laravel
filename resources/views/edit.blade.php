@extends('layout')
@section('content')

<style>
  
</style>

<h3>Edition du profil de l'étudiant</h3>



      <form method="post" action="{{ route('students.update', $student->id ) }}" enctype="multipart/form-data">
          <div class="form-group">
            
              @csrf
              @method('PATCH')
           
              <label for="nom">NOM :</label>
              <input type="text" class="form-control" name="nom" value="{{$student->nom}}"/>
          </div>
  
          <div class="form-group">
              <label for="prenom">PRENOMS :</label>
              <input type="text" class="form-control" name="prenom" value="{{ $student->prenom }}"/>
          </div>
           <div class="form-group">
              <label for="email">EMAIL :</label>
              <input type="text" class="form-control" name="email" value="{{ $student->email }}"/>
          </div>
    
     <div class="form-group">
        <label for="phone">Numero:</label>
        <input type="text" class="form-control" name="phone" value="{{ $student->phone}}">
     </div><br>
     
     <div class="form-group">
        <label for="section">FILIERE:</label>
        <select name="filiere" id="" class="form-select"   >
            <option selected >{{$student->filiere}}    </option>
            <option value="Informatique">Informatique</option>
            <option value="Gestion des projets">Gestion des projets</option>
            <option value="Comptabilite">Comptabilité</option>
            <option value="MRH">Gestion des resources humaines</option>
            <option value="MAC">Marketing et action commerciale</option>
            <option value="journalisme">journalisme</option>

        </select>
     </div>
     
     <div class="form-group">
        <label for="image">IMAGE:</label>
        <input type="file" class="form-control" name="image" value="/image/{{ $student->phone}}">
     </div><br>
      <button type="reset" class="btn btn-danger mt-3">Rénitialiser</button>
     <button type="submit" class="btn btn-primary mt-3" style="float: right;">Mettre à jour</button>




      </form>
  </div>
</div>
@endsection