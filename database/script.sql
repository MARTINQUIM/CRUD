CREATE DATABASE php_mysql_crud;

use php_mysql_crud;

CREATE TABLE tarea(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  titulo TEXT,
  descripcion TEXT,
  fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DESCRIBE tarea;
