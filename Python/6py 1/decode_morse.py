"""
|--------------------------------------------------------------------------
| Decode the Morse code
|--------------------------------------------------------------------------
|
"""

from preloaded import MORSE_CODE
def decode_morse(morse_code):
   return ' '.join(
      ''.join(MORSE_CODE[code] for code in word.split(' '))
      for word in morse_code.strip().split('   ')
   )


def decode_morse(morseCode):
   return ''.join(MORSE_CODE.get(x, ' ') for x in morseCode.split(' ')).strip().replace('  ', ' ')


def decode_morse(mc):
   out = ''
   for x in mc.strip().split('   '):
      for y in x.split(' '): out += MORSE_CODE[y]
      out += ' '
   return out.strip()


print(decode_morse(".... . -.--   .--- ..- -.. ."), "HEY JUDE")
print(decode_morse("   .... . -.--   "), "HEY")