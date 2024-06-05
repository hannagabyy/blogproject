-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/06/2024 às 03:07
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
-- Banco de dados: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `amizade`
--

DROP TABLE IF EXISTS `amizade`;
CREATE TABLE `amizade` (
  `usuario_id1` int(11) NOT NULL,
  `usuario_id2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `amizade`
--

INSERT INTO `amizade` (`usuario_id1`, `usuario_id2`) VALUES
(3, 29),
(5, 15),
(5, 20),
(8, 7),
(8, 10),
(8, 25),
(9, 18),
(9, 19),
(11, 30),
(14, 3),
(14, 13),
(14, 26),
(16, 28),
(17, 7),
(17, 9),
(21, 30),
(23, 3),
(25, 22),
(26, 3),
(26, 9),
(26, 27),
(28, 4),
(28, 27),
(30, 13),
(30, 22);

-- --------------------------------------------------------

--
-- Estrutura para tabela `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `comentario` varchar(500) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `usuarioId` int(11) NOT NULL,
  `privacidade` enum('privado','publico') NOT NULL
) ;

--
-- Despejando dados para a tabela `post`
--

INSERT INTO `post` (`id`, `comentario`, `data_criacao`, `usuarioId`, `privacidade`) VALUES
(8, 'Grato pelas amizades que resistem ao teste do tempo. Vocês são minha rocha! #AmizadeVerdadeira', '2024-02-02 03:25:10', 8, 'publico'),
(9, 'Às vezes, a única resposta necessária é um abraço apertado. #Conexão', '2024-02-02 03:25:10', 10, 'publico'),
(10, 'Caminhando com confiança na direção dos meus sonhos. O destino é incerto, mas a jornada é emocionante. #Sonhador', '2024-02-02 03:25:10', 4, 'publico'),
(11, 'Descobrindo que a simplicidade é a verdadeira sofisticação. #Elegância', '2024-02-02 03:25:10', 1, 'publico'),
(12, 'Dias chuvosos pedem livros e cobertores. Qual é o seu livro favorito para dias assim?#Leitura', '2024-02-02 03:25:10', 10, 'publico'),
(14, 'Descobrindo que a felicidade está nas pequenas coisas, como um pôr do sol colorido. #MomentosMágicos', '2024-02-04 03:15:10', 15, 'publico'),
(15, 'A vida é uma mistura de caos e calma. Encontre beleza em ambos. #Equilíbrio', '2024-02-04 03:15:10', 20, 'publico'),
(16, 'A arte de deixar ir é uma das lições mais valiosas que a vida ensina. #Desapego', '2024-02-04 03:15:10', 26, 'publico'),
(17, 'Mente sã, corpo são. Priorizando o bem-estar em todas as áreas da vida. #Equilíbrio', '2024-02-04 03:15:10', 27, 'publico'),
(18, 'Em busca de equilíbrio entre trabalho e lazer. Porque a vida é para ser vivida, não apenas trabalhada. #EquilíbrioVital', '2024-02-04 03:15:10', 20, 'publico'),
(19, 'Inspirado pela natureza e sua capacidade de renovar. #Renovação', '2024-02-05 01:12:21', 30, 'publico'),
(20, 'Explorando novos horizontes e abraçando desafios. A vida é uma aventura constante! #Aventureiro', '2024-02-05 01:12:32', 19, 'publico'),
(21, 'Inspirado pela natureza e sua capacidade de renovar. #Renovação', '2024-02-05 01:12:42', 4, 'publico'),
(28, '&lt;p&gt;tá quebrado, é&lt;/p&gt;', '2024-04-25 00:57:45', 14, 'privado'),
(29, 'teste do louis', '2024-04-25 02:01:37', 14, 'publico'),
(35, 'Aprendendo a apreciar a jornada, mesmo quando o destino ainda não está claro. #CaminhoIncerto', '2024-04-30 02:26:23', 24, 'publico'),
(36, 'Refletindo sobre as lições que a vida me ensinou até agora. Cada desafio é uma oportunidade de crescimento. #Aprendizado', '2024-04-30 02:26:23', 23, 'publico'),
(37, 'Amando minha rotina matinal! Café, música e um pouco de sol para começar o dia com energia positiva. #BomDia', '2024-04-30 02:26:23', 19, 'publico'),
(38, 'Um café, um sorriso e a certeza de que cada dia é uma dádiva. #Grato', '2024-04-30 02:26:23', 6, 'publico'),
(39, 'Abraçando a jornada do autodescobrimento. Afinal, a vida é uma constante evolução. #CrescimentoPessoal', '2024-04-30 02:26:23', 10, 'publico'),
(40, 'Celebrando conquistas pequenas, mas significativas! Cada passo conta. #Progresso', '2024-04-30 02:26:23', 8, 'publico'),
(41, 'Recordações de viagens que alimentam a alma. #Wanderlust', '2024-04-30 02:26:23', 18, 'publico'),
(42, 'Grato pelas amizades que resistem ao teste do tempo. Vocês são minha rocha! #AmizadeVerdadeira', '2024-04-30 02:26:23', 11, 'publico'),
(43, 'Hoje é daqueles dias em que a inspiração está no ar. Pronto para criar algo incrível! #Criatividade', '2024-04-30 02:26:23', 15, 'publico'),
(44, 'A vida é uma jornada incrível, cheia de altos e baixos. Estou aprendendo a abraçar ambos com gratidão. #CaminhoPessoal', '2024-04-30 02:26:23', 9, 'publico'),
(45, 'Mente positiva, vida positiva. Que as boas vibrações guiem o meu dia. #Positividade', '2024-04-30 02:28:51', 25, 'publico'),
(46, 'Domingo preguiçoso em casa. O lar é onde o coração está. #Descanso', '2024-04-30 02:28:51', 1, 'publico'),
(47, 'Em busca de equilíbrio entre trabalho e lazer. Porque a vida é para ser vivida, não apenas trabalhada. #EquilíbrioVital', '2024-04-30 02:28:51', 28, 'publico'),
(48, 'Aprendendo a apreciar a jornada, mesmo quando o destino ainda não está claro. #CaminhoIncerto', '2024-04-30 02:28:51', 29, 'publico'),
(49, 'Refletindo sobre as pequenas vitórias diárias. Às vezes, são os momentos simples que fazem a vida incrível. #Gratidão', '2024-04-30 02:28:51', 17, 'publico'),
(75, '&lt;p&gt;&lt;strong&gt;teste&lt;/strong&gt;&lt;/p&gt;', '2024-04-30 20:28:04', 14, 'privado'),
(76, '&lt;p&gt;olá gente!&lt;/p&gt;', '2024-04-30 22:41:39', 14, 'privado'),
(77, '&lt;p&gt;Reloou&lt;/p&gt;', '2024-05-03 22:43:05', 14, 'privado'),
(78, '&lt;p&gt;teste&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;', '2024-05-04 21:13:56', 14, 'privado');

