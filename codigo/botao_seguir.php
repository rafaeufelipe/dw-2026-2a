<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<style>
  body {
  color: #F9E6A8  
  margin: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  #seguir {
    display: none;
  }

  .botao {
    display: inline-block;
    background: #D45060;
    color: #FFF9F2;
    padding: 8px 20px;
    border-radius: 8px;
    font-weight: bold;
    cursor: pointer;
    font-family: Arial, sans-serif;
  }
  .botao:hover { background: #800020; }

  .botao::before { content: "Seguir"; }

  #seguir:checked + .botao {
    background: #F3E6D5;
    color: #000;
  }
  #seguir:checked + .botao:hover { background: #FFF9F2; }

  #seguir:checked + .botao::before { content: "Seguindo"; }
</style>
</head>
<body>

<div class="area-botao">
  <input type="checkbox" id="seguir">
  <label for="seguir" class="botao"></label>
</div>

</body>
</html>