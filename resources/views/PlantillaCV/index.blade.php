<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hoja de vida</title>
    <style type="text/css">
        .container {
            width: 45%;
        }

        .imagen_foto {
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="imagen_foto">
            <img src="{{ $HojaVida->Foto }}" alt="Image not found" height="200" width="200">
        </div>
        <div class="texto_datos_personales">
            <h2>{{ $HojaVida->Nombre }}</h2>
            <h4>Edad {{ $HojaVida->Edad }} Años</h4>
            <h4>{{ $HojaVida->Ubicacion }}</h4>
            <h3>CONTACTO</h3>
            <h4>{{ $HojaVida->Celular }}</h4>
            <h4>{{ $HojaVida->Correo }}</h4>

            <h3>PERFIL PROFESIONAL</h3>
            <span style="font-size: 20px;">{{ $HojaVida->PerfilProfesional }}
            </span>
            <h3>CONOCIMIENTO EN LENGUAJES</h3>
            <ul>
                @foreach ($Habilidades as $item)
                    <li>{{ strtoupper($item) }}</li>
                @endforeach
            </ul>
            <h3>BASE DE DATOS</h3>
            <ul>
                <li>SQL SERVER</li>
                <li>ORACLE</li>
                <li>MYSQL</li>
            </ul>
            <h3>REFERENCIA PERSONAL</h3>
            <ul>
                <li>SQL SERVER</li>
                <li>ORACLE</li>
                <li>MYSQL</li>
            </ul>
            <h3>REFERENCIA PERSONAL</h3>
            <ul>
                <li>SQL SERVER</li>
                <li>ORACLE</li>
                <li>MYSQL</li>
            </ul>
            <h3>IDIOMAS</h3>
            <ul>
                <li>ESPAÑOL</li>
                <li>INGLES</li>
                <li>JAPONES</li>
            </ul>
        </div>
    </div>
</body>

</html>
