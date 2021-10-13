-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2020 at 09:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kosmetik`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id_chat`, `id_user`, `message`) VALUES
(1, 1, 'halo'),
(2, 4, 'halo juga'),
(3, 1, 'asdads'),
(4, 4, 'asdadsasad'),
(5, 1, 'lagi apa bro'),
(6, 4, 'lagi makan'),
(7, 4, 'lagi makan'),
(8, 4, 'sdads'),
(9, 5, 'ddddd'),
(10, 1, 'ddddd'),
(11, 1, 'aku admin'),
(12, 2, 'asdasd'),
(13, 4, 'hai'),
(14, 1, 'asdadasdadasd');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` int(11) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `batas_bayar` date NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id_invoice`, `tanggal_pesan`, `batas_bayar`, `status`) VALUES
(31, '2020-08-01', '2020-08-02', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'lipstick'),
(2, 'foundation'),
(3, 'eyeshadow'),
(4, 'bedak'),
(5, 'blushon');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `harga` varchar(128) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `stok` int(100) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `keterangan`, `harga`, `id_kategori`, `stok`, `gambar`) VALUES
(7, 'Wardah lip', 'Wardah lip kekinian', '35000', 1, 50, 'wardah_lip.jpg'),
(9, 'Emina lip cream', 'Emina lip cream super cantik', '40000', 1, 39, '6.jpg'),
(10, 'Purbasari lipstick', 'Purbasari lipstick cantikkkk', '23000', 1, 49, 'pur.jpg'),
(11, 'Wardah eyeshadow', 'Wardah eyeshadow cantikkkkk', '81000', 3, 30, 'bkush.jpg'),
(13, 'Wardah lipmatte', 'Wardah lipmatte', '65000', 1, 50, 'wardah_lipmatte.jpg'),
(14, 'Purbasari face powder', 'Purbasari face powder', '30000', 4, 20, '222.jpg'),
(15, 'Emina eyeshadow pop rouge', 'Emina eyeshadow pop rouge', '36000', 3, 30, 'emi.jpg'),
(16, 'Emina cheeklit blush on', 'Emina cheeklit blush on', '23000', 5, 30, 'emina_blush.jpg'),
(17, 'Viva foundation', 'Viva foundation', '7000', 2, 30, 'viva.jpg'),
(18, 'Viva eyeshadow', 'Viva eyeshadow', '18000', 3, 30, 'vi.jpg'),
(19, 'Wardah blushon', 'Wardah blushon', '38000', 5, 20, 'blush_war.jpg'),
(20, 'Emina bb cream', 'Emina bb cream', '29000', 2, 30, 'bb_emina.jpg'),
(21, 'Emina loose powder', 'Emina loose powder', '45000', 4, 30, 'be.jpg'),
(22, 'Wardah acnederm face powder', 'Wardah acnederm face powder', '40000', 4, 30, 'wardan_acne.jpg'),
(23, 'Wardah dd cream', 'Wardah dd cream', '30000', 2, 30, 'wddcream.jpg'),
(24, 'Maybelline fit me', 'Maybelline fit me', '150000', 2, 20, 'mbfit.jpg'),
(25, 'Maybelline fit me blush', 'Maybelline fit me blush', '64000', 5, 20, 'mbfblush.jpg'),
(26, 'Marcks bedak', 'Marcks bedak', '15000', 4, 30, 'marks.jpg'),
(27, 'Mac blushon', 'Mac blushon', '15000', 5, 20, 'mac.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `nama_penerima` varchar(255) NOT NULL,
  `telepon` varchar(128) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `provinsi` varchar(128) NOT NULL,
  `distrik` varchar(128) NOT NULL,
  `type` varchar(128) NOT NULL,
  `kodepos` int(11) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `id_invoice`, `id_user`, `id_transaksi`, `nama_penerima`, `telepon`, `alamat`, `provinsi`, `distrik`, `type`, `kodepos`, `catatan`) VALUES
