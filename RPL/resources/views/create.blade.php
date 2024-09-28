<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT DATA PEMAKAIAN</title>
    <link rel="stylesheet" href="style\inputan.css">
</head>
<body>
    <h1>PEMAKAIAN</h1>

    <form action="/create" method="POST">
        @csrf
        <label for="pemakaian">Pemakaian:</label>
        <input type="text" id="pemakaian" name="pemakaian" required><br><br>

        <label for="budget">Budget:</label>
        <input type="number" step="0.01" id="budget" name="budget" required><br><br>

        <button type="submit">Simpan</button>
    </form>
    <script src="script/inputan.js"></script>
</body>
</html>
