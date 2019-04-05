# Name: Cw
# Project: User inputs a string and flips it in reverse

text = input('What would you like to reverse: ') # This is the string to be reversed taken from clipboard
type(text) # User inputs a string to be reversed
textrev = '' # Reverse string variable

# Let's reverse THIS

# Create a decrementing for loop that starts from the full length - 1
for i in range((int(len(text) - 1) ),-1 ,-1): # Iterate in reverse through string
    textrev += text[i] # textrev = previous character + new character

print(textrev) # Print the reversed string in the terminal
