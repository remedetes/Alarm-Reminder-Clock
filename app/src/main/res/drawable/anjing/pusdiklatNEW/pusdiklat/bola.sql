-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Mei 2019 pada 15.56
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bola`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(30) NOT NULL,
  `no_telp` char(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `no_telp`, `email`, `username`, `password`) VALUES
(1, 'admin', '021123456789', 'admin@email.com', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'rizki', '089626849771', 'muhamadrizkiwahyudi@unpak.ac.i', 'rizki', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(10) NOT NULL AUTO_INCREMENT,
  `judul` char(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `picture` varchar(500) NOT NULL,
  `waktu` date NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `nama_admin` char(30) NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `deskripsi`, `picture`, `waktu`, `kategori`, `nama_admin`) VALUES
(1, '3 Pemain Liverpool yang Bakal Angkat Koper dari Anfield', 'Bola.com, Jakarta - Liverpool tampil impresif pada musim ini. Meski gagal meraih satu pun trofi di kompetisi domestik, The Reds berpeluang merengkuh gelar di Liga Champions. Pada laga final, mereka bakal bersua Tottenham Hotspur.\r\n<br><br>\r\nKiprah Liverpool di Piala Liga Inggris dan Piala FA harus terhenti pada putaran ketiga. Sementara itu di Premier League, klub asuhan Jurgen Klopp tersebut finis di peringkat kedua.\r\n<br><br>\r\nThe Reds hanya mendulang 97 poin hasil dari 30 kemenangan, tujuh imbang, dan menelan satu kekalahan. Mereka hanya terpaut satu poin dari Manchester City yang keluar sebagai juara.\r\n<br><br>\r\nKini, harapan terakhir Liverpool merengkuh titel juara ada di ajang Liga Champions. Mereka berhasil lolos ke partai puncak setelah menyingkirkan Barcelona di semifinal dengan agregat 4-3.\r\n<br><br>\r\nPada laga final, The Reds akan menghadapi Tottenham Hotspur di Wanda Metropolitano pada 1 Juni 2019. Tottenham menembus ke final setelah mendepak Ajax Amsterdam berkat keunggulan agresivitas gol tandang dengan agregat 3-3.\r\n<br><br>\r\nKendati tampil gemilang, Liverpool masih memiliki beberapa titik kelemahan. Demi bisa membenahi hal tersebut, skuat Si Merah akan melakukan perombakan pada bursa transfer musim panas tahun ini.\r\n<br><br>\r\nAlhasil, beberapa pemain pun diyakini harus angkat kaki dari Stadion Anfield, terutama yang minim kontribusi pada musim ini. Berikut ini adalah tiga pemain Liverpool yang bakal terdepak pada akhir musim 2018-2019.                ', 'ccd8b5bf9d33312897892ecbfd4d664b5bb0471a.jpeg', '2019-05-15', 'Liga Eropa', 'rizki'),
(2, '5 Klub Favorit Juara Shopee Liga 1 2019', 'Bola.com, Jakarta - Kompetisi elite sepak bola Indonesia bertajuk Shopee Liga 1 2019 siap digelar. Persaingan menuju tangga juara diprediksi akan berlangsung ketat seiring dengan mulai meratanya kekuatan klub peserta.\r\n<br><br>\r\nMasih serupa dengan edisi sebelumnya, Shopee Liga 1 2019 bakal diikuti 18 klub. Tiga di antaranya yang berstatus sebagai tim promosi adalah PSS Sleman, Semen Padang, dan Kalteng Putra.\r\n<br><br>\r\nKehadiran tim promosi membuat persaingan akan semakin menarik. Selain itu, kualitas pemain yang dimiliki masing-masing klub mulai meningkat, baik untuk lokal maupun asing.\r\n<br><br>\r\nSebanyak 306 pertandingan akan berlangsung di Shopee Liga 1 2019. Kick-off pembuka musim akan digelar pada Rabu (15/5/2019) di Stadion Maguwoharjo dalam duel PSS Sleman akan menjamu Arema FC.\r\n<br><br>\r\nKompetisi musim ini pun disebut bakal jauh berkualitas ketimbang edisi sebelumnya. PT Liga Indonesia Baru (PT LIB) menjamin tidak akan adanya skandal pengaturan skor yang berarti hasil pertandingan adalah murni dari kualitas tim yang bermain.', '0479f8b85ab45b340d9e725d4f62ba86ef391d55.jpeg', '2019-05-15', 'Liga Indonesia', 'rizki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(10) NOT NULL AUTO_INCREMENT,
  `id_berita` int(10) NOT NULL,
  `nama` char(50) NOT NULL,
  `email` char(50) NOT NULL,
  `isi_komentar` text NOT NULL,
  `status` int(1) NOT NULL,
  `hak_akses` int(1) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_berita`, `nama`, `email`, `isi_komentar`, `status`, `hak_akses`, `tanggal`) VALUES
(1, 2, 'Bambang', 'bambang@email.com', 'Bagus ini loh, asli !', 1, 0, '2019-05-15 20:14:03'),
(2, 2, 'rizki', '', 'Ah yang bener ?', 1, 1, '2019-05-15 20:14:23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
