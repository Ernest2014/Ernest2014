def check_odd_even(numbr) :

    if numbr % 2 == 0:
        return f"{numbr} is an Even number"
    else:
        return f"{numbr} is an Odd number"
def main():
    try:
        numbr = int (input("Enter the Number: "))
        print(check_odd_even(numbr))
    except ValueError:
        print("Input an Integer!")



