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

<body class="p-4">


<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="mb-4">Cadastrar Time</h2>

        <form method="POST">

            <label class="form-label">Nome do Time:</label>
            <input type="text" name="nome" required class="form-control mb-3">

            <button class="btn btn-primary w-100">Salvar</button>
        </form>
    </div>
</div>

</body>
</html>
