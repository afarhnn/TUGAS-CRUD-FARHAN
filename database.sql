CREATE DATABASE IF NOT EXISTS db_dosen;
USE db_dosen;

CREATE TABLE IF NOT EXISTS dosen (
    nidn VARCHAR(20) PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    jabatan VARCHAR(50) NOT NULL,
    kepakaran VARCHAR(100) NOT NULL
);

INSERT INTO dosen (nidn, nama, jabatan, kepakaran) VALUES
('081277238276', 'Prof. Suyanto, S.Kom., M.Kom.', 'Rektor', 'Artificial Intelegence'),
('081276535312', 'Rahmat Mulyana, S.Kom., M.Kom.', 'Dosen', 'Sistem Basis Data');
