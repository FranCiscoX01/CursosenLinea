-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-08-2019 a las 23:03:27
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `seminariodb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Carreras`
--

CREATE TABLE `Carreras` (
  `idCarrera` int(11) NOT NULL,
  `Carrera` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Carreras`
--

INSERT INTO `Carreras` (`idCarrera`, `Carrera`) VALUES
(1, 'Derecho'),
(2, 'Mercadotecnia'),
(3, 'Mecatronica'),
(4, 'Odontologia'),
(5, 'Pedagogia'),
(6, 'Psicologia'),
(7, 'Sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cursos`
--

CREATE TABLE `Cursos` (
  `idCurso` int(11) NOT NULL,
  `Curso` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Cursos`
--

INSERT INTO `Cursos` (`idCurso`, `Curso`) VALUES
(1, 'Curso de Java'),
(2, 'Curso de Python');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Examenes`
--

CREATE TABLE `Examenes` (
  `idExamen` int(11) NOT NULL,
  `Username` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idCurso` int(11) NOT NULL,
  `CaliUnidadUno` int(11) DEFAULT NULL,
  `IntentosUno` int(11) DEFAULT NULL,
  `CaliUnidadDos` int(11) DEFAULT NULL,
  `IntentosDos` int(11) DEFAULT NULL,
  `CaliUnidadTres` int(11) DEFAULT NULL,
  `IntentosTres` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Examenes`
--

-- INSERT INTO `Examenes` (`idExamen`, `Username`, `idCurso`, `CaliUnidadUno`, `IntentosUno`, `CaliUnidadDos`, `IntentosDos`, `CaliUnidadTres`, `IntentosTres`) VALUES
-- (4, 'mimi21', 1, 9, 1, 8, 1, 10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `LoginUsuarios`
--

CREATE TABLE `LoginUsuarios` (
  `idLoginUsu` int(11) NOT NULL,
  `Username` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Password` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `LoginUsuarios`
--

INSERT INTO `LoginUsuarios` (`idLoginUsu`, `Username`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Preguntas`
--

CREATE TABLE `Preguntas` (
  `idPregunta` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL,
  `Unidad` int(11) NOT NULL,
  `Pregunta` varchar(9999) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Preguntas`
--

INSERT INTO `Preguntas` (`idPregunta`, `idCurso`, `Unidad`, `Pregunta`) VALUES
(1, 1, 1, 'El nombre del programa debe de iniciar con mayuscula?'),
(2, 1, 1, 'El nombre de la clase debe ser diferente al paquete?'),
(3, 1, 1, 'Las librerias se llaman dentro de:'),
(4, 1, 1, 'El llamado de una libreria se hace usando el:'),
(5, 1, 1, 'Que es el bytecode?'),
(6, 1, 1, 'En que epoca se presento Java?'),
(7, 1, 1, 'Que modificador de acceso hace que una clase sea publica en Java?'),
(8, 1, 1, 'El operador break en una estructura switch se utiliza para:'),
(9, 1, 1, 'Cual es la precision de un tipo de dato byte?'),
(10, 1, 1, 'Es necesario utilizar el enunciado break en una estructura switch para que el programa compile?'),
(11, 1, 2, 'Que simbolos se utilizan para comentarios de una sola linea?'),
(12, 1, 2, 'Que se puede utilizar como identificador?'),
(13, 1, 2, 'Cuanto mide del valor logico de boolean?'),
(14, 1, 2, 'Se declara como la clase que termina la cadena de una herencia'),
(15, 1, 2, 'En java la entrada desde teclado y la salida hasta pantalla estan reguladas por la clase system. Esta clase pertenece al package:'),
(16, 1, 2, 'Objeto de la clase inputstream preparado para recibir datos desde la entrada estandar del sistema:'),
(17, 1, 2, 'Cuantos tipos de variables miembro existen?'),
(18, 1, 2, 'Si no se especifica una superclase se asume que se hereda de la clase:'),
(19, 1, 2, 'La edicion de Java para entornos de empresa es:'),
(20, 1, 2, 'El API estandar de acceso a bases de datos en Java es:'),
(21, 1, 3, 'Cuanto vale w?'),
(22, 1, 3, 'El API de EJB forma parte de:'),
(23, 1, 3, 'Spring Framework es:'),
(24, 1, 3, 'Cual es la version mas reciente de Java en produccion? '),
(25, 1, 3, 'El archivo pom.xml es el archivo de configuracion de:'),
(26, 1, 3, 'Para que se usa el patron DTO?'),
(27, 1, 3, 'Para que se usa el patron DAO?'),
(28, 1, 3, 'Que es una clase?'),
(29, 1, 3, 'Cual es la funcion de un constructor?'),
(30, 1, 3, 'Que es un Objeto?'),
(31, 2, 1, 'Que significa EOF?'),
(32, 2, 1, 'if, else, for y while son:'),
(33, 2, 1, 'int, char, float, string y boolean son:'),
(34, 2, 1, 'Una cola es:'),
(35, 2, 1, 'Un bucle o ciclo es:'),
(36, 2, 1, 'Imperativo, declarativo y orientado a objetos son:'),
(37, 2, 1, 'La programacion se puede definir como...'),
(38, 2, 1, 'Cual es el codigo ASCII decimal de la letra A mayscula?'),
(39, 2, 1, 'En un lenguaje debilmente tipado...'),
(40, 2, 1, 'Es un tipo de error que se da en tiempo de ejecucion es:'),
(41, 2, 2, 'Es la accion u operacion que realiza un objeto'),
(42, 2, 2, 'Su principal funcion es inicializar las variables de la clase'),
(43, 2, 2, 'Es una entidad que se caracteriza por sus atributos'),
(44, 2, 2, 'Son algunos ejemplos de objetos'),
(45, 2, 2, 'Consiste en implementar multiples formas de un mismo metodo'),
(46, 2, 2, 'Es un conjunto de objetos que realizan una tarea determinada'),
(47, 2, 2, 'Son las caracteristicas que diferencian a un objeto de otro'),
(48, 2, 2, 'Es la capacidad de crear varios metodos con el mismo nombre'),
(49, 2, 2, 'Tecnica que implementa la reutilizacion de codigo'),
(50, 2, 2, 'Es la forma de comunicacion entre los objetos'),
(51, 2, 3, 'Es la forma correcta de declarar un vector'),
(52, 2, 3, 'Son arreglos de tipo bidimensional'),
(53, 2, 3, 'Son estructuras de datos que albergan valores del mismo tipo'),
(54, 2, 3, 'La salida de la siguiente instruccion Python es: >>> print(1+ 2 + 3 + 4 + 5 * 2)'),
(55, 2, 3, 'Cual es el resultado que se obtiene al ejecutar esta instruccion Python? ... >>> print(17 % 3)'),
(56, 2, 3, 'La salida de la siguiente instruccion Python es: >>> print(2**3)'),
(57, 2, 3, 'Determine el resultado de la siguiente instruccion Python >>> print((8+6+5)%(2**2))'),
(58, 2, 3, 'Determine el resultado de la siguiente instruccion Python >>> print (-1+2)'),
(59, 2, 3, 'Cual de estas líneas no producira un error?'),
(60, 2, 3, 'Como se define una clase en python?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `RegistroActCurso`
--

CREATE TABLE `RegistroActCurso` (
  `idRegistro` int(11) NOT NULL,
  `Username` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idCurso` int(11) NOT NULL,
  `Act1` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Act2` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Act3` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Act4` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Act5` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Act6` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Act7` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Act8` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Act9` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Act10` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Act11` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Act12` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Act13` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Act14` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Act15` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `RegistroUsu`
--

CREATE TABLE `RegistroUsu` (
  `idRegistroUsu` int(11) NOT NULL,
  `Nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ApellidoP` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ApellidoM` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Username` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Correo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Pass` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Fecha` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Hora` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idCarrera` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `RegistroUsuCurso`
--

CREATE TABLE `RegistroUsuCurso` (
  `idCursoUsu` int(11) NOT NULL,
  `Username` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Respuestas`
--

CREATE TABLE `Respuestas` (
  `idRespuesta` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL,
  `Unidad` int(11) NOT NULL,
  `idPregunta` int(11) NOT NULL,
  `Respuesta` varchar(9999) COLLATE utf8_spanish_ci NOT NULL,
  `Correcto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Respuestas`
--

INSERT INTO `Respuestas` (`idRespuesta`, `idCurso`, `Unidad`, `idPregunta`, `Respuesta`, `Correcto`) VALUES
(1, 1, 1, 1, 'SI', 0),
(2, 1, 1, 1, 'NO', 1),
(3, 1, 1, 1, 'Todo en mayuscula', 0),
(4, 1, 1, 1, 'Todo en minuscula', 0),
(5, 1, 1, 2, 'No importa', 0),
(6, 1, 1, 2, 'NO', 1),
(7, 1, 1, 2, 'SI', 0),
(8, 1, 1, 2, 'Ninguna de las anteriores', 0),
(9, 1, 1, 3, 'Package', 1),
(10, 1, 1, 3, 'Public Class', 0),
(11, 1, 1, 3, 'Void Main', 0),
(12, 1, 1, 3, 'Ninguna de las anteriores', 0),
(13, 1, 1, 4, 'Scanner', 0),
(14, 1, 1, 4, 'Import', 1),
(15, 1, 1, 4, 'String', 0),
(16, 1, 1, 4, 'Void', 0),
(17, 1, 1, 5, 'Tipo de variable', 0),
(18, 1, 1, 5, 'Depurador de codigo', 0),
(19, 1, 1, 5, 'Formato de compilacion', 1),
(20, 1, 1, 5, 'Intercambio de datos', 0),
(21, 1, 1, 6, '1990', 0),
(22, 1, 1, 6, '1998', 0),
(23, 1, 1, 6, '1995', 1),
(24, 1, 1, 6, '1993', 0),
(25, 1, 1, 7, 'private', 0),
(26, 1, 1, 7, 'protected', 0),
(27, 1, 1, 7, 'public', 1),
(28, 1, 1, 7, 'free', 0),
(29, 1, 1, 8, 'Terminar el programa', 0),
(30, 1, 1, 8, 'Para pasar a la siguiente evaluacion', 0),
(31, 1, 1, 8, 'Finalizar la evaluacion de condiciones', 1),
(32, 1, 1, 8, 'Ninguna de las respuestas es correcta', 0),
(33, 1, 1, 9, '8 bits', 0),
(34, 1, 1, 9, '16 bits', 0),
(35, 1, 1, 9, '32 bits', 0),
(36, 1, 1, 9, '64 bits', 1),
(37, 1, 1, 10, 'Si, es estrictamente necesario', 1),
(38, 1, 1, 10, 'No, no es necesario', 0),
(39, 1, 1, 10, 'Si, si hay condiciones que no se puedan dar', 0),
(40, 1, 1, 10, 'Si, pero solo en switch que manejen enteros', 0),
(41, 1, 2, 11, '/**/', 0),
(42, 1, 2, 11, '//', 1),
(43, 1, 2, 11, '//*', 0),
(44, 1, 2, 11, '&&&&', 0),
(45, 1, 2, 12, '$', 1),
(46, 1, 2, 12, '%', 0),
(47, 1, 2, 12, '=', 0),
(48, 1, 2, 12, '&', 0),
(49, 1, 2, 13, '2 bits', 0),
(50, 1, 2, 13, '1 bit', 1),
(51, 1, 2, 13, '4 bits', 0),
(52, 1, 2, 13, '8 bits', 0),
(53, 1, 2, 14, 'Final', 1),
(54, 1, 2, 14, 'abstract', 0),
(55, 1, 2, 14, 'void', 0),
(56, 1, 2, 14, 'pubic', 0),
(57, 1, 2, 15, 'java.io', 0),
(58, 1, 2, 15, 'java.lang', 1),
(59, 1, 2, 15, 'java.net', 0),
(60, 1, 2, 15, 'java.pk', 0),
(61, 1, 2, 16, 'system.in', 1),
(62, 1, 2, 16, 'system.out', 0),
(63, 1, 2, 16, 'system.else', 0),
(64, 1, 2, 16, 'system.if', 0),
(65, 1, 2, 17, '51', 0),
(66, 1, 2, 17, '6', 0),
(67, 1, 2, 17, '3', 1),
(68, 1, 2, 17, '1', 0),
(69, 1, 2, 18, 'public', 0),
(70, 1, 2, 18, 'Object', 1),
(71, 1, 2, 18, 'implements', 0),
(72, 1, 2, 18, 'void', 0),
(73, 1, 2, 19, 'Java ME', 0),
(74, 1, 2, 19, 'Java SE', 0),
(75, 1, 2, 19, 'Java EE', 1),
(76, 1, 2, 19, 'Java AE', 0),
(77, 1, 2, 20, 'ODBC', 0),
(78, 1, 2, 20, 'JDBC', 1),
(79, 1, 2, 20, 'JPA/Hibernate', 0),
(80, 1, 2, 20, 'Spring', 0),
(81, 1, 3, 21, '0', 1),
(82, 1, 3, 21, '30', 0),
(83, 1, 3, 21, '90', 0),
(84, 1, 3, 21, '60', 0),
(85, 1, 3, 22, 'J2EE', 1),
(86, 1, 3, 22, '.NET', 0),
(87, 1, 3, 22, 'HTML', 0),
(88, 1, 3, 22, 'PHP', 0),
(89, 1, 3, 23, 'Un framework para el desarrollo de aplicaciones PHP', 0),
(90, 1, 3, 23, 'Un framework para el desarrollo de aplicaciones .net', 0),
(91, 1, 3, 23, 'Un framework para el desarrollo de aplicaciones Java', 1),
(92, 1, 3, 23, 'Un framework para el desarrollo de aplicaciones Python', 0),
(93, 1, 3, 24, 'La 7', 0),
(94, 1, 3, 24, 'La 8', 1),
(95, 1, 3, 24, 'La 9', 0),
(96, 1, 3, 24, 'La 1', 0),
(97, 1, 3, 25, 'ant', 0),
(98, 1, 3, 25, 'gradle', 0),
(99, 1, 3, 25, 'maven', 1),
(100, 1, 3, 25, 'asd', 0),
(101, 1, 3, 26, 'Para implementar la capa de acceso a datos', 0),
(102, 1, 3, 26, 'Para intercambiar datos entre procesos', 1),
(103, 1, 3, 26, 'Para implementar la capa de presentacion', 0),
(104, 1, 3, 26, 'Para implementar la capa de network', 0),
(105, 1, 3, 27, 'Para implementar la capa de acceso a datos', 1),
(106, 1, 3, 27, 'Para intercambiar datos entre procesos', 0),
(107, 1, 3, 27, 'Para implementar la capa de presentacion', 0),
(108, 1, 3, 27, 'Para implemtar la capa de network', 0),
(109, 1, 3, 28, 'Es una fabrica de objetos', 1),
(110, 1, 3, 28, 'Es la forma como se representan los datos', 0),
(111, 1, 3, 28, 'Sirve para crear otras clases', 0),
(112, 1, 3, 28, 'Ninguna de las anteriores', 0),
(113, 1, 3, 29, 'Construir la clase', 0),
(114, 1, 3, 29, 'Contruir un objeto', 0),
(115, 1, 3, 29, 'Para inicializar la clase', 0),
(116, 1, 3, 29, 'Para asignar valores a los datos del objetos', 1),
(117, 1, 3, 30, 'Es una unidad dentro de la programacion que consta de un estado y un comportamiento', 1),
(118, 1, 3, 30, 'Es el comportamiento de un programa', 0),
(119, 1, 3, 30, 'Es la accion a realizar', 0),
(120, 1, 3, 30, 'Es la clave del problema', 0),
(121, 2, 1, 31, 'Empty or full', 0),
(122, 2, 1, 31, 'End of file', 1),
(123, 2, 1, 31, 'End of loop', 0),
(124, 2, 1, 31, 'Las demas respuestas no son correctas', 0),
(125, 2, 1, 32, 'Sentencias de control', 1),
(126, 2, 1, 32, 'Funciones de acceso a datos', 0),
(127, 2, 1, 32, 'Tipos de datos ', 0),
(128, 2, 1, 32, 'Las demas respuestas no son correctas', 0),
(129, 2, 1, 33, 'Tipos de datos', 1),
(130, 2, 1, 33, 'Funciones de acceso a datos', 0),
(131, 2, 1, 33, 'Instrucciones de acceso a datos', 0),
(132, 2, 1, 33, 'Sentencias de control', 0),
(133, 2, 1, 34, 'Una estructura de datos en la que las inserciones se realizan por un extremo y las extracciones por el otro extremo', 1),
(134, 2, 1, 34, 'Una estructura de datos en la que las inserciones y extracciones se realizan por el mismo extremo', 0),
(135, 2, 1, 34, 'Una estructura de datos en la que solo se pueden realizar inserciones, pero nunca extracciones', 0),
(136, 2, 1, 34, 'Las demas respuestas no son correctas', 0),
(137, 2, 1, 35, 'Una sentencia que permite decidir si se ejecuta o no se ejecuta una sola vez un bloque aislado de codigo', 0),
(138, 2, 1, 35, 'Una sentencia que ejecuta otra sentencia que a su vez ejecuta la primera sentencia', 0),
(139, 2, 1, 35, 'Una sentencia que permite ejecutar un bloque aislado de codigo varias veces hasta que se cumpla (o deje de cumplirse) la condicion asignada al bucle', 1),
(140, 2, 1, 35, 'Las demas respuestas no son correctas', 0),
(141, 2, 1, 36, 'Modos de compilar el codigo fuente de un programa de ordenador', 0),
(142, 2, 1, 36, 'Paradigmas de programacion', 1),
(143, 2, 1, 36, 'Modos de definir el pseudocodigo de un programa de ordenador', 0),
(144, 2, 1, 36, 'Las demas respuestas no son correctas', 0),
(145, 2, 1, 37, 'La ejecucion de programas de ordenador desde la linea de comandos', 0),
(146, 2, 1, 37, 'El proceso de plantear, codificar, depurar y mantener el codigo fuente de programas de ordenador', 1),
(147, 2, 1, 37, 'La instalacion de programas en sistemas operativos desde la linea de comandos', 0),
(148, 2, 1, 37, 'Las demas respuestas no son correctas ', 0),
(149, 2, 1, 38, '32', 0),
(150, 2, 1, 38, '65', 1),
(151, 2, 1, 38, '97', 0),
(152, 2, 1, 38, '126', 0),
(153, 2, 1, 39, 'Un valor de un tipo puede ser tratado como de otro tipo', 0),
(154, 2, 1, 39, 'Un valor de un tipo nunca puede ser tratado como de otro tipo', 1),
(155, 2, 1, 39, 'Un valor de un tipo puede ser tratado como de otro tipo siempre que se realice una conversion de forma explicita', 0),
(156, 2, 1, 39, 'Las demas respuestas no son correctas', 0),
(157, 2, 1, 40, 'Excepciones', 1),
(158, 2, 1, 40, 'Ayuda de Windows', 0),
(159, 2, 1, 40, 'Try/Catch', 0),
(160, 2, 1, 40, 'Fail', 0),
(161, 2, 2, 41, 'Objeto', 0),
(162, 2, 2, 41, 'Metodo', 1),
(163, 2, 2, 41, 'Herencia', 0),
(164, 2, 2, 41, 'Conversiones', 0),
(165, 2, 2, 42, 'Metodo Constructor', 1),
(166, 2, 2, 42, 'Metodo Main', 0),
(167, 2, 2, 42, 'Metodo Destructor', 0),
(168, 2, 2, 42, 'Metodo Billigns', 0),
(169, 2, 2, 43, 'Encapsulamiento', 0),
(170, 2, 2, 43, 'Lapiz', 0),
(171, 2, 2, 43, 'Metodo', 0),
(172, 2, 2, 43, 'Objeto', 1),
(173, 2, 2, 44, 'Auto, Lapiz, Rosa', 0),
(174, 2, 2, 44, 'Reloj, ObtenerHora, Fecha', 0),
(175, 2, 2, 44, 'MiClas, extens, int b', 0),
(176, 2, 2, 44, 'Lapiz, Pez, Reloj', 1),
(177, 2, 2, 45, 'Abstraccion', 0),
(178, 2, 2, 45, 'Multicast', 0),
(179, 2, 2, 45, 'Herencia', 0),
(180, 2, 2, 45, 'Polimorfismo', 1),
(181, 2, 2, 46, 'Clase', 1),
(182, 2, 2, 46, 'Metodo', 0),
(183, 2, 2, 46, 'Mensaje', 0),
(184, 2, 2, 46, 'Herencia', 0),
(185, 2, 2, 47, 'Variables', 0),
(186, 2, 2, 47, 'Metodos', 0),
(187, 2, 2, 47, 'Atributos', 1),
(188, 2, 2, 47, 'Color', 0),
(189, 2, 2, 48, 'Herencia', 0),
(190, 2, 2, 48, 'Polimorfismo', 0),
(191, 2, 2, 48, 'Sobrecarga', 1),
(192, 2, 2, 48, 'Atributos', 0),
(193, 2, 2, 49, 'Abstraccion', 0),
(194, 2, 2, 49, 'Encapsulamiento', 0),
(195, 2, 2, 49, 'Herencia', 1),
(196, 2, 2, 49, 'Polimorfismo', 0),
(197, 2, 2, 50, 'Castings', 0),
(198, 2, 2, 50, 'Celular', 0),
(199, 2, 2, 50, 'Mensajes', 1),
(200, 2, 2, 50, 'Metodos', 0),
(201, 2, 3, 51, 'int vector [] = new int [10];', 1),
(202, 2, 3, 51, 'int vector [] = new int [10]', 0),
(203, 2, 3, 51, 'int vector [][] = new int [5][5];', 0),
(204, 2, 3, 51, 'int vector = new int [10];', 0),
(205, 2, 3, 52, 'Vectores', 0),
(206, 2, 3, 52, 'Arreglos', 0),
(207, 2, 3, 52, 'Constructor', 0),
(208, 2, 3, 52, 'Matrices', 1),
(209, 2, 3, 53, 'Matrices', 0),
(210, 2, 3, 53, 'Arreglos', 1),
(211, 2, 3, 53, 'Vectores', 0),
(212, 2, 3, 53, 'Cubos', 0),
(213, 2, 3, 54, '30', 0),
(214, 2, 3, 54, '25', 0),
(215, 2, 3, 54, '20', 1),
(216, 2, 3, 54, '15', 0),
(217, 2, 3, 55, '5', 0),
(218, 2, 3, 55, '3', 0),
(219, 2, 3, 55, '2', 1),
(220, 2, 3, 55, '7', 0),
(221, 2, 3, 56, '6', 0),
(222, 2, 3, 56, '5', 0),
(223, 2, 3, 56, '8', 1),
(224, 2, 3, 56, '9', 0),
(225, 2, 3, 57, '6', 0),
(226, 2, 3, 57, '5', 0),
(227, 2, 3, 57, '4', 0),
(228, 2, 3, 57, '3', 1),
(229, 2, 3, 58, '0', 0),
(230, 2, 3, 58, '1', 1),
(231, 2, 3, 58, '-1', 0),
(232, 2, 3, 58, '2', 0),
(233, 2, 3, 59, 'def funcion():', 1),
(234, 2, 3, 59, 'include funcion():', 0),
(235, 2, 3, 59, 'define funcion():', 0),
(236, 2, 3, 59, 'define funcion(){ continue }', 0),
(237, 2, 3, 60, 'class Clase:', 1),
(238, 2, 3, 60, 'class Clase(self):', 0),
(239, 2, 3, 60, 'class define Clase(self):', 0),
(240, 2, 3, 60, 'new class Clase:', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Carreras`
--
ALTER TABLE `Carreras`
  ADD PRIMARY KEY (`idCarrera`);

--
-- Indices de la tabla `Cursos`
--
ALTER TABLE `Cursos`
  ADD PRIMARY KEY (`idCurso`);

--
-- Indices de la tabla `Examenes`
--
ALTER TABLE `Examenes`
  ADD PRIMARY KEY (`idExamen`),
  ADD KEY `idCurso` (`idCurso`);

--
-- Indices de la tabla `LoginUsuarios`
--
ALTER TABLE `LoginUsuarios`
  ADD PRIMARY KEY (`idLoginUsu`);

--
-- Indices de la tabla `Preguntas`
--
ALTER TABLE `Preguntas`
  ADD PRIMARY KEY (`idPregunta`);

--
-- Indices de la tabla `RegistroActCurso`
--
ALTER TABLE `RegistroActCurso`
  ADD PRIMARY KEY (`idRegistro`),
  ADD KEY `idCurso` (`idCurso`);

--
-- Indices de la tabla `RegistroUsu`
--
ALTER TABLE `RegistroUsu`
  ADD PRIMARY KEY (`idRegistroUsu`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Correo` (`Correo`),
  ADD KEY `idCarrera` (`idCarrera`);

--
-- Indices de la tabla `RegistroUsuCurso`
--
ALTER TABLE `RegistroUsuCurso`
  ADD PRIMARY KEY (`idCursoUsu`),
  ADD KEY `idCurso` (`idCurso`);

--
-- Indices de la tabla `Respuestas`
--
ALTER TABLE `Respuestas`
  ADD PRIMARY KEY (`idRespuesta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Carreras`
--
ALTER TABLE `Carreras`
  MODIFY `idCarrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `Cursos`
--
ALTER TABLE `Cursos`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `Examenes`
--
ALTER TABLE `Examenes`
  MODIFY `idExamen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `LoginUsuarios`
--
ALTER TABLE `LoginUsuarios`
  MODIFY `idLoginUsu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `Preguntas`
--
ALTER TABLE `Preguntas`
  MODIFY `idPregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `RegistroActCurso`
--
ALTER TABLE `RegistroActCurso`
  MODIFY `idRegistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `RegistroUsu`
--
ALTER TABLE `RegistroUsu`
  MODIFY `idRegistroUsu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `RegistroUsuCurso`
--
ALTER TABLE `RegistroUsuCurso`
  MODIFY `idCursoUsu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Respuestas`
--
ALTER TABLE `Respuestas`
  MODIFY `idRespuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Examenes`
--
ALTER TABLE `Examenes`
  ADD CONSTRAINT `examenes_ibfk_1` FOREIGN KEY (`idCurso`) REFERENCES `Cursos` (`idCurso`);

--
-- Filtros para la tabla `RegistroActCurso`
--
ALTER TABLE `RegistroActCurso`
  ADD CONSTRAINT `registroactcurso_ibfk_1` FOREIGN KEY (`idCurso`) REFERENCES `Cursos` (`idCurso`);

--
-- Filtros para la tabla `RegistroUsu`
--
ALTER TABLE `RegistroUsu`
  ADD CONSTRAINT `registrousu_ibfk_1` FOREIGN KEY (`idCarrera`) REFERENCES `Carreras` (`idCarrera`);

--
-- Filtros para la tabla `RegistroUsuCurso`
--
ALTER TABLE `RegistroUsuCurso`
  ADD CONSTRAINT `registrousucurso_ibfk_2` FOREIGN KEY (`idCurso`) REFERENCES `Cursos` (`idCurso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
