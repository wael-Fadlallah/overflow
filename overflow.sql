-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 01, 2018 at 12:37 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `overflow`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('ipm0leu2dfjqtqt5cklq5umjlmfj0ufo', '::1', 1527078248, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373037383032393b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('ffh8d9439sl8mndf4vl7sjg0jbk9c7oj', '::1', 1527078739, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373037383434333b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('5ce62c4q19h7ko70cffg36geucsmptdj', '::1', 1527078879, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373037383836353b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('r8eph6uarachadjkbgpoudmuqc083lko', '::1', 1527079641, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373037393331353b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('ff2u4ogq6rle1e4h616cka8j65sfuuur', '::1', 1527079924, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373037393634383b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('999kkof6ujvfuv8ebbdh5c53dq63b270', '::1', 1527080241, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373037393935383b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('52g62m4t50fa7idgcrupgaflqt2s2u49', '::1', 1527080585, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373038303239353b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('jlsscf2re13pee0ogfjjfbo1l5q8oqlv', '::1', 1527081041, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373038303834343b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('jdjoqt5rugsjpn3mqvtsqjb7k14k8nfp', '::1', 1527081402, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373038313136303b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('d2oca4moce6rv5gqdd7fuugbi6ugt6a2', '::1', 1527081498, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373038313438303b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('1luvv25jiib7pmj5opg9jdqfabont302', '::1', 1527083777, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373038333736383b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('03k3g539oj5p4q159n89oitb9p2dbuhs', '::1', 1527084416, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373038343234353b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('u6358rqtqt1h4ic06pn05gvvj6ae1boe', '::1', 1527084669, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373038343539353b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('ploos2ssftdsj37kluq1e7ov5qs2oo42', '::1', 1527085263, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373038343937393b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('3ugh68kjhls0i30lfcct0rkclptvr124', '::1', 1527085337, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373038353239313b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('s1u4fgoj95evkp0tinutfmijo75j5bc2', '::1', 1527085866, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373038353738383b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('l9o0eg6ek3p0r1dq1001m5es728uor8c', '::1', 1527088931, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373038383931303b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('3djd2e81sgrt1mijfg7r8e1b3g0443ib', '::1', 1527097124, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373039363936353b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('g6shfc0qj1lt4ma8jjanak84kisunaqa', '::1', 1527097553, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373039373331343b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('k29m0l4o2liu6upr06be1s1oulnij1el', '::1', 1527097671, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373039373636353b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('r1p5hs05doeibs4ikd767r2l9s15u1n9', '::1', 1527099490, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373039393336313b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('vegi93skfeuhu3jcqbkqmpkql9hn5rcv', '::1', 1527099979, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373039393730313b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('90mjte1fi2idsru3nmga6t4h73p78bfq', '::1', 1527100216, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373130303033343b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('qebfptgic7k2chu3oponjc8nkrnkd2ls', '::1', 1527101667, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373130313337393b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('fp0mom4pdd2kveqo9qsilf6qhrju530u', '::1', 1527101920, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373130313837343b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('un9lo37lniqef6f58342o5niuo1jk1l8', '::1', 1527102374, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373130323333333b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('8hg2ej6p8rmon9eotkmhtm0ll0qurcr4', '::1', 1527152034, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373135313835303b69647c733a313a2232223b6e616d657c733a31333a22457a696f2d61756469746f7265223b7069637c733a34353a22636f736d69632d637562652d77616c6c70617065722d666f722d31333636783736382d36372d3936392e6a7067223b),
('h3sno3qbd71nlsbdp37rrp3dkfghgchf', '::1', 1527152495, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373135323232303b69647c733a313a2232223b6e616d657c733a31333a22457a696f2d61756469746f7265223b7069637c733a34353a22636f736d69632d637562652d77616c6c70617065722d666f722d31333636783736382d36372d3936392e6a7067223b),
('9mgqkmf3khkromrfl4eeoo2rmon5s29f', '::1', 1527154943, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373135343934333b69647c733a313a2232223b6e616d657c733a31333a22457a696f2d61756469746f7265223b7069637c733a34353a22636f736d69632d637562652d77616c6c70617065722d666f722d31333636783736382d36372d3936392e6a7067223b),
('8mnkeul865egqpm860fb8d2h91otbdjd', '::1', 1527162119, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373136313938303b69647c733a313a2232223b6e616d657c733a31333a22457a696f2d61756469746f7265223b7069637c733a34353a22636f736d69632d637562652d77616c6c70617065722d666f722d31333636783736382d36372d3936392e6a7067223b),
('fdi7onj5kc5h5up1bbtdkk23hlhb9igc', '::1', 1527162354, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373136323335323b69647c733a313a2232223b6e616d657c733a31333a22457a696f2d61756469746f7265223b7069637c733a34353a22636f736d69632d637562652d77616c6c70617065722d666f722d31333636783736382d36372d3936392e6a7067223b),
('73r0qb50phknllpu6q4pp41n1gfprmnd', '::1', 1527163326, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373136333131383b69647c733a313a2232223b6e616d657c733a31333a22457a696f2d61756469746f7265223b7069637c733a34353a22636f736d69632d637562652d77616c6c70617065722d666f722d31333636783736382d36372d3936392e6a7067223b),
('9l9rjakovldfvk485rf7rkgcd1bqme6o', '::1', 1527163839, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373136333533373b69647c733a313a2232223b6e616d657c733a31333a22457a696f2d61756469746f7265223b7069637c733a34353a22636f736d69632d637562652d77616c6c70617065722d666f722d31333636783736382d36372d3936392e6a7067223b),
('jiqfrhr3s5e0s2sr913c447imo8j644a', '::1', 1527163954, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373136333834343b69647c733a313a2232223b6e616d657c733a31333a22457a696f2d61756469746f7265223b7069637c733a34353a22636f736d69632d637562652d77616c6c70617065722d666f722d31333636783736382d36372d3936392e6a7067223b),
('gdqogl54fr2472eg34tjo3443kak3q96', '::1', 1527184287, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373138333939363b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('rndm8ksg9ac4ciaj8tbjm15niiifphg1', '::1', 1527184550, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373138343335383b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('mqcr80pockj76hc4jf1qv7k4qvpb2p7b', '::1', 1527184877, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373138343638313b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('8tusngtcgimgr2ngs28eilq2v6chth8e', '::1', 1527185204, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373138353131363b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('q7b15rhplm05q9gelfr8qcbu08e3elo2', '::1', 1527185702, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373138353432383b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('sltp5q1qi0p0ojpn7bp7fdv3d9phcvbm', '::1', 1527186465, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373138363435303b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('0oc1uvdbuagvpgip9j1d78eb55rlatcn', '::1', 1527187120, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373138363832373b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('cibsmcf2eun1j14nqkv2d3fapfrclv14', '::1', 1527187130, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373138373133303b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('nn4u693elh22il5i306k1meipvhqo95j', '::1', 1527187607, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373138373433323b69647c693a333b6e616d657c733a353a2261646d696e223b7069637c733a31313a2270726f66696c652e706e67223b),
('ha2uoik09f8d1p4degfq67ravld7irm7', '::1', 1527187894, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373138373834303b69647c693a333b6e616d657c733a353a2261646d696e223b7069637c733a31313a2270726f66696c652e706e67223b),
('a44npoupqgdbmpka6pk1nbl29830gn79', '::1', 1527188667, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373138383431313b6e616d657c733a353a2261646d696e223b69647c693a343b),
('dqo736n3cib49ql61s4fd0j6egv418u3', '::1', 1527189737, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373138393434343b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('2okgo5oet5bi5mttik94slnslkgd6t6d', '::1', 1527189972, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373138393736363b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('v9tv62bm6spa9jt15c7bq83rbt1vf9dr', '::1', 1527190197, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373139303136303b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('47sjsqiuauhmmhod8t5ns06a4ccs6k58', '::1', 1527192603, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373139323331353b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('bjhvv62ho32d24emic8h71d5v4a35ek3', '::1', 1527192922, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373139323633323b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('39omq74qheop6ruo38q0tgfom6pfeol7', '::1', 1527193207, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373139323934353b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('qltrsdvi6nulufrt6jovlpcb69clkjre', '::1', 1527193525, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373139333235353b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('b8hoi8mlmtuc3p69aba5skg5or2k1es4', '::1', 1527193713, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373139333535383b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('muvco1g45rpst5eg1h950h25io45ivp4', '::1', 1527194317, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373139343033383b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('tvi7ogdjd6nkinrj888ibimp3tudhmi8', '::1', 1527358327, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373335383236303b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('8mbdf7sseaeifhaeu1h0dsba96tgj5gv', '::1', 1527358869, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373335383737303b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('fv9llr6vsa7ts9c12k1vkhl6c79la5en', '::1', 1527421091, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373432313038373b),
('3qbh35nus87v5l5j8r9n7hiq51de4he4', '::1', 1527421619, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373432313530323b),
('9g2mqdvu2mdb263ogfuacv0hkg4m6nfr', '::1', 1527422497, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373432323230363b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('mstvji2i81p8ihvfgvaduu2ur1u1pasi', '::1', 1527422790, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373432323632333b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('0q34hqr8qk4mkvc3qgrlmbgo66fbfbot', '::1', 1527423269, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373432323937383b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('5lbj4i6je5glr6hki71m4qul67j65se1', '::1', 1527423597, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373432333331343b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('6is0dr8fkbsaptrq83erjpk9rjt9tlli', '::1', 1527424103, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373432333932303b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('adfvug7afqcuiq4rgms8agba13opaqpm', '::1', 1527424513, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373432343234313b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('uoibl0bs9q21t0jl59gfegembo5d2uac', '::1', 1527424812, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373432343733363b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('38oovlfh37t0jkaskvue5hso3e8l78bt', '::1', 1527425168, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373432353135393b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('m4p7nqs727tdprg5u7vuntb63jkb9ftq', '::1', 1527426153, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373432353836303b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('m1pjke8ef7nam9q17girsp64uchrgvhh', '::1', 1527426461, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373432363136353b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('s88n80dmcj3tm9s83q07pf90vka3omos', '::1', 1527427727, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373432373732373b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('ro2nsjek8n1kesegigo1vgtlp3qm6a5h', '::1', 1527448767, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373434383439383b),
('pgh55nm08e1mq6h8ctvfnk2ailv3fln5', '::1', 1527605149, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373630353134323b),
('m68n6m2gnvel23ufsa9gvdqonnm3b0re', '::1', 1527605645, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373630353439393b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('geqt67to1pjgf31nsb0ojpsdh5vm9gur', '::1', 1527606098, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373630353835323b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('qbnddfpv28ue3sjmude51i69ll3i7ire', '::1', 1527606498, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373630363238363b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('h53hdb9qbc2ssrm3qt4r637mtg3rsj3a', '::1', 1527606736, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373630363630363b69647c733a313a2231223b6e616d657c733a343a227761656c223b7069637c733a31313a2270726f66696c652e706e67223b),
('kjmlvr27mq3jb1rtrl113pd4c6641jdi', '::1', 1527607278, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373630373031313b6e616d657c733a333a226e6577223b69647c693a353b),
('djm8rmasn8ol44e76tnnut41mo3js247', '::1', 1527607486, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373630373336333b6e616d657c733a333a226e6577223b69647c693a353b),
('qjjub124757kgp4bsl03vpdd9trv82gi', '::1', 1527608297, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373630383031363b6e616d657c733a333a226e6577223b69647c693a353b),
('fdtkagprvr442q7m2opu45ng7mk80qat', '::1', 1527608620, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373630383632303b6e616d657c733a333a226e6577223b69647c693a353b),
('f3vpgr6551r75oeo22tfbudqot4dnkuj', '::1', 1527609218, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373630393030353b6e616d657c733a333a226e6577223b69647c693a353b),
('q3hfpi7rgb07cuechtfqatqub5j76pra', '::1', 1527609608, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373630393334373b6e616d657c733a333a226e6577223b69647c693a353b),
('hvq75lt8or02biuqs3knjeada4fu1fvd', '::1', 1527609947, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373630393730323b6e616d657c733a333a226e6577223b69647c693a353b),
('eb2v17umug0enpckejhr5sk11s8o06lj', '::1', 1527610302, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373631303031363b6e616d657c733a333a226e6577223b69647c693a353b),
('ovi44qj17en6qn39ngjpkbpkldfjju4f', '::1', 1527610450, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373631303334363b6e616d657c733a333a226e6577223b69647c693a353b),
('drq0tndeaoet5a3g5hun3pdgdn9aiq1d', '::1', 1527623858, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373632333231303b6e616d657c733a333a226e6577223b69647c693a363b),
('60smqk6ik2io39vjdug7do4cv19gqoph', '::1', 1527679552, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373637393533323b6e616d657c733a333a226e6577223b69647c693a373b),
('jmcffltjsvu4h28hunr9dvp81dnu17sa', '::1', 1527680255, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373638303032333b6e616d657c733a333a226e6577223b69647c693a373b),
('196kjjdoanfi4l9b6pp5ras4miq2h0bg', '::1', 1527680591, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373638303333383b6e616d657c733a333a226e6577223b69647c693a373b),
('5am55e78q9pffufoug3p4jqlmj3cps6j', '::1', 1527680803, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373638303733303b6e616d657c733a333a226e6577223b69647c693a373b),
('9drnim8qelg45lggtvg98hkih6lkjgkg', '::1', 1527681286, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373638313034323b6e616d657c733a333a226e6577223b69647c693a373b),
('c95uj913ejj8kdgafe5115n8cnhrf8h7', '::1', 1527681390, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373638313338373b6e616d657c733a333a226e6577223b69647c693a373b);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `votes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `question_id`, `comment`, `date`, `votes`) VALUES
(1, 1, 1, '<p>السقالب</p>', '2018-05-21 10:40:30', 1),
(2, 2, 1, '<p>Hello this user two</p>', '2018-05-24 08:51:30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `post` text NOT NULL,
  `tags` text NOT NULL,
  `owner` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `votes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `post`, `tags`, `owner`, `date`, `votes`) VALUES
(1, 'heyy', '<p>sgsrgfdsfsdvdsvsdvds</p>', 'HTML,JavaScript,CCNA', 1, '2018-05-21 10:27:46', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `summary`) VALUES
(1, 'JavaScript', 'لغة برمجة عالية المستوى تستخدم أساسا في متصفحات الويب لإنشاء صفحات أكثر تفاعلية. يتم تطويرها حاليا من طرف شركةنتسكيب وشركة موزيلا, كانت لغة الجافاسكريبت موجهة للمبرمجين الهوات والغير محترفين، إلا أنه تزايد الاهتمام بها وجذبت اهتمام مبرمجين محترفين بعد إضافتها لتقنيات جديدة كإنتشار تقنية الاجاكس التي أدت إلى سرعة في التفاعل بين الخادم والعميل.'),
(2, 'C#', 'أحد لغات بيئة الدوت نت لتطوير البرامج من انتاج شركة ميكروسوفت , تتميز سي شارب بأنها أحد لغات البرمجة الشيئيه وتجمع صفات السي والبيزك المرئي حيث انها تستخدم القواعد الخاصه بالسي وسرعة التطوير كما في البيزك المرئي, لغة السي شارب موجهه الى مبرمجي الفيجول سي ومبرمجي السي على انها امتداد لهذه اللغات.'),
(3, 'C++', 'هي لغة برمجة كائنية، متعددة أنماط البرمجة، مصرفة، سكونية الأنماط. وتضم العديد من ميزات لغات البرمجة عالية المستوى ومنخفضة المستوى, تعتبر سي++ إحدى اللغات الأكثر شيوعاً وقد استخدمت على نطاق واسع في بناء أنظمة التشغيل والتعامل مع البنية الصلبة للحاسوب ابتداءً من الأنظمة البرمجية وبرامج المستخدم، مروراً بمشغلات الأجهزة والأنظمة المضمنة وانتهاءً بالمخدمات عالية الأداء وبرامج التسلية نظراً لقدرة تصريفها إلى كود لغة تجميع شديد الفعالية.'),
(4, 'PHP', 'هي لغة برمجة نصية صممت أساسا من أجل استخدامها لتطوير وبرمجة تطبيقات الويب. كما يمكن استخدامها لإنتاج برامج قائمة بذاتها وليس لها علاقة بالويب فقط, بي إتش بي لغة مفتوحة المصدر ويطورها فريق من المتطوعين تحت رخصة بي إتش بي، تدعم البرمجة كائنية التوجه وتركيبها النحوي يشبه كثيرا التركيب النحوي للغة السي هذا بالإضافة إلى أنها تعمل على أنظمة تشغيل متعددة مثل لينكس وويندوز.'),
(5, 'HTML', 'هي لغة ترميز تستخدم في إنشاء وتصميم صفحات ومواقع الويب، وتعتبر هذه اللّغة من أقدم اللّغات وأوسعها استخداما في تصميم صفحات الويب. هي هيكل صفحة الويب وتعطي متصفّح الإنترنت وصفا لكيفيّة عرضه للمحتوياتها، فهي تعلمه بأنّ هذا عنوان رئيسي وتلك فقرة وغير ذلك الكثير.'),
(6, 'HTML5', 'تم تقديم عدد من العناصر الجديدة والتي تسهل من فكرة تكوين الصفحات، حسب ما نقوم به يدوياً في XHTML 1.0 بالإضافة إلى تسهيل الأمور على محركات البحث في قراءة الصفحات ومعرفة ما هي أجزاء الصفحة الفعلية (الجزء العلوي (Header)، القائمة (Navigation)، الجزء الرئيسي (Main)، المحتوى (Sections) والجزء السفلي (Footer).كما توفر عدد من بيئات العمل المختلفة لتكوين الرسومات والفيديو والعديد من المميزات التي تسهل الكثير مما يتم القيام به و حسّن الإصدار الجديد أداء اللغة، حيث ارتفعت سرعة المُعالجة إلى ثلاث مرّات تقريبًا، كما انخفض استهلاك الذواكر بشكل كبير، حسب التجارب التي أجرتها مُنظمة زيند Zend التي ساهمت في الإصدار الجديد.'),
(7, 'PHP7', 'أُجريت اختبارات PHP 7 على بعض منصّات إدارة المحتوى مثل وردبريس ودروبال، حيث ارتفع عدد الطلبات التي يُمكن مُعالجتها في الثانية الواحدة، فضلًا عن سرعة في المُعالجة أسرع بـ 72% عند استخدام منصّة دوربال 8 مع بي اتش بي 7 ,وأضافت اللغة دعمًا لبعض المفاهيم البرمجية الشائعة الاستخدام في لغات ثانية مثل تحديد نوع البيانات“Return Type” التي تُعيدها الدوال البرمجية “Functions” ، بالإضافة إلى بعض المُعاملات الجديدة لتسهيل العمليات المنطقية.'),
(8, 'jQuery', 'هي مكتبة خاصة بالجافا سكريبت تقوم باختصار العديد من النصوص البرمجية المكررة والمهام المعروفة وذلك لتسهيل عملية البرمجة, تتميز مكتبة الـ جي كويري بانها مكتوبة فقط بلغة الـ JavaScript وحجمها صغير جدا و أنها مفتوحة المصدر و قادرة علي العمل مع المكتبات الأخري وعمل التأثيرات الحركية علي مواقع الويب و تقوم بتوفير كم هائل من الإضافات التي تعمل بالإعتماد عليها. '),
(9, 'CCNA', 'هي شهادة من سيسكو تمنح لذوى المعرفة بالشبكات فهى تثبت أن حاملها متمكن من تركيب واعداد وتشغيل وصيانة الراوتر والسويتشات متوسطة الحجم وأيضا تركيب وتجهيز التوصيلات في أماكن بعيدة أو في شبكة واسعة النطاق\"wan\" , ولكى تصبح خبير شبكات معتمد من سيسكو يجب عليك النجاح في امتحان \"640-802\" أو النجاح في كلا من امتحان \" ICND1 (100-101)\" وامتحان \"ICND2 (200-101)\". كما أن النجاح في امتحان \"ICND1\" يمنحك شهادة \"CCENT\" (فنى الشبكات الداخلية المعتمد من سيسكو)علما بأن الدرجات المطلوبة للنجاح في هذه الامتحانات تحدد باستخدام الإحصاء التحليلى كما أنها معرضة للتغير. عند الانتهاء من الامتحان، يستلم الممتحنين تقرير بالنتيجة مع درجة الممتحن والدرجة المطلوبة للنجاح.ولا تنشر سيسكو الدرجات المطلوبة للنجاح في هذه الامتحانات لأن اسئلة الامتحانات والدرجات المطلوبة للنجاح معرضة للتغير في أى وقت وبدون اشعار.'),
(10, 'Python', 'من لغات المستوى العالي، تتميز ببساطة كتابتها وقراءتها, سهلة التعلم و تستخدم أسلوب البرمجة الكائنية, مفتوحة المصدر وقابلة للتطوير. تعتبر لغة بايثون لغة تفسيرية, متعددة الأغراض وتستخدم بشكل واسع في العديد من المجالات كبناء البرامج المستقلة باستخدام الواجهات الرسومية المعروفة وفي عمل برامج الويب، بالإضافة إلى استخدامها كلغة برمجة نصية للتحكم في أداء بعض من أشهر البرامج المعروفة أو في بناء برامج ملحقة لها. وبشكل عام يمكن استخدام بايثون لبرمجة البرامج البسيطة للمبتدئين، ولإنجاز المشاريع الضخمة كأي لغة برمجية أخرى في نفس الوقت. غالباً ما يُنصح المبتدئين في مجال البرمجة بتعلم هذه اللغة لأنها من بين أسرع اللغات البرمجية تعلماً.'),
(11, 'CSS', 'هي لغة تنسيق لصفحات الويب تهتم بشكل وتصميم المواقع، صممت خصيصا لعزل التنسيق (الألوان - الخطوط - الأزرار....) عن محتوى الصفحات المكتوب (بلغة مثلا إتش تي إم إل) وينطبق ذلك على الألوان والخطوط والصور والخلفيات التي تستخدم في الصفحات، بمرونة وسهولة تامة. هذه التقنية تعنى بالمظهر الكلي لصفحات مواقع الويب من ألوان و صور و غيره ويمكن اضافته للصفحة بعدة طرق أفضلها التضمين الخارجي بكتابة كود السي إس إس في ملف منفصل. وقد تم تطوريها لتصل حاليا إلى سي إس إس 3. '),
(12, 'java', 'جافا عبارة عن لغة برمجة كينونية مشتقة من لغة سي بلس بلس، و لكنها تمتاز عن اللغات الأخرى بأنها تمكنك من كتابة برنامج مرة واحدة فقط و من ثم تستطيع أن تشغل البرنامج على أي جهاز كمبيوتر آخر، حتى إذا كان من نوع آخر أو يعمل على نظام تشغيل مختلف، بدون الحاجة لإعادة تركيب البرنامج. الهدف الأساسي لنشأة جافا هو إيجاد لغة مشابهة للغة سي+ + من حيث التركيب النحوي ، كائنية التوجه، و مصممة للعمل علي اّلة إفتراضية بحيث لا تحتاج إلي الترجمة من جديد عند استخدام برامجها على منصة تشغيل أو نظام تشغيل جديد.'),
(13, 'Routing and Switching', 'روتوكولات توجيه و نقل البيانات بين الراوترات كالRIP,OSPF,EIGRP و غيرها و كيفية عملها بالاضافة الي تقنيات الاسويتشات كال Vlans و Spanning tree prtocols '),
(14, 'Networking', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(500) NOT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `age` varchar(5) DEFAULT NULL,
  `career` varchar(50) DEFAULT NULL,
  `join_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `city` varchar(20) NOT NULL DEFAULT 'known',
  `bio` varchar(150) NOT NULL,
  `profile_pic` varchar(50) NOT NULL DEFAULT 'profile.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `age`, `career`, `join_date`, `city`, `bio`, `profile_pic`) VALUES
(1, 'wael', 'wael-fadlallah@gmail.com', '3f20edb370212968f4082a8422fdd743', '0995054572', '20', 'طالب', '2018-05-24 20:18:41', 'غير معروف', 'just another php coder with a dream to take over the world ', 'profile.png'),
(2, 'Ezio-auditore', 'Hello@hotmail.com', '3f20edb370212968f4082a8422fdd743', '0995054572', '20', 'موظف', '2018-05-24 20:18:41', 'غير معروف', '', 'cosmic-cube-wallpaper-for-1366x768-67-969.jpg'),
(6, 'new', 'Hello@hotmail.com', '3f20edb370212968f4082a8422fdd743', NULL, NULL, NULL, '2018-05-29 21:48:22', 'known', '', 'profile.png'),
(7, 'new', 'Hello@hotmail.com', '3f20edb370212968f4082a8422fdd743', NULL, NULL, NULL, '2018-05-30 13:25:44', 'known', '', 'Breaking_bad_chemistry_1920x1200.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `upvote` varchar(10) NOT NULL,
  `downvote` varchar(10) NOT NULL,
  `star` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `user_id`, `question_id`, `comment_id`, `upvote`, `downvote`, `star`) VALUES
(5, 1, 1, NULL, 'true', 'false', '0'),
(7, 1, 1, 1, 'false', 'true', 'false'),
(8, 2, 1, NULL, 'false', 'true', 'true'),
(9, 2, 1, 2, 'true', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quest-user` (`owner`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vote=>user` (`user_id`),
  ADD KEY `vote=>question` (`question_id`),
  ADD KEY `vote=>comment` (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `quest-user` FOREIGN KEY (`owner`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `vote=>comment` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`),
  ADD CONSTRAINT `vote=>question` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`),
  ADD CONSTRAINT `vote=>user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
