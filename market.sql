-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Ara 2020, 20:13:01
-- Sunucu sürümü: 10.4.6-MariaDB
-- PHP Sürümü: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `market`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'root');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `isim` varchar(40) NOT NULL,
  `telefon` varchar(40) NOT NULL,
  `adres` text NOT NULL,
  `cart_note` text NOT NULL,
  `total` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `carts`
--

INSERT INTO `carts` (`id`, `isim`, `telefon`, `adres`, `cart_note`, `total`, `created_at`) VALUES
(17, 'asdasd', '5555555555', 'asdasasdasd', 'asdasd', '13', '2020-09-28 00:46:06'),
(18, 'asdasd', '5555555555', 'asdasasdasd', 'asdasd', '0', '2020-09-28 00:46:33'),
(19, 'asdasd', '5555555555', 'asdasasdasd', 'asdasd', '0', '2020-09-28 00:49:08'),
(20, 'asd', '5555555555', 'asdasdasdasd', 'asdasdasd', '0', '2020-09-28 00:49:21'),
(21, 'asdasd', '5555555555', 'asdasasdasd', 'asdasd', '0', '2020-09-28 00:49:56'),
(22, 'asdasd', '5555555555', 'asdasasdasd', 'asdasd', '0', '2020-09-28 00:51:16'),
(23, 'asdasd', '5555555555', 'asdasasdasd', 'asdasd', '0', '2020-09-28 00:51:41'),
(24, 'asdasd', '5555555555', 'asdasasdasd', 'asdasd', '0', '2020-09-28 00:52:19'),
(25, 'asdasd', '5555555555', 'asdasasdasd', 'asdasd', '0', '2020-09-28 00:52:25'),
(26, 'asdasd', '5555555555', 'asdasasdasd', 'asdasd', '0', '2020-09-28 00:54:23'),
(27, 'asdasd', '5555555555', 'asdasasdasd', 'asdasd', '0', '2020-09-28 00:54:34'),
(28, 'asdasd', '5555555555', 'asdasasdasd', 'asdasd', '0', '2020-09-28 00:54:38'),
(29, 'asdsad', '5555555555', 'asadasasdasdasd', 'asdsad', '0', '2020-09-28 01:08:32'),
(30, 'asdsad', '5555555555', 'asadasasdasdasd', 'asdsad', '0', '2020-09-28 01:08:42'),
(31, 'asdsad', '5555555555', 'asadasasdasdasd', 'asdsad', '0', '2020-09-28 01:11:05'),
(32, 'asdasd', '5555555555', '1231231313123', '1231231312312323', '15.5', '2020-09-28 01:11:48'),
(33, 'Sdasdasd', '5555555555', 'asdasdasdasdaasda', 'adasdasd', '33.25', '2020-12-06 22:03:52');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cart_products`
--

CREATE TABLE `cart_products` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `product_name` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `product_info` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `img` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `cart_products`
--

INSERT INTO `cart_products` (`id`, `cart_id`, `product_id`, `product_name`, `product_info`, `qty`, `img`) VALUES
(19, 17, 'd1fe173d08e959397adf34b1d77e88d7', 'Pınar Kido', 'Çikolatalı Süt', 1, 'pinar-kido-kakao.jpg'),
(20, 17, 'c7e1249ffc03eb9ded908c236bd1996d', 'Sek Süt 200ml', 'Muzlu', 1, 'sek-muzlu-sut-200-ml-e7e78a.jpg'),
(21, 17, 'f033ab37c30201f73f142449d037028d', 'Pınar Kido', 'Muzlu Süt', 2, 'pinar-kido-muz.jpg'),
(22, 17, '2a38a4a9316c49e5a833517c45d31070', 'Sek süt', 'Tam yağlı 1lt', 1, 'sek-tam-yagli.png'),
(23, 17, '3ef815416f775098fe977004015c6193', 'Sek Süt', 'Çikolatalı', 1, 'sek-cikolata-200ml.jpg'),
(24, 32, '5ef059938ba799aaa845e1c2e8a762bd', 'Eti Bisküvi', 'Sütlü Çikolatalı', 1, 'eti-sutlu-cikolatali.jpg'),
(25, 32, '07e1cd7dca89a1678042477183b7ac3f', 'Eti Topkek', 'Çilekli', 1, 'eti-topkek-cilek.jpg'),
(26, 32, 'd1f491a404d6854880943e5c3cd9ca25', 'Nestle Damak', 'Gece ', 1, 'nestle-damak-gece.jpg'),
(27, 32, '42a0e188f5033bc65bf8d78622277c4e', 'Ülker Gofret', 'Çikolatalı Gofret', 1, 'ülker-cikolatali-gofret.jpg'),
(28, 32, '9fc3d7152ba9336a670e36d0ed79bc43', 'Ülker Napoliten', 'Sütlü Çikolata', 1, 'ulker-sutlu-napoliten.jpg'),
(29, 33, 'eb160de1de89d9058fcb0b968dbbbd68', 'Eti Çikolata', 'Sütlü Çikolata', 1, 'eti-sutlu-cikolata.jpg'),
(30, 33, '9fc3d7152ba9336a670e36d0ed79bc43', 'Ülker Napoliten', 'Sütlü Çikolata', 1, 'ulker-sutlu-napoliten.jpg'),
(31, 33, '65b9eea6e1cc6bb9f0cd2a47751a186f', 'Eti Burçak', 'Çikolatalı Bisküvi', 1, 'eti-burcak-cikolatali.jpg'),
(32, 33, 'c45147dee729311ef5b5c3003946c48f', 'Eti Popkek', 'Muzlu Kek', 1, 'eti-popkek-muz.jpg'),
(33, 33, '6974ce5ac660610b44d9b9fed0ff9548', 'Eti Çikolata', 'Antep fıstıklı', 1, 'eti-antepfistikli-cikolata.jpg'),
(34, 33, 'a97da629b098b75c294dffdc3e463904', 'Eti Çikolata', 'Fındıklı Çikolata', 3, 'eti-findikli-cikolata.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `id` int(11) NOT NULL,
  `baslik` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_adi` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `kategori` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `ust_kategori` varchar(40) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `baslik`, `kategori_adi`, `kategori`, `ust_kategori`) VALUES
