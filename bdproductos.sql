-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS `mi_base_datos` CHARACTER SET latin1 COLLATE latin1_swedish_ci;

-- Seleccionar la base de datos
USE `mi_base_datos`;

-- Crear la tabla productos
CREATE TABLE `productos` (
    `id` int(11) NOT NULL,
    `nombre` varchar(50) NOT NULL,
    `precio` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Agregar la clave primaria
ALTER TABLE `productos`
    ADD PRIMARY KEY (`id`);

-- Modificar la columna id para que sea AUTO_INCREMENT
ALTER TABLE `productos`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
