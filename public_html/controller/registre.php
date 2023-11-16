<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--     <link rel="stylesheet" href="controller/view/css/register.css"> -->
    <title>Registro</title>
</head>

<style>
    /* Google Fonts */
  @import url(https://fonts.googleapis.com/css?family=Open+Sans);

  body {
    font-family: 'Open Sans', 'sans-serif';
    background-color: #eee;
  }

  .register {
    background-color: #eee;
    width: 420px;
    height: auto;
    margin: 0 auto;
    padding: 0;
  }

  h1 {
    color: #55acee;
    text-align: center;
    font-size: 36px;
    padding-top: 10px;
  }

  form {
    text-align: center;
  }

  input:not([type="submit"]) {
    font-family: 'Open Sans', 'sans-serif';
    border: 1px solid #acacac;
    color: #666;
    opacity: .7;
    border-radius: 5px;
    padding: 20px;
    text-align: center;
    margin-bottom: 20px;
    width: 250px;
    transition: all .3s;
    font-size: 16px;
  }

  input:focus:not([type="submit"]) {
    border: 1px solid #55acee;
    opacity: 1;
    width: 320px;
    outline: none;
    color: #55acee;
  }

  input[type="submit"] {
    padding: 15px 25px;
    font-size: 22px;
    width: 420px;
    color: #fff;
    position: relative;
    display: inline-block;
    background-color: #55acee;
    box-shadow: 0px 5px 0px 0px #3C93D5;
    outline: none;
    border: none;
  }

  input[type="submit"]:active {
    transform: translate(0px, 5px);
    box-shadow: 0px 0px 0px 0px;
  }

  input[type="submit"]:hover {
    background-color: #6FC6FF;
  }
</style>

<body>
    <div class="register">
        <h1 id="header">Registro</h1>
        <form action="controller/model/registreBD.php" id="Registro" method="post" onsubmit="return validateForm()">
            <input name="Uname" type="text" placeholder="Username" maxlength="50"><br />
            <input name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Adreça de correu electrònic"><br />
            <input name="pass" type="password" placeholder="Password"><br />
            <input name="dir" type="text" placeholder="Adreça"><br />
            <input name="poblacio" type="text" placeholder="Població"><br />
            <input name="cp" type="text" placeholder="Codi Postal"><br />
            <input type="submit" value="Registrar">
        </form>
    </div>



    <script>
function validateForm() {
    var inputs = document.getElementById('Registro').getElementsByTagName('input');
    for (var i = 0; i < inputs.length; i++) {
        // Ignore the submit button
        if (inputs[i].type.toLowerCase() == 'submit') {
            continue;
        }
        if (inputs[i].value.trim() === '') {
            alert('Por favor, rellena todos los campos');
            inputs[i].focus();
            return false;
        }
    }

    // Validación específica para el CP
    var cp = document.getElementsByName('cp')[0].value;
    if (!/^\d{5}$/.test(cp)) {
        alert('El Codi Postal debe tener 5 dígitos.');
        document.getElementsByName('cp')[0].focus();
        return false;
    }

    return true;
}
    </script>

</body>
</html>
