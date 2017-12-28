FROM mysql:5.6

COPY web/johan.sql /docker-entrypoint-initdb.d/
