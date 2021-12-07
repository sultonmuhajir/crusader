"""
|--------------------------------------------------------------------------
| Count the smiley faces!
|--------------------------------------------------------------------------
|
"""

def count_smileys(arr):
   smileys = [":)", ";)", ":-)", ";-)", ";~)", ":~)", ":D", ";D", ":-D", ":~D", ";-D", ";~D"]
   count = 0
   for i in range(len(arr)):
      for j in range(len(smileys)):
         if arr[i] == smileys[j]:
            count += 1
   return count


from re import findall, match
def count_smileys(arr):
   return len(list(findall(r"[:;][-~]?[)D]", " ".join(arr))))


def count_smileys(arr):
   return sum(1 for s in arr if match(r'\A[:;][-~]?[)D]\Z',s))


def count_smileys(arr):
   return len(list(filter(lambda x: x in [':D',':~D',':-D',';D',';~D',';-D',':)',':~)',':-)',';)',';~)',';-)'],arr)))


def count_smileys(arr):
   smiles = set([a+b+c for a in ":;" for b in ['','-', '~'] for c in ")D"])
   return len([1 for s in arr if s in smiles])


print(count_smileys([]), 0)
print(count_smileys([':D',':~)',';~D',':)']), 4)
print(count_smileys([':)',':(',':D',':O',':;']), 2)
print(count_smileys([';]', ':[', ';*', ':$', ';-D']), 1)