(31, 31, 7, 23, 'monica dewi', '08797', 'petir', 'Banten', 'Serang', 'Kabupaten', 42182, 'warna merah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan_detail`
--

CREATE TABLE `tb_pesanan_detail` (
  `id_pesanan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `kurir` varchar(12) NOT NULL,
  `paket` varchar(12) NOT NULL,
  `ongkir` int(11) NOT NULL,
  `estimasi_pengiriman` varchar(20) NOT NULL,
  `total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan_detail`
--

INSERT INTO `tb_pesanan_detail` (`id_pesanan`, `id_barang`, `id_invoice`, `qty`, `price`, `berat`, `kurir`, `paket`, `ongkir`, `estimasi_pengiriman`, `total_bayar`) VALUES
(31, 9, 31, 2, 40000, 1200, 'jne', 'OKE', 8000, '3-6', 88000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `status_code` int(11) NOT NULL,
  `status_message` varchar(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `order_id` int(255) NOT NULL,
  `gross_amount` int(255) NOT NULL,
  `payment_type` varchar(155) NOT NULL,
  `payment_code` int(255) NOT NULL,
  `transaction_time` varchar(255) NOT NULL,
  `transaction_status` varchar(255) NOT NULL,
  `fraud_status` varchar(100) NOT NULL,
  `bill_key` varchar(255) NOT NULL,
  `biller_code` varchar(255) NOT NULL,
  `pdf_url` text NOT NULL,
  `finish_redirect_url` text NOT NULL,
  `bank` varchar(100) NOT NULL,
  `va_number` varchar(100) NOT NULL,
  `bca_va_number` varchar(100) NOT NULL,
  `permata_va_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `status_code`, `status_message`, `transaction_id`, `order_id`, `gross_amount`, `payment_type`, `payment_code`, `transaction_time`, `transaction_status`, `fraud_status`, `bill_key`, `biller_code`, `pdf_url`, `finish_redirect_url`, `bank`, `va_number`, `bca_va_number`, `permata_va_number`) VALUES
(23, 201, 'Success, transaction is found', 'd5f87e32-6629-4eab-bc53-36b24cf8646c', 1526372939, 88000, 'cstore', 2147483647, '2020-08-01 14:03:56', 'pending', 'accept', '-', '-', 'https://app.sandbox.midtrans.com/snap/v1/transactions/2cc28909-dd47-48e9-be13-87adf60cf78c/pdf', 'http://example.com?order_id=1526372939&status_code=201&transaction_status=pending', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `gambar`, `password`, `role_id`) VALUES
(1, 'dodi asd', 'dodiwkwk@gmail.com', 'default.jpg', '$2y$10$Ir9nSql4XXLBDFJ2S8yUtuT2nx1TokAqzHklO1Z94YS1diEzZ9JWy', 1),
(4, 'ahmad', 'ahmadwkwk@gmail.com', 'default.jpg', '$2y$10$PZ7HtKN52IjMh1Rz0GOPc.9uTut3nU20UOBA/FJSQcmWf2KgI04Pm', 2),
(5, 'kadal', 'kadalbuntung0202@gmail.com', 'default.jpg', '$2y$10$/SLT.wRFv/qWBVIYjD6eMuvgWZO5kgOMWpfsTwEaJsK2EYkzMZ9P.', 2),
(6, 'nanang', 'nanang@gmail.com', 'default.jpg', '$2y$10$FkpDBMymUkca.u5HVRe//OH2zRD3N6Z1c6JMhwszBI8NHr13f6LdO', 2),
(7, 'monica dewi', 'monic@gmail.com', 'default.jpg', '$2y$10$w2ztov2crFBAzoxFAPsBz.LAVuL/roLbPsYkxV.P.YRixRa/B.b5O', 2),
(8, 'diki', 'diki@gmail.com', 'default.jpg', '$2y$10$/PqtJL7IXSH.Fdcbju1VGe5sVq0lWL1DTrBNG83fE1xaLDQrJKueu', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_invoice` (`id_invoice`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_transaksi_2` (`id_transaksi`);

--
-- Indexes for table `tb_pesanan_detail`
--
ALTER TABLE `tb_pesanan_detail`
  ADD KEY `id_pesanan` (`id_pesanan`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_invoice` (`id_invoice`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
