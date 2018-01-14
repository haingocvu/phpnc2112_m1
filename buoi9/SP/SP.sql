CREATE PROCEDURE getAllUser() 
    -- lenh thuc thi
    INSERT INTO users VALUES (8,'ADMIN7','111','1234 Le THN','0912345678','2018-12-21');
    SELECT * FROM users;


CREATE PROCEDURE `selectUser`() 
SELECT * FROM users

DROP PROCEDURE  IF EXISTS TinhTong;

CALL TinhTong()

CREATE PROCEDURE `TINH_TONG` (IN x INT, IN y INT)
BEGIN
	DECLARE tong int;
	SET tong = x+y;
    SELECT tong;
END;

CALL TINH_TONG(2,3);