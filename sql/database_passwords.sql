DROP TABLE IF EXISTS passwords;

create table passwords (
	login VARCHAR(64) NOT NULL,
	password VARCHAR(256) NOT NULL,
	PRIMARY KEY (login)
);

-- Add root user with admin password
INSERT INTO passwords VALUES('root', '$2y$10$5GDrnrhZNBtxM3QQP1/uFe9IqDsv6C1TvofwZEj.FBG5bJI0QqZDO');

-- Add alpha user with beta password
INSERT INTO passwords VALUES('alpha', '$2y$10$SdBEADeB3HwaEiaYHSCJPOGYqOnGH2JXXfgZNJS4OsRkO9.cDiJee');

-- Add abc user with def password
INSERT INTO passwords VALUES('abc', '$2y$10$2qf/vwZVmdXOcyRGSzH8Ces2h7a0yLxy9VkTDz4cm6EWY1y96699K');
