print("hello world")
#variables
age= 20
price= 20.1
first_name= "Moses"
is_online= True #boolean values
print(age)
#receiving input
name = input("what is your name? ")
print ("Hello " + name) #string concatenation
#type conversions
birth_year  = input("Enter your birth year: ")#entering and storing at birth year using input
age= 2026 - int (birth_year) #int converting entered string at age to value 1998
print("Your age is: " + str (age))
#float decimals
#calculator basic
First_number = input ("Enter the first number: ")
Second_number = input ("Enter the second number: ")
value = int (First_number) + int (Second_number)
print(value)
#strings and called methods with COURSE functionality
course ="St Petersburg University"
print(course.upper())
print(course.find("P"))
print(course.replace('Petersburg', 'PETERSBURG'))
print('University' in course) #returns True or False indicate as boolean value

#Arithmetic operations ** return square,
x=10
x *=3
x -=3 #easiest way to handle arithmetics
#parentheses is evaluated first
x= (10+3) * 3
print(x)

#Comparison operators - checking values and compare > < <= >= != ==
x=10 <=20
print(x)

#Logical Operators or-at least one true  and -both true and not-not single is true
number =80
print(not number >90)
number2=70
print (number > 100 and number2 <0)
print(number >10 or number2 <100)

#If statements
temperature=41
if temperature >40:
    print("Its a very hot day")
    print("Drink a lot of water") #Dented will be executed under the statement if.
elif temperature <40:
    print("Its a cold day")
    print("Wear warmly")
else:
    print("Its a good day")

#Exercise
Weight = int (input ("Enter your weight: ")) #Making sure its int(number)
Measure_Weight = input ("Enter whether its (K)gs or (L)bs: ")

if Measure_Weight.upper() == 'KG':

    print("Weight in Kg: " + str (Weight))

else:
    convert= Weight * 2.21
    print("Weight in Pounds: " + str (convert))

#While Loops
i =1
while i<=20:
    print(i)
    i=i+1
j= 1
while j<=30:
    print(j * '*')
    j=j+1

#LISTS  Numbers, floats(numbers with decimals), string and boolean(possible value true nd false)
names= ["Milana", "Li Dia", "Moira", "John"]
names[0] ="Milanova"
names[1] ="Lih Diadia"
print(names)
print(names[0:2])

#List Methods playing with the numbers
numbers1 = [1, 2, 3, 4]
numbers1.append(5)
numbers1.insert(0,-2)
numbers1.remove(2)
print(numbers1)
print(len (numbers1))

#Loops
for numbers in numbers1:
    print(numbers)
  #second option
i=0
while i<len(numbers1):
    print(numbers1[i])
    i=i+1
#Raging numbers using a loop
numbers3= range(20) #can indicate range inside the brackets like (2-9)
for numbers4 in numbers3:
    print(numbers4)





















