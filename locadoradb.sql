-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/06/2023 às 20:42
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `locadoradb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluga`
--

CREATE TABLE `aluga` (
  `cpf_user` varchar(11) DEFAULT NULL,
  `cod_veiculo` int(11) DEFAULT NULL,
  `registro_aluguel` int(11) NOT NULL,
  `data_fim` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `aluga`
--

INSERT INTO `aluga` (`cpf_user`, `cod_veiculo`, `registro_aluguel`, `data_fim`) VALUES
('11111111111', 16, 26, '2023-06-25'),
('11111111111', 20, 27, '2023-06-10'),
('11111111111', 17, 28, '2024-05-26');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome_user` varchar(80) DEFAULT NULL,
  `cpf_user` varchar(11) NOT NULL,
  `email_user` varchar(60) NOT NULL,
  `senha_user` varchar(50) NOT NULL,
  `tipo_login` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`nome_user`, `cpf_user`, `email_user`, `senha_user`, `tipo_login`) VALUES
('Pedro', '11111111111', 'pedro@gmail.com', 'pedro123', 0),
('Administrador', '12345678945', 'admin@gmail.com', '123', 1),
('usuario', '45454545454', 'usuario@gmail.com', '123', 0),
('Junior', '70069029244', 'junior@gmail.com', 'junior', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `cod_veiculo` int(11) NOT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `ano_veiculo` int(11) DEFAULT NULL,
  `descricao` varchar(400) DEFAULT NULL,
  `preco_veiculo` decimal(10,2) NOT NULL,
  `img_veiculo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `veiculo`
--

INSERT INTO `veiculo` (`cod_veiculo`, `marca`, `modelo`, `ano_veiculo`, `descricao`, `preco_veiculo`, `img_veiculo`) VALUES
(13, 'Chevrolet', 'Spin', 2021, 'A Chevrolet Spin, um veículo versátil e espaçoso, é a escolha perfeita para suas aventuras em família ou viagens de negócios. Com seu design moderno, conforto excepcional e tecnologia avançada, a Spin oferece uma experiência de condução única. Descubra o prazer de dirigir e explore novos horizontes com a Chevrolet Spin! ', 150.00, 'chevrolet_spin-2020-2021.png'),
(14, 'FIAT', 'Fiorino', 2021, 'Se você está planejando uma mudança, uma entrega comercial ou simplesmente precisa de um veículo confiável para suas necessidades diárias, alugue um Fiat Fiorino. Estamos ansiosos para proporcionar a você uma experiência de locação excepcional, com praticidade, conforto e qualidade.', 100.00, 'fiat-fiorino.png'),
(15, 'FIAT', 'Toro', 2018, 'Apresentamos a Fiat Toro, a escolha perfeita para suas necessidades! Seja para uma aventura ao ar livre, uma mudança de casa ou uma viagem em família, a Fiat Toro é a companheira ideal para tornar sua experiência ainda mais especial.', 130.00, 'fiat-toro.png'),
(16, 'Hyundai', 'HB20', 2020, 'O Hyundai HB20 é ideal para aqueles que buscam um veículo ágil e fácil de manobrar. Seu tamanho compacto permite que você navegue pelas ruas da cidade com facilidade, tornando suas viagens mais convenientes e livres de estresse. ', 160.00, 'hyundai_hb20.png'),
(17, 'Peugeot', '2008', 2023, 'A Peugeot 2008 é um SUV compacto que oferece uma experiência de condução excepcional. Com sua suspensão ajustada e direção precisa, você poderá desfrutar de viagens suaves e confortáveis, seja na cidade ou em estradas mais longas. Além disso, seu motor potente oferece um desempenho ágil, garantindo uma resposta rápida ao acelerador.', 120.00, 'peugeot-2008.png'),
(18, 'Renault', 'Sandero', 2022, 'O Renault Sandero é um hatch compacto que oferece uma experiência de condução ágil e divertida. Seu tamanho compacto facilita a locomoção pela cidade, permitindo que você se movimente com facilidade no trânsito urbano. ', 90.00, 'renault_sandero.png'),
(19, 'Toyota', 'Corolla', 2022, 'O Toyota Corolla é um sedã elegante e versátil, perfeito para atender às suas necessidades de locação. Seu design sofisticado e aerodinâmico é um verdadeiro deleite para os olhos, destacando-se onde quer que vá. ', 135.00, 'toyota-corolla.png'),
(20, 'Volkswagen', 'Gol', 2019, 'Volkswagen Gol é a escolha perfeita para tornar suas viagens mais práticas e confortáveis! Com sua reputação de qualidade e durabilidade, o Gol é um veículo que combina desempenho, eficiência e praticidade.', 100.00, 'volkswagen_gol.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `aluga`
--
ALTER TABLE `aluga`
  ADD PRIMARY KEY (`registro_aluguel`),
  ADD KEY `cpf_user` (`cpf_user`),
  ADD KEY `cod_veiculo` (`cod_veiculo`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cpf_user`);

--
-- Índices de tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`cod_veiculo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluga`
--
ALTER TABLE `aluga`
  MODIFY `registro_aluguel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `cod_veiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `aluga`
--
ALTER TABLE `aluga`
  ADD CONSTRAINT `aluga_ibfk_1` FOREIGN KEY (`cpf_user`) REFERENCES `usuario` (`cpf_user`),
  ADD CONSTRAINT `aluga_ibfk_2` FOREIGN KEY (`cod_veiculo`) REFERENCES `veiculo` (`cod_veiculo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
