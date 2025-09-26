<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário com POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Formulário com POST</h1>

    <form method="POST" action="recebe-form.php">
  <div class="mb-3">
    <label for="n1" class="form-label">Digite o primeiro número</label>
    <input type="number" class="form-control" id="n1" name="n1">
  </div>
  <div class="mb-3">
    <label for="n2" class="form-label">Digite o segundo número</label>
    <input type="number" class="form-control" id="n2" name="n2">
  </div>
  <div class="mb-3">
    <label for="operacao" class="form-label">Selecione a operação matemática</label>
    <select id="operacao" name="operacao">
    <option value="+">Adição</option>
    <option value="-">Subtração</option>
    <option value="*">Multiplicação</option>
    <option value=":">Divisão</option>
</select>
  </div>
  <a href="index.php" class="btn btn-info">Voltar</a>
  <button type="reset" class="btn btn-warning">Limpar</button> 
  <button type="submit" class="btn btn-success">Enviar para o php</button>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>