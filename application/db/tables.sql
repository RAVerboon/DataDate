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

CREATE TABLE brands (
	id				INTEGER 	NOT NULL,
	name 			TEXT		NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE user_brands (
	id				INTEGER		NOT NULL,
	username		TEXT		NOT NULL,
	FOREIGN KEY (id) REFERENCES brands(id),
	FOREIGN KEY (username) REFERENCES users(username)
)

CREATE TABLE chat (
	user_one		TEXT		NOT NULL,
	user_two		TEXT		NOT NULL,
	message			TEXT		NOT NULL,
	time			TEXT		NOT NULL,
	FOREIGN KEY (user_one) REFERENCES users(username),
	FOREIGN KEY (user_two) REFERENCES users(username)
)