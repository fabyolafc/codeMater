-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/02/2025 às 00:16
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `code_master`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `atividade`
--

CREATE TABLE `atividade` (
  `id_atividade` int(100) NOT NULL,
  `atividade1` varchar(1000) NOT NULL,
  `atividade2` varchar(1000) NOT NULL,
  `atividade3` varchar(1000) NOT NULL,
  `atividade4` varchar(1000) NOT NULL,
  `atividade5` varchar(1000) NOT NULL,
  `atividade6` varchar(1000) NOT NULL,
  `atividade7` varchar(1000) NOT NULL,
  `atividade8` varchar(1000) NOT NULL,
  `atividade9` varchar(1000) NOT NULL,
  `atividade10` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `atividade`
--

INSERT INTO `atividade` (`id_atividade`, `atividade1`, `atividade2`, `atividade3`, `atividade4`, `atividade5`, `atividade6`, `atividade7`, `atividade8`, `atividade9`, `atividade10`) VALUES
(87, '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n    int a = 4, b = 6;\r\n    cout << a + b << endl;\r\n    return 0;\r\n}', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n    float nota1 = 8.5, nota2 = 7.0;\r\n    float media = (nota1 + nota2) / 2;\r\n    cout << media << endl;\r\n    return 0;\r\n}\r\n', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n    int num = 9;\r\n    if (num % 2 == 0)\r\n        cout << \"Par\" << endl;\r\n    else\r\n        cout << \"Ímpar\" << endl;\r\n    return 0;\r\n}', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n    for (int i = 1; i <= 5; i++)\r\n        cout << i << \" \";\r\n    cout << endl;\r\n    return 0;\r\n}', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n    int num = 4, fatorial = 1;\r\n    for (int i = 1; i <= num; i++)\r\n        fatorial *= i;\r\n    cout << fatorial << endl;\r\n    return 0;\r\n}\r\n', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n    int x = 12, y = 18;\r\n    cout << (x > y ? x : y) << endl;\r\n    return 0;\r\n}\r\n', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n    int num = 5;\r\n    for (int i = 1; i <= 10; i++)\r\n        cout << num << \" x \" << i << \" = \" << num * i << endl;\r\n    return 0;\r\n}\r\n', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n    for (int i = 2; i <= 10; i += 2)\r\n        cout << i << \" \";\r\n    cout << endl;\r\n    return 0;\r\n}\r\n', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n    int idade = 17;\r\n    if (idade >= 18)\r\n        cout << \"Maior de idade\" << endl;\r\n    else\r\n        cout << \"Menor de idade\" << endl;\r\n    return 0;\r\n}', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n    float nota = 6.5;\r\n    if (nota >= 7)\r\n        cout << \"Aprovado\" << endl;\r\n    else\r\n        cout << \"Reprovado\" << endl;\r\n    return 0;\r\n}');

-- --------------------------------------------------------

--
-- Estrutura para tabela `material`
--

CREATE TABLE `material` (
  `id_material` int(100) NOT NULL,
  `nome_material` varchar(100) NOT NULL,
  `link_material` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `material`
--

INSERT INTO `material` (`id_material`, `nome_material`, `link_material`) VALUES
(4, 'Cursos da origamid', 'https://www.origamid.com'),
(9, 'Cursos Alura', 'https://www.alura.com.br');

-- --------------------------------------------------------

--
-- Estrutura para tabela `quiz`
--

CREATE TABLE `quiz` (
  `id_quiz` int(11) NOT NULL,
  `quiz1` varchar(255) NOT NULL,
  `quiz2` varchar(255) NOT NULL,
  `quiz3` varchar(255) NOT NULL,
  `quiz4` varchar(255) NOT NULL,
  `quiz5` varchar(255) NOT NULL,
  `quiz6` varchar(255) NOT NULL,
  `quiz7` varchar(255) NOT NULL,
  `quiz8` varchar(255) NOT NULL,
  `quiz9` varchar(255) NOT NULL,
  `quiz10` varchar(255) NOT NULL,
  `quiz11` varchar(255) NOT NULL,
  `quiz12` varchar(255) NOT NULL,
  `quiz13` varchar(255) NOT NULL,
  `quiz14` varchar(255) NOT NULL,
  `quiz15` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `quiz`
--

INSERT INTO `quiz` (`id_quiz`, `quiz1`, `quiz2`, `quiz3`, `quiz4`, `quiz5`, `quiz6`, `quiz7`, `quiz8`, `quiz9`, `quiz10`, `quiz11`, `quiz12`, `quiz13`, `quiz14`, `quiz15`) VALUES
(7, 'A', 'B', 'C', 'D', 'A', 'B', 'C', 'D', 'A', 'B', 'C', 'D', 'A', 'B', 'C'),
(8, 'A', 'C', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'B', 'A'),
(9, 'A', 'B', 'A', 'B', 'D', 'D', 'A', 'C', 'D', 'A', 'D', 'A', 'B', 'D', 'C'),
(10, 'D', 'C', 'B', 'A', 'D', 'C', 'B', 'A', 'D', 'C', 'B', 'A', 'D', 'C', 'B'),
(11, 'A', 'A', 'A', 'A', 'B', 'A', 'A', 'A', 'B', 'C', 'A', 'A', 'B', 'A', 'B');

-- --------------------------------------------------------

--
-- Estrutura para tabela `testa_algoritmo`
--

CREATE TABLE `testa_algoritmo` (
  `id_algoritmo` int(11) NOT NULL,
  `compilador` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `testa_algoritmo`
--

INSERT INTO `testa_algoritmo` (`id_algoritmo`, `compilador`) VALUES
(1, 'vvvvvvvvv'),
(2, 'vvvvvvvvvv'),
(3, 'dddddddd'),
(4, '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n    float nota = 6.5;\r\n    if (nota >= 7)\r\n        cout << \"Aprovado\" << endl;\r\n    else\r\n        cout << \"Reprovado\" << endl;\r\n    return 0;\r\n}\r\n'),
(5, '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n    float nota = 6.5;\r\n    if (nota >= 7)\r\n        cout << \"Aprovado\" << endl;\r\n    else\r\n        cout << \"Reprovado\" << endl;\r\n    return 0;\r\n}\r\n'),
(6, 'fffffffff');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `primeiro_nome` varchar(50) DEFAULT NULL,
  `ultimo_nome` varchar(50) DEFAULT NULL,
  `token` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `senha`, `primeiro_nome`, `ultimo_nome`, `token`) VALUES
(1, 'jean@gmail.com', '123', 'jean', 'carlos', ''),
(2, 'fabyola@gmail.com', '123', 'Fabyola', 'Campos', ''),
(3, 'fabyolacampos20@gmail.com', '1234', 'Fabyola', 'Campos', ''),
(4, 'fabyolacampos20@gmail.com', '123', 'Fabyola', 'Campos', ''),
(5, 'alisone@gmail.com', '123', 'Alison', 'Medeiro', 'c077cf175be0d7e762c8125ca0c1a4ac'),
(6, 'amedeiro37@gmail.com', '1234', 'Alison ', 'Silva', ''),
(7, 'fabyolacampos00@gmail.com', '123', 'fabyola', 'campos', ''),
(8, 'fabyolacampos20@gmail.com', '1234', 'fabyola', 'campos', ''),
(9, 'dylan@gmail.com', '12', 'Dylan', 'Dark', ''),
(10, 'dean@gmail.com', '123', 'Dean', 'Wester', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `atividade`
--
ALTER TABLE `atividade`
  ADD PRIMARY KEY (`id_atividade`);

--
-- Índices de tabela `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id_material`);

--
-- Índices de tabela `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id_quiz`);

--
-- Índices de tabela `testa_algoritmo`
--
ALTER TABLE `testa_algoritmo`
  ADD PRIMARY KEY (`id_algoritmo`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atividade`
--
ALTER TABLE `atividade`
  MODIFY `id_atividade` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de tabela `material`
--
ALTER TABLE `material`
  MODIFY `id_material` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id_quiz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `testa_algoritmo`
--
ALTER TABLE `testa_algoritmo`
  MODIFY `id_algoritmo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