(1, 'Yiyecek', 'yiyecek', '', 'null'),
(2, 'İçecek', 'icecek', 's', 'null'),
(3, 'Gıda', 'gida', '', 'null'),
(4, 'Temizlik', 'temizlik', '', 'null'),
(5, 'Gazlı İçecekler', 'gazli', 'icecek', 'icecek'),
(6, 'Gazsız İçecekler', 'gazsiz', 'icecek', 'icecek'),
(10, 'Bisküvi-Çikolata', 'biskuvi-cikolata', '', 'yiyecek'),
(11, 'Yağ - Salça', 'yag-salca', 'gida', 'gida'),
(12, 'Bakliyat-Makarna', 'bakliyat-makarna', 'gida', 'gida'),
(13, 'Bulaşık Deterjanı', 'bulasik', 'temizlik', 'temizlik'),
(14, 'Deterjan-Yumuşatıcı', 'camasir', 'temizlik', 'temizlik'),
(15, 'Temizleyiciler', 'temizleyici', 'temizlik', 'temizlik'),
(16, 'Meyve-Sebze', 'meyve-sebze', '', 'null'),
(17, 'Meyve', 'meyve', 'meyve-sebze', 'meyve-sebze'),
(18, 'Sebze', 'sebze', '', 'meyve-sebze'),
(19, 'Süt- Süt ürünleri', 'sut-urunleri', '', 'null'),
(20, 'Süt', 'sut', '', 'sut-urunleri'),
(21, 'Peynir', 'peynir', '', 'sut-urunleri'),
(22, 'Yoğurt', 'yogurt', '', 'sut-urunleri'),
(23, 'Kasap', 'kasap', '', 'null'),
(24, 'Et-Tavuk', 'et-tavuk', '', 'kasap'),
(25, 'Sucuk', 'sucuk', '', 'kasap'),
(26, 'Kağıt Ürünleri', 'kagit-urunleri', '', 'null'),
(27, 'Peçete-ıslak mendil', 'pecete-mendil', '', 'kagit-urunleri'),
(28, 'Tuvalet kağıdı-Havlu', 'kagit-havlu', '', 'kagit-urunleri'),
(31, 'Şampuan&Duş jeli', 'sampuan', '', 'temizlik'),
(33, 'Sabun', 'sabun', '', 'temizlik'),
(35, 'Pasta Malzemeleri', 'pasta', '', 'gida'),
(36, 'Çay-Kahve-Şeker', 'cay-kahve', '', 'gida'),
(37, 'Baharat-Sos', 'baharat-sos', '', 'gida'),
(38, 'Tuz-Şeker', 'tuz-seker', '', 'gida'),
(39, 'Cips-Çerez', 'cips-cerez', '', 'yiyecek'),
(40, 'Diger', 'diger', '', 'null'),
(41, '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(11) NOT NULL,
  `isim` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `kategori` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `alt_kategori` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `marka` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `rank` int(11) NOT NULL,
  `teshir` varchar(5) COLLATE utf8_turkish_ci NOT NULL,
  `resim_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `isim`, `kategori`, `alt_kategori`, `marka`, `aciklama`, `fiyat`, `rank`, `teshir`, `resim_url`) VALUES
(46, 'Yudum Yağ 1lt', 'yag-salca', 'gida', 'Yudum', 'Ayçiçek Yağı', '11', 71, '', 'yudum-aycicek-yagi-1-lt.jpg'),
(47, 'Yudum Yağ 5lt', 'yag-salca', 'gida', 'Yudum', '5lt Ayçiçek Yağı', '49', 3, '', 'yudum-5lt.jpg'),
(48, 'Uludağ Limonata', 'gazsiz', 'icecek', 'Uludağ', 'Limonata 1lt', '5', 67, '', 'uludağ-1lt.jpg'),
(49, 'Beypazarı soda', 'gazli', 'icecek', 'Beypazarı', 'Sade soda', '1', 43, '', 'beypazarı-sade.jpg'),
(50, 'Cappy Atom 1lt', 'gazsiz', 'icecek', 'Cappy', 'Meyve Suyu', '6', 0, '', 'cappy-atom-1lt.jpg'),
(51, 'Cappy Karışık 1lt', 'gazsiz', 'icecek', 'Cappy', 'Meyve Suyu', '6', 0, '', 'cappy-karisik-1lt.jpg'),
(52, 'Cappy 200ml', 'gazsiz', 'icecek', 'Cappy', 'Karışık meyve suyu', '1.50', 0, '', 'cappy-karisik-200ml.jpg'),
(53, 'Cappy Limonata ', 'gazsiz', 'icecek', 'Cappy', '1lt Limonata', '5', 0, '', 'cappy-limonata-1lt.jpg'),
(54, 'Cappy Pulpy ', 'gazsiz', 'icecek', 'Cappy', '1lt Portakal', '6', 0, '', 'cappy-pulpy-portakal.jpg'),
(55, 'Cappy Pulpy', 'gazsiz', 'icecek', 'Cappy', '1lt Şeftali', '6', 0, '', 'cappy-pulpy-seftali.jpg'),
(56, 'Cappy 200ml', 'gazsiz', 'icecek', 'Cappy', 'Şeftali ', '1.50', 0, '', 'cappy-seftali-200ml.jpg'),
(57, 'Cappy 1lt', 'gazsiz', 'icecek', 'Cappy', 'Kayısı Suyu', '6', 0, '', 'capy-kayisi-1lt.jpg'),
(58, 'Cappy 1lt', 'gazsiz', 'icecek', 'Cappy', 'Şeftali suyu', '6', 0, '', 'capy-seftali-1lt.jpg'),
(59, 'Cappy 1lt', 'gazsiz', 'icecek', 'Cappy', 'Vişne', '7', 0, '', 'capy-visne-1lt.jpg'),
(60, 'Coca Cola 1lt', 'gazli', 'icecek', 'Coca-Cola', 'Kola', '5', 0, '', 'coca-cola-1lt.jpg'),
(61, 'Coca Cola 2.5lt', 'gazli', 'icecek', 'Coca-Cola', 'Kola', '7.50', 0, '', 'coca-cola-2_5lt1.jpg'),
(62, 'Coca Cola 200ml', 'kola', 'icecek', 'Coca-Cola', 'Kola', '2.00', 0, '', 'coca-cola-200ml.jpg'),
(63, 'Coca Cola 330ml', 'gazli', 'icecek', 'Coca-Cola', 'Kola', '3', 0, '', 'coca-cola-330ml.jpg'),
(64, 'Pirinç 5kg', 'bakliyat-makarna', 'gida', '-', 'Baldo', '30', 45, '', 'duru-baldo-pirinc-5kg.jpg'),
(65, 'Pirinç 1kg', 'bakliyat-makarna', 'gida', '-', 'Baldo', '10', 105, '', 'duru-pirinc-1kg.jpg'),
(66, 'Pirinç 5kg', 'bakliyat-makarna', 'gida', '-', 'Osmancık', '30', 122, '', 'duru-pirinc-osmancık-5kg.jpg'),
(67, 'Şehriyeli bulgur', 'bakliyat-makarna', 'gida', '-', '5kg', '20', 140, '', 'duru-sehriyeli-bulgur.jpg'),
(68, 'Fanta 1lt', 'gazli', 'icecek', 'Fanta', 'Portakal', '5', 84, '', 'fanta-1lt.jpg'),
(69, 'Fanta 2.5lt', 'gazli', 'icecek', 'Fanta', 'Portakal', '7.50', 0, '', 'fanta-2_5lt.jpg'),
(70, 'Fanta 200ml', 'gazli', 'icecek', 'Fanta', 'Portakal', '2', 0, '', 'fanta-200ml.jpg'),
(71, 'Kızılay Meyveli', 'gazli', 'icecek', 'Kızılay', 'Elmalı', '1.50', 0, '', 'kizilay-elma.jpg'),
(72, 'Kızılay Meyveli', 'gazli', 'icecek', 'Kızılay', 'Limonlu', '1.50', 0, '', 'kizilay-limon.jpg'),
(73, 'Kızılay Sade', 'gazli', 'icecek', 'Kızılay', 'Maden suyu', '1.00', 0, '', 'kizilay-sade.jpg'),
(74, 'Kızılay ', 'gazli', 'icecek', 'Kızılay', 'Vişneli', '1.50', 0, '', 'kizilay-visne.jpg'),
(75, 'Pınar Süt 1lt', 'sut', 'sut-urunleri', 'Pınar', 'Tam Yağlı Süt', '6.00', 96, '', 'pinar-1lt.jpg'),
(76, 'Pınar Süt 200ml', 'sut', 'sut-urunleri', 'Pınar', 'Sade süt', '1.50', 111, '', 'pinar-200ml.jpg'),
(77, 'Fanta 330ml', 'gazli', 'icecek', 'Fanta', 'Portakal', '3', 0, '', 'fanta-330.jpg'),
(78, 'Pınar Kido', 'sut', 'sut-urunleri', 'Pınar', 'Çilekli Süt', '1.50', 55, '', 'pinar-kido-cilek.jpg'),
(79, 'Pınar Kido', 'sut', 'sut-urunleri', 'Pınar', 'Çikolatalı Süt', '1.50', 125, '', 'pinar-kido-kakao.jpg'),
(80, 'Pınar Kido', 'sut', 'sut-urunleri', 'Pınar', 'Muzlu Süt', '1.50', 56, '', 'pinar-kido-muz.jpg'),
(81, 'Sarıkız Soda', 'gazli', 'icecek', 'Sarıkız', 'Elmalı soda', '1.50', 0, '', 'sarikiz-elma.jpg'),
(82, 'Sarıkız Soda', 'gazli', 'icecek', 'Sarıkız', 'Limonlu soda', '1.50', 0, '', 'sarikiz-limon.jpg'),
(83, 'Sarıkız Soda', 'gazli', 'icecek', 'Sarıkız', 'Sade soda', '1.00', 0, '', 'sarikiz-sade.jpg'),
(84, 'Sek süt', 'sut', 'sut-urunleri', 'Sek', 'Sade süt 200ml', '1.50', 19, '', 'sek-200ml.png'),
(85, 'Sek Süt', 'sut', 'sut-urunleri', 'Sek', 'Çikolatalı', '1.50', 15, '', 'sek-cikolata-200ml.jpg'),
(86, 'Sek Süt 200ml', 'sut', 'sut-urunleri', 'Sek', 'Çilekli', '1.50', 91, '', 'sek-cilek-200ml.jpg'),
(87, 'Sek Süt 200ml', 'sut', 'sut-urunleri', 'Sek', 'Muzlu', '1.50', 58, '', 'sek-muzlu-sut-200-ml-e7e78a.jpg'),
(88, 'Sek süt', 'sut', 'sut-urunleri', 'Sek', 'Tam yağlı 1lt', '5.50', 26, '', 'sek-tam-yagli.png'),
(89, 'Sek süt', 'sut', 'sut-urunleri', 'Sek', 'Yarım yağlı 1lt', '4.50', 29, '', 'sek-yarim-1lt.png'),
(90, 'Sırma Soda', 'gazli', 'icecek', 'Sırma', 'Sade Soda', '1.00', 36, '', 'sirma-sade.png'),
(94, 'Demko Salça', 'yag-salca', 'gida', 'Demko', 'Domates Salçası', '40.00', 84, '', 'demko-salca-buyuk.jpg'),
(95, 'Demko Salça', 'gida', '', 'Demko', 'Domates Salçası', '11.00', 69, '', 'demko-salca-kucuk.jpg'),
(96, 'Domestos', 'temizleyici', 'temizlik', 'Domestos', '750 ml Ç.suyu', '11.90', 102, '', 'domestos-dag-esintisi-750ml.jpg'),
(97, 'Domestos', 'temizleyici', 'temizlik', 'Domestos', '3250ml Ç.suyu', '30.90', 124, '', 'domestos-dag-esintisi-3250ml.jpg'),
(98, 'Domestos', 'temizleyici', 'temizlik', 'Domestos', '750ml Ç.suyu', '11.90', 38, '', 'domestos-kar-beyazi-750ml.jpg'),
(99, 'Domestos ', 'temizlik', '', 'Domestos', '3250ml Ç.suyu', '30.90', 75, '', 'domestos-kar-beyazi-3250ml.jpg'),
(100, 'Elidor', 'sampuan', 'kisisel-temizlik', 'Elidor', 'Şampuan-Saç kremi', '17.90', 91, '', 'elidor-mavi-2si1.jpg'),
(101, 'Elidor', 'sampuan', 'kisisel-temizlik', 'Elidor', 'Şampuan', '17.90', 70, '', 'elidor-mavi-sampuan.jpg'),
(102, 'Elidor', 'sampuan', 'temizlik', 'Elidor', 'Şampuan', '17.90', 148, '', 'elidor-sari-sampuan.jpg'),
(103, 'Eti Çikolata', 'biskuvi-cikolata', 'yiyecek', 'Eti', 'Antep fıstıklı', '6.50', 48, '', 'eti-antepfistikli-cikolata.jpg'),
(104, 'Eti Benimo', 'biskuvi-cikolata', 'yiyecek', 'Eti', 'Çikolatalı bisküvi', '2.50', 92, '', 'eti-benimo.jpg'),
(105, 'Eti Burçak', 'biskuvi-cikolata', 'yiyecek', 'Eti', 'Çikolatalı Bisküvi', '2.00', 61, '', 'eti-burcak-cikolatali.jpg'),
(106, 'Eti Canga', 'biskuvi-cikolata', 'yiyecek', 'Eti', 'Çikolata', '1.75', 14, '', 'eti-canga.jpg'),
(107, 'Eti Çikolata', 'biskuvi-cikolata', 'yiyecek', 'Eti', 'Fındıklı Çikolata', '5.00', 47, '', 'eti-findikli-cikolata.jpg'),
(108, 'Eti Hoşbeş', 'biskuvi-cikolata', 'yiyecek', 'Eti', 'Büyük boy', '4.50', 5, '', 'eti-hosbes-cikolata-142gr.jpg'),
(109, 'Eti Hoşbeş', 'biskuvi-cikolata', 'yiyecek', 'Eti', 'Büyük boy', '4.50', 149, '', 'eti-hosbes-cilek.jpg'),
(110, 'Eti Hoşbeş', 'biskuvi-cikolata', 'yiyecek', 'Eti', 'Büyük boy', '4.50', 108, '', 'eti-hosbes-findik-142.jpg'),
(111, 'Eti Karam', 'biskuvi-cikolata', 'yiyecek', 'Eti', 'Çikolatalı Gofret', '2.00', 128, '', 'eti-karam.jpg'),
(112, 'Eti Çikolata', 'biskuvi-cikolata', 'yiyecek', 'Eti', 'Karam Bitter', '6.00', 54, '', 'eti-karam-bitter.jpg'),
(113, 'Eti Popkek', 'biskuvi-cikolata', 'yiyecek', 'Eti', 'Kakaolu Kek', '1.25', 137, '', 'eti-popkek-kakao.jpg'),
(114, 'Eti Popkek Mini', 'biskuvi-cikolata', 'yiyecek', 'Eti', 'Kakaolu Kek', '6.00', 37, '', 'eti-popkek-mini-kakao.jpg'),
(115, 'Eti Popkek Mini', 'biskuvi-cikolata', 'yiyecek', 'Eti', 'Muzlu Kek', '6.00', 99, '', 'eti-popkek-mini-muz.jpg'),
(116, 'Eti Popkek', 'biskuvi-cikolata', 'yiyecek', 'Eti', 'Muzlu Kek', '1.25', 57, '', 'eti-popkek-muz.jpg'),
(117, 'Eti Çikolata', 'biskuvi-cikolata', 'yiyecek', 'Eti', 'Sütlü Çikolata', '5.00', 112, '', 'eti-sutlu-cikolata.jpg'),
(118, 'Eti Bisküvi', 'biskuvi-cikolata', 'yiyecek', 'Eti', 'Sütlü Çikolatalı', '2.50', 146, '', 'eti-sutlu-cikolatali.jpg'),
(119, 'Eti Topkek', 'biskuvi-cikolata', 'yiyecek', 'Eti', 'Çilekli', '1.00', 137, '', 'eti-topkek-cilek.jpg'),
(121, 'Fairy 650ml', 'bulasik', 'temizlik', 'Fairy', 'Bulaşık Deterjanı', '8.00', 61, '', 'fairy-limon-650ml.jpg'),
(122, 'Fairy 1350ml', 'bulasik', 'temizlik', 'Fairy', 'Bulaşık Deterjanı', '14.00', 74, '', 'fairy-limon-1350ml.jpg'),
(123, 'Head & Shoulders', 'temizlik', '', 'H&S', 'Klasik Şampuan', '17.00', 145, '', 'hs-klasic-sampuan.jpg'),
(124, 'Head & Shoulders', 'temizlik', '', 'H&S', 'Şampuan (Limon)', '17.00', 1, '', 'hs-limon-sampuan1.jpg'),
(125, 'Hypo Ç.suyu', 'temizlik', '', 'Hypo', 'Çamaşır suyu', '11', 53, '', 'hypo-1lt.jpg'),
(126, 'Hypo 4lt', 'temizlik', '', 'Hypo', 'Çamaşır Suyu', '20', 89, '', 'hypo-4lt.jpg'),
(127, 'Hypo 2500ml', 'temizlik', '', 'Hypo', 'Tuz ruhu', '15', 43, '', 'hypo-tuzruhu-2500ml.jpg'),
(128, 'Nestle Damak', 'biskuvi-cikolata', 'yiyecek', 'Nestle', 'Antep fıstıklı', '7.00', 31, '', 'nestle-damak-antep.jpg'),
(129, 'Nestle Damak', 'biskuvi-cikolata', 'yiyecek', 'Nestle', 'Gece ', '7.00', 112, '', 'nestle-damak-gece.jpg'),
(130, 'Öncü Salça', 'yag-salca', 'gida', 'Öncü', 'Domates salçası', '35.90', 47, '', 'oncu-salca.jpg'),
(131, 'Pantene', 'sampuan', 'kisisel-temizlik', 'Pantene', 'Saç kremi', '16.90', 44, '', 'pantene-sackremi.jpg'),
(132, 'Pantene', 'sampuan', 'kisisel-temizlik', 'Pantene', 'Şampuan', '16.90', 42, '', 'pantene-sampuan-onarici.jpg'),
(133, 'Ülker Napoliten', 'biskuvi-cikolata', 'yiyecek', 'Ülker', 'Sütlü Çikolata', '3.50', 86, '', 'ulker-sutlu-napoliten.jpg'),
(135, 'Ülker Çikolata', 'biskuvi-cikolata', 'yiyecek', 'Ülker', 'Antep fıstıklı', '5.99', 121, '', 'ülker-cikolata-antep.jpg'),
(136, 'Ülker Gofret', 'biskuvi-cikolata', 'yiyecek', 'Ülker', 'Çikolatalı Gofret', '1.50', 72, '', 'ülker-cikolatali-gofret.jpg'),
(137, 'Ülker Çikolata', 'biskuvi-cikolata', 'yiyecek', 'Ülker', 'Sütlü ', '4.49', 53, '', 'ülker-cikolata-sut.jpg'),
(138, 'Yumoş 5lt', 'camasir', 'temizlik', 'Yumoş', 'Yumuşatıcı', '29.90', 128, '', 'yumos-5lt.jpg'),
(139, 'Yumoş 5lt', 'camasir', 'temizlik', 'Yumoş', 'Yumuşatıcı', '29.90', 144, '', 'yumos-bahar-tazeligi-5lt.jpg'),
(140, 'Yumoş 5lt', 'camasir', 'temizlik', 'Yumoş', 'Yumuşatıcı', '29.90', 69, '', 'yumos-lavanta-5lt.jpg'),
(141, 'Eti Topkek', 'biskuvi-cikolata', 'yiyecek', 'Eti', 'Kakaolu', '1.00', 126, '', 'eti-topkek-kakao1.jpg'),
(142, 'Eti Topkek', 'biskuvi-cikolata', 'yiyecek', 'Eti', 'Meyveli', '1.00', 134, '', 'eti-topkek-meyveli.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `cart_products`
--
ALTER TABLE `cart_products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Tablo için AUTO_INCREMENT değeri `cart_products`
--
ALTER TABLE `cart_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
