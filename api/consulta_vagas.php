<table class="tb">
        <thead>
            <tr>
                <th>Vagas Ocupadas</th> 
                <th>Placa</th>
                <!-- Adicione mais colunas conforme sua tabela tb_Vagas -->
            </tr>
        </thead>
        
       
        <tbody>

        <?php

        //id21121964_root   22Senac82*
        // Dados de conexão com o banco de dados
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $dbname = 'bd_vagas';

        // Conectando ao banco de dados
        $conn = mysqli_connect($host, $user, $password, $dbname);

        // Verifique se a conexão foi bem-sucedida
        if (!$conn) {
            die("Erro de conexão: " . mysqli_connect_error());
        }

        // Consulta para buscar dados da tabela tb_Vagas
        $consulta = "SELECT * FROM tb_Vagas";
        $resultado = mysqli_query($conn, $consulta);

        // Exiba os dados na tabela
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['placa'] . "</td>";
            // Adicione mais colunas conforme sua tabela tb_Vagas
            echo "</tr>";
        }

        // Feche a conexão com o banco de dados
        mysqli_close($conn);
        ?>
    </tbody>

    

</table>
