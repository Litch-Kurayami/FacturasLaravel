<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #0f0c29;
            background-image: linear-gradient(315deg, #0f0c29 0%, #24243e 74%);
            color: #a8ff78;
            font-family: 'Courier New', Courier, monospace;
            padding: 20px;
        }
        .invoice-container {
            background-color: #1a1a2e;
            border-radius: 15px;
            padding: 20px;
            margin: auto;
            width: 80%;
            box-shadow: 0px 0px 15px 5px rgba(0,255,255,0.75);
        }
        .text-center {
            text-align: center;
        }
        h1 {
            font-size: 2.5em;
            color: #08d9d6;
            text-shadow: 3px 3px #ff2e63;
        }
        p {
            font-size: 1.5em;
            color: #ff2e63;
            text-shadow: 2px 2px #08d9d6;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            font-size: 1.2em;
            color: #eaeaea;
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <section class="text-center">
            <h1>¡Factura {{ $numerofactura }} creada!</h1>
            <p><strong>Numero de factura: {{ $numerofactura }}</strong></p>
            <p><strong>Valor: {{ $valorfactura }}</strong></p>
        </section>
        <section>
            <h2>Gracias por hacer negocios con LITCH悪魔:</h2>
            <ul>
                <li>🔬 Acceso a las últimas tecnologías de mejora corporal.</li>
                <li>💉 Tratamientos personalizados para maximizar tus habilidades.</li>
                <li>👥 Una comunidad de personas que buscan superar sus límites.</li>
            </ul>
        </section>
        <section class="text-center">
            <p>¡No olvides seguirnos en nuestras redes sociales para estar al tanto de las últimas noticias y promociones!</p>
        </section>
    </div>
</body>
</html>