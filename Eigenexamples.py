import numpy as np
#Reduces decimal places to only 4
np.set_printoptions(precision=4, suppress=True)

#example of 2by 2 matrix

A=np.array([[5,3], [4,1]])
eigenvalues, eigenvectors=np.linalg.eig(A)

#Display only real numbers of the vectors and the values
real_eigenvalues=eigenvalues.real
real_eigenvectors=eigenvectors.real

print(real_eigenvalues)
print(real_eigenvectors)

print(f"Example with 3*3 matrix")

A=np.array([[-2,-4,2], [-2,1,2],[4,2,5]])
eigenvalues,eigenvectors=np.linalg.eig(A)


real_eigenvalues1=eigenvalues.real
real_eigenvectors1=eigenvectors.real

print(real_eigenvalues1)
print(real_eigenvectors1)

print(f"Example 3 with 3 by 3 matrix")

b=np.array([[2,5,7]
            ,[1,2,3],
            [7,8,2]])
real_eigenvectors_2=eigenvectors.real
real_eigenvalues_2=eigenvalues.real
print(real_eigenvalues_2)
print(real_eigenvectors_2)