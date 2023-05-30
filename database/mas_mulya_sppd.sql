/*
 Navicat Premium Data Transfer

 Source Server         : MY LOCAL
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : mas_mulya_sppd

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 28/05/2023 12:43:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for alamat_skpd
-- ----------------------------
DROP TABLE IF EXISTS `alamat_skpd`;
CREATE TABLE `alamat_skpd`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_skpd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of alamat_skpd
-- ----------------------------
INSERT INTO `alamat_skpd` VALUES (1, 'DINAS SOSIAL', '	Jl. MT. Haryono No. 64 Telp./Fax (0283) 6177495 Telp. (0283) 673122', 'BREBES - 52212', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for kendaraan
-- ----------------------------
DROP TABLE IF EXISTS `kendaraan`;
CREATE TABLE `kendaraan`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `no_pol` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_aktif` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kendaraan
-- ----------------------------
INSERT INTO `kendaraan` VALUES (1, 'G 23 G', 'Aktif', NULL, NULL, NULL);
INSERT INTO `kendaraan` VALUES (2, 'G 137 G', 'Pasif', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 133 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (121, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (122, '2023_05_25_052511_user_group', 1);
INSERT INTO `migrations` VALUES (123, '2023_05_25_052512_user', 1);
INSERT INTO `migrations` VALUES (124, '2023_05_25_052513_skpd', 1);
INSERT INTO `migrations` VALUES (125, '2023_05_25_052535_pns', 1);
INSERT INTO `migrations` VALUES (126, '2023_05_25_053007_kendaraan', 1);
INSERT INTO `migrations` VALUES (127, '2023_05_25_053100_alamat_skpd', 1);
INSERT INTO `migrations` VALUES (128, '2023_05_25_053155_pejabat', 1);
INSERT INTO `migrations` VALUES (129, '2023_05_25_054101_sppd', 1);
INSERT INTO `migrations` VALUES (130, '2023_05_25_054112_sppd_pengikut', 1);
INSERT INTO `migrations` VALUES (131, '2023_05_25_153815_history_print_sppd', 1);
INSERT INTO `migrations` VALUES (132, '2023_05_25_154200_history_print_sppd_pengikut', 1);

-- ----------------------------
-- Table structure for pejabat
-- ----------------------------
DROP TABLE IF EXISTS `pejabat`;
CREATE TABLE `pejabat`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `tahun` int NOT NULL,
  `nip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_sebenarnya` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_aktif` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pejabat_user_id_foreign`(`user_id` ASC) USING BTREE,
  CONSTRAINT `pejabat_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pejabat
-- ----------------------------
INSERT INTO `pejabat` VALUES (1, 2, 2023, '19650404 199203 1 014', 'Drs. MASFURI, MM', 'Pembina Utama Muda', 'Kepala Dinas Sosial', '', 'Pasif', 'Tingkat B', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for pns
-- ----------------------------
DROP TABLE IF EXISTS `pns`;
CREATE TABLE `pns`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gol` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `pangkat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `eselon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tingkat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `pns_nip_unique`(`nip` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pns
-- ----------------------------
INSERT INTO `pns` VALUES (1, '19650404 199203 1 014', 'Drs. MASFURI, MM', 'IV/c', 'Pembina Utama Muda', 'Kepala Dinas Sosial Kabupaten Brebes', 'II/b', 'Tingkat B', NULL, NULL, NULL);
INSERT INTO `pns` VALUES (2, '19670623 199003 1 002', 'FATKHUROHMAN, SE', 'III/d', 'Pembina Utama Muda', 'Kasubbag Program dan Keuangan', 'IV/a', 'Tingkat C', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for skpd
-- ----------------------------
DROP TABLE IF EXISTS `skpd`;
CREATE TABLE `skpd`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `skpd_kode_unique`(`kode` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of skpd
-- ----------------------------
INSERT INTO `skpd` VALUES (1, 'A593', 'Dinas Sosial Jawa Timur', NULL, NULL, NULL);
INSERT INTO `skpd` VALUES (2, 'A592', '	Kecamatan Brebes dan Kecamatan Losari', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for sppd
-- ----------------------------
DROP TABLE IF EXISTS `sppd`;
CREATE TABLE `sppd`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `pns_id` bigint UNSIGNED NOT NULL,
  `skpd_id` bigint UNSIGNED NOT NULL,
  `kendaraan_id` bigint UNSIGNED NOT NULL,
  `dibuat_oleh` bigint UNSIGNED NOT NULL,
  `perdin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_agenda` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `tanggal_sppd` date NOT NULL,
  `dari_anggaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengelola` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_persetujuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_surat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `sppd_pns_id_foreign`(`pns_id` ASC) USING BTREE,
  INDEX `sppd_skpd_id_foreign`(`skpd_id` ASC) USING BTREE,
  INDEX `sppd_kendaraan_id_foreign`(`kendaraan_id` ASC) USING BTREE,
  INDEX `sppd_dibuat_oleh_foreign`(`dibuat_oleh` ASC) USING BTREE,
  CONSTRAINT `sppd_dibuat_oleh_foreign` FOREIGN KEY (`dibuat_oleh`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `sppd_kendaraan_id_foreign` FOREIGN KEY (`kendaraan_id`) REFERENCES `kendaraan` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `sppd_pns_id_foreign` FOREIGN KEY (`pns_id`) REFERENCES `pns` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `sppd_skpd_id_foreign` FOREIGN KEY (`skpd_id`) REFERENCES `skpd` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sppd
-- ----------------------------
INSERT INTO `sppd` VALUES (1, 1, 1, 1, 1, 'Dalam', '1000', 2023, '2023-05-28', '2023-05-28', '2023-05-28', 'Dana Bansos', 'Pengiriman Logistik Bencana Banjir di Kecamatan Jatibarang', 'SEKRETARIAT', 'Setujui', '094 / 1000 / V / 2023', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for sppd_pengikut
-- ----------------------------
DROP TABLE IF EXISTS `sppd_pengikut`;
CREATE TABLE `sppd_pengikut`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `sppd_id` bigint UNSIGNED NOT NULL,
  `pns_id` bigint UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `sppd_pengikut_sppd_id_foreign`(`sppd_id` ASC) USING BTREE,
  INDEX `sppd_pengikut_pns_id_foreign`(`pns_id` ASC) USING BTREE,
  CONSTRAINT `sppd_pengikut_pns_id_foreign` FOREIGN KEY (`pns_id`) REFERENCES `pns` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `sppd_pengikut_sppd_id_foreign` FOREIGN KEY (`sppd_id`) REFERENCES `sppd` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sppd_pengikut
-- ----------------------------
INSERT INTO `sppd_pengikut` VALUES (1, 1, 2, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_group_id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_user_group_id_foreign`(`user_group_id` ASC) USING BTREE,
  CONSTRAINT `user_user_group_id_foreign` FOREIGN KEY (`user_group_id`) REFERENCES `user_group` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 1, 'admin', '$2y$10$JCNGMkinUElLeURR2BCpDOKVZs6FIw0OOVZGsUo3cUm43asu7DVua', NULL, NULL, NULL);
INSERT INTO `user` VALUES (2, 2, 'kepala_dinas', '$2y$10$Pa4Vg4Q/GOVwBbq0XrDIDOh2mgmvF.MkoVT7zASo3CNaYnSnkjYke', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for user_group
-- ----------------------------
DROP TABLE IF EXISTS `user_group`;
CREATE TABLE `user_group`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_group
-- ----------------------------
INSERT INTO `user_group` VALUES (1, 'ADMIN');
INSERT INTO `user_group` VALUES (2, 'KEPALA DINAS');

SET FOREIGN_KEY_CHECKS = 1;
