Create database AirAlliance;
create table vols (
    numero varchar(7),
    dateDepart date,
    dateArrivee date,
    prix float,
    place integer,
    primary key vols(numero)
);
create table lieux(
    id integer,
    aeroport varchar(30),
    pays varchar(30),
    numVol varchar (7),
    foreign key lieux(numVol) references vols(numero),
    primary key lieux(id)
);
