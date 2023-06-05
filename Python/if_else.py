is_male = True
is_tall = True

if is_male and is_tall:
    print("you are male and tall")
elif is_male and not(is_tall):  # ELIF == ELSE IF
    print("You are a short male")
elif not(is_male) and (is_tall):  #not is used to deny any if condition
    print("You are not a male but you are tall")
else:
    print("you are either not male or not tall or both")