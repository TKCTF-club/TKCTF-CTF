#!/usr/local/bin/python
import os
from Crypto.Util.number import *

flag = bytes_to_long(os.getenv('FLAG').encode())

p = getPrime(1024)
q = getPrime(1024)

n = p*q
e = 65537

phi = (p-1)*(q-1)
d = pow(e,-1,phi)

c = pow(flag,e,n)

print('n=',n)
print('c=',c)
print('d=',d)
