CREATE DATABASE IF NOT EXISTS pekerja;
CREATE DATABASE pegawai;
SHOW DATABASES;
DROP DATABASE IF EXISTS pekerja;
SHOW DATABASES;
USE pegawai;
CREATE TABLE pekerja(id_pegawai int NOT NULL AUTO_INCREMENT, nama_pegawai varchar(100), tgl_lahir date, foto varchar(100), keterangan TEXT, id_jabatan int, PRIMARY KEY(id_pegawai));
CREATE TABLE jabatan (id_jabatan int NOT NULL,nama_jabatan varchar(100));
RENAME TABLE pekerja TO pegawai;
DESC jabatan;
ALTER TABLE jabatan DROP nama_jabatan;
DESC jabatan;
ALTER TABLE jabatan ADD nama_jabatan varchar(150);
DESC jabatan;
ALTER TABLE jabatan ADD PRIMARY KEY (id_jabatan);
ALTER TABLE jabatan CHANGE id_jabatan id_jabatan int NOT NULL AUTO_INCREMENT;
SHOW TABLES;
DESC pegawai;
DESC jabatan;
INSERT INTO pegawai (nama_pegawai, tgl_lahir, id_jabatan)VALUES ('Bariq Firjatullah', '1945-03-18', 2);
INSERT INTO jabatan SET nama_jabatan = 'FRONT END DEVELOPER';
INSERT INTO jabatan VALUES (NULL, 'BACK END DEVELOPER');
SELECT * FROM pegawai;
UPDATE pegawai SET tgl_lahir='1997-03-18' WHERE id_pegawai = 1;
SELECT nama_pegawai, tgl_lahir FROM pegawai;
SELECT * FROM jabatan;
DELETE FROM jabatan WHERE id_jabatan = 1;
INSERT INTO jabatan SET nama_jabatan = 'FULL STACK DEVELOPER';
SELECT id_jabatan, nama_jabatan FROM jabatan;
SELECT YEAR(tgl_lahir) FROM pegawai;
SELECT YEAR(tgl_lahir) AS tanggal_lahir FROM pegawai;
SELECT DATE_FORMAT(tgl_lahir, '%W, %M %D, %Y') FROM pegawai;

SELECT pegawai.*, jabatan.* FROM pegawai, jabatan WHERE pegawai.id_jabatan = jabatan.id_jabatan;

SELECT * FROM pegawai INNER JOIN jabatan ON jabatan.id_jabatan = pegawai.id_jabatan;
SELECT * FROM pegawai LEFT JOIN jabatan ON jabatan.id_jabatan = pegawai.id_jabatan;
SELECT * FROM pegawai RIGHT JOIN jabatan ON jabatan.id_jabatan = pegawai.id_jabatan;

SELECT id_jabatan FROM pegawai;
SELECT * FROM jabatan WHERE id_jabatan IN ( SELECT id_jabatan FROM pegawai );
SELECT MAX(id_jabatan) FROM jabatan;
SELECT * FROM jabatan WHERE id_jabatan = (SELECT MAX(id_jabatan) from jabatan);

SELECT MAX(id_jabatan) AS id_teratas FROM jabatan WHERE id_teratas = 4;
SELECT MAX(id_jabatan) AS id_teratas FROM jabatan HAVING id_teratas = 4;