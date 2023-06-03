#creating lists

lucky_numbers = [4, 6, 15, 28, 33, 42]
friends = ["Kikas", "Natanzinhuuu", "Leonzera", "matheuzinhuu"]

print(friends[-1]) #To print the back list || output --> "matheuzinhuu"
print(friends[1:]) #To print excluding the first element of the list
friends.extend(lucky_numbers) #function to add to a list
friends.append("Luzia") #To add something in the end of the list
friends.insert(1,"richard") #to insert something in the list, putting the index first and then what you want to be inserted
friends.remove("Kikas") #function to remove something in the list.
friends.clear() #function to empty the list
friends.pop() #function to highlight something in the list
print(friends.count(2)) # function to count something in the list

friends2 = friends.copy() #function to copy another list

lucky_numbers.sort() #function to determine an order, either alphabetical or ascending
lucky_numbers.reverse() #To show the reverse order of the list

