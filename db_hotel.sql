-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2023 at 07:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_tempat` int(5) NOT NULL,
  `nama_tempat` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `gambar_tempat` varchar(50) NOT NULL,
  `tempat_teks` text NOT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_tempat`, `nama_tempat`, `tipe`, `gambar_tempat`, `tempat_teks`, `harga`) VALUES
(0, 'Deluxe Room', 'kamar', 'kamar33.jpg', 'Surround yourself with simple elegance in this 40 square meter beautifully appointed Deluxe Room. Equipped with large LED screens and high speed broadband internet access, guests staying in the Deluxe Room also has complimentary access to Gaharu Spa and Fitness. Smoking and non smoking rooms are available on request, however will only be confirmed at check-in.\r\n\r\nMaximum Occupants: 4 people (2 adults & 2 children / 3 adults & 1 child) with additional extra bed', 1305000),
(2, 'Premier Room', 'kamar', 'kamar24.jpg', 'Experience the exclusivity and comfort of our 50 square meter space Premier Room, featuring balcony overlooking the city or swimming pool view. Equipped with large LED screens and high speed broadband internet access, guests staying in Premier Room will have complimentary access to Gaharu Spa and Fitness. This room type is only available for smoking room.\r\n\r\nMaximum Occupants: 4 people (2 adults & 2 children / 3 adults & 1 child) with additional extra bed', 1710000),
(3, 'Executive Room', 'kamar', 'kamar411.jpg', 'The Executive Room offers elegant accommodations and exclusive benefits including continental breakfast daily, daily refreshments, VIP express check-in and use of the business center facility at The Executive Lounge.\r\n\r\nMaximum Occupants: 4 people (2 adults & 2 children / 3 adults & 1 child) with additional extra bed', 3870000),
(4, 'Theater', 'ruang', 'Meeting.jpg', 'Untuk kebutuhan rapat dengan anggota yang lebih banyak, maka bentuk Teater bisa menjadi pilihan. Teater merupakan meeting room style set ups, yang hampir menyerupai Classroom. Perbedaannya terletak pada jalan tengah yang memisahkan bangku.\r\n\r\nJalan tengah berguna sebagai alternatif untuk memudahkan peserta saat menuju tempat duduk. Biasanya tipe Teater diterapkan untuk meja rapat di ruangan besar supaya bisa dikoordinir dengan mudah. Teater juga dapat menampung peserta lebih banyak.\r\n\r\nUntuk menghindari adanya peserta rapat yang tidak fokus karena tempat duduk berada jauh di belakang. Biasanya tipe Teater diaplikasikan dengan menyediakan ruang yang besar, sound system, layar, dan pencahayaan yang tepat.', 9000000),
(5, 'U-Shaped Room', 'ruang', 'ushaped.jpg', 'Setting U-Shaped memang paling umum dipakai pada ruang pertemuan. Sebab, pola U-Shaped membuat seluruh peserta rapat mudah terlihat. Apalagi tatanan kursi yang sengaja dibuat berhadapan seperti membentuk abjad U.\r\n\r\nBiasanya setting meja meeting bentuk U dipakai pada rapat yang terdiri banyak orang, misalnya 20 karyawan. Bentuk tatanan meja dan kursi membuat pembicara mudah melihat seluruh peserta, sehingga interaksi berjalan lancar.\r\n\r\nU-Shaped lebih mengedepankan konsep kekeluargaan dalam rapat, sebab posisi duduk setiap karyawan dibuat bersebelahan. Untuk mewujudkan design U-Shaped tentu dibutuhkan ruangan yang cukup besar agar tatanannya sempurna.', 5000000),
(6, 'Meeting Room ', 'ruang', 'meetroom.jpg', 'Konsep Boardroom lebih cocok jika dikhususkan untuk peserta rapat yang tidak terlalu banyak. Oleh sebab itu, ruang meeting yang dibutuhkan juga tidak terlalu luas. Pilihan meeting room setting ini membuat interaksi peserta lebih mudah.\r\n\r\nPada style Boardroom, bangku dibuat berhadapan, sehingga peserta dapat memperhatikan pembicara dengan maksimal. Tatanan meja Boardroom biasanya digunakan untuk tipe meeting eksklusif, misalnya rapat direksi, komite, dan VVIP.', 1200000),
(7, 'Diskon 50%', 'promo', 'promo1.jpg', 'COMING SOON', 0),
(17, 'Diskon 30%', 'promo', 'diskon2.jpg', 'DISKON 30%', 0),
(18, 'DISKON 60%', 'promo', 'hotel-offers1.jpg', 'DISKON 60%', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(10) NOT NULL,
  `nama_user` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(20) NOT NULL,
  `nama_kamar` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pembayaran` varchar(50) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`id_nota`, `nama_user`, `tanggal`, `jumlah`, `nama_kamar`, `pembayaran`, `total`) VALUES
(1, '', '0000-00-00', 0, 'Pilih Ruang', 'Paypal', 0),
(2, 'erere', '2023-12-21', 6, 'Deluxe Room', 'Pilih Pembayaran', 7830000),
(3, 'yfff', '2023-12-07', 1, 'Deluxe Room', 'Paypal', 1305000),
(4, 'sdsd', '2023-12-06', 2, 'Deluxe Room', 'Paypal', 2610000),
(5, 'nana', '2023-12-26', 1, 'Theater', 'Paypal', 9000000);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(10) NOT NULL,
  `nama_pegawai` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `password`, `email`) VALUES
(1, 'rena1', '1234', 'sheila@gamil.com'),
(2, 'nana', '1234', 'nana@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_tempat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
