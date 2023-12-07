#!/usr/local/bin/python3
import os
from Crypto.Util.number import *

flag = bytes_to_long(os.getenv('FLAG').encode())

p = getPrime(1024)
q = getPrime(1024)

n = p*q
e = 3

c = pow(flag,e,n)

print('n=',n)
print('c=',c)
