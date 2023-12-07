#!/usr/local/bin/python
import os
from Crypto.Util.number import *
import random
flag = bytes_to_long(os.getenv('FLAG').encode())
p = getPrime(1024)
q = getPrime(1024)
n = p*q
r = (p-1)*(q-1)
s = p+q

print(n)
print(r)
print(s)

a = int(input("input_num:"))
b = random.randint(1,n)
assert a > 1
e = pow(a,b,n)
c = pow(flag,e,n)

print(e,c)
