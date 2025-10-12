#!/bin/bash
# docker compose -f service-compose.yaml down
docker compose -f org-b-compose.yaml down
sleep 3
docker compose -f org-a-compose.yaml down
sleep 3
docker compose -f global-compose.yaml down --remove-orphans
