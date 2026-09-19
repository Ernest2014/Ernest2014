import numpy as np
#1. User ratings   Using dot.product formula  step 1 ab=a1b1+a2b2+a3b3..... and step 2 a.b=||a|| ||b|| cos @
#This is doing the squares of the data in array a and b  then doing their square roots.
#finally cos@ will be a.b/||a|| ||b|| that's and doing the arccos of it, the lower the percentage indicate similarity
a=np.array([5,4,1])
b=np.array([4,5,2])
c=np.array([1,2,5])

#adding comparisons between both
dot_product_ab = np.dot(a,b)
cos_theta_ab=dot_product_ab/ (np.linalg.norm(a) * np.linalg.norm(b))
angle_ab=np.degrees(np.arccos(cos_theta_ab))

dot_product_ac =np.dot(a,c)
cos_theta_ac=dot_product_ac/ (np.linalg.norm(a) * np.linalg.norm(c))
angle_ac=np.degrees(np.arccos(cos_theta_ac))

print (f"Angle between A and B: {angle_ab:.2f} degrees")
print (f"Angle between B and C: {angle_ac:.2f} degrees")

#2. For complex data we have to use the Gaussian Rule under the Row Echelon method.
#using one linear

#A is the receipt matrix
a=np.array( [[300,100],
           [100,200]
           ])
#b is the total stock vector
b=np.array([11000,8000])

#solving the system ax=b for x
x=np.linalg.solve(a,b)
print(f"Units of Blend A (x) : {x[0]}")
print(f"Units of the Blend B (y) : {x[1]}")

#3. Rules of vector; 2D 3D(This must indicate at least points in plane,
#also linear independent, meaning that they depend on each other or formed from one another
#Basis most important change of points without affecting the plane.All previous conditions are fulfilled.

#New basic vectors form the columns n a matrix B
#from matrix B={[[1,2], [3,1]]} we want to display in new basis change in terms p=[7,5]
B=np.array([ [1,3],
             [2,1]
             ])
p=np.array([7,5])
#system solving BC=P we don't know C but will change as in XY=P
C=np.linalg.solve(B,p)
print(f"Coordinates of P in basis of B: {C}  ")

#4. V=MV Matrix as a verb in programming to rotate,scale and shear data in spaces
#this applies in GPU, games etc.  This allows change in character positions in games or
#skim through data faster.
#Simple rotating a triangle, we just focus on a base change rotation then the rest will follow

#90 degrees rotation matrix under base
R=np.array([
    [0,-1],
    [1,0]
])
#original vertices of triangle in matrix form p=p1,p2,p3
P=np.array([
    [1,3,2], #x coordinates
    [1,1,2]#y coordinates
])
P_transformed=R@P #@Is indicated for matrix multiplication

print(f"The original vertices as columns: \n", P)
print(f"\nThe transformed vertices as columns: \n", P_transformed)

#.5 Using the determinant to rotate and expand data in linear algebra
#It scales the area factor of the transformation.
# if det(m)=1 area perfectly preserved if =2 it doubles in area.
#if det(m)=0 transformed to a point or straight line/singular . <0 area becomes flipped like mirror
#det(AB)=det(A).det(B). scaling factor matrix.
#inverse matrix det(a")= 1/det(a).

#input of the data
R=np.array([[0,-1], [1,0]])
S=np.array([[2,0], [0,3]])
C=np.array([[1,2], [2,4]])

#calculation determinants automatically. Vital point
det_R=np.linalg.det(R)
det_S=np.linalg.det(S)
det_C=np.linalg.det(C)

print(f"The Determinant of R : {det_R}")
print(f"The determinant of S: {det_S} ")
print(f"The determinant of C; {det_C}")

