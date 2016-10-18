CREATE TABLE `products` (
	`id` int NOT NULL,
	`name` varchar(100) NOT NULL,
	`price` tinyint NOT NULL,
	`options` varchar(100) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `orders` (
	`id` bigint NOT NULL,
	`customer_id` bigint NOT NULL,
	`date` TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `customer` (
	`id` bigint NOT NULL,
	`name` varchar(100) NOT NULL,
	`status` tinyint NOT NULL,
	`data` TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `status` (
	`id` tinyint NOT NULL,
	`name` varchar(25) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `orderProduct` (
	`id` bigint NOT NULL,
	`order_id` bigint NOT NULL,
	`product_id` bigint NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`customer_id`) REFERENCES `customer`(`id`);

ALTER TABLE `customer` ADD CONSTRAINT `customer_fk0` FOREIGN KEY (`status`) REFERENCES `status`(`id`);

ALTER TABLE `orderProduct` ADD CONSTRAINT `orderProduct_fk0` FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`);

ALTER TABLE `orderProduct` ADD CONSTRAINT `orderProduct_fk1` FOREIGN KEY (`product_id`) REFERENCES `products`(`id`);

