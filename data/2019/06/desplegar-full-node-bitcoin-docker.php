<?php /* md
[title]:              # "Despliega un full node de Bitcoin en 30 segundos con Docker"
[datetime]:           # "2019-06-16 23:30:00"
[description]:        # "En este post explico cómo desplegar un nodo de Bitcoin que sincronice la blockchain con un solo comando."
[keywords]:           # "bitcoin, full node, docker, desplegar"
[image_file]:         # "https://blog.brunneis.com/img/og/brunneis.jpg"
[image_description]:  # "Brunneis' logo"

# Despliega un full node de Bitcoin en 30 segundos con Docker

[[DATE]]

En este post no voy a entrar en detalles, pero lo haré más adelante, explicando
cómo configurarlo y conectarnos a él a través de su interfaz JSON-RPC. 

Ya que no se abrirá ningún puerto, el contenedor Docker únicamente descargará
la blockchain de Bitcoin pero no podrá servir datos a otros nodos.

Al lío 😉. Partiendo de una máquina GNU/linux con Docker instalado, podemos lanzar nuestro
propio _full node_ de la siguiente forma:
```bash
docker run -d \
-v "$(pwd)"/bitcoin-data:/root/.bitcoin \
--name bitcoin-core \
brunneis/bitcoin-core
```

Para poder visualizar el estado de la sincronización podemos ejecutar el
siguiente comando:

```bash
docker exec -ti bitcoin-core watch bitcoin-cli getblockchaininfo
```

Con lo que deberíamos obtener una salida similar a la siguiente:

```
{
  "chain": "main",
  "blocks": 16914,
  "headers": 581024,
  "bestblockhash": "0000000028c8358d5ceaa730d2aaec5442f26301f474e9ae9c94ae9b547b162c",
  "difficulty": 1,
  "mediantime": 1244720446,
  "verificationprogress": 3.79770142589058e-05,
  "initialblockdownload": true,
  "chainwork": "0000000000000000000000000000000000000000000000000000421342134213",
  "size_on_disk": 4638196,
  "pruned": false,
  "softforks": [
    {
      "id": "bip34",
      "version": 2,
      "reject": {
        "status": false
      }
    },
    {
      "id": "bip66",
      "version": 3,
      "reject": {
        "status": false
      }
    },
    {
      "id": "bip65",
      "version": 4,
      "reject": {
        "status": false
      }
    }
  ],
  "bip9_softforks": {
    "csv": {
      "status": "defined",
      "startTime": 1462060800,
      "timeout": 1493596800,
      "since": 0
    },
    "segwit": {
      "status": "defined",
      "startTime": 1479168000,
      "timeout": 1510704000,
      "since": 0
    }
  },
  "warnings": ""
}
```

Fin.
