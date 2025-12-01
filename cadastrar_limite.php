<?php include "../config/conexao.php";
// ta fazendo conexao com o bd aq
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- 🌙 TEMA DARK PREMIUM -->
    <style>
        body {
            background: #0d0d0d; 
            color: #e5e5e5;
            font-family: "Segoe UI", sans-serif;
        }

        .card {
            background: linear-gradient(145deg, #141414, #0c0c0c);
            border: 1px solid #222;
            box-shadow: 0 0 25px rgba(0,0,0,0.6);
            border-radius: 12px;
        }

        h1, h2, h3, label {
            color: #f0f0f0;
            text-shadow: 0 0 5px rgba(255,255,255,0.15);
        }

        input, select {
            background: #1a1a1a !important;
            color: white !important;
            border: 1px solid #333 !important;
        }

        input:focus, select:focus {
            border-color: #6b42ff !important;
            box-shadow: 0 0 10px #6b42ff;
        }

        .btn {
            border-radius: 8px !important;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
            border: none !important;
        }

        .btn-primary {
            background: #6b42ff !important;
        }

        .btn-success {
            background: #2ea043 !important;
        }

        .btn-warning {
            background: #e6b800 !important;
        }

        .btn-info {
            background: #0096c7 !important;
        }

        .btn:hover {
            opacity: 0.85;
            transform: scale(1.02);
            transition: 0.2s;
        }

        .table {
            color: white;
            background: #111;
        }

        .table thead {
            background: #000;
            border-bottom: 2px solid #6b42ff;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background: #161616;
        }
    </style>
</head>
<body class="bg-light p-4">


<h1>Cadastrar Limite<h1>

<form method="POST">
    //coskksksk
    <!-- numero do time -->
    ID do time:
     <input type="number" name="time_id"><br><br>
     Ranking:
    <select name="ranking" required>
        <option value="craque">Craque</option>
        <option value="bom">Bom</option>
        <option value="intermediario">Intermediário</option>
        <option value="ascendente">Ascendente</option>
        <option value="ruim">Ruim</option>
    </select>
    <br><br>
Limite:
 <input type ="number" name="limite" required><br>
 <button type="submit">Salvar<button>

</form>

<?php
// ve se o form foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // recebe os dados 
    $time_id = $_POST['time_id'];
    $ranking = $_POST['ranking'];
    $limite = $_POST['limite'];

    // prepara o comando SQL para inserir no banco
    $sql = "INSERT INTO limite_por_time (time_id, ranking, limite)
            VALUES (:time_id, :ranking, :limite)";

    // prepara a consulta (prepare)
    $stmt = $pdo->prepare($sql);

    // Executa 
    $stmt->execute([
        ':time_id' => $time_id,
        ':ranking' => $ranking,
        ':limite'  => $limite
    ]);

    echo "<p style='color: green;'>Limite salvo com sucesso!</p>";
}
?>