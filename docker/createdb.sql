#
# Copy createdb.sql.example to createdb.sql
# then uncomment then set database name and username to create you need databases
#
# example: .env MYSQL_USER=appuser and needed db name is myshop_db
#
#    CREATE DATABASE IF NOT EXISTS `myshop_db` ;
#    GRANT ALL ON `myshop_db`.* TO 'appuser'@'%' ;
#
#
# this sql script will auto run when the mysql container starts and the $DATA_PATH_HOST/mysql not found.
#
# if your $DATA_PATH_HOST/mysql exists and you do not want to delete it, you can run by manual execution:
#
#     docker-compose exec mysql bash
#     mysql -u root < /docker-entrypoint-initdb.d/createdb.sql
#

#CREATE USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'root';
#GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost' WITH GRANT OPTION;
#CREATE USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY 'root';
#GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' WITH GRANT OPTION;

#CREATE DATABASE IF NOT EXISTS `ingresse` COLLATE 'utf8_general_ci' ;
#GRANT ALL ON `ingresse`.* TO 'root'@'%' ;
#FLUSH PRIVILEGES ;

CREATE DATABASE `ingresse`;
GRANT ALL ON `ingresse`.* TO 'root'@'%';