-- --------------------------------------------------------

--
-- Estrutura para tabela `post_reacao`
--

DROP TABLE IF EXISTS `post_reacao`;
CREATE TABLE `post_reacao` (
  `post_id` int(11) NOT NULL,
  `reacao_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `post_reacao`
--

INSERT INTO `post_reacao` (`post_id`, `reacao_id`, `usuario_id`) VALUES
(19, 5, 30),
(21, 1, 18),
(36, 4, 13),
(46, 5, 27);

-- --------------------------------------------------------

--
-- Estrutura para tabela `reacao`
--

DROP TABLE IF EXISTS `reacao`;
CREATE TABLE `reacao` (
  `id` int(11) NOT NULL,
  `emoji` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `codigo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `reacao`
--

INSERT INTO `reacao` (`id`, `emoji`, `codigo`) VALUES
(1, 'amei', '&#x2764;'),
(2, 'engraçado', '&#x1F602;'),
(3, 'uau', '&#x1F62E;'),
(4, 'triste', '&#X1F62D;'),
(5, 'zangado', '&#x1F620;');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(140) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `nome` varchar(50) NOT NULL,
  `sobreMim` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `usuario`, `senha`, `foto`, `admin`, `nome`, `sobreMim`) VALUES
(1, 'mariaclara@email.com', 'Maria Clara', '$2y$10$SEWI6TYtBCzy4CdF.ll6R.xC5hFrF1usGE0.yCEHOmtTG5iwC4UMS', '/upload/fotos-perfil/65b9c43f38185.jpg', 0, 'Maria Clara Santos', 'Sou uma profissional ambiciosa, trilhando meu caminho na área de marketing com determinação e criatividade.'),
(2, 'pedrojoao@email.com', 'Pedro João', '$2y$10$ujtuQOjNfLMEXP5XQlhdpOLKa9Jv/O49h3jXNnC8Fg0jnjrRKr8M.', '/upload/fotos-perfil/65b9c416c4e54.jpg', 0, 'Pedro João Silva', 'Sou um entusiasta da tecnologia, apaixonado por programação e sempre em busca de desafios para me desenvolver profissionalmente.'),
(3, 'anajulia@email.com', 'Ana Júlia', '$2y$10$Joo6R03DGcTt9wbV3xw/8Ovl0CSHNa753FoVlAE/kir4lAIplumyq', '/upload/fotos-perfil/65b9c43f38d29.jpg', 0, 'Ana Júlia Oliveira', 'Com uma paixão pela fotografia, busco capturar momentos preciosos que contam histórias e celebram a beleza do mundo ao meu redor.'),
(4, 'lucasgabriel@email.com', 'Lucas Gabriel', '$2y$10$.lm6bcBOnK/KBq.3tAGwIusegDp9J00/lX3LcDPERk8rX0G375DU.', '/upload/fotos-perfil/65b9c416c6898.jpg', 0, 'Lucas Gabriel Costa', 'Sou um escritor em ascensão, mergulhando nas profundezas da literatura para inspirar e entreter meu público.'),
(5, 'laurasofia@email.com', 'Laura Sofia', '$2y$10$V8IFU02M08evXcKtG5EkQeGFPzhAvpxVDJ/h0vywNPiqcagaL2ace', '/upload/fotos-perfil/65b9c43f39635.jpg', 0, 'Laura Sofia Pereira', 'Como uma amante da natureza, encontro paz e inspiração nas caminhadas pela floresta, conectando-me com minha essência mais profunda.'),
(6, 'pedrohenrique@email.com', 'Pedro Henrique', '$2y$10$wCgj6Q60ZrZrq8XloqjUU.ziAey8BhzdYdtX4uq/YmFYpeamNixKO', '/upload/fotos-perfil/65b9c416c7866.jpg', 0, 'Pedro Henrique Almeida', 'Morador de uma pequena cidade do interior, encontro paz e conexão com a natureza sempre que posso escapar para as trilhas locais.'),
(7, 'giovannamaria@email.com', 'Giovanna Maria', '$2y$10$MRCBIdcGF5WaBpZoi5tsJOGLAHUgIfYJSpqF9Bziy2dWS6M5/xEc.', '/upload/fotos-perfil/65b9c43f39da0.jpg', 0, 'Giovanna Maria Santos', 'Através das letras das minhas músicas, compartilho minhas emoções mais profundas, buscando inspirar e tocar os corações daqueles que me ouvem.'),
(8, 'enzogabriel@email.com', 'Enzo Gabriel', '$2y$10$1qaxaY.H/mP1je6IFcxPHegTvAV5CIUU5tocr9pY/D7LLiKSeCrnS', '/upload/fotos-perfil/65b9c416c8197.jpg', 0, 'Enzo Gabriel Lima', 'Com uma carreira consolidada na área financeira, estou constantemente buscando maneiras de expandir meus horizontes e contribuir positivamente para minha comunidade.'),
(9, 'larabeatriz@email.com', 'Lara Beatriz', '$2y$10$TP2NZlWT4kGQ5i12d8oa8ujBo8wLqI5eomZbVIcsSeYd6ut2l.Gyu', '/upload/fotos-perfil/65b9c43f3a4e5.jpg', 0, 'Lara Beatriz Rocha', 'Como uma defensora dos direitos das mulheres, luto diariamente pela igualdade de gênero e pela amplificação das vozes femininas em todas as esferas da sociedade.'),
(10, 'matheushenrique@email.com', 'Matheus Henrique', '$2y$10$Wm8kJrVaaPnCPaiakYsft.BgYrBPsqTRoiG7kSjiNCNMmn0KVQmPG', '/upload/fotos-perfil/65b9c416c89ce.jpg', 0, 'Matheus Henrique Pereira', 'Apaixonado por esportes, desde o futebol até o surfe, encontro na atividade física não apenas um passatempo, mas uma fonte de energia e equilíbrio.'),
(11, 'mariaeduarda@email.com', 'Maria Eduarda', '$2y$10$NpxzPFfHFI7wYRwpytv2wuh89Wr4tJcN9p6jKo.tSKuBTgjJhVy9.', '/upload/fotos-perfil/65b9c43f3ac1c.jpg', 0, 'Maria Eduarda Oliveira', 'Sou uma mãe amorosa, guiada pelo instinto materno e pela vontade de criar um ambiente seguro e acolhedor para meus filhos crescerem felizes e saudáveis.'),
(12, 'gabrielfelipe@email.com', 'Gabriel Felipe', '$2y$10$jy8ETihGw2WH19HovmHp5.ty.LD8BCv00xBn0P1VNBao/Si2e1cRW', '/upload/fotos-perfil/65b9c416c913e.jpg', 0, 'Gabriel Felipe Silva', 'Com um olhar crítico sobre o mundo, busco constantemente formas de criar impacto positivo por meio do ativismo e da defesa dos direitos humanos.'),
(13, 'analaura@email.com', 'Ana Laura', '$2y$10$BsJZ/yN93aMRtcpECrq8peIrXh3tDngEu0gdb0c4UH1DHNHLRBE5a', '/upload/fotos-perfil/65b9c43f3b2d4.jpg', 0, 'Ana Laura Costa', 'Amante da literatura, encontro refúgio nas páginas dos meus livros favoritos, explorando mundos imaginários que enriquecem minha vida.'),
(14, 'pedrolucas@email.com', 'Pedro Lucas', '$2y$10$TtnHLC/0VJlnb5//zKx0OumAbSRCT.6jXdx3HTu/UvPz8XW/CIhjK', '/upload/fotos-perfil/65b9c416c98ad.jpg', 0, 'Pedro Lucas Pereira', 'Como um pai dedicado, encontro nas risadas e descobertas diárias com meus filhos uma fonte infinita de alegria e aprendizado.'),
(15, 'sofiahelena@email.com', 'Sofia Helena', '$2y$10$Cya3vvGYYi3HkXgbmDmtSuxPc/2er2g/pQIlSJ19bPBAdt8iaK/yG', '/upload/fotos-perfil/65b9c43f3b8f7.jpg', 0, 'Sofia Helena Alves', 'Como uma viajante ávida, coleciono memórias de aventuras ao redor do mundo, alimentando minha alma com novas experiências e culturas.'),
(16, 'daviluiz@email.com', 'Davi Luiz', '$2y$10$wmSn9wY/mfmJT0cksOdVT.UXwWCE4AtrixVM6RbIHucpj70WVEA7m', '/upload/fotos-perfil/65b9c416c9f95.jpg', 0, 'Davi Luiz Martins', 'Sou um viajante incansável, explorando culturas ao redor do mundo e colecionando memórias que moldam minha visão de mundo.'),
(17, 'laurabeatriz2@email.com', 'Laura Beatriz', '$2y$10$V9Zsn01fK2d.nrd6nZhJYuXzgiVQIRXaqz3gflNNyIWjIUu2UuqIm', '/upload/fotos-perfil/65b9c43f3c3f9.jpg', 0, 'Laura Beatriz Rocha', NULL),
(18, 'enzomiguel@email.com', 'Enzo Miguel', '$2y$10$Bv63xsQLmYj0RhXI8xZNcu9y8PfiDFqoYJpOwk4kHG1QGPSTOAHqG', '/upload/fotos-perfil/65b9c416ca638.jpg', 0, 'Enzo Miguel Santos', 'Amante das artes, encontro na música e na pintura uma expressão para minhas emoções mais profundas, alimentando minha alma criativa.'),
(19, 'mariajulia@email.com', 'Maria Júlia', '$2y$10$Tfatrdc.0ZnfULXIOwGQ6eOncCed/zdPRXQoWUGdkLPRAAvZpYMBO', '/upload/fotos-perfil/65b9c43f3cec3.jpg', 0, 'Maria Júlia Silva', 'Aos olhos da minha família, sou uma filha carinhosa, honrando os valores que me foram transmitidos e sempre buscando honrar meus ancestrais.'),
(20, 'lucasmateus@email.com', 'Lucas Mateus', '$2y$10$5Tju.hsOeqY9cJOuXUqV0.v09GjsKRtJLbxUqmz.gXNb4f3i26Pi6', '/upload/fotos-perfil/65b9c416cadb8.jpg', 0, 'Lucas Mateus Oliveira', 'Aos olhos da minha família, sou um filho amoroso, sempre pronto para apoiar e valorizar os laços que nos unem.'),
(21, 'anabeatriz@email.com', 'Ana Beatriz', '$2y$10$F0zlA3tS1Qo3/vEs3dJ6muJ.kAyCl1miR0cwjmZ98h9u0LcA79F0q', '/upload/fotos-perfil/65b9c43f3d59a.jpg', 0, 'Ana Beatriz Costa', 'Como uma empreendedora criativa, transformo minhas paixões em negócios, buscando inspirar outras mulheres a seguirem seus sonhos e conquistarem sua independência financeira.'),
(22, 'luizahelena@email.com', 'Luiza Helena', '$2y$10$W2ebsI48dE64aNmyz13veuVanUaWEv9aGWzGKnWS2B.m30MREeWxq', '/upload/fotos-perfil/65b9c43f3dc72.jpg', 0, 'Luiza Helena Almeida', 'Sou uma amiga leal, sempre presente nos momentos de alegria e de dor, compartilhando risos e lágrimas com aqueles que fazem parte da minha vida.'),
(23, 'rafaelamaria@email.com', 'Rafaela Maria', '$2y$10$GzfLYu6wWsbc21M9vJYELuc8KTbyenbThLGtWxowi2p3iFZin6AiO', '/upload/fotos-perfil/65b9c43f3e405.jpg', 0, 'Rafaela Maria Santos', 'Como uma cozinheira apaixonada, encontro alegria em criar pratos deliciosos que alimentam o corpo e a alma, compartilhando amor através da comida.'),
(24, 'felipegabriel@email.com', 'Felipe Gabriel', '$2y$10$pfUHI3cIpZBrD.wd0IHjGuyisHpe2pBhienkxcNPUksDGfnr9pZUa', '/upload/fotos-perfil/65b9c416cb409.jpg', 0, 'Felipe Gabriel Lima', 'Apaixonado por gastronomia, encontro na cozinha um espaço para experimentação e expressão, compartilhando sabores que contam histórias.'),
(25, 'carolinasofia@email.com', 'Carolina Sofia', '$2y$10$aB7APYw.OfTXo0FUUm5cne6eoIdMb419rplunPEEG98X3p/KERERi', '/upload/fotos-perfil/65b9c43f3eb4d.jpg', 0, 'Carolina Sofia Pereira', 'Aos olhos da minha comunidade, sou uma líder comprometida, trabalhando para promover mudanças positivas e inspirar outros a se envolverem ativamente na construção de um mundo melhor.'),
(26, 'brunohenrique@email.com', 'Bruno Henrique', '$2y$10$Kavli2eK/Lsi5oxPNUHNLO9aQLXbA61CwLn0DfYC.9Nemo7e65e2C', '/upload/fotos-perfil/65b9c416cbaa6.jpg', 0, 'Bruno Henrique Almeida', 'Como um mentor e líder, busco inspirar minha equipe a alcançar todo o seu potencial, promovendo um ambiente de colaboração e crescimento mútuo.'),
(27, 'marialeticia@email.com', 'Maria Letícia', '$2y$10$gRk0NQHKr.ei4qYqul9EaeJRclhrNWcEGcs2fAfI.gZmRGlUjphLO', '/upload/fotos-perfil/65b9c43f3f2e0.jpg', 0, 'Maria Letícia Oliveira', 'Sou uma estudante incansável, buscando constantemente expandir meus horizontes e adquirir novos conhecimentos que me ajudem a crescer pessoal e profissionalmente.'),
(28, 'victorjoao@email.com', 'Victor João', '$2y$10$kak70LOXLyg7MiiX0LmqSey3z6ujtNUeQQWT.iFNMtYy5uyhhH3/6', '/upload/fotos-perfil/65b9c416cc1fd.jpg', 0, 'Victor João Silva', 'Como um defensor da sustentabilidade, busco viver de forma consciente, minimizando meu impacto no meio ambiente e inspirando outros a fazerem o mesmo.'),
(29, 'mariavitoria@email.com', 'Maria Vitória', '$2y$10$1IJFTTNa.ZanE6pIWlNJMOSH2cz1lv0EHCb4VM2PZ3ep7hzWAJIsu', '/upload/fotos-perfil/65b9c43f3f971.jpg', 0, 'Maria Vitória Santos', 'Como uma parceira amorosa, estou comprometida em construir um relacionamento baseado no respeito mútuo, na comunicação aberta e no apoio incondicional.'),
(30, 'lucasjose@email.com', 'Lucas José', '$2y$10$.IxvJC3uQzXKjI/8mZwGXuq.nC.QsT2w.r7k4z3bJVCNKvBnu6xUi', '/upload/fotos-perfil/65b9c416cce6d.jpg', 0, 'Lucas José Martins', 'Sou um estudante ávido, sempre sedento por conhecimento e explorando novas áreas de interesse para expandir minha compreensão do mundo.'),
(32, 'admin@admin.com', 'admin', '$2y$10$38P8YLW.EkSPDoSaoHN/V.lxP.2QAMyBX4aVJeY2hUff3K9Mr4S4C', NULL, 1, 'admin', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `amizade`
--
ALTER TABLE `amizade`
  ADD PRIMARY KEY (`usuario_id1`,`usuario_id2`),
  ADD KEY `usuario_id2` (`usuario_id2`);

--
-- Índices de tabela `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarioId` (`usuarioId`);

--
-- Índices de tabela `post_reacao`
--
ALTER TABLE `post_reacao`
  ADD PRIMARY KEY (`post_id`,`reacao_id`,`usuario_id`),
  ADD KEY `FK_reacaoId` (`reacao_id`),
  ADD KEY `FK_usuarioId` (`usuario_id`);

--
-- Índices de tabela `reacao`
--
ALTER TABLE `reacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `reacao`
--
ALTER TABLE `reacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `amizade`
--
ALTER TABLE `amizade`
  ADD CONSTRAINT `amizade_ibfk_1` FOREIGN KEY (`usuario_id1`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `amizade_ibfk_2` FOREIGN KEY (`usuario_id2`) REFERENCES `usuarios` (`id`);

--
-- Restrições para tabelas `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`usuarioId`) REFERENCES `usuarios` (`id`);

--
-- Restrições para tabelas `post_reacao`
--
ALTER TABLE `post_reacao`
  ADD CONSTRAINT `FK_postId` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `FK_reacaoId` FOREIGN KEY (`reacao_id`) REFERENCES `reacao` (`id`),
  ADD CONSTRAINT `FK_usuarioId` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
