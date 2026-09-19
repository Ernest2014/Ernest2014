#Eigenvalues are scalar factor that indicate how a linear transformation(matrix) stretch or shrink
# an eigen vector  without changing direction under formula A v = λ v
#where A-Matrix, v eigenvector and lamda eigenvalue
#
import numpy as np

a=np.array([[1,1]
            ,[0,1]])
v=np.array([2,3])
v_prime = a@v

print(f"The original vector v:  {v} ")
print(f"The new vectors v after transformation is:  {v_prime} ")


