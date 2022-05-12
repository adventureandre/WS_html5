<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="js/modernizr.custom.64658.js"></script>
    <script>
        function teste(texto) {
            document.getElementById('teste').innerHTML += '<p>' + texto + '</p>';
        }
        window.onload = function () {
            if (Modernizr.localstorage) {
               teste('podemos armazenar offiline!')
            }
            if (Modernizr.geolocation) {
                teste('podemos te encontrar!')
            }
            };
    </script>
</head>
<body>
<div id="teste"></div>
</body>
</html>