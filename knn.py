import sys
import warnings

warnings.filterwarnings("ignore")

import pandas as pd
import mysql.connector

from sklearn.neighbors import KNeighborsClassifier
from sklearn.preprocessing import LabelEncoder

db = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="diagnosa_ml_hp"
)

query = "SELECT * FROM dataset"

df = pd.read_sql(query, db)

le1 = LabelEncoder()
le2 = LabelEncoder()
le3 = LabelEncoder()

df['kondisi1'] = le1.fit_transform(df['kondisi1'])
df['kondisi2'] = le2.fit_transform(df['kondisi2'])
df['kerusakan'] = le3.fit_transform(df['kerusakan'])

X = df[['kondisi1', 'kondisi2']]
y = df['kerusakan']

model = KNeighborsClassifier(n_neighbors=3)

model.fit(X, y)

input1 = sys.argv[1]
input2 = sys.argv[2]

input1 = le1.transform([input1])[0]
input2 = le2.transform([input2])[0]

hasil = model.predict([[input1, input2]])

print(le3.inverse_transform(hasil)[0])