CREATE TABLE `phpnc2112`.`bills` ( `id` INT NOT NULL AUTO_INCREMENT , `customer_id` INT NOT NULL , `total` FLOAT NOT NULL , `quantity` INT NOT NULL , `date_create` DATETIME NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TRIGGER "name"
BEFORE INSERT 
ON users
FOR EACH ROW
BEGIN
	IF NEW.birthdate >= now()
		THEN
			signal sqlstate "45000"
			SET message_text  = "Ngay sinh khong dung";
		END IF;

END;


INSERT INTO `products` (`id`, `name`, `price`, `quantity`) VALUES 
(NULL, 'Sản phẩm 2', '122121', '22'),
(NULL, 'Sản phẩm 3', '122121', '21'),
(NULL, 'Sản phẩm 4', '122121', '2');


/**

- when? sau khi insert vao bill_detail,
- on table? bill_detail
- what do? 
    + if ko  du sl thi thong bao ko du sl
    + tru so luong trong products
    + 

NEW.product_id 

*/

--bill_detail: id, bill_id, product_id, quantity

CREATE TRIGGER "checkQty"
AFTER INSERT 
ON bill_detail
FOR EACH ROW
BEGIN
    IF NEW.quantity > 
        (SELECT quantity FROM products WHERE id=NEW.product_id)
    THEN
        signal sqlstate "45000"
		SET message_text  = "Khong du so luong";
    ELSE
        UPDATE products 
        SET quantity = quantity - NEW.quantity
        WHERE id = NEW.product_id;
    END IF;
END;

-- Kiem tra product_id ton tai trong bang products truoc khi insert vafo bang bill_detail
CREATE TRIGGER "checkProductId"
BEFORE INSERT 
ON bill_detail
FOR EACH ROW
BEGIN
    IF NEW.product_id NOT IN
        (SELECT id FROM products)
    THEN
        signal sqlstate "45000"
		SET message_text  = "khong ton tai san pham nay";
    END IF;
END;


-- nếu có hành động chỉnh sửa hoặc xoá tác động lên table users thì phải lưu lại data cũ (tạo ra bảng user_backup, lưu thông tin cũ ở table đó)
CREATE TRIGGER "backupUser"
AFTER UPDATE 
ON users
FOR EACH ROW
BEGIN
    INSERT INTO users_backup(user_id,username,password,address,phone,birthdate,created_date)
    VALUES(OLD.id, OLD.username,OLD.password,OLD.address,OLD.phone,OLD.birthdate,OLD.created_date);
END;
CREATE TRIGGER "backupUser_2"
AFTER DELETE 
ON users
FOR EACH ROW
BEGIN
    INSERT INTO users_backup(user_id,username,password,address,phone,birthdate,created_date)
    VALUES(OLD.id, OLD.username,OLD.password,OLD.address,OLD.phone,OLD.birthdate,OLD.created_date);
END;

-- https://getcomposer.org/

--http://online.khoapham.vn/php/121-lap-trinh-php--khoa-hoc-lap-trinh-laravel-framework-tai-khoaphamvn/1358-bai-3--cai-dat-composer.html