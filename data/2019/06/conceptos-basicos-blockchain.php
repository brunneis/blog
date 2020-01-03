<?php /* md
[title]:              # "Conceptos básicos para comprender blockchain"
[datetime]:           # "2019-06-17 21:30:00"
[description]:        # "Este es el primer post de una serie para comprender el funcionamiento y propiedades de las tecnología blockchain."
[keywords]:           # "blockchain, hash, rsa, firma digital, criptografía"
[image_file]:         # "https://blog.brunneis.com/img/og/brunneis.jpg"
[image_description]:  # "Brunneis' logo"

# Conceptos básicos para comprender blockchain
[[DATE]]

![Cover image](https://brunneis.com/img/blog/2019/06/conceptos-basicos-blockchain/cover.jpg){.cover}

Para comprender los fundamentos básicos del funcionamiento de las cadenas de bloques es necesario comprender primero algunos conceptos sobre la criptografía asimétrica, la definición de hash, la firma digital y las redes P2P.

El cifrado de información ha evolucionado a lo largo de la historia con técnicas cada vez más seguras, pero siempre con un nexo común: la clave utilizada tanto para cifrar un mensaje como para descifrarlo era la misma (criptografía simétrica) y existía un riesgo a la hora de compartir la clave secreta entre el emisor y el receptor. En 1976 se diseña un protocolo criptográfico con el que era posible, por primera vez, intercambiar una clave secreta (aunque no arbitraria) entres dos partes a través de un canal no seguro (Diffie & Hellman, 1976). Dos años más tarde, se patenta por primera vez un sistema criptográfico asimétrico o de clave pública denominado RSA (Rivest, Shamir, & Adleman, 1978).

En la criptografía asimétrica se utilizan dos claves en lugar de una. Las claves están relacionadas matemáticamente de tal modo que un contenido cifrado con una de las claves puede ser descifrado con la otra. Una de las claves se denomina pública y puede ser compartida abiertamente en canales no seguros. La clave privada, como su nombre indica, debe permanecer en secreto. En la actualidad, siempre y cuando se cumplan ciertos requisitos, resulta imposible tratar de obtener una clave privada a partir de la clave pública correspondiente. Debido a las propiedades de reciprocidad de cada par de claves surgen dos casos de uso: cifrado y firma digital, aunque no todos los sistemas criptográficos asimétricos estén diseñados para ambos fines (por ejemplo, el protocolo ECDSA utilizado en Bitcoin solo contempla la firma digital).

Es posible cifrar un mensaje asegurándonos de que solo una determinada persona o entidad pueda leerlo. Bastaría con cifrar el mensaje con la clave pública del receptor (que previamente ha comunicado). Solo alguien con la clave privada correspondiente (el receptor) podrá descifrar el mensaje. En segundo lugar, es posible utilizar la clave privada para obtener una firma electrónica de un contenido digital que podrá ser verificada a través de la clave pública correspondiente. Si el conjunto de claves es proporcionado o validado por una autoridad de confianza tras un proceso de acreditación, la clave pública podría considerarse ligada a una identidad real.

Un hash criptográfico, también conocido como huella digital criptográfica o resumen criptográfico, es el resultado de transformar un contenido digital de cualquier tamaño en otro de tamaño fijo, de tal forma que sea inviable recuperar el contenido original a través de este (al igual que sucede con un libro y su resumen), que una mínima variación en el contenido produzca otro hash totalmente distinto, que siempre se obtenga el mismo hash a partir del mismo contenido (proceso determinista), y que sea extremadamente difícil encontrar un segundo contenido que produzca el mismo resumen (resistente a colisiones).

El procedimiento de firma digital más sencillo de comprender es el utilizado en el sistema RSA. Para obtener la firma electrónica de un contenido digital se calcula su hash criptográfico y se cifra con la clave privada. El hash cifrado se envía junto con el contenido digital y la clave pública. El receptor, con la clave pública en su poder, puede descifrar el hash adjunto al contenido y compararlo con un nuevo hash generado a partir del contenido recibido. Si ambos hashes coinciden, es posible confirmar que el contenido no fue alterado durante el envío (integridad) y que solo alguien con la clave privada correspondiente en su poder pudo haberlo firmado (identidad).

Una red P2P (peer-to-peer) pura es un sistema distribuido compuesto por una red de nodos (computadoras) interconectados entre sí. Ninguno de los integrantes de la red dispone de funciones especiales o privilegios respecto al resto. No hay, por tanto, una coordinación central y los nodos actúan como productores y consumidores de información, produciéndose comunicaciones directas entre ellos. Los sistemas distribuidos forman tradicionalmente redes centralizadas como en el caso de las aplicaciones de tipo cliente-servidor (un navegador web actuando como cliente de un servidor web, donde todas las peticiones deben pasar a través de un nodo de tipo servidor, por ejemplo). Las redes P2P puras suelen ser muy resistentes a la censura ya que no existe un punto central de ataque.

