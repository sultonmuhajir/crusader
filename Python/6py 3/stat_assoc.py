"""
|--------------------------------------------------------------------------
| Statistics for an Athletic Association
|--------------------------------------------------------------------------
|
"""

def to_hms(sec):
   h = str(sec // 3600).zfill(2)
   sec %= 3600
   m = str(sec // 60).zfill(2)
   s = str(sec % 60).zfill(2)
   return f"{h}|{m}|{s}"
def stat(strg):
   if strg == "": return ""
   times = []
   for t in strg.split(", "):
      h, m, s = map(int, t.split("|"))
      times.append(h * 3600 + m * 60 + s)
   times.sort()
   range_ = times[-1] - times[0]
   avg = sum(times) // len(times)
   med = (times[len(times) // 2 - 1] + times[len(times) // 2]) // 2 if len(times) % 2 == 0 else times[len(times) // 2]
   return f"Range: {to_hms(range_)} Average: {to_hms(avg)} Median: {to_hms(med)}"


from statistics import mean, median
def stat(strg):
   if not strg: return ''
   s = [sum(x * y for x,y in zip([3600, 60, 1], map(int, i.split('|')))) for i in strg.split(', ')]
   f = lambda x: f'{int(x//3600):02}|{int(x%3600//60):02}|{int(x%60):02}'
   return f'Range: {f(max(s) - min(s))} Average: {f(mean(s))} Median: {f(median(s))}'


print(
   stat("01|15|59, 1|47|16, 01|17|20, 1|32|34, 2|17|17"),
   "Range: 01|01|18 Average: 01|38|05 Median: 01|32|34"
)