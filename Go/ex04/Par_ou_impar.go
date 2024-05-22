package main

import "fmt"

func main(){
	var number int

	fmt.Println("Digite um número: ")
	fmt.Scan(&number)

	if number % 2 == 0{
		fmt.Println("o numero:", number, "é par")
	}else{
		fmt.Println("O número:", number, "é ímpar")
	}
}