# Name: Cw & Jpeezy
# Project: User inputs a string and flips it in reverse and more...?

#FUNCTIONS#

def reverseText(text):
	textReturn = ""

	# Create a decrementing for loop that starts from the full length - 1
	for i in range((int(len(text) - 1) ),-1 ,-1): # Iterate in reverse through string
		textReturn += text[i] # textrev = previous characters + new character

	# Return the backwards text
	return textReturn


text = input('What would you like to reverse: ') # This is the string to be reversed taken from clipboard
type(text) # User inputs a string to be reversed

# Let's reverse THIS

textReversed = reverseText(text) # Reverse string variable

print(textReversed) # Print the reversed string in the terminal

