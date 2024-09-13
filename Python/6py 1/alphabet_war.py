"""
|--------------------------------------------------------------------------
| Alphabet war - airstrike - letters massacre
|--------------------------------------------------------------------------
|
"""

def alphabet_war(fight):
   left_power = {'w': 4, 'p': 3, 'b': 2, 's': 1}
   right_power = {'m': 4, 'q': 3, 'd': 2, 'z': 1}
   clean_fight = [
      '_' if fight[i] == '*' or (i > 0 and fight[i-1] == '*') or (i < len(fight)-1 and fight[i+1] == '*') 
      else fight[i]
      for i in range(len(fight))
   ]
   left_score = sum(left_power.get(char, 0) for char in clean_fight)
   right_score = sum(right_power.get(char, 0) for char in clean_fight)
   if left_score > right_score: return "Left side wins!"
   elif right_score > left_score: return "Right side wins!"
   else: return "Let's fight again!"


from re import sub
def alphabet_war(fight):
   d = {a : c for c, a in enumerate('wpbs zdqm', -4) if c}
   s = sum(d.get(a, 0) for a in sub(r'.?\*+.?', '', fight))
   return ['Left side wins!', "Let's fight again!", 'Right side wins!'][1 + min(max(s, -1), 1)]


def alphabet_war(s):
   D = {'w': -4, 'p': -3, 'b': -2, 's': -1, 'm': 4, 'q': 3, 'd': 2, 'z': 1}
   v = sum(D[j] for i, j, k in zip('a' + s, s, s[1:] + 'a') if j in D and i != '*' and k != '*')
   if v == 0: return "Let's fight again!"
   return 'Left side wins!' if v < 0 else 'Right side wins!'


print(alphabet_war("z"),"Right side wins!")
print(alphabet_war("****") , "Let's fight again!")
print(alphabet_war("z*dq*mw*pb*s"), "Let's fight again!")
print(alphabet_war("zdqmwpbs"), "Let's fight again!")
print(alphabet_war("zz*zzs"), "Right side wins!")
print(alphabet_war("sz**z**zs"), "Left side wins!")
print(alphabet_war("z*z*z*zs"), "Left side wins!")
print(alphabet_war("*wwwwww*z*"), "Left side wins!")
print(alphabet_war("w****z") , "Let's fight again!")
print(alphabet_war("mb**qwwp**dm") , "Let's fight again!")