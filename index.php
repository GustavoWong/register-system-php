<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="dist/output.css" rel="stylesheet">
</head>

<body>
  <main class="bg-slate-300 h-screen p-10 flex items-center justify-center">
    <form action="src\auth\registerAuth.php" method="post" class="w-80 text-xl">
      <fieldset class="p-7 border-4 border-red-300">
        <legend class="px-3 border-4 border-red-300 ">Register</legend>
        <!-- Name -->
        <div>
          <label for="full-name">Full name</label>
          <input type="text" name="full-name" placeholder="Full name" required maxlength="150" class="block p-2 rounded-md w-full">
        </div>

        <!-- CPF -->
        <div>
          <label for="full-cpf">CPF</label>
          <input type="text" name="full-cpf" placeholder="CPF" required maxlength="11" class="block p-2 rounded-md w-full">
        </div>

        <!-- Email Address -->
        <div>
          <label for="full-email">Email Address</label>
          <input type="email" name="full-email" placeholder="example@example.com" required maxlength="255" class="block p-2 rounded-md w-full">
        </div>

        <!-- Password -->
        <div>
          <label for="full-password">Password</label>
          <input type="password" name="full-password" placeholder="password" required maxlength="255" minlength="8" class="block p-2 rounded-md w-full">
        </div>

        <button type="submit" class="bg-blue-400 w-full p-2 rounded-md font-bold text-white mt-4">Enviar</button>
      </fieldset>
    </form>
  </main>
</body>

</html>