#!/usr/local/bin/python

import os
from time import sleep
from progress.bar import ChargingBar

flag = os.getenv("FLAG")
env = float(os.getenv("NUM"))
user = float(input("number: "))

for i in ChargingBar("Multiply", max=32, check_tty=False).iter(range(32)):
    sleep(0.1)

print(f"Done! {env} * {user} = {env * user}")

print("please, most big number!")

user_num = float(input("num : "))
if user_num >= user_num+1:
	print(f"Congratiration! {flag}")
else:
	print("Ooh, I win. You lose.")
