# MySQL PHP demo

Demo php app for testing MySQL connection

## Docker

There is a simple Dockerfile and the image is on DockerHub as well.

```bash
docker run --name phpdemo --restart unless-stopped -d -p 8080:80 -e DATABASE_SERVER=mysqlhost -e DATABASE_USER=username -e DATABASE_PASS=password -e DATABASE_DB=dbname mysqlphpdemo
```
