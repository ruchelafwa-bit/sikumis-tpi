CREATE DATABASE buku_tamu;
USE buku_tamu;

CREATE TABLE tamu (
  id INT AUTO_INCREMENT PRIMARY KEY,
  waktu TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  nik VARCHAR(20),
  nama VARCHAR(100),
  alamat TEXT,
  telepon VARCHAR(20),
  instansi VARCHAR(100),
  bertemu VARCHAR(100),
  tujuan VARCHAR(200),
  rombongan ENUM('Individu','Rombongan'),
  petugas ENUM('Wahono','Rizky','Fatony','Idris','Dayat','Firdaus','Sony','Darmawansyah','Putu','Ontong','M.Kurniawan','Suyatni','Badri','Sigit','Andri','SriAyuni','Isti','Junaidi'),
  foto VARCHAR(255)
);

CREATE TABLE admin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) UNIQUE,
  password VARCHAR(255)
);

-- Buat akun admin default (username: admin, password: admin123)
INSERT INTO admin (username, password) VALUES ('admin', MD5('admin123'));
