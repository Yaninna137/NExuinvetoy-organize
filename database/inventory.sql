-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2023 a las 11:24:06
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventory`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_17_085418_create_registro_servidors_table', 2),
(6, '2023_11_17_085500_create_tabla_datos_categorias_table', 2),
(7, '2023_11_17_085517_create_tabla_datos_historials_table', 2),
(8, '2023_11_17_085525_create_tabla_datos_productos_table', 2),
(9, '2023_11_17_085537_create_tabla_datos_productos_eliminados_table', 2),
(10, '2023_11_17_085549_create_tabla_datos_proovedores_table', 2),
(11, '2023_11_17_085556_create_tabla_datos_proovedores_eliminados_table', 2),
(12, '2023_11_17_085646_create_tabla_datos_trabajadores_eliminados_table', 2),
(13, '2023_11_17_085703_create_tabla_datos_mensaje_consultas_table', 2),
(14, '2023_11_17_085354_create_registro_administradors_table', 3),
(15, '2023_11_17_085407_create_registro_empleados_table', 4),
(16, '2023_11_17_085315_create_pagina_ajuste_empleados_table', 5),
(17, '2023_11_17_085251_create_pagina_ajuste_administradors_table', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina_ajuste_administradors`
--

CREATE TABLE `pagina_ajuste_administradors` (
  `ID_Ajuste_Adm` int(10) UNSIGNED NOT NULL,
  `Color_Panel` varchar(255) DEFAULT NULL,
  `Fuente_de_letra` varchar(255) DEFAULT NULL,
  `Tamaño_de_letra` int(11) DEFAULT NULL,
  `Configuracion_Notificaciones` varchar(255) DEFAULT NULL,
  `Gestion_de_Usuarios` varchar(255) DEFAULT NULL,
  `ID_Registro_Administrador` int(10) UNSIGNED DEFAULT NULL,
  `ID_Registro_Servidor` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina_ajuste_empleados`
--

CREATE TABLE `pagina_ajuste_empleados` (
  `ID_Ajuste_Emp` int(10) UNSIGNED NOT NULL,
  `Color_Panel` varchar(255) DEFAULT NULL,
  `Fuente_de_letra` varchar(255) DEFAULT NULL,
  `Tamaño_de_letra` int(11) DEFAULT NULL,
  `Configuracion_Notificaciones` varchar(255) DEFAULT NULL,
  `ID_Registro_Empleados` int(10) UNSIGNED DEFAULT NULL,
  `ID_Registro_Servidor` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedors`
--

CREATE TABLE `proveedors` (
  `ID_Proveedor` int(10) UNSIGNED NOT NULL,
  `ID_Registro_Servidor` int(10) UNSIGNED DEFAULT NULL,
  `proveedor` varchar(255) NOT NULL,
  `direccion` varchar(11) NOT NULL,
  `Imagen_Proveedor` blob DEFAULT NULL,
  `Tipo_de_Producto_que_abastece` varchar(255) DEFAULT NULL,
  `Correo` varchar(255) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Fecha_de_ingreso` date DEFAULT NULL,
  `Fecha_De_Ultima_Vez_Que_Ayudo_Abastecer` date DEFAULT NULL,
  `Informacion_de_Productos_y_Costos` varchar(600) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proveedors`
--

INSERT INTO `proveedors` (`ID_Proveedor`, `ID_Registro_Servidor`, `proveedor`, `direccion`, `Imagen_Proveedor`, `Tipo_de_Producto_que_abastece`, `Correo`, `Telefono`, `Fecha_de_ingreso`, `Fecha_De_Ultima_Vez_Que_Ayudo_Abastecer`, `Informacion_de_Productos_y_Costos`, `created_at`, `updated_at`) VALUES
(7, NULL, 'alexis', '', NULL, NULL, 'alexismonsale@gmail.com', 3271373, '2023-12-01', NULL, NULL, '2023-11-21 17:50:15', '2023-11-21 17:50:15'),
(8, NULL, 'juanmellado', '', NULL, NULL, 'juanmellado@gmail.com', 234525, '2023-12-02', NULL, NULL, '2023-11-21 17:59:38', '2023-11-21 17:59:38'),
(13, NULL, 'JOAQUIN', 'CALLE 123', NULL, NULL, 'JOAQUIN@GMAIL.COM', 17236831, NULL, NULL, NULL, '2023-11-21 23:49:45', '2023-11-21 23:49:45'),
(14, NULL, 'JUAN', 'ASDF1', NULL, NULL, 'JUANQLJELF@FSADF', 23452, NULL, NULL, NULL, '2023-11-21 23:51:53', '2023-11-21 23:51:53'),
(15, NULL, 'JUANMELLADO', '1234ASD', NULL, NULL, 'JUANMELLADO@GMAIL.COM', 12341, NULL, NULL, NULL, '2023-11-21 23:53:16', '2023-11-21 23:53:16'),
(16, NULL, 'DONCARLOS', 'ASDF123', NULL, NULL, 'DONCARLOS@GMAIL.COM', 12341234, NULL, NULL, NULL, '2023-11-21 23:53:48', '2023-11-21 23:53:48'),
(17, NULL, 'SEBASTIAN', 'AASD1', NULL, NULL, 'SEBASTIAN@GMAIL.COM', 162635, NULL, NULL, NULL, '2023-11-21 23:55:56', '2023-11-21 23:55:56'),
(18, NULL, 'paolo', 'juan 123', NULL, NULL, 'paolo@gmail.com', 987627173, NULL, NULL, NULL, '2023-11-22 00:00:14', '2023-11-22 00:00:14'),
(19, NULL, 'JUAN SEBASTIAN', 'JUANSEBA12', NULL, NULL, 'JUANSEBASTIAN@GMAIL.COM', 918236371, NULL, NULL, NULL, '2023-11-22 00:01:41', '2023-11-22 00:01:41'),
(20, NULL, 'MELLADO', 'FALSA 123', NULL, NULL, 'MELLADO@GMAIL.COM', 91826361, NULL, NULL, NULL, '2023-11-22 00:11:07', '2023-11-22 00:11:07'),
(21, NULL, 'ALEXIS', 'DON JUAN123', NULL, NULL, 'ALEXISMONSALVE@GMAIL.COM', 1873781, NULL, NULL, NULL, '2023-11-22 12:07:55', '2023-11-22 12:07:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_administradors`
--

CREATE TABLE `registro_administradors` (
  `ID_Registro_Administrador` int(10) UNSIGNED NOT NULL,
  `Nombre_Usuario` varchar(255) NOT NULL,
  `Img_Usuario` blob DEFAULT NULL,
  `Tipo` varchar(255) NOT NULL,
  `rut_usuario` int(11) NOT NULL,
  `Contrasena_Usuario` varchar(60) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Fecha_ingreso_al_Sistema` date DEFAULT NULL,
  `En_linea` int(11) DEFAULT NULL,
  `Habilitado_el_Colaborativo` int(11) DEFAULT NULL,
  `ID_Registro_Servidor` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_empleados`
--

CREATE TABLE `registro_empleados` (
  `ID_Registro_Empleados` int(10) UNSIGNED NOT NULL,
  `Nombre_Usuario` varchar(255) DEFAULT NULL,
  `Tipo` varchar(255) DEFAULT NULL,
  `Imagen_Usuario` blob DEFAULT NULL,
  `rut_usuario` int(11) DEFAULT NULL,
  `Contraseña_Usuario` varchar(60) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Teléfono` int(11) DEFAULT NULL,
  `Fecha_ingreso_al_Sistema` date DEFAULT NULL,
  `En_línea` int(11) DEFAULT NULL,
  `ID_Registro_Administrador` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_servidors`
--

CREATE TABLE `registro_servidors` (
  `ID_Registro_Servidor` int(10) UNSIGNED NOT NULL,
  `Nombre_Servidor` varchar(255) NOT NULL,
  `Imagen_Servidor` blob DEFAULT NULL,
  `Contrasena_Servidor` varchar(60) NOT NULL,
  `Comentario_Uso_Plataforma` text NOT NULL,
  `Fecha_ingreso_al_Sistema` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `registro_servidors`
--

INSERT INTO `registro_servidors` (`ID_Registro_Servidor`, `Nombre_Servidor`, `Imagen_Servidor`, `Contrasena_Servidor`, `Comentario_Uso_Plataforma`, `Fecha_ingreso_al_Sistema`, `created_at`, `updated_at`) VALUES
(1, 'ASDFSAFA', NULL, '$2y$12$lCBwDPOfye.rpJyVLbYRR.YFaP/d.ctWhFnb3wJq2oYSKOFLnjH8O', 'ASDFAF', NULL, '2023-11-21 14:19:15', '2023-11-21 14:19:15'),
(2, 'fasdfasf', NULL, '$2y$12$O4qc.wV5VLP5Mu50LALPiOZ1W.sTWIFvwY2tvPjGUPNQ7s3VyBfEK', 'asdfasdf', NULL, '2023-11-21 14:19:33', '2023-11-21 14:19:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_datos_categorias`
--

CREATE TABLE `tabla_datos_categorias` (
  `ID_Categorias` int(10) UNSIGNED NOT NULL,
  `ID_Registro_Servidor` int(10) UNSIGNED DEFAULT NULL,
  `Tipo_de_Categoria` varchar(255) DEFAULT NULL,
  `Producto_Total_unidad` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tabla_datos_categorias`
--

INSERT INTO `tabla_datos_categorias` (`ID_Categorias`, `ID_Registro_Servidor`, `Tipo_de_Categoria`, `Producto_Total_unidad`, `created_at`, `updated_at`) VALUES
(1, NULL, 'DONJUAN2', 0, '2023-11-21 11:51:00', '2023-11-21 11:51:00'),
(2, NULL, 'FRUTAS', 0, '2023-11-21 11:51:20', '2023-11-21 11:51:20'),
(3, NULL, 'VERDURAS', 0, '2023-11-21 11:51:26', '2023-11-21 11:51:26'),
(4, NULL, 'DEPORTES', 0, '2023-11-21 11:51:31', '2023-11-21 11:51:31'),
(5, NULL, 'CALZADO', 0, '2023-11-21 11:51:38', '2023-11-21 11:51:38'),
(6, NULL, 'ROPA AMERICANA', 0, '2023-11-21 11:51:49', '2023-11-21 11:51:49'),
(7, NULL, 'ALIMENTOS NO PERECIBLES', 0, '2023-11-21 11:52:16', '2023-11-21 11:52:16'),
(8, NULL, 'JUGUETES', 0, '2023-11-21 11:53:38', '2023-11-21 11:53:38'),
(9, NULL, 'LOLAO', 0, '2023-11-22 00:02:22', '2023-11-22 00:02:22'),
(10, NULL, 'JUANLOL', 0, '2023-11-22 00:06:01', '2023-11-22 00:06:01'),
(11, NULL, 'COMESTIBLES', 0, '2023-11-22 12:08:38', '2023-11-22 12:08:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_datos_historials`
--

CREATE TABLE `tabla_datos_historials` (
  `ID_Historial` int(10) UNSIGNED NOT NULL,
  `Fecha_Registro` datetime DEFAULT NULL,
  `Tipo_Evento` varchar(255) DEFAULT NULL,
  `Descripcion_Evento` text DEFAULT NULL,
  `ID_Registro_Servicio` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_datos_productos`
--

CREATE TABLE `tabla_datos_productos` (
  `ID_Product` int(10) UNSIGNED NOT NULL,
  `ID_Registro_Servidor` int(10) UNSIGNED DEFAULT NULL,
  `Nombre_Producto` varchar(255) NOT NULL,
  `Codigo_Barra` int(11) NOT NULL,
  `Numero_de_Unidades` int(11) NOT NULL,
  `Imagen_Producto` blob DEFAULT NULL,
  `Precio_Comprado_por_Unidad` int(11) DEFAULT NULL,
  `Precio_Venta_por_Unidad` int(11) DEFAULT NULL,
  `Fecha_de_Caducacion` date DEFAULT NULL,
  `fecha_registro` date NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `ID_Categorias` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tabla_datos_productos`
--

INSERT INTO `tabla_datos_productos` (`ID_Product`, `ID_Registro_Servidor`, `Nombre_Producto`, `Codigo_Barra`, `Numero_de_Unidades`, `Imagen_Producto`, `Precio_Comprado_por_Unidad`, `Precio_Venta_por_Unidad`, `Fecha_de_Caducacion`, `fecha_registro`, `categoria`, `ID_Categorias`, `created_at`, `updated_at`) VALUES
(1, NULL, 'ASDF', 1234, 1234, NULL, NULL, NULL, NULL, '2023-09-09', 'ASDF', NULL, '2023-11-22 01:45:58', '2023-11-22 01:45:58'),
(2, NULL, 'YOUGURT', 1234421, 1298, NULL, NULL, NULL, NULL, '2020-08-09', 'ALIMENTO', NULL, '2023-11-22 01:47:05', '2023-11-22 01:47:05'),
(3, NULL, 'YOUGURT', 23641, 100, NULL, NULL, NULL, NULL, '2023-09-09', 'ALIMENTOS', NULL, '2023-11-22 02:43:54', '2023-11-22 02:43:54'),
(4, NULL, 'YOUGURT', 12332, 122, NULL, NULL, NULL, NULL, '2002-07-08', 'ALIMENTOSS', NULL, '2023-11-22 03:04:13', '2023-11-22 03:04:13'),
(5, NULL, 'TÉ', 1231312, 1000, NULL, NULL, NULL, NULL, '2029-08-09', 'ALIMENTOS', NULL, '2023-11-22 12:07:13', '2023-11-22 12:07:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_datos_productos_eliminados`
--

CREATE TABLE `tabla_datos_productos_eliminados` (
  `ID_R` int(10) UNSIGNED NOT NULL,
  `Nombre_Empleado_o_Administrador` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_datos_proveedores_eliminados`
--

CREATE TABLE `tabla_datos_proveedores_eliminados` (
  `ID_R` int(10) UNSIGNED NOT NULL,
  `Nombre_Servidor` varchar(255) DEFAULT NULL,
  `Nombre_Empleado_o_Administrador` varchar(255) DEFAULT NULL,
  `Encargado` varchar(255) DEFAULT NULL,
  `Correo` varchar(255) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Fecha_de_Dato_Eliminado` date DEFAULT NULL,
  `Fecha_De_Ingreso` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_datos_trabajadores_eliminados`
--

CREATE TABLE `tabla_datos_trabajadores_eliminados` (
  `ID_R` int(10) UNSIGNED NOT NULL,
  `Nombre_Servidor` varchar(255) DEFAULT NULL,
  `Nombre_Empleado_o_Administrador` varchar(255) NOT NULL,
  `rut` varchar(255) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Fecha_de_Dato_Eliminado` date DEFAULT NULL,
  `Fecha_De_Ingreso` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_mensaje_consultas`
--

CREATE TABLE `tabla_mensaje_consultas` (
  `ID_Consulta` int(10) UNSIGNED NOT NULL,
  `Nombre` char(50) NOT NULL,
  `Pregunta` varchar(400) NOT NULL,
  `Respuesta` varchar(400) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tabla_mensaje_consultas`
--

INSERT INTO `tabla_mensaje_consultas` (`ID_Consulta`, `Nombre`, `Pregunta`, `Respuesta`, `created_at`, `updated_at`) VALUES
(1, 'ALEXIS', 'HOLA', 'HOLA', '2023-11-22 11:55:42', '2023-11-22 11:55:42'),
(2, 'ALEXIS', 'COMO ESTAN?', 'LAJSKLDFJLASF', '2023-11-22 11:59:50', '2023-11-22 11:59:50'),
(3, 'asdfa', 'asdfasf', 'asdfasdf', '2023-11-22 12:00:45', '2023-11-22 12:00:45'),
(4, 'ALEXIS MONSALVE', '¿POR QUE LA TIERRA EXISTE?', 'COMO ESTAN?', '2023-11-22 12:03:25', '2023-11-22 12:03:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `rut` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `type`, `rut`, `password`, `email`, `phone`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'alexis', 'hombre', 21412423, '$2y$12$Ks6/asrKjI1AkgDr9iN7SeTjJmb/VuVmcirbiABF2ciOXZEFD3eXS', 'alexis@gmail.com', 234521343, NULL, NULL, '2023-11-21 09:26:11', '2023-11-21 09:26:11'),
(2, 'juanito', 'HOMBRE', 8721762, '$2y$12$04mplavlPKyrA/q7z.vQE.5VeeIwZwBFEGTolIOuDAIXOhmjuWt7m', 'juanito@hotmail.com', 23452345, NULL, NULL, '2023-11-21 10:15:01', '2023-11-21 10:15:01'),
(3, 'CapitanMaravilla', 'HOMBRE', 9172637, '$2y$12$.WnTAS/j8NOiao2l/eayYONmteLrjI3bHxS.lHUvGdtmfrip4UX7i', 'capitan@gmail.com', 23452345, NULL, NULL, '2023-11-21 10:35:30', '2023-11-21 10:35:30'),
(4, 'pepetapia', 'hombre', 2345235, '$2y$12$m39YW6p5Lanq21pH2euMmOqzVlcrCPlQ2I1xpaLC3XpUF9EDW8fQC', 'pepetapia@gmail.com', 42523535, NULL, NULL, '2023-11-21 12:51:19', '2023-11-21 12:51:19'),
(5, 'SONGOKU', 'HOMBRE', 8172382, '$2y$12$0WxcH3NNAWeJbIO3bzSyc.eOW.FgmEdv61YAYmpfycpCKf9/9WzbC', 'songoku@gmail.com', 17362171, NULL, NULL, '2023-11-21 14:20:43', '2023-11-21 14:20:43'),
(6, 'carlos', 'hombre', 1837371, '$2y$12$Bv5x9kyBULbr6Vl5V25Pm.EyUbfljdhfs6c/f1OiMbutk5yx55aOe', 'carlos@gmail.com', 17361734, NULL, NULL, '2023-11-22 00:14:10', '2023-11-22 00:14:10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagina_ajuste_administradors`
--
ALTER TABLE `pagina_ajuste_administradors`
  ADD PRIMARY KEY (`ID_Ajuste_Adm`),
  ADD KEY `pagina_ajuste_administradors_id_registro_administrador_foreign` (`ID_Registro_Administrador`),
  ADD KEY `pagina_ajuste_administradors_id_registro_servidor_foreign` (`ID_Registro_Servidor`);

--
-- Indices de la tabla `pagina_ajuste_empleados`
--
ALTER TABLE `pagina_ajuste_empleados`
  ADD PRIMARY KEY (`ID_Ajuste_Emp`),
  ADD KEY `pagina_ajuste_empleados_id_registro_empleados_foreign` (`ID_Registro_Empleados`),
  ADD KEY `pagina_ajuste_empleados_id_registro_servidor_foreign` (`ID_Registro_Servidor`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `proveedors`
--
ALTER TABLE `proveedors`
  ADD PRIMARY KEY (`ID_Proveedor`),
  ADD KEY `tabla_datos_proveedores_id_registro_servidor_foreign` (`ID_Registro_Servidor`);

--
-- Indices de la tabla `registro_administradors`
--
ALTER TABLE `registro_administradors`
  ADD PRIMARY KEY (`ID_Registro_Administrador`),
  ADD KEY `registro_administradors_id_registro_servidor_foreign` (`ID_Registro_Servidor`);

--
-- Indices de la tabla `registro_empleados`
--
ALTER TABLE `registro_empleados`
  ADD PRIMARY KEY (`ID_Registro_Empleados`),
  ADD KEY `registro_empleados_id_registro_administrador_foreign` (`ID_Registro_Administrador`);

--
-- Indices de la tabla `registro_servidors`
--
ALTER TABLE `registro_servidors`
  ADD PRIMARY KEY (`ID_Registro_Servidor`);

--
-- Indices de la tabla `tabla_datos_categorias`
--
ALTER TABLE `tabla_datos_categorias`
  ADD PRIMARY KEY (`ID_Categorias`),
  ADD KEY `tabla_datos_categorias_id_registro_servidor_foreign` (`ID_Registro_Servidor`);

--
-- Indices de la tabla `tabla_datos_historials`
--
ALTER TABLE `tabla_datos_historials`
  ADD PRIMARY KEY (`ID_Historial`),
  ADD KEY `tabla_datos_historials_id_registro_servicio_foreign` (`ID_Registro_Servicio`);

--
-- Indices de la tabla `tabla_datos_productos`
--
ALTER TABLE `tabla_datos_productos`
  ADD PRIMARY KEY (`ID_Product`),
  ADD KEY `tabla_datos_productos_id_registro_servidor_foreign` (`ID_Registro_Servidor`),
  ADD KEY `tabla_datos_productos_id_categorias_foreign` (`ID_Categorias`);

--
-- Indices de la tabla `tabla_datos_productos_eliminados`
--
ALTER TABLE `tabla_datos_productos_eliminados`
  ADD PRIMARY KEY (`ID_R`);

--
-- Indices de la tabla `tabla_datos_proveedores_eliminados`
--
ALTER TABLE `tabla_datos_proveedores_eliminados`
  ADD PRIMARY KEY (`ID_R`);

--
-- Indices de la tabla `tabla_datos_trabajadores_eliminados`
--
ALTER TABLE `tabla_datos_trabajadores_eliminados`
  ADD PRIMARY KEY (`ID_R`);

--
-- Indices de la tabla `tabla_mensaje_consultas`
--
ALTER TABLE `tabla_mensaje_consultas`
  ADD PRIMARY KEY (`ID_Consulta`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `pagina_ajuste_administradors`
--
ALTER TABLE `pagina_ajuste_administradors`
  MODIFY `ID_Ajuste_Adm` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagina_ajuste_empleados`
--
ALTER TABLE `pagina_ajuste_empleados`
  MODIFY `ID_Ajuste_Emp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedors`
--
ALTER TABLE `proveedors`
  MODIFY `ID_Proveedor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `registro_administradors`
--
ALTER TABLE `registro_administradors`
  MODIFY `ID_Registro_Administrador` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro_empleados`
--
ALTER TABLE `registro_empleados`
  MODIFY `ID_Registro_Empleados` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro_servidors`
--
ALTER TABLE `registro_servidors`
  MODIFY `ID_Registro_Servidor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tabla_datos_categorias`
--
ALTER TABLE `tabla_datos_categorias`
  MODIFY `ID_Categorias` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tabla_datos_historials`
--
ALTER TABLE `tabla_datos_historials`
  MODIFY `ID_Historial` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_datos_productos`
--
ALTER TABLE `tabla_datos_productos`
  MODIFY `ID_Product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tabla_datos_productos_eliminados`
--
ALTER TABLE `tabla_datos_productos_eliminados`
  MODIFY `ID_R` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_datos_proveedores_eliminados`
--
ALTER TABLE `tabla_datos_proveedores_eliminados`
  MODIFY `ID_R` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_datos_trabajadores_eliminados`
--
ALTER TABLE `tabla_datos_trabajadores_eliminados`
  MODIFY `ID_R` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_mensaje_consultas`
--
ALTER TABLE `tabla_mensaje_consultas`
  MODIFY `ID_Consulta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pagina_ajuste_administradors`
--
ALTER TABLE `pagina_ajuste_administradors`
  ADD CONSTRAINT `pagina_ajuste_administradors_id_registro_administrador_foreign` FOREIGN KEY (`ID_Registro_Administrador`) REFERENCES `registro_administradors` (`ID_Registro_Administrador`),
  ADD CONSTRAINT `pagina_ajuste_administradors_id_registro_servidor_foreign` FOREIGN KEY (`ID_Registro_Servidor`) REFERENCES `registro_servidors` (`ID_Registro_Servidor`);

--
-- Filtros para la tabla `pagina_ajuste_empleados`
--
ALTER TABLE `pagina_ajuste_empleados`
  ADD CONSTRAINT `pagina_ajuste_empleados_id_registro_empleados_foreign` FOREIGN KEY (`ID_Registro_Empleados`) REFERENCES `registro_empleados` (`ID_Registro_Empleados`),
  ADD CONSTRAINT `pagina_ajuste_empleados_id_registro_servidor_foreign` FOREIGN KEY (`ID_Registro_Servidor`) REFERENCES `registro_servidors` (`ID_Registro_Servidor`);

--
-- Filtros para la tabla `proveedors`
--
ALTER TABLE `proveedors`
  ADD CONSTRAINT `tabla_datos_proveedores_id_registro_servidor_foreign` FOREIGN KEY (`ID_Registro_Servidor`) REFERENCES `registro_servidors` (`ID_Registro_Servidor`);

--
-- Filtros para la tabla `registro_administradors`
--
ALTER TABLE `registro_administradors`
  ADD CONSTRAINT `registro_administradors_id_registro_servidor_foreign` FOREIGN KEY (`ID_Registro_Servidor`) REFERENCES `registro_servidors` (`ID_Registro_Servidor`);

--
-- Filtros para la tabla `registro_empleados`
--
ALTER TABLE `registro_empleados`
  ADD CONSTRAINT `registro_empleados_id_registro_administrador_foreign` FOREIGN KEY (`ID_Registro_Administrador`) REFERENCES `registro_administradors` (`ID_Registro_Administrador`);

--
-- Filtros para la tabla `tabla_datos_categorias`
--
ALTER TABLE `tabla_datos_categorias`
  ADD CONSTRAINT `tabla_datos_categorias_id_registro_servidor_foreign` FOREIGN KEY (`ID_Registro_Servidor`) REFERENCES `registro_servidors` (`ID_Registro_Servidor`);

--
-- Filtros para la tabla `tabla_datos_historials`
--
ALTER TABLE `tabla_datos_historials`
  ADD CONSTRAINT `tabla_datos_historials_id_registro_servicio_foreign` FOREIGN KEY (`ID_Registro_Servicio`) REFERENCES `registro_servidors` (`ID_Registro_Servidor`);

--
-- Filtros para la tabla `tabla_datos_productos`
--
ALTER TABLE `tabla_datos_productos`
  ADD CONSTRAINT `tabla_datos_productos_id_categorias_foreign` FOREIGN KEY (`ID_Categorias`) REFERENCES `tabla_datos_categorias` (`ID_Categorias`),
  ADD CONSTRAINT `tabla_datos_productos_id_registro_servidor_foreign` FOREIGN KEY (`ID_Registro_Servidor`) REFERENCES `registro_servidors` (`ID_Registro_Servidor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
