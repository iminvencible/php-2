<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dados Recebidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { padding: 20px; font-family: sans-serif; }
        .data-block { background-color: #f8f9fa; padding: 15px; border-radius: 8px; margin-bottom: 15px; }
        strong { color: #6c5ce7; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dados Recebidos via GET</h1>

        <?php
        // Always check if the key exists before accessing it to avoid errors
        // Use htmlspecialchars to prevent XSS attacks when displaying user input

        if (isset($_GET['nome'])) {
            echo "<div class='data-block'><strong>Nome:</strong> " . htmlspecialchars($_GET['nome']) . "</div>";
        }

        if (isset($_GET['email'])) {
            echo "<div class='data-block'><strong>Email:</strong> " . htmlspecialchars($_GET['email']) . "</div>";
        }

        if (isset($_GET['nascimento'])) {
            echo "<div class='data-block'><strong>Data de Nascimento:</strong> " . htmlspecialchars($_GET['nascimento']) . "</div>";
        }

        if (isset($_GET['idade'])) {
            echo "<div class='data-block'><strong>Idade:</strong> " . htmlspecialchars($_GET['idade']) . "</div>";
        }

        // Note: Displaying password received via GET is highly insecure.
        // Avoid doing this in production. This is just for demonstration.
        if (isset($_GET['senha'])) {
             echo "<div class='alert alert-warning'><strong>Senha (NÃO FAÇA ISSO EM PRODUÇÃO):</strong> " . htmlspecialchars($_GET['senha']) . "</div>";
        }

        if (isset($_GET['so'])) {
            echo "<div class='data-block'><strong>Sistema Operacional:</strong> " . htmlspecialchars($_GET['so']) . "</div>";
        }

        // Check if 'tecnologias' exists and is an array
        if (isset($_GET['tecnologias']) && is_array($_GET['tecnologias'])) {
            echo "<div class='data-block'><strong>Tecnologias:</strong> ";
            // Sanitize each value before echoing
            $safe_techs = array_map('htmlspecialchars', $_GET['tecnologias']);
            echo implode(', ', $safe_techs); // Join array elements into a string
            echo "</div>";
        } elseif (isset($_GET['tecnologias'])) {
             // Handle case where it's set but not an array (shouldn't happen with correct HTML)
             echo "<div class='data-block'><strong>Tecnologia:</strong> " . htmlspecialchars($_GET['tecnologias']) . "</div>";
        } else {
             echo "<div class='data-block'><strong>Tecnologias:</strong> Nenhuma selecionada</div>";
        }


        if (isset($_GET['experiencia'])) {
            echo "<div class='data-block'><strong>Experiência:</strong> " . htmlspecialchars($_GET['experiencia']) . "</div>";
        }

        echo "<h2>Debug: Conteúdo de \$_GET</h2>";
        echo "<pre class='bg-light p-3 border rounded'>";
        print_r($_GET);
        echo "</pre>";

        ?>

        <a href="form.php" class="btn btn-secondary mt-3">Voltar ao Formulário</a>
    </div>
</body>
</html>