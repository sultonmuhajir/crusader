/*
|--------------------------------------------------------------------------
| Buying a car
|--------------------------------------------------------------------------
|
*/

function nbMonths(spo, spn, spm, plm) {
   let months = 0;
   let savings = 0;
   while (spo + savings < spn) {
      months++;
      if (months % 2 === 0) plm += 0.5;
      spo *= 1 - plm / 100;
      spn *= 1 - plm / 100;
      savings += spm;
   }
   return [months, Math.round(spo + savings - spn)];
}


const f = (nbMonths = (
   o,
   n,
   s,
   l,
   b = 0,
   e = 0,
   d = 0,
   r = b + o - n,
   k = e ? l + 0.5 : l,
   m = 1 - k / 100
) => (r < 0 ? f(o * m, n * m, s, k, b + s, !e, d + 1) : [d, (r + 0.5) ^ 0]));


function nbMonths(myCar, newCar, perMonth, loss) {
   loss = 1 - loss / 100;
   let w = myCar;
   for (let m = 0; w < newCar; m++) {
      loss -= m % 2 == 0 ? 0 : 0.005;
      myCar *= loss;
      newCar *= loss;
      w = myCar + perMonth * (m + 1);
   }
   return [m, Math.round(w - newCar)];
}


console.log(nbMonths(2000, 8000, 1000, 1.5), [6, 766]);
console.log(nbMonths(12000, 8000, 1000, 1.5), [0, 4000]);