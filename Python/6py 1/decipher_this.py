"""
|--------------------------------------------------------------------------
| Decipher this!
|--------------------------------------------------------------------------
|
"""

from re import sub
def decipher_this(s):
	return sub(r'(\d+)(\w?)(\w*?)(\w?)\b', lambda x: chr(int(x.group(1)))+x.group(4)+x.group(3)+x.group(2), s)


def decipher_this(string):
	words = []
	for word in string.split():
		code = ''.join(char for char in word if char.isdigit())
		new_word = chr(int(code))+''.join(char for char in word if not char.isdigit())
		words.append(new_word[:1]+new_word[-1]+new_word[2:-1]+new_word[1] if len(new_word)>2 else new_word)
	return ' '.join(words)


def decipher_this(s):
	return sub(r"(\w)(\w)(\w*)(\w)", r"\1\4\3\2" ,sub(r"(\d+)", lambda x:chr(int(x[0])), s))


print(decipher_this("65 119esi 111dl 111lw 108dvei 105n 97n 111ka"), "A wise old owl lived in an oak")
print(decipher_this("84eh 109ero 104e 115wa 116eh 108sse 104e 115eokp"), "The more he saw the less he spoke")