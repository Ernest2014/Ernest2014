def display_invoice(username, amount, due_date):
    #functions are used to store data and loop it as many times as possible
    print (f"Hello {username}")
    print ( f"Your amount is ${amount:.2f} is due on: {due_date}")
display_invoice("Sister", 32.20,"01/01/2027")


#Lopping through information
def happy_birthday (name, age):
    print (f"Happy birthday to {name}")
    print (f"You are {age} years old")
    print("Happy birthday to you")
happy_birthday("Limo", 30)
happy_birthday("Chir", 34)
happy_birthday("Cherop", 40

               )

#return -statement used to end function and send result  to caller

def create_name(first, last): #create function
    first=first.capitalize()
    last=last.capitalize()
    return first + " " + last  #returning data to function
full_name =create_name("ernest", "chumba")  #calling a function

print(full_name)

