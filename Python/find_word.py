def encontra_palavra(lista, palavra):
    for texto in lista:
        if palavra in texto:
            return True
    return False

lista = ["Olá, mundo!", "Python é uma linguagem de programação", "Vamos aprender Python"]
palavra = "Python"

resultado = encontra_palavra(lista, palavra)
print(resultado)
