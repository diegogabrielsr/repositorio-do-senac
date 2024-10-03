<?php
    session_start();
    
    if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['nome_completo']) == true))
    {
        unset($_SESSION['id']);
        unset($_SESSION['nome_completo']);
        header("Location: ../login/login.php");
        exit(); // Adicionei exit para garantir que o código pare de ser executado após o redirecionamento
    }

    $logado = $_SESSION['nome_completo'];
    $primeiro_nome = explode(' ', $logado)[0]; // Pega a primeira parte do nome completo
?>


<!doctype html>
<html lang="pt-br">

<head>
    <!-- Metadados -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CODIGO DA FONTE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <!-- FIM DO CODIGO DA FONTE  -->
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="#" media="screen">
    <!-- Adicionar Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- Fim do código para Font Awesome -->
    <!-- Título da página (aparece na aba) -->
    <title>Atualizar currículo</title>

    
<style>

body {
    margin: 0;
    padding: 0;
    display: flex;
    height: 100vh;
    width: 100vw;
    font-family: 'Ubuntu', sans-serif;
    background: linear-gradient(to right, #ffffff 30%, #003079);
}

.container_left {
    width: 30%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-end;
    padding-top: 5%;
    align-self: flex-start;
    
}


.foto_nome_perfil {
    display: flex; /* Alinha os itens horizontalmente */
    align-items: center; /* Centraliza verticalmente o ícone e o nome */
    margin-top: 55px;
    margin-bottom: 45px;
}

.foto_nome_perfil i{
    font-size: 50px; /* Tamanho do ícone */
    color: #35383F;/* Cor do ícone */
    margin-left: 4px;
 
}

.nome-usuario {
    font-size: 28px; /* Tamanho da fonte do nome */
    font-weight: bold; /* Deixa o nome em negrito */
    font-weight: 500;
    color: #35383F;
    margin-left: 24px;
}



/* Conteúdo do button-container */
.button-container {
    display: block;
    background-color: transparent;
    min-width: 300px;
    z-index: 1;
    margin-top: 40px;
    margin-right: 17px;
   
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
.button-container .alterar_dados i {
    margin-right: 23px; /* Ajuste o valor conforme necessário */
}


.button-container .atualizar_curriculo i{
    margin-left: 3px; /* Ajuste o valor conforme necessário */
    margin-right: 30px; /* Ajuste o valor conforme necessário */
    
}


.button-container .excluir_conta i {
    margin-right: 30px; /* Ajuste o valor conforme necessário */
}


/* direita */
.container_right {
    width: 70%;
    display: flex;
    justify-content: center;
    align-items: center;
}


.container_right .white-box {
    background-color: #ffffff;
    border-radius: 35.56px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 
                0 6px 20px rgba(0, 0, 0, 0.1);
    margin-right: 50px;
    width: 600px;
    height: 630px;
    display: flex;
    justify-content: flex-start; /* Alinha o conteúdo no topo do contêiner */
    align-items: center;
    flex-direction: column;
    padding-top: 20px; /* Espaço entre o topo do contêiner e o conteúdo */
}

#titulo {
    font-family: "Ubuntu", sans-serif;
    font-weight: 700;
    text-align: center;
    color: #1F1F1F;
    font-size: 40px; /* Ajuste o tamanho da fonte conforme necessário */
    margin-bottom: 70px; /* Adiciona espaço abaixo do título */
} 

.campo {
    margin-bottom: 30px;
    width: calc(100% - 25px); 
}

.campo label {
    margin-bottom: 5px;
    margin-left: 5px;
    color: #A7A7A7;
    display: block;
    font-weight: 500;
    width: 100%;
    font-size: 20px;
}

.campo input[type="file"] {
    padding: 10px;
    width: 100%;
    height: 15px; /* Ajuste a altura conforme necessário */
    border: none;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.082);
    background-color: #EEEEEE;
    display: block;
    border-radius: 8.89px;
    font-family: 'Ubuntu', sans-serif;
    margin-bottom: 50px;
    
}

.campoexperiencia label {
    margin-bottom: 5px;
    margin-left: 5px;
    color: #A7A7A7;
    display: block;
    font-weight: 500;
    width: 100%;
    font-size: 20px;
}

