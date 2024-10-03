<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CODIGO DA FONTE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <!-- FIM DO CODIGO DA FONTE  -->

    <!-- Adicionar Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- Fim do código para Font Awesome -->

    <title>Candidatos</title>

    <script>
        function confirmDelete(event) {
            if (!confirm('Você tem certeza que deseja excluir esta vaga?')) {
                event.preventDefault();
            }
        }
    </script>

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Ubuntu', sans-serif;
        }
        body {
            margin: 0;
            height: 100vh;
            background-color: #003079;
            background: linear-gradient(to right, #ffffff 20%, #003079);
            font-family: 'Ubuntu', sans-serif;
            display: flex;
        }

        /* PARTE ESQUERDA */
        .container_left {
            width: 30%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding-left: 40px;
            padding-top: 5%;
            align-self: flex-start;
        }

.container_left .configurar_vagas h1 {
    color: #35383F;
    font-size: 40px;
    font-weight: bold;
    text-align: center;
    margin-left: 27px;
    margin-bottom: 40px;
    margin-top: 40px;
}

.button-container {
    display: block;
    background-color: transparent;
    min-width: 200px;
    z-index: 1;
    margin-left: 20px;
   
}

/* Links do button-container */
.button-container a {
    color: #35383F;
    padding: 12px 16px;
    font-size: 20px;
    text-decoration: none;
    display: block;
    
}

/* Mudança de cor ao passar o mouse */
.button-container a:hover {
    background-color: #f1f1f1;
    color: #35383F;
    border-radius: 8.89px;
}

/* Ajuste para alinhar os ícones com o texto */
.button-container a {
    display: flex;
    align-items: center;
    font-weight: 500;
}

.button-container a i {
    margin-right: 27px; /* Espaçamento entre o ícone e o texto */
    font-size: 22px; /* Tamanho do ícone */
    color: #35383F;

}

/* Especifico para separar texto do icon*/
.button-container .criar_vaga_btn i {
    margin-right: 29px; /* Ajuste o valor conforme necessário */
}

.button-container .candidatos_btn i {
    font-size: 23px;
    margin-left: 1px;
    margin-right: 30px; /* Ajuste o valor conforme necessário */
}

.button-container .banco_de_talentos_btn i {
    margin-right: 30px; /* Ajuste o valor conforme necessário */
}

.button-container .voltar_btn i {
    margin-right: 28px; /* Ajuste o valor conforme necessário */
}
        /* FIM PARTE ESQUERDA */

        /* PARTE DIREITA */
        .container_right {
            width: 70%;
            display: flex;
            flex-wrap: wrap;
            justify-items: stretch;
            box-sizing: border-box;
            margin: 0 auto;
            justify-content: start;
            
        }

        .container_right .white-box {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 
                0 6px 20px rgba(0, 0, 0, 0.1);
            width: 500px;
            height: 310px;
            display: flex;
            justify-content: flex-start; /* Alinha o conteúdo no topo do contêiner */
            align-items: left;
            flex-direction: column;
            padding: 20px; /* Espaço entre o topo do contêiner e o conteúdo */
            margin: 30px 0px 0px 60px;
           
        }

        input, textarea[readonly] {
            border: none;
        }
        input, textarea[readonly]:focus {
            outline: none;
            border: none;
        }
        
        .titulo_id {
            margin-left: 5px;
            display: flex;
            align-items: center;
            justify-content: start;
        }

        .titulo_id label {
            font-family: "Ubuntu", sans-serif;
            font-weight: 700;
            color: #35383F;
            font-size: 25px; /* Ajuste o tamanho da fonte conforme necessário */ 
        }

        .titulo_id input[type="text"] {
            padding: 7px;
            border: none;
            font-size: 25px; /* Ajuste o tamanho da fonte conforme necessário */
            font-weight: 700;
            color: #35383F;
            background-color: transparent;
            font-family: 'Ubuntu', sans-serif;
          
        }

        .nome_empresa{
            display: flex;
            flex-direction: column;
            width: 100%;
            margin: 0px;

        }

        .nome input {
            width: 100%;
            border: none;
            font-size: 23px;
            color: #35383F;
        
        }

        .empresa input {
            width: 97%;
            border: none;
            font-size: 16px;
            margin-left: 9px;
            color: #808080;
        
        }

        .l_qv_d {
            display: flex;
            width: 100%;
            margin-top: 15px;

        }

        .l_qv_d input {
            font-size: 13px;
            margin-left: 5px;
            margin-bottom: 10px;
            color: #35383F;
        }

        .l_qv_d i {
            font-size: 16px;
            color: #35383F;
            
        }

        .localidade input{
            width: 75%;

        }

        .quantidade_vagas input{
            width: 75%;

        }

        .disponivel input{
            width: 75%;

        }

        .t_e_ch {
            display: flex;
            width: 100%;
            margin-bottom: 10px;

        }

        .t_e_ch input {
            font-size: 13px;
            margin-left: 5px;
            color: #35383F;
        }

        .t_e_ch i {
            font-size: 16px;
            color: #35383F;
            
        }

        .tipo input{
            width: 75%;

        }

        .escolaridade input{
            width: 75%;
        }

        .carga_horaria input{
            width: 75%;

        }

        .descricao_vaga textarea {
            width: 100%;
            height: 85px;
            margin-top: 10px;
            resize: none;
            display: block;
            font-size: 15px;
            color: #35383F;
        }

        .botao_ver {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin-top: 10px;
        }

        .ver {
            font-weight: 700;
            width: 100%;
            height: 50px;
            font-size: 20px; /* Tamanho da fonte dos botões */
            background-color: #003079; /* Cor de fundo dos botões */
            color: #ffffff; /* Cor do texto dos botões */
            border: none; /* Remove a borda dos botões */
            border-radius: 8.89px; /* Borda arredondada dos botões */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.397); /* Adiciona sombra */
            cursor: pointer;
            margin-top: 5px;
        }

        .ver:hover {
            background-color: #0056b3; /* Cor de fundo dos botões ao passar o mouse */
            color: #FFE500;
        }

        /* Estilos existentes */

        /* Estilos responsivos */
        @media (max-width: 1754px){
            .container_right {
                display: flex;
                justify-content: center;
            }

            .container_right .white-box {
                margin-left: 0px;
                
                width: 700px;
            }

        }

        @media (max-width: 950px) {
            body {
                flex-direction: column; /* Muda para coluna em telas menores */
            }

            .container_left, .container_right {
                width: 100%; /* Ocupa a largura total em telas menores */
            }

            .container_left {
                padding: 20px; /* Ajusta o padding conforme necessário */
            }

            .container_right {
                margin-top: 20px; /* Adicione margem conforme necessário */
                justify-content: flex-start;
                padding: 20px;
            }
        }


    </style>
