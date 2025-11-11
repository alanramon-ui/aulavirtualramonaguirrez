Relación entre Aula y Reserva
Uno a muchos (1:N)
lado que posee la relación: aula define hasMany(Reserva::class)
lado que pertenece: reserva define belongsTo(Aula::class)
una aula puede ser reservada muchas veces en distintas fechas y horarios, pero cada reserva corresponde a una única aula

Relación entre aula y CambioAula
(1:N)
lado que posee la relación: aula → define hasMany(CambioAula::class)
lado que pertenece: CambioAula → define belongsTo(aula::class)
cada vez que se reporta un cambio, o sea foco, silla, cortina, etc. ese registro es asociado a una única aula que  puede acumular múltiples datos a lo largo del tiempo.