-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jul-2023 às 05:46
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login_app`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastros`
--

CREATE TABLE `cadastros` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `cpf` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastros`
--

INSERT INTO `cadastros` (`id`, `nome`, `cpf`, `email`, `senha`, `created_at`) VALUES
(1, 'Alice Johnson', '98765432100', 'alicejohnson@example.com', '$2y$10$5GieQp7enVugNINtV9P70udRWX7TWa6jJp8NRTc0GExn3j039Qj6u', '2023-07-16 01:14:51'),
(2, 'Sarah Johnson', '12345678901', 'sarahjohnson@example.com', '$2y$10$UdSUmdqQVCO6ret6oGKwYuMeFhNLtfU2evZAjp5g1RfRSQR1v9Tpm', '2023-07-16 01:25:25'),
(3, 'Michael Smith', '98765432102', 'michaelsmith@example.com', '$2y$10$9HFMgw.FDg5FSKkUHFpnn.t3tJL0E1hd/iosUhB3eJ0YP2cHHq37G', '2023-07-16 01:26:32'),
(4, 'Emily Brown', '24681357903', 'emilybrown@example.com', '$2y$10$NaxXjHSaO6DWea38plXJD.r/zFTT9DRZLO4QldOt7dDwN1AE5aZma', '2023-07-16 01:27:17'),
(5, 'Daniel Wilson', '13579246804', 'danielwilson@example.com', '$2y$10$oWkZpOBZ1vt8QQYoRtN6neNtEL4exuka3Y7pqscHOh7fQr9/fR.Iu', '2023-07-16 01:27:44'),
(6, 'Olivia Davis', '98765432103', 'oliviadavis@example.com', '$2y$10$CzikpFJEYH4Vw6ysIh2DkuSeUOf5s.QmBQVnn0RDe/MK5ipfFhkGO', '2023-07-16 02:40:02'),
(7, 'Ethan Wilson', '12345678902', 'ethanwilson@example.com', '$2y$10$O/C5KCGDieRlLjTdUKJyaO.Kcz6VCAKu112FYIjs5paWlTqhaejOS', '2023-07-16 03:41:46'),
(8, 'Sophia Anderson', '98765432104', 'sophiaanderson@example.com', '$2y$10$rSOOiDHhFlcVbZhSgz3RL.BpRUNaZuSiKNKLVsiXL60gTHah4N1KG', '2023-07-16 03:46:07');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastros`
--
ALTER TABLE `cadastros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastros`
--
ALTER TABLE `cadastros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
