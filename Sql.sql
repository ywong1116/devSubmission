SELECT Employees.firstName, Employees.lastName, Addresses.address, 
Addresses.city, Addresses.postalCode, Addresses.movedInDate 
FROM Employees join Addresses ON Employees.employeeID = Addresses.employeeID join
Provinces ON Addresses.provinceID = Provinces.provinceID