
create table topic (
	id int not null auto_increment primary key comment "連番",
	title varchar(50) not null  comment "タイトル",
	topic varchar(255) not null  comment "最新情報",
	contribution timestamp  not null  comment "投稿時間",
	editTime timestamp comment "編集時間"
);

CREATE DATABASE bi_nasu_db default character set utf8;

insert into topic (title, topic, contribution) values
	("ほげ", "ほげえええええええええええええええええええええええええええええええええええええええええええ", NOW()),
	("aaaaaaaaaaaaaaaa", "fffffffffffffffa", NOW()),
	("fawfawfwa", "awafawfafawf", NOW()),
	("333333333333333333", "444444444444", NOW()),
	("1111111111111", "ttttttttt", NOW());