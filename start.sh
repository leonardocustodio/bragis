#!/usr/bin/env bash
docker stop bragis; docker rm bragis; docker run -d --name=bragis -p 3021:8080 -e 'VIRTUAL_PORT=8080' -e 'LETSENCRYPT_EMAIL=contato@inovatso.com.br' -e 'LETSENCRYPT_HOST=bragis.com.br,www.bragis.com.br' -e 'VIRTUAL_HOST=bragis.com.br,www.bragis.com.br' --network experio bragis
