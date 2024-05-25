<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Biodata</h1>

    <form action="/welcome" method="POST">
        @csrf
        <label for="">Nama Depan</label><br>
        <input type="text" name="fullname"> <br><br>
        <label>Nama Belakang</label><br>
        <input type="text" name="hobby"><br><br>
        
        <label>Gender:</label><br>
        <input type="Radio">Male<br>
        <input type="Radio">female<br>
        <input type="Radio">other<br><br>
        
        <label>Nationality :</label><br>
        <select name="Nationality">
            <option>Indonesia</option>
            <option>China</option>
            <option>Zimbabwe</option>
            <option>India</option>
        </select><br><br>
        
        <label>Language Spoken :</label><br>
        <input type="checkbox">Bahasa Indonesia<br>
        <input type="checkbox">English<br>
        <input type="checkbox">other<br><br>

        <Textarea name="massage" rows="10" cols="30"></Textarea><br>

        <input type="submit" value="kirim">
    </form>


    <a href='/'>Back</a>
</body>
</html>