CREATE TABLE `prg_rem` (
  `idsp` int NOT NULL,
  `npp` int NOT NULL,
  `typ` set('prg','rem','ins') COLLATE cp1251_bin NOT NULL,
  `name` varchar(45) COLLATE cp1251_bin NOT NULL,
  `textovka` mediumtext COLLATE cp1251_bin,
  PRIMARY KEY (`idsp`,`npp`,`typ`)
) ENGINE=InnoDB DEFAULT CHARSET=cp1251 COLLATE=cp1251_bin

CREATE TABLE `prg_rem_foto` (
  `idsp` int NOT NULL,
  `npp` int NOT NULL,
  `name` varchar(45) COLLATE cp1251_bin NOT NULL,
  `foto_val` mediumblob,
  PRIMARY KEY (`idsp`,`npp`)
) ENGINE=InnoDB DEFAULT CHARSET=cp1251 COLLATE=cp1251_bin

CREATE TABLE `spisok` (
  `id` int NOT NULL AUTO_INCREMENT,
  `typ` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `kol` int NOT NULL,
  `name_inout` varchar(15) NOT NULL,
  `markirovka` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci
