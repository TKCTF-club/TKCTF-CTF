#!/usr/local/bin/python
import os
from Crypto.Util.number import *
import random
flag = bytes_to_long(os.getenv('FLAG').encode())
p = getPrime(1024)
q = getPrime(1024)
r = getPrime(1024)
n = p*q*r
#s = (p-1)*(q-1)*(r-1)

print('n=', n)
print('pq=', p*q)
print('qr=', q*r)
print('rp=', r*p)

e = 65537
c = pow(flag,e,n)

print('c=', c)
