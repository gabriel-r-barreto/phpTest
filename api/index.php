<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vagas</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class="container">

        <div class="titulo">
            <h1>Registro das Vagas</h1>
        </div>

        <div class="painel">

            <div class="qrcode">

                <div class="cam">

                    <video id="preview" class="p-1 border"></video>
                    
                    <div class="btn-group " data-toggle="buttons">
                        <h2>Escolha uma câmera</h2>
                        <div class="label_conf">
                            <label class="btn btn-primary active" id="cam1">
                                <input type="radio" name="options" value="1" autocomplete="off" checked>Câmera 1
                            </label>
                            <label class="btn btn-secondary" id="cam2">
                                <input type="radio" name="options" value="2" autocomplete="off">Câmera 2
                            </label>
                            <label class="btn btn-primary active" id="cam3">
                                <input type="radio" name="options" value="3" autocomplete="off">Câmera 3
                            </label>
                            <label class="btn btn-secondary" id="cam4">
                                <input type="radio" name="options" value="4" autocomplete="off">Câmera 4
                            </label>
                            <label class="btn btn-primary active" id="cam5">
                                <input type="radio" name="options" value="5" autocomplete="off">Câmera 5
                            </label>
                        </div>
                    </div>
                    
                    <form action="salvar.php" method="post">
                        
                        <input type="text" name="myLabel2" id="myLabel2" readonly>
                        <button type="submit">Registrar Veículo</button>
                        
                    </form>
                    
                </div>
            
            </div>

            <div class="painel2">

                <h2>Histórico de Veículos Estacionados</h2>
                    
                    <?php include 'consulta_vagas.php'; ?>
                    <!-- Inclui o arquivo PHP para exibir a tabela -->
                
            </div>

        </div>

    </div>


    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    
    <script src="script.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

</body>
</html>