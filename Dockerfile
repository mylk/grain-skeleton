FROM ubuntu:latest

RUN apt-get update
RUN apt-get install php5 php5-mysql -y

ADD . /grain-skeleton
