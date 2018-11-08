--Crear nuevo usuario(esquema) con el password "PASSWORD" 
CREATE USER DB_UNAH
  IDENTIFIED BY "oracle"
  DEFAULT TABLESPACE USERS
  TEMPORARY TABLESPACE TEMP;
--asignar cuota ilimitada al tablespace por defecto  
ALTER USER DB_UNAH QUOTA UNLIMITED ON USERS;

--Asignar privilegios basicos
GRANT create session TO DB_UNAH;
GRANT create table TO DB_UNAH;
GRANT create view TO DB_UNAH;
GRANT create any trigger TO DB_UNAH;
GRANT create any procedure TO DB_UNAH;
GRANT create sequence TO DB_UNAH;
GRANT create synonym TO DB_UNAH;
GRANT create materialized view TO DB_UNAH;



para proyecto SQL

CREATE USER DB_SPOTIFY
  IDENTIFIED BY "oracle"
  DEFAULT TABLESPACE USERS
  TEMPORARY TABLESPACE TEMP;
ALTER USER DB_SPOTIFY QUOTA UNLIMITED ON USERS;

GRANT create session TO DB_SPOTIFY;
GRANT create table TO DB_SPOTIFY;
GRANT create view TO DB_SPOTIFY;
GRANT create any trigger TO DB_SPOTIFY;
GRANT create any procedure TO DB_SPOTIFY;
GRANT create sequence TO DB_SPOTIFY;
GRANT create synonym TO DB_SPOTIFY;
GRANT create materialized view TO DB_SPOTIFY;