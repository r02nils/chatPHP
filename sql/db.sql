DROP DATABASE chatdb;
CREATE DATABASE IF NOT EXISTS chatdb;
USE chatdb;

/*Table und Referenzen kreiren*/

CREATE TABLE usert(
  user_id SERIAL PRIMARY KEY,
  name VARCHAR(255),
  email VARCHAR(255),
  password VARCHAR(255)
);

CREATE TABLE groupt(
  group_id SERIAL PRIMARY KEY,
  group_name VARCHAR(255)
);

CREATE TABLE group_usert(
  group_user_id SERIAL PRIMARY KEY,
  group_id BIGINT UNSIGNED NOT NULL,
  user_id BIGINT UNSIGNED NOT NULL,
  FOREIGN KEY(group_id) REFERENCES groupt(group_id) ON DELETE CASCADE,
  FOREIGN KEY(user_id) REFERENCES usert(user_id) ON DELETE CASCADE
);

CREATE TABLE messaget(
  message_id SERIAL PRIMARY KEY,
  user_id BIGINT UNSIGNED NOT NULL,
  group_id BIGINT UNSIGNED NOT NULL,
  content VARCHAR(1020),
  mDate timestamp,
  FOREIGN KEY(user_id) REFERENCES usert(user_id) ON DELETE CASCADE,
  FOREIGN KEY(group_id) REFERENCES groupt(group_id) ON DELETE CASCADE
);
