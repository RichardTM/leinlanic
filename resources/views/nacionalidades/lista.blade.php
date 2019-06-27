
</head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<body>
<table  id="customers">
<thead>
    <tr>
    <th>Nacionalidad</th>
    <th>Opciones</th>
    </tr>
</thead>
<tbody>
@foreach ($rs as $item)
<tr>
    <td>{{$item->nacionalidad}}</td>

    <td>
    <a href="/nacionalidades/create" ><button type="button" class="button button1">Agregar </a></button>

   <a href="/nacionalidades/edit/{{$item->id}}"><button type="button" class="button button1">Editar </a></button>

<form action="{{url('nacionalidades', $item->id)}}"  method= "POST" role="form" id="delete_form_{{$item->id}}">


    @csrf()
     @method('DELETE')

     <a href= "javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();">
     <button type=".button" class="button button2">Eliminar</button></a>

</form>

   </td>
</tr>
@endforeach

</tbody>
</table>
</body>
</html>

