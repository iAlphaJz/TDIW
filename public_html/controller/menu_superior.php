<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>Prácticas TDIW</title>
<style>
    .Inicio {
        background-color: white;
        border-bottom: 1px solid black;
        padding: 10px;
        display: flex;
        align-items: center;
    }

    header.Inicio img {
        width: 100px;
    }

    .UserSetting {
        position: relative;
        align-items: center;
        display: inline-flex;
        margin-left: auto;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        right: 0; /* Alinea el menú a la derecha del botón */
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown .show { display: block; }

	.dropbtn {
    background-color: transparent;
    color: black;
    padding: 16px;
    font-size: 16px; /* Cambia este valor para ajustar el tamaño del emoji */
    border: none;
    cursor: pointer;
    transition: background-color 0.3s;
	}

    #miCuenta {
    font-family: 'Roboto', sans-serif;
    color: #44444;
    }

    .dropbtn:hover,
    .dropbtn:focus { /* Cambia el color al pasar el ratón o al hacer foco con el teclado */
        background-color: #f0f0f0;
    }

    .dropbtn:active { /* Cambia el color al hacer clic */
        background-color: #e0e0e0;
    }
</style>
</head>
<body>
    <header class="Inicio">
        <img src="../img/logo_marca.png" alt="Logo PCS">

        <div class="UserSetting dropdown">
            <button id="miCuenta" class="dropbtn">Mi cuenta</button>
            <div class="dropdown-content" id="myDropdown">
                <a href="https://tdiw-i1.deic-docencia.uab.cat/index.php?accio=login">Log in</a>
                <a href="https://tdiw-i1.deic-docencia.uab.cat/index.php?accio=register">Register</a>
                <!-- Puedes agregar más enlaces aquí -->
            </div>
        </div>
    </header>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
      // Cierra el menú si el usuario hace clic fuera de él
      $(window).click(function(event) {
        if (!$(event.target).is('#miCuenta')) {
          $('#myDropdown').removeClass('show');
        }
      });
    });

    // Event delegation for the dropbtn
    // This will handle clicks for both existing and dynamically loaded content
    $(document).on('click', '#miCuenta', function() {
      $('#myDropdown').toggleClass('show');
    });
  </script>
</body>
</html>
