create table matakuliah (
kode char(5) not null primary key,
nama varchar(30),
sks int
);
insert into matakuliah values('MK001', 'Algoritma dan Pemrograman', 2);
insert into matakuliah values('MK002', 'Sistem Operasi', 1);
insert into matakuliah values('MK003', 'Pengembangan AplikasiWeb', 2);
insert into matakuliah values('MK004', 'Pemrograman Berorientasi Objek', 2);
insert into matakuliah values('MK005', 'Praktikum Pengembangan Aplikasi Web', 2);