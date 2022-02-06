-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Fev-2022 às 02:39
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `absenteismo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `absenteismo`
--

CREATE TABLE `absenteismo` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Prontuario` int(11) NOT NULL,
  `Funcao` varchar(40) NOT NULL,
  `Data_Admissao` varchar(10) NOT NULL,
  `Setor` varchar(40) NOT NULL,
  `Data` varchar(10) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Mes` varchar(40) NOT NULL,
  `Turno` varchar(40) NOT NULL,
  `resp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `absenteismo`
--

INSERT INTO `absenteismo` (`Id`, `Nome`, `Prontuario`, `Funcao`, `Data_Admissao`, `Setor`, `Data`, `Status`, `Mes`, `Turno`, `resp`) VALUES
(9, 'Francisco', 1, 'Auxiliar', '28/01/2021', 'Qualidade', '29/08/2021', 'P', '', '1º Turno', ''),
(10, 'Maria', 2, 'Lider', '11/11/2011', 'Qualidade', '29/08/2021', 'F', '', '1º Turno', ''),
(11, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '29/08/2021', 'P', '', '2º Turno', ''),
(12, 'Maria', 1211456, 'Lider', '11/11/2011', 'Qualidade', '29/08/2021', 'P', '', '1º Turno', ''),
(13, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '04/09/2021', 'P', '', '3º Turno', ''),
(17, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '29/09/2021', 'P', 'Sep', '1º Turno', ''),
(18, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '29/09/2021', 'P', 'Sep', '1º Turno', ''),
(19, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '29/09/2021', 'P', 'Sep', '1º Turno', ''),
(20, 'Lucas', 65648, 'Operador', '07/10/2021', 'Soft', '01/10/2021', 'P', 'Oct', '2º Turno', ''),
(21, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '01/10/2021', 'P', 'Oct', '1º Turno', ''),
(22, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '01/10/2021', 'P', 'Oct', '1º Turno', ''),
(23, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '01/10/2021', 'P', 'Oct', '1º Turno', ''),
(27, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '02/10/2021', 'P', 'Oct', '1º Turno', ''),
(28, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '02/10/2021', 'P', 'Oct', '1º Turno', ''),
(29, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '02/10/2021', 'P', 'Oct', '1º Turno', ''),
(30, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '07/10/2021', 'P', 'Oct', '1º Turno', ''),
(31, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '07/10/2021', 'P', 'Oct', '1º Turno', ''),
(32, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '07/10/2021', 'P', 'Oct', '1º Turno', ''),
(33, 'Ronaldo', 1234, 'Conferente', '23/09/2021', 'Qualidade', '07/10/2021', 'P', 'Oct', '1º Turno', ''),
(34, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '23/10/2021', 'P', 'Oct', '1º Turno', ''),
(35, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '23/10/2021', 'P', 'Oct', '1º Turno', ''),
(36, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '23/10/2021', 'P', 'Oct', '1º Turno', ''),
(38, 'Aline de oliveira silva dias cardoso', 340767, 'Supervisor', '12/12/2016', 'Devolução', '23/10/2021', 'SUP', 'Oct', '1º Turno', ''),
(39, 'Ronaldo', 1234, 'Conferente', '23/09/2021', 'Qualidade', '23/10/2021', 'P', 'Oct', '1º Turno', ''),
(40, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '27/10/2021', 'P', 'Oct', '1º Turno', ''),
(41, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '27/10/2021', 'P', 'Oct', '1º Turno', ''),
(42, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '27/10/2021', 'P', 'Oct', '1º Turno', ''),
(43, 'Ronaldo', 1234, 'Conferente', '23/09/2021', 'Qualidade', '27/10/2021', 'P', 'Oct', '1º Turno', ''),
(44, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '09/11/2021', 'P', 'Nov', '1º Turno', ''),
(45, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '09/11/2021', 'P', 'Nov', '1º Turno', ''),
(46, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '09/11/2021', 'P', 'Nov', '1º Turno', ''),
(47, 'Ronaldo', 1234, 'Conferente', '23/09/2021', 'Qualidade', '09/11/2021', 'P', 'Nov', '1º Turno', ''),
(52, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '10/11/2021', 'P', 'Nov', '1º Turno', ''),
(53, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '10/11/2021', 'P', 'Nov', '1º Turno', ''),
(54, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '10/11/2021', 'P', 'Nov', '1º Turno', ''),
(55, 'Ronaldo', 1234, 'Conferente', '23/09/2021', 'Qualidade', '10/11/2021', 'P', 'Nov', '1º Turno', ''),
(56, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '11/11/2021', 'P', 'Nov', '1º Turno', ''),
(57, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '11/11/2021', 'P', 'Nov', '1º Turno', ''),
(58, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '13/11/2021', 'P', 'Nov', '1º Turno', ''),
(59, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '13/11/2021', 'P', 'Nov', '1º Turno', ''),
(60, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '13/11/2021', 'P', 'Nov', '1º Turno', ''),
(61, 'Ronaldo', 1234, 'Conferente', '23/09/2021', 'Qualidade', '13/11/2021', 'P', 'Nov', '1º Turno', ''),
(74, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '14/11/2021', 'P', 'Nov', '1º Turno', ''),
(75, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '14/11/2021', 'P', 'Nov', '1º Turno', ''),
(76, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '14/11/2021', 'P', 'Nov', '1º Turno', ''),
(77, 'Ronaldo', 1234, 'Conferente', '23/09/2021', 'Qualidade', '14/11/2021', 'P', 'Nov', '1º Turno', '148429'),
(82, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '05/12/2021', 'P', 'Dec', '1º Turno', '148429'),
(83, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '05/12/2021', 'P', 'Dec', '1º Turno', '148429'),
(84, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '05/12/2021', 'P', 'Dec', '1º Turno', '148429'),
(85, 'Ronaldo', 1234, 'Conferente', '23/09/2021', 'Qualidade', '05/12/2021', 'P', 'Dec', '1º Turno', '148429'),
(86, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '19/12/2021', 'P', 'Dec', '1º Turno', '148429'),
(87, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '19/12/2021', 'P', 'Dec', '1º Turno', '148429'),
(88, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '19/12/2021', 'P', 'Dec', '1º Turno', '148429'),
(89, 'Ronaldo', 1234, 'Conferente', '23/09/2021', 'Qualidade', '19/12/2021', 'P', 'Dec', '1º Turno', '148429'),
(90, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '07/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(91, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '07/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(92, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '07/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(93, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '08/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(94, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '08/01/2022', 'F', 'Jan', '1º Turno', '148429'),
(95, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '08/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(96, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '10/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(97, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '10/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(98, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '10/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(105, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '11/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(106, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '11/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(107, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '11/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(111, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '12/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(112, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '12/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(113, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '12/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(114, 'Ronaldo', 1234, 'Conferente', '23/09/2021', 'Administrativo1', '13/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(115, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '13/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(116, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '13/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(117, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '13/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(118, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '15/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(119, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '15/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(120, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '15/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(121, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '18/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(122, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '18/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(123, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '18/01/2022', 'P', 'Jan', '1º Turno', '148429'),
(124, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '01/02/2022', 'P', 'Feb', '1º Turno', '148429'),
(125, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '01/02/2022', 'F', 'Feb', '1º Turno', '148429'),
(126, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '01/02/2022', 'P', 'Feb', '1º Turno', '148429'),
(127, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '03/02/2022', 'P', 'Feb', '1º Turno', '148429'),
(128, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '03/02/2022', 'P', 'Feb', '1º Turno', '148429'),
(129, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '03/02/2022', 'P', 'Feb', '1º Turno', '148429'),
(130, 'Experdito', 123456, 'Conferente', '28/01/2021', 'Qualidade', '05/02/2022', 'P', 'Feb', '1º Turno', '148429'),
(131, 'Francisco', 987546, 'Auxiliar', '28/01/2021', 'Qualidade', '05/02/2022', 'P', 'Feb', '1º Turno', '148429'),
(132, 'Janaina', 12345, 'Jovem_Aprendiz', '01/09/2021', 'Qualidade', '05/02/2022', 'F', 'Feb', '1º Turno', '148429'),
(133, 'Lucas', 65648, 'Operador', '07/10/2021', 'QUALIDADE', '05/02/2022', 'P', 'Feb', '1º Turno', '148429'),
(134, 'Aline de oliveira silva dias cardoso', 340767, 'Supervisor', '12/12/2016', 'QUALIDADE', '05/02/2022', 'P', 'Feb', '1º Turno', '148429');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE `dados` (
  `Id` int(11) NOT NULL,
  `Prontuario` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Setor` varchar(50) NOT NULL,
  `Funcao` varchar(50) NOT NULL,
  `Data_Admissao` varchar(15) NOT NULL,
  `Turno` varchar(40) NOT NULL,
  `Tel` varchar(40) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Alterado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`Id`, `Prontuario`, `Nome`, `Setor`, `Funcao`, `Data_Admissao`, `Turno`, `Tel`, `Status`, `Alterado`) VALUES
(1, 123456, 'Experdito', 'Qualidade', 'Conferente', '28/01/2021', '1º Turno', '111333', 'Ativo', '148429 06/01/2022'),
(2, 987546, 'Francisco', 'Qualidade', 'Auxiliar', '28/01/2021', '1º Turno', '', 'Ativo', ''),
(3, 1211456, 'Maria', 'Administrativo1', 'Lider', '11/11/2011', '2º Turno', '7897896', 'Ativo', '148429 19/01/2022'),
(4, 12345, 'Janaina', 'Qualidade', 'Jovem_Aprendiz', '01/09/2021', '1º Turno', '111333', 'Ativo', ''),
(6, 1234, 'Ronaldo', 'Administrativo1', 'Conferente', '23/09/2021', '1º Turno', '123', 'Ativo', ''),
(8, 65648, 'Lucas', 'QUALIDADE', 'Operador', '07/10/2021', '1º Turno', '345343', 'Ativo', '148429 06/02/2022'),
(9, 340767, 'Aline de oliveira silva dias cardoso', 'QUALIDADE', 'Supervisor', '12/12/2016', '1º Turno', '76576576', 'Ativo', '148429 06/02/2022'),
(14, 1234567, 'Experdito', 'Administrativo2', 'Conferente', '28/01/2021', 'Intermediário', '', 'Pendente', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `poster` varchar(200) NOT NULL,
  `sinopse` text NOT NULL,
  `nota` decimal(2,1) NOT NULL,
  `video` varchar(100) NOT NULL,
  `ImagemVideo` varchar(200) NOT NULL,
  `Categoria` varchar(100) NOT NULL,
  `Atores` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id`, `titulo`, `poster`, `sinopse`, `nota`, `video`, `ImagemVideo`, `Categoria`, `Atores`) VALUES
(1, 'Vingadores', 'https://www.themoviedb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg', 'Após os eventos devastadores de Vingadores: Guerra Infinita, o universo está em ruínas devido aos esforços do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências.', '8.9', '', '', 'Comédia', ''),
(2, 'Homem-Aranha: Sem Volta Para Casa', 'https://www.themoviedb.org/t/p/w300/fVzXp3NwovUlLe7fvoRynCmBPNc.jpg', 'Peter Parker é desmascarado e não consegue mais separar sua vida normal dos grandes riscos de ser um super-herói. Quando ele pede ajuda ao Doutor Estranho, os riscos se tornam ainda mais perigosos, e o forçam a descobrir o que realmente significa ser o Homem-Aranha.', '9.6', '', '', 'Aventura', ''),
(33, '007: Sem Tempo para Morrer (2021)', 'posters/SemtempoPoster.jpg', 'Bond deixou o serviço ativo e está desfrutando de uma vida tranquila na Jamaica. Sua paz é interrompida quando o seu velho amigo Felix Leiter, da CIA, aparece pedindo sua ajuda. A missão de resgatar um cientista sequestrado acaba sendo muito mais difícil do que o esperado, deixando Bond no caminho de um vilão misterioso e armado com uma nova tecnologia perigosa.', '7.5', 'videos/Mid 2019 Reel (2D Animation).mp4', 'posters/SemTempoVideo.jpg', 'Ação', ''),
(34, 'Bibliotecário furado, A calcinha Obsessão', 'posters/BrazzersExxtra-Siri-Dahl-Lily-Lou-Leaky-Librarian-And-The-Panty-Obsession-xmoviesforyou.jpg', 'Van Wylde e a gostosa Lily Lou estão estudando até tarde da noite para um exame final amanhã. Van aceita o fato de que está cansado e sexualmente frustrado. Ele tenta ter sorte, mas a trabalhadora Lily se concentra nas prioridades. Quando o excitado Van vai para um canto sossegado para apagar um, ele conhece a brincalhona Siri Dahl. Não demora muito para que os dois pervertidos decidam ajudar um ao outro em seus objetivos mútuos. As coisas tomam um rumo surpreendente quando são pegos pela intrometida Lily. Para a surpresa de Van, Lily finalmente revela seu lado mais selvagem e desabafa participando de um trio atrevido com a dupla depravada.', '5.0', 'videos/leaky-librarian-the-panty-obsession_720p.mp4', 'posters/iglpppho9k95dj1j.jpg', 'Adulto', ''),
(37, '007: Operação Skyfall (2012)', 'posters007poster.jpg', 'Após uma missão mal sucedida de James Bond, a identidade de agentes secretos é revelada e o M16, atacado. Ajudado por um agente de campo, Bond deverá seguir a trilha de Silva, um homem que habita o passado de M e que tem contas a acertar.', '8.0', 'videos/Ação/007_Operação_Skyfall_2012_720p_210GJI.mp4', '007postervideo.jpg', 'Ação', ''),
(38, '[FakeHostel] Amaranta Hank - Two Cocks, One Asshole (15.12.2018) ', 'posters/Adulto/FakeHostel-Amaranta-Hank-Two-Cocks-One-Asshole-xmoviesforyou.jpg', 'A temporada de férias está se aproximando e o Senhorio está cortando as árvores no Fake Hostel, mas quando ele está com os braços cheios de bolas de natal brilhantes, uma visão aparece para ele ... o espírito de seu irmão George! George diz ao Landlord que ele precisa parar de foder os mochileiros, mas o Landlord ignora o aviso de assistir a curvilínea Latina Amaranta Hank enquanto ela se despe e toma um banho! Quando os dois manos localizam o plug anal brilhante de Amaranta, eles têm que tomar medidas especiais para trazer George para o mundo real para uma foda anal especial de férias. O Landlord e George juntam-se à boca quente de Amaranta e ao seu cu apertado, depois goza na cara dela!', '8.0', 'videos/Adulto/[FakeHostel] Amaranta Hank - Two Cocks, One Asshole (15.12.2018) rq.mp4', 'posters/Adulto/FakeHostel-Amaranta-Hank-Two-Cocks-One-Asshole-xmoviesforyou.jpg', 'Adulto', ''),
(40, 'TeensLikeItBig: Skyla Novea, Your Dick Roommates Dick / 05.22.2016', 'posters/Adulto/7c9ddb63a5ccc4942a8f3c7aa8bbbd05a74879a37927ebe8.jpg', 'Um dia Skyla Novea acorda na casa do namorado. Seu namorado já foi embora, deixando-a em casa sozinha com seu colega de quarto Tyler, a quem Skyla despreza. Skyla decide ir embora, mas Tyler está monopolizando o chuveiro. Impaciente, Skyla entra no chuveiro com Tyler, levando a uma sessão de foda difícil onde Skyla e Tyler fodem sua animosidade para longe.', '7.0', 'videos/Adulto/[TeensLikeItBig] Skyla Novea (Your Dick Roommates Dick - 22.05.16) rq (1k).mp4', 'posters/Adulto/35706013763994187411_thumb.jpg', 'Adulto', ''),
(41, '[Holed] Jynx Maze (Anal Training / 10.25.2016)', 'posters/Adulto/ab36cb7d10.jpg', 'Anal Training ', '8.0', 'videos/Adulto/[Holed] Jynx Maze - Anal Training (25.10.2016) rq.mp4', 'posters/Adulto/kmgzdejj1ow.jpg', 'Adulto', ''),
(42, 'Skyla Novea - Bathroom Peeper _sd', 'posters/Adulto/1457158173_5171.r_alitykings.com.jpg', 'Skyla Novea - Bathroom Peeper _sd', '4.0', 'videos/Adulto/Skyla Novea - Bathroom Peeper _sd.mp4', 'posters/Adulto/1457158168_5143.r_alitykings.com.jpg', 'Adulto', ''),
(43, '[HotAndMean] Mila Marx, Shane Blair (ZZ Spring Break – Part One / 04.29.2016)', 'posters/Adulto/1461904832_5271.mila_marx__shan__blair_brazz_rs.jpg', 'Mila Marx está nas férias de primavera com seu melhor amigo, Shane Blair. Só que Mila está com dificuldade para se divertir na semana mais louca de festa e sexo - porque ela é uma virgem inexperiente! Quando ela acidentalmente passa por cima de Shane se masturbando, Mila não consegue deixar de se sentir excitada pelo fato de que a buceta de sua namorada está tão molhada quanto a dela! Shane se encarrega de preparar Mila para a verdadeira diversão das férias de primavera - selvagem e molhada sem parar, quero dizer!', '9.0', 'videos/Adulto/[HotAndMean] Mila Marx and Shane Blair (ZZ Spring Break - Part One - 29.04.16) rq (1k)', 'posters/Adulto/1461904852_5163.mila_marx__shan__blair_brazz_rs.jpg', 'Adulto', ''),
(44, '[TeensLikeItBig] Mila Marx (ZZ Spring Break - Part Two - 06.05.16) ', 'posters/Adulto/1462509013_3721.mila_marx_brazz_rs.jpg', 'ZZ Spring Break - Part Two', '9.0', 'videos/Adulto/[TeensLikeItBig] Mila Marx (ZZ Spring Break - Part Two - 06.05.16) rq (2k).mp4', 'posters/Adulto/1462509004_7473.mila_marx_brazz_rs.jpg', 'Adulto', ''),
(45, 'Kathy Anderson, Katrina Moreno - Surprise Sex Triangle (2019/FullHD)', 'posters/Adulto/FakeHostel-Kathy-Anderson-Katrina-Moreno-Surprise-Sex-Triangle-xmoviesforyou.jpg', 'Lendo um livro em seu quarto, Katrina Moreno fica intrigada com os sons de sexo apaixonado de algum lugar do Fake Hostel. Indo para a porta para investigar, Katrina fica chocada ao descobrir que a esposa do senhorio se teletransportou para a sala atrás dela! Usando seus encantos, a Esposa convence Katrina a tirar seus seios enormes e soltar o short. Aparecendo atrás das mulheres, o Senhorio então enfia seu pau entre as coxas de Katrina para que sua esposa possa chupar seu pau e comer sua buceta ao mesmo tempo! Segue-se um trio suado e termina em O senhorio gozando na bunda de sua esposa, depois assistindo a porra pingar na boca do convidado latino.', '9.0', 'videos/Adulto/fhl.18.10.27.kathy.anderson.and.katrina.moreno[N1C].mp4', 'posters/Adulto/796c92ac71cbt.jpg', 'Adulto', ''),
(46, 'Valentina Nappi (Wet Valentina fica com sexo anal negro)', 'posters/Adulto/MonstersOfCock-Valentina-Nappi-Wet-Valentina-Gets-Black-Anal-Sex-xmoviesforyou.jpg', 'Valentina Nappi está prestes a começar sua sessão de treino antes de pegar Pressão trabalhando em seus braços. Valentina instantaneamente se escondeu atrás de uma parede para espioná-lo enquanto ficava com tesão. Ela fica em choque com seu grande corpo e começa a se tocar e brincar consigo mesma. Ela se acalma e começa a malhar. Ela o cumprimenta com sua mão bagunçada, mas ele não se importa e começa a malhar. Ele percebe como ela está super molhada, mas mantém isso para si mesmo. A pressão fica difícil depois de esticá-la em várias posições e ela enlouquece com o tamanho do pênis dele. Ela diz a ele que está interessada em esticar seu longo pênis antes de começar a chupá-lo. Valentina começa a alongar a buceta do estilo cachorrinho antes que ele insira seu grande pau em sua bunda. Certifique-se de assistir Valentina Nappi tendo sua bunda fodida forte por Pressão até que ele chegue a gozar em sua boca.', '8.0', 'videos/Adulto/MonstersOfCock - Valentina Nappi - Wet Valentina Gets Black Anal Sex.mp4', 'posters/Adulto/def1d35cbaefc0b7740c590fff882e3c44fa87451a65cada.jpg', 'Adulto', ''),
(47, '[AssParade] Rose Monroe (Trapaceando o Big Ass Latina / 29.01.2018)', 'posters/Adulto/17e34c6ba322692ad481a60f1d384dc7.30.jpg', 'Na atualização de hoje, encontramos a curvilínea Rose Monroe se preparando para um banho. Ela olha pela janela várias vezes para verificar se o marido está por perto. Temos uma bela visão de sua bunda enorme enquanto ela se transforma. Bem, descobrimos que Sean está esperando por ela no banheiro e ele não é seu marido ... sorrateiro ... sorrateiro. Claro, ele começa a se banquetear com aquela bunda imediatamente, quem não o faria. Enquanto ele começa a curvá-la, o marido Peter chega em casa e vai para o banheiro. Porra! E, acima de tudo, ele quer se juntar a ela no chuveiro. A engenhosa Rose decide mantê-lo sob controle dando-lhe um boquete, enquanto mantém Sean escondido atrás da cortina. Já que Peter está gostando de seu pau sendo chupado, Sean continua transando com ela. Não deixe de assistir Rose pegando em sua doce buceta e boca enquanto aquela bunda grande salta e balança.', '8.0', 'videos/Adulto/AssParade - Rose Monroe - Cheating Big Ass Latina.mp4', 'posters/Adulto/mozaique.jpg', 'Adulto', ''),
(48, 'Rose Monroe - Fodendo um Big Ass for Revenge 11.02.19', 'posters/Adulto/AssParade-Rose-Monroe-Fucking-a-Big-Ass-for-Revenge.jpg', 'Rose Monroe andava à procura do namorado, viu-o a traindo e quer um acerto de contas, quando o encontrou na barbearia, entrou imediatamente e começou a espancá-lo escandalosamente até o expulsar da loja. Ela estava com tanta raiva e decepção que precisou se sentar por um momento para se recuperar. O Barbeiro ficou preocupado com ela e tentou confortá-la, disse para ela não se preocupar, ela é linda e o namorado dele é um idiota, naquele momento Rose resolveu vingar a deslealdade do namorado e pergunta ao Barbeiro Você Gosta da Minha Bunda? e claro que ele respondeu que sim, a partir daí ela começou a seduzi-lo brincando com sua bunda enorme, até que ele ficou realmente duro, ela sentou na cara dele sufocou-o com sua bunda grande, depois sentou ele em uma cadeira e continuou brincando com ele esfregando seu suculento como em seu pau, então ela chupou e pegou aquele pau,', '7.0', 'videos/Adulto/[AssParade] Rose Monroe - Fucking a Big Ass for Revenge (11.02.2019) rq.mp4', 'posters/Adulto/0p2dg9nh3whn.jpg', 'Adulto', ''),
(49, '[AssParade] Rose Monroe, Julianna Vega (Latina Booty Power / 29.04.2019)', 'posters/Adulto/AssParade-Rose-Monroe-Julianna-Vega-Latina-Booty-Power-xmoviesforyou.jpg', 'Julianna Vega e Rose Monroe têm algumas das maiores botinhas do ramo. Então decidimos colocá-los juntos para um pouco de diversão AssParade. Eles desfilaram suas bundas perfeitas para cima e para baixo na estrada. Enquanto estávamos do lado de fora, o BangBus passou com Alexis Fawx. Eles estavam a caminho de filmar uma nova cena. Depois que todas as garotas disseram oi uma para a outra, corremos para dentro para buscar essas duas beldades para pegar um pau. Lá dentro esperava Jmac, ele deu um pau neles e esticou seus bichanos em várias posições diferentes antes de estourar uma carga gigante em todos os seus rostinhos perfeitos.', '6.0', 'videos/Adulto/[AssParade] Rose Monroe, Julianna Vega - Latina Booty Power (29.04.2019) rq.mp4', 'posters/Adulto/AssParade-RoseMonroeJuliannaVega-LatinaBootyPower.mp4.jpg', 'Adulto', ''),
(50, '[AssParade] Kelsi Monroe (Anal Drilling Kelsi Monroe / 17/10/2016)', 'postersAssParade-Kelsi-Monroe-Anal-Drilling-Kelsi-Monroe-xmoviesforyou.jpg', 'Kelsi Monroe tem uma das maiores e mais suculentas bundas do mercado hoje. Nós a alcançamos enquanto nos exercitamos, seguimos sua bunda magnífica por tanto tempo quanto podíamos. Então, era hora de levá-la de volta ao set. Lá nós entramos furtivamente nos chuveiros enquanto ela se preparava e conseguimos mais imagens incríveis daquele butim. Kelsi adora foder, então ela levou meu filho Tony Rubino para o set onde ela começou a engasgar e chupar aquele pau até que sua boca não aguentasse mais. Sua boceta e idiota eram os próximos. Tony esmurrou aquela boceta e idiota antes de estourar todo aquele rostinho bonito dela.', '9.9', 'videos[AssParade] Anal Drilling Kelsi Monroe (17.10.2016) rq.mp4', 'mozaique_full.jpg', 'Adulto', ''),
(51, '[DigitalPlayground] Kelsi Monroe (Gym Fails / 14/01/2017)', 'posters/Adulto/DigitalPlayground-Kelsi-Monroe-Gym-Fails-xmoviesforyou.jpg', 'Ramon nos leva em uma jornada pela selva que é o ginásio público, quando ele encontra uma selvagem Kelsi Monroe!', '9.0', 'videos/Adulto/[DigitalPlayground] Kelsi Monroe - Gym Fails (14.01.2016) rq.mp4', 'posters/Adulto/92_thumb_m.jpg', 'Adulto', ''),
(52, 'Desfrutando de dois bundões lá fora', 'posters/Adulto/86853365.jpg', ' Spicy J é interrompido pela travessa Kelsi Monroe enquanto limpa a casa. Tesão Kelsi continua empurrando e Spicy J entra nisso e começa a brincar. Esses dois têm bundas tão grandes e é ótimo vê-los juntos. Eles se revezam agradando um ao outro antes de serem pegos pelo homem de Kelsi, ao qual ele se junta. Spicy J se afasta e deixa os dois descerem e ela observa. Kelsi dá o típico boquete ótimo antes de finalmente pular sua bunda grande no pau. Ela fode com força em várias posições até que ela faça seu pau explodir em seu rosto.', '8.0', 'videos/Adulto/AssParade - Spicy J, Kelsi Monroe - Enjoying Two Big Asses Outside.mp4', 'posters/Adulto/qaau9zhcvkmb.jpg', 'Adulto', ''),
(53, 'POV 19 09 26 Canela Skin And Katrina Moreno', 'posters/Adulto/POV-Canela-Skin-Katrina-Moreno-No-Men-Needed-xmoviesforyou.jpg', 'Nessa louca cena lésbica, reunimos duas das estrelas pornô latinas do momento: Canela Skin e Katrina Moreno. A deslumbrante colombiana e seu fabuloso amigo uruguaio estão prestes a experimentar um par de vibradores e, a partir daí, vão se foder com um enorme pau de borracha. Você está pronto para alguma ação?', '7.0', 'videos/Adulto/POV 19 09 26 Canela Skin And Katrina Moreno.mp4', 'posters/Adulto/canela-skin-katrina-moreno_canela-and-katrina--no-men-needed_1080.mp4.jpg', 'Adulto', ''),
(54, 'Canela Skin - Big Booty Maid Gets It In The Ass', 'posters/Adulto/87696653_vlcsnap-2018-11-07-07h49m27s887.png', 'Nosso lugar estava uma bagunça do caralho. É o que acontece depois de uma longa noite de festa. Sorte, temos Canela Skin do serviço de limpeza chegando hoje. Quando ela aparece, ficamos maravilhados com o quão incrivelmente gostosa ela é. Sua roupa apertada mostra sua bunda grande e redonda e seios bonitos. Claro que perguntamos se ela está interessada em ganhar algum dinheiro extra. Quando dizemos a ela que queremos ver um pouco daquele corpo, ela diz que não. Mas depois de ver o maço de dinheiro, ela se anima com a ideia. Nós a convencemos a primeiro limpar o lugar com sutiã e calcinha e depois toda nua. Aah, o poder do dinheiro. Depois de oferecer mais dinheiro, ela continua limpando nua! Assim que ela dá uma olhada no grande pau do nosso homem, ela decide que seria melhor limpar o pau dele do que o lugar. A ela comenta que gosta de ser fodida no cuzinho! De cachorrinho a cavalgando,', '7.0', 'videos/Adulto/mydirtymaid.18.11.06.canela.skin.mp4', 'posters/Adulto/87696328_mydirtymaid-18-11-06-canela-skin-xxx-sd-mp4-kleenex_s.jpg', 'Adulto', ''),
(55, 'Maddy Oreilly - Movie Star Massage', 'posters/Adulto/63616489_67639_01_01.jpg', 'Quando Maddy OReilly finalmente consegue um papel principal em um filme, ela começa a entrar em pânico. Ela vai fazer o papel de massagista, mas é péssima em fazer massagens. O namorado sugere que ela desça a rua até a casa de massagens mais próxima e faça um estágio com eles. Ela tem um mês antes das filmagens e pode aprender muito até lá. Achando a ideia uma ótima ideia, ela concorda e, após uma ligação, se prepara para ir para a entrevista. Ela entra na sala de massagens e é saudada pelo cara na recepção. Ele diz a ela que eles estão com falta de pessoal e que ela terá que começar imediatamente. A cliente deve chegar em cerca de 5 minutos, então é melhor ela tirar a roupa e se preparar. Maddy está confusa. Ela pensou que seria treinada antes de começar e não tinha ideia que teria que trabalhar de sutiã e calcinha. Quando seu cliente, Alex Legend, entra, o cara na mesa pede a ele para mostrar a sua nova garota as cordas. Alex concorda e eles vão para o chuveiro juntos. Ela massageia suas costas e pernas por um tempo e então ele pergunta se ele deveria se virar. Ela diz que sim e ele se vira praticamente dando um tapa na cara dela com seu grande pau. Ela se desculpa, dizendo que sabe que não é suposto ser sexual, mas ele a corrige afirmando que é e se ela quiser aprender, é melhor colocar aquele pau na boca. Ela começa a chupar pau e fica bem claro desde o início que Maddy aprende rápido. Quando ela diz a ele que sua boceta está fora dos limites, ela diz que ele pode colocar seu grande pau em sua bunda. Parece que Maddy sabe exatamente o que está fazendo! Ela massageia suas costas e pernas por um tempo e então ele pergunta se ele deveria se virar. Ela diz que sim e ele se vira praticamente dando um tapa na cara dela com seu grande pau. Ela se desculpa, dizendo que sabe que não é suposto ser sexual, mas ele a corrige afirmando que é e se ela quiser aprender, é melhor colocar aquele pau na boca. Ela começa a chupar pau e fica bem claro desde o início que Maddy aprende rápido. Quando ela diz a ele que sua boceta está fora dos limites, ela diz que ele pode colocar seu grande pau em sua bunda. Parece que Maddy sabe exatamente o que está fazendo! Ela massageia suas costas e pernas por um tempo e então ele pergunta se ele deveria se virar. Ela diz que sim e ele se vira praticamente dando um tapa na cara dela com seu grande pau. Ela se desculpa, dizendo que sabe que não é suposto ser sexual, mas ele a corrige afirmando que é e se ela quiser aprender, é melhor colocar aquele pau na boca.', '9.9', 'videos/Adulto/num.18.02.09.maddy.oreilly.movie.star.massage.mp4', 'posters/Adulto/63607662_nurumassage-18-02-09-maddy-oreilly-movie-star-massage-xxx-sd-mp4-kleenex_s.jpg', 'Adulto', ''),
(56, 'Aaliyah Hadid Obtém Rebote Dick', 'posters/Adulto/cjekovlhwn.jpg', 'Aaliyah Hadid foi abandonada pelo namorado. Felizmente para ela, seu meio-irmão estava lá para consolá-la. E assim que ele entrou para tomar banho, ela não se conteve e começou a espioná-lo. Logo depois, ela estava se masturbando furiosamente. Isso não foi suficiente, então ela correu e começou a chupar seu pau. Ela então o arrastou para o quarto e o fez enfiar seu pau gigante em seu cu. A buceta de Aaliyah foi fodida em várias posições diferentes antes de receber uma carga gigante por todo o rosto.', '7.0', 'videos/Adulto/BrownBunnies - Aaliyah Hadid Gets Rebound Dick.mp4', 'posters/Adulto/64061928_brownbunnies-18-02-16-aaliyah-hadid-xxx-sd-mp4-kleenex_s.jpg', 'Adulto', ''),
(57, '[BrownBunnies] Aaliyah Hadid (meio-irmão vai fundo na bunda de Aaliyah / 09.01.2017)', 'posters/Adulto/6bf30c144b11b625df3c32cad3d87885.12.jpg', 'A adorável e peituda Aaliyah está orgulhosa de seu corpo de verão e está no banheiro tirando selfies. Seu meio-irmão se depara com esta bela cena e não pode deixar de começar a se masturbar com ela. Enquanto no começo ela fica chocada quando ela o pega, ela logo muda de ideia depois de ver o tamanho de seu pau. Certifique-se de não perder essa coisinha linda levando-o na boca, na buceta e até no cuzinho apertado.', '7.0', 'videos/Adulto/BrownBunnies - Aaliyah Hadid - Step Brother Goes Deep in Aaliyahs Ass.mp4', 'posters/Adulto/638a9f7adf56t.jpg', 'Adulto', ''),
(58, 'Aaliyah Hadid - Aaliyah Gets The Anal She Deserves (2019)', 'posters/Adulto/1564145141_mh06l76apd8701sv0ityp7mtp.jpg', 'Aaliyah Hadid encomendou um vibrador online. Ela estava toda animada quando o pacote chegou. Mas era muito pequeno. Nada que ela pudesse fazer com isso. Então ela voltou a se masturbar com as mãos. Isiah Maxwell se aproximou dela e começou a se masturbar. Obviamente ela o notou e começou a persegui-lo ao redor da mesa de sinuca. Uau, ele tinha um pau grande. Isso funcionaria. Muito melhor do que aquele pequeno vibrador ou suas mãos. Então ela chupou aquele pau grande. Coloque-o bem fundo na garganta dela. Então ela estava com tesão por algum anal. Então ele a fodeu na bunda. Mesmo que seu pau fosse tão grande que se encaixava. Enquanto fodendo essa bunda no missionário ele usou esse vibrador na buceta dela. Preenchendo todos os buracos. Ela continuou montando seu pau com sua bunda até que ela gozou por todo o seu rosto.', '7.0', 'videos/Adulto/[BrownBunnies] Aaliyah Hadid Gets The Anal She Deserves (26.07.2019) rq.mp4', 'posters/Adulto/cb4ceaeb514c0d5d1ff8d0f488e71e4d.jpg', 'Adulto', ''),
(59, 'Aaliyah Hadid - Foda-se o casamento! ', 'posters/Adulto/1601117752_921_hidefporn_ws.jpg', 'Aaliyah Hadid está tentando desfrutar de uma xícara de chá com seus amigos casados, mas tudo o que ela pode pensar é como ela está farta de ter um marido! Quando o marido de sua amiga, Xander Corvus, chega em casa do trabalho, sua esposa o xinga para fora do quarto. Aaliyah, irritada com o assunto da conversa, pede licença e foge para o banheiro, onde se despe e surpreende Xander no chuveiro, levando a um sexo extraconjugal fumegante!', '7.0', 'videos/Adulto/rws.19.03.24.aaliyah.hadid.fuck.marriage.mp4', 'posters/Adulto/1601117845_6821_hidefporn_ws.jpg', 'Adulto', ''),
(60, 'Aaliyah Hadid Gamer Girl Needs Anal ', 'posters/Adulto/SneakySex-Aaliyah-Hadid-Gamer-Girl-Needs-Anal-xmoviesforyou.jpg', 'sem', '7.0', 'videos/Adulto/sneakysex.19.08.14.aaliyah.hadid.gamer.girl.needs.anal.mp4', 'posters/Adulto/ca1407c966252bdc7aebec9dc49f4bd7.jpeg', 'Adulto', ''),
(61, '[BigButtsLikeItBig] Brooklyn Chase (Butting Out / 06.09.2017)', 'posters/Adulto/BigButtsLikeItBig-Brooklyn-Chase-Butting-Out-xmoviesforyou.jpg', 'Bill continua tentando parar de fumar, mas sua colega de quarto Brooklyn não acredita que ele possa – embora ela tenha uma bunda gostosa para provocá-lo. Irritada com a forma como Bill continua caindo do vagão carregado de nicotina, Brooklyn aposta com sua bunda: se ele conseguir um dia, ela fará um strip-tease para ele (pensando que ele nunca terá sucesso, é claro) . Para sua surpresa, ele faz! Ela coloca as apostas mais altas: dois dias e ela vai acabar com ele. Se ele durar uma semana... bem, seu rabo apertado está lá para oferecer o resto.', '8.0', 'videos/Adulto/[BigButtsLikeItBig] Brooklyn Chase - Butting Out (09.06.2017) rq (1k).mp4', 'posters/Adulto/mature_3759.mp4.jpg', 'Adulto', ''),
(62, '[GloryHole] Brooklyn Chase, Chanel Preston (05/08/2017)', 'posters/Adulto/GloryHole-Brooklyn-Chase-Chanel-Preston-xmoviesforyou.jpg', 'Dia de meninas fora. Já imaginou como seria? Comprando e bebendo Mojitos e fofocando? O que acontece se eles se depararem com uma oportunidade de serem “malcriados”? Entram Brooklyn Chase e Chanel Preston: eles estão fora e longe de seus amigos e planejando seu “dia das garotas” quando se deparam com uma livraria para adultos. Assista Brooklyn arrastar Chanel para a loja! E uma vez lá dentro, seus olhos estão tão abertos quanto suas bocas! Fica ainda melhor: quando o balconista os cumprimenta e pergunta o que eles estão procurando, vai para a parte de trás da loja... o fliperama! Na cabine de exibição privada é onde tudo acontece, desde ação de garota com garota até uma BBC invadindo os cachimbos de merda das duas garotas! Agora, isso é algo que você não vê com muita frequência - Brooklyn Chase tomando na bunda enquanto Chanel Preston incita... ou Chanel comendo esperma nos enormes peitos de Brooklyn!!', '9.0', 'videos/Adulto/[GloryHole] Brooklyn Chase and Chanel Preston (08.05.2017) rq.mp4', 'posters/Adulto/www.0xxx.ws_GloryHole.17.05.08.Brooklyn.Chase.And.Chanel.Preston.XXX.1080p.MP4-KTR.mp4-5.jpg', 'Adulto', ''),
(63, '[BrazzersExxtra] Cali Carter (Babys Gone Buck! / 16.03.2019)', 'posters/Adulto/0507cfb03e144bbb5d.jpg', 'Cali Carter está tentando apimentar sua vida amorosa, mas seu marido está desinteressado. Quando seu vizinho Keiran Lee os convida para uma festa de swinger, Cali acha que é uma ótima ideia. Sem entusiasmo com a ideia e ansioso para aplacar sua esposa, o marido de Cali corre para sua oficina para construir para ela o brinquedo sexual dos seus sonhos. Quando Cali não se impressiona com seu trabalho, seu marido é forçado a agir rapidamente e pedir emprestado o Motorbunny Buck de Keiran. Keiran configura o dispositivo e Cali manda seu marido embora para que ela possa testar o Motorbunny Buck em paz. As orações de Cali são respondidas e ela fica louca para livrar o Buck e o Keiran!', '8.0', 'videos/Adulto/BrazzersExxtra - Cali Carter - Babys Gone Buck.mp4', 'posters/Adulto/1580efb9997e04ee0a697b1d7e622e24639ea190f8ce7410.jpg', 'Adulto', ''),
(64, 'Gina Valentina, Abella Danger - Duas bundas grandes compartilhando um pau grande 03.06.19', 'posters/Adulto/cover_WXXsrl_1559801777.jpg', 'Gina Valentina e Abella Danger começam o aquecimento antes do treino de dança. Os dois têm bundas incríveis e adoramos vê-las se alongar de todos os ângulos possíveis. Uma vez que o treinador entra, ele os faz trabalhar mais antes de levar Abella para a cozinha, onde ela rapidamente tira seu pau. Ela dá-lhe uma grande chupada antes de ser fodida no estilo cachorrinho. Gina ouve os gemidos e os pega, mas em vez de ficar chateada, ela seduz o treinador para ir até ela, mostrando seu grande corpo. Gina parece ótima sendo fodida antes de Abella arruinar o momento. Rob Piper salva o dia, deixando-os saber que há pau suficiente para ambos. Agora temos as duas meninas compartilhando seu pau com um grande boquete para eles se revezando montando seu pau até que eles façam seu esperma explodir fora de seu pau.', '8.0', 'videos/Adulto/[AssParade] Abella Danger, Gina Valentina - Two Big Asses Sharing a Big Cock (03.06.20', 'posters/Adulto/x99hxcfedo0z.jpg', 'Adulto', ''),
(65, '[AssParade] Candice Dare (Candice Dares To Give Up That Booty / 09.05.2016)', 'posters/Adulto/big1.jpg', 'Candice Dare está tentando vender casas. No entanto, ela está usando seus melhores ativos para fechar os negócios. Ela faz seus clientes assinarem na linha pontilhada, seduzindo-os com sua bunda grande e suculenta. Desta vez, Rico Strong era seu cliente, mas para fazê-lo assinar aquela linha, ela teve que fazer mais do que apenas desfilar na frente dele. Ele queria bater naquela bunda, e isso é exatamente o que ele fez. Ele bateu seu corte rosa em várias posições diferentes, em seguida, passou a bater naquela bunda. Isso mesmo anal AssParade!! Ele fodeu sua bunda e buceta até explodir em todo aquele lindo rostinho dela.', '7.0', 'videos/Adulto/[AssParade] Candice Dare (Candice Dares To Give Up That Booty - 05.09.16) rq.mp4', 'posters/Adulto/mozaique.jpg', 'Adulto', ''),
(66, 'Candice Dare deixa Chris Strokes em seu backdoor', 'posters/Adulto/AssParade-Candice-Dare-lets-Chris-Strokes-in-her-backdoor-xmoviesforyou.jpg', 'Candice Dare realmente gosta de ioga. Ela gosta de como isso a torna mais flexível. Hoje ela convidou o mestre de ioga Chris Strokes para mostrar a ela algumas novas posições. A única posição que Chris tem em mente é uma envolvendo o cu de Candice sendo empalado por seu pau enorme. Chris começa sua sessão de treinamento de maneira profissional. Uma vez que ele deu uma boa olhada na bunda de Candice, seu toque se tornou cada vez menos profissional. Chris se curva e estica Candice enquanto suas mãos exploram sua gloriosa bunda. Candice não diz para parar quando Chris entra em seu top de ioga e começa a provocar seus mamilos pontudos. Neste ponto, toda a modéstia se foi e Candice está totalmente disposta a foder seu instrutor de ioga. Ela mostra sua flexibilidade impressionante antes de puxar o pau monstruoso de Chris e babar em cima dele. Chris fode sua buceta primeiro antes de enfiar aquele pau grande naquele cuzinho. Ele então salta para frente e para trás penetrando um todo e depois o outro. Candice ainda faz um pouco de bunda na boca no processo.', '8.0', 'videos/Adulto/[AssParade] Candice Dare lets Chris Strokes in her backdoor (04.07.2016) rq.mp4', 'posters/Adulto/1622627499_2031_hidefporn_ws.jpg', 'Adulto', ''),
(67, '[AssParade] Harley Jade (Fresh do AVN, Harley Jade fica com o rabo fodido / 02.06.2017)', 'posters/Adulto/AssParade-Harley-Jade-Fresh-from-the-AVN-Harley-Jade-gets-her-ass-fucked-xmoviesforyou.jpg', 'Harley está de volta na frente das câmeras frescas de uma visita ao AVN e seu bichano não está dolorido ou cansado - está desejando um pau grande para foder! Oh Harley, como nós te amamos. Nosso amigo produtor mata dois coelhos com uma cajadada chamando Logan Pierce para vir e foder Harley. Logan está querendo um pedaço de Harley há algum tempo e Harley quer um pau grande, então todo mundo ganha! Eita! O verdadeiro vencedor aqui, porém, é você, o espectador. Você já sabe o quão incrível Harley é e ela entrega novamente levando o pau grande de Logan na boca, bucetinha, e cuzinho rosado. Agora, essa é uma ameaça tripla que vale a pena pagar. Não há tipos de Hollywood dando a você esse nível de performances premiadas. Agora com licença, temos que ir... uh, fazer algo sozinhos, por uns cinco minutos.', '7.0', 'videos/Adulto/[AssParade] Fresh from the AVN, Harley Jade gets her ass fucked (06.02.2017) rq.mp4', 'posters/Adulto/mozaique.jpg', 'Adulto', ''),
(68, 'Jardineiro Fode Valerie Kay / 30.10.2017', 'posters/Adulto/AssParade-Valerie-Kay-Gardener-Fucks-Valerie-Kay-xmoviesforyou.jpg', 'Valerie Kay adora relaxar na piscina. Ela também adora provocar seus funcionários. Ela pediu ao seu jardineiro Bruno que a ajudasse colocando óleo em suas costas. Ela continuou pedindo para ele ir mais e mais até que finalmente ele estava massageando sua bunda. Bruno não aguentou mais e saiu correndo para o banheiro. Lá, ele lavou o rosto e tentou acalmar seus impulsos. Ele não conseguiu, então começou a se masturbar no banheiro. Valerie foi ver como ele estava e o descobriu se masturbando. A única coisa que lhe deu o maior choque foi o tamanho do pau de Bruno. Valerie o arrastou de volta para a piscina para que ele pudesse bater em sua boceta com seu pau gigante de jardineiro. Ele a atacou em várias posições diferentes até arrebentar uma carga gigante por todo o rosto.', '7.0', 'videos/Adulto/[AssParade] Gardener Fucks Valerie Kay (30.10.2017) rq.mp4', 'posters/Adulto/37cf8f117f3ab98230aad7214d97b775b_thumbs_l.jpg', 'Adulto', ''),
(69, '[AssParade] Krissy Lynn (assume 18 polegadas / 05.06.2019)', 'posters/Adulto/AssParade-Krissy-Lynn-Takes-On-18-Inches-xmoviesforyou.jpg', 'Krissy Lynn tem a maior surpresa de sua vida hoje. Ela veio para nos mostrar suas grandes habilidades como “esperamos pelo talento masculino”. Ele estava parado em um macacão branco e o que ela pensava ser uma estátua era o garanhão com seu pau enorme. Ela está impressionada com o comprimento e a largura do pau antes de finalmente começar a chupar. Ela começa a foder no missionário até que ela se aquece. Ela começa a fodê-lo no estilo cachorrinho e cowgirl onde ela leva aquele pau enorme até que ela faz seu pau explodir sua porra em todos os seus seios.', '7.0', 'videos/Adulto/[AssParade] Krissy Lynn Takes On 18 Inches 06.05.2019 .mp4', 'posters/Adulto/f0a9862c0663afa77074eb37fd191ae9.jpg', 'Adulto', ''),
(70, '[AssParade] Krissy Lynn (Brinquedo mais selvagem vira sexo anal / 24.06.2019)', 'posters/Adulto/AssParade-Krissy-Lynn-Wildest-Toy-Turns-To-Anal-Sex-xmoviesforyou.jpg', 'Krissy Lynn faz um unboxing selvagem de seu mais novo brinquedo. No vídeo de hoje vemos ela pegando uma furadeira tipo máquina e um vibrador. Ela deixa seus fãs saberem todos os detalhes antes de perceber que não pode usar o brinquedo sozinha. O diretor fala com seu assistente para ajudá-la até que ela esteja com tesão o suficiente para querer isso em sua bunda. Ela puxa Logan Long e diz a ele para fodê-la na bunda. Ela teme sua bunda fodida de várias posições até que ele goze.', '8.0', 'videos/Adulto/AssParade - Krissy Lynn - Wildest Toy Turns To Anal Sex.mp4', 'posters/Adulto/AssParade.19.06.24.Krissy.Lynn.XXX.MP4-SDX264XXX_l.jpg', 'Adulto', ''),
(71, '[AssParade] Brandi Bae (Big Ass on Big Black Cock / 17.06.2019)', 'posters/Adulto/AssParade-Brandi-Bae-Big-Ass-on-Big-Black-Cock-xmoviesforyou.jpg', 'Brandi Bae estava voltando da escola para casa. Ela chegou em sua casa, mas a porta estava trancada. Então ela caminhou até os fundos de sua casa. Quando ela olhou pela janela, viu seu meio-irmão Pressure assistindo pornografia na sala de estar. Seu pau estava para fora e era enorme! Brandi nunca o viu nu antes. Ele parecia tão quente. Brandi respirou fundo abaixou as calças e começou a se masturbar ali mesmo. Depois que ela veio, ela abriu a porta dos fundos e entrou de quatro. Ela olhou ao redor do sofá e observou seu pau gigante. Então ela ficou atrás dele e assistiu ao filme pornô. Durante uma cena extra áspera ela fez um som e Pressão percebeu que ela estava atrás dele. Ele ficou zangado. Ela gostou que ele ficou bravo. Ela pediu que ele fosse rude com ele. Então ele enfiou o pau na boca dela e ela começou a chupar. Então ele a fodeu muito bem. Quando eles estavam fazendo cachorrinho, ele pegou seu cinto e em vez de estrangulá-la, usou-o como uma mordaça pela boca. Então ele a fodeu um pouco mais e veio direto em seu rosto.', '7.0', 'videos/Adulto/AssParade - Brandi Bae - Big Ass on Big Black Cock.mp4', 'posters/Adulto/AssParade_Brandi_Bae_-_Big_Ass_on_Big_Black_Cock.jpg', 'Adulto', ''),
(72, '[AssParade] Brandi Bae, Rharri Rhound (Huge Ass 3somes Make Me Squirt / 02.04.2019)', 'posters/Adulto/AssParade-Brandi-Bae-Rharri-Rhound-Huge-Ass-3somes-Make-Me-Squirt-xmoviesforyou.jpg', 'Brandi e Rharri decidem tirar um dia na piscina, enquanto eles estão conversando Brandi descobre que Rharri gosta de garotas, ela não se importa, então eles começam a se beijar, então eles brincam com suas enormes e gigantes bundas se revezando para lubrificá-las e esfregá-los, isso os deixa com muito tesão e decidem comer e passar os dedos na bucetinha um do outro, enquanto isso acontece, Damon, o vizinho de Brandi entra para devolver uma escada que ele pegou emprestado, ele fica chocado ao perceber que está vendo dois cu enormes tendo sexo, mas quando ele tenta sair, as garotas o convidam para se juntar a elas, Damon fica impressionado quando as garotas colocam sua bunda redonda e suculenta em seu rosto, depois, seu pau é chupado pelas duas garotas ao mesmo tempo, então ele fode-os alternando posições, comendo sua buceta e dedilhando-os até que Rharri esguichou,finalmente ele entrega sua carga quente em seus rostos bonitos.', '8.0', 'videos/Adulto/AssParade - Brandi Bae, Rharri Rhound - Huge Ass 3somes Make Me Squirt.mp4', 'posters/Adulto/bdb36e165cedc23724b5a0f393c905db1580aaedfb7c5013.jpg', 'Adulto', ''),
(73, '[AssParade] Luna Star (Luna Stars Anal From Big Cock / 22.04.2019)', 'posters/Adulto/AssParade-Luna-Stars-Anal-From-Big-Cock-xmoviesforyou.jpg', 'Pressão recebe seu tão esperado pacote e Luna Star quer saber o que há dentro de sua caixa secreta. O brinquedo sexual de buceta e bunda em tamanho real de Pressure entrou e ele está ansioso para experimentá-lo. Luna o espia e fica em choque que conseguiríamos algo assim, então ela o distrai mandando ir até a porta da frente. Enquanto ele procura algo na porta, ela esconde seu novo brinquedo e se coloca nua com apenas a bunda aparecendo para ele. Ele volta para terminar o seu negócio como ele dedo e começa a foder. Ele fode sua buceta e bunda até Luna gemer alto o suficiente para ele reagir a isso. Ela diz a ele que é melhor foder sua meia-irmã do que aquela coisa. Ela acaba dando a Pressão um grande boquete antes de ter sua buceta e bunda grande fodido até que ela leva sua carga em sua boca.', '8.0', 'videos/Adulto/AssParade - Luna Star - Luna Star s Anal From Big Cock.mp4', 'posters/Adulto/mozaique2334.jpg', 'Adulto', ''),
(74, '[AssParade] Harley Jade (Não conte ao vovô / 19.06.2017)', 'posters/Adulto/AssParade-Harley-Jade-Don’t-Tell-Grandpa-xmoviesforyou.jpg', 'Não só Harley Jade tem uma das maiores bundas lá fora, ela também é uma das garotas mais excitadas por aí. O avô de Harley e seu vizinho Bruno estavam passeando pela churrasqueira quando ela se aproximou deles e começou a brincar com as tralhas de Bruno sem que o avô percebesse. Ela então, deslizou para trás do balcão, tirou o pau dele e começou a chupar. Tudo isso estava acontecendo enquanto seu avô estava do outro lado grelhando. De lá, eles se mudaram para as cadeiras de banho de sol. Aqui, Harley começou a montar bruno enquanto seu avô sentava na frente lendo um jornal. Uma vez que seu avô saiu para tirar uma soneca, a verdadeira diversão começou. Bruno bateu no cu de Harley em várias posições diferentes. Ele bateu naquela bunda até rebentar uma carga gigante por todo o rosto e boca.', '9.0', 'videos/Adulto/[AssParade] Harley Jade - Don t Tell Grandpa (19.06.2017) rq.mp4', 'posters/Adulto/d3afb656695d.jpg', 'Adulto', ''),
(75, 'Ótima maneira de se exercitar com Harley Jade e sua bunda grande / 14.05.2017)', 'posters/Adulto/MonstersOfCock-Harley-Jade-Great-way-to-exercise-with-Harley-Jade-and-her-big-ass-xmoviesforyou.jpg', 'Harley Jade se alonga e sai para uma boa corrida à tarde. Ela acaba atraindo alguém que acaba a seguindo enquanto ele a filma com o celular. Ele acaba esbarrando nela quando ela se abaixa para se esticar e enlouquece quando ela descobre que ele a está filmando. Ela acaba percebendo que ele está duro e decide convidá-lo para ir com ela para um “passeio”. Ela acabou levando-o para uma área isolada onde ela sabe que ninguém vai vê-los e rapidamente começa a brincar com seu pau comprido. Ela está abastecida que é grande e decide chupar e até foder. Depois de brincar com seu pau e ele com sua bunda grande, podemos vê-la levando uma pancada de várias posições até que ela o faça gozar na boca e no rosto.', '9.9', 'videos/Adulto/[MonstersOfCock] Great way to exercise with Harley Jade and her big ass (14.05.2017) r', 'posters/Adulto/mozaique.jpg', 'Adulto', ''),
(76, 'Kimber Woods em Brazzers - Yoga Freaks - Episódio 6', 'posters/Adulto/Kimber-Woods-Brazzers-Yoga-Freaks--Episode-Six-2016-08-14-05_1500.webp', 'Kimber Woods está pronta para se alongar, mas não da maneira que seu instrutor de ioga está esperando. Jean Val Jean garante que sua aluna sexy esteja legal e relaxada antes de tirar o óleo e rasgar aquelas calças brancas de ioga apertadas! Kimber alcançará a iluminação através do sexo anal?', '9.9', 'videos/Adulto/BigButtsLikeItBig - Kimber Woods (Yoga Freaks Episode Six) XXX NEW 14.August.2016.mp4', 'posters/Adulto/mozaiqu345345e.jpg', 'Adulto', ''),
(77, ' Kimber Woods, Chanel Preston', 'posters/Adulto/43806_chanel_hi-cover.jpg', 'As lindas Penny Pax e Chanel Preston estão procurando uma noite de garotas travessas, mas sua adorável garçonete incompetente, Kimber Woods, continua fodendo o pedido de bebida. Obviamente, precisando de uma lição de serviço, Penny e Chanel exigem que Kimber os encontre no final de seu turno. Imediatamente despindo sua nova vagabunda de serviço, Penny e Chanel dão a Kimber a surra que ela merece! Curvadas sobre o joelho de Chanel, as duas deusas fazem a bunda redonda e suculenta de Kimber rosa brilhante antes de amarrá-la no teto e montar em seu rosto. Enquanto Penny corta suas coxas macias, Chanel esfrega sua boceta molhada na língua ansiosa de Kimber, certificando-se de que ela finalmente receba o dinheiro dessa garçonete sacana! Um buraco para baixo e dois para ir, Chanel e Penny abaixam Kimber no chão, enfiando sua buceta apertada em missionário e cachorrinho enquanto espancava, batia e açoitava seu clitóris e sua bunda até que seu corpo convulsionasse de intensos orgasmos múltiplos. ', '7.0', 'videos/Adulto/WA - Jan 17, 2019 - Kimber Woods, Chanel Preston and Penny Pax (43806).hi.mp4', 'posters/Adulto/WA-Jan-17-2019-Kimber-Woods-Chanel-Preston-and-Penny-Pax.jpg', 'Adulto', ''),
(78, 'Maddy Oreilly (O trabalho é longo quando você está vestindo uma tanga', 'posters/Adulto/23c7a31446e2f26bbe0e210c02226f89 (1).jpg', 'O trabalho é longo quando você está vestindo uma tanga', '9.0', 'videos/Adulto/[BigButtsLikeItBig] Maddy Oreilly (Work Is Long When Youre Wearing A Thong - 23.08.16)', 'posters/Adulto/23c7a31446e2f26bbe0e210c02226f89.jpg', 'Adulto', ''),
(79, '[GloryHole] Penny Pax and Maddy OReilly ', 'posters/Adulto/8.jpg', 'GloryHole', '9.9', 'videos/Adulto/[GloryHole] Penny Pax and Maddy OReilly (30.03.15) rq.mp4', 'posters/Adulto/www.0xxx.in_GloryHole.15.03.30.Penny.Pax.And.Maddy.Oreilly.XXX.1080p.MP4-KTR.mp4-5.jpg', 'Adulto', ''),
(80, '[SisLovesMe] Maddy OReilly - Its Called The Cum Treatment (02.05.2017)', 'posters/Adulto/02-8-758x505.jpg', 'Maddy está no chão esfregando o chão com um belo vestido que mostra a quantidade de lixo que há em seu baú. Ela quer sair deste trabalho para poder ir ver um concerto. Ela implora ao irmão que diz que ela não tem nada a oferecer a ele além de sua buceta. Mais uma vez, ela é convencida a pegá-lo por trás no chão da cozinha apenas para que ela possa ver esse show. No final da semana, ela faz algo para fazer com que seu laptop funcione mal e pede ao irmão para consertá-lo. Ele olha para ele e encontra pornografia. Ele ameaça contar para seus pais... A menos, é claro, que ele possa fodê-la na bunda para manter a boca fechada. Maddy relutantemente concorda, mas só quer que termine como ela queria que a foda de sua buceta terminasse. Ele gosta de enfiar seu pau no cu de sua irmã idiota e, em seguida, despeja uma carga quente em sua boca. No dia seguinte, Maddy está perturbada por ter duas espinhas no rosto. Seu irmão assustador a engana pensando que esperma masculino vai resolver seu problema. Ele faz com que ela o chupe para que ele possa bombear sua loção de irmão por todo o rosto. Tão quente mas tão crédulo!', '9.0', 'videos/Adulto/[SisLovesMe] Maddy OReilly - Its Called The Cum Treatment (02.05.2017) rq (540p).mp4', 'posters/Adulto/ca7d1e397cee5160b91f258636930f2242VX265.jpg', 'Adulto', ''),
(81, 'Maddy Oreilly aka Maddy OReilly - Free Anal 5 ', 'posters/Adulto/zk3vyhah2hv11.jpg', 'Maddy OReilly odeia quando os caras entram no bar dela sem saber o que querem, mas Xander Corvus está aqui para o menu secreto, aquele com ANAL GRÁTIS! Xander ouviu falar sobre este lugar de um amigo, mas ser vendado e levado para um quarto dos fundos para descobrir que ele está livre para foder Maddy do jeito que ele quiser é mais do que ele esperava! Com essa ruiva peituda mandando ele enfiar na bunda dela ou fazer o nosso Xander fazer o que ele manda! Dobrando sua bunda pálida, espalhando-a largamente e enchendo-a até a borda com um grande pau, Xander bate em sua bunda apertada o mais forte que pode!', '7.0', 'videos/Adulto/BigButtsLikeItBig - Maddy OReilly - Free Anal 5.mp4', 'posters/Adulto/zk3vyhah2hv11.jpg', 'Adulto', ''),
(82, 'MonsterCurves - Maddy Oreilly - Dat Booty', 'posters/Adulto/07.jpg', 'Maddy OReilly é uma atrevida sexy! Ela tem muito apelo de curva com seios empinados e uma bela bunda gorda. Ela adora mostrar seu corpo perfeito, mas o verdadeiro tesouro para essa vadia sexy é que ela adora levar isso fundo em sua bunda! Você está em um deleite quando Maddy provoca seus ativos em uma introdução que é garantida para deixá-lo duro! Então, ela pula na mesa de massagem para obter algum alívio do estresse muito necessário de Jessy Jones. Depois de esfregar óleo em todas as curvas de Maddy, ele rasga suas meias arrastão e brinca com seu plug anal antes de dar-lhe uma massagem interna tocando sua boceta molhada! Agradecida, Maddy chupa o pau grande e duro da Jessy, mas a puta tesão só tem uma coisa em mente: enfiar o pau grande da Jessy no bumbum! Claro,', '7.0', 'videos/Adulto/MonsterCurves - Maddy Oreilly - Dat Booty.mp4', 'posters/Adulto/07.jpg', 'Adulto', ''),
(83, 'Rainbow Booty estrelado por Maddy Oreilly ', 'posters/Adulto/preview.jpg', 'O verão está gozando, então vença o calor pintando a gracinha curvilínea que é Maddy ORiley enquanto ela ostenta suas fantásticas cuvres rebolando aquele grande espólio dela enquanto parece absolutamente de tirar o fôlego em um biquíni colorido do arco-íris! Ela provoca seu corpo antes de Logan Long entrar em cena para começar a lubrificar sua bunda antes de, eventualmente, dedilhando sua bunda e buceta! Essa garota com tesão adora ser enchida por pau - e ela adora ter todos os seus buracos de vadia penetrados! Não deixe de dar uma olhada nessa linda garota, especialmente quando ela está sendo espancada à beira da piscina!', '7.0', 'videos/Adulto/MonsterCurves - Maddy OReilly - Rainbow Booty.mp4', 'posters/Adulto/monstercurves.19.02.01.maddy.oreilly.rainbow.booty.jpg', 'Adulto', ''),
(84, '[BangBrosClips] Yudi Pineda (Yudi Pineda Is..The Squirting Nun / 02.10.2019)', 'posters/Adulto/BangBrosClips-Yudi-Pineda-Is..The-Squirting-Nun-xmoviesforyou.jpg', 'A irmã Yudi Pineda e o irmão Erik têm um amor proibido, eles não podem ficar juntos, mas a irmã Yudi é muito gostosa, e o irmão Erik está com muito tesão, então ele a convence a fugir para os jardins do mosteiro onde eles podem ficar juntos, uma vez que estavam sozinhos, seu desejo tomou o controle, primeiro eles se beijaram, depois o irmão Erik lambeu a buceta Yudi da irmã a ponto de ela esguichar, depois ela chupou o pau dele se preparando para foder em todas as posições que conheciam, cachorrinho, missionário, vaqueira e Irmã Yudi esguichou novamente, de volta ao sexo desta vez mais forte, mais rápido e mais áspero e mais uma vez a Irmã Yudi esguichou. Finalmente, o irmão Erik derramou sua porra quente em todo o rosto da irmã Yudi.', '9.0', 'videos/Adulto/[BangBrosClips] Yudi Pineda Is..The Squirting Nun (10.02.2019) rq.mp4', 'posters/Adulto/m69t27jm7odf.jpg', 'Adulto', ''),
(85, '[BangBrosClips] Yudi Pineda (Dirty Nun Fucks The Gardener / 31.03.2019)', 'posters/Adulto/BangBrosClips-Yudi-Pineda-Dirty-Nun-Fucks-The-Gardener-xmoviesforyou.jpg', 'Yudi Pineda acha difícil reprimir seus impulsos. Desta vez, ela começou a espionar o jardineiro e começou a se masturbar para ele. Ela se envolveu tanto que fechou os olhos e nunca percebeu que ele estava se aproximando dela. Uma vez que ele percebeu o que ela estava fazendo, ele se esgueirou atrás dela e começou a comer sua boceta por trás. Logo, seu pênis estava no fundo de sua garganta. Eventualmente, a boceta de Yudi estava sendo esticada mais do que nunca. Ela pegou o pênis do jardineiro em várias posições diferentes antes de receber uma carga gigantesca por todo o rosto.', '9.0', 'videos/Adulto/BangBrosClips - Yudi Pineda - Dirty Nun Fucks The Gardener.mp4', 'posters/Adulto/BangBrosClips-Yudi-Pineda-Dirty-Nun-Fucks-The-Gardener-xmoviesforyou.jpg', 'Adulto', ''),
(86, '[BangBrosClips] Yudi Pineda (Desejos Secretos / 01.04.2019)', 'posters/Adulto/BangBrosClips-Yudi-Pineda-Secret-Desires-xmoviesforyou.jpg', 'A irmã Yudi Pineda tem tido problemas para manter suas tentações afastadas. Ela anseia pelo pecado, ela deseja ser fodida em sua boceta e cu. Yudi não pode deixar de se masturbar em seu dormitório. Ela foi capaz de manter isso em segredo até um dia fiel. O dia em que Jack a pegou no meio do ato. Ver alguém tão bonito quanto ela se masturbar fez Jack se excitar a ponto de agora ele não conseguir mais segurá-lo. Ele começou a se masturbar enquanto a espionava. Eventualmente, ela o notou e o perseguiu. Só para segui-lo pedir-lhe para comer sua buceta. Irmã Yudi comeu sua boceta e, eventualmente, ela empurrou o pau de Jack profundamente dentro de sua boceta e cu. Irmã Yudi foi fodida na casa de deus em várias posições diferentes antes de ser batizada por esperma sagrado em todo o rosto.', '8.0', 'videos/Adulto/bangbrosclips.19.01.04.yudi.pineda.mp4', 'posters/Adulto/1xkp24.jpg', 'Adulto', ''),
(93, 'A Fortaleza (2021)', 'posters/Ação/hYi00SLc8v92h5i4MoluCvIwLG1.jpg', 'A história gira em torno de um resort ultrassecreto para oficiais de inteligência aposentados dos EUA. Um grupo de criminosos liderados por Balzary rompeu o complexo, infernalmente se vingou de Robert, forçando o oficial aposentado e seu filho a salvar o dia.', '5.0', 'videos/Ação/Game Animation Reel 2020 animation.mp4', 'postersVid/Ação/hYi00SLc8v92h5i4MoluCvIwLG1.jpg', 'Ação', ''),
(94, 'Baba de discagem de bunda', 'posters/Adulto/prevasasddiew.jpg', 'Ivy Lebelle está animada para seguir em frente e começar a namorar novamente depois de terminar com seu ex. Ela convida seu namorado Keiran Lee para entrar, mas as coisas não estão indo tão bem quanto o planejado. Especialmente porque ela continua sendo interrompida por ligações de seu ex! Para se vingar daquele chato, Ivy decide foder Keiran e até deixá-lo enfiar na bunda dela! Tudo está indo bem, até que ela acidentalmente liga para o ex e ele ouve tudo.', '8.0', 'videos/Adulto/[BigButtsLikeItBig] Ivy Lebelle - Butt Dialing Babe (06.04.2019) rq.mp4', 'postersVid/Adulto/prevasasddiew.jpg', 'Adulto', '');
INSERT INTO `filmes` (`id`, `titulo`, `poster`, `sinopse`, `nota`, `video`, `ImagemVideo`, `Categoria`, `Atores`) VALUES
(95, '[PervMom] Ivy Lebelle (Fodendo com o estresse da madrasta / 06.01.2019)', 'posters/Adulto/PervMom-Ivy-Lebelle-Fucking-Away-The-Stepmom-Stress-xmoviesforyou.jpg', 'Quando Ivy Lebelle está estressada, isso faz com que seu enteado também se sinta estressado. Então, hoje, ele quer ajudá-la a descomprimir de sua semana difícil de qualquer maneira que puder. Ele a ajuda a tirar a saia, e ela rapidamente o convence a enfiar o pau entre seus lábios grandes. Mais tarde, Ivy chega em casa depois de um treino e convida seu enteado para se juntar a ela no chuveiro com ela e foder sua buceta apertada. Alguns dias depois, Ivy abre os olhos para seu enteado se masturbando sobre ela. Ela quer terminar de onde eles pararam no outro dia, então ela enfia o pau dele dentro de sua buceta MILF e o deixa louco rápido!', '9.0', 'videos/Adulto/[PervMom] Ivy Lebelle - Fucking Away The Stepmom Stress (01.06.2019) rq.mp4', 'postersVid/Adulto/1559473668_5uz2xyklb36my1kp84vh.jpg', 'Adulto', 'Ivy Lebelle'),
(96, 'Ivy Lebelle e Kyle Mason em Sexo Secreto na Sauna', 'posters/Adulto/234234324.jpg', 'Ivy e seu marido estão comemorando seu aniversário com uma viagem a Las Vegas, mas eles não conseguem concordar em como se divertir. Ele quer ir aos cassinos, ela quer aproveitar o spa do hotel. Ivy finalmente arrasta o marido para a sauna e os dois ficam tão relaxados que cochilam. Ivy acorda para ver um estranho com tesão juntou-se a eles - e ele não tem vergonha de mostrar a ela seu pau duro. Ivy está assustada e tenta acordar seu homem, mas ele apaga como uma luz. Irritada com o marido e sentindo-se negligenciada, ela decide fazer um jogo de mostrar e contar com o estranho. Mas até onde ela irá?', '7.0', 'videos/Adulto/[RealWifeStories] Ivy Lebelle (Secret Sauna Sex - 23.02.2017) rq (1k).mp4', 'postersVid/Adulto/188683927_xxxfile-org-realwifestories_2017-02-23_ivy_lebelle_secret_sauna_sex_10535.jpg', 'Adulto', 'Ivy Lebelle'),
(97, 'Ano Novo Novo Traseiro Gia Derza , Ivy Lebelle RK Prime', 'posters/Adulto/reality_kings_2019_new_years_party_porn_gia_derza_ivy_lebelle_anal_threesome_xxx-2.jpg', 'Gia Derza e Ivy Lebelle estão fazendo seus próprios fogos de artifício neste Ano Novo, rebolando suas bundas grandes e balançando seus peitos enormes entre os balões dourados brilhantes. Enquanto essas garotas se beijam, Alex Legend começa a festa abrindo uma garrafa de espumante! As gatas compartilham o gosto do pau de Alex, e isso é apenas o aperitivo para o banquete de pau! Enquanto Gia monta a vaqueira de pau de Alex, Ivy começa a brincar com a bunda do adolescente fofo, prometendo que esta noite vai ficar bem e verdadeiramente fodido. Alex desliza seu pau na bunda de Ivy primeiro, porém, e ela grita de prazer enquanto lambe a boceta de Gia. Então é a vez do cuzinho apertado da Gia! Essas megeras são voyeurs assim como exibicionistas, e sempre que não estão curtindo o pau grande de Alex em sua bunda, elas', '7.0', 'videos/Adulto/[RKPrime] Gia Derza, Ivy Lebelle - New Year New Rear (01.01.2019) rq.mp4', 'postersVid/Adulto/mozasdasdadaique.jpg', 'Adulto', 'Gia Derza e Ivy Lebelle'),
(98, 'Bundas grandes gostam de grandes - elegantemente tarde - 01/09/2018', 'posters/Adulto/Brunette-Ivy-Lebelle-Enjoying-Anal-4.jpg', 'Com a sessão de fotos mais importante de sua linha de moda ao virar da esquina, Bill Bailey chama uma modelo de última hora para ajudar a mostrar sua coleção. Infelizmente, ele conseguiu mais do que esperava com os bens de Ivy Lebelle. Depois de lutar para conseguir, 01/09/2018', '9.0', 'videos/Adulto/BigButtsLikeItBig - Ivy Lebelle - Fasshionably Late.mp4', 'postersVid/Adulto/95355882319088645254-1200x676.jpg', 'Adulto', 'Ivy Lebelle'),
(99, 'Ivy Lebelle in Brazzers - After-Hours Anal ', 'posters/Adulto/Ivy-Lebelle-Brazzers-After-Hours-Anal-2019-07-22-02.jpg', 'A sexy executiva Ivy Lebelle só gosta de trabalhar até tarde porque isso lhe dá a oportunidade de foder os colegas depois do expediente. Quando Ivy convoca Small Hands em seu escritório, inicialmente parece que ele vai ser repreendido. No entanto, acontece que a principal motivação de Ivy é levar um pau grosso em seu espólio redondo. Ela deixa Mãos Pequenas descobrir seu plug anal clandestino depois que ele encharca sua meia-calça e bunda, e então Ivy realmente mostra a Mãos Pequenas como se envolver em algum anal depois do expediente.', '8.0', 'videos/Adulto/BigWetButts - Ivy Lebelle - After-Hours Anal.mp4', 'postersVid/Adulto/222e0756d736e02414ac8186de19706d.jpeg', 'Adulto', 'Ivy Lebelle'),
(100, 'Ivy Lebelle in Brazzers - After-Hours Anal ', 'posters/Adulto/Ivy-Lebelle-Brazzers-After-Hours-Anal-2019-07-22-02.jpg', 'A sexy executiva Ivy Lebelle só gosta de trabalhar até tarde porque isso lhe dá a oportunidade de foder os colegas depois do expediente. Quando Ivy convoca Small Hands em seu escritório, inicialmente parece que ele vai ser repreendido. No entanto, acontece que a principal motivação de Ivy é levar um pau grosso em seu espólio redondo. Ela deixa Mãos Pequenas descobrir seu plug anal clandestino depois que ele encharca sua meia-calça e bunda, e então Ivy realmente mostra a Mãos Pequenas como se envolver em algum anal depois do expediente.', '8.0', 'videos/Adulto/BigWetButts - Ivy Lebelle - After-Hours Anal.mp4', 'postersVid/Adulto/222e0756d736e02414ac8186de19706d.jpeg', 'Adulto', 'Ivy Lebelle'),
(101, '[Perfurado] Ivy Lebelle (Anal realmente deixa Ivy Cum Hard / 02.12.2019)', 'posters/Adulto/1yq8hn.jpg', 'Se há uma coisa que Ivy LeBelle ama é um belo e grande pau no fundo de sua bunda. Não há absolutamente nada que possa fazê-la gozar melhor do que ser perfurado! Ela dá a Ramon seu brinquedo para prepará-la e ela apenas se abre enquanto ele a fode cada vez mais fundo. Ela quer esse pau e implora para ele colocar as bolas profundamente. Ela fica em cima para realmente senti-lo deslizar cada vez mais fundo. Como pode um pau na bunda dela fazê-la gozar melhor do que qualquer um que fode sua buceta. Tudo o que Ivy quer é um pau na bunda dela para realmente fazê-la foder descontroladamente.', '8.0', 'videos/Adulto/Drilled - Ivy Lebelle - Anal Really Makes Ivy Cum Hard.mp4', 'postersVid/Adulto/1yq8hn.jpg', 'Adulto', 'Ivy Lebelle'),
(102, 'Liza Del Sierra ', 'posters/Adulto/Liza-Del-Sierra-Brazzers-Bathroom-Banging-2012-07-26-05.jpg', 'Liza é uma funcionária com tesão. Durante uma pausa no banheiro, ela decide ligar para o namorado para uma pequena rodada de sexo por telefone. Manuel está trabalhando naquele dia como zelador da empresa, e todo aquele sexo celular deixou Liza com muito tesão.', '8.0', 'videos/Adulto/btaw_liza_del_sierra-sd169.mp4', 'postersVid/Adulto/ed62be48e0461703fae862ec7f9687ceb92e4a58.jpg', 'Adulto', 'Liza Del Sierra ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcao`
--

CREATE TABLE `funcao` (
  `id` int(11) NOT NULL,
  `funcao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcao`
--

INSERT INTO `funcao` (`id`, `funcao`) VALUES
(1, 'Conferente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `setores`
--

CREATE TABLE `setores` (
  `id` int(11) NOT NULL,
  `setor` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `setores`
--

INSERT INTO `setores` (`id`, `setor`) VALUES
(1, 'ADMINISTRATIVO I'),
(2, 'ADMINISTRATIVO II'),
(3, 'ALTO RISCO'),
(4, 'ARMAZENAGEM'),
(5, 'ATENDIMENTO'),
(6, 'BIN NORMAL'),
(7, 'CONTROLE DE ESTOQUE'),
(8, 'CPD'),
(9, 'DCP'),
(10, 'DEVOLUÇÃO'),
(11, 'DP'),
(12, 'DRIVE-IN/BLOCAGEM'),
(13, 'EXPEDIÇÃO AVANÇADA'),
(14, 'EXPEDIÇÃO DOCAS'),
(15, 'GERÊNCIA'),
(16, 'INFORMÁTICA'),
(17, 'MANUTENÇÃO'),
(18, 'PLANEJAMENTO'),
(19, 'PORTA PALLET I'),
(20, 'PORTA PALLET II'),
(21, 'QUALIDADE'),
(22, 'RECEBIMENTO'),
(23, 'RH'),
(24, 'SESMT'),
(25, 'SOBRA'),
(26, 'SOFT'),
(27, 'TRANSPORTE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Prontuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `setor` varchar(40) NOT NULL,
  `permissao` varchar(11) NOT NULL,
  `Turno` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `Prontuario`, `nome`, `senha`, `setor`, `permissao`, `Turno`) VALUES
(1, 148429, 'Flávio Henrique', '1234', 'Qualidade', 'admin', '1º Turno'),
(2, 149577, 'Felipe Moreira', '1234', 'Qualidade', 'admin', '1º Turno'),
(3, 1234, 'Jose Rodrigo', '1234', 'Soft', 'admin', '2º Turno'),
(4, 340767, 'Aline de Oliveira', 'lasa2021', 'Devolução', 'admin', '1º Turno');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `absenteismo`
--
ALTER TABLE `absenteismo`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `dados`
--
ALTER TABLE `dados`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcao`
--
ALTER TABLE `funcao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `setores`
--
ALTER TABLE `setores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `protuario` (`Prontuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `absenteismo`
--
ALTER TABLE `absenteismo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT de tabela `dados`
--
ALTER TABLE `dados`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT de tabela `funcao`
--
ALTER TABLE `funcao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `setores`
--
ALTER TABLE `setores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
