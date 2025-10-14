#!/bin/bash -v
echo "Starting up the network and global idp..."
docker compose -f global-compose.yaml up -d
sleep 3
echo "Starting up org a..."
docker compose -f org-a-compose.yaml up -d
sleep 3
echo "Starting up org b..."
docker compose -f org-b-compose.yaml up -d
sleep 3
docker compose -f service-compose.yaml up -d
