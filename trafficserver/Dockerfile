FROM ubuntu:bionic
LABEL maintainer "nomuken"

ENV DEBIAN_FRONTEND=noninteractive
RUN apt update -y && \
      apt upgrade -y && \
      apt install -y trafficserver && \
      mkdir -p /var/run/trafficserver && \
      useradd -m -g users tf && \
      chown tf:users /var/run/trafficserver && \
      chown tf:users /var/log/trafficserver && \
      chown tf:users -R /etc/trafficserver && \
      apt clean -y && \
      ln -s /dev/stderr /var/log/trafficserver/error.log
USER tf
EXPOSE 8080
CMD /usr/bin/traffic_server -p 8080
