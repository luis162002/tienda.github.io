-- require_once './CONEXION/accesoBD.php';

-- Creacion de la BD
CREATE DATABASE PRODUCTOS;
USE PRODUCTOS;

-- Creacion de la tabala Categorias
CREATE TABLE `CATEGORIAS` (
`id` int(11) NOT NULL,
  `src` char(255) NOT NULL default '../imagenes/NOIMAGEN.png',
  `nome` char(255) NOT NULL default 'Sin nombre',
  `href` char(255) NOT NULL default 'Sin link',
  `alt` char(255) NOT NULL default 'Sin descripcion',
  PRIMARY KEY  (`id`)
);
-- Creacion de los productos de las Categorias
INSERT INTO `CATEGORIAS` (`id`, `src`, `nome`, `href`, `alt`) VALUES 
  (1,'../imagenes/categorias/aceites.jpg','Aceites','aceites.html','imagen de aceite de oliva'),
  (2,'../imagenes/categorias/carnes.jpg','Cárnicos','carnes.html','Imagen abanico Iberico'),
  (3,'../imagenes/categorias/lacteos.jpg','Lácteos','lacteos.html','Imagen de Leche'),
  (4,'../imagenes/categorias/mariscos.jpg','Marisco','mariscos.html','Foto de Langostinos'),
  (5,'../imagenes/categorias/pan.jpg','Galletas y Pan','bolleria.html','Imagen burguer');

-- <------------------------------------->