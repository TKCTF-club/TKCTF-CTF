FROM python:slim AS app
RUN pip install --no-cache-dir pycryptodome

FROM pwn.red/jail
COPY --from=app / /srv
ADD ./RSA_2.py /srv/app/run
ENV JAIL_MEM=20M JAIL_POW=5000 JAIL_ENV_NUM=5 JAIL_ENV_FLAG=TKCTF\{deprived_plain_text\}
