"""
|--------------------------------------------------------------------------
| Buying a car
|--------------------------------------------------------------------------
|
"""

def nb_months(spo, spn, spm, plm):
   months, savings = 0, 0
   while spo + savings < spn:
      months += 1
      if months % 2 == 0: plm += 0.5
      spo *= 1 - plm / 100
      spn *= 1 - plm / 100
      savings += spm
   return [months, round(spo + savings - spn)]


def nbMonths(p0, p1, s, r, m = 0, t = 0):
   if p1 <= p0 + t: return [m, round(p0 - p1 + t)]
   p0 -= p0 * .01 * r
   p1 -= p1 * .01 * r
   t += s
   m += 1
   if m % 2 == 1: r += .5
   return nbMonths(p0, p1, s, r, m, t)


def nbMonths(old, new, savings, percent, month=0):
   if month*savings + old > new: return [month, round((month*savings + old) - new)]
   if month and month%2: percent += 0.5
   return nbMonths(old*(1-percent/100), new*(1-percent/100), savings, percent, month+1)


print(nb_months(2000, 8000, 1000, 1.5), [6, 766])
print(nb_months(12000, 8000, 1000, 1.5) ,[0, 4000])
print(nb_months(8000, 12000, 500, 1), [8, 597])
print(nb_months(18000, 32000, 1500, 1.25), [8, 332])
print(nb_months(7500, 32000, 300, 1.55), [25, 122])