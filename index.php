<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8" />
    <title>gerador de TXT</title>
  </head>
  <body>
    <h3>Conteúdo do arquivo</h3>
    <form action ="/processar_cadastro" method="post">
      <label for="nome">nome</label>
      <input type="text" id="conteudo1" name="nome" placeholder="digite seu nome" required><br>
      
      <label for="email">email</label>
      <input type="email" id="conteudo2" name="email" placeholder="digite seu email" required><br>
      
      <label for="password">senha</label>
      <input type="password" id="conteudo3" name="senha" required><br>
      
      <label for="naascimento">data de nascimento</label>
      <input type="date" id="conteudo4" name="nascimento"><br>
      
      <label>genero</label>
      <input type="radio" id="conteudo5" name="genero" value="masculino">
      <label for="masc">masculino</label>
      <input type="radio" id="conteudo6" name="genero" value="feminino">
      <label for="fem">feminino</label>
      <textarea id="conteudo7" rows="4" cols="30">Texto exemplo</textarea>
    <br>
    <button id="btnSalvar">Salvar .TXT</button>
    <script src="sketch.js"></script>
  </body>
</html>
