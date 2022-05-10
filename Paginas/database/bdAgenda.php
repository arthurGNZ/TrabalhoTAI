<?php
class BD
{

    private $host = "localhost"; // ip que está conectando 
    private $dbname = "sisagenda"; // nome do bd criado
    private $port = 3306; // porta que vai se conectar
    private $usuario = "root"; //
    private $senha = "";
    private $db_charset = "utf8";

    public function conn()
    { // função p/ conexão com bd
        $conn = "mysql:host=$this->host;
            dbname=$this->dbname; port=$this->port"; // $conn = string de conexão  

        return new PDO(
            $conn,
            $this->usuario,
            $this->senha,
            [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . $this->db_charset]
        );
    }

    public function select()
    {
        $conn = $this->conn();
        $st = $conn->prepare("SELECT * FROM crudagenda;");
        $st->execute();
        return $st;
    }
    public function insert($dados)
    {
        unset($dados['id']);
        $sql = "INSERT INTO crudagenda (titulo, data_inicio, hora_inicio, data_fim, hora_fim, localizacao, descricao, convidado_id) VALUES(";
        $flag = 0;
        foreach ($dados as $campo => $valor) {
            if ($flag == 0) {
                $sql .= " '$valor'";
                $flag = 1;
            } else {
                $sql .= ", '$valor'";
            }
        }
        $sql .= ")";
        $conn = $this->conn();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $sql;
    }
    public function find($id)
    {
        $conn = $this->conn();
        $stmt = $conn->prepare("SELECT * FROM crudagenda WHERE id=?;");
        $stmt->execute([$id]);
        return $stmt->fetchObject(); //retornando os dados como objeto -> fica mais fácil para acessar
    }

    public function update($dados)
    {
        $id = $dados['id'];
        $sql = "UPDATE crudagenda SET ";
        $flag = 0;
        $arrayValor = [];
        foreach ($dados as $campo => $valor) {
            if ($flag == 0) {
                $sql .= "$campo = ?";
            } else {
                $sql .= ", $campo = ?";
            }
            $flag = 1;
            $arrayValor[] = $valor;
        }
        $sql .= "WHERE id = $id;";

        $conn = $this->conn();
        $stmt = $conn->prepare($sql);
        $stmt->execute($arrayValor);

        return $stmt;
    }

    public function remove($id)
    {
        $conn = $this->conn();
        $stmt = $conn->prepare("DELETE FROM crudagenda WHERE id=?;");
        $stmt->execute([$id]);
        return $stmt;
    }
    public function convidadoID()
    {
        $conn = $this->conn();
        $stmt = $conn->prepare("SELECT id,nome FROM crudcontato");
        $stmt->execute();
        return $stmt;
    }
    public function convidado($valor)
    {
        $conn = $this->conn();
        $stmt = $conn->prepare("SELECT nome FROM crudcontato WHERE id LIKE '$valor'");
        $stmt->execute();
        return $stmt;
    }
    public function convidadoNome($valor)
    {
        $conn = $this->conn();
        $stmt = $conn->prepare("SELECT id FROM crudcontato WHERE nome LIKE '$valor'");
        $stmt->execute();
        return $stmt;
    }
    public function search($valor, $tipo)
    {
        $conn = $this->conn();
        $stmt = $conn->prepare("SELECT * FROM crudagenda WHERE $tipo LIKE '$valor';");
        $stmt->execute(["%" . $valor . "%"]);
        return $stmt;
    }
}
