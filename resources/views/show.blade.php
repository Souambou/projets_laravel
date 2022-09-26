@extends('layout')
@section('content')

<h3 class="text-muted mb-1">Détails de l'étudiant</h3>
<table style="border: 0px;">
<tr>
    <td> 
    <p><b class="lbl">ID:</b> {{$student->id}}</p><br>
    <p><b class="lbl">NOM:</b>{{$student->nom}}</p><br>
    <p><b class="lbl">PRENOMS:</b>{{$student->prenom}}</p><br>
    <p><b class="lbl">EMAIL:</b>{{$student->email}}</p><br>
    <p><b class="lbl">NUMERO:</b>{{$student->numero}}</p><br>
    <p><b class="lbl">FILIERE:</b>{{$student->filiere}}</p><br>
    <td style="padding-left: 150px;">
         <p><b class="lbl"></b><img src="/image/{{$student->image}} " alt="" width="120" height="120"></p><br>
    </td>
   
    </td>
</tr>

</table>

@endsection