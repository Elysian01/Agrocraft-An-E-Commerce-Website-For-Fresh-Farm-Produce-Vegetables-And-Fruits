import numpy as np
import matplotlib.pyplot as plt
import pandas as pd
from apyori import apriori
store_data = pd.read_csv(
    'C://Users/manil/Documents/test/py/flipkart_com-ecommerce_sample.csv', header=None)
num_records = len(store_data)
print(num_records)
records = []
for i in range(0, num_records):
    records.append([str(store_data.values[i, j]) for j in range(0, 10)])
association_rules = apriori(
    records, min_support=0.0053, min_confidence=0.20, min_lift=3, min_length=2)
association_results = list(association_rules)
print(len(association_results))
print(association_results[0])

results = []
for item in association_results:
    pair = item[0]
    items = [x for x in pair]
    value0 = str(items[0])
    value1 = str(items[1])
    value2 = str(item[2])[:7]
    value3 = str(item[2][0][2])[:7]
    value4 = str(item[2][0][3])[:7]
    rows = (value0, value1, value2, value3, value4)
    results.append(rows)
    label = ['Title', 'Title', 'Suport', 'Confidence', 'Lift']
    store_suggestion = pd.DataFrame.from_records(results, columns=label)
    print(store_suggestion)
