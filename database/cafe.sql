-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Feb 2024 pada 16.31
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Mitha ditya', 'mitha112@gmail.com', 'Makanan kurang enak', 'makanan kurang enak dan tidak higenis karna ada rambut didalam makanan saya'),
(7, 'Kartika suwinda', 'kartita12@gmail.com', 'Makanan', 'Asin sekali rasa suop nya, Tolong diperhatikan ya lain kali!!'),
(8, 'Zivana Avita', 'zivana4453@gmail.com', 'The Sultan Cafe', 'Tempatnya bagus sangat aestetic sangat cocok untuk kalangan anak muda'),
(9, 'Sykila muzahira', 'skyra233@gmail.com', 'Tempat', 'Bagus banget tempatnya rekomended'),
(10, 'Mitha sysila', 'misy765@gmail.com', 'Makanan', 'Spagetinya enak bangettt berasa makan di spanyolll');

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jenis_makanan` varchar(30) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `nama`, `jenis_makanan`, `jumlah`, `harga`, `total`) VALUES
(1, 'Mitha ditya', 'Ramen Ayam', 2, '20.000', '40.000'),
(4, 'LALITA', 'Ramen Ayam', 1, '20.000', '20.000'),
(6, 'Monica Veronika', 'Ramen Ayam', 1, '20000', '30000'),
(7, 'Saiful Jamil', 'Mie Goreng Ayam', 3, '20.000', '60.000'),
(8, 'lola cantik', 'Mie Goreng Ayam', 1, '25.000', '25.000'),
(11, 'Cantika Putri', 'Big Burger', 2, '20.000', '40.000'),
(16, 'Saskia ', 'Spageti', 2, '50.000', '10.0000'),
(17, 'Kalia Safina', 'Spageti', 2, '50.000', '100.000'),
(18, 'Sofia Sandira', 'Mie Goreng Ayam', 4, '20.000', '80.000'),
(19, 'mithaaaa', 'Big Burger', 1, '30.000', '30.000'),
(21, 'Sylaa', 'Ramen Ayam', 1, '20.000', '20.000'),
(23, 'Putri Sefiana', 'Big Burger', 2, '20.000', '40.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `minuman`
--

CREATE TABLE `minuman` (
  `id_minuman` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_minuman` varchar(30) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `minuman`
--

INSERT INTO `minuman` (`id_minuman`, `nama`, `jenis_minuman`, `jumlah`, `harga`, `total`) VALUES
(2, 'Saskia ', 'Ice Cream Mix', 2, '100000', '200000'),
(3, 'Sordaila kayza', 'Milk Shake', 1, '20000', '20000'),
(4, 'Zakiya zehayna', 'Black Coffe', 2, '20000', '40000'),
(5, 'Monica Veronika', 'Milk Shake', 3, '20000', '60000'),
(7, 'Triko Zobia', 'Black Coffe', 1, '20.000', '20.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nohp` int(15) NOT NULL,
  `number_guest` int(5) NOT NULL,
  `date` date NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `name`, `email`, `nohp`, `number_guest`, `date`, `waktu`, `message`) VALUES
(1, 'Mitha ditya', 'mitha12@gmail.com', 822888990, 4, '2024-02-22', 'lunch', 'tempat khusus ruangan yang tertutup untuk rapat'),
(2, 'Refina Siska', 'refina654@gmail.com', 2222, 4, '2024-10-10', 'Breakfast', 'No Smoking Area'),
(5, 'Amalya syohiba', 'amalyasyohiba8@gmail', 823456543, 9, '2024-03-01', 'Dinner', ' Acara Ulang Tahun Keluarga'),
(6, 'Monica Candra', 'monica23@gmail.com', 988765434, 8, '2024-12-12', 'Dinner', 'Acara besar jadi butuh ruang privat'),
(7, 'Miko Darian', 'mikda12@gmail.com', 8216025, 2, '2024-02-09', 'Dinner', 'Mau tempat yang sunyi untu date bareng pacar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(254) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` char(128) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `token`, `status`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'roberto.kakaban@yahoo.com', 'c0e024d9200b5705bc4804722636378a', '1', '2024-02-10 22:23:42');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indeks untuk tabel `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`id_minuman`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id_makanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `minuman`
--
ALTER TABLE `minuman`
  MODIFY `id_minuman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
