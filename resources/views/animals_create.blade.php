<html>

<head>
    <title>Create Animal</title>
</head>

<body>
    <h1>Create Animal</h1>
    <form action="/create_animal" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name">
        <br>
        <br>
        <label>Age:</label>
        <input type="number" name="age">
        <br>
        <br>
        <label>Species:</label>
        <pre>
            {{ json_encode($species) }}
        </pre>
        <select name="species">
            @foreach ($species as $kind)
                <option>{{ $kind }}</option>
            @endforeach
        </select>
        <br><br>
        <button>
            Save
        </button>
    </form>
</body>

</html>
