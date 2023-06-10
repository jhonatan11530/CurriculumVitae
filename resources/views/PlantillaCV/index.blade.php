<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hoja de vida</title>
    <style type="text/css">
        .container {
            position: relative;
            width: 45%;
        }

        .container2 {
            position: absolute;
            width: 55%;
            top: 0px;
            left: 50%;
        }

        .imagen_foto {
            display: block;
            margin: 0 auto;
        }

        #PrimerDato {
            display: block;
            margin-bottom: 0px;
        }

        #PrimerDato:nth-child(6n) {
            margin-bottom: 30px;
        }

        #SegundoDato {
            display: block;
            margin-bottom: 0px;
        }

        #SegundoDato:nth-child(3n) {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="container2">
        <h3>EXPERIENCIA PROFESIONAL</h3>
        <p>{{ $HojaVida->PerfilProfesional }}</p>
        <h3>EDUCACIÓN</h3>
        <ul>
            @foreach ($Estudio as $item)
                <li>
                    <h2>{{ strtoupper($item->NombreTitulo) }}</h2><br>
                    <h4>{{ strtoupper($item->Institucion) }} {{ strtoupper($item->Fecha) }}</h4><br>
                </li>
            @endforeach
        </ul>
        <h3>EDUCACIÓN COMPLEMENTARIA</h3>
        <ul>
            @foreach ($Complementario as $item)
                <li>
                    <h2>{{ strtoupper($item->NombreTitulo) }}</h2><br>
                    <h4>{{ strtoupper($item->Institucion) }} {{ strtoupper($item->Fecha) }}</h4><br>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="container">
        <div class="imagen_foto">
            <img src="{{ $HojaVida->Foto }}" alt="Image not found" height="200" width="200">
        </div>
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
                <li id="PrimerDato">{{ strtoupper($item) }}</li>
            @endforeach
        </ul>
        <h3>BASE DE DATOS</h3>
        <ul>
            @foreach ($Database as $item)
                <li id="PrimerDato">{{ strtoupper($item) }}</li>
            @endforeach
        </ul>
        <h3>REFERENCIA FAMILIAR</h3>
        <ul>
            @foreach ($Family as $item)
                <li id="PrimerDato">{{ strtoupper($item->NombreReferenciaPersonal) }} <br>
                    {{ strtoupper($item->CargoReferenciaPersonal) }} <br>
                    {{ strtoupper($item->TelReferenciaPersonal) }}</li>
            @endforeach
        </ul>
        <h3>REFERENCIA PERSONAL</h3>
        <ul>
            @foreach ($Jobs as $item)
                <li id="PrimerDato">{{ strtoupper($item->NombreReferenciaJobs) }} <br>
                    {{ strtoupper($item->CargoReferenciaJobs) }} <br>
                    {{ strtoupper($item->TelReferenciaJobs) }}</li>
            @endforeach
        </ul>
        <h3>IDIOMAS</h3>
        <ul>
            @foreach ($Idioma as $item)
                <li id="PrimerDato">{{ strtoupper($item) }}</li>
            @endforeach
        </ul>
    </div>
</body>

</html>
