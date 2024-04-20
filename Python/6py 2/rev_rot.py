"""
|--------------------------------------------------------------------------
| Reverse or rotate?
|--------------------------------------------------------------------------
|
"""

def rev_rot(strng, sz):
   if sz <= 0 or strng == "" or sz > len(strng): return ""
   res = ""
   for i in range(0, len(strng), sz):
      chunk = strng[i:i + sz]
      if len(chunk) == sz:
         chunk_sum = sum(int(digit) for digit in chunk)
         res += chunk[::-1] if chunk_sum % 2 == 0 else chunk[1:] + chunk[0]
   return res


def rev_rot(strng, sz):
   chunks = [strng[i*sz:(i+1)*sz] for i in range(len(strng) // sz)] if sz > 0 else []
   return ''.join([[c[::-1], c[1:] + c[0]][sum([int(x) ** 2 for x in c]) & 1] for c in chunks])


def rev_rot(strng, sz):
   if sz<=0 or len(strng)==0 or len(strng)<sz: return ""
   arr= []
   while len(strng)>=sz:
      arr.append(strng[:sz])
      strng= strng[sz:]
   return "".join( x[1:]+x[0] if sum(int(d)**3 for d in x)%2 else x[::-1] for x in arr)


print(rev_rot("1234", 0), "")
print(rev_rot("", 0), "")
print(rev_rot("1234", 5), "")
print(rev_rot("733049910872815764", 5), "330479108928157")