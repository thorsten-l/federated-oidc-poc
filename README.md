# Federated OIDC Proof Of Concept with permanent redirect links

## Accounts

### KeyCloak Adminitrators

- user: admin
- password admin123

### ORG Users

- user: guser1, auser1, buser1
- password: user123

## Links

### Federated / Global
- IDP - [https://idp-global.dev.sonia.de:10443/](https://idp-global.dev.sonia.de:10443/)
- Redirect - https://redirect-global.dev.sonia.de:10444/?service-id=(service-id)&idp-hint=(idp-hint)

### Organization A
- IDP - [https://idp-org-a.dev.sonia.de:20443/](https://idp-org-a.dev.sonia.de:20443/)
- Web - [https://web-org-a.dev.sonia.de:20444/](https://web-org-a.dev.sonia.de:20444/)

### Organization B
- IDP - [https://idp-org-b.dev.sonia.de:30443/](https://idp-org-b.dev.sonia.de:30443/)
- Portal - [https://portal-org-b.dev.sonia.de:30444/](https://portal-org-b.dev.sonia.de:30444/)

### Services
- APP1 - [https://app1-service.dev.sonia.de:40443/](https://app1-service.dev.sonia.de:40443:40443/)
- Etherpad - [https://pad-service.dev.sonia.de:9001/](https://pad-service.dev.sonia.de:9001/)
- NextCloud - [https://cloud.dev.sonia.de/](https://cloud.dev.sonia.de/)

## /etc/hosts
```text
# Federated/Global IDP
# - https://<name>:10443,10444
127.0.0.1   idp-global.dev.sonia.de
127.0.0.1   redirect-global.dev.sonia.de

# Organization A, IDP and simple web page.
# - https://<name>:20443,20444
127.0.0.1   idp-org-a.dev.sonia.de
127.0.0.1   web-org-a.dev.sonia.de

# Organization B, IDP and OIDC portal 
# - https://<name>:30443,30444
127.0.0.1   idp-org-b.dev.sonia.de
127.0.0.1   portal-org-b.dev.sonia.de

# Service provider for application 1
# - https://<name>:40443,9001
127.0.0.1   app1-service.dev.sonia.de
127.0.0.1   pad-service.dev.sonia.de
127.0.0.1   cloud.dev.sonia.de
```
