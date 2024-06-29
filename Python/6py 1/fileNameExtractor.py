"""
|--------------------------------------------------------------------------
| extract portion of file name
|--------------------------------------------------------------------------
|
"""

from re import search
class FileNameExtractor:
   @staticmethod
   def extract_file_name(dirty_file_name):
      match = search(r'_(.*)\.', dirty_file_name)
      if match: return match.group(1)
      return None


class FileNameExtractor:
   @staticmethod
   def extract_file_name(fname):
      return fname.split('_', 1)[1].rsplit('.', 1)[0]
   

from re import match
class FileNameExtractor:
   def extract_file_name(dirty_file_name):
      return match(r'\d+_(.+?\..+?)\.', dirty_file_name).group(1)