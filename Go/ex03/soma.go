package main

import "fmt"

func main(){
	var a, b int
	fmt.Println("Digite o primeiro número: ")
	fmt.Scan(&a)
	fmt.Println("Digite o segundo número: ")
	fmt.Scan(&b)
	fmt.Println("A soma dos números é: ", a+b)
}