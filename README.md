# symfony_issues

docker run --name mysql_container -p 3309:3306 -e MYSQL_ROOT_PASSWORD=root -e MYSQL_DATABASE=symfony_issues mysql

docker exec -it mysql_container bash
