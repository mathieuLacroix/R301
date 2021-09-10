DROP TABLE IF EXISTS personnages;

create table personnages (
	id SERIAL,
	nom VARCHAR(256) NOT NULL,
	prenom VARCHAR(256) NOT NULL,
	age INT,
	PRIMARY KEY (id)
);


INSERT INTO personnages (id, nom, prenom, age) VALUES (DEFAULT, 'Simpson'   , 'Homer'    , 38  );
INSERT INTO personnages (id, nom, prenom, age) VALUES (DEFAULT, 'Simpson'   , 'Marge'    , 34  );
INSERT INTO personnages (id, nom, prenom, age) VALUES (DEFAULT, 'Simpson'   , 'Bart'     , 10  );
INSERT INTO personnages (id, nom, prenom, age) VALUES (DEFAULT, 'Simpson'   , 'Lisa'     ,  8  );
INSERT INTO personnages (id, nom, prenom, age) VALUES (DEFAULT, 'Simpson'   , 'Maggie'   ,  1  );
INSERT INTO personnages (id, nom, prenom, age) VALUES (DEFAULT, 'Flanders'  , 'Ned'      , 60  );
INSERT INTO personnages (id, nom, prenom, age) VALUES (DEFAULT, 'Flanders'  , 'Todd'     ,  8  );
INSERT INTO personnages (id, nom, prenom, age) VALUES (DEFAULT, 'Flanders'  , 'Rod'      , 10  );
INSERT INTO personnages (id, nom, prenom, age) VALUES (DEFAULT, 'Van Houten', 'Kirk'     , NULL);
INSERT INTO personnages (id, nom, prenom, age) VALUES (DEFAULT, 'Van Houten', 'Milhouse' , NULL);
INSERT INTO personnages (id, nom, prenom, age) VALUES (DEFAULT, 'Van Houten', 'Luann'    , NULL);
INSERT INTO personnages (id, nom, prenom, age) VALUES (DEFAULT, 'Muntz'     , 'Nelson'   , NULL);
INSERT INTO personnages (id, nom, prenom, age) VALUES (DEFAULT, 'Muntz'     , 'Véronica' , NULL);
INSERT INTO personnages (id, nom, prenom, age) VALUES (DEFAULT, 'Muntz'     , 'Thomas Jr', NULL);
INSERT INTO personnages (id, nom, prenom, age) VALUES (DEFAULT, 'Lovejoy'   , 'Timothy'  , NULL);
INSERT INTO personnages (id, nom, prenom, age) VALUES (DEFAULT, 'Burns'     , 'Charles'  , NULL);
