-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2020 at 05:22 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `budaya`
--

CREATE TABLE `budaya` (
  `id` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budaya`
--

INSERT INTO `budaya` (`id`, `judul`, `gambar`, `isi`) VALUES
(2, 'Saung Angklung Udjo', '5e047c8e68f9b.jpg', 'Saung Angklung Udjo ini merupakan salah satu Paguyuban Kesenian Sunda yang berada di kota Bandung bagian timur. Paguyugan Seni ini di dirikan oleh sepasang suami istri yang bernama Udjo Ngalagena dan Uum Sumiati yang mana pendiriannya di mulai sejak tahun'),
(4, 'Taman Budaya Jawa Barat', '5e047d4ae829c.jpg', 'Taman wisata ini mungkin sudah lama terkenal, bahkan bisa di katakan sejak zaman penjajahan belanda. Namun dulu tempat ini lebih di kenal sebagai tempat minum teh juga kuliner orang-orang bangsawan, dan lebih di kenal sebagai Dago The Huis atau Rumah Teh '),
(5, 'Kampung Adat Mahmud', '5e047d967d21b.jpg', 'Apakah Anda mengenal kampung budaya yang satu ini? Kampung ini merupakan salah satu pusat penyebaran agaram Islam di kota Bandung ini. Lokasi kampung ini berada di Desa Mekarrahayu, Kecamatan Margaasih, Kabupaten Bandung.\r\nSesuai dengan namanya, kampung i'),
(6, 'Gedung Kesenian Rumentang Siang', '5e047dd54fc90.jpg', 'Gedung Kesenian ini berlokasikan di Jln. Baranang Siang, Bandung. Yang mana gedung ini adalah salah satu gedung yang memang kerap kali di jadikan sebagai tempat untuk melangsungkan berbagai aktifitas kesenian di Bandung.'),
(7, 'Padepokan Seni Mayang Sunda', '5e047e53b422c.jpg', 'Padepokan ini adalah salah satu padepokan terkenal yang ada di Kota Bandung, yang mana berlokasikan di Jln. Peta Bandung.\r\nGedung ini sendiri adalah gedung yang dimiliki oleh pemerintah daerah kota Bandung, dan sampai saat ini Gedung Seni Mayang Sunda ini'),
(8, 'Situ Lembang', '5e0b40c0b7702.jpg', 'Tempat wisata alam yang berlokasi di desa Parongpong, Cisarua ini tidak kalah eksotis bila dibandingkan dengan Balitsa. Tempat wisata ini adalah sebuah danau buatan yang dikenal dengan nama Situ Lembang.\r\n\r\nSitu Lembang merupakan danau buatan peninggalan ');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `maps` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `judul`, `gambar`, `info`, `maps`) VALUES
(1, 'HOTEL TRANS LUXURY BANDUNG', '5e0a06db6457b.jpg', 'Hotel Trans Luxury Bandung ini biasa juga dikenal dengan sebutan Hotel Trans Bandung yang beralamat di Jalan Gatot Subroto 289, Kota Bandung. Sesuai namanya, hotel ini merupakan hotel mewah berbintang 6 yang menawarkan kemewahan terbaik di Bandung. Hotel ini tidak hanya bagus dari segi bangunan, namun juga dari segi fasilitas. Jika Anda ingin menikmati kenyamanan dengan kemewahan yang beragam, hotel ini merupakan rekomendasi terbaik untuk Anda.Di sekitar kawasan hotel, Anda ditawarkan beberapa objek wisata serta mall. Objek wisata terdekat adalah Trans Studio Bandung dengan berbagai wahana yang menarik.', 'https://goo.gl/maps/1CTwYeR6eQ996LY58'),
(2, 'PADMA HOTEL BANDUNG', '5e0a0e0fb2c08.jpg', 'Hotel ini beralamat di Jalan Ranca Bentang 56-58, Ciumbuleuit, Bandung. Jika Anda mencari hotel yang menawarkan pemandangan pegunungan dengan eksklusif serta nuansa tropis yang mewah, hotel ini menjadi tempat terbaik untuk Anda bersama keluarga. Masuk dalam daftar hotel terbaik di Bandung eksklusif, hotel ini juga terkenal dengan hotel surge tropis.Salah satu yang diprioritaskan oleh hotel ini adalah kenyamanan dan ketenangan tamu.Jika Anda berlibur di Bandung untuk mencari ketenangan, Hotel Padma menjadi pilihan terbaik. Beberapa fasilitas seperti pusat kebugaran diatur sedemikian rupa dan menghadap langsung ke pegunungan. Pemandangan pegunungan yang hijau, udara sejuk yang menyegarkan serta lingkungan yang asri dengan gaya mewah akan membuat liburan Anda lebih bermakna.', 'https://g.page/padmabandung?share'),
(11, 'SHERATON BANDUNG HOTEL', '5e0a106b99eea.jpg', 'Sheraton Hotel tersebar di berbagai kota besar di Indonesia, salah satunya di Bandung. Untuk di Bandung, Anda bisa mengunjungi hotel ini yang beralamatkan di Jalan Ir.H. Juanda No 39, Dago, Bandung. Hotel ini merupakan hotel berbintang 5 yang cocok untuk tempat menginap Anda bersama keluarga.Salah satu fasilitas yang bisa Anda dapatkan di hotel ini adalah fasilitas untuk olahraga dan rekreasi. Ada lapangan golf untuk dewasa dan anak-anak, kolam renang indoor dan outdoor serta beberapa fasilitas lainnya.', 'https://goo.gl/maps/pW4zfQhgauUi8t676');

-- --------------------------------------------------------

--
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `id` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuliner`
--

INSERT INTO `kuliner` (`id`, `judul`, `gambar`, `isi`) VALUES
(2, 'Paskal Food Market', '5e0479a1e610a.jpg', 'Paskal Food Market hadir dengan konsep ruangan terbuka. Di lokasi kuliner bandung ini terdapat lebih dari 50 stand yang menyediakan berbagai makanan. Stand-stand makanan ini menyajikan hidangan chinese food, japanese food. Tidak ketinggalan masakan khas '),
(4, 'KAMPUNG DAUN LEMBANG', '5e08e26b71879.jpg', 'Kampung daun adalah salah satu dari 99 Tempat Wisata di Lembang Bandung Terbaru dan Terpopuler 2018  sebagai salah surga wisata Kuliner Malam Bandung.\r\n\r\nKenapa demikian, karena tempat wisata kuliner di Bandung ini sangat eksotis dan Romantis dan di jamin beda dari apa yang anda bayangkan selama ini mengenai tempat makan.'),
(7, 'SAPULIDI CAFE, RESORT &amp; GALLERY LEMBANG', '5e08e3e59f173.jpg', 'Sahabat travelerâ€™s, Sapu Lidi menawarkan pengalaman makan dengan suasana pedesaan khas lembang yang asri dengan udara yang cukup sejuk.\r\n\r\nDengan tempat makan berupa saung-saung di sekitar pesawahan, tentunya bagi pengunjung terutama yang berasal dari kota-kota besar seperti Jakarta,\r\n\r\ndan menikmati aneka hidangan di Sapulidi Cafe Bandung ini tentunya akan memberikan sensasi wisata kuliner yang sangat luar biasa'),
(8, 'RUMAH SOSIS', '5e08e662e4132.jpg', 'Kenapa namanya Rumah Sosis ? yang jelas bagi anda yang belum pernah ke tempat ini jangan terjebak dengan namanya.\r\nRumah sosis bukanlah resto yang  hanya menjajakan penganan berbahan sosis saja, ada fasilitas lainnya yang menarik di sini.'),
(9, 'ATMOSPHERE RESORT CAFE', '5e08e78514d89.jpg', 'Berada di lokasi strategis yaitu pusat kota Bandung,menjadikan Atmosphere ini selalu ramai dan dipadati oleh pengunjung hampir tiap hari, apalagi di akhir pekan atau musim libur tiba.\r\n\r\nTak sedikit yang berkunjung ke lokasi wisata kota Bandung ini sejumlah ekspatriat atau orang-orang mancanegara yang berada di Bandung.\r\n\r\nTempatnya yang cozy, suasanya yang tenang, pelayanannya yang ramah dan cepat menjadi daya tarik kenapa banyak orang rela menghabiskan waktu makan di sini.'),
(10, 'DAGO TEA HOUSE', '5e08e7fcd81b0.jpg', 'Sahabat travelerâ€™s, Anda ingin menikmati sensasi wisata kuliner malam di Bandung yang romantis dengan pemandangan view Bandung Citylight yang indah luar biasa ?\r\n\r\nyaitu sensasi menikmati aneka menu makanan dan juga minuman yang menggugah selera sambil menikmati suasana keindahan serta gemerlap-nya kota bandung di malam hari ?!\r\n\r\ndijamin keindahan dan suasana tempat dago tea house tidak akan kalah dengan tempat melihat bandung citylught seperti di Bukit Moko, Puncak Bintang dan Bukit Teropong Indah Lembang !');

-- --------------------------------------------------------

--
-- Table structure for table `populer`
--

CREATE TABLE `populer` (
  `id` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `populer`
--

INSERT INTO `populer` (`id`, `judul`, `gambar`, `isi`) VALUES
(2, 'Trans Studio Bandung', '5e0853d1ed82c.jpg', 'Jika Anda menyukai kegiatan sedikit ekstrem dan memacu adrenalin, jangan lupa untuk datang ke Trans Studio Bandung yang berlokasi di Jalan Gatot Subroto, Bandung. Di tempat wisata di Bandung ini terdapat lima jenis wahana yang betul-betul bisa membuat jan'),
(4, 'Pinisi Resto dan Glamping Lakeside', '5e0854084eb16.jpg', 'Bagi Anda yang menyukai tempat wisata yang indah dan memiliki nuansa alami, tempat wisata di Bandung selatan ini bisa dijadikan tempat wisata baru. Pinisi Resto dan Glamping Lakeside ini sangatlah cocok sebagai tempat nongkrong seru para wisatawan.\r\n\r\nPas'),
(5, 'Stone Garden Padalarang', '5e0854e070434.jpg', 'Tidak banyak orang mengetahui keindahan yang disuguhkan oleh pemandangan di atas bukit Stone Garden ini. Apalagi bila wisatawan berkunjung di padang bertabur bebatuan ini pada pagi hari saat matahari muncul atau di senja hari saat matahari tenggelam.'),
(6, 'Gedung Kesenian Rumentang Siang', '5e0854241e01d.jpg', 'Gedung Kesenian ini berlokasikan di Jln. Baranang Siang, Bandung. Yang mana gedung ini adalah salah satu gedung yang memang kerap kali di jadikan sebagai tempat untuk melangsungkan berbagai aktifitas kesenian di Bandung.'),
(7, 'Masjid Raya Bandung', '5e0854585fc56.jpg', 'Masjid Raya Bandung Provinsi Jawa Barat, yang dulu dikenal dengan nama Masjid Agung Bandung adalah masjid yang berada di Kota Bandung, Jawa Barat, Indonesia. Status masjid ini adalah sebagai '),
(8, 'Kawah Putih', '5e08557f0d1e8.jpg', ' Kawah Putih tepatnya terletak di puncak gunung Patuha, Ciwidey, kawasan Bandung Selatan '),
(9, 'Gedung Sate', '5e08b53a72c2d.jpg', 'Gedung sate yang terletak di Jalan Diponegoro no 22 Bandung ini, telah lama menjadi kebanggan kota Bandung dengan ciri khasnya berupa ornamen tusuk sate pada menara sentralnya. ');

-- --------------------------------------------------------

--
-- Table structure for table `religi`
--

CREATE TABLE `religi` (
  `id` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `religi`
--

INSERT INTO `religi` (`id`, `judul`, `gambar`, `isi`) VALUES
(3, 'Masjid Raya Bandung', '5e047838213c8.jpg', 'Masjid Raya Bandung Provinsi Jawa Barat, yang dulu dikenal dengan nama Masjid Agung Bandung adalah masjid yang berada di Kota Bandung, Jawa Barat, Indonesia. Status masjid ini adalah sebagai '),
(4, 'PUSDAI', '5e08e91222528.jpg', 'PUSDAI (Pusat Studi Dakwah Islam) ini merupakan Islamic Center di Kota Bandung. PUSDAI ini juga berlokasi di Jalan Diponegoro, bersebelahan dengan Radio Republik Indonesia (RRI) Bandung dan hanya berjarak sekitar 1 KM dari Gedung Sate. Masjid megah nan mewah yang dapat menampung sekitar 4.000 jamaah ini selain dipakai untuk shalat, ada juga ruangan khusus untuk dakwah islamiah, setiap hari diadakan acara ceramah agama. PUSDAI juga dilengkapi dengan aula, perpustakaan, ruang seminar, bale asri semacam gedung serba guna yang digunakan untuk mengadakan pameran, serta sentra kegiatan keagamaan lainnya.'),
(7, 'Kampung Adat Mahmud', '5e08ea49d927f.jpg', 'Kampung ini berada di pinggiran bandung, tepatnya di Kecamatan Marga Asih. Di sini terdapat makam Eyang Dalem Abdul Manaf, yang berjasa menyebarkan agama islam di wilayah Bandung.'),
(8, 'Daarut Tauhid', '5e08ea714859f.jpg', 'Nama Daarut Tauhid (DT) sudah familiar di telinga warga Bandung, bahkan luar daerah. DT merupakan pondok pesantren pimpinan Kyai kondang Abdullah Gymnastiar (Aaâ€™ Gym). Tempat ini berlokasi di Gegerkalong Girang, Bandung Utara yang juga berdekatan dengan obyek wisata lainnya seperti kawasan Setiabudi dan Lembang. Selain pondok pesantren, di sini juga ada masjid, toko buku, stasiun televisi MQTV serta radio MQFM.'),
(9, 'Biara Karmel Lembang', '5e08eb6a32121.jpg', 'Bagi wisatawan yang menganut agama Kristen Katolik, di Jalan Karmel II no.51, Lembang, Bandung ini akan melihat biara pertapaan suster dari Ordo Carmelit (OCD atau Ordo Carmelitarum Discalceatorum), Kapel Santa Maria Fatima dan Gua Maria. Lokasi nya juga yang sangat tenang dan sunyi, serta indahnya pepohonan rindang.\r\n\r\nItulah ketiga wisata religi yang ada di Bandung. Bandung memang surganya pariwisata dan kuliner. Yuk guys ke Bandung.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `alamat`) VALUES
(3, 'admin', '$2y$10$FJYjPMxXfcSBjkjBZvbYzekHvB/U9PPrkxlSw.MrU14QukFuNkg5u', 'aaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budaya`
--
ALTER TABLE `budaya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `populer`
--
ALTER TABLE `populer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `religi`
--
ALTER TABLE `religi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budaya`
--
ALTER TABLE `budaya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `populer`
--
ALTER TABLE `populer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `religi`
--
ALTER TABLE `religi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
