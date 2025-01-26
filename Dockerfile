FROM debian:bullseye-slim

#RUN apt update && apt install -y wget ca-certificates && rm -rf /var/lib/apt/lists/* 
RUN apt-get update && apt-get install -y wget

# 设置工作目录
WORKDIR /app

RUN wget https://github.com/Project-InitVerse/miner/releases/download/v1.0.0/iniminer-linux-x64 && chmod +x iniminer-linux-x64 && mv iniminer-linux-x64 iniminer

COPY entrypoint.sh entrypoint.sh

RUN chmod +x entrypoint.sh

# 设置默认命令
ENTRYPOINT ["./entrypoint.sh"]
