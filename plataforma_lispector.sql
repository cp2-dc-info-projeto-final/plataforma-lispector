-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Out-2019 às 20:28
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plataforma_lispector`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(60) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `turma` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `email`, `senha`, `matricula`, `turma`) VALUES
(1111, 'denis', '', '1234554321', '02700349', NULL),
(12345, 'mmm@mmm.com', '', '2245656', '1245689', NULL),
(2700348, 'mmm@mmm.com', 'deniss@gmail.com', '6549821', '303', NULL),
(2700345, 'mmm@mmm.com', 'deniss@gmail.com', '44444444', '304', NULL),
(2700344, 'mmm@mmm.com', 'deniss@gmail.com', '234234', '309', NULL),
(270034999, 'denniisssaa', 'kethelene@email.com', '2222222222', '4444444', NULL),
(1231231231, 'aaaaaaaaa', 'aaaaa@eeem.com', '12312333', '111212222', NULL),
(2131233, 'aaassss', 'asasass@asas.com', '852674', '33343434', 666),
(777, 'tyyt', 'tyyt@tyyt.com', 'f35c65d67d49610b664ae6b25324007e', '4444', 123),
(123456789, 'aaaaaaaaa', 'wrqwre3r@bol.com.br', '657f8b8da628ef83cf69101b6817150a', '1234568780', 1203),
(1231231232, 'Anbi', 'anbiferreira@gmal.com', '$2y$10$JBvLPtmCncA8mAOd5WyRV.6wvdBbjw1G7NpqeEL.wQe1rlUzG0cDu', 'm0300098', 1002),
(1231231233, 'Anbi', 'aanbi@gmail.com', '$2y$10$o/7LUSOd7NsPxvFvyVJGCOQ94cbSUWorbSdH5VNejdlsfrl/PUWB.', 'm0300098', 1002);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(60) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `matricula` varchar(60) NOT NULL,
  `senha` varchar(70) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `nome`, `email`, `matricula`, `senha`) VALUES
(1234, 'sdaad', 'safaadwe @ef.com', 'se4w34535', 'b8f34f0c25b3f5747b1999efc33b51c5'),
(12345, 'sdgfseg', 'fdgsgzsr@g.com', '12345656', '37e0c86903875b5673b5cd4b03fe8082'),
(12346, 'dsfsf', 'asdwdfwqf#@g.vidfv', '1111111111111111', 'a2c18fb090ffa411fa2058215e3dab44'),
(12347, 'Anbi', 'anbi@gmail.com', '02700349', '$2y$10$EiP6XD/QipSndxYWxFlzwuJUHao/yNOEJe6MnmOJp2GAOrxcB68u6'),
(12348, '', '', '', '$2y$10$cgDhTq6rxNOXojpX05AmUeU6erKfsww57EZP3Dq2rp0FK3j2ZH6eG'),
(12349, 'Anbi', 'theanbi@gmail.com', 'm0300098', '$2y$10$4q8qTB9IBNBerX7JgSISsOxXaJuZKPkfyG2P0nKqaCwZHMA7EIgpO'),
(12350, 'denis', 'denis.pai.mommy@gmail.com', '02700349', '$2y$10$B7MLZe/sBVwSBWZXL1A6q.eQFnDU0LDz3CQ.sj0hvOA8FE7sh7CQe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1231231234;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12351;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
