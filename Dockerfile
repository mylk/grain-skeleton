FROM ubuntu:latest

RUN apt-get update
RUN apt-get install php5 -y

ADD . /grain-skeleton
