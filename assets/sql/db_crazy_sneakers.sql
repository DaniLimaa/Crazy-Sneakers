-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/04/2025 às 16:56
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_crazy_sneakers`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_foto_produto`
--

CREATE TABLE `tb_foto_produto` (
  `id` int(11) NOT NULL,
  `foto_1` varchar(255) NOT NULL,
  `foto_2` varchar(255) NOT NULL,
  `foto_3` varchar(255) NOT NULL,
  `foto_4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_foto_produto`
--

INSERT INTO `tb_foto_produto` (`id`, `foto_1`, `foto_2`, `foto_3`, `foto_4`) VALUES
(1, 'foto-produto-adidas-adi2000-chalk-white1.webp', 'foto-produto-adidas-adi2000-chalk-white2.webp', 'foto-produto-adidas-adi2000-chalk-white3.webp', 'foto-produto-adidas-adi2000-chalk-white4.webp'),
(2, 'foto-produto-adidas-adi2000-crystal-white-bright-royal1.webp', 'foto-produto-adidas-adi2000-crystal-white-bright-royal2.webp', 'foto-produto-adidas-adi2000-crystal-white-bright-royal3.webp', 'foto-produto-adidas-adi2000-crystal-white-bright-royal4.webp'),
(3, 'foto-produto-adidas-campus-00s-dark-green1.webp', 'foto-produto-adidas-campus-00s-dark-green2.webp', 'foto-produto-adidas-campus-00s-dark-green3.webp', 'foto-produto-adidas-campus-00s-dark-green4.webp'),
(4, 'foto-produto-adidas-campus-00s-grey-three1.webp', 'foto-produto-adidas-campus-00s-grey-three2.webp', 'foto-produto-adidas-campus-00s-grey-three3.webp', 'foto-produto-adidas-campus-00s-grey-three4.webp'),
(5, 'foto-produto-adidas-campus-00s-purple-white1.webp', 'foto-produto-adidas-campus-00s-purple-white2.webp', 'foto-produto-adidas-campus-00s-purple-white3.webp', ''),
(6, 'foto-produto-new-balence-9060-white1.webp', 'foto-produto-new-balence-9060-white2.webp', 'foto-produto-new-balence-9060-white3.webp', 'foto-produto-new-balence-9060-white4.webp'),
(7, 'foto-produto-nike-air-force-1-coconut-milk-playful-milk1.webp', 'foto-produto-nike-air-force-1-coconut-milk-playful-milk2.webp', 'foto-produto-nike-air-force-1-coconut-milk-playful-milk3.webp', 'foto-produto-nike-air-force-1-coconut-milk-playful-milk4.webp'),
(8, 'foto-produto-nike-air-jordan-1high-dark-mocha1.jpeg', 'foto-produto-nike-air-jordan-1high-dark-mocha2.jpeg', 'foto-produto-nike-air-jordan-1high-dark-mocha3.jpeg', 'foto-produto-nike-air-jordan-1high-dark-mocha4.jpeg'),
(9, 'foto-produto-nike-air-jordan-1high-fearless-unc-chicago1.webp', 'foto-produto-nike-air-jordan-1high-fearless-unc-chicago2.webp', 'foto-produto-nike-air-jordan-1high-fearless-unc-chicago3.webp', 'foto-produto-nike-air-jordan-1high-fearless-unc-chicago4.webp'),
(10, 'foto-produto-nike-air-jordan-1high-patent-bred1.webp', 'foto-produto-nike-air-jordan-1high-patent-bred2.webp', 'foto-produto-nike-air-jordan-1high-patent-bred3.webp', 'foto-produto-nike-air-jordan-1high-patent-bred4.webp'),
(11, 'foto-produto-nike-air-jordan1-low-diamond1.webp', 'foto-produto-nike-air-jordan1-low-diamond2.webp', 'foto-produto-nike-air-jordan1-low-diamond3.webp', 'foto-produto-nike-air-jordan1-low-diamond4.webp'),
(12, 'foto-produto-nike-air-jordan1-low-travis-scott-reverse-mocha1.webp', 'foto-produto-nike-air-jordan1-low-travis-scott-reverse-mocha2.webp', 'foto-produto-nike-air-jordan1-low-travis-scott-reverse-mocha3.webp', 'foto-produto-nike-air-jordan1-low-travis-scott-reverse-mocha4.webp'),
(13, 'foto-produto-nike-air-max-plus-black-purple-white1.webp', 'foto-produto-nike-air-max-plus-black-purple-white2.webp', 'foto-produto-nike-air-max-plus-black-purple-white3.webp', 'foto-produto-nike-air-max-plus-black-purple-white4.webp'),
(14, 'foto-produto-nike-air-max-plus-dusk1.webp', 'foto-produto-nike-air-max-plus-dusk2.webp', 'foto-produto-nike-air-max-plus-dusk3.webp', 'foto-produto-nike-air-max-plus-dusk4.webp'),
(15, 'foto-produto-nike-air-max-plus-photo-blue1.webp', 'foto-produto-nike-air-max-plus-photo-blue2.webp', 'foto-produto-nike-air-max-plus-photo-blue3.webp', ''),
(16, 'foto-produto-nike-air-max-plus-pimento1.webp', 'foto-produto-nike-air-max-plus-pimento2.webp', 'foto-produto-nike-air-max-plus-pimento3.webp', 'foto-produto-nike-air-max-plus-pimento4.webp'),
(17, 'foto-produto-nike-air-max-plus-voltage-purple1.jpg', 'foto-produto-nike-air-max-plus-voltage-purple2.jpg', 'foto-produto-nike-air-max-plus-voltage-purple3.jpg', 'foto-produto-nike-air-max-plus-voltage-purple4.jpg'),
(18, 'foto-produto-nike-dunk-low-club58-1.jpeg', 'foto-produto-nike-dunk-low-club58-2.jpeg', 'foto-produto-nike-dunk-low-club58-3.jpeg', 'foto-produto-nike-dunk-low-club58-4.jpeg'),
(19, 'foto-produto-nike-dunk-low-patrick-day1.webp', 'foto-produto-nike-dunk-low-patrick-day2.webp', 'foto-produto-nike-dunk-low-patrick-day3.webp', 'foto-produto-nike-dunk-low-patrick-day4.webp'),
(20, 'foto-produto-nike-dunk-low-turbo-green1.webp', 'foto-produto-nike-dunk-low-turbo-green2.webp', 'foto-produto-nike-dunk-low-turbo-green3.webp', 'foto-produto-nike-dunk-low-turbo-green4.webp'),
(21, 'foto-produto-puma-180-white1.jpg', 'foto-produto-puma-180-white2.jpg', 'foto-produto-puma-180-white3.jpg', ''),
(22, 'foto-produto-vans-knu-skool-black-true-white1.webp', 'foto-produto-vans-knu-skool-black-true-white2.webp', 'foto-produto-vans-knu-skool-black-true-white3.webp', 'foto-produto-vans-knu-skool-black-true-white4.webp'),
(23, 'foto-produto-vans-knu-skool-brown1.webp', 'foto-produto-vans-knu-skool-brown2.webp', 'foto-produto-vans-knu-skool-brown3.webp', 'foto-produto-vans-knu-skool-brown4.webp'),
(24, 'foto-produto-vans-knu-skool-disney-black1.webp', 'foto-produto-vans-knu-skool-disney-black2.webp', 'foto-produto-vans-knu-skool-disney-black3.webp', 'foto-produto-vans-knu-skool-disney-black4.webp');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_info_produto`
--

CREATE TABLE `tb_info_produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cor` varchar(100) NOT NULL,
  `preco` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `foto_exibicao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_info_produto`
--

INSERT INTO `tb_info_produto` (`id`, `nome`, `cor`, `preco`, `descricao`, `foto_exibicao`) VALUES
(1, 'New Balance 9060 White', 'Branco', 700, 'O New Balance 9060 combina estilo clássico com um visual contemporâneo para a versatilidade do dia a dia. O modelo garante máximo conforto e amortecimento por meio da entressola produzida com as tecnologias ABZORB e SBS.', 'foto-exibir-9060-white.webp'),
(2, 'adidas ADI2000 Chalk White', 'Branco', 700, 'Ative o seu lado rebelde com este tênis adi2000 inspirado na era ousada dos anos 2000. Carregando o DNA do skate da época e exibindo uma paleta versátil, este tênis adidas foi desenvolvido com foco no estilo. As Três Listras aparecem em um novo formato divertido, enquanto o cabedal de couro e o solado de borracha garantem o conforto. Produzido parcialmente com material reciclado proveniente de resíduos de produção, como sobras de corte e descartes domésticos pós-consumo, para evitar o impacto ambiental maior da produção de conteúdo virgem.', 'foto-exibir-adi2000-chack-white.webp'),
(3, 'adidas ADI2000 X Crystal White Bright Royal', 'Azul Claro', 700, 'Volte ao início da 2K, quando o estilo era ousado e vibrante e os tênis eram volumosos. Uma homenagem àquela época, este tênis adidas traz a energia do skate do início dos anos 2000 de volta à vida. A nostalgia está completa, com cabedal de suede, cadarços largos e o logo Trefoil na lateral. O solado de borracha é robusto e clássico.', 'foto-exibir-adi2000-crystal-white.webp'),
(4, 'Nike Air Force 1 Low SE Coconut Milk Playful Pink', 'Creme', 700, 'A Nike Sportswear expande sua coleção “Just Do It” com um toque novo no icônico Air Force 1 de Bruce Kilgore, feito sob medida para mulheres. Esta próxima interação exibe uma paleta de cores atraente de leite de coco, rosa brincalhão e alabastro. Feito em couro premium, o sapato garante conforto e respirabilidade com perfurações estratégicas, línguas de malha e forro interno de veludo macio.', 'foto-exibir-air-force-1-playful-pink.webp'),
(5, 'Air Jordan 1 High Dark Mocha', 'Marrom', 700, 'O Air Jordan 1 “Dark Mocha” desenvolve a associação da silhueta atemporal com tons de terra usáveis. A inspiração para o “Dark Mocha”, um lançamento do outono de 2020, é extraída de uma das colaborações de tênis mais populares de 2019 - a coleção Air Jordan 1 de Travis Scott. Embora ao contrário da versão do rapper no Jordan 1, esta iteração “Dark Mocha” apresenta sobreposições de couro preto liso no antepé, ilhós e biqueira. Couro branco aparece no painel central, colarinho e dedo perfurado. A marca Swoosh de couro preto clássico pontilha o painel central e um logotipo preto “Wings” é colocado na gola de camurça marrom. Detalhes adicionais de camurça marrom estão localizados no calcanhar. Uma língua de náilon branco, cadarços de algodão preto e “Nike Air” preto na lingueta finalizam mais um sapato de assinatura desejável na coleção Air Jordan de Michael Jordan.', 'foto-exibir-air-jordan-1-high-dark-mocha.jpeg'),
(6, 'Air Jordan 1 High Patent Bred', 'Preto', 700, 'O Air Jordan 1 Retro High OG Patent ‘Bred’ trata o icônico bloco de cores para uma reforma brilhante. Além da construção em couro envernizado, o DNA do design essencial permanece intacto. A parte superior têm painéis pretos básicos com toques contrastantes de Varsity Red na toebox, Swoosh, calcanhar overlay e gola aba. Uma etiqueta trançada da Nike fica na lingueta de náilon preto, enquanto o logotipo da Wings está estampado na gola lateral. O cano alto anda em uma robusta copa de borracha, aprimorada com uma unidade Air-sole encapsulada em poliuretano leve.', 'foto-exibir-air-jordan-1-high-patent-bred.webp'),
(7, 'Air Jordan 1 Low SE Diamond', 'Preto', 700, 'O Air Jordan 1 Low SE ‘Diamond’ é confeccionado em nobuk, com couro na biqueira. Sua paleta de cores off-white e preto trazem simplicidade e beleza para seu layout. O sneaker apresenta swooshes nas laterais, logotipo ‘Wings’ na parte do calcanhar, e na língua, o logo Jumpman aparece cercado por uma forma de diamante. Sua sola semitranslúcida completa o design. ', 'foto-exibir-air-jordan-1-low-diamond.webp'),
(8, 'Travis Scott x Air Jordan 1 Low Reverse Mocha', 'Branco', 700, 'Com referência ao Air Jordan 1 High Travis Scott Mocha, o Air Jordan 1 Low Travis Scott Reverse Mocha oferece uma paleta semelhante de Mocha e off-white, mas em um bloqueio de cores de estilo reverso. Sua parte superior é construída com uma base Mocha Durabuck, sobreposições de couro branco e Swooshes reversos exclusivos. Toques de vermelho no bordado do calcanhar com o logotipo Wings e na etiqueta da língua tecida dão um contraste nítido ao visual neutro do design. A partir daí, uma sola Air amarelada adiciona uma sensação vintage.', 'foto-exibir-air-jordan-1-low-reverse-mocha.webp'),
(9, 'Nike Air Max Plus Black Purple White', 'Branco', 700, 'Deixe sua atitude ter um toque especial com uma gaiola em forma de chama que adiciona calor às ruas, enquanto a malha arejada mantém você fresco. O Air Max Plus oferece uma experiência Nike Air ajustada que oferece estabilidade premium e amortecimento inacreditável.', 'foto-exibir-air-max-plus-blac-purple.webp'),
(10, 'Nike Air Max Plus Dusk', 'Roxo', 700, 'Deixe a sua atitude ter a vantagem. Com a experiência Tuned Air que oferece estabilidade premium, amortecimento inacreditável e linhas de design ondulado clássicas inspiradas na natureza, o Air Max Plus permite que você celebre seu estilo desafiador com conforto.', 'foto-exibir-air-max-plus-dusk.webp'),
(11, 'Nike Air Max Plus Photo Blue Black', 'Azul Claro', 700, 'Deixe sua atitude ter um toque especial com uma gaiola em forma de chama que adiciona calor às ruas, enquanto a malha arejada mantém você fresco. O Nike Air Max Plus oferece uma experiência Nike Air ajustada que oferece estabilidade premium e amortecimento inacreditável.', 'foto-exibir-air-max-plus-photo-blue.webp'),
(12, 'Nike Air Max Plus OG Pimento', 'Laranja', 700, 'O Nike Air Max Plus OG Pimento, lançado em 24/11/2018 na cor laranja, já está disponível no Droper. Compre com confiança e garantia de originalidade!', 'foto-exibir-air-max-plus-pimento.webp'),
(13, 'Nike Air Max Plus OG Voltage Purple', 'Roxo', 700, 'O couro sintético combina com malha e malha arejada para proporcionar durabilidade, suporte e respirabilidade. O arco de plástico na entressola adiciona estrutura. O plástico polido ao redor da biqueira acentua o design arrojado. A sola de borracha proporciona tração durável.', 'foto-exibir-air-max-plus-voltage-purple.jpg'),
(14, 'adidas Campus 00s Dark Green', 'Verde', 700, 'Estes sapatos adidas pegam os elementos icônicos dos anos 80 do Campus e dão a eles um toque de próxima geração inspirado no skate. Conhecida por sua durabilidade e pela forma como se molda ao seu pé ao longo do tempo, a camurça ajuda a proporcionar longevidade e estabilidade. O novo colorblocking colegial, gráficos e branding criam uma nova identidade para a próxima geração possuir e estilizar.', 'foto-exibir-campus-00-dark-green.webp'),
(15, 'adidas Campus 00s Grey Three', 'Cinza', 700, 'Embora eles tenham feito sua estreia em hardwood, os tênis adidas Campus foram rapidamente adotados em quase todos os outros lugares. Com este par, movemos a silhueta icônica em outra direção e adicionamos materiais, cores e proporções modernas. Eles são feitos com um cabedal de couro premium forrado com tecido felpudo macio, com tudo isso montado em uma entressola esbranquiçada - uma conexão clara com o legado do Campus.', 'foto-exibir-campus-00-grey-three.webp'),
(16, 'adidas Campus 00s Purple White', 'Roxo', 700, 'Tênis confortável que proporciona amortecimento, garante conforto desde o primeiro passo. Ideal seja para a esteira ou nas ruas, ele adiciona conforto a cada passo com amortecimento macio.', 'foto-exibir-campus-00-purple-white.webp'),
(17, 'Nike SB Dunk Low Club 58 Gulf', 'Azul Claro', 700, 'Em 2018 a divisão de skateboard da Nike preparou uma nova colorway do Blazer Mid batizado de “Club 58” inspirada nos lendários carros de corrida da Gulf Racing dos anos 60, onde tinham como principal característica as cores azul e laranja pintadas sobre os veículos. A empresa decidiu trazer novamente ideia para o mercado, mas agora na silhueta do SB Dunk Low que acaba de receber novas imagens. Em seu cabedal, camurça azul-claro cobre toda sua extensão, abrindo espaço apenas para o swooshe de couro e para a insígnia “58” bordada na lateral traseira nas cores branco e preto, para finalizar a famosa tonalidade de laranja é aplicada na sola.', 'foto-exibir-dunk-low-club-58.jpeg'),
(18, 'Nike SB Dunk Low Pro St. Patrick\'s Day', 'Verde', 700, 'Traga a sorte do Irlandês com este cobiçado modelo. O atraente Lucky Green (feito em camurça premium) e um clássico Swoosh em Metallic Gold permitem que você evoque imagens de prosperidade e boa sorte, enquanto o amortecimento Air sob os pés faz com que cada passo pareça que você está andando em uma estrada de arco-íris. O trevo bordado no calcanhar mantém o tema lúdico.', 'foto-exibir-dunk-low-patrick-day.webp'),
(19, 'April Skateboards x Nike SB Dunk Low Turbo Green', 'Azul Claro', 700, 'O skatista australiano vem expandindo sua empresa, a April Skateboards, há algum tempo. Ao longo do curto espaço de tempo, ele acumulou algumas colaborações com outras marcas conceituadas no mundo do skate, como Diamond Supply Co., Spitfire Wheels e também Nike SB; a marca adicionará sua primeira série de calçados colaborativos com a Nike SB neste verão. Com lançamento previsto para toda a família, espera-se que o Nike SB chegue como costuma acontecer em termos de formato e ferramentas e opta por um novo design excelente para adicionar à sua coleção. Ostentando uma parte superior em malha branca, o verde turbo é usado no sistema de sobreposição de camurça, enquanto a marca April é apresentada na parte inferior dos tornozelos. O par também contará com um gráfico de flores na sola de borracha translúcida, que é facilmente o destaque dessas imagens iniciais.', 'foto-exibir-dunk-low-turbo-green.webp'),
(20, 'Vans Knu Skool Black True White', 'Preto', 700, 'O Knu Skool é uma interpretação moderna de um estilo clássico dos anos 90, definido por sua língua inchada e Sidestripe™ moldado em 3D, e amarrado com cadarços grandes e grossos. Com seu perfil marcante e detalhes de estilo dramáticos, o Knu Skool reproduz o original Old Skool™ enquanto mistura um ícone do passado com as tendências de hoje.', 'foto-exibir-knu-skool-black-true-white.webp'),
(21, 'Vans Knu Skool Brown', 'Marrom', 700, 'Os Knu Skool são uma interpretação moderna de um estilo clássico dos anos 90, definido pela sua pala volumosa e risca lateral moldada em 3D, e com atacadores grandes e grossos. Com o seu perfil impactante e detalhes de estilo dramáticos, os Knu Skool baseiam-se nos Old Skool originais, misturando um ícone do passado com as tendências atuais.', 'foto-exibir-knu-skool-brown.webp'),
(22, 'Disney x Vans Knu Skool Black', 'Marrom', 700, 'Por 100 anos, a paixão da Disney tem sido contar histórias. De uma geração para outra, as histórias da Disney inspiraram criadores, influenciaram a cultura pop e nos uniram. Este ano, a Vans tem o orgulho de celebrar um século de histórias e personagens inesquecíveis da Disney que conquistaram os corações do público em todo o mundo com esta coleção feita para toda a família. Entrando no mundo da Disney através de lentes Off The Wall, o Disney x Vans Knu Skool homenageia O Rei Leão com uma reviravolta ao canalizar o intrigante tio Scar de Simba. Com seu rosto estampado na sola e silhuetas de hienas bordadas nos calcanhares, este sapato fofo dos anos 90 permite que você celebre a magia atemporal da Disney todos os dias.', 'foto-exibir-knu-skool-disney.webp'),
(23, 'Puma-180 White', 'Branco', 750, 'Estamos aproveitando a estética do skate dos anos 90 e renovando-a para a geração atual de skatistas com o PUMA-180. Este tênis apresenta um design volumoso, acolchoamento grosso e cabedal técnico lo-fi.', 'foto-exibir-puma-180-white.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_info_usuario`
--

CREATE TABLE `tb_info_usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` int(11) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `n_casa` int(5) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `ano_nascimento` int(4) NOT NULL,
  `status` varchar(50) DEFAULT 'COMUM'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_info_usuario`
--

INSERT INTO `tb_info_usuario` (`id`, `nome`, `email`, `telefone`, `rua`, `bairro`, `n_casa`, `cidade`, `ano_nascimento`, `status`) VALUES
(1, 'asdafda', 'aadfaf@asdf', 2147483647, 'adsfasdfa', 'asdfasdf', 23131, 'asdfasdfr', 2000, 'COMUM'),
(2, 'roberot', 'robert@gmail.com', 2147483647, 'calouros', 'beco diagonal', 777, 'paris', 2010, 'COMUM'),
(3, 'robert', 'robert@gmail.com', 2147483647, 'londres', 'casa do barai', 12323, 'brasil', 1999, 'COMUM'),
(4, 'mark', 'invencivel@gmail', 2147483647, 'sol', 'lua', 7568, 'washinton', 2000, 'COMUM'),
(5, 'admin', 'admin@gmail.com', 123456987, 'ADMIN', 'admin', 106, 'admin', 2008, 'ADMIN'),
(6, 'little', 'cavanha@gmail.com', 2147483647, 'em baixo da ponte', 'centro', 0, 'americana', 2004, 'COMUM'),
(7, 'gustavo', 'gustavo@gmail.com', 2147483647, 'grecia', 'atras do pague menos', 999, 'americana', 2008, 'COMUM');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_marcas`
--

CREATE TABLE `tb_marcas` (
  `id` int(11) NOT NULL,
  `marca` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_marcas`
--

INSERT INTO `tb_marcas` (`id`, `marca`) VALUES
(1, 'Nike'),
(2, 'Adidas'),
(3, 'Vans'),
(4, 'New balance'),
(5, 'Puma');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `id` int(11) NOT NULL,
  `info_produto_id` int(11) NOT NULL,
  `marcas_id` int(11) NOT NULL,
  `silhueta_id` int(11) NOT NULL,
  `foto_produto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`id`, `info_produto_id`, `marcas_id`, `silhueta_id`, `foto_produto_id`) VALUES
(1, 1, 4, 8, 6),
(2, 2, 2, 6, 1),
(3, 3, 2, 6, 2),
(4, 4, 1, 3, 7),
(5, 5, 1, 2, 8),
(6, 6, 1, 2, 10),
(7, 7, 1, 10, 11),
(8, 8, 1, 10, 12),
(9, 9, 1, 1, 13),
(10, 10, 1, 1, 14),
(11, 11, 1, 1, 15),
(12, 12, 1, 1, 16),
(13, 13, 1, 1, 17),
(14, 14, 2, 5, 3),
(15, 15, 2, 5, 4),
(16, 16, 2, 5, 5),
(17, 17, 1, 4, 18),
(18, 18, 1, 4, 19),
(19, 19, 1, 4, 20),
(20, 20, 3, 7, 22),
(21, 21, 3, 7, 23),
(22, 22, 3, 7, 24),
(23, 23, 5, 9, 21);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_silhueta`
--

CREATE TABLE `tb_silhueta` (
  `id` int(11) NOT NULL,
  `silhueta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_silhueta`
--

INSERT INTO `tb_silhueta` (`id`, `silhueta`) VALUES
(1, 'Air Max Plus'),
(2, 'Air Jordan 1 High'),
(3, 'Air Force 1'),
(4, 'Dunk Low'),
(5, 'Campus 00s'),
(6, 'Adi2000'),
(7, 'Knu Skool'),
(8, '9060'),
(9, '180'),
(10, 'Air Jordan 1 Low');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_tamanho`
--

CREATE TABLE `tb_tamanho` (
  `id` int(11) NOT NULL,
  `tamanho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_tamanho`
--

INSERT INTO `tb_tamanho` (`id`, `tamanho`) VALUES
(1, 42);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_tamanho_preco`
--

CREATE TABLE `tb_tamanho_preco` (
  `id` int(11) NOT NULL,
  `tamanho_id` int(11) NOT NULL,
  `preco_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_tamanho_preco`
--

INSERT INTO `tb_tamanho_preco` (`id`, `tamanho_id`, `preco_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `id_info_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `usuario`, `senha`, `id_info_usuario`) VALUES
(3, 'jorge', '789456', 3),
(4, 'invencivel', 'eve123', 4),
(5, 'admin', 'admin', 5),
(6, 'cavanha', '123321', 6),
(7, 'sobrera', 'gu123456', 7);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_foto_produto`
--
ALTER TABLE `tb_foto_produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_info_produto`
--
ALTER TABLE `tb_info_produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_info_usuario`
--
ALTER TABLE `tb_info_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_marcas`
--
ALTER TABLE `tb_marcas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_silhueta`
--
ALTER TABLE `tb_silhueta`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_tamanho`
--
ALTER TABLE `tb_tamanho`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_tamanho_preco`
--
ALTER TABLE `tb_tamanho_preco`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_foto_produto`
--
ALTER TABLE `tb_foto_produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `tb_info_produto`
--
ALTER TABLE `tb_info_produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `tb_info_usuario`
--
ALTER TABLE `tb_info_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tb_marcas`
--
ALTER TABLE `tb_marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `tb_silhueta`
--
ALTER TABLE `tb_silhueta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tb_tamanho`
--
ALTER TABLE `tb_tamanho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_tamanho_preco`
--
ALTER TABLE `tb_tamanho_preco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
