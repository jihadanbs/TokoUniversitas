-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 17 Jul 2023 pada 10.04
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokosekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaction`
--

CREATE TABLE `tb_transaction` (
  `order_id` char(20) NOT NULL,
  `customer_name` varchar(50) DEFAULT NULL,
  `customer_email` varchar(20) DEFAULT NULL,
  `gross_amount` int(20) DEFAULT NULL,
  `payment_type` varchar(20) DEFAULT NULL,
  `transaction_time` datetime DEFAULT NULL,
  `settlement_time` datetime DEFAULT NULL,
  `bank` varchar(20) DEFAULT NULL,
  `va_numbers` varchar(50) DEFAULT NULL,
  `status_message` text DEFAULT NULL,
  `pdf_url` text DEFAULT NULL,
  `transaction_status` char(20) DEFAULT NULL,
  `status_code` char(3) DEFAULT NULL,
  `transaction_id` varchar(200) DEFAULT NULL,
  `finish_redirect_url` text DEFAULT NULL,
  `payment_code` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transaction`
--

INSERT INTO `tb_transaction` (`order_id`, `customer_name`, `customer_email`, `gross_amount`, `payment_type`, `transaction_time`, `settlement_time`, `bank`, `va_numbers`, `status_message`, `pdf_url`, `transaction_status`, `status_code`, `transaction_id`, `finish_redirect_url`, `payment_code`) VALUES
('1985157764', 'Guest', 'guest@gmail.com', 100000, 'bank_transfer', '2023-07-17 13:07:13', NULL, 'bca', '25267030232', 'Transaksi sedang diproses', 'https://app.sandbox.midtrans.com/snap/v1/transactions/7e174da5-0c12-4d20-9a4c-e70c27c5bc81/pdf', 'pending', '201', NULL, 'http://example.com?order_id=1985157764&status_code=201&transaction_status=pending', NULL),
('639954343', 'Guest', 'guest@gmail.com', 100000, 'bank_transfer', '2023-07-17 13:05:05', NULL, 'bca', '25267077621', 'Transaksi sedang diproses', 'https://app.sandbox.midtrans.com/snap/v1/transactions/664e4e0e-19e7-408a-b719-2f4298bc47c4/pdf', 'pending', '201', NULL, 'http://example.com?order_id=639954343&status_code=201&transaction_status=pending', NULL),
('785451620', 'Guest', 'guest@gmail.com', 70000, 'bank_transfer', '2023-07-17 03:20:40', NULL, 'bca', '25267043197', 'Transaksi sedang diproses', 'https://app.sandbox.midtrans.com/snap/v1/transactions/60f7ce4d-efca-4f3b-b246-5e10db992c7e/pdf', 'pending', '201', NULL, 'http://example.com?order_id=785451620&status_code=201&transaction_status=pending', NULL),
('881610846', 'Guest', 'guest@gmail.com', 70000, 'bank_transfer', '2023-07-17 02:22:00', NULL, 'bca', '25267569536', 'Transaksi sedang diproses', 'https://app.sandbox.midtrans.com/snap/v1/transactions/cba4f40c-63ea-4cd5-b6b9-47b5f7786e94/pdf', 'pending', '201', NULL, 'http://example.com?order_id=881610846&status_code=201&transaction_status=pending', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_transaction`
--
ALTER TABLE `tb_transaction`
  ADD PRIMARY KEY (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
