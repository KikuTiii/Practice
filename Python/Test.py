print('Hello, world!')

#Variables & Data types
character_name = "kikuti"
character_age =  "19"
character_male = True

print("There once was a man named" + character_name + ",")
print("he was " + character_age + " years old.")

#Working with strings
frase = "VAI CURINTIA"
frase2 = "vai curintia"
print(frase + " Corinthians")
placar = "2 x 0"
print("O resultado do ultimo jogo do Corinthians foi de " + placar + ".")
print(frase.lower())
print(frase2.upper())
print(frase.lower().isupper())
print(frase2.upper().isupper())
print(len(frase2)) #length function
print(frase2.index("c")) #return the index of the string
print(frase2.replace("vai", "O melhor time eh o")) #change one word for another

#working with Numbers
nb = 10
print(str(nb)) #to convert a number to string
print(abs(nb)) #to get the absolute value of a variable
print(pow(2, 5)) #function to get the power(potencia)
print(max(10, 200)) #to get the max number
print(round(3,7)) #function to round(arredondar)

from math import * #to import functions

print(floor(3.7)) #function to cut the decimal part
print(sqrt(69)) #function to get the root(raiz)

#Getting input from users

name = input("Enter your name: ") #function for the user to insert
age = input("Enter your age: ")
print("Hello " + name + "! You are " + age + " years old")