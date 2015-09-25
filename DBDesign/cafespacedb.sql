CREATE TABLE posts (
	id int AUTO_INCREMENT NOT NULL PRIMARY KEY
	, title varchar(255) NOT NULL
	, category_id int
	, image  varchar(255)
	, content text
	, closed_at varchar(255)
	, delete_flag int NOT NULL DEFAULT 0
	, created timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
	, created_by varchar(255) DEFAULT 'system'
	, modified timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	, modified_by varchar(255) DEFAULT 'system'
);