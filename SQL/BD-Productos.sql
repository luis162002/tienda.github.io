-- require_once './CONEXION/accesoBD.php';

-- Creacion de la BD
CREATE DATABASE disga;
USE disga;

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
  (1,'../imagenes/categorias/aceites.jpg','Aceites','aceites.php','imagen de aceite de oliva'),
  (2,'../imagenes/categorias/carnes.jpg','Cárnicos','carnes.php','Imagen abanico Iberico'),
  (3,'../imagenes/categorias/lacteos.jpg','Lácteos','lacteos.php','Imagen de Leche'),
  (4,'../imagenes/categorias/mariscos.jpg','Marisco','mariscos.php','Foto de Langostinos'),
  (5,'../imagenes/categorias/pan.jpg','Galletas y Pan','bolleria.php','Imagen burguer');

-- <------------------------------------->
-- Creacion de la tabala aceites
CREATE TABLE `ACEITES` (
`id` int(11) NOT NULL,
`precio` int(11) NOT NULL,
  `src` char(255) NOT NULL default '../imagenes/NOIMAGEN.png',
  `nome` char(255) NOT NULL default 'Sin nombre',
  `href` char(255) default '#',
  `alt` char(255) NOT NULL default 'Sin descripcion',
  PRIMARY KEY  (`id`)
);

-- Creacion de los productos de aceites
INSERT INTO `ACEITES` (`id`, `src`,`precio`, `nome`, `href`, `alt`) VALUES 
  (1,'../imagenes/productos/aceite/Redimencion_Aceite-oliva-intenso.jpg','13.50€','Aceite de oliva Intenso','#','Imagen de Aceite oliva intenso'),
  (2,'../imagenes/productos/aceite/Redimencion_aceite-prisma.jpg','17.50€','Aceite Prisma','#','Imagen aceite prisma'),
  (3,'../imagenes/productos/aceite/Redimencion_Pago-de-Visarejos.png','11.50€','Aceite pago de visarejos','#','Imagen de aceite pago de visarejos');
  
-- <------------------------------------->