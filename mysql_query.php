<?php 
'select mhs_nama from tb_mahasiswa m 
join tb_mahasiswa_nilai n 
on m.mhs_id = n.mhs_id
join tb_matakuliah mk 
on n.mk_id = mk.mk_id
where max(n.nilai)';
