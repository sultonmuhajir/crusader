"""
|--------------------------------------------------------------------------
| Simple Encryption #1 - Alternating Split
|--------------------------------------------------------------------------
|
"""

def encrypt(text, n):
   if not text or n <= 0: return text
   enc = text
   for _ in range(n):
      odd, even = "", ""
      for i in range(len(enc)):
         if i % 2 == 0: even += enc[i]
         else: odd += enc[i]
      enc = odd + even
   return enc
def decrypt(encryptedText, n):
   if not encryptedText or n <= 0: return encryptedText
   dec = encryptedText
   for _ in range(n):
      half = len(dec) // 2
      odd, even, ori, = dec[:half], dec[half:], ""
      for j in range(half): ori += even[j] + odd[j]
      if len(dec) % 2 != 0: ori += even[half]
      dec = ori
   return dec


def decrypt(s, n):
   if not s: return s
   o, l = len(s) // 2, list(s)
   for _ in range(n):
      l[1::2], l[::2] = l[:o], l[o:]
   return ''.join(l)
def encrypt(s, n):
   if not s: return s
   for _ in range(n):
      s = s[1::2] + s[::2]
   return s


from itertools import zip_longest
def encrypt(text, n):
   while n>0:
      text = text[1::2]+text[::2]
      n -= 1
   return text
def decrypt(t, n):
   while n>0:
      t = ''.join(j+i for i,j in zip_longest(t[:len(t)//2], t[len(t)//2:], fillvalue=''))
      n -= 1
   return t


print(encrypt("This is a test!", 1), "hsi  etTi sats!")
print(encrypt("This is a test!", 2), "s eT ashi tist!")
print(encrypt("This is a test!", 3), " Tah itse sits!")
print(encrypt("This is a test!", 4), "This is a test!")
print(encrypt("This is a test!", -1), "This is a test!")
print(encrypt("This kata is very interesting!", 1), "hskt svr neetn!Ti aai eyitrsig")
print(decrypt("This is a test!", 0), "This is a test!")
print(decrypt("hsi  etTi sats!", 1), "This is a test!")
print(decrypt("s eT ashi tist!", 2), "This is a test!")
print(decrypt(" Tah itse sits!", 3), "This is a test!")
print(decrypt("This is a test!", 4), "This is a test!")
print(decrypt("This is a test!", -1), "This is a test!")
print(decrypt("hskt svr neetn!Ti aai eyitrsig", 1), "This kata is very interesting!")