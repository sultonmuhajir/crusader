"""
|--------------------------------------------------------------------------
| Playing with passphrases
|--------------------------------------------------------------------------
|
"""

def play_pass(s, n):
   shifted = ''.join(
      chr(((ord(l) - 65 + n) % 26) + 65) if l.isalpha() else str(9 - int(l)) if l.isdigit() else l
      for l in s.upper()
   )
   result = ''.join((c.upper() if i % 2 == 0 else c.lower()) for i, c in enumerate(shifted))[::-1]
   return result


from string import ascii_uppercase as letters, digits
def play_pass(s, n):
   return "".join(c.lower() if i & 1 else c
      for i, c in enumerate(s.upper().translate(
         str.maketrans(letters + digits, letters[n:] + letters[:n] + digits[::-1])
      )))[::-1]


def play_pass(s, n):
   return ''.join(reversed([
      chr((ord(c) - 65 + n) % 26 + 65 + 32 * (i % 2)) if c.isalpha() else
      str(9 - int(c)) if c.isdigit() else c for i, c in enumerate(s)
   ]))


print(play_pass("I LOVE YOU!!!", 1), "!!!vPz fWpM J")
print(
   play_pass("MY GRANMA CAME FROM NY ON THE 23RD OF APRIL 2015", 2),
   "4897 NkTrC Hq fT67 GjV Pq aP OqTh gOcE CoPcTi aO"
)