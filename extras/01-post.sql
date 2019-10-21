PRAGMA foreign_keys = on;

drop table if exists etiquetas;
create table etiquetas (
    id_etiqueta		integer primary key AUTOINCREMENT,
    nombre			varchar(16) not null,
    estatus			varchar(1) not null check (estatus in ('f','t')) default 't'
);
create unique index if not exists etiquetas_nombre on etiquetas (nombre);

insert into etiquetas (nombre) values('HTML');
insert into etiquetas (nombre) values('CSS');
insert into etiquetas (nombre) values('JAVASCRIPT');
insert into etiquetas (nombre) values('PHP');
insert into etiquetas (nombre) values('SQL');
insert into etiquetas (nombre) values('LUA');
