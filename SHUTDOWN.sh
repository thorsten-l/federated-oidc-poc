#!/bin/bash -v
docker compose -f service-nextcloud-compose.yaml down
docker compose -f service-compose.yaml down
docker compose -f org-b-compose.yaml down
docker compose -f org-a-compose.yaml down
docker compose -f global-compose.yaml down --remove-orphans
