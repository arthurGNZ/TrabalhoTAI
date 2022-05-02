<?php 
class BD{

    private $host ="localhost";// ip que está conectando 
    private $dbname ="sisagenda";// nome do bd criado
    private $port = 3306; // porta que vai se conectar
    private $usuario = "root"; //
    private $senha = "";
    private $db_charset = "utf8";

    public function conn(){// função p/ conexão com bd
        $conn = "mysql:host=$this->host;
            dbname=$this->dbname; port=$this->port";// $conn = string de conexão  

        return new PDO($conn,$this->usuario, $this->senha,
        [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ". $this->db_charset]
    );
    }

    public function select(){
        $conn = $this->conn();
        $st = $conn->prepare("SELECT * FROM crudcontato;");
        $st->execute();
        return $st;
    }
    public function insert($dados){
        unset($dados['id']);
        $sql = "INSERT INTO crudcontato (nome, sobrenome, telefone1, tipo_tel1, telefone2, tipo_tel2, email) VALUES(";
        $flag = 0;
        $arrayValor = [];
        foreach($dados as $valor){
            if($flag==0){
                $sql .= " ?";
            }else { 
                $sql .=", ?";}
            $flag=1;
            $arrayValor[]=$valor;
            }
        $sql.=");";
        $conn = $this->conn();
        $stmt = $conn->prepare($sql);
        $stmt->execute($arrayValor);
            
        return $stmt;
        }  
    public function find($id){
        $conn = $this->conn();
        $stmt = $conn->prepare("SELECT * FROM crudcontato WHERE id=?;");
        $stmt->execute([$id]);
        return $stmt->fetchObject();//retornando os dados como objeto -> fica mais fácil para acessar
    }

    public function update($dados){
        $id = $dados['id'];
        $sql = "UPDATE crudcontato SET ";
        $flag = 0;
        $arrayValor = [];
        foreach($dados as $campo => $valor){
            if($flag==0){
                $sql .= "$campo = ?";
            }else { $sql .=", $campo = ?";}
            $flag=1;    
            $arrayValor[]= $valor;
        }
            $sql.="WHERE id = $id;";

            $conn = $this->conn();
            $stmt = $conn->prepare($sql);
            $stmt->execute($arrayValor);
            
            return $stmt;
        }  
    }
?>