</head>
<body>
    <div class="container_left">
        <div class="configurar_vagas">
            <h1>Configurar vagas</h1>
        </div>
        <div class="button-container"> 

            <a href="../create_vacancy/criar_vaga.html" class="criar_vaga_btn"><i class="fa-regular fa-square-plus"></i>Criar vaga</a>

            <a href="../update_vacancy/atualizar_vaga.php" class="atualizar_vaga_btn"><i class="fa-regular fa-pen-to-square"></i>Atualizar vaga</a>
            
            <a href="#" class="candidatos_btn"><i class="fa-solid fa-clipboard"></i>Candidatos</a>

            <a href="../talent_pool/banco_de_talentos.php" class="banco_de_talentos_btn"><i class="fa-regular fa-user"></i>Banco de talentos</a>

            <a href="../home_loggedin/logged_in.php" class="voltar_btn"><i class="fa-regular fa-circle-left"></i>Voltar</a>

        </div>
    </div>
    <div class="container_right">
        <?php
        $conn = mysqli_connect("localhost", "root", "12345", "projeto_site");
        if ($conn->connect_error) {
            die("Connection failed:" . $conn->connect_error);
        }

        $sql = "SELECT id, nome, tipo, disponivel, quantidade_vagas, escolaridade, empresa, localidade, carga_horaria, descricao_vaga FROM vagas";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='white-box'>";
                    echo "<form action='c_ver_candidatos.php' method='GET'>";
                        echo "<div class='titulo_id'>";
                            echo "<label>ID:</label><input type='text' name='id' value='" . $row["id"] . "' readonly>";
                        echo "</div>";

                        echo "<div class='nome_empresa'>";
                            echo "<div class='nome'>";
                                echo "<input type='text' id='nome_" . $row["id"] . "' name='nome' value='" . $row["nome"] . "' readonly>";
                            echo "</div>";
                            echo "<div class='empresa'>";
                                echo "<input type='text' id='empresa_" . $row["id"] . "' name='empresa' value='" . $row["empresa"] . "' readonly>";
                            echo "</div>";
                        echo "</div>";

                        echo "<div class='l_qv_d'>";
                            echo "<div class='localidade'>";
                                echo "<i class='fa-solid fa-location-dot'></i>";
                                echo "<input type='text' id='localidade_" . $row["id"] . "' name='localidade' value='" . $row["localidade"] . "' readonly>";
                            echo "</div>";
                            echo "<div class='quantidade_vagas'>";
                                echo "<i class='fa-solid fa-users'></i>";
                                echo "<input type='text' id='quantidade_vagas_" . $row["id"] . "' name='quantidade_vagas' value='" . $row["quantidade_vagas"] . "' readonly>";
                            echo "</div>";
                            echo "<div class='disponivel'>";
                                echo "<i class='fa-solid fa-circle-exclamation'></i>";
                                echo "<input type='text' id='disponivel_" . $row["id"] . "' name='disponivel' value='" . $row["disponivel"] . "' readonly>";
                            echo "</div>";
                        echo "</div>";

                        echo "<div class='t_e_ch'>";
                            echo "<div class='tipo'>"; 
                                echo "<i class='fa-solid fa-file-contract'></i>";
                                echo "<input type='text' id='tipo_" . $row["id"] . "' name='tipo' value='" . $row["tipo"] . "' readonly>";
                            echo "</div>";
                            echo "<div class='escolaridade'>";
                                echo "<i class='fa-solid fa-graduation-cap'></i>";
                                echo "<input type='text' id='escolaridade_" . $row["id"] . "' name='escolaridade' value='" . $row["escolaridade"] . "' readonly>";
                            echo "</div>";
                            echo "<div class='carga_horaria'>";
                                echo "<i class='fa-solid fa-clock'></i>";
                                echo "<input type='text' id='carga_horaria_" . $row["id"] . "' name='carga_horaria' value='" . $row["carga_horaria"] . "' readonly>";
                            echo "</div>";
                        echo "</div>";

                        echo "<div class='descricao_vaga'>";
                            echo "<textarea id='descricao_vaga_" . $row["id"] . "' name='descricao_vaga' readonly>" . $row["descricao_vaga"] . "</textarea>";
                        echo "</div>";
            
                        echo "<div class='botao_ver'>";
                                echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
                                echo "<button type='submit' class='ver'>Ver inscritos</button>";  
                                   
                        echo "</div>";
                    echo "</form>";
                echo "</div>";
            }
        } else {
            echo "0 result";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
