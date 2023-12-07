FROM python:slim AS app
RUN pip install --no-cache-dir progress

FROM pwn.red/jail
COPY --from=app / /srv
ADD ./multiply.py /srv/app/run
ENV JAIL_MEM=20M JAIL_POW=5000 JAIL_ENV_NUM=5 JAIL_ENV_FLAG=TKCTF\{You_win\!\}
