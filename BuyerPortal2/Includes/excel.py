import pandas as pd
from openpyxl import load_workbook

x = pd.ExcelFile("Districts.xls")
d = x.parse("Sheet1")

a = d['District'][626:629]
print(list(a))