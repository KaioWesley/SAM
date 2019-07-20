<?php

class conexaoMySQL{
  private $server;
  private $user;
  private $password;
  private $database;

  public function __construct(){
      
      $this ->server = "localhost";
      $this ->user = "root";
      $this ->password = "bcd127";
      $this ->database = "mydb";
  }

  //Abre conexão com o BD
  public function connectDataBase(){
      try{
          $conexao = new PDO("mysql:host=".$this->server.";dbname=".$this->database, $this->user,$this->password, null);
          return $conexao;
      }catch(PDOException $erro){
          echo utf8_encode(MSG_ERRO_CONEXAO."<br>
              Linha:".$erro->getLine()."<br>
              Mensagem:".$erro->getMessage()
          );
      }
  }

  //Fecha conexão com o BD
  public function closeDataBase(){
      //Pode usar um dos dois comandos abaixo para fechar a conexao
      $conexao = null;
      //Destrói a variável
      unset($conexao);
  }
}

?>
