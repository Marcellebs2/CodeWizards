<?php 
    $id=$_POST['id'];
    $con = mysqli_connect("localhost", "root", "", "funcionarios");
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: ". mysqli_connect_error();
    }
    $result= mysqli_query($con, "SELECT * FROM programadores WHERE id='$id'");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/130e6d6c32.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./imagem/code_icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../cadStyle.css">
    <link rel="stylesheet" href="../responsive.css">
    <title>Alteração de Programadores</title>
</head>
<body>
    <header>
        <div class="header_container">
            <div class="logo">
                <a href="index.html">
                    <h2>Code<span>Wizards</span></h2>
                </a>
            </div>
            <h4>Programador</h4>
        </div>
    </header>
    <section>
        <div class="form_container">
            <form action="realizaAlt_prog.php" method="post">
                <div class="form_card">
                    <?php
                        while($row=mysqli_fetch_array($result)){
                    ?>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="left_side">
                        <div class="fields">
                            <label for="nome">Nome completo</label>
                            <input type="text" id="nome" name="nome" value="<?php echo $row['nome']; ?>" required>
                        </div>
                        <div class="fields">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>
                        </div>
                        <div class="fields">
                            <label for="dn">Data de aniversário</label>
                            <input type="date" id="dn" name="dn" value="<?php echo $row['dn']; ?>" required>
                        </div>
                        <div class="fields">
                            <label for="fone">Telefone</label>
                            <input type="text" id="fone" name="fone" value="<?php echo $row['fone']; ?>" required>
                        </div>
                        <div class="fields">
                            <label for="end">Endereço</label>
                            <input type="text" id="end" name="end" value="<?php echo $row['end']; ?>" required>
                        </div>
                    </div>
                    <div class="right_side">
                        <div class="fields">
                            <label for="lin">Linkedin</label>
                            <input type="text" id="lin" name="lin" value="<?php echo $row['lin']; ?>" required>
                        </div>
                        <div class="fields">
                            <label for="git">GitHub</label>
                            <input type="text" id="git" name="git" value="<?php echo $row['git']; ?>" required>
                        </div>
                        <div class="fields">
                            <label for="sen">Senioridade</label>
                            <select name="sen" id="sen" required>
                                <option value="" disabled>Escolha</option>
                                <option value="junior<?php echo $row['sen']; ?>">Júnior</option>
                                <option value="pleno<?php echo $row['sen']; ?>">Pleno</option>
                                <option value="senior<?php echo $row['sen']; ?>">Sênior</option>
                            </select>
                            <label for="sex">Sexo</label>
                            <select name="sex" id="sex" required>
                                <option value="" disabled>Escolha</option>
                                <option value="f<?php echo $row['sex']; ?>">Feminino</option>
                                <option value="m<?php echo $row['sex']; ?>">Masculino</option>
                                <option value="o<?php echo $row['sex']; ?>">Outro</option>
                            </select>
                        </div>
                        <div class="fields">
                            <label for="front">Aplicação que atua</label>
                            <div class="field_radio">
                                <div class="radio">
                                    <input type="radio" id="front" name="area" value="front" value="<?php echo $row['area']; ?>" required> 
                                    <label for="front">Front-end</label>
                                </div>
                                <div class="radio">
                                    <input type="radio" id="back" name="area" value="back" value="<?php echo $row['area']; ?>" required> 
                                    <label for="back">Back-end</label>
                                </div>
                                <div class="radio">
                                    <input type="radio" id="full" name="area" value="full" value="<?php echo $row['area']; ?>" required> 
                                    <label for="full">Fullstack</label>
                                </div>
                            </div>
                        </div>
                        <div class="btn">
                            <input type="submit" value="Alterar">
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </form>
        </div>
    </section>
</body>
</html>