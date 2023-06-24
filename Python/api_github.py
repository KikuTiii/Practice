import requests

print('Github users\n')

username = input("Enter username: ")
url = f'https://api.github.com/users/{username}'

response = requests.get(url)
data = response.json() #converts the response in JSON format into a Python object.

if response.status_code == 200: #"... == 200 "which means the request was successful
	print(f'Name : {data["name"]}')
	print(f'Followers : {data["followers"]}')
	print(f'Following : {data["following"]}')
	print(f'location : {data["location"]}')
else:
	print("Could not find the user.")