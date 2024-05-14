package main 

import "fmt"

func main(){
	mensagensDaDolores := []string{
		"You doing anything later??",
		"Did you get my last message?",
		"Don't leave me hanging...",
		"Please respond I'm lonely!",
	}
	numeroDeMensagens := float64(len(mensagensDaDolores))
	custoPorMensagem := 0.2
	

	total := numeroDeMensagens * custoPorMensagem

	fmt.Printf("Dolores gastou: %.2f em mensagens hoje \n", total)
}