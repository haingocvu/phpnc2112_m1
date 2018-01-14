CALL new_procedure();

DROP PROCEDURE  IF EXISTS new_procedure;

DROP PROCEDURE  IF EXISTS TinhTong;

-- CREATE PROCEDURE `TinhTong`()
-- BEGIN
--     DECLARE x INT;
--     DECLARE y,tong int;
--     SET x = 10;
--     SET y = 12;
--     SET tong = x+y;
--     SELECT tong;
-- END;
-- 

CREATE PROCEDURE `TINH_TONG` (IN x INT, IN y INT)
BEGIN
	DECLARE tong int;
	SET tong = x+y;
    SELECT tong;
END;

CALL TINH_TONG(8,3);

CREATE PROCEDURE `DeleteUserById` (IN idUser INT)
BEGIN
		DELETE FROM users WHERE id = idUser;
        SELECT * FROM users;
END;


CALL `phpnc2112`.`DeleteUserById`(42);

CREATE DEFINER=`root`@`localhost` PROCEDURE `checkUsernameBeforeInsert`(IN un VARCHAR(100))
BEGIN
	DECLARE mess VARCHAR(100);
    SET mess = (SELECT count(username) FROM users WHERE username = un);
    IF mess >0
		THEN 
			SET mess = "Da ton tai username";
			SELECT mess;
	ELSE 
		INSERT INTO users(username, password) VALUES (un, "1234567");
        SELECT * FROM users WHERE username = un;
    END IF;
    
END;


CALL checkUsernameBeforeInsert('admin132')



