
docker run -it -d \
  --label traefik.http.routers.burtonpharmacy.rule=Host\(\`burtonpharmacy.phamasoft.com\`\) \
  --label traefik.http.routers.burtonpharmacy.tls.certresolver=lets-encrypt \
  --label traefik.http.routers.burtonpharmacy.tls=true \
  --label traefik.http.routers.burtonpharmacy.service=burtonpharmacy-credit-http \
  --label traefik.http.services.burtonpharmacy-credit-http.loadbalancer.server.port=80 \
  --name burtonpharmacy \
  --network web \
  --restart always \
  --expose 80 \
   emasanga/mikoposoft:may13 