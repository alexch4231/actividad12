<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superheroes table</title>
</head>
<body>
    <h1>Superheroes</h1>

    <hr>
        <a href="{{ route('superheroes.create') }}">Create Superheroe</a>
    <hr>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>universe_id</th>
                <th>gender_id</th>
                <th>Name</th>
                <th>realName</th>
                <th>Picture</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($superheroes as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->universe_id}}</td>
                <td>{{$item->gender_id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->realName}}</td>
                <td>{{$item->Picture}}</td>
                <td>
                    <a href="{{ route('superheroes.show', $item->id) }}">Show</a>
                    <a href="{{ route('superheroes.edit', $item->id) }}">Edit</a>

                    <form action="{{ route('superheroes.destroy', $item->id) }}"method="post">
                        @csrf 
                        @method('delete')
                        <input type="submit" value="Delete" onclick="return confirm('Are you pretty sure? There is no way back')">
                    </form>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    
</body>
</html>