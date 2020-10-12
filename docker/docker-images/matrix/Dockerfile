FROM scratch
ADD alpine-minirootfs-3.12.0-x86_64.tar.gz /
LABEL maintainer="fpetr"
LABEL description="matrix"
RUN export \
 http_proxy="http://127.0.0.1:3128/" \
 export https_proxy="http://127.0.0.1:3128/"

#RUN echo "http://dl-cdn.alpinelinux.org/alpine/v3.12/main/x86_64/" > /etc/apk/repositories
#RUN echo "http://dl-cdn.alpinelinux.org/alpine/v3.12/community/x86_64/" >> /etc/apk/repositories
#RUN rm -rf /var/cache/apk/* && \
#    rm -rf /tmp/*
RUN apk update 
#RUN apk fetch cmatrix
#RUN apk update && apk add cmatrix --no-cache
#RUN apk add http://dl-2.alpinelinux.org/alpine/latest-stable/community/x86_64/cmatrix-2.0-r0.apk --no-cache
RUN apk add cmatrix
#RUN apk update -v --force-refresh --no-cache
CMD ["cmatrix"]