textarea {
    padding: 8px;
    height: 150px;
    resize: none; /* Impede que o usuário redimensione o textarea */
    border: none;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.082);
    background-color: #EEEEEE;
    display: block;
    width: 96%; /* Largura total */
    border-radius: 8.89px;
    font-size: 17px;
    font-family: 'Ubuntu', sans-serif;
}

.botao_atualizar {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    margin-top: 60px; /* Empurra o botão para a parte inferior do contêiner */

}

.botao_atualizar button {
    font-weight: 700;
    padding: 10px 50px; /* Preenchimento interno dos botões */
    font-size: 20px; /* Tamanho da fonte dos botões */
    background-color: #003079; /* Cor de fundo dos botões */
    color: #ffffff; /* Cor do texto dos botões */
    border: none; /* Remove a borda dos botões */
    border-radius: 8.89px; /* Borda arredondada dos botões */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.397); /* Adiciona sombra */
    cursor: pointer;
}

.botao_atualizar button:hover {
    background-color: #0056b3; /* Cor de fundo dos botões ao passar o mouse */
    color: #FFE500;
}

/* Estilos existentes */

/* Estilos responsivos */
@media (max-width: 820px) {
    body {
        flex-direction: column; /* Muda para coluna em telas menores */
    }

    .container_left, .container_right {
        width: 100%; /* Ocupa a largura total em telas menores */
    }

    .container_left {
        padding: 20px; /* Ajusta o padding conforme necessário */
        align-items: flex-start;
    }

    .container_right {
        margin-top: 20px; /* Adicione margem conforme necessário */
        justify-content: flex-start;
        padding: 20px;
    }
}

        .erro {
            color: red;
            font-size: 0.9em;
            margin-left: 0px;
        }

        /* Estilos para o modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 300px;
            text-align: center;
            border-radius: 10px;
            font-family: "Ubuntu", sans-serif;
            font-weight: 700;
            position: relative; /* Adiciona position relative */
        }

        .close {
            color: #003079;
            position: absolute;
            top: 0;
            right: 0;
            font-size: 28px;
            font-weight: bold;
            padding: 10px;
        }

        .close:hover,
        .close:focus {
            color: #FFE500;
            text-decoration: none;
            cursor: pointer;
        }

    </style>

</head>
<body>
    <div class="container_left">
        
        <div class="button-container">

            <div class="foto_nome_perfil">
                <i class="fa-regular fa-circle-user"></i>
                <span class="nome-usuario"><?php echo htmlspecialchars($primeiro_nome); ?></span>
            </div>

            <a href="../home_loggedin/logged_in.php" class="house"><i class="fa-solid fa-house"></i>Página inicial</a>

            <a href="../change_personal_data/alterar_dados_pessoais.php" class="alterar_dados"><i class="fa-solid fa-user-edit"></i>Alterar dados pessoais</a>

            <a href="../update_resume/atualizar_curriculo.php" class="atualizar_curriculo"><i class="fa-solid fa-file-alt"></i>Atualizar currículo</a>

            <a href="../change_password/alterar_senha.php" class="alterar_senha"><i class="fa-solid fa-key"></i>Alterar senha</a>

            <a href="../delete_account/excluir_conta.php" class="excluir_conta"><i class="fa-solid fa-trash"></i>Excluir minha conta</a>

        </div>
    </div>
    <div class="container_right">
        <div class="white-box">
            <h1 id="titulo">Atualizar currículo</h1>
            <br>
            <form>
                <div class="campo">
                    <label for="enviarcurriculo">Anexar currículo (PDF ou DOCX)</label>
                    <input type="file" name="enviarcurriculo" id="enviarcurriculo" accept=".pdf, .docx">
                </div><!-- Fim currículo -->
                <div class="campoexperiencia">
                    <label for="experiencia">Experiências anteriores:</label>
                    <textarea name="experiencia" id="experiencia" rows="10" cols="50" required></textarea>
                </div><!-- Fim experiencia -->
                <div class="botao_atualizar">
                    <button type="submit">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal para exibir mensagens -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p id="modalMessage"></p>
        </div>
    </div>
</body>
</html>