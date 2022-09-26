@extends("layout")
@section("content")

<h3>Liste des étudiants</h3>

<div class="uper">



  <table class="table table-striped">

    <thead>
        <tr>
          <td>ID</td>
          <td>NOMS</td>
          <td>PRENOMS</td>
          <td>EMAIL</td>
          <td>NUMERO</td>
          <td>filiere</td>
          <td>IMAGE</td>
          <td colspan="2">ACTIONS</td>
        </tr>
    </thead>

    <tbody>
        <!--  on utilises la boucle forearch et on recupere la variable créer au niveau du controller -->
        @foreach($students as $students)
        <tr class="mt-2">
            <td>{{$students->id}}</td>
            <td>{{$students->nom}}</td>
            <td>{{$students->prenom}}</td>
            <td>{{$students->email}}</td>
            <td>{{$students->phone}}</td>
            <td>{{$students->filiere}}</td>

            <td><img src="/image/{{$students->image}}" alt="" width="96" height="96" class="img-circle"></td>

            
                <td class="mt-3"><a href="{{route('students.show', $students->id)}}" class="btn btn-dark"><i class="fas fa-eye"></i></a></td>
                
                    
            <td ><a href="{{ route('students.edit', $students->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
            <td>
               
                 <form method="POST"   action="{{ route('students.destroy', $students->id)}}"> 
                        @csrf 
                        @method('DELETE')
                
                    <button class="btn btn-danger" type="submit">
                        <i class=" fas fa-trash-alt fa-0x"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>






@endsection