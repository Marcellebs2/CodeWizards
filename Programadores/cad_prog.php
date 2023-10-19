<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/130e6d6c32.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./imagem/code_icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../cadStyle.css">
    <link rel="stylesheet" href="../responsive.css">
    <title>Cadastro de Programadores</title>
</head>
<body>
    <header>
        <div class="header_container">
            <div class="logo">
                <a href="../index.html">
                    <h2>Code<span>Wizards</span></h2>
                </a>
            </div>
            <h4>Programador</h4>
        </div>
    </header>
    <section>
        <div class="container">
            <?php 
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $dn = $_POST['dn'];
                $fone = $_POST['fone'];
                $end = $_POST['end'];
                $lin = $_POST['lin'];
                $git = $_POST['git'];
                $sen = $_POST['sen'];
                $sex = $_POST['sex'];
                $area = $_POST['area'];
                $sql = "insert into programadores(nome, email, dn, fone, end, lin, git, sen, sex, area) values ('$nome', '$email', '$dn', '$fone', '$end', '$lin', '$git', '$sen', '$sex', '$area')";
                $con = mysqli_connect("localhost", "root", "", "funcionarios");
                if(mysqli_connect_errno()){
                    echo "Failed to connect to MySQL: ". mysqli_connect_error();
                }

                mysqli_query($con, $sql);

                echo "<h2>Programador cadastrado com sucesso!</h2>";
                mysqli_close($con);

            ?>

            <div class="btn">
                <a href="cad_prog.html">Voltar</a>
            </div>

        </div>
    </section>
</body>
</html>