SELECT a.id,a.typ,a.name,a.kol,a.name_inout,a.markirovka,b.npp,b.name,b.foto_val
FROM spisok a
left outer join prg_rem_foto b on a.id=b.idsp
order by a.typ,a.name;