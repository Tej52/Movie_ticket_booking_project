import pandas as pd 

df = pd.read_csv('D:\Harsha\project\movieBooking\Harsha\csv\\new_df.csv')

print(df.head())

print(df['city'].unique())

def city():
    return df['city'].unique()