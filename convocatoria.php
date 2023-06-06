<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convocatorias</title>
    <link rel="stylesheet" href="styleconvocatoria.css">
</head>
<body>
    <section class="container">
        <header>Convocatoria</header>
       
        <form action="#" class="form">
          
                <div class="input-box">
                  <label>Inicio de las inscripciones</label>
                  <input type="date" id="fecha-inicio" required />
                </div>

                <div class="input-box">
                    <label>Fin de las inscripciones</label>
                    <input type="date" id="fecha-fin" required />
                </div>

                <div class="input-box">
                    <label>Entrega programada para: </label>
                    <input type="text" id="fecha-entrega" required />
                </div>
    
          <input class="btn" type="submit" value="Publicar convocatoria">
        </form>
      </section>

</body>
</html>