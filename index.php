<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="dist/output.css" rel="stylesheet">
</head>

<body>
  <main class="bg-slate-300 h-screen p-10">
    <form action="src\auth\registerAuth.php" method="post">
      <!-- Name -->
      <div>
        <label for="full-name">Full name</label>
        <input type="text" name="full-name">
      </div>

      <!-- CPF -->
      <div>
        <label for="full-cpf">CPF</label>
        <input type="text" name="full-cpf">
      </div>

      <!-- Email Address -->
      <div>
        <label for="full-email">Email Address</label>
        <input type="text" name="full-email">
      </div>

      <!-- Password -->
      <div>
        <label for="full-password">Password</label>
        <input type="text" name="full-password">
      </div>

      <button type="submit">Enviar</button>
    </form>
  </main>
</body>

</html>