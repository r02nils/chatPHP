DROP DATABASE chatdb;
CREATE DATABASE IF NOT EXISTS chatdb;
USE chatdb;

/*Table und Referenzen kreiren*/

CREATE TABLE UserT(
  user_id SERIAL PRIMARY KEY,
  name VARCHAR(255),
  email VARCHAR(255),
  password VARCHAR(255)
);

CREATE TABLE GroupT(
  group_id SERIAL PRIMARY KEY,
  group_name VARCHAR(255)
);

CREATE TABLE Group_UserT(
  group_user_id SERIAL PRIMARY KEY,
  group_id BIGINT UNSIGNED NOT NULL,
  user_id BIGINT UNSIGNED NOT NULL,
  FOREIGN KEY(group_id) REFERENCES GroupT(group_id) ON DELETE CASCADE,
  FOREIGN KEY(user_id) REFERENCES UserT(user_id) ON DELETE CASCADE
);

CREATE TABLE MessageT(
  message_id SERIAL PRIMARY KEY,
  user_id BIGINT UNSIGNED NOT NULL,
  group_id BIGINT UNSIGNED NOT NULL,
  content VARCHAR(1020),
  mDate timestamp,
  FOREIGN KEY(user_id) REFERENCES UserT(user_id) ON DELETE CASCADE,
  FOREIGN KEY(group_id) REFERENCES GroupT(group_id) ON DELETE CASCADE
);
