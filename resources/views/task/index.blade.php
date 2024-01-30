<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de tareas</title>
</head>

<body>
    {{-- Agregar tareas --}}
    <form action="{{ route('task.add') }}" method="post">
        @csrf
        <input type="text" name="name" id="task">
        <input type="submit" value="Agregar tarea">
    </form>
    <br>
    <hr>
    {{-- Tabla de tareas --}}
    <table border="1">
        <tr>
            <th colspan="2">Lista de tareas</th>
        </tr>
        <tr>
            <td>Nombre de la tarea</td>
            <td>Acciones</td>
        </tr>
        {{-- Informacion de la tabla --}}
        @foreach ($name as $task)
            <tr>
                <td>{{$task->name}}</td>
                <td>
                    <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
