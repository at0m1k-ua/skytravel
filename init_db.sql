drop database if exists skytravel;
create database skytravel;
use skytravel;

drop table if exists cities;
create table cities (
	id int primary key auto_increment,
	name text
);

drop table if exists travels;
create table travels (
	id int not null primary key auto_increment,
	name text not null,
	name_japanese text not null,
	description text not null,
	is_premiere bool not null,
	card_image_url text not null,
	page_image_url text not null,
	start_date date not null,
	end_date date not null,
	price int not null
);

drop table if exists travel_city;
create table travel_city (
	travel_id int not null,
	city_id int not null,
	primary key (travel_id, city_id),
	foreign key (travel_id) references travels (id) on delete cascade,
	foreign key (city_id) references cities (id) on delete cascade
);

drop table if exists orders;
create table orders (
	id bigint not null primary key auto_increment,
	name text not null,
	phone text not null,
	email text not null,
	travel_id int not null,
	updated_at timestamp not null default now(),
	created_at timestamp not null default now(),
	foreign key (travel_id) references travels (id) on delete cascade
);

-- *******************************************************************

insert into cities (name) values
('Токіо'), ('Осака'), ('Хіросіма'), ('Кіото');

insert into travels (
	name,
	name_japanese,
	description,
	is_premiere,
	card_image_url,
	page_image_url,
	start_date,
	end_date,
	price
) values (
	'Сакура Японії - весни чарівність',
	'日本の桜 - 春の魅力',
	'<p><b>Авторський тур в Японію на сакуру 2023 - </b>найкращі місця милування сакурою</p>
    <br>
    <p>Переваги подорожі:</p>
    <ul>
        <li>міні-група не більше 10 осіб;</li>
        <li>унікальний авторський маршрут;</li>
        <li>6 екскурсій у супроводі україномовних гідів;</li>
        <li>2 ночівлі в Кіото і 1 ніч в рьокані в одному з найстаріших онсенів в Японії;</li>
        <li>9 сніданків, 3 обіди, 1 вечеря в стилі кайсекі рьорі;</li>
        <li>увага кожному туристу, путівник Японією і тепла атмосфера гарантовані!</li>
    </ul>',
    true,
    '/images/sakura.png',
    '/images/sakura-big.png',
    '2023-03-28',
    '2023-04-07',
    111800
);

insert into travel_city (travel_id, city_id)
select
	travels.id as travel_id,
	cities.id as city_id
from travels cross join cities
;

