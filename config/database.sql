CREATE DATABASE mobilemoney;

USE mobilemoney;

CREATE TABLE IF NOT EXISTS agences (
    code_agence VARCHAR(4) NOT NULL PRIMARY KEY,
    nom_agence VARCHAR(100) NOT NULL
)ENGINE = InnoDB DEFAULT CHARSET = UTF8;

CREATE TABLE IF NOT EXISTS clients (
    num_client INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom_client VARCHAR(50) NOT NULL,
    prenom_client VARCHAR(50) NOT NULL,
    tel_client VARCHAR(10) NOT NULL
)ENGINE = InnoDB DEFAULT CHARSET = UTF8;

CREATE TABLE IF NOT EXISTS gerants (
    num_gerant INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom_gerant VARCHAR(50) NOT NULL,
    prenom_gerant VARCHAR(50) NOT NULL,
    tel_gerant VARCHAR(10) NOT NULL,
    agence_code VARCHAR(4),
    CONSTRAINT FOREIGN KEY(agence_code) REFERENCES agences(code_agence) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE = InnoDB DEFAULT CHARSET = UTF8;

CREATE TABLE IF NOT EXISTS transactions (
    id_transaction INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    date_transaction DATETIME,
    type_transaction VARCHAR(20),
    op_mobile VARCHAR(20),
    montant_transaction INT(9),
    statu_transaction VARCHAR(100),
    gerant_num INT(4),
    client_num INT UNSIGNED,
    CONSTRAINT FOREIGN KEY(gerant_num) REFERENCES gerants(num_gerant) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT FOREIGN KEY (client_num) REFERENCES clients(num_client) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE = InnoDB DEFAULT CHARSET = UTF8;


INSERT INTO agences(code_agence,nom_agence)
    VALUES ("A001", "Agence Abobo nouvelle gare"),
            ("A002", "Agence Adjamé gare nord"),
            ("A003", "Agence Yopougon sable");

INSERT INTO clients (num_client,nom_client,prenom_client,tel_client)
    VALUES (null, "Affoué", "Marie Anne", 0708112310),
            (null, "Samba", "Lamine", 0102013045),
            (null, "Fofana", "Hamed", 0788906321),
            (null, "Bakayoko", "Sekou", 0556758496),
            (null, "Gbayoro", "Chantal", 0554213986);

INSERT INTO gerants (num_gerant,nom_gerant,prenom_gerant,tel_gerant,agence_code)
    VALUES (null, "Kouame", "Maurice", 0545689574, "A001"),
            (null, "Konan", "Hermane", 0102036045, "A002"),
            (null, "Yao", "Marina", 0556839475, "A003");