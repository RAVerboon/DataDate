CREATE TABLE users (
	username		TEXT		NOT NULL,
	password		TEXT		NOT NULL,
	real_name		TEXT		NOT NULL,
	email			TEXT		NOT NULL,
	birthday		TEXT		NOT NULL,
	gender			INTEGER		NOT NULL,
	other_gender	INTEGER		NOT NULL,
	min_age			INTEGER 	NOT NULL,
	max_age			INTEGER		NOT NULL,
	description		TEXT		NOT NULL,
	personality		TEXT		NOT NULL,
	pref_pers		TEXT		NOT NULL,
	PRIMARY KEY (username)
);

CREATE TABLE likes (
	user_one		TEXT		NOT NULL,
	likes_two		TEXT		NOT NULL,
	FOREIGN KEY (user_one) REFERENCES users(username),
	FOREIGN KEY (likes_two) REFERENCES users(username)
);

