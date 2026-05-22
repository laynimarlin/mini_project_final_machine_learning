import mysql.connector
import pandas as pd
from sklearn.preprocessing import LabelEncoder
from sklearn.neighbors import KNeighborsClassifier
import sys

# KONEKSI DATABASE
db = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="diagnosa_hp_knn"
)

# AMBIL DATA TRAINING
query = "SELECT kondisi1, kondisi2, kondisi3, hasil FROM training_data"

df = pd.read_sql(query, db)

# URUTKAN DATA TRAINING
for i in range(len(df)):

    kondisi = [
        str(df.loc[i, 'kondisi1']).strip(),
        str(df.loc[i, 'kondisi2']).strip(),
        str(df.loc[i, 'kondisi3']).strip()
    ]

    kondisi.sort()

    df.loc[i, 'kondisi1'] = kondisi[0]
    df.loc[i, 'kondisi2'] = kondisi[1]
    df.loc[i, 'kondisi3'] = kondisi[2]

# INPUT DARI PHP
input1 = str(sys.argv[1]).strip()
input2 = str(sys.argv[2]).strip()
input3 = str(sys.argv[3]).strip()

# URUTKAN INPUT
input_kondisi = [input1, input2, input3]
input_kondisi.sort()

input1 = input_kondisi[0]
input2 = input_kondisi[1]
input3 = input_kondisi[2]

# LABEL ENCODER
le1 = LabelEncoder()
le2 = LabelEncoder()
le3 = LabelEncoder()
le4 = LabelEncoder()

df['kondisi1'] = le1.fit_transform(df['kondisi1'])
df['kondisi2'] = le2.fit_transform(df['kondisi2'])
df['kondisi3'] = le3.fit_transform(df['kondisi3'])

df['hasil'] = le4.fit_transform(df['hasil'])

# FITUR
X = df[['kondisi1', 'kondisi2', 'kondisi3']]

# LABEL
y = df['hasil']

# MODEL KNN
model = KNeighborsClassifier(n_neighbors=3)

# TRAINING
model.fit(X, y)

try:

    # ENCODE INPUT
    input1 = le1.transform([input1])[0]
    input2 = le2.transform([input2])[0]
    input3 = le3.transform([input3])[0]

    # PREDIKSI
    hasil = model.predict([[input1, input2, input3]])

    # OUTPUT
    print(le4.inverse_transform(hasil)[0])

except:
    print("Kerusakan tidak ditemukan")