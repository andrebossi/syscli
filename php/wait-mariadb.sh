#!/bin/sh
# wait-mariadb.sh

set -e

host="$1"
shift
cmd="$@"

until nc -z -v -w30 $host 3306
do
  >&2 echo "mariaDB is unavailable - sleeping"
  sleep 10
done

>&2 echo "MariaDB is up - executing command"
exec $cmd