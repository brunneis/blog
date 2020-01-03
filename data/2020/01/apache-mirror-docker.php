<?php /* md
[title]:              # "Deploying an Apache mirror with Docker"
[datetime]:           # "2020-01-03 22:30:00"
[description]:        # "I've deployed an official Apache Mirror. In this post, I explain how to deploy one with Docker."
[keywords]:           # "apache, mirror, docker"
[image_file]:         # "https://blog.brunneis.com/img/og/brunneis.jpg"
[image_description]:  # "Brunneis' logo"


# Deploying an Apache mirror with Docker
[[DATE]]

Now that my *homelab* starts to be stable, I've decided to donate some of the resources I don't need to the community, starting with the Apache Foundation.

When you download software like Apache Httpd, Kafka, Spark, Netbeans, Maven, Tomcat, and a long *et cetera*, you are redirected to a random mirror in your country. In Spain, unlike in other countries, [there are only four mirrors in total](https://www.apache.org/mirrors/dist.html#es), [including mine](https://apache.brunneis.com/). Three of them in Galicia.

I tend to package everything that can be reusable by others and even by me in the future in Docker containers, a widely known technology nowadays I won't talk about today.

In order to deploy your mirror, you need a web server and a synchronizing task, executed with **rsync**. The Docker container will retrieve changes from the source server twice a day. And that's it.

** First step, clone the repo:**

```
git clone https://github.com/brunneis/apache-mirror
```

**Second and final step, launch it:**
```
docker-compose up -d
```

Done, your mirror should start the synchronization in the **./data** directory by default. Give it some time since there are several tens of GiBs of data.

In order to make it useful, the mirror should be accessible publicly, so check the public IP of your server. The Apache server will be listening on the standard port (**80**).


In my case, I run all my projects behind a reverse proxy, and with TLS (**https**). That means that the software I use as a proxy (**haproxy**) is listening on the standard HTTP ports (**80**, **443**). In order to run the mirror behind a reverse proxy, you have to change the exposed port in the host by editing the **docker-compose.yaml** file as shown below:
```
    ports:
      - 10080:80
```

Now, the web server will listen on the host's port **10080**. Just configure your reverse proxy to redirect the traffic for your mirror's domain to that port. In my case, this was **apache.brunneis.com**.

If you are interested in an easy way to deploy a reverse proxy with automatic requests of TLS certificates, [I recommend you the solution I've built](https://github.com/brunneis/https-reverse-proxy) where you just have to annotate which domains point to which IPs and ports in a simple YAML file.

P.S. If you want your mirror to be listed by the Apache Foundation you have to open a Jira Task when ready. Check [https://www.apache.org/info/how-to-mirror.html](https://www.apache.org/info/how-to-mirror.html).
