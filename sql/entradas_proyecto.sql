CREATE DATABASE IF NOT EXISTS venta_entradas; /*creamos la base de datos*/

USE venta_entradas;/*usamos esa base de datos*/

CREATE TABLE IF NOT EXISTS administrador (

          id int AUTO_INCREMENT PRIMARY KEY,
		  nombre varchar(40),
		  email  varchar(50),
		  pasword varchar(20), 
          cargo varchar(20),
          imagen varchar(50)
       
		  )ENGINE=MyISAM DEFAULT CHARSET=latin1 ; 

CREATE TABLE IF NOT EXISTS artista (
         
          id int AUTO_INCREMENT PRIMARY KEY,
		  nombre varchar(40),
		  genero  varchar(50),
		  precioA varchar(20), 
          precioB varchar(20),
          imagen varchar(50)
       
		  )ENGINE=MyISAM DEFAULT CHARSET=latin1 ;   
