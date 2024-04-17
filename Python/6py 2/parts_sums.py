"""
|--------------------------------------------------------------------------
| Sums of Parts
|--------------------------------------------------------------------------
|
"""

def parts_sums(ls):
   sum_val = sum(ls)
   res = [sum_val]
   for i in range(len(ls)):
      sum_val -= ls[i]
      res.append(sum_val)
   return res


def parts_sums(ls):
   result = [sum(ls)]
   for item in ls:
      result.append(result[-1]-item)
   return result


from itertools import accumulate
def parts_sums(ls):
   return list(accumulate(ls[::-1]))[::-1]+[0]


print(parts_sums([]), [0])
print(parts_sums([0, 1, 3, 6, 10]), [20, 20, 19, 16, 10, 0])
print(parts_sums([1, 2, 3, 4, 5, 6]), [21, 20, 18, 15, 11, 6, 0])