<?php 

class database {

    public function query($sql, $params = []){
        try{

            $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare($sql);
            $stmt->execute($params);

            $results = $stmt->fetchAll(PDO::FETCH_CLASS);  
            return [
                'status' => 'success',
                'data' => $results
            ];

            // conexão e comunicação com o banco de dados
            // devolver resultados

        }catch (\PDOException $err) {
            // devolver o erro
            return [
                'status' => 'error',
                'data' => $err->getMessage()
            ];
        }
    }
}
?>