a=int(input("please enter a number "))

arr=[31,28,31,30,31,30,31,31,30,31,30,31]
monthname=["January","February","March","April","May","June","July","August","September","October","November","December"]

if (a>0 and a<=365):
 i=0
 while a>arr[i]:
         a-=arr[i]
         i+=1


 print(" month : ",monthname[i])
 print(" day   : ",a)

else:
 print("your input is invalid . please enter only an integer between 1 and 365")

