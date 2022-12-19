<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>php badwords</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main class="container py-3">
        <div class="m-3">
            <label class="form-label">Inserisci un paragrafo</label>
            <textarea class="form-control" name="paragraph"></textarea>
        </div>
        <div class="m-3">
            <label for="exampleFormControlInput1" class="form-label">Inserisci parola da censurare</label>
            <input type="text" class="form-control" name="word" placeholder="Parola">
        </div>
        <button class="m-3 btn btn-outline-primary">Invia dati</button>
    </main>

    
    
</body>
</html>