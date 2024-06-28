/*
|--------------------------------------------------------------------------
| extract portion of file name
|--------------------------------------------------------------------------
|
*/

class FileNameExtractor {
   static extractFileName(dirtyFileName) {
      const regex = /^[0-9]+_(.+?\.[a-zA-Z0-9]+)(?:\.[a-zA-Z0-9]+)+$/;
      const match = dirtyFileName.match(regex);
      return match ? match[1] : null;
   }
}


class FileNameExtractor {
   static extractFileName = (dirty) => dirty.match(/^\d+_([^.]+\.[^.]+)/)[1];
}


class FileNameExtractor {
   static extractFileName(dFN) {
      return dFN.slice(dFN.indexOf("_") + 1, dFN.lastIndexOf("."));
   }
}