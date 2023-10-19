<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/130e6d6c32.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../imagem/code_icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../responsive.css">
    <link rel="stylesheet" href="../listaStyle.css">
    <title>Lista de Programadores</title>
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
               $con = mysqli_connect("127.0.0.1", "root", "", "funcionarios");
               if(mysqli_connect_errno()){
                echo "Failed to connect to MySQL: ". mysqli_connect_error();
               }
               $result = mysqli_query($con, "SELECT * FROM programadores");
            ?>

            <div class="content">
                <h2>Lista de programadores</h2>
               <table class="content_list" border="0">
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Data nascimento</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th>Linkedin</th>
                        <th>GitHub</th>
                        <th>Senioridade</th>
                        <th>Sexo</th>
                        <th>Atuação</th>
                        <th>Deletar</th>
                        <th>Alterar</th>
                    </tr>
               
                    <?php
                        while($row=mysqli_fetch_array($result)){
                    ?>

                    <tr>
                        <td>
                            <?php echo $row['id']; ?>
                        </td>
                        <td>
                            <?php echo $row['nome']; ?>
                        </td>
                        <td>
                            <?php echo $row['email']; ?>
                        </td>
                        <td>
                            <?php echo $row['dn']; ?>
                        </td>
                        <td>
                            <?php echo $row['fone']; ?>
                        </td>
                        <td>
                            <?php echo $row['end']; ?>
                        </td>
                        <td>
                            <?php echo $row['lin']; ?>
                        </td>
                        <td>
                            <?php echo $row['git']; ?>
                        </td>
                        <td>
                            <?php echo $row['sen']; ?>
                        </td>
                        <td>
                            <?php echo $row['sex']; ?>
                        </td>
                        <td>
                            <?php echo $row['area']; ?>
                        </td>
                        <td>
                            <form action="del_prog.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="btn_del" value="ok" class="btn_del"></button>
                            </form>
                        </td>
                        <td>
                            <form action="alt_prog.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="btn_alt" value="ok" class="btn_alt"></button>
                            </form>
                        </td>
                    </tr>

                    <?php
                        }
                        mysqli_close($con);
                    ?>
                </table>

            </div>

            <div class="btn">
                <a href="./cad_prog.html">Voltar</a>
            </div>

        </div>
    </section>
    
</body>
</html>