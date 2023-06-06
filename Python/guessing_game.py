secret_word = "curintia"
guess = ""
guess_count = 0
guess_limit = 3
out_of_guesses = False

while guess != secret_word and not (out_of_guesses):
    if guess_count < guess_limit:
        guess = input("Enter guesses: ")
        guess_count += 1
        if guess_count == 1:
            print("Help 1: one of the best soccer teams in SP\n")
        if guess_count == 2:
            print("Help 2: has 2 world titles\n")
    else:
        out_of_guesses = True
if out_of_guesses:
    print("out of guesses, You lose")
else:
    print("You win!")