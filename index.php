<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Preview</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="container">
            <h1> Preview Imagem </h1><br><br>
            <input type="file" name="imagem" id="imagem" onchange="previewImagem()"><br><br>
            <img id="preview" style="width: 150px; height: 150px;"><br>    
            <input type="submit" value="Enviar">
        </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="app.js"></script>
</body>
</html>
