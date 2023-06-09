import random

user_wins = 0
computer_wins = 0
ties = 0
game = ["rock", "paper", "scissor"]

while True:
    user_input = input("Type rock/paper/Scissors or Q to quit: ").lower()
    if user_input == "q":
        break
    if user_input not in game:
        continue

    random_number = random.randint(0, 2)
    computer_pick = game[random_number]
    print("Computer pick: " + computer_pick + ".")

    if user_input == "rock" and computer_pick == "scissor":
        print("You won!")
        user_wins += 1
    elif user_input == "paper" and computer_pick == "rock":
        print("You won!")
        user_wins += 1
    elif user_input == "scissor" and computer_pick == "paper":
        print("You won!")
        user_wins += 1
    elif user_input == computer_pick :
        print("Tied game!")
        ties += 1
    else:
        print("You Lost!")
        computer_wins += 1

print("\nYou won ", user_wins, "times.")
print("The computer won ", computer_wins, "times.")
print("Game tied: ", ties, "times.")
print("thanks for playing!\n")