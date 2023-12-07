ASCII文字列を知ってるかな？
```
ASCII:['0b1101011', '0b1100001', '0b1101110', '0b1101110', '0b1110100', '0b1100001', '0b1101110', '0b1101110', '0b1011111', '0b1110011', '0b1110101', '0b1100111', '0b1101001', '0b1110100', '0b1100001', '0b1011111', '0b1101011', '0b1100001', '0b1101110', '0b1100001', '0b111111']
```

※入力形式はTKCTF{フラグの文字列}です!

hit1:
ソースコードはこちら
```python
for i in ans_ASCII:
	y = bin(ord(i))
	ans_ASCII = str(ans_ASCII).replace(i, str(y))
```

hint2:
もっと欲しい？
じゃあどうぞ!
```python
ans_ASCII = str(ans_ASCII).replace("0b", "")
for j in "[] '":
	ans_ASCII = str(ans_ASCII).replace(j, "")

```
