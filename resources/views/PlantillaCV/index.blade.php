<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hoja de vida</title>
    <style type="text/css">
        @page {
            margin: 0px 0px;
        }

        .Container_Color_fondo {
            position: relative;
            background-color: #484E5E;
            width: 40%;
            height: 100rem;
            left: 0%;
            top: 0%;
        }

        .imagen_foto {
            background-color: white;
            position: relative;
            width: 200px;
            height: 200px;
            top: 15px;
            left: 15%;
        }

        .texto_datos_personales {
            color: white;
            width: 100%;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="Container_Color_fondo">
        <div class="imagen_foto">
            <img src="{{ asset('img/foto.png') }}" alt="Image not found" height="200" width="200">
        </div>
        <div class="texto_datos_personales">
            <h2>{{ $HojaVida->Nombre }}</h2>
            <h4>{{ $HojaVida->Cargo }}</h4>
            <h3>CONTACTO</h3>
            <h4>{{ $HojaVida->Celular }} - {{ $HojaVida->Fijo }}</h4>
            <h4>{{ $HojaVida->Correo }}</h4>
            <h4>{{ $HojaVida->Ubicacion }}</h4>
            <h3>PERFIL PROFESIONAL</h3>
            <span style="font-size: 20px;">{{ $HojaVida->PerfilProfesional }}
            </span>
            <h3>LENGUAJES DE PROGRAMACION</h3>
            <ul>
                <li>C#</li>
                <li>JAVA</li>
                <li>PHP</li>
                <li>JAVASCRIPT</li>
                <li>C#</li>
                <li>JAVA</li>
                <li>PHP</li>
                <li>JAVASCRIPT</li>

                <li>C#</li>
                <li>JAVA</li>
                <li>PHP</li>
                <li>JAVASCRIPT</li>
                <li>C#</li>
                <li>JAVA</li>
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
            <ul>
                <li>SQL SERVER</li>
                <li>ORACLE</li>
                <li>MYSQL</li>
            </ul>
        </div>
    </div>
</body>

</html>
