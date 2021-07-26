<?php

    namespace MF\Model;

    use App\Connection;

    class Container {
        //retornar modelo solicitado já instanciado, inclusive com conexão estabelecida
        public static function getModel($model) {
            $class = "\\App\\Models\\".ucfirst($model);
            $conn = Connection::getDb();

            return new $class($conn);

        }
    }

?>