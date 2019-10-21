PRAGMA foreign_keys = on;

drop table if exists usuarios;
create table usuarios (
    id_usuario		integer primary key AUTOINCREMENT,
    nombre			varchar(16) not null,
    contrasena		varchar(40) default null,
    estatus			varchar(1) not null check (estatus in ('f','t')) default 't'
);
create unique index if not exists usuarios_nombre on usuarios (nombre);

-- drop table if exists mensajes;
-- create table mensajes (
    -- id_mensaje		integer primary key AUTOINCREMENT,
    -- id_usuario		varchar(16) not null,
    -- datos			varchar(300) not null,
    -- estatus			varchar(1) not null check (estatus in ('f','t')) default 't'
-- );
