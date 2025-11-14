<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Relaciones del modelo Aula Inteligente

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