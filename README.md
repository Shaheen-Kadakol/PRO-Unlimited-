# PRO-Unlimited-

#Program1
Minimum Remove to Make Valid Parentheses

LINE 2: define a function minRemoveToMakeValid which contains input string as a parameter.

LINE 3: splitting input string into an array.

LINE 4: Find numbers of elements in an array.

LINE 5: to check for valid parentheses, push any "(" onto the stack, then pop off the top stack element every time it finds a matching ")". If finds a ")" when the stack is empty, that ")" is invalid. At the end of str, any leftover "("'s left in the stack is invalid, as well. Since we'll want to remove those "("'s by index at the end, the stack should contain said indexes, rather than just the "(".

LINE 6: fetching array elements using a loop.

LINE 7,8,9,10,11,12: if an element in str array contains ")" it checks whether the stack is not empty, if the stack is not empty it pops the elements from the array and if the stack is empty it delete an item from the string using an index value.

LINE 13,14,15,16 : if element in str array contain  contains "(" it pushes the current index into stack.

LINE 17,18: if any leftover "(" in the stack then it unsets "(" from the str array.

LINE 19: returns a string from the elements of an array.

LINE 22: invoking a function using argument input.


#Program2
2. Huge Sale

LINE 1,2: creating empty array itemsPrice and array newItem for items Price.

LINE 6 : looping through the item price array.

LINE 7,8,9,10,11,12,13,14: if an element in an array itemsPrice has a negative value it is pushing that element into a newItem  array else if the element is positive then jhon gets 0 profit hence it is printing as 0.

LINE 18,19,20: if array newItem has a negative element and as Jhon has to carry only element into his truck it finds the highest value and prints $10 as output.
