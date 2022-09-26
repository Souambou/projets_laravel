@extends('layout')
@section('content')

<h3>Ajouter un étudiant</h3>
<form method="POST"   action="{{route('students.store')}}" enctype="multipart/form-data">
    @csrf

     <div class="form-group">
        <label for="nom">NOM:</label>
        <input type="text" class="form-control" name="nom">
     </div><br>
      <div class="form-group">
        <label for="prenom">PRENOMS:</label>
        <input type="text" class="form-control" name="prenom">
     </div><br>
    
    
     
     <div class="form-group">
        <label for="text">Email:</label>
        <input type="email" class="form-control" name="emaiil">
     </div><br>
     
     <div class="form-group">
        <label for="phone">Numero:</label>
        <input type="text" class="form-control" name="phone">
     </div><br>
     
     <div class="form-group">
        <label for="section">FILIERE:</label>
        <select name="filiere" id="" class="form-select">
            <option selected>Choisir une filière</option>
            <option value="Informatique">Informatique</option>
            <option value="Gestion des projets">Gestion des projets</option>
            <option value="Comptabilite">Comptabilité</option>
            <option value="MRH">Gestion des resources humaines</option>
            <option value="MAC">Marketing et action commerciale</option>
            <option value="journalisme">journalisme</option>

        </select>
     </div><br>
     
     <div class="form-group">
        <label for="image">IMAGE:</label>
        <input type="file" class="form-control" name="image">
     </div><br>
      <button type="reset" class="btn btn-danger mt-3">Rénitialiser</button>
     <button type="submit" class="btn btn-primary mt-3" style="float: right;">Ajouter l'étudiant </button>
</form>
@endsection('')