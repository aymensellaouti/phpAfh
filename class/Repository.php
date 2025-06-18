<?php 
require_once 'autoloader.php';
abstract class Repository {
    protected $db;
    public function __construct(protected $tableName) {
        $this->db = ConnexionBD::getInstance();
    }

    public function findAll(): array {
        $sqlQuery = "select * from {$this->tableName}";
        $data = $this->db->query($sqlQuery)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function find($id): object {
        $query = "select * from skill where id = :id";
        $request = $this->db->prepare($query);
        $request->execute(['id'=> $id]);
        $data = $request->fetch(PDO::FETCH_OBJ);
        return $data;
    }

    public function delete($id): bool {
        $query = "delete from skill where id = :id";
        $request = $this->db->prepare($query);
        return ($request->execute(['id'=> $id]));
    }

    public function add($data) {
        // ['designation' => "valeurMta3ou", 'champAkher' => 'valeurMta3ou']
        // INSERT INTO `skill` (`id`, `designation`, `created_at`) VALUES (NULL, ?, ?);

        $keys = array_keys($data);
        $keyString = implode(",", $keys);
        $paramelements = array_fill(0, count($keys), '?');
        $paramString = implode(",", $paramelements);
        $query = "INSERT INTO `{$this->tableName}` (`id`, $keyString) VALUES (NULL, $paramString)";
        $request = $this->db->prepare($query);
        return($request->execute(array_values($data)));
    }

}


?>