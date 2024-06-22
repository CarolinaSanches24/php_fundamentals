<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Familiares</title>
</head>
<body>
    <form id="familyForm" method="post" action="register.php">
        <label for="name">Nome Completo:
            <input type="text" id="name" name="name" required>
        </label>
        <button type="submit" id="btn_add">Adicionar</button>
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>Nome Completo</th>
            </tr>
        </thead>
        <br><br>
        <tbody>
            <?php
            session_start();
            if (isset($_SESSION['listFamily'])) {
                foreach ($_SESSION['listFamily'] as $familyMember) {
                    echo "<tr><td>" . htmlspecialchars($familyMember) . "</td></tr>";
                }
            }
            ?>
        </tbody>
    </table>
</body>
</html>
