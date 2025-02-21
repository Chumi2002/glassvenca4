<?php

class Database {
    // private $host = 'glassvenca.com'; // Cambiar según configuración
    // private $dbname = 'glassven_glassvenca2'; // Cambiar nombre de la base
    // private $username = 'glassven_glassvenca2'; // Cambiar usuario
    // private $password = '-FVn75h7*e1KUm'; // Cambiar contraseña
    // private $pdo; 
    private $host = 'localhost'; // Cambiar según configuración
    private $dbname = 'glassvenca2'; // Cambiar nombre de la base
    private $username = 'root'; // Cambiar usuario
    private $password = ''; // Cambiar contraseña
    private $pdo; 
 
    // Constructor: Establece la conexión con la base de datos
    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8", $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión a la base de datos: " . $e->getMessage());
        }
    }

    // Método genérico para insertar registros
    public function insert($table, $data) {
        try {
            $columns = implode(', ', array_keys($data));
            $placeholders = ':' . implode(', :', array_keys($data));
            $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute($data);
        } catch (PDOException $e) {
            throw new Exception("Error al insertar: " . $e->getMessage());
        }
    }

    // Método genérico para actualizar registros
    public function update($table, $data, $where) {
        try {
            $set = '';
            foreach ($data as $column => $value) {
                $set .= "$column = :$column, ";
            }
            $set = rtrim($set, ', ');

            $conditions = '';
            foreach ($where as $column => $value) {
                $conditions .= "$column = :$column, ";
            }
            $conditions = rtrim($conditions, ', ');

            $sql = "UPDATE $table SET $set WHERE $conditions";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute(array_merge($data, $where));
        } catch (PDOException $e) {
            throw new Exception("Error al actualizar: " . $e->getMessage());
        }
    }

    // Método genérico para eliminar registros
    public function delete($table, $where) {
        try {
            $conditions = '';
            foreach ($where as $column => $value) {
                $conditions .= "$column = :$column AND ";
            }
            $conditions = rtrim($conditions, ' AND ');

            $sql = "DELETE FROM $table WHERE $conditions";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute($where);
        } catch (PDOException $e) {
            throw new Exception("Error al eliminar: " . $e->getMessage());
        }
    }

    // Método genérico para buscar registros
    public function select2($table, $columns = '*', $where = [], $single = false) {
        try {
            $conditions = '';
            if (!empty($where)) {
                foreach ($where as $column => $value) {
                    $conditions .= "$column LIKE :$column OR ";
                }
                $conditions = rtrim($conditions, ' OR ');
            }

            $sql = "SELECT $columns FROM $table" . (!empty($conditions) ? " WHERE $conditions" : '');
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($where);

            return $single ? $stmt->fetch(PDO::FETCH_ASSOC) : $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Error al buscar: " . $e->getMessage());
        }
    }

    public function select($table, $columns = '*', $where = [], $single = false) {
        try {
            $conditions = '';
            if (!empty($where)) {
                foreach ($where as $column => $value) {
                    $conditions .= "$column = :$column AND ";
                }
                $conditions = rtrim($conditions, ' AND ');
            }

            $sql = "SELECT $columns FROM $table" . (!empty($conditions) ? " WHERE $conditions" : '');
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($where);

            return $single ? $stmt->fetch(PDO::FETCH_ASSOC) : $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Error al buscar: " . $e->getMessage());
        }
    }

    public function select3($table, $columns = '*', $where = [], $single = false, $limit = null) {
        try {
            $conditions = '';
            if (!empty($where)) {
                foreach ($where as $column => $value) {
                    $conditions .= "$column LIKE :$column OR ";
                }
                $conditions = rtrim($conditions, ' OR ');
            }
    
            $sql = "SELECT $columns FROM $table" . (!empty($conditions) ? " WHERE $conditions" : '');
    
            // Agregar LIMIT si se especifica
            if ($limit !== null) {
                $sql .= " LIMIT $limit";
            }
    
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($where);
    
            return $single ? $stmt->fetch(PDO::FETCH_ASSOC) : $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Error al buscar: " . $e->getMessage());
        }
    }
}